<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $siteName = 'KursusKu';
        $featured = [
            [
                'code' => 'WEB-01', 
                'name' => 'Web Dasar', 
                'description' => 'Belajar struktur HTML dan CSS dasar.', 
                'price' => 'Rp 200.000', 
                'start' => '21-09-2026', 
                'quota' => 18
            ],
            [
                'code' => 'PHP-01', 
                'name' => 'PHP Dasar', 
                'description' => 'Belajar variabel, function, form, dan logika PHP.', 
                'price' => 'Rp 250.000', 
                'start' => '22-09-2026', 
                'quota' => 12
            ],
            [
                'code' => 'LAR-01', 
                'name' => 'Laravel Fundamental', 
                'description' => 'Belajar route, controller, Blade, dan MVC.', 
                'price' => 'Rp 350.000', 
                'start' => '28-09-2026', 
                'quota' => 0
            ],
        ];

        return view('home', compact('siteName', 'featured'));
    }
}