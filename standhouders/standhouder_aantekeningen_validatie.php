<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
	<title>Standhouder aantekeningen</title>
</head>

<style>
 /* stijl van website*/  
	body {
        font-size:20px;
   		 }
  /* stijl van header*/    
   	header {
 		background-color: rgba(128, 147, 70, 0.5);
        color: #000;
 		text-align: center;
 		padding: 20px;
        height: 100%;
    	margin: auto;
	}
    
 /* stijl van navigatie bar*/    
	ul {
        list-style-type: none;
 		 margin: 0;
 		 padding: 0;
		 width: 1o%;
 		 background-color: rgba(128, 156, 71, 0.5);
         height: 100%;
         position: fixed;
         overflow: auto;
	}

	li a {
	  	display: block;
 	 	color: #000;
 	 	padding: 8px 16px;
 	 	text-decoration: none;
	}
/* kleur veranderen tijdens hoveren*/ 
	li a:hover {
  		background-color: #555;
  		color: white;
	}
/* stijl van lijnr*/ 
	hr {
    	border-style: solid;
    	border-width: auto;
    	border-color: rgba(128, 156, 71, 0.5); 
	}



</style>


<body>

<!-- Sidebar/menu -->
 	<ul>
  		<li><a href="../home.html">Home</a></li>
    	<li><a href="../inloggen/inloggen.html">Inloggen</a></li>
    	<li><a href="../aanmelden/aanmelden.html">Aanmelden</a></li>
  		<li><a href="../standhouders/standhouder.html">Standhouder</a></li>
  		<li><a href="../bezoekers/bezoeker.html">Bezoeker</a></li>
    	<li><a href="../enquete/enquete.html">Enquête</a></li>
  		<li><a href="../contact/contact.html">Contact</a></li>
	</ul> 

<!-- Top -->
	<header>
		<span><h1>Aantekeningen</h1></span>
	</header>

<!-- !PAGE CONTENT! -->
<div style="margin-left:20%;margin-right:10%">

	<form action="standhouder_aantekeningen_validatie.php" method="post">
        
        <div>
            <label for="nummer">Nummer</label>
            <input type="number" id="nummer" name="nummer">
        </div>
        
         <div>
            <label for="observatie">Observatie</label>
            <input type="text" id="observatie" name="obsevatie">
        </div>
    
    	<div>
        	<br><button type="submit">Verzenden</button>
    	</div>
    
    	<div>
        	<br><button type="reset">Wissen</button>
    	</div>
    
	</form>


</div>
</body>
</html>
