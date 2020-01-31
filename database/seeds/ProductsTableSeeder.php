<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Big Melons',
            'flavor' => 'Melon Shake',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'bigmelons.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Black Label',
            'flavor' => 'Black Label',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'blacklabel.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Blizzard',
            'flavor' => 'Blizzard',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'blizzard.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Blue Leaf',
            'flavor' => 'Blue Leaf',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'blueleaf.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Breakfast in Bed',
            'flavor' => 'Breakfast in Bed',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'breakfastinbed.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Candy Craze',
            'flavor' => 'Candy Craze',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'candycraze.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Chichi',
            'flavor' => 'Chichi',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'chichi.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Concubine',
            'flavor' => 'Concubine',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'concubine.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Dvine',
            'flavor' => 'Dvine',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'dvine.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Green Label',
            'flavor' => 'Green Label',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'greenlabel.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Kiwiki',
            'flavor' => 'Kiwiki',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'kiwiki.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Lychee',
            'flavor' => 'Lychee',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'lychee.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Mango Tango',
            'flavor' => 'Mango Tango',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'mangotango.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Morning Wood',
            'flavor' => 'Morning Wood',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'morningwood.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Peaches',
            'flavor' => 'Peaches',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'peaches.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Grand Master',
            'flavor' => 'Grand Master',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'bigmelons.png',
            'created_at' => now(),

            ]);

        Product::create([
            'name' => 'Zooka',
            'flavor' => 'Zooka',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'blacklabel.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Havoc',
            'flavor' => 'Havoc',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'blizzard.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Quatro',
            'flavor' => 'Quatro',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'blueleaf.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Yummy Gummy',
            'flavor' => 'Yummy Gummy',
            'maker' => 'The Puff Stuff',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'price' => '250',
            'size' => '60ML',
            'strength' => '12MG',
            'quantity' => '100',
            'display_image' => 'breakfastinbed.png',
            'created_at' => now(),
            ]);


    }
}
