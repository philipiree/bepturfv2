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
            'name' => 'Water Falls',
            'flavor' => 'Watermelon',
            'maker' => 'Drizzle',
            'description' => 'Be surprised with our apple and watermelon blend that will surely satisfy your
            fruity cravings.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'berrypom.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Skyrocket',
            'flavor' => 'Honeydew Melon',
            'maker' => 'Drizzle',
            'description' => '',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'skyrocket.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Bizky',
            'flavor' => 'Peanutbutter Cookies',
            'maker' => 'Drizzle',
            'description' => '',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'bizky.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Pomelonade',
            'flavor' => 'Pomelo',
            'maker' => 'Drizzle',
            'description' => 'Imagine sipping an ice-cold glass of freshly-squeeze pomelo witha a hint of mint.
            Our Pomelonade will take you to juicy goodness cloud ind just one puff.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'pomelonade.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Dazzler',
            'flavor' => 'Watermelon',
            'maker' => 'Drizzle',
            'description' => 'Our Dazzler will make you exhale the crisp of watermelon flavor that
            excite your palate before the sweetness dazzle your sweet tooth.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'dazzler.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Blueberry Waffle',
            'flavor' => 'Blueberry Waffle',
            'maker' => 'Drizzle',
            'description' => 'Sweeten your vaping experience with this outrageously delicios dessert
            treat with our Blueberry Waffle.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'blueberrywaffle.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Zetsu',
            'flavor' => 'Bubble Milktea',
            'maker' => 'Drizzle',
            'description' => 'Who does not love an awesome bubble milktea? This enticing sirl of loose-leaf tea
            will make your mouth water and wanting for more.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'zetsu.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Strawberry Shortcake',
            'flavor' => 'Strawberry Shortcake',
            'maker' => 'Drizzle',
            'description' => 'Do you crave for a rich and decadnt dessert flavour that are topped with
            juicy and creamy berries? If so, our Strawberry shortcake will take you to flavus heaven.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'strawberryshortcake.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Berrypom',
            'flavor' => 'Berry & Pomelonade',
            'maker' => 'Drizzle',
            'description' => 'Our Berrypom is crafted with strong notes of pomegranate tone with blueberry and a touch
            of mint will sweeten the deal of your vaping experience.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'berrypom.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Purple Haze',
            'flavor' => 'Mixed Berries',
            'maker' => 'Drizzle',
            'description' => 'This E-juice is especially made for all Grape and Berry lovers.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'purplehaze.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Havoc',
            'flavor' => 'Avocado & Melon Shake',
            'maker' => 'Drizzle',
            'description' => 'Havoc by Drizzle offers a delightful vaping experience through the delicious flavour it emits.
            Havoc is packed with a wonderful blend of fruit and a sweet layer of cream that bursts
           in your mouth from the very first drag. In our opinion, the flavour of this e-juice never
            gets old to the tastebuds. I mean, who can have too much Avocado, right?',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'havoc.png',
            'created_at' => now(),
            ]);
        Product::create([
            'name' => 'Custard',
            'flavor' => 'Custard',
            'maker' => 'Drizzle',
            'description' => 'Looking for a truly tempting treat? You definitely need to try our custard flavored vape liquid.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'custard1.png',
            'created_at' => now(),
            ]);

        Product::create([

            'name' => 'Blueberry Ice',
            'flavor' => 'Blueberry Mint',
            'maker' => 'Gleetch',
            'description' => 'An icy inhale of sweet and refreshing blueberries with a touch of menthol for an awesome vaping experience!',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'blueberryice.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Sundaze',
            'flavor' => 'Avocado Shake',
            'maker' => 'Gleetch',
            'description' => 'Taste the delicacy of this avocado shake flavored e juice.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'sundaze.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Classic RY4',
            'flavor' => 'Tobacco',
            'maker' => 'Drizzle',
            'description' => 'This E-juice offers a strong tobacco taste that will satisfy your cravings. ',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'classicry4.png',
            'created_at' => now(),
            ]);

        Product::create([
            'name' => 'Cheesy Cupcake',
            'flavor' => 'Custard',
            'maker' => 'Drizzle',
            'description' => 'This heavyweight will surely grant you the flavor of cheesy cupcake to a whole new level.',
            'price' => '250',
            'size' => '50ML',
            'strength' => '3MG',
            'quantity' => '100',
            'display_image' => 'cheesycupcake.png',
            'created_at' => now(),

            ]);
        }

}
