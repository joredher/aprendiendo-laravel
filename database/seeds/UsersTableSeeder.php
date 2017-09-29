<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("bs_users")->insert(array(
            'name' => 'Jorge Eduardo Hernández',
            'usernamer' => 'jeh',
            'email' => 'joredher30@gmail.com',
            'estado'=>'1',
            'id_rol'=>1,
            'password' => Hash::make('admin@2018') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}
