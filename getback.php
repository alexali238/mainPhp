<?php

  if (isset($_GET["query"])) {
	  
	$query=$_GET["query"];
	$cki= "ig_nrcb=1; ig_did=7FE189D9-2B53-4AD1-B6F7-1DDDFBB5D5F4; mid=X4DwhgABAAH3mmmLwqBxdNDEZc8e; ds_user_id=43176576465; sessionid=43176576465%3AR7ShYKiLuB0zGh%3A16; csrftoken=Wvm8kCpyWx1S2JfQ2cL8j6Nhx9ATIaym; rur=PRN";
	$opts = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"Accept-language: en\r\n" .
				  "Cookie: ".$cki."\r\n"
	  )
	);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
echo file_get_contents('https://www.instagram.com/web/search/topsearch/?context=blended&query='.$query, false, $context);
	//echo file_get_contents('https://www.instagram.com/web/search/topsearch/?context=blended&query='.$query);
	
  }else{
	  
	echo "<body style=\"background-color:powderblue;\">";
	echo "<B> Successful!";
	
  }
  
?>