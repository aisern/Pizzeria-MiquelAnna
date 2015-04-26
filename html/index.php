<?php include("header.php") ?>
			

<div class="row">
	<div class="col-sm-12">
		<div class="jumbotron">
			<h1 class="animate pizza-title">Pizzeria Happy :)</h1>
			<p class="lead"> Les millors pizzes les fem per a tú Artur... </p>
		</div>
	</div>
</div>

<!--
<div class="row">
	<div class="col-md-2 col-md-offset-3">
		<img class="img-responsive animate rotate-pizza" src="../img/home/pizza1.png" />
		<h3>Bones</h3>
	</div>
	<div class="col-md-2">
		<img class="img-responsive animate rotate-pizza" src="../img/home/pizza2.png" />
		<h3>Rodones</h3>
	</div>
	<div class="col-md-2">
		<img class="img-responsive animate rotate-pizza" src="../img/home/pizza3.png" />
		<h3>Gustoses</h3>
	</div>
</div>
-->


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../img/slider/img1.png" alt="...">
      <div class="carousel-caption">
   	  <h3>Fetes amb classe</h3>
      <p>Les fem amb forn de llenya</p>
        
      </div>
    </div>

	<div class="item">
      <img src="../img/slider/img2.png" alt="...">
      <div class="carousel-caption">
   	  <h3>Acompanya-ho de les nostres begudes</h3>
      <p>Tenim el que més et vindrà de gust</p> 
      </div>
    </div>
	
	<div class="item">
      <img src="../img/slider/img3.png" alt="...">
      <div class="carousel-caption">
 	  <h3>Aparcament gratuït</h3>
      <p>Comoditat per a venir a buscar la teva pizza</p>
      </div>
    </div>
	
	<div class="item">
      <img src="../img/slider/img4.png" alt="...">
      <div class="carousel-caption">
	  <h3>Servei a domicili</h3>
      <p>Si et cal t'ho portem a casa</p>
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a href="tel:+34972202122">
	<button type="button" class="btn btn-s btn-lg btn-success" >
	  <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 972 20 21 22
	</button>
</a>
	
<?php include("footer.php") ?>
