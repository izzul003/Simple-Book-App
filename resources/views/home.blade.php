<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book App</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-light bg-primary justify-content-between">
    <a class="navbar-brand" href="/api/book/index" style="color: white;">Home</a>
    <a class="nav-link" href="addnew" style="color: white;">New Data</a>
  </nav>
  <div class="jumbotron">
    <div class="container">
    <h1 class="display-4">Hello, Worlds!</h1>
    <h3>Welcome in Book Application</h3>
    <p class="lead">This is a simple book App, In here you can see all data of book.</p>
    </div>  
</div>
<div class="container ">
  <div class="row">
    @foreach ($data as $key=>$value)
    <div class="col-lg-4 col-md-4 col-sm-12 p-2">
      <div class="card m-3 mx-auto" style="width: 18rem; height: 27rem;">
        <img class="card-img-top" src="{{$value->image_url}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$value->name}}</h5>
        </div>
        <div class="card-body">
          <a href="show/{{$value->id}}" class="btn btn-info">Update</a>
          <a href="delete/{{$value->id}}" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
  <div class="footer">
    <footer><h6 class="text-center">CopyRight &reg; izzul</h6></footer>
  </div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
