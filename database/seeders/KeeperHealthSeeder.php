<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeeperHealthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keeperHeathsJson = collect(
            json_decode(
                file_get_contents('json/keeper-healths.json', FILE_USE_INCLUDE_PATH), true
            )
        );
        $keeperHeathsData = $keeperHeathsJson->map(function ($item) {
            $item['date'] = date('Y-m-d', $item['created'] / 1000);
            unset($item['created']);
            return $item;
        })->toArray();

        DB::table('keeper_healths')->insert($keeperHeathsData);
    }
}
