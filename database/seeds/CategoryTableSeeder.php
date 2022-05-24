<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'politica',
            'avventura',
            'sport',
            'attualità',
            'environments',
            'social',
        ];

        for ($i=0; $i < count($categories); $i++) { 
            $newCategory = new Category();
            $newCategory->name = $categories[$i];
            $newCategory->save();
        }
    }
}
