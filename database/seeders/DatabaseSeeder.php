<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => 'airaraung2024*',
        ]);

        Home::create([
            'tagline' => 'Kopi Bubuk Berkualitas untuk Hari yang Lebih Baik',
            'video' => 'video/kopi.mp4'
        ]);

        About::create([
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quas voluptate debitis! Minima unde aliquid ab enim ipsam, esse quos repellendus atque velit doloribus quasi culpa, sapiente vitae cumque harum quae? Nihil labore, nulla, est, maxime architecto expedita minima et facilis sequi placeat iusto eius blanditiis incidunt commodi iure officia aut earum minus quas. Adipisci aliquam obcaecati commodi similique atque dolor voluptatem unde mollitia beatae. Molestiae, qui saepe doloribus asperiores ex quo blanditiis unde recusandae nihil beatae veritatis rerum quod praesentium tempore aperiam voluptatem dolor corporis laboriosam quibusdam non? Sequi ratione doloremque beatae id deserunt veritatis.',
            'image' => 'About.jpeg'
        ]);

        Product::create([
            'image' => 'product.png',
            'name' => 'Arabika Signature',
            'price' => '100.000',
            'detail_product' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quas voluptate debitis! Minima unde aliquid ab enim ipsam, esse quos repellendus atque velit doloribus quasi culpa, sapiente vitae cumque harum quae? Nihil labore, nulla, est, maxime architecto expedita minima et facilis sequi placeat iusto',
        ]);

        Contact::create([
            'address' => 'JL. ABC No.123',
            'no_wa' => '081234567890'
        ]);
    }
}
