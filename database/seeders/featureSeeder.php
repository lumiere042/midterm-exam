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
            ['id' => 1, 'Feature Name' => 'Model', 'description' => 'In Laravel Model is simply your database table object. This allows you to interact with your database tables as if they are PHP objects or classes.'],
            ['id' => 2, 'Feature Name' => 'View', 'description' => 'Views are an essential part of the framework, allowing developers to define the structure and layout of the applications user interface.'],
            ['id' => 3, 'Feature Name' => 'Controller', 'description' => 'Controllers are an essential part of the MVC (Model-View-Controller) architecture. They handle the incoming HTTP requests and provide the necessary responses.'],
            ['id' => 4, 'Feature Name' => 'Routes', 'description' => 'Laravel routing is a powerful feature that allows you to define the URLs your application should respond to and the actions that should be taken when those URLs are accessed. '],
            ['id' => 5, 'Feature Name' => 'Middleware', 'description' => 'Acts as a bridge between an HTTP request and a response, providing a mechanism to filter and inspect incoming requests.'],
            ['id' => 6, 'Feature Name' => 'Blade Templates', 'description' => 'The templating engine provided with Laravel, designed to make it easy to create and manage views'],
            ['id' => 7, 'Feature Name' => 'Migrations', 'description' => 'A feature that allows developers to manage and version control their database schema.'],
            ['id' => 8, 'Feature Name' => 'Seeders', 'description' => 'Seeders are used to populate your database with initial data. This is particularly useful during development and testing. '],
            ['id' => 9, 'Feature Name' => 'Database', 'description' => 'A database is an organized collection of structured information, or data, typically stored electronically in a computer system.'],
            ['id' => 10, 'Feature Name' => 'Eloquent ORM', 'description' => 'Developers can work in Eloquent with multiple databases efficiently using an ActiveMethod implementation. '],
        ]);
    }
}
