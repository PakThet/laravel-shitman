<x-layout>
    <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Back</a>
    <h1>{{ $products->name }}</h1>
    <p>{{ $products->description }}</p>
    <p>{{ $products->size }}</p>
    <a href="{{ route('products.edit', $products->id) }}" class="btn btn-outline-primary">Edit</a>
</x-layout>
