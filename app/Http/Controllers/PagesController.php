<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //create a method
    public function index(){
        $title = "Welcome To Laravel!";
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "Welcome TO About Us";
        return view('pages.about')->with('title', $title);
    }
    public function services(){
       $data = array(
           'title' => 'Services!',
           'services' => ['Web Design!', 'Programming', 'SEO']

       );
        return view('pages.services')->with($data);
    }
    public function contacts(){
        $title = "This Is Contacts";
        return view('pages.contacts')->with('title', $title);
    }
    public function donate(){
        $title = "This Is Contacts";
        return view('pages.donate')->with('title', $title);
    }
    public function biography(){
        $title = "This Is Contacts";
        return view('pages.biography')->with('title', $title);
    }
    public function biography1(){
        $title = "This Is Contacts";
        return view('pages.biography1')->with('title', $title);
    }
    public function biography2(){
        $title = "This Is Contacts";
        return view('pages.biography2')->with('title', $title);
    }
    public function biography3(){
        $title = "This Is Contacts";
        return view('pages.biography3')->with('title', $title);
    }

    public function agri(){
        $title = "This Is Contacts";
        return view('servicepages.agri')->with('title', $title);
    }
    public function climatechangemitigation(){
        $title = "This Is Contacts";
        return view('servicepages.climatechangemitigation')->with('title', $title);
    }
    public function cosumap(){
        $title = "This Is Contacts";
        return view('servicepages.cosumap')->with('title', $title);
    }
    public function enviprosi(){
        $title = "This Is Contacts";
        return view('servicepages.enviprosi')->with('title', $title);
    }
    public function forestryconservation(){
        $title = "This Is Contacts";
        return view('servicepages.forestryconservation')->with('title', $title);
    }
    public function infrastructure(){
        $title = "This Is Contacts";
        return view('servicepages.infrastructure')->with('title', $title);
    }
    public function manufacturingindustry(){
        $title = "This Is Contacts";
        return view('servicepages.manufacturingindustry')->with('title', $title);
    }
    public function mining(){
        $title = "This Is Contacts";
        return view('servicepages.mining')->with('title', $title);
    }
    public function oilandgas(){
        $title = "This Is Contacts";
        return view('sevicepages.oilandgas')->with('title', $title);
    }
    public function solar(){
        $title = "This Is Contacts";
        return view('servicepages.solar')->with('title', $title);
    }
    public function solidwastemanagement(){
        $title = "This Is Contacts";
        return view('servicepages.solidwastemanagement')->with('title', $title);
    }
    public function waterbodyprotection(){
        $title = "This Is Contacts";
        return view('sevicepages.waterbodyprotection')->with('title', $title);
    }
    public function wildlife(){
        $title = "This Is Contacts";
        return view('servicepages.wildlife')->with('title', $title);
    }
   
}
