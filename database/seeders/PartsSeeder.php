<?php

namespace Database\Seeders;

use App\Models\Part;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parts = [
            [
                'probe_id' => null,
                'name' => 'A-5863-11**',
                'title' => 'PH10M PLUS probe head and shank kit (see below for complete part no.)',
                'price' => 22174,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5863-19**',
                'title' => 'PH10M PLUS probe head, AM1 and shank kit (see below for complete part no.)',
                'price' => 22174,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5863-4000',
                'title' => 'PH10M PLUS probe head only',
                'price' => 25149,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5863-1060',
                'title' => 'PH10M PLUS probe head and AM1 kit',
                'price' => 22174,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5863-4000',
                'title' => 'PH10M PLUS probe head only',
                'price' => 22174,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5863-6000',
                'title' => 'PH10MQ PLUS probe head kit',
                'price' => 25149,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5863-7000',
                'title' => 'PH10M-iQ PLUS probe head kit',
                'price' => 28416,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-1026-0320 (AM1)',
                'title' => 'AM1 adjustment module for PH10M PLUS, PH10T PLUS, PH6M and MIH',
                'price' => 897,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-1036-0080 (AM2)',
                'title' => 'AM2 adjustment module for PH10MQ PLUS',
                'price' => 897,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5863-0200',
                'title' => 'PHC10-3 PLUS head controller with integral PI 200-3 interface (includes 24 V PSU, 4 feet, documentation CD and USB driver)',
                'price' => 4310,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'probe_id' => null,
                'name' => 'A-5882-0010',
                'title' => 'HCU2 hand control unit',
                'price' => 880,
                'discount' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Part::insert($parts);
    }
}
