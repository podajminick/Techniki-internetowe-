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
} else {
    echo("$url is not a valid URL");
}
    
    
    nazwa_url=document.getElementsByTagName("a");
    echo $nazwa_url;
?>

</body>
</html