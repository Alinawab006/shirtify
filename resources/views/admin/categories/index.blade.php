<<<<<<< HEAD

@extends("admin.layout")



@section("main")
=======
@extends('layout')

@section("main")

>>>>>>> e913be4ecb0141bebcd03a73d851e618bcf7c217
{{-- Create Message --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- Delete Message --}}
    @if(session('delete'))
    <div class="alert alert-danger">
        {{ session('delete') }}
    </div>
    @endif

    {{-- Update Message --}}
    @if(session('update'))
    <div class="alert success-danger">
        {{ session('update') }}
    </div>
    @endif

    <h1>All Categories </h1>
<<<<<<< HEAD
    <a class="btn btn-sm btn-warning mb-3" href="{{ route('cat.create') }}">Create Category</a>
=======
    <a class="btn btn-sm btn-warning mb-3" href="{{ route("cat.create") }}">Create Category</a>
>>>>>>> e913be4ecb0141bebcd03a73d851e618bcf7c217
    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cats as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    
                    <td>{{ $cat->name }}</td>
                    <td>
<<<<<<< HEAD
                        <a href="#" class="btn btn-sm btn-warning me-1">Edit</a>
                        <a href="{{ route('cat.delete' , $cat->id ) }}" class="btn btn-sm btn-danger me-1">Delete</a>
=======
                        <a href="{{ route('cat.edit', $cat->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                        <a href="{{ route('cat.delete', $cat->id) }}" class="btn btn-sm btn-danger me-1">Delete</a>
>>>>>>> e913be4ecb0141bebcd03a73d851e618bcf7c217

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No Category found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
<<<<<<< HEAD
@endsection
=======
    
@endsection
>>>>>>> e913be4ecb0141bebcd03a73d851e618bcf7c217
