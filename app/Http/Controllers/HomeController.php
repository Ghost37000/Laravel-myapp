<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Page/vue home
    public function home(){
        return view('home.home');
    }

        //Page/vue about
        public function about(){
            return view('home.about');
        }

                //Page/vue dashboard
                public function dashboard(){
                    return view('home.dashboard');
                }
}
