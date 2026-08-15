<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

// Mock Workshops Data Array
$workshops = [
    [
        'id' => 1,
        'title' => 'Mastering Tailwind CSS & Modern Blade Components',
        'category' => 'Frontend',
        'instructor' => 'Ali Abdelaziz',
        'date' => 'Aug 20, 2026',
        'level' => 'Intermediate',
        'description' => 'Learn how to build reusable Blade component libraries and modern Apple-style UI.'
    ],
    [
        'id' => 2,
        'title' => 'Laravel 11 Fundamentals & Architecture',
        'category' => 'Backend',
        'instructor' => 'Eng. Ahmed Taha',
        'date' => 'Aug 25, 2026',
        'level' => 'Beginner',
        'description' => 'Deep dive into Laravel request lifecycle, routing, layouts, and Blade slots.'
    ]
];

// Home
Route::get('/', function () use ($workshops) {
    return view('home', [
        'workshops' => $workshops
    ]);
});

// All Workshops
Route::get('/workshops', function () use ($workshops) {
    return view('workshops', [
        'workshops' => $workshops
    ]);
});

// Workshop Details
Route::get('/workshops/{id}', function ($id) use ($workshops) {
    $workshop = Arr::first(
        $workshops,
        fn($item) => $item['id'] == $id
    );

    if (!$workshop) {
        abort(404);
    }

    return view('workshop', [
        'workshop' => $workshop
    ]);
});

// About
Route::get('/about', function () {
    return view('about');
});

// Contact
Route::get('/contact', function () {
    return view('contact');
});
