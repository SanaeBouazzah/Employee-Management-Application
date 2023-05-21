<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple CRUD Laravel</title>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
  <div class="bg-dark py-3">
    <div class="container">
      <div class="h4 text-white">Simple CRUD Laravel</div>
    </div>
  </div>

  <div class="container py-5">
    <div class="d-flex justify-content-between">
      <div class="h5">Employees</div>
      <div>
        <a href="{{route('employees.index')}}" class="btn btn-primary">Back</a>
      </div>
    </div>
    <div class="card border-0 shadow-lg my-4">
      <div class="card-body">
        <form action="">
          <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name..">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>