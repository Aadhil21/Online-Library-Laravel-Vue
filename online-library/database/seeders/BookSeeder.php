<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->createMany([
            ['title' => 'The Great Gatsby', 'description' => 'A novel written by American author F. Scott Fitzgerald.', 'genre' => 'Fiction', 'price' => 10.99],
            ['title' => '1984', 'description' => 'A dystopian social science fiction novel and cautionary tale by George Orwell.', 'genre' => 'Dystopian', 'price' => 8.99],
            ['title' => 'To Kill a Mockingbird', 'description' => 'A novel by Harper Lee published in 1960.', 'genre' => 'Classic', 'price' => 12.99],
            ['title' => 'Moby-Dick', 'description' => 'An 1851 novel by American writer Herman Melville.', 'genre' => 'Adventure', 'price' => 9.99],
            ['title' => 'Pride and Prejudice', 'description' => 'A novel by Jane Austen.', 'genre' => 'Romance', 'price' => 11.99],
            ['title' => 'The Catcher in the Rye', 'description' => 'A novel by J.D. Salinger.', 'genre' => 'Fiction', 'price' => 10.99],
            ['title' => 'The Hobbit', 'description' => 'A fantasy novel by J.R.R. Tolkien.', 'genre' => 'Fantasy', 'price' => 14.99],
            ['title' => 'Brave New World', 'description' => 'A dystopian novel by Aldous Huxley.', 'genre' => 'Dystopian', 'price' => 9.99],
            ['title' => 'The Odyssey', 'description' => 'An ancient Greek epic poem attributed to Homer.', 'genre' => 'Epic', 'price' => 12.49],
            ['title' => 'War and Peace', 'description' => 'A historical novel by Leo Tolstoy.', 'genre' => 'Historical', 'price' => 15.99],
            ['title' => 'Ulysses', 'description' => 'A modernist novel by James Joyce.', 'genre' => 'Modernist', 'price' => 13.99],
            ['title' => 'The Divine Comedy', 'description' => 'An epic poem by Dante Alighieri.', 'genre' => 'Epic', 'price' => 16.99],
            ['title' => 'Les Misérables', 'description' => 'A historical novel by Victor Hugo.', 'genre' => 'Historical', 'price' => 14.49],
            ['title' => 'Don Quixote', 'description' => 'A novel by Miguel de Cervantes.', 'genre' => 'Classic', 'price' => 12.99],
            ['title' => 'The Scarlet Letter', 'description' => 'A novel by Nathaniel Hawthorne.', 'genre' => 'Classic', 'price' => 11.49],
            ['title' => 'Jane Eyre', 'description' => 'A novel by Charlotte Brontë.', 'genre' => 'Romance', 'price' => 10.49],
            ['title' => 'The Sun Also Rises', 'description' => 'A novel by Ernest Hemingway.', 'genre' => 'Fiction', 'price' => 12.49],
            ['title' => 'Catch-22', 'description' => 'A satirical novel by Joseph Heller.', 'genre' => 'Satire', 'price' => 11.99],
            ['title' => 'The Road', 'description' => 'A novel by Cormac McCarthy.', 'genre' => 'Post-apocalyptic', 'price' => 13.49],
            ['title' => 'The Alchemist', 'description' => 'A novel by Paulo Coelho.', 'genre' => 'Adventure', 'price' => 9.49],
            ['title' => 'The Da Vinci Code', 'description' => 'A mystery thriller by Dan Brown.', 'genre' => 'Thriller', 'price' => 10.99],
            ['title' => 'The Hunger Games', 'description' => 'A dystopian novel by Suzanne Collins.', 'genre' => 'Dystopian', 'price' => 8.99],
            ['title' => 'Gone with the Wind', 'description' => 'A historical novel by Margaret Mitchell.', 'genre' => 'Historical', 'price' => 14.99],
            ['title' => 'The Shining', 'description' => 'A horror novel by Stephen King.', 'genre' => 'Horror', 'price' => 11.49],
            ['title' => 'The Catcher in the Rye', 'description' => 'A novel by J.D. Salinger.', 'genre' => 'Fiction', 'price' => 10.99],
            ['title' => 'Animal Farm', 'description' => 'A satirical novella by George Orwell.', 'genre' => 'Satire', 'price' => 7.99],
            ['title' => 'The Color Purple', 'description' => 'A novel by Alice Walker.', 'genre' => 'Fiction', 'price' => 12.99],
            ['title' => 'One Hundred Years of Solitude', 'description' => 'A novel by Gabriel García Márquez.', 'genre' => 'Magical realism', 'price' => 13.49],
            ['title' => 'The Old Man and the Sea', 'description' => 'A novella by Ernest Hemingway.', 'genre' => 'Fiction', 'price' => 8.49],
            ['title' => 'Sapiens', 'description' => 'A historical book by Yuval Noah Harari.', 'genre' => 'Non-fiction', 'price' => 15.99],
            ['title' => 'Educated', 'description' => 'A memoir by Tara Westover.', 'genre' => 'Memoir', 'price' => 14.49],
            ['title' => 'The Immortal Life of Henrietta Lacks', 'description' => 'A biography by Rebecca Skloot.', 'genre' => 'Biography', 'price' => 13.99],
            ['title' => 'The Book Thief', 'description' => 'A historical novel by Markus Zusak.', 'genre' => 'Historical', 'price' => 12.49],
            ['title' => 'The Goldfinch', 'description' => 'A novel by Donna Tartt.', 'genre' => 'Fiction', 'price' => 11.99],
            ['title' => 'Big Little Lies', 'description' => 'A novel by Liane Moriarty.', 'genre' => 'Mystery', 'price' => 10.49],
            ['title' => 'The Girl on the Train', 'description' => 'A psychological thriller by Paula Hawkins.', 'genre' => 'Thriller', 'price' => 9.99],
            ['title' => 'Little Fires Everywhere', 'description' => 'A novel by Celeste Ng.', 'genre' => 'Fiction', 'price' => 12.99],
            ['title' => 'Where the Crawdads Sing', 'description' => 'A novel by Delia Owens.', 'genre' => 'Mystery', 'price' => 13.49],
            ['title' => 'The Silent Patient', 'description' => 'A psychological thriller by Alex Michaelides.', 'genre' => 'Thriller', 'price' => 11.99],
            ['title' => 'Normal People', 'description' => 'A novel by Sally Rooney.', 'genre' => 'Romance', 'price' => 12.49],
            ['title' => 'The Martian', 'description' => 'A science fiction novel by Andy Weir.', 'genre' => 'Science Fiction', 'price' => 14.99],
            ['title' => 'The Handmaid\'s Tale', 'description' => 'A dystopian novel by Margaret Atwood.', 'genre' => 'Dystopian', 'price' => 10.99],
            ['title' => 'The Picture of Dorian Gray', 'description' => 'A philosophical novel by Oscar Wilde.', 'genre' => 'Classic', 'price' => 11.49],
            ['title' => 'Dracula', 'description' => 'A gothic horror novel by Bram Stoker.', 'genre' => 'Horror', 'price' => 9.49],
            ['title' => 'Frankenstein', 'description' => 'A science fiction novel by Mary Shelley.', 'genre' => 'Science Fiction', 'price' => 10.99],
            ['title' => 'The Metamorphosis', 'description' => 'A novella by Franz Kafka.', 'genre' => 'Classic', 'price' => 8.99],
            ['title' => 'The Bell Jar', 'description' => 'A semi-autobiographical novel by Sylvia Plath.', 'genre' => 'Fiction', 'price' => 12.49],
            ['title' => 'Slaughterhouse-Five', 'description' => 'A science fiction novel by Kurt Vonnegut.', 'genre' => 'Science Fiction', 'price' => 13.49],
            ['title' => 'A Brief History of Time', 'description' => 'A popular science book by Stephen Hawking.', 'genre' => 'Non-fiction', 'price' => 14.99],
            ['title' => 'The Catcher in the Rye', 'description' => 'A novel by J.D. Salinger.', 'genre' => 'Fiction', 'price' => 10.99],
            ['title' => 'The Hitchhiker\'s Guide to the Galaxy', 'description' => 'A science fiction comedy by Douglas Adams.', 'genre' => 'Science Fiction', 'price' => 9.99],
            ['title' => 'The Time Traveler\'s Wife', 'description' => 'A science fiction romance by Audrey Niffenegger.', 'genre' => 'Science Fiction', 'price' => 12.49],
            ['title' => 'The Lovely Bones', 'description' => 'A novel by Alice Sebold.', 'genre' => 'Fiction', 'price' => 11.99],
            ['title' => 'The Secret History', 'description' => 'A novel by Donna Tartt.', 'genre' => 'Mystery', 'price' => 13.49],
            ['title' => 'The Woman in the Window', 'description' => 'A psychological thriller by A.J. Finn.', 'genre' => 'Thriller', 'price' => 10.99],
            ['title' => 'Sharp Objects', 'description' => 'A psychological thriller by Gillian Flynn.', 'genre' => 'Thriller', 'price' => 9.49],
        ]);
    }
}
