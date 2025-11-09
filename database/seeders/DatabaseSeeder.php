<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Writer;
use App\Models\Article;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $writerIds = [];

        for ($i = 0; $i < 5; $i++) {
            $writer = Writer::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'bio' => $faker->paragraph(2)
            ]);
            $writerIds[] = $writer->id;
        }

        $categories = ['Interactive Multimedia', 'Software Engineering'];

        for ($i = 0; $i < 20; $i++) {
            $category = $faker->randomElement($categories);

            // Tentukan judul sesuai kategori (sesuai soal NIM GENAP)
            $title = '';
            if ($category === 'Interactive Multimedia') {
                // ▼▼ UBAH JUDUL INI ▼▼
                $title = $faker->randomElement(['Human and Computer Interaction', 'User Experience', 'User Experience for Digital Immersive Technology']);
            } else { // Berarti 'Software Engineering'
                // ▼▼ UBAH JUDUL INI ▼▼
                $title = $faker->randomElement(['Pattern Software Design', 'Agile Software Development', 'Code Reengineering']);
            }
            
            Article::create([
                // Ambil ID penulis secara acak dari array yang kita buat tadi
                'writer_id' => $faker->randomElement($writerIds), 
                'category' => $category,
                'title' => $title,
                'excerpt' => $faker->paragraph(3), // Ringkasan
                'body' => collect($faker->paragraphs(mt_rand(10, 20)))->map(fn($p) => "<p>$p</p>")->implode(''),
            ]);
        }
    }
}
