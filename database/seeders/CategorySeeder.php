<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' =>'Web',
            'describe' => 'Both Frontend and Backend',
            ]);
        Category::create([
            'name' =>'Mobile',
            'describe' => 'Android',
            ]);
        Category::create([
            'name' =>'Desctop',
            'describe' => 'Desctop Apps',
            ]);
    }
}
