@extends('layouts.app')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border border-blue-200">ID</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">ISBN</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Title</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Author</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Description</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Date Published</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach ($books as $book)
                <tr class="hover:bg-gray-100">
                    <td class="w-1/6 py-3 px-4 border border-blue-200">{{ $book->id }}</td>
                    <td class="w-1/6 py-3 px-4 border border-blue-200">{{ $book->isbn }}</td>
                    <td class="w-1/6 py-3 px-4 border border-blue-200">{{ $book->title }}</td>
                    <td class="w-1/6 py-3 px-4 border border-blue-200">{{ $book->author }}</td>
                    <td class="w-1/6 py-3 px-4 border border-blue-200">{{ $book->description }}</td>
                    <td class="w-1/6 py-3 px-4 border border-blue-200">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
