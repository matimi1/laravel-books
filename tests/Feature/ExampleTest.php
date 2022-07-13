<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_about_us_page_returns_a_successful_response()
    {
        $response = $this->get('/about-us');

        $response->assertStatus(200);
    }

    public function test_about_us_page_contains_headline()
    {
        $response = $this->get('/about-us');

        $response->assertSee('<h1>About us</h1>', false);
    }

    /**
     * there should be a page /popular containing popular books
     */
    public function test_popular_books_page_exists()
    {
        $response = $this->get('/books/popular');

        $response->assertOk();
    }

    public function test_popular_books_page_contains_headline()
    {
        $response = $this->get('/books/popular');

        $response->assertSee('<h1>Popular books</h1>', false);
    }
}
