@if ($errors->any())
    <ol>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ol>
@endif