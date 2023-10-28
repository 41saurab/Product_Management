<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('category.index') }}" class="btn btn-primary">Category List</a>

                <form action="{{ route('category.update',$category->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Category Name <span class="text-danger">*</span> </label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="eg. Meat" value="{{ $category->name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>