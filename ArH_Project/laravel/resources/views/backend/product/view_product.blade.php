@extends('backend.master')

@section('content')

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12 m-auto">
                <div class=" ofset-2 ">
                    <div class="card text-black bg-light mt-3 " style="max-width:100%">
                        <div class="card-header text-center bg-success text-white">
                            <h3>Product List</h3>
                        </div>
                        <div class="card-body ">
                            @if(session('delete'))
                            <div class="alert alert-warning" role="alert">
                                {{session('delete')}}
                            </div>
                            @endif

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Category </th>
                                        <th scope="col">Sub cat</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $item)
                                    <tr>
                                        <th scope="row">{{$loop->index + 1}}</th>
                                        <td>{{$item->product_name ?? 'N/A'}}</td>
                                        {{-- Subcategory table-> category table->category_name --}}
                                        <td>{{$item->get_category->category_name }}</td>
                                        <td>{{$item->get_subcategory->subcategory_name }}</td>


                                        <td>{{$item->product_name}}</td>
                                        <td>${{$item->product_price}}</td>
                                        <td>{{$item->product_quantity}}</td>
                                        <td><img src="{{url('/img/thumbnail/').'/'.$item->product_thumbnail}}"
                                                width="80px" alt="image"></td>
                                        <td>
                                            <a href="{{url('edit-product')}}/{{$item->id}}" class="btn btn-outline-primary">View</a>
                                            <a href="{{url('edit-product')}}/{{$item->id}}" class="btn btn-outline-warning">Edit</a>
                                            <a href="{{url('delete-product')}}/{{$item->id}}" class="btn btn-outline-danger">Delete</a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{$products->links()}}
                    @endsection
