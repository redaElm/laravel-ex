<?php

use Illuminate\Database\Seeder;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::truncate();
  
        User::create( [
            'email' => 'gamulmijo@gmail.com' ,
            'password' => Hash::make( 'd7870rt1' ) ,
            'name' => 'RedaRows',
            'type'=>'admin',

        ] );
    }
}
