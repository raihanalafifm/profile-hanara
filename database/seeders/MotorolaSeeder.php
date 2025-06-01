<?php

namespace Database\Seeders;

use App\Models\Motorola;
use Illuminate\Database\Seeder;

class MotorolaSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'XIR P3688 136-174 5W LKR(16)',
                'model_number' => 'XIR P3688',
                'category' => 'VHF',
                'type' => 'Radio Mobil',
                'description' => 'Radio mobil VHF dengan daya 5W dan 16 channel.',
                'specifications' => [
                    'Frequency Range' => '136-174 MHz',
                    'Power Output' => '5W',
                    'Channels' => '16',
                    'Dimensions' => '120 x 55 x 30 mm',
                    'Weight' => '350g'
                ],
                'price' => 5500000
            ],
            [
                'name' => 'TDR 4400HZ 350-400MHz 403-527 4W LKP',
                'model_number' => 'TDR 4400HZ',
                'category' => 'UHF',
                'type' => 'Radio Portable',
                'description' => 'Radio portable UHF dengan rentang frekuensi luas.',
                'specifications' => [
                    'Frequency Range' => '350-400MHz, 403-527MHz',
                    'Power Output' => '4W',
                    'Battery Life' => '12 hours',
                    'IP Rating' => 'IP54'
                ],
                'price' => 4800000
            ],
            // Add more sample products as needed
        ];

        foreach ($products as $product) {
            Motorola::create($product);
        }
    }
}