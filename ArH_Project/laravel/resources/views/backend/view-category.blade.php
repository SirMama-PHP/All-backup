@extends('layouts.app')

@section('content')
<body class="container ">
 <div class="col-md-10 m-auto">
    <div class=" ofset-2 ">
        <div class="card text-black bg-light mt-5 " style="max-width:100%">
            <div class="card-header text-center bg-success text-white">
                <h3>View Category</h3>
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
      <th scope="col">Name</th>
      <th scope="col">Category at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($category as $cat)
    <tr>
      <th scope="row">{{$loop->index + 1}}</th>
      <td>{{$cat->category_name ?? 'N/A'}}</td>
      <td>{{$cat->created_at == ''? 'N/A' : $cat->created_at->format('d-m-y').'  ('.$cat->created_at->diffForHumans().')'}}</td>
      <td>
            <a href="{{url('edit-category')}}/{{$cat->id}}" class="btn btn-outline-primary">Edit</a> 
            <a href="{{url('delete-category')}}/{{$cat->id}}" class="btn btn-outline-danger">Delete</a> 
     </td>

    </tr>
    @endforeach
  
  </tbody>
</table>
{{$category->links()}}
@endsection