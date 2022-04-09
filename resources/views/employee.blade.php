<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer-list</title>
    <link rel="stylesheet" href="{{ asset('css/employee.css') }}">
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
                  <th>Name</th>
                  <th>ID No:</th>
                  <th>Email</th>
                  <th>Phone:</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </table>    
        </div>
        <div class="add">
        <a class="addbtn" href="add-farmer">Add Employee</a>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>