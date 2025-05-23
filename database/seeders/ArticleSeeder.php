<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing articles
        Article::truncate();

        // Sample articles data
        $articles = [
            [
                'title' => 'Instalasi Zimbra Mail Server untuk Perusahaan',
                'description' => 'Zimbra Mail Server adalah solusi email enterprise yang powerful dan mudah digunakan. Dalam artikel ini kami akan membahas langkah-langkah instalasi Zimbra untuk kebutuhan bisnis Anda.',
                'link' => 'https://hanara.id/blog/instalasi-zimbra',
                'image' => null, // Will be added if you have sample images
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => 'Panduan Maintenance Website yang Efektif',
                'description' => 'Maintenance website yang teratur adalah kunci untuk menjaga performa dan keamanan situs Anda. Pelajari tips dan trik maintenance website dari tim expert Hanara.',
                'link' => 'https://hanara.id/blog/maintenance-website',
                'image' => null,
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => 'Nextcloud: Solusi Cloud Storage untuk Bisnis',
                'description' => 'Nextcloud menawarkan solusi cloud storage yang aman dan dapat dikustomisasi untuk kebutuhan bisnis. Temukan keuntungan menggunakan Nextcloud di perusahaan Anda.',
                'link' => 'https://hanara.id/blog/nextcloud-bisnis',
                'image' => null,
                'is_active' => true,
                'order' => 3
            ],
            [
                'title' => 'Implementasi CCTV untuk Keamanan Optimal',
                'description' => 'Sistem CCTV modern menawarkan lebih dari sekedar rekaman video. Pelajari bagaimana implementasi CCTV yang tepat dapat meningkatkan keamanan bisnis Anda.',
                'link' => null,
                'image' => null,
                'is_active' => true,
                'order' => 4
            ],
            [
                'title' => 'Human Capital Management System: Digitalisasi HR',
                'description' => 'HCM System membantu perusahaan mengelola SDM dengan lebih efisien. Dari absensi hingga payroll, semua terintegrasi dalam satu platform.',
                'link' => 'https://hanara.id/products/hcm',
                'image' => null,
                'is_active' => true,
                'order' => 5
            ],
            [
                'title' => 'Motorola Two-Way Radio untuk Komunikasi Bisnis',
                'description' => 'Komunikasi yang handal adalah kunci operasional bisnis yang sukses. Motorola two-way radio menawarkan solusi komunikasi yang dapat diandalkan.',
                'link' => null,
                'image' => null,
                'is_active' => false, // Example of inactive article
                'order' => 6
            ]
        ];

        // Insert articles
        foreach ($articles as $article) {
            Article::create($article);
        }

        $this->command->info('Articles seeded successfully!');
    }
}