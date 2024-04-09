<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' =>[
            [   
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '30k'
            ],
            [
                'id' => 2,
                'title' => 'Web Designer',
                'salary' => '25k'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'salary' => '40k'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [   
            'id' => 1,
            'title' => 'Web Developer',
            'salary' => '30k'
        ],
        [
            'id' => 2,
            'title' => 'Web Designer',
            'salary' => '25k'
        ],
        [
            'id' => 3,
            'title' => 'Project Manager',
            'salary' => '40k'
        ]
        ];
    $job = Arr::first($jobs, fn($value) => $value['id'] == $id);
    //dd($job); // die and dump use to check the variable is it successfully pass or not

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
