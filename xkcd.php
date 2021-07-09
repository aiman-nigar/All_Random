<!DOCTYPE html>
<html>
<head>
	<title> Random quotes</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
	html,body{
		background: radial-gradient(#7ee8fa,#eec0c6);
		font-family: sans-serif;
    
		
	}
</style>


<body>

<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#api.php" class="active">AlL Random </a>
  <div id="myLinks">
    <a href="api.php"  > Life quotes </a>
    <a href="joke.php"> Jokes </a>
    <a href="xkcd.php" class="active"> XKCD Comics</a>
  </div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="container">

<?php

$rand_num = rand(1,1000);
    $url_xkcd = "https://xkcd.com/".$rand_num."/info.0.json";
    //call api
    $json_data = file_get_contents($url_xkcd);
    $json_decoded = json_decode($json_data, true);

    $image_url= $json_decoded['img']; 


    echo '<img src="' . $image_url . '" alt="Random image" />' ;
    

?>

</div>

<div class="button">
	<button class=" btn-1" value="Refresh Webpage." onclick='refreshPage()'> Next Comic-></button>

</div>
<script type="text/javascript">

function refreshPage(){
						
				location.reload();		
			}




function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }

}

</script>


</body>
</html>
