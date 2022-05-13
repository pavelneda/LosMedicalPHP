<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main($lang = null){
        if ($lang === 'ru'){
            return view('ru.main');
        }else{
            return view('main');
        }
    }

    public function doctors($lang = null){
        if ($lang === 'ru'){
            return view('ru.doctors', ['doctors' => Doctor::all()]);
        }else{
            return view('doctors', ['doctors' => Doctor::all()]);
        }
    }

    public function contacts($lang = null){
        if ($lang === 'ru'){
            return view('ru.contacts');
        }else{
            return view('contacts');
        }
    }

    public function doctorInfo(Doctor $doctor){
        return view('doctorInfo')->with(['doctor' => $doctor]);
    }
}
