<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Department as Model;

class DepartmentSeeder extends Seeder
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
                'name' => 'Отдел координации поставок материально-технических ресурсов',
            ],
            (object)[
                'name' => 'Отдел экономики',
            ],
            (object)[
                'name' => 'Сектор финансовых расчетов',
            ],
            (object)[
                'name' => 'Технический отдел',
            ]
        ]);

        $data->each(function ($item) {
            $model = new Model();
            $model->name = $item->name;

            $model->save();
        });
    }
}
