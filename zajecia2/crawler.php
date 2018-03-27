<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Crawler</title>
	<link rel="stylesheet" href="crawler.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>


<form action="" method="GET">
   <h1>Crawler</h1>
    <input type="text" name="search">
    <input type="submit"  id="submit" value="Crawl!">
</form>
    
     

    
    <?php	
	$url = (isset($_GET["search"]) ? $_GET["search"] : "");
	//echo $url;
	
		if (filter_var($url, FILTER_VALIDATE_URL)) {
    	//echo("$url is a valid URL");	
			$html = ($url);
			$dom = new DOMDocument();
			@$dom->loadHTMLFile(($html));
			$links = $dom->getElementsByTagName('a');
			foreach ($links as $link){
				
				echo "<div>" . $link-> getAttribute('href')."</div>";
				
			}
			
		}
	
			else {
			echo ("<p id='fault'> $url is not a valid URL  </p>"  );
		}


	
?>

</body>
</html