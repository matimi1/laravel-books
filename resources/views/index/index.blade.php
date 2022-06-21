@extends('layouts/main', [
    'current_page' => 'homepage'
])

@section('scripts')
    <script src="{{ mix('js/latest-books.js') }}" defer></script>
@endsection

@section('content')

<h1>The Best Bookstore</h1>

<p>Looking for a book? We are simply the best! Explore thousands upon thousands of books from all the most famous authors.</p>

<h2>Latest books</h2>

<div id="latest-books"></div>

@endsection
