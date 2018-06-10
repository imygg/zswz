<?php

use Illuminate\Database\Seeder;
use App\Models\MyWork;

class MyWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $false_data = factory(MyWork::class)->times(50)->make();
        MyWork::insert($false_data->toArray());
    }
}
