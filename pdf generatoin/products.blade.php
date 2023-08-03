<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Arif Group of Companies</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Add your theme styles here */
    body {
      background-color: #333;
      color: #fff;
    }

    .navbar {
      background-color: #222;
      color: #fff;
    }

    .footer {
      background-color: #222;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .header-buttons {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .header-buttons a {
      margin: 0 10px;
      text-decoration: none;
      color: #fff;
      padding: 10px 20px;
      border: 1px solid #fff;
      border-radius: 5px;
    }

    .header-buttons a:hover {
      background-color: #964B00;
    }

    .content-section {
      display: flex;
      align-items: center;
      padding: 50px 0;
      text-align: left;
    }

    .content-section img {
      max-width: 50%;
      margin: 0 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .content-section-text {
      flex: 1;
    }

    .content-section-text h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    /* Media query for small screens */
    @media (max-width: 768px) {
      .content-section {
        flex-direction: column;
      }
      .content-section img {
        max-width: 100%;
      }
    }
    .navbar {
      background-color: #964B00;
      border-color: #964B00;
    }

    .navbar-brand {
      font-weight: bold;
      color: #fff;
    }
    .nav-link {
      font-weight: bold;
      color: #fff;
    }
    *{
      color : white;
    }
    
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="mainpage">Arif Group of Companies</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
          <a class="nav-link" href="products">Products</a>
        </li>
      <li class="nav-item active">
          <a class="nav-link" href="register">Register</a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="career">Career</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container mt-4">
        <h2 style="color: white;">Products List</h2>
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Available Items</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>
                    <img src="{{ asset($product->image_url . '.PNG') }}" alt="{{ $product->name }}" style="max-width: 100px;">

    
                    </td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->available_items }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
<a href="pdfGeneration" class="btn btn-success"> Download PDF</a>
    </div>

    <footer class="footer">
    <p>&copy; 2023 Arif Group of Companies. All rights reserved.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>