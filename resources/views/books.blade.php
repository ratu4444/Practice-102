<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add-books')}}" method="POST">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <div class="form-group">
    <label>Books Name</label>
    <input type="text" name="bname" class="form-control" id="bname"  placeholder="Enter Books Name">
  </div>
  <div class="form-group">
    <label>Author</label>
    <input type="text"  name="author" class="form-control" id="author" placeholder="Enter Author Name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>