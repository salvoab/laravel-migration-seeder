<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 12; $i++) { 
            $student = new Student();
            $student->name = $faker->firstName();
            $student->lastname = $faker->lastName;
            $student->email = $faker->email;
            $student->phone = $faker->phoneNumber;
            $student->dob = $faker->date('Y-m-d');
            $student->save();
        }
    }
}
