<?php

use App\Models\Employer;
use App\Models\Course;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $course = Course::factory()->create([
        'employer_id' => $employer->id, 
    ]); 

    expect($course->employer->is($employer))->toBeTrue(); 

});


it('can have tags', function () {
    $course = Course::factory()->create(); 

    $course->tag('Frontend'); 

    expect($course->tags)->toHaveCount(1); 
});