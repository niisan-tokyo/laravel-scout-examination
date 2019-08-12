<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [];
        for ($num = 0; $num < 999; $num++) {
            $items[] = [
                'name' => Str::random(6)
            ];
        }
        $items[] = ['name' => '鉛筆'];
        DB::table('items')->insert($items);
    }
}
