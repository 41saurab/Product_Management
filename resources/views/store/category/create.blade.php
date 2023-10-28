<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('category.index') }}" class="btn btn-primary">Category List</a>

                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name <span class="text-danger">*</span> </label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="eg. Meat">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
