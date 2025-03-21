<?php

use App\Models\User;
use App\Models\Employer;

it('belongs to a user', function () { 
    $user = User::factory()->create(); 
    $employer = Employer::factory()->create([
        'user_id' => $user->id, 
    ]); 


    
    expect($employer->user->is($user))->toBeTrue(); 
});
 