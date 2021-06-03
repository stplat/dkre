<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Role as Model;

class RoleSeeder extends Seeder
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
                'name' => 'Администратор',
                'slug' => 'admin',
            ],
            (object)[
                'name' => 'Финансист',
                'slug' => 'financier',
            ],
            (object)[
                'name' => 'Снабженец',
                'slug' => 'supplier',
            ],
            (object)[
                'name' => 'Закупщик',
                'slug' => 'buyer',
            ],
        ]);

        $data->each(function ($item) {
            $model = new Model();
            $model->name = $item->name;
            $model->slug = $item->slug;

            $model->save();
        });
    }
}
