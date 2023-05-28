<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gestion des Employees</title>
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
  <div class="bg-dark py-3">
    <div class="container">
      <div class="h4 text-white">Application de Gestion des Employees</div>
    </div>
  </div>

  <div class="container py-5">
    <div class="d-flex justify-content-between">
      <div class="h5">Employees</div>
      <div>
        <a href="{{route('employees.create')}}" class="btn btn-primary px-5">Create</a>
      </div>
    </div>
    <div class="my-3">
      @if (Session::has('success'))
        <div class="alert alert-success">
          {{Session::get('success')}}
        </div>
     @endif
    </div>
    <div class="card border-0  shadow-lg my-3">
        <table class="table table-striped rounded">
          <thead>
            <tr>
              <th class="p-4">ID</th>
              <th class="py-4">Image</th>
              <th class="py-4">Name</th>
              <th class="py-4">Email</th>
              <th class="py-4">Address</th>
              <th class="py-4">Action</th>
            </tr>
        </thead>  
        <tbody>
            @if ($employees->isnotEmpty())
                @foreach ($employees as $employee)
                <tr valign="middle">
                  <td class="p-4">{{$employee->id}}</td>
                  <td class="py-3">
                    @if ($employee->image != '' && file_exists(public_path().'/uploads/employees/'.$employee->image))
                        <img src="{{url('uploads/employees/'.$employee->image)}}" alt=""
                         width="40" height="40" class="rounded-circle">
                    @else
                         <img src="{{url('assets/images/f2.png')}}" alt=""
                         width="40" height="40" class="rounded-circle">
                    @endif
                  </td>
                  <td class="py-3">{{$employee->name}}</td>
                  <td class="py-3">{{$employee->email}}</td>
                  <td class="py-3">{{$employee->address}}</td>
                  <td class="py-3">
                    <a href="{{route('employees.edit', $employee->id)}}" class="btn btn-primary btn-sm px-3">Edit</a>
                    <a href="#" onclick="deleteEmployee({{$employee->id}})" class="btn btn-danger btn-sm px-3">Delete</a>
                    <form id="employee-edit-action-{{$employee->id}}" action="{{route('employees.delete', $employee->id)}}" method="POST">
                      @csrf
                      @method('delete')

                    </form>
                  </td>
                </tr>
                @endforeach
            @else
                <tr>
                  <td colspan="6">Record Not Found</td>
                </tr>
            @endif
          </tbody>
          </table>
    </div>
    <div class="my-7">
      {{$employees->links()}}
    </div>
  </div>
</body>
</html>

<script>
  function deleteEmployee(id){
    if(confirm("Are you sure you want to delete ?!!")){
      document.getElementById('employee-edit-action-'+id).submit();
    }
  }
</script>