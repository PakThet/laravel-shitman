<x-layout>
    <h1>This is Product Page</h1>
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif 
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
    <p>================================</p>
    @foreach ($products as $product)
    <h2><a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">View</a></h2>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-success">Edit</a>
        <form action="{{ route('products.destroy', $product) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this product?');">
            @csrf
            @method('DELETE')
            <button class="btn btn-outline-danger">Delete</button>
        </form>
        <p>================================</p>
    @endforeach
</x-layout>