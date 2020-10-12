<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() // Metodo para generar el administrador por defecto
    {
    	    $user1 = User::create([
            'name' => 'Administrador',
            'email' => 'admin@lca.com',
            'password' => bcrypt('admin123456789'),
        ]);
    	   $role1 = Role::create([
            'name' => 'administrador',
        ]);
    	    DB::table('role_user')->insert([
            'user_id' => $user1->id,
            'role_id' => $role1->id,
        ]);

    }
}
