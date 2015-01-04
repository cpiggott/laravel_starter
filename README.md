laravel_starter
===============

Basic laravel project with Auth and Bootstrap preinstalled.

This project also contains Bootstrap-3

jQuery


Configure 
You will need to reset your Application key

http://laravel-recipes.com/recipes/283/generating-a-new-application-key

Create the migration table


php artisan migrate:install

php artisan migrate:make create_users_table --create=users

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('username', 64);
            $table->string('password', 64);
            $table->string('email', 128);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}

php artisan migrate




Credits 

https://bitbucket.org/beni/laravel-4-tutorial/wiki/Add_Twitter-Bootstrap


