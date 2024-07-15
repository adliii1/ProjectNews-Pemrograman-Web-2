<?php

namespace Database\Seeders;

use App\Models\Category;
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
                'nameCategories' => "Web Development",
                'slug' => "web-development",
            ],
            [
                'nameCategories' => "Mobile Development",
                'slug' => "mobile-development",
            ],
            [
                'nameCategories' => "Design UI UX",
                'slug' => "design-ui-ux",
            ],
            [
                'nameCategories' => "Technology & Software",
                'slug' => "technology-software",
            ],
        ]);

        // Category::create([
        //     'nameCategories' => "Web Development",
        //     'slug' => "web-development",
        // ]);

        // Category::create([
        //     'nameCategories' => "Mobile Development",
        //     'slug' => "mobile-development",
        // ]);

        // Category::create([
        //     'nameCategories' => "Design UI UX",
        //     'slug' => "design-ui-ux",
        // ]);

        // Category::create([
        //     'nameCategories' => "Technology & Software",
        //     'slug' => "technology-software",
        // ]);
    }
}
