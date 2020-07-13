@extends('layouts.app')

@section('content')
<body class="container ">
 <div class="col-md-10 m-auto">
    <div class=" ofset-2 ">
        <div class="card text-black bg-light mt-2 " style="max-width:100%">
            <div class="card-header text-center bg-warning">
            <h3>Delete Sub Category - {{$scount}}</h3>
            </div>
            <div class="card-body ">
            @if(session('restore'))
                <div class="alert alert-warning" role="alert">
                    {{session('restore')}}
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
  @forelse($subcategories as $subcategor)
    <tr>
      <th scope="row">{{$loop->index + 1}}</th>
      <td>{{$subcategor->subcategory_name ?? 'N/A'}}</td>
      <td>{{$subcategor->category_id ?? 'N/A'}}</td>
      <td>{{$subcategor->created_at == ''? 'N/A' : $subcategor->created_at->format('d-m-y').'  ('.$subcategor->created_at->diffForHumans().')'}}</td>
      <td>
            <a href="{{url('/restore-subcategory')}}/{{$subcategor->id}}" class="btn btn-outline-primary">Restore</a> 
            <a href="{{url('/permanent-subcategory')}}/{{$subcategor->id}}" class="btn btn-outline-danger">Permanent-Delete</a> 
     </td>

    </tr>
    @empty
    <tr>
        <td class="text-danger text-center" colspan="43">
            <h1 >No Data in Table</h1>
        </td>
    </tr>    
    @endforelse
  
  </tbody>
</table>
{{$subcategories->links()}}
@endsection