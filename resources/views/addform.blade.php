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
    <a class="navbar-brand" href="index" style="color: white;">Home</a>
    <a class="nav-link" href="addnew" style="color: white;">New Data</a>
  </nav>
  <div class="container">
    <h2 class="text-center">Form Data Book</h2>
    <form action="{{url('/api/book/store')}}" method="post" class="center">
    @csrf
      <div class="form-group">
      <label for="name">Name</label> <br>
      <input class="form-control" type="text" name="name"> <br>
      <label for="description">Description</label> <br>
      <input class="form-control" type="text" name="description"> <br>
      <label for="image_url">Url Image</label> <br>
      <input class="form-control" type="text" name="image_url"> <br> <br>
    </div>
    <div class=" mx-auto" style="width: 160px;">
      <button class="btn btn-primary" type="submit">Update</button>
      <br><br>
    </div>
    </form>
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
