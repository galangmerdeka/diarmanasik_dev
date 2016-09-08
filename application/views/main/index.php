<body>
	<div id="myCarousel" class="carousel slide " data-ride="carousel" style="padding-top:40px; padding-bottom:40px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
      
        <div class="item active">
          <center><img class = "first=slide" src="<?= $assets;?>img_main/diar_wall.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
            <!-- <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p> -->
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <center><img class="second-slide" src="<?= $assets;?>img_main/slider2.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
            <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <center><img class="third-slide" src="<?= $assets;?>img_main/slider3.jpg" width="75%" height="430px"></center>
           <div class="carousel-caption">
             <h3>Hotel Meihwa</h3>
            <p>Alamat : Jalan Merdeka No.72, Bandung</p>
            <p>Mail : meihwahotel@hotemail.com | Hotline : (022)888-2467</p>
          </div>
        </div><!-- End Item -->
        
      </div><!-- End Carousel Inner -->
    
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </div><!-- End Carousel -->
</body>