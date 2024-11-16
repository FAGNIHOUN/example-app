<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        // autre méthode

        // Créer un post associé à cet utilisateur
/* $post = Post::create([
    'title' => 'Premier Post',
    'content' => 'Ceci est un exemple de contenu.',
    'user_id' => $user->id,  // Clé étrangère
]); */


         // Récupère l'ID des catégories
         $categories = DB::table('categories')->pluck('id');

         // On crée des articles en associant chaque article à une catégorie existante

         foreach ($categories as $category) {
            DB::table('articles')->insert([
                [
                    'name' => 'Article 1 de catégorie ' . $category,
                    'price' => 17.000,
                    'category' => $category,
                ],
                [
                    'name' => 'Article 2 de catégorie ' . $category,
                    'price' => 29.000,
                    'category' => $category,
                ],
                [
                    'name' => 'Article 3 de catégorie ' . $category,
                    'price' => 12.500,
                    'category' => $category,
                ],
                [
                    'name' => 'Article 4 de catégorie ' . $category,
                    'price' => 22.950,
                    'category' => $category,
                ],
            ]);
        }

    }
}
