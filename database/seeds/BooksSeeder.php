<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        
        $b = new Book;
        $b->author = 'J. R. R. Tolkien';
        $b->description = "The Lord of the Rings is an epic[1] high fantasy novel[a] by the English author and scholar J. R. R. Tolkien. Set in Middle-earth, the world at some distant time in the past, the story began as a sequel to Tolkien's 1937 children's book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling books ever written, with over 150 million copies sold.";
        $b->save();

        $b = new Book;
        $b->author = 'Sam Lake';
        $b->description = "Jesse Faden arrives at the Oldest House under the telepathic guidance of Polaris, finding the building seemingly devoid of people. She bumps into a Finnish janitor, Ahti, who directs her to an elevator for her job interview. Through the elevator, Jesse discovers that the Federal Bureau of Control's Director, Zachariah Trench, has seemingly committed suicide with his own sidearm. Picking it up, Jesse learns that it is an Object of Power known as the Service Weapon, and is transported to the Astral Plane, where she completes a ritual and is selected as the new Director by the Board. Jesse emerges from Trench's office and finds that the Oldest House has been invaded by a hostile force she dubs \"the Hiss\", which has possessed most of the Bureau's agents and corrupted the building's shifting topography. Jesse uses an Object of Power known as the Hotline to listen to the lingering presence of Trench, who relays that his former management team knows the secrets of the Bureau, and Jesse hopes they may be able to tell her the whereabouts of her brother, Dylan, who was kidnapped by the FBC years prior.";
        $b->save();
    }
}
