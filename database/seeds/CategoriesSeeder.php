<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languagesArr = [
            'HTML','CSS','PHP','JavaScript'
        ];
        foreach ($languagesArr as $language) {
            $new_category = new Category();
            $new_category->name = $language;
            $new_category->save();
        }
    }
}
