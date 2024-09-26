<?php

namespace Database\Seeders;

use App\Models\Date;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DateSeeder extends Seeder
{

    $orders = Order::all();
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($orders as $order) {
        Date::factory()->count(2)->create([
            'user_id' => $order->id,
        ]);
      }
   }
}
