<a href="index.php">Back Home</a> <br />

<?php
error_reporting(E_ERROR | E_PARSE);

$doc = new DOMDocument();
$doc->loadHTMLFile("http://".$_GET['site']);

$tags = $doc->getElementsByTagName('a');

foreach ($tags as $tag) {
	$href = $tag->getAttribute('href');
	$link_type = substr($href,0,7);
	if($link_type == "http://" || $link_type == "https:/"){
		echo "Found link to: "."<a href=".$href.">".$href."</a>"."<br />";
	}else{
		echo "Found link to: "."<a href="."http://".$_GET['site'].$href.">"."/".$href."</a>"."<br />";
	}
	}
?>