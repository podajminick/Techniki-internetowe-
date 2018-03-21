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
    echo("$url is a valid URL");
    $dom = new DOMDocument;

$dom->loadHTMLFile($url);
} else {
    echo("$url is not a valid URL");
}

$links = $url->getElementsByTagName('a');
foreach ($links as $link) {
    
$final_link= explode('#',$link->getAttribute( 'href' ));
    
    //echo $link->nodeValue, PHP_EOL;
}    

?>

</body>
</html