<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('header.php') ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rainer Karcher | Portfolio </title>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
      <h1><i class="fa fa-cogs"></i> Under Construction</h1><br /><br />
    </div>
      <div class="nautilus-gallery">
<style>
  body {background:#ffffff;}
  .wrap {
    overflow: hidden;
    width: 1260px;
    margin: 10px auto -5px 5px;
  }
  .nautilus-gallery {
  	margin-left:5%	;
  }


  .tint {
    overflow: hidden;
    float: left;
    background: blue;
    margin: 0 20px 20px 0;
    height:280px;
    width:400px;
/*    -moz-border-radius: 40%;
    border-radius: 40%;	*/
  }
  
  .t2 {
    background: red;
  }
  
  .t3 {
    background: green;
  }
  
  .t4 {
    background: purple;
  }
  
  .t5 {
    background: yellow;
  }
  
  .t6 {
    background: hotpink;
  }
  
  img.color {
    float: left;
    background: black;
    display: block;
    -moz-transition: opacity .3s linear;
    -webkit-transition: opacity .3s linear;
    -ms-transition: opacity .3s linear;
    -o-transition: opacity .3s linear;
    transition: opacity .3s linear;
  }

  img.color:hover {
    opacity: .5;
    cursor: pointer;
  }
</style>

      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280">
      <img class="color" src="http://rainerkarcher.com/sandbox/icons/images/nautilus6.jpg" alt="" width="400" height="280"> 
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
  <script>
    $(function() {
      $('img.color').each(function(n) {
        n += 1;
        $(this).wrap('<figure class="tint t'+ n + '"></figure>');
      });
    });
  </script>

<!--
    </div>= --><!-- End div.container -->

      </div>	<!-- End .nautilus-gallery -->
<br /><br /><br /><br />
    <div class="container"></div>
    <script src="/bootstrap/js/bootstrap.js"></script>
<?php /* include 'footer.php'; */ ?>
  </body>
</html>
