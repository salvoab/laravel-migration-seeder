<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = config('courses.all');
        foreach($courses as $course){
            $new_course = new Course();
            $new_course->name = $course['name'];
            $new_course->description = $course['description'];
            $new_course->save();
        }
    }
}
