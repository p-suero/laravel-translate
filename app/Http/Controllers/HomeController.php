<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    // public function index() {
    //     App::setLocale("it");
    //     return view("home");
    // }
    //
    // public function contatti() {
    //     App::setLocale("it");
    //     return trans("messages.contacts");
    // }

    public function index() {
        return view("home");
    }

    public function contatti() {
        return view("contact");
    }
}
