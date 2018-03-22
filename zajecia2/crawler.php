<!DOCTYPE html>
<html>
<body>
<form action="" method="GET">
    <input type="text" name="search">
    <input type="submit" value="Crawl!">
</form>
    
    

    
    <?php
$url = $_GET["search"];

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo("$url is a valid URLa");
} else {
    echo("$url is not a valid URLa");
}
	//$a = $url->getElementsByTagName('a');
	
	echo("hahja is not a valid URL");
?>
<!--
    //
	
//    $a_elements= $url->getElementsByTagName("a");
//	for ($i; $i < $a_elements->length; $i++) {
//    $attr = $a->item($i)->getAttribute('href');
//
//echo $attr . "\n";
//}
-->


</body>
</html