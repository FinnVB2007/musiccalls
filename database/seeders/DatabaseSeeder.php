<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::query()->firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => 'password'],
        );

        $now = now();
        $genres = ['Classic', 'Comedy', 'Drama', 'Fantasy', 'Historical', 'Jukebox'];

        foreach ($genres as $genre) {
            DB::table('genres')->updateOrInsert(
                ['name' => $genre],
                ['created_at' => $now, 'updated_at' => $now],
            );
        }

        $genreIds = DB::table('genres')
            ->whereIn('name', $genres)
            ->pluck('id', 'name');

        $musicals = [
            ['title' => 'The Phantom of the Opera', 'genre' => 'Classic', 'description' => 'A mysterious phantom haunts the Paris Opera House and becomes obsessed with a young singer.'],
            ['title' => 'Les Misérables', 'genre' => 'Historical', 'description' => 'In nineteenth-century France, a former prisoner seeks redemption amid revolution and hardship.'],
            ['title' => 'Wicked', 'genre' => 'Fantasy', 'description' => 'A reimagining of Oz follows the unlikely friendship between two witches.'],
            ['title' => 'Hamilton', 'genre' => 'Historical', 'description' => 'The life and legacy of American founding father Alexander Hamilton, told through hip-hop and song.'],
            ['title' => 'The Lion King', 'genre' => 'Drama', 'description' => 'A young lion prince finds his way back to the kingdom and responsibility he left behind.'],
            ['title' => 'Cats', 'genre' => 'Fantasy', 'description' => 'A tribe of cats gathers for an annual celebration where one will be chosen for a new life.'],
            ['title' => 'Chicago', 'genre' => 'Drama', 'description' => 'Two vaudeville performers compete for fame and freedom in Jazz Age Chicago.'],
            ['title' => 'Mamma Mia!', 'genre' => 'Jukebox', 'description' => 'A bride-to-be invites three possible fathers to her wedding on a Greek island.'],
            ['title' => 'The Sound of Music', 'genre' => 'Classic', 'description' => 'A spirited governess brings music and joy to a widowed naval officer and his children.'],
            ['title' => 'Hairspray', 'genre' => 'Comedy', 'description' => 'A teenager pursues a place on a television dance show and challenges segregation.'],
            ['title' => 'Jersey Boys', 'genre' => 'Jukebox', 'description' => 'The rise of Frankie Valli and the Four Seasons, featuring their best-known songs.'],
            ['title' => 'Cabaret', 'genre' => 'Drama', 'description' => 'Performers and patrons at a Berlin nightclub face the growing shadow of Nazism.'],
        ];

        foreach ($musicals as $musical) {
            DB::table('musicals')->updateOrInsert(
                ['user_id' => $user->id, 'title' => $musical['title']],
                [
                    'description' => $musical['description'],
                    'genre_id' => $genreIds[$musical['genre']],
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            );
        }
    }
}
