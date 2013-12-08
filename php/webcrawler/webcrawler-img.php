<a href="index.php">Back Home</a> <br />
<table border="1">
	<tr>
    	<th>Image	</th>
        <th>Link to image</th>
    </tr>
<?php
	error_reporting(E_ERROR | E_PARSE);
	$doc = new DOMDocument();
	$doc->LoadHTMLFile("http://".$_GET['site']);
	$tags = $doc->getElementsByTagName("img");
	foreach($tags as $tag){
		$src = $tag->getAttribute("src");
		echo "<tr>";
		echo "<td>"."<img src='".$src."' height='100' width='100'/>"."</td>";
		echo "<td>"."<a href='".$src."'>".$src."</a>"."</td>";
		echo "</tr>";
	}
?>
</table>