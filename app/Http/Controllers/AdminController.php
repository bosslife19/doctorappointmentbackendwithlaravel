<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loadAdminDashboard(){

        return view('admin.dashboard');
     }

     public function loadDoctorListing(){
        return view('admin.doctor-listing');
     }

     public function loadDoctorForm(){
     
        return view('admin.doctor-form');
     }

     public function loadAllSpecialties(){
      return view('admin.specialties');
     }

     public function loadSpecialtyForm(){
      return view('admin.specialty-form');
     }

     public function loadEditSpecialtyForm($id){

      return view('admin.edit-specialty-form', ['specialty_id'=>$id]);
     }
}
