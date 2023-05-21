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
        <a href="" class="btn btn-primary">Create</a>
      </div>
    </div>
    <div class="card border-0 shadow-lg my-4">
      <div class="card-body">
        <table class="table table-striped">
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <td>
                <a href="" class="btn btn-primary btn-sm">Edit</a>
                <a href="" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
          </table>
      </div>
    </div>
  </div>
</body>
</html>