<head>
    <!-- Include Bootstrap CSS and Bootstrap Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- Custom CSS to define the new navbar color -->
    <style>
        /* Define a new class for the dark teal navbar */
        .navbar-teal-dark {
            background-color: #02474d; /* Dark teal color */
        }
        
        /* Set the text color for the navbar */
        .navbar-teal-dark .navbar-brand,
        .navbar-teal-dark .nav-link {
            color: #fff; /* White text color */
        }

        /* Optional: Hover effect for links */
        .navbar-teal-dark .nav-link:hover {
            color: #b0c7c7; /* Light teal hover effect */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-teal-dark"> <!-- Apply the custom class -->
        <div class="container">
            <a class="navbar-brand d-inline-flex align-items-center" href="g_home.php">
                <i class="bi bi-basket-fill mr-2"></i><h3 class="mb-0">Home</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link d-inline-flex align-items-center mx-2" href="index1.php">
                        <i class="bi bi-shop mr-2"></i><h3 class="mb-0">Products</h3>
                    </a>
                    <a class="nav-item nav-link d-inline-flex align-items-center mx-2" href="view_cart.php">
                        <i class="bi bi-cart-fill mr-2"></i><h3 class="mb-0">Cart (<?php echo $cart->get_cart_count(); ?>)</h3>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Include Bootstrap JS and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    
    <!-- Optional JavaScript -->
    <script>
        $(document).ready(function() {
            // Event listener for toggler button click
            $('.navbar-toggler').click(function() {
                $('#navbarNavAltMarkup').toggleClass('collapse');
            });
        });
    </script>
</body>
