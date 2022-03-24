<?php
// define variables and set to empty values
$user_PrenomErr = $emailErr = $genderErr = $websiteErr = "";
$user_Prenom = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user_Prenom"])) {
    $user_PrenomErr = "user_Prenom is required";
    echo "erreur user_Prenom et vide";
  } else {
    $user_Prenom = $_POST["user_Prenom"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $user_Prenom)) {
      $user_PrenomErr = "Only letters and white space allowed";
      echo "erreur user_Prenom est mal ecrit";
    }
  }
  if (empty($_POST["user_name"])) {
    $user_nameErr = "user_name is required";
    echo "erreur user_name et vide";
  } else {
    $user_name = $_POST["user_name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $user_name)) {
      $user_nameErr = "Only letters and white space allowed";
      echo "erreur user_name est mal ecrit";
    }
  }
  if (empty($_POST["user_email"])) {
    $user_emailErr = "user_email is required";
    echo "erreur user_email et vide";
  } else {
    $user_email = $_POST["user_email"];
    // check if name only contains letters and whitespace
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $user_email)) {
      $user_emailErr = "Only letters and white space allowed";
      echo "erreur user_name est mal ecrit";
  }
}
if (empty($_POST["telNo"])) {
  $telNoErr = "telNo is required";
  echo "erreur telNo et vide";
} else {
  $telNo = $_POST["telNo"];
  // check if name only contains letters and whitespace
  if (!preg_match("'`[0-9]{10}`'", $telNo)) {
    $telNo = "Only letters and white space allowed";
    echo "erreur telNo est mal ecrit";
}
}
if (empty($_POST["user_message"])) {
  $user_messageErr = "telNo is required";
  echo "erreur user_message et vide";
}
if (empty($_POST["pets"])) {
  $petsErr = "pets is required";
  echo "erreur pets et vide";
}
}
if ($user_PrenomErr === "" && $user_nameErr = "" && $user_emailErr = "" &&  $telNoErr = "" && $user_messageErr =  "" && $petsErr = ""){
  
    echo "Merci " . $_POST['user_Prenom'] . $_POST['user_Prenom']. " de nous avoir contacté à propos de " . $_POST['pets'] ."<br>";
    echo "Un de nos conseiller vous contactera soit à l’adresse" . $_POST['user_email'] . "ou par téléphone au " . $_POST['telNo'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];
     exit();
}
    //echo "Merci " . $_POST['user_Prenom'] . $_POST['user_Prenom']. " de nous avoir contacté à propos de " . $_POST['pets'] ."<br>";

    //echo "Un de nos conseiller vous contactera soit à l’adresse" . $_POST['user_email'] . "ou par téléphone au " . $_POST['telNo'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];
    //  exit();

?>
