<?php include("header.php") ?>
<div class="row">
	<?php
$sx = simplexml_load_file('../data/pizzes.xml'); // Carrega el fitxer XML com un objecte 

echo "<table>";
    echo "<tr><th>NOM</th><th>FOTO</th><th>INGREDIENTS</th> </tr>";
    foreach($sx->pizza as $item) // Carrega tots els nodes de l'etiqueta "pizza" 
    {
        echo "<tr><td>" . $item->nom . "</td><td><img alt='".$item->nom."' src='../img/pizzes/" . $item->foto . "'></td><td>" . $item->composicio . "</td></tr>";
    }
echo "</table>";
?>
</div>		
			
<?php include("footer.php") ?>