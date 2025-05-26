<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('index'); 
    }

    public function about()
    {
        return view('about'); 
    }

    public function pricing()
    {
        return view('pricing'); 
    }

    public function service()
    {
        return view('service'); 
    }

    public function contact()
    {
        return view('contact'); 
    }

    public function Login()
    {
        return view('Login'); 
    }
// app/Http/Controllers/WebController.php

    public function work()
    {
        return view('work'); 
    }


    public function caregiver()
    {
        return view('caregiver'); 
    }
    public function signin()
    {
        return view('signin'); 
    }




}
