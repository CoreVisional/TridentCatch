<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Wholefish
        Product::create([
            'name' => 'Atlantic Halibut',
            'slug' => 'atlantic-halibut',
            'source_of_fish' => null,
            'price' => 14.50,
            'weight' => '250g',
            'image' => 'products/wholefish/halibut.jpg',
            'description' => 'The atlantic halibut is a bottom-dwelling fish that belongs to the flatfish family. It is found at depths of between 300 and 2000 meters and can reach a weight of 200 kg.',
        ]);

        Product::create([
            'name' => 'Mackerel',
            'slug' => 'mackerel',
            'source_of_fish' => null,
            'price' => 14.00,
            'weight' => '400g',
            'image' => 'products/wholefish/mackerel.jpg',
            'description' => 'The mackerel flesh is also full of minerals like copper, selenium, and iodine. Some of these fishes also contain good amounts of iron and vitamin B1.',
        ]);

        Product::create([
            'name' => 'Grass Emperor',
            'slug' => 'grass-emperor',
            'source_of_fish' => null,
            'price' => 20.00,
            'weight' => '1kg',
            'image' => 'products/wholefish/grass-emperor.jpg',
            'description' => 'Emperor fishes, or sometimes called the scavengers, are found mainly in tropical waters of the Indo-Pacific and Indian Oceans. They are excellent food fish.',
        ]);

        Product::create([
            'name' => 'Norwegian Haddock',
            'slug' => 'norwegian-haddock',
            'source_of_fish' => null,
            'price' => 72.00,
            'weight' => '1kg',
            'image' => 'products/wholefish/norwegian-haddock.jpg',
            'description' => 'Haddock is a member of the cod family with a mild flavour, firm flesh and moist texture.',
        ]);

        Product::create([
            'name' => 'Tilapia',
            'slug' => 'tilapia',
            'source_of_fish' => null,
            'price' => 25.00,
            'weight' => '750g',
            'image' => 'products/wholefish/tilapia.png',
            'description' => 'Tilapia is a nutritious food, and it can be part of a healthy and balanced diet. It is a good source of protein and is relatively low in fat. Tilapia is also lower in sodium, calories, and total fat than bacon and other processed meats.',
        ]);

        // Shellfish
        Product::create([
            'name' => 'King Crab',
            'slug' => 'king-crab',
            'source_of_fish' => null,
            'price' => 280.00,
            'weight' => '9kg',
            'image' => 'products/shellfish/king-crab.jpg',
            'description' => 'Not only does king crab taste great, it also provides one-of-a-kind health benefits. Rich in high-quality protein, it can repair and rebuild muscles and omega-3 fatty acids, reducing inflammation and strengthen heart health.',
        ]);

        Product::create([
            'name' => 'Atlantic Lobster',
            'slug' => 'atlantic-lobster',
            'source_of_fish' => null,
            'price' => 288.00,
            'weight' => '2.3kg',
            'image' => 'products/shellfish/atlantic-lobster.jpeg',
            'description' => 'The American, or Atlantic, lobster is a species of lobster found on the Atlantic coast of North America, chiefly from Labrador to New Jersey.',
        ]);

        Product::create([
            'name' => 'Fresh Oyster',
            'slug' => 'fresh-oyster',
            'source_of_fish' => null,
            'price' => 170.00,
            'weight' => '250g',
            'image' => 'products/shellfish/fresh-oyster.jpg',
            'description' => 'Oysters are a rich source of vitamin D, copper, zinc, and manganese. These micronutrients, in combination with calcium, are thought to be key to slowing or even preventing bone loss in older women due to osteoporosis.',
        ]);

        Product::create([
            'name' => 'Abalone',
            'slug' => 'abalone',
            'source_of_fish' => null,
            'price' => 85.00,
            'weight' => '185g',
            'image' => 'products/shellfish/abalone.jpg',
            'description' => 'Abalone is high in protein, iodine, and selenium, it is a sustainable choice of seafood, and it provides some omega-3 too.',
        ]);

        Product::create([
            'name' => 'Scallop',
            'slug' => 'scallop',
            'source_of_fish' => null,
            'price' => 30.00,
            'weight' => '350g',
            'image' => 'products/shellfish/scallop.jpg',
            'description' => 'Scallops are rich in omega-3 fatty acids, healthy fats that can balance your cholesterol levels, reducing your heart disease risk. The high magnesium content in scallops can contribute to heart health as well.',
        ]);

        // Roe
        Product::create([
            'name' => 'Beluga Caviar',
            'slug' => 'beluga-caviar',
            'source_of_fish' => 'Beluga',
            'price' => 950.00,
            'weight' => '30g',
            'image' => 'products/roe/beluga-caviar.jpg',
            'description' => 'Beluga caviar is caviar consisting of the roe of the beluga sturgeon Huso huso.',
        ]);

        Product::create([
            'name' => 'Salmon Roe',
            'slug' => 'salmon-roe',
            'source_of_fish' => 'Salmon',
            'price' => 25.00,
            'weight' => '100g',
            'image' => 'products/roe/salmon-roe.jpeg',
            'description' => 'Salmon roe are the developed eggs of salmon. Salmon eggs are red-orange in color and are taken from the inside of the fish. Eating fish roe provides many of the same healthy vitamins and minerals as eating fish meat.',
        ]);

        Product::create([
            'name' => 'Sterlet Caviar',
            'slug' => 'sterlet-caviar',
            'source_of_fish' => 'Sterlet',
            'price' => 610.00,
            'weight' => '50g',
            'image' => 'products/roe/sterlet-caviar.jpg',
            'description' => 'Sterlet caviar is a variety harvested from sterlet sturgeon (Acipenser ruthenus)—which is native to rivers that flow into the Caspian Sea, Black Sea, Baltic Sea, Barents Sea, and the Sea of Azov.',
        ]);

        Product::create([
            'name' => 'Trout Roe',
            'slug' => 'trout-roe',
            'source_of_fish' => 'Rainbow Trout',
            'price' => 80.00,
            'weight' => '100g',
            'image' => 'products/roe/trout-roe.jpg',
            'description' => 'Trout roe comes from the Oncorhynchus Mykiss fish species farmed in France. They are smaller in size than salmon eggs and have a crunchier texture.',
        ]);

        // Fishcut
        Product::create([
            'name' => 'Red Snapper Fish Steak',
            'slug' => 'red-snapper-fish-steak',
            'source_of_fish' => 'Red Snapper',
            'price' => 55.00,
            'weight' => '1kg',
            'image' => 'products/fishcut/red-snapper-steak.jpg',
            'description' => 'Red snapper flesh is lean and moist, with a mild sweet but distinctive flavour. The semi-firm fish meat is pinkish, with yellow tones in a raw state, turning lighter when cooking.',
        ]);

        Product::create([
            'name' => 'Cod Fillet',
            'slug' => 'cod-fillet',
            'source_of_fish' => 'Cod',
            'price' => 80.50,
            'weight' => '350g',
            'image' => 'products/fishcut/cod-fillet.jpg',
            'description' => 'It has a very mild, milky flavour. It is slight sweet and soft. The meat flakes off nicely but it is firm enough to stand up well to baking and broilling.',
        ]);

        Product::create([
            'name' => 'Yellowfin Tuna Block',
            'slug' => 'yellowfin-tuna-block',
            'source_of_fish' => 'Yellowfin Tuna',
            'price' => 60.00,
            'weight' => '600g',
            'image' => 'products/fishcut/tuna-block.jpg',
            'description' => 'Sashimi grade frozen tuna block - skinless and boneless. Simply defrost and slice to enjoy as sashimi or sushi, or pan sear for a deeper, fragrant flavour.',
        ]);

        Product::create([
            'name' => 'Seabass Steak Cut',
            'slug' => 'seabass-steak-cut',
            'source_of_fish' => 'Seabass',
            'price' => 8.00,
            'weight' => '200g',
            'image' => 'products/fishcut/seabass-steak-cut.jpg',
            'description' => 'Sea bass meat is pinkish when raw and becomes opaque white when cooked. The finely textured, flaky meat is lean with a sweet and mild flavour.',
        ]);

        Product::create([
            'name' => 'Swordfish Steak',
            'slug' => 'swordfish-steak',
            'source_of_fish' => 'Swordfish',
            'price' => 231.20,
            'weight' => '900g',
            'image' => 'products/fishcut/swordfish-steak.jpg',
            'description' => 'Fresh Swordfish has a very lean, slightly sweet, and firm, meaty texture. Great for grilling or broiling in your oven.',
        ]);
    }
}
