<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){

        $doctors = Doctor::with('category')->get();
        
        
        return response($doctors, 200);
    }
}
