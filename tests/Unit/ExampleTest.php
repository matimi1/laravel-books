<?php

namespace Tests\Unit;

// the test in this file will be run without setting up
// a laravel application - faster, simpler, but with no
// database access etc. Useful for small units that
// work independently of the application:
// use PHPUnit\Framework\TestCase;

// the tests in this file will first initialize a
// Laravel application so that all the features of the
// project can be tested. Useful for units that use
// the application's functions:
use Tests\TestCase;

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

    public function test_book_can_be_found_in_database()
    {
        $book = Book::find(1);

        $this->assertTrue($book->id === 1);
    }
}
