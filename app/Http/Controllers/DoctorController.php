<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

 public function loadDoctorDashboard(){

    return view('doctor.dashboard');
 }
















    public function index(){

        $doctors = Doctor::with('category')->get();
        
        
        return response($doctors, 200);
    }

    public function getDoctorsByCategory($category){


    $doctor = new Doctor();

   $doctors = Category::with('doctors')->where('name', $category)->get();


  
   

      return response($doctors, 200);

    


    }


}
