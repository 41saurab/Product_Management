<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href=" {{ route('product.create') }} " class="btn btn-primary">Add product</a>
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>SKU</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Actual Price</th>
                        <th>Dis(%)</th>
                        <th>Selling Price</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($products as $index=>$product)
                    <tr>
                        <td> {{ ++$index }} </td>
                        <td>{{ $product->sku }}</td>
                        <td> <img src="{{ $product->image }}" width="60" alt=""> </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->actual_price }}</td>
                        <td>{{ $product->discount_percent }}</td>
                        <td>{{ $product->selling_price }}</td>
                        <td>
                            <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>