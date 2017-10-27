<?php
$servername="localhost";
$username="root";
$dbname="ants1";
$password="";
$con=mysql_connect($servername,$username,$password);
mysql_select_db($dbname);
if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'ants1' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());
 $selectSQL = 'SELECT * FROM `info`';
 if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }
  else
  {
	  ?>
	  <html>
	  <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>ANTS</title>
<link rel="icon" href="cmplgo.png" type="image/png">
<link rel="shortcut icon" href="cmplgo.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/cmplgo.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s">AlphaNumeric Technology Solution</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>We are a digital agency that loves crafting beautiful websites.</li>
        </ul>
          <a class="link animated fadeInUp delay-1s" href="#message">Welcome Admin</a>  
    </div>
</div>
</header>
<section class="main-section" id="message">
<figure class="logo animated fadeInDown delay-07s">
<h2>Customer Messages</h2>
    <table border="5">
  <thead>
    <tr>
	
      <th>Name</th>
	  <th>Number</th>
      <th>Email </th>
	  <th>message</th> 
	  
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr>
		  
		  <td>{$row['Name']}</td>
		  <td>{$row['Number']}</td>
		  <td>{$row['Email']}</td>
		 <td>{$row['message']}</td> "?>
		 
		  <?php 
		  "</tr>\n";
        
	
		}
   
 }

	  ?>
	 <tr>
	 <th><a href="lg.php"> <button type="visit" name="visit" value="submit form" onClick="CheckInput()" class="btn btn-primary">log out</button></a></th>
	 <th>Clear Table </th>
	 <th>----------></th>
	 <th><a href="del.php" method="GET" class="btn btn-primary"><img src="" name="Delete" alt="Delete" method="GET"/> </a> </th>
    </tr>
  </tbody>
</table>
<br>
	   
	   <td> </td>
</figure>
</section>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/cmplgo.png" alt=""></a></div>
        <span class="copyright">Copyright © 2017 | AlphaNumeric Technology Solution</span>
    </div>
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Knight
    -->
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

<script type="text/javascript">
function deleteName(Name) {
	$.post("del.php" , {Name:Name} , function(data){
		$("#" + Name).fadeOut('slow' , function(){$(this).remove();if(data)alert(data);});
	});	
		
    }
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
 
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>
</html>
  <?php
  }
?>