@csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $products->name?? "") }}">

    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control">{{ old('description', $products->description ?? "") }}</textarea>

    <label for="size">Size</label>
    <input type="text" name="size" id="size" class="form-control" value="{{ old('size', $products->size ?? "") }}"> <br>

    <button class="btn btn-primary">Save</button>