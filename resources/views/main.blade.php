<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Movies</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        
        :root {
            --body-color: rgb(122, 213, 252);
            --color-gray: rgb(144, 213, 255);
            --text-color-second: rgb(0, 0, 0);
            --text-color-third: rgb(20, 43, 53);
            --first-color: rgb(110, 87, 224);
            --first-color-hover: rgb(40, 91, 212);
            --second-color: rgb(0, 201, 255);
            --third-color: rgb(192, 166, 49);
            --first-shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: rgb(156,218,245);
            background-image: url('./images/image.png'); 
            margin: 0;
            padding: 0;
            background-size: cover;
            height: 100vh;
            

        }

        nav {
            position: fixed;
            display: flex;
            justify-content: space-between;
            width: 100%;
            height: 90px;
            line-height: 90px;
            background: var(--body-color);
            padding-inline: 9vw;
            transition: .3s;
            z-index: 100;
            left: 0;
            top: 0; 
        }

        .nav-logo {
            position: relative;
        }

        .nav-name {
            font-size: 30px;
            font-weight: 600;
            color: var(--text-color-third);
        }

        .nav-logo span {
            position: absolute;
            top: -15px;
            right: -20px;
            font-size: 5em;
            color: var(--text-color-second);
        }

        .nav-menu, .nav_menu_list {
            display: flex;
            font-size: 16px;
        }

        .nav-menu .nav_list {
            list-style: none;
            position: relative;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-color-second);
            font-weight: 500;
            padding-inline: 15px;
            margin-inline: 20px;
        }

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

        :root {
            --primary-color: #03045e;
            --color: #4581cf;
            --black: #666;
            --white: #fff;
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0; padding: 0;
            box-sizing: border-box;
            outline: none; border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scroll-padding-top: 4rem;
        }

        section {
            padding: 9rem 7%;
        }

        .heading {
            text-align: center;
            color: var(--primary-color);
            text-transform: uppercase;
            margin-bottom: 3rem;
            padding: 1.2rem 0;
            font-size: 4rem;
        }

        .heading span {
            color: var(--color);
            text-transform: uppercase;
        }

        .btn {
            display: inline-block;
            border-radius: 5rem;
            background: var(--primary-color);
            color: var(--white);
            box-shadow: var(--box-shadow);
            padding: .9rem 3rem;
            position: relative;
            z-index: 0;
            overflow: hidden;
            font-size: 1.7rem;
            margin-top: 1rem;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            height: 100%;
            width: 0%;
            background: #5858b3;
            z-index: -1;
            left: 0;
            transition: .3s linear;
        }

        .btn:hover::before {
            width: 100%;
        }

        .package .box-container .box {

            display: flex;
            flex-wrap: wrap;
            gap: 3rem;
            align-items: center;
            margin-bottom: 3rem;
            border-radius: 1rem;
            box-shadow: var(--box-shadow);
        }

        .package .box-container .box .image {
            flex: 1 1 30rem;
            height: 30rem;
        }

        .package .box-container .box .image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 1rem 0 0 1rem;
        }

        .package .box-container .box .content {
            padding: 3rem 2rem;
        }

        .package .box-container .box .content,
        .package .box-container .box .price {
            flex: 1 1 calc(30% - 3rem);
        }

        .package .box-container .box .content h3 {
            font-size: 2.2rem;
            color: var(--color);
        }

        .package .box-container .box .content p {
            font-size: 1.6rem;
            color: var(--black);
            padding-top: 1.5rem;
            line-height: 1.8;
        }

        .package .box-container .box .price {
            padding: 6.9rem 2rem;
            text-align: center;
            color: #fff;
            background: #4581cf;
            border-radius: 0 1rem 1rem 0;
        }

        .package .box-container .box .price h4 {
            font-size: 2.9rem;
            margin-bottom: 1rem;
        }

        .package .box-container .box .price h5 {
            margin-bottom: 2rem;
            font-size: 1.7rem;
        }

        .package .box-container .box .price .stars i {
            color: var(--white);
            font-size: 1.7rem;
            margin-bottom: 1rem;
        }
    </style>

    <div class="container">
        <nav id="header">
            <div class="nav-logo">
                <p class="nav-name">AMS.</p>
                <span>.</span>
            </div>
            <div class="nav-menu" id="myNavMenu">
                <ul class="nav_menu_list">
                    <li class="nav_list">
                        <a href="{{url('/')}}" class="nav-link active-link">Home</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="{{url('/contact')}}" class="nav-link">Contact Us</a>
                        <div class="circle"></div>
                    </li>
                    <li class="nav_list">
                        <a href="{{url('/about')}}" class="nav-link">About</a>
                        <div class="circle"></div>
                    </li>
                </ul>
            </div>
        </nav>

        <section class="package" id="package">
            <h1 class="heading"><span>AVAILABLE </span> MOVIES</h1>
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="images/flash.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Flash</h3>
                        <p>Barry Allen uses his super-speed abilities to travel back in time to prevent his mother's murder, inadvertently altering the timeline and creating unforeseen consequences.

</p>
                    </div>
                    <div class="price">
                        <h4>P250</h4>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#orderModal">ORDER NOW!</button>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/star.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>
                        Star Wars: The Rise of Skywalker</h3>
                        <p>The surviving members of the Resistance face the First Order once more, and the legendary conflict between the Jedi and the Sith reaches its climax with the fate of the galaxy hanging in the balance.</p>
                    </div>
                    <div class="price">
                        <h4>P250</h4>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#orderModal">ORDER NOW!</button>
                    </div>
                </div>
    <!-- Bootstrap Modal -->
 <!-- resources/views/modals/orderModal.blade.php -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Submit Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="orderForm" action="{{ route('modals') }}" method="POST">
                    @csrf
                    <!-- Add your form fields here -->
                    <div class="mb-3">
                        <label for="product_id" class="form-label">Movie ID</label>
                        <input type="number" class="form-control" id="product_id" name="product_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Price</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="250" readonly required>
                    </div>
                    <div class="mb-3">
                        <label for="customer_name" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name" required>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="orderForm" class="btn btn-primary">Submit Order</button>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
