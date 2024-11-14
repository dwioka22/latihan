<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{   
    function about() {
        $title = 'tentang saya';

        $data = [
            'nama' => 'WELCOME ',
            'alamat' => 'Jl. Dalung No.16, Denpasar Bali',
            'telp' => '08131313131',
            'email' => 'dwiokawedanta22.com',
            'instagram' => 'dwioka22',
            'items' => [
                [
                    'icon' => 'fab fa-linkedin-in',
                    'link' => 'google.com'
                ],
                [
                    'icon' => 'fab fa-facebook',
                    'link' => 'google.com'
                ],
                [
                    'icon' => 'fab fa-yahoo',
                    'link' => 'google.com'
                 ] ,
                [
                     'icon' => 'fab fa-tiktok',
                     'link' => 'google.com'
                ],
                 [
                     'icon' => 'fab fa-instagram',
                     'link' => 'google.com'
                ],
               
            ]

        ];
         return view('frontend.page.about.index',[
             'title_page' => $title,
             'data' => $data

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

     function education () {
        $title = 'perintah saya';
         return view('frontend.page.education.index',[
             'title_page' => $title
         ]);
         
    } 

     

     function interests  () {
        $title = 'kelakuan saya';
         return view('frontend.page.interests.index',[
             'title_page' => $title
         ]);
         
    } 
    function skill () {
        $title  = 'skill';
        $title2 = 'keahilan saya miliki';
        $title3 = 'keahlian sebgia berikut';
        $data   = [
            'head' => [
                [
                    'nama' => 'Computer Program',
                    'devisi' => 'Wellcome',
                    'komputer' => [
                        'Akuntansi','payrol'
                    ]
                ],
                [
                    'nama' => 'Computer Program',
                    'devisi' => 'Wellcome',
                    'pajak' => [
                        'konsultasi','payrol'
                    ]
                ],
                 [
                    'nama' => 'Computer Program',
                    'devisi' => 'Wellcome',
                    'pajak' => [
                        'konsultasi','payrol'
                    ]
                ],
            ],
        ];

        return view('frontend.page.skill.index',[
             'title_page' => $title,
             't2'         => $title2,
             't3'         => $title3,
             'data'       => $data,
         ]);
         
    } 

     

}
