<?php

use Illuminate\Database\Seeder;
use App\Classroom;


class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classrooms = [22,23,24,26,55,88];
        foreach($classrooms as $classroom){
            $clroom = new Classroom();
            $clroom->number = $classroom;
            $clroom->save();
        }
    }
}
