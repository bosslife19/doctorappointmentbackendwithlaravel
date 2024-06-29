<?php

namespace App\Livewire;

use App\Models\Specialties;
use Livewire\Component;

class EditSpecialtyForm extends Component
{
    public $specialty_id;
    public $name;
    
    public function mount($specialty_id){
        $this->specialty_id = Specialties::find($specialty_id);
        $this->name = $this->specialty_id->specialty_name;
    }

    public function update(){
        $this->validate(['name'=>'required']);

        $update = $this->specialty_id;

        $update->update(['specialty_name'=>$this->name]);

        session()->flash('message', 'specialty updated successfully');

        return $this->redirect('/admin/specialties', navigate:true);
    }
    public function render()
    {
        return view('livewire.edit-specialty-form');
    }
}
