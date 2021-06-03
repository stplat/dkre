<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Permission as Model;

class PermissionSeeder extends Seeder
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
                'name' => 'Просматривать страницу с пользователями',
                'slug' => 'view-users',
            ],
            (object)[
                'name' => 'Просматривать раздел с финансированием',
                'slug' => 'view-section-finance',
            ],
            (object)[
                'name' => 'Просматривать раздел с бюджетом',
                'slug' => 'view-section-budget',
            ],
            (object)[
                'name' => 'Просматривать раздел со складскиими запасами',
                'slug' => 'view-section-warehouse',
            ],
            (object)[
                'name' => 'Редактировать бюджет',
                'slug' => 'edit-budget',
            ],
            (object)[
                'name' => 'Загружать бюджет',
                'slug' => 'upload-budget',
            ],
            (object)[
                'name' => 'Редактировать вовлечение',
                'slug' => 'edit-involvement',
            ],
            (object)[
                'name' => 'Загружать вовлечение',
                'slug' => 'upload-involvement',
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
