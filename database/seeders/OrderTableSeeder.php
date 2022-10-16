<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderProduct;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_1 = Order::create([
            'user_id' => rand(1, 2) == 1 ? 1: null,
            'billing_name' => 'Mike Hunt',
            'billing_email' => 'mikehunt@gmail.com',
            'billing_phone' => '011-6325412',
            'billing_street_address' => '60, Jalan Padang Belia',
            'billing_city' => 'Kuala Lumpur',
            'billing_state' => 'Wilayah Persekutuan',
            'billing_zipcode' => '50706',
            'billing_name_on_card' => 'Mike Hunt',
            'billing_subtotal' => 89.90,
            'billing_tax' => 3.5,
            'billing_total' => 93.05,
            'error' => 'Card Declined',
        ]);

        OrderProduct::create([
            'order_id' => $order_1->id,
            'product_id' => 1,
            'item_quantity' => 1,
        ]);

        OrderProduct::create([
            'order_id' => $order_1->id,
            'product_id' => 2,
            'item_quantity' => 1,
        ]);

        $order_2 = Order::create([
            'user_id' => rand(1, 2) == 1 ? 1: null,
            'billing_name' => 'Ariana Gandhi',
            'billing_email' => 'gandhi@gmail.com',
            'billing_phone' => '012-6294723',
            'billing_street_address' => '65, Jalan Kuning, 2, Taman Pelangi',
            'billing_city' => 'Johor Bahru',
            'billing_state' => 'Johor',
            'billing_zipcode' => '80400',
            'billing_name_on_card' => 'Ariana Gandhi',
            'billing_subtotal' => 55.00,
            'billing_tax' => 4.3,
            'billing_total' => 57.37,
            'error' => 'Transaction Process Failed',
        ]);

        OrderProduct::create([
            'order_id' => $order_2->id,
            'product_id' => 12,
            'item_quantity' => 7,
        ]);

        OrderProduct::create([
            'order_id' => $order_2->id,
            'product_id' => 5,
            'item_quantity' => 2,
        ]);

        $order_3 = Order::create([
            'user_id' => rand(1, 2) == 1 ? 1: null,
            'billing_name' => 'Loh Yi Kai',
            'billing_email' => 'lyk@gmail.com',
            'billing_phone' => '011-7294186',
            'billing_street_address' => '5, Jalan AU 1A/4E, Taman Keramat Permai',
            'billing_city' => 'Kuala Lumpur',
            'billing_state' => 'Wilayah Persekutuan',
            'billing_zipcode' => '54200',
            'billing_name_on_card' => 'Loh Yi Kai',
            'billing_subtotal' => 83.50,
            'billing_tax' => 3.5,
            'billing_total' => 86.42,
            'error' => null,
        ]);

        OrderProduct::create([
            'order_id' => $order_3->id,
            'product_id' => 12,
            'item_quantity' => 7,
        ]);

        OrderProduct::create([
            'order_id' => $order_3->id,
            'product_id' => 5,
            'item_quantity' => 2,
        ]);

        $order_4 = Order::create([
            'user_id' => rand(1, 2) == 1 ? 1: null,
            'billing_name' => 'Christian Wong Hao Heng',
            'billing_email' => 'christian.whh@gmail.com',
            'billing_phone' => '013-2894012',
            'billing_street_address' => '28A, Psn Greentown 1, Greentown',
            'billing_city' => 'Ipoh',
            'billing_state' => 'Perak',
            'billing_zipcode' => '30450',
            'billing_name_on_card' => 'Christian Wong Hao Heng',
            'billing_subtotal' => 32.50,
            'billing_tax' => 6.0,
            'billing_total' => 34.45
,
            'error' => null,
        ]);

        OrderProduct::create([
            'order_id' => $order_4->id,
            'product_id' => 22,
            'item_quantity' => 6,
        ]);

        OrderProduct::create([
            'order_id' => $order_4->id,
            'product_id' => 16,
            'item_quantity' => 8,
        ]);

        $order_5 = Order::create([
            'user_id' => rand(1, 2) == 1 ? 1: null,
            'billing_name' => 'Munirah Sulaiman',
            'billing_email' => 'munirah@gmail.com',
            'billing_phone' => '010-4312905',
            'billing_street_address' => '20, Jalan 11/55C, Taman Setiawangsa Hulu',
            'billing_city' => 'Klang',
            'billing_state' => 'Selangor',
            'billing_zipcode' => '58000',
            'billing_name_on_card' => 'Munirah Sulaiman',
            'billing_subtotal' => 81.35,
            'billing_tax' => 5.5,
            'billing_total' => 85.82,
            'error' => null,
        ]);

        OrderProduct::create([
            'order_id' => $order_5->id,
            'product_id' => 19,
            'item_quantity' => 11,
        ]);

        OrderProduct::create([
            'order_id' => $order_5->id,
            'product_id' => 10,
            'item_quantity' => 3,
        ]);
    }
}
