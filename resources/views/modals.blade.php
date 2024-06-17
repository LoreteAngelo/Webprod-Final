<!-- resources/views/order-success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">

            Your order has been placed successfully!

            
        </div>
        <a href="{{ url('/') }}" class="btn btn-primary">Go Back to Home</a>
    </div>
</body>
</html>