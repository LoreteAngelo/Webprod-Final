<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <style>
        body {
            background-color: rgb(156,218,245);
        }
        h1 {
            margin-bottom: 20px;
        }
        .table {
            background-color: #ffffff;
            border-radius: 5px;
            overflow: hidden;
        }
        .table th {
            background-color: #343a40;
            color: #ffffff;
        }
        .table tr:hover {
            background-color: #f1f1f1;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .table td {
            border-color: #dee2e6;
        }
        .btn-accept {
            background-color: #28a745;
            color: #fff;
        }
        .btn-reject {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
@include('layouts.sidebar')
<div class="container mt-5">
    <h2>Orders List</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product ID</th>
                <th scope="col">Price</th>
                <th scope="col">Customer Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->customer_name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
