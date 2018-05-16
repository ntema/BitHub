<?php
    include_once "template_header.php";
?>
<div class="row">
    <h1 class='display-4'>Home</h1>
    <div>
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    		<div class="carousel-inner"> 
				<div class="carousel-item active"> 
					<img class="d-block w-100" src="images/carousela.jpg" alt="First slide">
				</div>
				<div class="carousel-item"> 
					<img class="d-block w-100" src="images/learning.jpg" alt="second slide">
				</div>
			</div>

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
				<li data-target="#myCarousel" data-slide-to="1"></li> 
			</ol>

			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> 
				<span class="carousel-control-prev-icon" aria-hidden="true"></span> 
			</a> 

			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> 
				<span class="carousel-control-next-icon" aria-hidden="true"></span> 
			</a>
		</div>

    </div>
</div>
<?php
    include_once "template_footer.php";
?>