<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
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
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        $customer = [
            [
                'name' => 'John Doe',
                'email' => 'john@mail.com',
                'phone' => '08123456789',
                'address' => '123 Main Street',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@mail.com',
                'phone' => '08123456789',
                'address' => '123 Main Street',
            ],
            [
                'name' => 'Michael Doe',
                'email' => 'mic@mail.com',
                'phone' => '08123456789',
                'address' => '123 Main Street',
            ],
            [
                'name' => 'Jessica Doe',
                'email' => 'jes@mail.com',
                'phone' => '08123456789',
                'address' => '123 Main Street',
            ]
        ];

        $product = [
            [
                'name' => 'Product 1',
                'description' => 'Description 1',
                'price' => 10000,
                'stock' => 10,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description 2',
                'price' => 20000,
                'stock' => 20,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description 3',
                'price' => 30000,
                'stock' => 30,
            ],
            [
                'name' => 'Product 4',
                'description' => 'Description 4',
                'price' => 40000,
                'stock' => 40,
            ],
            [
                'name' => 'Product 5',
                'description' => 'Description 5',
                'price' => 50000,
                'stock' => 50,
            ],
        ];

        $inventory = [
            [
                'id_product' => 1,
                'stock' => 10,
                'stock_min' => 5,
                'stock_max' => 15,
            ],
            [
                'id_product' => 2,
                'stock' => 20,
                'stock_min' => 10,
                'stock_max' => 30,
            ],
            [
                'id_product' => 3,
                'stock' => 30,
                'stock_min' => 15,
                'stock_max' => 45,
            ],
            [
                'id_product' => 4,
                'stock' => 40,
                'stock_min' => 20,
                'stock_max' => 60,
            ],
            [
                'id_product' => 5,
                'stock' => 50,
                'stock_min' => 25,
                'stock_max' => 75,
            ],
        ];

        $order = [
            [
                'id_customer' => 1,
                'status' => 'pending',
                'order_date' => '2025-03-17',
                'total_cost' => 10000,
            ],
            [
                'id_customer' => 2,
                'status' => 'pending',
                'order_date' => '2025-03-17',
                'total_cost' => 20000,
            ],
            [
                'id_customer' => 3,
                'status' => 'pending',
                'order_date' => '2025-03-17',
                'total_cost' => 30000,
            ],
            [
                'id_customer' => 4,
                'status' => 'pending',
                'order_date' => '2025-03-17',
                'total_cost' => 40000,
            ],
            [
                'id_customer' => 1,
                'status' => 'pending',
                'order_date' => '2025-03-17',
                'total_cost' => 50000,
            ],
        ];

        $orderItem = [
            [
                'id_order' => 1,
                'id_product' => 1,
                'quantity' => 1,
                'unit_price' => 10000,
            ],
            [
                'id_order' => 2,
                'id_product' => 2,
                'quantity' => 2,
                'unit_price' => 20000,
            ],
            [
                'id_order' => 3,
                'id_product' => 3,
                'quantity' => 3,
                'unit_price' => 30000,
            ],
            [
                'id_order' => 4,
                'id_product' => 4,
                'quantity' => 4,
                'unit_price' => 40000,
            ],
            [
                'id_order' => 5,
                'id_product' => 5,
                'quantity' => 5,
                'unit_price' => 50000,
            ],
            [
                'id_order' => 1,
                'id_product' => 2,
                'quantity' => 1,
                'unit_price' => 20000,
            ],
            [
                'id_order' => 2,
                'id_product' => 3,
                'quantity' => 2,
                'unit_price' => 30000,
            ],
            [
                'id_order' => 3,
                'id_product' => 4,
                'quantity' => 3,
                'unit_price' => 40000,
            ],
            [
                'id_order' => 4,
                'id_product' => 5,
                'quantity' => 4,
                'unit_price' => 50000,
            ],
            [
                'id_order' => 5,
                'id_product' => 1,
                'quantity' => 5,
                'unit_price' => 10000,
            ],
            [
                'id_order' => 1,
                'id_product' => 3,
                'quantity' => 1,
                'unit_price' => 30000,
            ],
            [
                'id_order' => 2,
                'id_product' => 4,
                'quantity' => 2,
                'unit_price' => 40000,
            ],
            [
                'id_order' => 3,
                'id_product' => 5,
                'quantity' => 3,
                'unit_price' => 50000,
            ],
            [
                'id_order' => 4,
                'id_product' => 1,
                'quantity' => 4,
                'unit_price' => 10000,
            ],
            [
                'id_order' => 5,
                'id_product' => 2,
                'quantity' => 5,
                'unit_price' => 20000,
            ]
        ];

        $payment = [
            [
                'id_order' => 1,
                'payment_method' => 'cash',
                'payment_date' => '2025-03-17',
                'amount' => 10000,
            ],
            [
                'id_order' => 2,
                'payment_method' => 'cash',
                'payment_date' => '2025-03-17',
                'amount' => 20000,
            ],
            [
                'id_order' => 3,
                'payment_method' => 'cash',
                'payment_date' => '2025-03-17',
                'amount' => 30000,
            ],
            [
                'id_order' => 4,
                'payment_method' => 'cash',
                'payment_date' => '2025-03-17',
                'amount' => 40000,
            ],
            [
                'id_order' => 5,
                'payment_method' => 'cash',
                'payment_date' => '2025-03-17',
                'amount' => 50000,
            ],
        ];

        $customer = Customer::insert($customer);
        $product = Product::insert($product);
        $inventory = Inventory::insert($inventory);
        $order = Order::insert($order);
        $orderItem = OrderItem::insert($orderItem);
        $payment = Payment::insert($payment);
    }
}
