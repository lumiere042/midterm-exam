<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class featureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['id' => 1, 'Name' => 'Model', 'description' => 'In Laravel Model is simply your database table object. This allows you to interact with your database tables as if they are PHP objects or classes.'],
            ['id' => 2, 'Name' => 'View', 'description' => 'Views are an essential part of the framework, allowing developers to define the structure and layout of the applications user interface.'],
            ['id' => 3, 'Name' => 'Controller', 'description' => 'Controllers are an essential part of the MVC (Model-View-Controller) architecture. They handle the incoming HTTP requests and provide the necessary responses.'],
            ['id' => 4, 'Name' => 'Routes', 'description' => 'Laravel routing is a powerful feature that allows you to define the URLs your application should respond to and the actions that should be taken when those URLs are accessed. '],
            ['id' => 5, 'Name' => 'Middleware', 'description' => 'Acts as a bridge between an HTTP request and a response, providing a mechanism to filter and inspect incoming requests.'],
            ['id' => 6, 'Name' => 'Blade Templates', 'description' => 'The templating engine provided with Laravel, designed to make it easy to create and manage views'],
            ['id' => 7, 'Name' => 'Migrations', 'description' => 'A feature that allows developers to manage and version control their database schema.'],
            ['id' => 8, 'Name' => 'Seeders', 'description' => 'Seeders are used to populate your database with initial data. This is particularly useful during development and testing. '],
            ['id' => 9, 'Name' => 'Database', 'description' => 'A database is an organized collection of structured information, or data, typically stored electronically in a computer system.'],
            ['id' => 10, 'Name' => 'Eloquent ORM', 'description' => 'Developers can work in Eloquent with multiple databases efficiently using an ActiveMethod implementation. '],
        ]);
    }
}
