<x-layout>
    <h1>This is Product Page</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
    <p>================================</p>
    @foreach ($products as $product)
    <h2><a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">View</a></h2>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-success">Edit</a>
        <p>================================</p>
    @endforeach
</x-layout>