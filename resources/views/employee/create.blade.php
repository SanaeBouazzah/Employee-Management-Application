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
        <form action="{{route('employees.store')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name.." class="form-control">
            @error('name')
            <p class="valid-feedback">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-control">Email:</label>
            <input type="text" name="email" id="email" placeholder="Enter your email.." class="form-control">
          </div>
          <div class="mb-3">
            <label for="address" class="form-control">Address:</label>
            <textarea type="text" name="address" id="address" placeholder="Enter your address.." class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <input type="file" name="image" id="image" class="form-control">
          </div>
          <div class="my-4">
            <button class="form-control btn btn-primary">Save Employees</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>