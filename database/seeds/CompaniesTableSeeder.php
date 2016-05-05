<?php

use Illuminate\Database\Seeder;
use Sexport\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([]);
    }
}
