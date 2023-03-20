<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset">
      <h4>Welcome To Dashboard</h4>
      <hr>
      <table class="table">
        <thead>
          <!-- <th>Name</th> -->
          <th>Email</th>
          <th>Action</th>
        </thead>
            <tr>
              <!-- <td>{{$data->name}}</td> -->
              <td>{{$data->email}}</td>
              <td><a href="logout">Logout</a></td>
            </tr>
      </table>

    </div>

  </div>
  
 
</body>
</html>