<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $cats = factory(App\ProductCategory::class, 3)->create()->each(function ($cat) {
            factory(App\ProductCategory::class, 5)->create([
                'parent_id' => $cat->id,
            ]);
        });
        factory(App\User::class, 50)->create()->each(function ($user) use($cats) {
            factory(App\Product::class, 2)->create([
                'user_id' => $user->id,
                'category_id' => $cats->random()->id,
            ]);
        });

    }
}
