<?php

use Illuminate\Database\Seeder;
use App\Models\EarnRecord;

class EarnRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $false_data = factory(EarnRecord::class)->times(50)->make();
        EarnRecord::insert($false_data->toArray());
    }
}
