<?php

use Illuminate\Database\Seeder;
use App\Models\DrawRecord;

class DrawRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $false_data = factory(DrawRecord::class)->times(50)->make();
        DrawRecord::insert($false_data->toArray());
    }
}
