
<!DOCTYPE html>
<html>
<head>
	<title> Random quotes</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#api.php" class="active">AlL Random </a>
  <div id="myLinks">
    <a href="api.php"  class="active"> Life quotes </a>
    <a href="joke.php"> Jokes </a>
    <a href="xkcd.php"> XKCD Comics</a>
  </div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="container">
	
<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://type.fit/api/quotes');
$result = curl_exec($ch);
curl_close($ch);

$num = rand(1,100);

$obj = json_decode($result,true);

 // echo $result;
  echo '<pre>'; 
 print_r($obj[$num]['text']); 

?>


</div>

<div class="button">
	<button class=" btn-1" value="Refresh Webpage." onclick='refreshPage()'> Next Quote! </button>

</div>
<script type="text/javascript">

function refreshPage(){
				// if(confirm("Click OK to see next quote..")){
				// 	location.reload();
				// }		
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
