<!DOCTYPE html>
<html lang="en">
<head>
  <title>App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    .outer {
    background-image: url("./images/cartoon.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    display: table;
    position: absolute;
    height: 100%;
    width: 100%;
	}

	.middle {
	    display: table-cell;
	    vertical-align: middle;
	}

	.inner {
		/*background-color: #F5F5F5;*/
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    
	    margin-left: auto;
	    margin-right: auto; 
	    width: 250px;
	    height: 300px;

	    /*rounded edges*/
	    /*-webkit-border-radius: 5px 5px 5px 5px; 
      -moz-border-radius: 5px 5px 5px 5px;
      -o-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;*/
	}
	
  </style>
</head>
<body>
  
	<!-- <div id="bg" style="background-image: url('cartoon.jpg'); background-size:cover; background-repeat:no-repeat;"></div> -->
    
   
 <div class="outer">
  <div class="middle">
    <div class="inner">
    <center>
    	<form id="credential" action="./php/login/" method="post" style="vertical-align: middle;" enctype="multipart/form-data">
    	<br>
		 <h1>Login</h1>
		 <br>
		<fieldset data-selection="istid">
			<input id="username" name="mail" autofocus="autofocus" placeholder="E-mail" required="required" type="text" value="" size="25"/>
			 <br>
			<input id="password" name="pass" placeholder="Palavra-passe" required="required" type="password" value="" size="25"/>
			<br>
			<input type="submit" value='Entrar' class="button button-active button-wide" name="submit-istid" id="submit-istid" accessKey="t" >
		</fieldset>
	  </form>
	  </center>
    </div>
  </div>
</div>

</body>
</html>
