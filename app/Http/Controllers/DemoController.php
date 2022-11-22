<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
class DemoController extends Controller
{
    public function Test(){
        return view('test');
    }

    public function ContactPage(){
        return view('contact');
    }

    public function AboutPage(){
        return view('about');
    }
    public function IndexPage(){
        return view('welcome');
    }
}
