

<?php 
if(isset($_GET))
{
  $Nom= $_GET['nom'];
  echo "Bienvenue " . $Nom . " vous avez choisi la couleur ". $_GET['couleur'];

}
