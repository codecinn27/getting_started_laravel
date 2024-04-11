<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');

    // $job = Job::all();
    // dd($job[0]->title);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id)  {
    $job = Job::find($id); //3.
    //2. $job = Arr::first(Job::all(), fn($value) => $value['id'] == $id);
    //1. dd($job); // die and dump use to check the variable is it successfully pass or not

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function(){
    return view('test', ['boo' => true]);//pass it as an associative array
});
