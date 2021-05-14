<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;

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
            ]
        ]);

        $data->each(function ($item) {
            $user = new User();
            $user->login = $item->login;
            $user->password = Hash::make($item->password);
            $user->name = $item->name;
            $user->email = $item->email;
            $user->role_id = $item->role_id;
            $user->dkre_id = $item->dkre_id;

            $user->remember_token = Str::random(10);
            $user->created_at = now();
            $user->updated_at = now();
            $user->save();
        });
    }
}
