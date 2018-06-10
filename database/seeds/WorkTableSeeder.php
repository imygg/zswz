<?php

use Illuminate\Database\Seeder;
use App\Models\Work;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $false_data = factory(Work::class)->times(50)->make();
        Work::insert($false_data->toArray());
    }
}
