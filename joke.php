
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
		background: radial-gradient(#9795ef, #f9c5d1);
		font-family: sans-serif;

		
	}
	.container1{
		width: 600rem  -moz-fit-content;
    /*background: radial-gradient(#7ee8fa,#eec0c6);*/
  
	 	justify-content: center;
	 	display: flex;
	 	text-align: center;
	 	padding: 3rem 0 3rem 0;
	 	margin-top: 2rem;
	 	/*margin-right: 10px;*/
	 	margin-left: 1rem;  
	 	 word-wrap: break-word;
	 	 overflow-x: none; 
     font-size: auto;    

	}
</style>


<body>

<div class="mobile-container">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#api.php"  class="active">All Random </a>
  <div id="myLinks">
    <a href="api.php"> Life quotes </a>
    <a href="joke.php" class="active"> Jokes </a>
    <a href="xkcd.php"> XKCD Comics</a>
  </div>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<div class="container1">
  
<?php


$ch = curl_init();


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'http://api.icndb.com/jokes/random');
$result = curl_exec($ch);
curl_close($ch);


$obj = json_decode($result,true);

  // echo $result;
  echo '<pre>'; 
 // print_r($obj[$num]['text']); 
   print_r($obj['value']['joke']);
 
?>
<wbr>


</div>

<div class="button">
  <button class=" btn-1" value="Refresh Webpage." onclick='refreshPage()'> Next Joke-> </button>

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
