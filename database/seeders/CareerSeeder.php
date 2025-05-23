<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing careers
        Career::truncate();

        $careers = [
            [
                'position' => 'IT Support',
                'type' => 'Both',
                'description' => 'Bergabunglah dengan tim kami sebagai IT Support. Tanggung jawab Anda meliputi pemeliharaan sistem, dukungan teknis, dan troubleshooting masalah perangkat keras dan perangkat lunak. Kami mencari seseorang yang detail-oriented dan mampu bekerja baik secara mandiri maupun dalam tim.',
                'skills' => [
                    'Troubleshooting: Kemampuan untuk menganalisis dan menyelesaikan masalah teknis pada perangkat keras, perangkat lunak, dan jaringan secara cepat dan efektif.',
                    'Technical Knowledge: Pemahaman mendalam tentang sistem operasi (Windows, macOS, Linux), perangkat keras komputer, printer, jaringan dasar, dan aplikasi umum (Microsoft Office, email clients).',
                    'Customer Service: Keterampilan komunikasi dan empati untuk membantu pengguna dengan sabar dan profesional, baik secara langsung, melalui telepon, maupun secara daring.',
                    'Network Fundamentals: Pengetahuan dasar tentang TCP/IP, DHCP, DNS, VPN, serta kemampuan mengkonfigurasi router/switch kecil dan koneksi jaringan.',
                    'Hardware Maintenance & Installation: Mampu memasang, mengganti, dan merawat perangkat keras seperti RAM, hard drive, printer, scanner, dan peripheral lainnya.'
                ],
                'qualifications' => [
                    'Minimal lulusan D3/S1 di bidang Teknik Informatika, Sistem Informasi, atau jurusan terkait.',
                    'Memiliki pengalaman kerja di bidang IT Support minimal 1 tahun (fresh graduate dipertimbangkan).',
                    'Menguasai troubleshooting perangkat keras dan perangkat lunak komputer.',
                    'Memahami dasar-dasar jaringan komputer (LAN/WAN, TCP/IP, DNS, DHCP).',
                    'Terbiasa menggunakan sistem operasi Windows dan Linux.'
                ],
                'is_active' => true,
                'order' => 1
            ],
            [
                'position' => 'Network Security Specialist',
                'type' => 'Both',
                'description' => 'Kami mencari spesialis keamanan jaringan yang berpengalaman untuk melindungi infrastruktur perusahaan dari ancaman cyber. Anda akan bertanggung jawab untuk implementasi dan pemeliharaan solusi keamanan jaringan.',
                'skills' => [
                    'Security Technologies: Menguasai firewall, IDS/IPS, VPN, dan berbagai tools keamanan jaringan.',
                    'Network Protocols: Pemahaman mendalam tentang TCP/IP, HTTP/HTTPS, DNS, dan protokol jaringan lainnya.',
                    'Vulnerability Assessment: Kemampuan melakukan penetration testing dan vulnerability scanning.',
                    'Incident Response: Mampu menangani insiden keamanan dengan cepat dan efektif.',
                    'Security Standards: Memahami standar keamanan seperti ISO 27001, NIST, dan PCI-DSS.'
                ],
                'qualifications' => [
                    'Minimal S1 Teknik Informatika, Sistem Informasi, atau bidang terkait.',
                    'Pengalaman minimal 2 tahun di bidang network security.',
                    'Memiliki sertifikasi keamanan (CEH, CISSP, CompTIA Security+) menjadi nilai tambah.',
                    'Menguasai tools keamanan seperti Wireshark, Nmap, Metasploit.',
                    'Kemampuan analitis yang kuat dan detail-oriented.'
                ],
                'is_active' => true,
                'order' => 2
            ],
            [
                'position' => 'Cloud Computing Engineer',
                'type' => 'Both',
                'description' => 'Anda akan merancang, mengimplementasikan, dan mengelola solusi cloud untuk meningkatkan efisiensi operasional perusahaan. Pengalaman dengan AWS, Azure, atau Google Cloud Platform diutamakan.',
                'skills' => [
                    'Cloud Platforms: Menguasai AWS, Azure, atau Google Cloud Platform.',
                    'Infrastructure as Code: Pengalaman dengan Terraform, CloudFormation, atau ARM Templates.',
                    'Containerization: Docker, Kubernetes, dan orchestration tools.',
                    'DevOps Practices: CI/CD pipelines, automation, dan monitoring.',
                    'Scripting: Python, Bash, PowerShell untuk automation.'
                ],
                'qualifications' => [
                    'Minimal S1 Teknik Informatika atau bidang terkait.',
                    'Pengalaman minimal 2 tahun dengan cloud platforms.',
                    'Sertifikasi cloud (AWS Certified, Azure Certified) menjadi nilai tambah.',
                    'Pemahaman yang kuat tentang networking dan security di cloud.',
                    'Kemampuan problem-solving dan komunikasi yang baik.'
                ],
                'is_active' => true,
                'order' => 3
            ],
            [
                'position' => 'Software Developer',
                'type' => 'Both',
                'description' => 'Sebagai Software Developer, Anda akan bertanggung jawab untuk mendesain, mengembangkan, dan memelihara aplikasi perusahaan. Kemampuan problem-solving yang kuat dan pengetahuan tentang berbagai bahasa pemrograman diperlukan.',
                'skills' => [
                    'Programming Languages: Menguasai minimal 2 bahasa pemrograman (Java, Python, JavaScript, PHP, C#).',
                    'Web Development: HTML, CSS, JavaScript, dan framework modern (React, Angular, Vue).',
                    'Database: SQL dan NoSQL databases (MySQL, PostgreSQL, MongoDB).',
                    'Version Control: Git, GitHub/GitLab untuk kolaborasi tim.',
                    'API Development: RESTful API design dan implementation.'
                ],
                'qualifications' => [
                    'Minimal S1 Teknik Informatika, Ilmu Komputer, atau bidang terkait.',
                    'Pengalaman minimal 1 tahun dalam software development.',
                    'Portfolio project yang dapat didemonstrasikan.',
                    'Kemampuan bekerja dalam tim dengan metodologi Agile/Scrum.',
                    'Passion untuk belajar teknologi baru.'
                ],
                'is_active' => true,
                'order' => 4
            ]
        ];

        foreach ($careers as $career) {
            Career::create($career);
        }

        $this->command->info('Careers seeded successfully!');
    }
}