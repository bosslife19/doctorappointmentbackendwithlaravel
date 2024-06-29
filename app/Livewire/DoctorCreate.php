<?php

namespace App\Livewire;

use App\Models\Specialties;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class DoctorCreate extends Component
{
    public $specialties = '';

    public $name  = '';
    public $hospital_name  = '';
    public $email  = '';
    public $bio  = '';
    public $specialty_id;
    public $password  = '';
    public $twitter  = '';
    public $instagram  = '';

    public function mount(){
        $this->specialties = Specialties::all();
    }

    public function createDoctor(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'bio'=>'required',
            'hospital_name'=>'required',
            'specialty_id'=>'required',
            'password'=>'required|confirmed|min:4',
            'twitter'=>'string',
            'instagram'=>'string',
             'experience'=>'required'
        ]);
        // user table
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->name;
        $user->bio = $this->bio;
        $user->hospital_name = $this->hospital_name;
        $user->specialty_id = $this->specialty_id;
        $user->password = Hash::make($this->password);
        $user->twitter = $this->twitter;
        $user->instagram = $this->instagram;
        $user->role = 1;

        $user->save();
        

    }
    public function render()
    {
        return view('livewire.doctor-create');
    }
}
