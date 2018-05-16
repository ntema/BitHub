<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width;initial-scale=1.0'>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css" rel="stylesheet">
            .row section, .row div{
                border: solid 1px red;
            }
        </style>
	</head>

	<body>
        <main>
            <div class='row'>
                <section class="col-lg col-md col-sm-6">A1</section>
                <div class="col-lg-7 col-md col-sm-6">B1</div>
                <section class="col-lg col-md col-sm-6">C1</section>
            </div>
            
            <div class='row'>
                <section class="col-xl row">
                    <section class="col-xl-8">A1</section>
                    <div class="col-xl-4">B1</div>
                </section>
                <div class="col-xl">B</div>
                <div class="w-100"></div>
                <section class="col-xl">C</section>
                <div class="col-xl">D</div>
            </div>
            
            <div class='row'>
                <section class="col-lg">A1</section>
                <div class="col-lg-7">B1</div>
                <section class="col-lg">C1</section>
            </div>
            
            <div class='row'>
                <section class="col-lg-auto">kdkdiis dkiskdk sidk diisk diidks ikdkis </section>
                <div class="col-lg-2">B</div>
                <section class="col-lg">C</section>
            </div>
        
        
        </main>
        
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
	</body>
</html>