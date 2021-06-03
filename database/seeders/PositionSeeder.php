<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Position as Model;

class PositionSeeder extends Seeder
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
                'name' => 'Руководитель отдела (сектора)',
            ],
            (object)[
                'name' => 'Специалист отдела (сектора)',
            ]
        ]);

        $data->each(function ($item) {
            $model = new Model();
            $model->name = $item->name;

            $model->save();
        });
    }
}
