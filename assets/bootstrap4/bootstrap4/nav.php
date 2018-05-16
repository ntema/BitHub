<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width;initial-scale=1.0'>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        
        <style type="text/css">
            body{
                padding-top: 70px;
            }
            .navbar-dark .navbar-brand {
              color: darkorchid;
            }

            .navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
              color: #fff;
            }

            .navbar-dark .navbar-nav .nav-link {
              color: rgba(255, 255, 255, 0.5);
            }

            .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
              color: rgba(255, 255, 255, 0.75);
            }

            .navbar-dark .navbar-nav .nav-link.disabled {
              color: rgba(255, 255, 255, 0.25);
            }

            .navbar-dark .navbar-nav .show > .nav-link,
            .navbar-dark .navbar-nav .active > .nav-link,
            .navbar-dark .navbar-nav .nav-link.show,
            .navbar-dark .navbar-nav .nav-link.active {
              color: #fff;
            }

            .navbar-dark .navbar-toggler {
              color: rgba(255, 255, 255, 0.5);
              border-color: rgba(255, 255, 255, 0.1);
            }
        </style>
        
	</head>

	<body >
        <div class='container-fluid lined'>
            <header>
                <nav class="navbar fixed-top navbar-light bg-light navbar-toggleable-md navbar-expand-lg">
                    <a class='navbar-brand' href='#'>BitHub</a>
                    <button class='navbar-toggler navbar-toggler-right' data-toggle='collapse' data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id='myNav'>
                        <ul class='navbar-nav'>
                            <li class='nav-item'>
                                <a class='nav-link active' href='nav.php'>Home</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='grid.php'>About-Us</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='phpintro.php'>Services</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='cards.php'>Contact-Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="row lined">
                
                <section class="col">
                    <nav class='nav flex-column'>
                        <a class="nav-link nav-item" href="#">Home</a>
                        <a class="nav-link" href="#">About Us</a>
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link" href="#">Contact</a>
                    </nav>
                </section>
                
                <section class="col">
                    <nav>
                        <ul class='nav nav-tabs nav-pills '>
                            <li class='nav-item'>
                                <a class='nav-link active' href='#'>Home</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#'>About-Us</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#'>Services</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='#'>Contact-Us</a>
                            </li>
                        </ul>
                    </nav>
                </section>
                <section class="col">c</section>
            </div>
            
            <div class="row lined">
                <nav>
                    <ul class='nav nav-tabs nav-pills  justify-content-center'>
                        <li class='nav-item'>
                            <a class='nav-link active' href='#'>Home</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>About-Us</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>Services</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link' href='#'>Contact-Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            
            
            
        </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>