<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User as Model;

class UserSeeder extends Seeder
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
                'login' => 'admin',
                'password' => 'password',
                'name' => 'Платонов Станислав Олегович',
                'email' => 'platonovso@dkre.org.rzd',
                'email_verified_at' => null,
                'role_id' => 1,
                'dkre_id' => 1,
                'position_id' => 1,
                'department_id' => 1,
            ]
        ]);

        $data->each(function ($item) {
            $model = new Model();
            $model->login = $item->login;
            $model->password = Hash::make($item->password);
            $model->name = $item->name;
            $model->email = $item->email;
            $model->role_id = $item->role_id;
            $model->dkre_id = $item->dkre_id;
            $model->position_id = $item->dkre_id;
            $model->department_id = $item->department_id;

            $model->remember_token = Str::random(10);
            $model->save();
        });
    }
}
