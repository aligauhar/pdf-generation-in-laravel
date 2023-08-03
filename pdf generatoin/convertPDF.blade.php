<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arif Group of Companies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 20px;
            border: 1px solid #333;
            padding: 20px;
        }

        .company-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .company-info h2 {
            color: #333;
        }

        .company-address {
            text-align: center;
            margin-bottom: 10px;
        }

        .company-address p {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="company-info">
            <h2>Companies</h2>
        </div>
        <div class="company-address">
            <p>PECHS, Karachi</p>
        </div>
        <div class="timestamp">
            <p>Generated on: {{ now() }}</p>
        </div>
        <h2 style="color: #333;">Products List</h2>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Available Items</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->available_items }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer class="footer">
        <p>&copy; 2023  Group of Companies.</p>
    </footer>
</body>

</html>
