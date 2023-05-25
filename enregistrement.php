


 <?php


if(isset($_POST['Envoyer'])){

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_de_naissance = $_POST["date_de_naissance"];
    $genre = $_POST["genre"];
    $date_entree = $_POST["date_entree"];
    $personne_a_prevenir_en_cas_de_besoin = $_POST["personne_a_prevenir_en_cas_de_besoin"];
    
include('connexion.php');
try{
    $sql = "INSERT INTO ufr_sds(nom, prénom, date_de_naissance, genre, date_dentrée, personne_à_prévenir) 
    VALUES (:nom,:prenom,:date_de_naissance,:genre,:date_entree,:personne_a_prevenir_en_cas_de_besoin)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam (':prenom', $prenom);
    $stmt->bindParam(':date_de_naissance', $date_de_naissance);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam (':date_entree', $date_entree);
    $stmt->bindParam(':personne_a_prevenir_en_cas_de_besoin', $personne_a_prevenir_en_cas_de_besoin);
    $stmt->execute();

$success = true;
header('Location: liste.php');
exit();
}

catch(PDOException $e){
    die ('Erreur: ' . $e->getMessage());
}
    echo('reussi');
    }
    else{
        echo('echec');
    }
?>  