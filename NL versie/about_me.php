<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include("bootstrap.php");?>
</head>
<body onload="startTime()">
<?php include("header.php");?>
<br>
<div id="carouselExampleIndicators" class="carousel w-50 mx-auto slide" data-ride="carousel">
   <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="http://via.placeholder.com/1000x400?auto=yes&bg=777&fg=555&text=Eerste slide" alt="Eerste slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="http://via.placeholder.com/1000x400?auto=yes&bg=777&fg=555&text=Tweede slide" alt="Tweede slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="http://via.placeholder.com/1000x400?auto=yes&bg=777&fg=555&text=Derde slide" alt="Derde slide">
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Vorige</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Volgende</span>
   </a>
</div>

<div class="container">
   <br>
   <div class="row">
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Vraag #1</h5>
               <h6 class="card-title text-primary">Wie ben ik</h6>
               <hr>
               <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Vraag #2</h5>
               <h6 class="card-title text-primary">Waar kom ik vandaan</h6>
               <hr>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, consequatur.</p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Vraag #3</h5>
               <h6 class="card-title text-primary">Wat vind ik leuk om te doen</h6>
               <hr>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, consequatur.</p>
            </div>
         </div>
      </div>
      <hr>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Vraag #4</h5>
               <h6 class="card-title text-primary">Hoe lang programmeer ik al?</h6>
               <hr>
               <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, consequatur.</p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Vraag #5</h5>
               <h6 class="card-title text-primary">Lorem ipsum dolor sit amet.</h6>
               <hr>
               <p class="card-text">Lorem ipsum dolor sit amet.</a></p>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <div class="card-body text-center">
               <h5 class="card-title text-primary">Vraag #6</h5>
               <h6 class="card-title text-primary">Lorem ipsum dolor sit amet.</h6>
               <hr>
               <p class="card-text">Lorem ipsum dolor sit amet.</p>
            </div>
         </div>
      </div>
   </div>
</div>
<hr>
    <?php include("footer.php");?>

</body>
</html>