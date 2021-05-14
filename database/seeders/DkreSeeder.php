<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Dkre;

class DkreSeeder extends Seeder
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
                'be' => '3912',
                'name' => 'ДКРЭ_ОКТ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3913',
                'name' => 'ДКРЭ_С-КАВ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3914',
                'name' => 'ДКРЭ_Ю-ВОСТ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3915',
                'name' => 'ДКРЭ_КБШ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3916',
                'name' => 'ДКРЭ_СВЕРД',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3917',
                'name' => 'ДКРЭ_З-СИБ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3918',
                'name' => 'ДКРЭ_ЗАБ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3990',
                'name' => 'ДКРЭ соб.',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ],
            (object)[
                'be' => '3991',
                'name' => 'ДКРЭ_ЭМЗ',
                'created_at' => now()->format('Y-m-d H:i:s'),
                'updated_at' => now()->format('Y-m-d H:i:s'),
            ]
        ]);

        $data->each(function ($item) {
            $dkre = new Dkre();
            $dkre->be = $item->be;
            $dkre->name = $item->name;
            $dkre->save();
        });
    }
}
