<?php

use Illuminate\Database\Seeder;
use App\Models\Money;

class MoneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $false_data = factory(Money::class)->times(50)->make();
        Money::insert($false_data->toArray());
    }
}
