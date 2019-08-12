<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [];
        for ($num = 0; $num < 999; $num++) {
            $students[] = [
                'first_name' => Str::random(6),
                'last_name' => Str::random(6)
            ];
        }
        $students[] = [
            'first_name' => 'John',
            'last_name' => 'Doe'
        ];
        DB::table('students')->insert($students);
    }
}
