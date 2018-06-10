<?php

use Illuminate\Database\Seeder;
use App\Models\App;

class AppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $false_data = factory(App::class)->times(50)->make();
        App::insert($false_data->toArray());
    }
}
