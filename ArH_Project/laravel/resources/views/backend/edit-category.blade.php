<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="container ">
 <div class="col-md-8 m-auto">
    <div class=" ofset-2 ">
        <div class="card text-black bg-light mt-5 " style="max-width:100%">
            <div class="card-header text-center bg-success text-white">
                <h3>Edit Category</h3>
            </div>
            <div class="card-body ">
               

                <form action="{{url('/update-category-post')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$category->id}}" name="category_id">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Name">Name</label>
                        <div class="ofset-2">
                            <input type="text"
                            value="{{$category->category_name}}" class="form-control @error('category_name') is-invalid @enderror"
                                id="Name" placeholder="Enter Name" name="category_name">
                            @error('category_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group text-center ">
                        <div class="col-sm-offset-2 ">
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    </div>

</body>

</html>
