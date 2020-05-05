<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = array(
        [  
         'name' => 'Esteban',
         'rol' => 'admin',
         'email' => 'esteban.martinez2011@hotmail.com',
         'password' => \Hash::make('123456'),
         'Direccion' => 'Manzana B casa#10',
         'created_at' => new DateTime,
         'updated_at' => new DateTime
        ],
        [
            'name' => 'Sofia',
            'rol' => 'user',
            'email' => 'sofia.sanalf@gmail.com',
            'password' => \Hash::make('123456'),
            'Direccion' => 'Manzana B casa#10',
            'created_at' => new DateTime,
            'updated_at' => new DateTime 
        ],
        [
            'name' => 'Brayan',
            'rol' => 'vendedor',
            'email' => 'molisanta21@gmail.com',
            'password' => \Hash::make('123456'),
            'Direccion' => 'Manzana B casa#10',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ],

        );
        User::insert($data);
    }
}
