<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Course::factory(18)->hasAttached($tags)->create(new Sequence([
            'featured' => false, 
            'schedule' => 'Available'
        ], [
            'featured' => true, 
            'schedule' => 'Upcoming', 
        ]));
    }
}
