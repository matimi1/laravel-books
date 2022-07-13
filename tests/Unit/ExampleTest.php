<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Book;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    // public function test_book_can_be_found_in_database()
    // {
    //     $book = Book::find(1);

    //     $this->assertTrue($book->id === 1);
    // }
}
