<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('category.create') }}" class="btn btn-primary">Add Category <span class="text-danger">*</span> </a>
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($categories as $index=>$category)
                    <tr>
                        <td> {{ ++$index }} </td>
                        <td> {{ $category->name }} </td>
                        <td> {{ $category->slug }} </td>
                        <td>
                            <a href=" {{ route('category.edit', $category->id) }} " class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>