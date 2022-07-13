<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_latest_books_endpoint_returns_data()
    {
        $response = $this->get('/api/books/latest');

        $response->assertJson([
            'data' => []
        ]);
    }
}
