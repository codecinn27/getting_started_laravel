<?php

use App\Models\Job; // Import the Job model if not already imported

it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('returns a successful response for /home', function () {
    $response = $this->get('/home');
    $response->assertStatus(200);
});

it('returns a successful response for /jobs', function () {
    $response = $this->get('/jobs');
    $response->assertStatus(200);
});

it('returns a successful response for /jobs/{id}', function () {
    // Assuming you have at least one job in the database
    $job = Job::first(); // Get the first job from the database
    $response = $this->get('/jobs/' . $job->id);
    $response->assertStatus(200);
});

it('returns a successful response for /contact', function () {
    $response = $this->get('/contact');
    $response->assertStatus(200);
});

it('returns a successful response for /test', function () {
    $response = $this->get('/test');
    $response->assertStatus(200);
});

