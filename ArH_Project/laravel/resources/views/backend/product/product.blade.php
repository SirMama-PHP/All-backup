@extends('backend.master')

@section('content')

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12 m-auto">
                <div class=" ofset-2 ">
                    <div class="card text-black bg-light mt-3 " style="max-width:100%">
                        <div class="card-header text-center bg-success text-white">
                            <h3>Add Product</h3>
                        </div>
                        <div class="card-body ">
                            @if(session('success'))
                            <div class="alert alert-warning" role="alert">
                                {{session('success')}}
                            </div>
                            @endif

                            @if(session('update'))
                            <div class="alert alert-warning" role="alert">
                                {{session('update')}}
                            </div>
                            @endif

                            <form action="{{url('add-product-post')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('subcategory_name') is-invalid @enderror"
                                            id="product_name" value="{{old('product_name')}}"
                                            placeholder="Enter Product name" name="product_name">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name"> Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">Select one Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Sub Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="subcategory_id" id="subcategory_id" class="form-control">
                                            <option value="">Select one Subcategory</option>
                                            @foreach ($subcategory as $scategory)
                                            <option value="{{$scategory->id}}">{{$scategory->subcategory_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                {{-- =================================================================================== --}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Product Summary</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="product_summary" id="product_summary"
                                            placeholder="Enter Product Summary"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Product Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="product_description"
                                            id="product_description" placeholder="Enter Product Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Product Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="product_price"
                                            placeholder="Enter Product Price" name="product_price">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Product Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="product_quantity"
                                            placeholder="Enter Product Quantity" name="product_quantity">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Product Thumbnail</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="product_thumbnail"
                                            placeholder="Enter Product Thumbnail" name="product_thumbnail" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Preview Img</label>
                                    <div class="col-sm-10">
                                        <img id="blah" alt="your image" width="100" height="100" />  
                                    </div>
                                </div>


                                {{-- ================================================================= --}}
                                <div class="form-group text-center ">
                                    <div class="col-sm-offset-2 ">
                                        <button type="submit" class="btn btn-outline-primary">Save</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    @endsection
