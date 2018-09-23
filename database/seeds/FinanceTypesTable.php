<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceTypesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('finance_types')->insert([
            'name' => 'infaq jumat',
            'status' => 'Aktif'
            ]);
    }
}
