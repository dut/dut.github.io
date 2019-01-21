<?php
$nb_fichier = 0;
echo '<ul>';
if($dossier = opendir('./ANG'))
{
  while(false !== ($fichier = readdir($dossier)))
{
  if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'Thumbs.db')
{
  $nb_fichier++; // On incrémente le compteur de 1
if (strpos($fichier, 'pdf') || strpos($fichier, 'txt')) {
  echo '<li><a href="./ANG/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
}
elseif (strpos($fichier, 'png') || strpos($fichier, 'jpg') || strpos($fichier, 'gif')) {
  echo '<li><a href="./ANG/' . $fichier . '">' . "🖼️ ". $fichier . '</a></li>';
}

else {
  echo '<li><a href="./ANG/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
}

} // On ferme le if (qui permet de ne pas afficher index.php, etc.)

} // On termine la boucle
}
 ?>
