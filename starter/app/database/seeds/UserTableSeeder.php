<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        // to use non Eloquent-functions we need to unguard
        Eloquent::unguard();

        // All existing users are deleted !!!
        DB::table('users')->delete();

        // add user using Eloquent
        $user = new User;
        $user->username = 'admin';
        $user->email = 'admin@localhost';
        $user->password = Hash::make('password');
        $user->save();

        
        User::create(array(
            'username'  => 'Chris Piggott',
            'password'  => Hash::make('12345678'),
            'email'     => 'nullrefexc@gmail.com'
        ));
        
    }
}