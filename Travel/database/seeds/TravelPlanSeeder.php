<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('travelplans')->insert([
            'user_id' => 1,
            'title' => '日帰り宮城プラン',
            'introduction' => '宮城牛を堪能するプランです',
            'price' => 3000,
            'area' => '関西地方',
            'place' => '宮城',
            'category' => '日帰り',
            'travel_img01' => '宮城写真01',
            'travel_img02' => '宮城写真02',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
