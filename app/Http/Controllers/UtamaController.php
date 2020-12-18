<?php

namespace App\Http\Controllers;

class UtamaController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function about()
    {
        return view("about");
    }

    public function pricing()
    {
        return view("pricing");
    }

    public function portfolio()
    {
        return view("portfolio");
    }

    public function services()
    {
        return view("services");
    }

    
    public function team()
    {
        return view("team");
    }
    
    
    public function contact()
    {
        return view("contact");
    }
}