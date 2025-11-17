<x-layout>
    <h1>Add New Product</h1>
    
    <x-error />

    <form action="{{ route('products.store') }}" method="post">
        <x-products.form />
    </form>

</x-layout>