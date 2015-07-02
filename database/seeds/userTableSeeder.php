// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'admin',
        'username' => 'admin',
        'email'    => 'moses@gizani.com',
        'password' => Hash::make('$Gizani123'),
    ));
}

}
