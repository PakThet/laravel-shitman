<x-layout>
    <h1>This is Product Page</h1>
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif 
    <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
    <table class="table table-striped">
        <tr>
            <td>Name</td>
            <td>Description</td>
            <td>Size</td>
            <td>Action</td>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->size }}</td>
            <td>
                <div class="d-flex gap-2">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-success">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $products->links('pagination::bootstrap-5') }}
</x-layout>