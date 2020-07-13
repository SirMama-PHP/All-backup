@extends('layouts.app')

@section('content')
<body class="container ">
 <div class="col-md-10 m-auto">
    <div class=" ofset-2 ">
        <div class="card text-black bg-light mt-3 " style="max-width:100%">
            <div class="card-header text-center bg-success text-white">
                <h3>View Sub Category (Total - {{$scount}})</h3>
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
      <th scope="col">Sub Category Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($subcategories as $subcategor)
    <tr>
      <th scope="row">{{$loop->index + 1}}</th>
      <td>{{$subcategor->subcategory_name ?? 'N/A'}}</td>
      {{-- Subcategory table-> category table->category_name --}}
      <td>{{$subcategor->get_category->category_name }}</td>
      <td>{{$subcategor->created_at == ''? 'N/A' : $subcategor->created_at->format('d-m-y').'  ('.$subcategor->created_at->diffForHumans().')'}}</td>
      <td>
            <a href="{{url('edit-category')}}/{{$subcategor->id}}" class="btn btn-outline-primary">Edit</a> 
            <a href="{{url('delete-subcategory')}}/{{$subcategor->id}}" class="btn btn-outline-danger">Delete</a> 
     </td>

    </tr>
    @endforeach
  
  </tbody>
</table>
{{$subcategories->links()}}
@endsection