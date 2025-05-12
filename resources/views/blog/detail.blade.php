@extends('master')

@section('main')
<div class="container mx-auto my-2 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        {{-- Product Image --}}
        <div>
            @if($product->image_path)
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $product->image_path) }}" class="w-full rounded shadow" alt="{{ $product->name }}">
                </div>
            @else
                <p>No image available.</p>
            @endif
        </div>

        {{-- Product Details --}}
        <div>
            <h1 class="text-3xl font-bold mb-2"> Name: {{ $product->name }}</h1>
            <p class="text-gray-600 mb-1"> <strong>Category:</strong> {{ $product->category->name }}</p>


                <div class="mb-3">
                    <p><strong>Price:</strong>
                        
                        <span class="text-red-500 font-semibold ml-2">
                            ${{ number_format($product->price - $product->discounted_price, 2) }}
                        </span>
                        <i>
                            <span class="line-through text-gray-500">
                            ${{ number_format($product->price, 2) }}
                        </span>
                        </i>
                    </p>
                    <p><strong>Discount:</strong> ${{ number_format($product->discounted_price, 2) }}</p>
                </div>

            

            <p class="mb-2"><strong>Color:</strong> {{ $product->color }}</p>
            <p class="mb-2"><strong>Size:</strong> {{ $product->size }}</p>

            <div class="mt-4">
                <h2 class="text-lg font-semibold mb-2">Description</h2>
                <p class="text-gray-700">{!! $product->description !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection
