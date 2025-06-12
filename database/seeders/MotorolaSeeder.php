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
                'description' => 'Radio mobil VHF dengan daya 5W dan 16 channel. Cocok untuk komunikasi jarak jauh dengan kualitas suara jernih.',
                'specifications' => [
                    'Frequency Range' => '136-174 MHz',
                    'Power Output' => '5W',
                    'Channels' => '16',
                    'Dimensions' => '120 x 55 x 30 mm',
                    'Weight' => '350g',
                    'Operating Temperature' => '-30°C to +60°C'
                ],
                'price' => 5500000,
                'is_active' => true
            ],
            [
                'name' => 'TDR 4400HZ 350-400MHz 403-527 4W LKP',
                'model_number' => 'TDR 4400HZ',
                'category' => 'UHF',
                'type' => 'Radio Portable',
                'description' => 'Radio portable UHF dengan rentang frekuensi luas dan daya tahan baterai hingga 12 jam. Ideal untuk operasional lapangan.',
                'specifications' => [
                    'Frequency Range' => '350-400MHz, 403-527MHz',
                    'Power Output' => '4W',
                    'Battery Life' => '12 hours',
                    'IP Rating' => 'IP54',
                    'Channels' => '256',
                    'Weight' => '280g'
                ],
                'price' => 4800000,
                'is_active' => true
            ],
            [
                'name' => 'GP338 VHF 136-174MHz 5W',
                'model_number' => 'GP338',
                'category' => 'VHF',
                'type' => 'Radio Portable',
                'description' => 'Radio portable VHF profesional dengan konstruksi tahan lama dan fitur keamanan lengkap.',
                'specifications' => [
                    'Frequency Range' => '136-174 MHz',
                    'Power Output' => '5W',
                    'Channels' => '128',
                    'Battery Type' => 'Li-Ion 1800mAh',
                    'Battery Life' => '18 hours',
                    'IP Rating' => 'IP55',
                    'Weight' => '420g'
                ],
                'price' => 6200000,
                'is_active' => true
            ],
            [
                'name' => 'DM4601 UHF Digital Mobile Radio',
                'model_number' => 'DM4601',
                'category' => 'UHF',
                'type' => 'Radio Mobil',
                'description' => 'Radio mobil digital UHF dengan teknologi MOTOTRBO, mendukung komunikasi analog dan digital.',
                'specifications' => [
                    'Frequency Range' => '403-527 MHz',
                    'Power Output' => '25W/45W',
                    'Channels' => '1000',
                    'Display' => '2-line LCD',
                    'GPS' => 'Built-in',
                    'Bluetooth' => 'Yes',
                    'Dimensions' => '183 x 50 x 160 mm'
                ],
                'price' => 12500000,
                'is_active' => true
            ],
            [
                'name' => 'SLR5700 UHF Repeater',
                'model_number' => 'SLR5700',
                'category' => 'Repeater',
                'type' => 'Broadband',
                'description' => 'Repeater UHF digital berkinerja tinggi untuk memperluas jangkauan komunikasi radio.',
                'specifications' => [
                    'Frequency Range' => '403-527 MHz',
                    'Power Output' => '50W',
                    'Channels' => '1000',
                    'Duplexer' => 'Built-in',
                    'Power Supply' => '13.8V DC',
                    'Dimensions' => '483 x 88 x 406 mm',
                    'Weight' => '8.5kg'
                ],
                'price' => 28000000,
                'is_active' => true
            ],
            [
                'name' => 'Battery Pack PMNN4077 Li-Ion',
                'model_number' => 'PMNN4077',
                'category' => 'Accessories',
                'type' => 'Radio Portable',
                'description' => 'Baterai Li-Ion original Motorola untuk seri radio portable tertentu dengan kapasitas tinggi.',
                'specifications' => [
                    'Battery Type' => 'Lithium-Ion',
                    'Voltage' => '7.4V',
                    'Capacity' => '2200mAh',
                    'Compatibility' => 'DP4400, DP4401, DP4600, DP4601, DP4800, DP4801',
                    'Operating Temperature' => '-20°C to +60°C',
                    'Charging Time' => '3 hours',
                    'Weight' => '180g'
                ],
                'price' => 850000,
                'is_active' => true
            ]
        ];

        foreach ($products as $product) {
            Motorola::create($product);
        }
    }
}
