<?php
    function getAllPeople(){
        $db = openDatabaseConnection();
	    $statement = $db->prepare("SELECT * FROM gegevens ORDER BY Geboortedatum");
	    $statement->execute();
	    $db = null;
        return $statement->fetchAll();
    }
?>

<?php
	
 	function deleteGegevens($id){
 		 $db=openDatabaseConnection();
  		 $statement = $db->prepare("DELETE FROM gegevens WHERE id = :id ");
  		 $statement->bindParam(":id", $id);  
 		 $statement->execute();
 }


    function getPeopleById($id){
        $db = openDatabaseConnection();
	    $statement = $db->prepare("SELECT * FROM gegevens WHERE id=:id");
	    $statement->bindParam(":id", $id);
	    $statement->execute();
	    $db = null;
        return $statement->fetchAll();
    }

 	function UpdatePeople($data, $id){
    // Maak hier de code om een medewerker te bewerken
  		$db = openDatabaseConnection();
  		$statement = $db->prepare("UPDATE gegevens SET Voornaam = :Voornaam, Achternaam= :Achternaam, Geboortedatum= :Geboortedatum WHERE id = :id");
  		$statement->bindParam(":id", $id);
  		$statement->bindParam(":Voornaam",$data["Voornaam"]);
  		$statement->bindParam(":Achternaam",$data["Achternaam"]);
  		$statement->bindParam(":Geboortedatum",$data["Geboortedatum"]);
  		$statement->execute();
}


	function createBezoeker($Voornaam, $Achternaam, $Geboortedatum){
    	$conn=openDatabaseConnection();
    	$query = $conn->prepare("INSERT INTO gegevens (Voornaam, Achternaam, Geboortedatum) VALUES (:Voornaam, :Achternaam, :Geboortedatum)");
    	$query->bindParam(":Voornaam", $Voornaam);
    	$query->bindParam(":Achternaam", $Achternaam);
    	$query->bindParam(":Geboortedatum", $Geboortedatum);
    	$query->execute();
 }

?>