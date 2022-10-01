<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userSuperadmin=User::create([
            'name' => 'admin alma',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'tipo' => '1',
            'codigo' => 'supadm',
        ]);
        $userAdmin=User::create([
            'name' => 'Juanito',
            'email' => 'juanito@gmail.com',
            'password' => Hash::make('12345'),
            'tipo' => '2',
            'codigo' => 'adm',
        ]);
        $useruser=User::create([
            'name' => 'Ivonne',
            'email' => 'minion@gmail.com',
            'password' => Hash::make('12345'),
            'tipo' => '3',
            'codigo' => 'use1',
        ]);

       /* $userAdmin=User::create([
            'name' => 'luna',
            'email' => 'luna@gmail.com',
            'password' => Hash::make('12345'),
            'tipo' => '2',
            'codigo' => 'adm',
        ]);*/
    }
}
