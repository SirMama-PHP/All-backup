@extends('backend.master')

@section('content')

<body>
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12 m-auto">
                <div class=" ofset-2 ">
                    <div class="card text-black bg-light mt-3 " style="max-width:100%">
                        <div class="card-header text-center bg-success text-white">
                            <h3>Add Sub Category</h3>
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

                            <form action="{{url('add-subcategory-post')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name">Sub Category Name</label>
                                    <div class="col-sm-10">
                                        <input type="text"
                                            class="form-control @error('subcategory_name') is-invalid @enderror"
                                            id="subcategory_name" value="{{old('subcategory_name')}}"
                                            placeholder="Enter Sub Category Name" name="subcategory_name">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="Name"> Category Name</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option value="">Select one</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="form-group text-center ">
                                    <div class="col-sm-offset-2 ">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
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
