@extends('admin.master')

@section('body')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Dashboard</h4>
        </div>
        <div class="col-md-7 align-self-center text-end">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb justify-content-end">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-5 align-self-center">
                            <h4 class="card-title">Brand Table</h4>
                        </div>
                        <div class="col-md-7 align-self-center text-end">
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="{{ route('brand.create') }}" type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                                        class="fa fa-plus-circle"></i> Create New</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Brand Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $brand)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $brand->brand_name }}</td>
                                        <td>{{ $brand->brand_description }}</td>
                                        <td><img src="{{ asset($brand->brand_image) }}" alt="{{ $brand->brand_name }}"
                                                height="50" width="80" /></td>
                                        <td>{{ $brand->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            @if ($brand->status == 2)
                                                <a href="{{ route('brand.status', $brand->id) }}"
                                                    class="btn btn-success btn-sm">
                                                    <i class="ti-arrow-up"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('brand.status', $brand->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="ti-arrow-down"></i>
                                                </a>
                                            @endif

                                            <a href="{{ route('brand.edit', $brand->id) }}"
                                                class="btn btn-info btn-sm">
                                                <i class="ti-pencil"></i>
                                            </a>

                                            <a href="{{ route('brand.delete', $brand->id) }}"
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
