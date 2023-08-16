<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'slug' => 'code-review',
                'name' => 'Rode review',
            ],
            [
                'slug' => 'eloquent',
                'name' => 'Eloquent',
            ],
            [
                'slug' => 'facade',
                'name' => 'Facade',
            ],
            [
                'slug' => 'general',
                'name' => 'General',
            ],
            [
                'slug' => 'javascrip',
                'name' => 'Javascrip',
            ],
            [
                'slug' => 'javascrip',
                'name' => 'Javascrip',
            ],
            [
                'slug' => 'mix',
                'name' => 'Mix',
            ],
            [
                'slug' => 'query-builder',
                'name' => 'Query builder',
            ],
            [
                'slug' => 'request',
                'name' => 'Request',
            ],
            [
                'slug' => 'servers',
                'name' => 'Servers',
            ],
            [
                'slug' => 'testing',
                'name' => 'Testing',
            ],
            [
                'slug' => 'vite',
                'name' => 'Vite',
            ],
        ]);
    }
}
