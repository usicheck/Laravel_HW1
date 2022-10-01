<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Helpers\Enums\OrderStatusesEnum;
use App\Models\OrderStatus;

class OrderStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = collect(OrderStatusesEnum::cases());
        $statuses->each(fn($status) => OrderStatus::firstOrCreate(['name' => $status->value]));

    }
}
