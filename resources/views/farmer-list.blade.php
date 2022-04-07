<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer-list</title>
    <link rel="stylesheet" href="{{ asset('css/farmer-list.css') }}">
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1></div>
        <div class="nav-bar">
          <a class="nav-btn" href="home">Home</a>
            <a class="nav-btn" href="farmer-list">Farmers</a>
            <a class="nav-btn">Employees</a>
            <a class="nav-btn">Deliveries</a>
            <a class="nav-btn">Payments</a>
            <a class="nav-btn">Reports</a>
            <a class="nav-btn">Shajid</a>
            <a class="nav-btn">Settings</a>
        </div>
        <div class="content">
            <table class="table-content">
                <h1 class="table-name">Farmer-List</h1>
                <tr>
                  <th>Serial No:</th>
                  <th>ID No:</th>
                  <th>Name</th>
                  <th>Locality</th>
                  <th>Account No:</th>
                  <th>Phone No:</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->serial_no }}</td>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->locality }}</td>
                  <td>{{ $user->farmers_account }}</td>
                  <td>{{ $user->farmers_phone }}</td>
                  <td>
                      <a class="table-btn" href="#">Edit</a>
                      <a class="table-btn1" href="{{ route('delete.farmer',$user->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach
              </table>    
        </div>
        <div class="add">
        <a class="addbtn" href="add-farmer">Add Farmer</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>