<!-- resources/views/search/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Results for "{{ $query }}"</h1>

        @if($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach($results as $product)
                    <li>
                        <h2>{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                        @if ($product->image)
                        <img src="{{asset('assets/images/fashion/product/front')}}/{{$product->image}}" class="img-fluid blur-up lazyload" alt="{{$product->name}}">
                        @endif
                        <!-- Add other product details as needed -->
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
