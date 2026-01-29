@extends('admin.master')

@section('body')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <hr />
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Category Name</th>
                                    <th>Category Description</th>
                                    <th>Category Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td><img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                                height="50" width="80" /></td>
                                        <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            @if ($category->status == 2)
                                                <a href="{{ route('category.status', $category->id) }}"
                                                    class="btn btn-success btn-sm">
                                                    <i class="ti-arrow-up"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('category.status', $category->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="ti-arrow-down"></i>
                                                </a>
                                            @endif
                                            
                                            <a href="{{ route('category.edit', $category->id) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="ti-pencil"></i>
                                            </a>



                                            <a href="{{ route('category.delete', $category->id) }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
