<?php
// créer une table users avec email username et password dans la base de données mysql en avance
//dans le php , on preparer une inserstion des valeurs de la base de donnée ne exemple , on va bind des values par avance avec email et username en mode nromal mais
// password en crypté hash avec la fonction password_hash('motdepasse',PASSWORD_BCRYPT)
//normalement on fait statement->execute() mais la on y insere un if et si c'est executé , echo utilisatuer créer sinon echoué

$pdo = new PDO('mysql:host=localhost;dbname=introduction','root','757135929');
$statement = $pdo->prepare("INSERT INTO users (email , username, motdepasse) VALUES (:email, :username, :motdepasse)");
$statement->bindValue(':email', 'john@doe.fr');
$statement->bindValue(':username', 'john');
$statement->bindValue(':motdepasse', password_hash('motdepasse',PASSWORD_BCRYPT));
if($statement->execute()){
    echo "l'utilisateur a bien ete crée";
} else {
    echo "l'utilisateur n'a pas ete crée";
}



?>
