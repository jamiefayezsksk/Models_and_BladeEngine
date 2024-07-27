@extends('layouts.app')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead>
            <tr>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">ID</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">ISBN</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Title</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Author</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Description</th>
                <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm border border-gray-300">Date Published</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-300">
            @foreach ($books as $book)
                <tr class="hover:bg-gray-50">
                    <td class="w-1/6 py-3 px-4 border border-gray-300">{{ $book->id }}</td>
                    <td class="w-1/6 py-3 px-4 border border-gray-300">{{ $book->isbn }}</td>
                    <td class="w-1/6 py-3 px-4 border border-gray-300">{{ $book->title }}</td>
                    <td class="w-1/6 py-3 px-4 border border-gray-300">{{ $book->author }}</td>
                    <td class="w-1/6 py-3 px-4 border border-gray-300">{{ $book->description }}</td>
                    <td class="w-1/6 py-3 px-4 border border-gray-300">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
