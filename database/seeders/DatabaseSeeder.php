<?php

namespace Database\Seeders;

use Database\Seeders\CategoriaspSeeder;
use Database\Seeders\CategoriasSeeder;
use Database\Seeders\PaginasEstaticasSeeder;
use Database\Seeders\RedesSocialesSeeder;
use Database\Seeders\RolSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolSeeder::class,
            RedesSocialesSeeder::class,
            CategoriasSeeder::class,
            CategoriaspSeeder::class,
            PaginasEstaticasSeeder::class,
            PostsSeeder::class,
        ]);
        $rol = \App\Models\Rol::where('nombre', 'Superadmin')->first();
        \App\Models\User::create([
            'id' => 1,
            'rol_id' => $rol->id,
            'username' => 'Desarrollador',
            'email' => 'administrador@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);

        $rol = \App\Models\Rol::where('nombre', 'Community Manager')->first();
        \App\Models\User::create([
            'id' => 3,
            'rol_id' => $rol->id,
            'username' => 'Jon doe',
            'email' => 'communitymanager@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);

        $rol = \App\Models\Rol::where('nombre', 'Moderador')->first();
        \App\Models\User::create([
            'id' => 4,
            'rol_id' => $rol->id,
            'username' => 'Carla doe',
            'email' => 'moderador@gmail.com',
            'password' => Hash::make('admin'), // password
        ]);
    }
}
