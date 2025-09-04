<?php
// récup data
$prenom = $_POST['name'];
$mail = $_POST['email'];
$contenu="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$contenu .="<html >\n";
$contenu .="<title>Document</title>\n";
$contenu .="</head>\n";
$contenu .="<body style=background-image:url(./img/sun.jpg);>\n";
$contenu .="<h1>creation de page en php</h1>\n";
$contenu .="</body>\n";
$contenu .="</html>\n";

?>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

Affichage de mes variables : <?php print "$prenom"; ?>
<?php print "$mail"; ?>
<?php print "<p style='color:red'>" .$contenu. "</p>"; ?>

</body>
</html>