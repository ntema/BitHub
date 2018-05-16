<!doctype html>
<html>
	<head>
		<title></title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width;initial-scale=1.0'>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        
        <style type="text/css">
            div, .lined{
                border: solid 1px red;
            }
            .row{
                margin: 10px 0;
            }
            .high{
/*                min-height: 200px;*/
            }
            
        </style>
	</head>

	<body >
        <div class='container-fluid lined'>            
            <div class="row lined align-item-start high">
                <section class="col lined">a</section>
                <section class="col mx-3 lined">b</section>
                <section class="col lined">c</section>
            </div>
            
            <div class="row lined">
                <section class="col-xl col-lg col-md-6 lined">a-xl||lg</section>
                <section class="col-xl col-lg col-md-6 lined">b-xl||lg</section>
                <section class="col-xl col-lg col-md lined">c-xl||lg</section>
            </div>
            
            <div class="row lined">
                <section class="w-50 lined">75%</section>
                <section class="col lined">c</section>
            </div>
            
            <div class="row lined">
                <section class="col lined">a</section>
                <section class="col lined">b</section>
                <div class="w-100"></div>
                <section class="col lined">c</section>
                <section class="col lined">d</section>
            </div>
            
            <div class="row lined">
                <section class="col lined">a</section>
                <section class="col-9 lined">b</section>
                <section class="col lined">c</section>
            </div>
            
            <div class="row lined">
                <section class="col lined">a</section>
                <section class="col-md-auto lined">
                    Oghenetega melisa Udi
                </section>
                <section class="col-6 lined">c</section>
            </div>
            
            <div class="row lined">
                <section class="col-xl-4 col-lg-4 col-md-6 lined">a</section>
                <section class="col-xl-4 col-lg-4 col-md-6 lined">b</section>
                <section class="col-xl-4 col-lg-4 col-md-6 lined">c</section>
            </div>
            
            <div class="row justify-content-center lined">
                <section class="col-9 lined">a</section>
                <section class="col-6 lined">b</section>
                <section class="col-4  lined">c</section>
            </div>
            
            <div class="row justify-content-center lined">
                <section class="col-8 lined">a</section>
                <section class="col-4  lined">
                    <div class='row'>b1</div>
                    <div class='row'>b2</div>
                </section>
            </div>
            
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
	</body>
</html>