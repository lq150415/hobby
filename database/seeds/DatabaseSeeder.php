<?php

use Illuminate\Database\Seeder;
use hobby\User;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
          User::create([
            'name' => 'Luis Felipe',
            'lastname' => 'Quisbert',
            'lastnamesec' => 'Quispe',
            'role' => 'Administrador',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
          ]);
          $this->command->info('Usuario por defecto creado!');
          Model::reguard();
    }
}
