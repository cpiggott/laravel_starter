laravel_starter
===============

A basic Laravel starter project with User authentification already built in.
    Project also includes Twitter Bootstrap-3 and jQuery.

It is recommended that you have some form of a LAMP server installed or at a minimum some form of a local MySQL Server.

Please follow the steps to confifure the project as there are a few important steps for the application to work!


Configure 

To use this project, you will need to first install Composer & Laravel.
    This guide will help you with the set-up of laravel and composer: http://laravel.com/docs/4.2/installation
    
    
After you have installed both Laravel and Composer, you will now want to clone this repo.

`git clone https://github.com/cpiggott/laravel_start.git`

Navigate into the `laravel_starter/starter` directory/folder and run the following command:

`$ php artisan key:generate` - This step is important!!! This resets the project key so that you can deploy.

At this point I would recommend opening the entire project in your favorite editor, Sublime Text has an open folder option that works fell for projects like this, using their open folder option at the root of the project. http://www.sublimetext.com/

Once you have done this, you will now want to set-up a connection to your database.

Using your text editor, open up the file `/app/config/database.php`

Here you will see the connection string for your database. I specifically used MySQL, you will want to change the MySQL connection information to suit your specific need. This can be seen at lines 55-64. 

`'mysql' => array(
			'driver'    => 'mysql',
			'host'      => '127.0.0.1',
			'database'  => 'starter',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
`

You can either change the database property of the array to match a database you already have, or you can create one using your personal MySQL client. If creating a new Database, call it your applicaiton name and change the database name in the config file.
Resource if needed: https://www.siteground.com/tutorials/phpmyadmin/phpmyadmin_create_database.htm

Once you have configured your MySQL Database, we will need to run a migration to add the Users table to the database.

Check the file  `../app/database/migrations/2015_01_04_085421_create_users_table.php` exists and looks like the file below.

`<?php

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
}`

Once this is done, we will want to run the migration. This is done using the following command at the root of the application. `php artisan migrate`
More info about migrations can be found at: http://laravel.com/docs/4.2/migrations

Once this is done, you should be able to start the application and use it, to do so, run the following command, again at the root of the applicaiton:

`php artisan serve

If you have any questions, recommendations or would like to contribute please feel free to contract me through GitHub: cpiggott or nullrefexc on most social platforms.

Big thanks to:

Laravel - http://laravel.com
Bootstrap - http://getbootstrap.com/
jQuery - http://jquery.com/
User: beni@bitbucket.org - https://bitbucket.org/beni/laravel-4-tutorial/wiki/Add_Twitter-Bootstrap


