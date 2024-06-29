<?php

namespace App\Livewire;

use App\Models\Specialties;
use Livewire\Component;

class SpecialtiesComponent extends Component
{
   public function delete($specialty_id){
   $specialty = Specialties::find($specialty_id);

   $specialty->delete();
    
   return session()->flash('message', 'Specialty deleted successfully');

   
   }
    public function render()
    {
        return view('livewire.specialties-component', ['specialties'=>Specialties::all()]);
    }
}
