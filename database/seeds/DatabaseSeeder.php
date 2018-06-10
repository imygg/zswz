<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            AppTableSeeder::class,
            CheckWorkTableSeeder::class,
            DrawRecordTableSeeder::class,
            EarnRecordTableSeeder::class,
            MoneyTableSeeder::class,
            MyWorkTableSeeder::class,
            UserTableSeeder::class,
            WorkTableSeeder::class,
        ]);

        Model::reguard();
    }
}
