<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CreateRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'region_name' => 'Extrême-Nord',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Nord',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Adamaoua',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Nord-Ouest',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Sud-Ouest',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Ouest',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Littoral',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Centre',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Est',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('regions')->insert([
            'region_name' => 'Sud',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
