<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'E-Commerce Website',
                'description' => 'Aplikasi e-commerce lengkap dengan sistem pembayaran dan manajemen produk',
                'tech' => ['Laravel', 'MySQL', 'Bootstrap'],
                'image' => 'project1.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Aplikasi manajemen tugas dengan fitur kolaborasi tim',
                'tech' => ['Vue.js', 'Laravel API', 'PostgreSQL'],
                'image' => 'project2.jpg',
                'link' => '#'
            ],
            [
                'title' => 'Company Profile',
                'description' => 'Website profil perusahaan dengan CMS admin panel',
                'tech' => ['PHP', 'MySQL', 'jQuery'],
                'image' => 'project3.jpg',
                'link' => '#'
            ]
        ];

        $skills = [
            ['name' => 'PHP', 'level' => 90],
            ['name' => 'Laravel', 'level' => 85],
            ['name' => 'JavaScript', 'level' => 80],
            ['name' => 'MySQL', 'level' => 85],
            ['name' => 'Vue.js', 'level' => 75],
            ['name' => 'Bootstrap', 'level' => 90]
        ];

        return view('portfolio', compact('projects', 'skills'));
    }

        public function proyek()
    {
        $projects = [
            [
                'title' => 'SEHATI App',
                'description' => 'Aplikasi e-commerce lengkap dengan sistem pembayaran dan manajemen produk',
                'tech' => ['Laravel', 'MySQL', 'Flutter', 'UML', 'AWS', 'Flask','Railway Deploy Service'],
                'image' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/images/Sehati.jpg',
                'link' => 'https://sehatiapp-production.up.railway.app/'
            ],
            [
                'title' => 'Stacking Machine Learning',
                'description' => 'Aplikasi manajemen tugas dengan fitur kolaborasi tim',
                'tech' => ['XGBoost', 'Random Forest', 'Machine Learning'],
                'image' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/paperr.png',
                'link' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/Paper.pdf'
            ],
            [
                'title' => 'Design System Aplikasi Internal',
                'description' => 'Website profil perusahaan dengan CMS admin panel',
                'tech' => ['Figma'],
                'image' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/images/Design.png',
                'link' => '#'
            ],
            [
                'title' => 'Test Case Production Dummy',
                'description' => 'Contoh TCP Dummy dengan bug report manual',
                'tech' => ['-'],
                'image' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/images/tcp.png',
                'link' => 'https://amazon-datazone-sehatiapp.s3.ap-southeast-1.amazonaws.com/public/TCP.xlsx'
            ],
            
        ];
        
        return view('proyek', compact('projects'));
    }
}