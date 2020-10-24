@extends('layout')

@section('body')

    <div class="pb-16 max-w-screen-xl mx-auto">
        <h3 class="text-3xl mb-8 text-gray-600">News</h3>
        <div class="grid grid-cols-4 gap-4">
            @collection('news')

                <a href="/news/{{ $entry['slug'] }}" class="opacity-75 hover:opacity-100 p-2 bg-white rounded w-64">
                    <div class="bg-cover bg-no-repeat bg-center pb-48" style="background-image: url({{ $entry['image'] }})"></div>
                    <div class="mt-4 h-">{{ $entry['title'] }}</div>
                </a>

            @endcollection
        </div>

    </div>

@endsection
