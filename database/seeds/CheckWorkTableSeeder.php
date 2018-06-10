<?php

use Illuminate\Database\Seeder;
use App\Models\CheckWork;

class CheckWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $false_data = factory(CheckWork::class)->times(50)->make();
        CheckWork::insert($false_data->toArray());
    }
}
