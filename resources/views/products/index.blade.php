@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(session('success'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-header">Product data's</div>
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-primary">Add data</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($product as $data)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $data -> name_product }}</td>
                                    <td>Rp{{ $data -> price }},-</td>
                                    <td>{{ $data -> description }}</td>
                                    <td>{{ $data -> brand -> name_brand }}</td>
                                    <td>
                                        <img src="{{ asset('/images/product/' . $data->cover) }}" width="100">
                                    </td>
                                    <form action="{{ route('product.destroy', $data -> id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <td>
                                        <a href="{{ route('product.edit', $data -> id )}}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('product.show', $data -> id )}}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                            Delete
                                        </button>
                                    </form>
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
