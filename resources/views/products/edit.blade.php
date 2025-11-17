<x-layout>
    <h1>Edit Product</h1>
    
    <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Back</a>
    <x-error />


    <form action="" method="post">
        <x-products.form :products="$products" />
    </form>

</x-layout>