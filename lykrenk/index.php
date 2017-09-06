<!DOCTYPE html>
<html>
<head>
	<title>Renk Değiştirme Uygulaması</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous" >
    <style type="text/css">
    	.colors{
    		
    		margin: 0;
    		padding: 0;
    	}
    	.colors li
		{
			display: inline-block;
		}
    	.colors li a {
    		display: block;
    		width: 20px;
    		height: 20px;
    		border:1px solid #000;
    	}
    </style>
</head>
<body>
	<?php  
		$renkler=["red","yellow","black","blue"];
		?>
	<div class="container h-100 d-flex justify-content-center">
	    <div class="jumbotron my-auto">
	      <h1 class="display-4">Renk Değiştirme!</h1>
	      <ul class="colors">
	      <?php 
	      foreach ($renkler as $renk) { ?>
	      	<li><a href="index.php?renk=<?=$renk  ?>" style="background-color: <?=$renk  ?>;"></a></li>
	    <?php  }

	       ?>
	      	
	      </ul>
	      <?php 
	      if (isset($_GET['renk'])) {
	      	$renk=$_GET['renk'];
	      }
	      else
	      	$renk="black";

	       ?>
	      <p style="color: <?=$renk  ?>;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	      <hr>
	      
	    </div>
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>