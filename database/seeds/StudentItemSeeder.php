<?php

use App\Entities\Item;
use App\Entities\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sids = Student::all()->pluck('id')->all();
        $iids = Item::all()->pluck('id');
        
        $data = [];
        foreach ($sids as $sid) {
            $random_ids = $iids->random(mt_rand(2, 4))->all();
            foreach ($random_ids as $iid) {
                $data[] = [
                    'student_id' => $sid,
                    'item_id' => $iid,
                ];
            }
        }

        DB::table('item_student')->insert($data);
    }
}
