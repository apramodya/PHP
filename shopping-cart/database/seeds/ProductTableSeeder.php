<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'http://en.newsnrn.com/wp-content/uploads/2017/04/com.jpg',
            'title' => 'Dell Computer',
            'description' => 'The Nepali migrant workers in Qatar have donated 20 sets of computer to a school in Lamjung. The Nepali nationals, who have been operating Dhamilikuwa Qatar Group in Qatar, donated the computers to Shailputri Secondary School. A group consisting of 26 people collected Rs 290,000 and purchased the computers, Group’s Chairman Mohan Chilwal said. Chilwal said the support was extended with an intention to do something for the Nepali society.',
            'price' => 120
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.spanishamericancenter.org/wp-content/uploads/2014/08/red-christmas-ornaments-25708-1920x1080.jpg',
            'title' => 'Ornaments',
            'description' => 'red-christmas-ornaments-25708',
            'price' => 20
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://stz.india.com/sites/default/files/styles/zeebiz_850x478/public/2017/10/06/24394-jewellery-pixabay.jpg?itok=8u4tNWeS&c=9d91abc4150fe6afe4b239ee31c14c63',
            'title' => 'jewellery',
            'description' => 'The GST council meet chaired by Finance Minister Arun Jaitley on Friday mentioned that permanent account number (PAN) or Aadhaar would not be mandatory if jewellery is purchased above Rs 50,000. ',
            'price' => 20000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://static4.businessinsider.com/image/58bf0d47402a6b83038b45ff-1200/lamborghini-huracan-performante.jpg',
            'title' => 'Lamborghini',
            'description' => 'It\'s only April and automakers from Mercedes to Lamborghini have already shown off some truly stunning, new cars. We rounded up the priciest cars already unveiled in 2017. From SUVs to coupes, these cars appeal to our inner desire to ride in style. Scroll down for a closer look:',
            'price' => 350000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://images.newcars.com/images/car-pictures/car-defaults/large/2017-jeep-grand-cherokee.png',
            'title' => '2017 Jeep Grand Cherokee',
            'description' => 'The 2017 Jeep Grand Cherokee is a full-size SUV that seats up to 5 passengers. It competes with the Chevrolet Traverse, Ford Expedition, and GMC Yukon. This year, it gains an off-road capable Trailhawk trim, while the Summit trim receives a revised exterior and interior.',
            'price' => 100000
        ]);
        $product->save();
    }
}
