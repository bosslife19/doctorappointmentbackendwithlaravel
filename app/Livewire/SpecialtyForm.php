<?php

namespace App\Livewire;

use App\Models\Specialties;
use Livewire\Component;

class SpecialtyForm extends Component
{
    public $name = '';
    public function save(){
        $this->validate([
            'name'=>'required',
        ]);

        // save to db


        

        $save = new Specialties();
        $save->specialty_name = $this->name;

        $save->save();

        session()->flash('message', 'specialty created successfully');
        return $this->redirect('/admin/specialties', navigate:true);


    }
    public function render()
    {
        return view('livewire.specialty-form');
    }
}
