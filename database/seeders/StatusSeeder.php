<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert(
            [[
                'code' => 'SH',
                'name' => 'Scheduled',
                'created_at' => now()
            ],
            [
                'code' => 'AT',
                'name' => 'Active',
                'created_at' => now()
            ],
            [
                'code' => 'IV',
                'name' => 'Invoicing',
                'created_at' => now()
            ],
            [
                'code' => 'PC',
                'name' => 'To Priced',
                'created_at' => now()
            ],
            [
                'code' => 'CT',
                'name' => 'Completed',
                'created_at' => now()
            ]]
        );
    }
}
