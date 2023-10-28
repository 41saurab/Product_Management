<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('product.index') }}" class="btn btn-primary">Product List</a>

                <form action="{{ route('product.update', $product->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="sku">Product sku <span class="text-danger">*</span> </label>
                        <input id="sku" class="form-control" type="text" name="sku" placeholder="eg. CSH234" value="{{ $product->sku }}">
                    </div>

                    <div class="form-group">
                        <label for="name">Product Name <span class="text-danger">*</span> </label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="eg. CSH234" value="{{ $product->name }}">
                    </div>

                    <div class="form-group">
                        <label for="actual_price">Actual Price<span class="text-danger">*</span> </label>
                        <input id="actual_price" class="form-control" type="text" name="actual_price" placeholder="eg. 250" value="{{ $product->actual_price }}">
                    </div>

                    <div class="form-group">
                        <label for="discount_percent">Discount Percent<span class="text-danger">*</span> </label>
                        <input id="discount_percent" class="form-control" type="text" name="discount_percent" placeholder="eg. 10" value="{{ $product->discount_percent }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description <span class="text-danger">*</span> </label>
                        <textarea id="description" class="form-control" name="description" rows="3">{{ $product->description }} </textarea>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Choose Category <span class="text-danger">*</span> </label>
                        <select id="category_id" class="form-control" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->category->id  ? 'selected' : '' }}>{{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="image">Product Image <span class="text-danger">*</span> </label>
                        <input id="image" class="form-control-file" type="file" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>