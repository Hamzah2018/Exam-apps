<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exam;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //    $table->id();
        // $table->string('name');
        // $table->text('describe')->nullable();
        // $table->foreignId('user_id');
        // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // $table->foreignId('categry_id');
        // $table->foreign('categry_id')->references('id')->on('categories')->onDelete('cascade');
        // $table->timestamps();
        Exam::create([
            'name' =>'html5',
            'describe' =>'Frontend Html5',
            'user_id' => 2,
            'categry_id' =>1,
            ]);

        Exam::create([
            'name' =>'Laravel10',
            'describe' =>'Backend Laravel',
            'user_id' => 2,
            'categry_id' => 1,
            ]);

        Exam::create([
            'name' =>'Flutter low level',
            'describe' =>'Bacic',
            'user_id' => 3,
            'categry_id' => 2,
            ]);

        Exam::create([
            'name' =>'Flutter High level',
            'describe' =>'Advance',
            'user_id' => 3,
            'categry_id' => 2,
            ]);
    }
}
