<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{   
    function about() {
        $title = 'tentang saya';
         return view('frontend.page.about.index',[
             'title_page' => $title
         ]);
         
    } 
    
    function exp() {
        $title = 'pengalaman saya';
         return view('frontend.page.exp.index',[
             'title_page' => $title
         ]);
         
    } 

     function awards () {
        $title = 'hidup saya';
         return view('frontend.page.awards.index',[
             'title_page' => $title
         ]);
         
    } 

     function skill () {
        $title = 'skil saya';
         return view('frontend.page.skill.index',[
             'title_page' => $title
         ]);
         
    } 
    
}
