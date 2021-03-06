<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
    <link rel="stylesheet" href="{{ asset('css/farmer-list.css') }}">
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1>
          <div class="btn-logout">
            <a class="logout" href="{{ route('home') }}">Logout</a>
          </div>  
        </div>
        <div class="nav-bar">
          <a class="nav-btn" href="{{ url('/home') }}">Home</a>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn">Payment</a>
            <a class="nav-btn">Report</a>
            {{-- <a class="nav-btn">Setting</a> --}}
        </div>
        <div class="content">
            <table class="table-content">
                <h1 class="table-name">Delivery</h1>
                <tr>
                  <th>Company Name</th>
                  <th>Company Id</th>
                  <th>Address</th>
                  <th>Milk Amount</th>
                  <th>Price</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->company_name }}</td>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->address }}</td>
                  <td>{{ $user->milk_amount }}</td>
                  <td>{{ $user->price }}</td>
                  <td>{{ $user->status }}</td>
                  <td>
                      <a class="table-btn" href="#">Update</a>
                      <a class="table-btn1" href="#">Delete</a>
                  </td>
                </tr>
                @endforeach
              </table>    
        </div>
        <div class="add">
        <a class="addbtn" href="#">Add Delivery</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>