<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Dkre;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            (object)[
                'name' => 'ОКТ',
                'dkre_id' => 1,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'МОСК',
                'dkre_id' => 1,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ГОРЬК',
                'dkre_id' => 1,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'СЕВ',
                'dkre_id' => 1,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'СКАВ',
                'dkre_id' => 2,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ЮВОСТ',
                'dkre_id' => 3,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ПРИВ',
                'dkre_id' => 4,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'КБШ',
                'dkre_id' => 4,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'СВЕРД',
                'dkre_id' => 5,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ЮУРАЛ',
                'dkre_id' => 5,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ЗСИБ',
                'dkre_id' => 6,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'КРАС',
                'dkre_id' => 6,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ВСИБ',
                'dkre_id' => 7,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ЗАБ',
                'dkre_id' => 7,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'ДВОСТ',
                'dkre_id' => 7,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'Собственно',
                'dkre_id' => 8,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'name' => 'МЭЗ',
                'dkre_id' => 9,
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
        ]);

        $dkre = Dkre::all();

        $dkre->each(function ($item) {
        });

        $data->each(function ($item) {
            $region = new Region();
            $region->name = $item->name;
            $region->dkre_id = $item->dkre_id;
            $region->save();
        });
    }
}
