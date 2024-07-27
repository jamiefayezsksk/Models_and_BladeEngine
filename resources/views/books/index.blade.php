@extends('layouts.app')

@section('content')
<div class="table-container">
    <table class="books-table">
        <thead class="column-header-container">
            <tr>
                <th class="column-header">ID</th>
                <th class="column-header">ISBN</th>
                <th class="column-header">Title</th>
                <th class="column-header">Author</th>
                <th class="column-header">Description</th>
                <th class="column-header">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="book-row">
                    <td class="book-cell">{{ $book->id }}</td>
                    <td class="book-cell">{{ $book->isbn }}</td>
                    <td class="book-cell">{{ $book->title }}</td>
                    <td class="book-cell">{{ $book->author }}</td>
                    <td class="book-cell">{{ $book->description }}</td>
                    <td class="book-cell">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
