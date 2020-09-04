<h1>Persoon wijzigen</h1>

<?php foreach ($data as $change){?>
	
 <form name="update" method="post" action="<?php echo URL?>home/edit/<?php echo $change['Id']?>">
    <input type="text" name="naam" placeholder="Name" value="<?php echo $change['Voornaam']?>" required>
    <input type="text" name="telefoonnummer" placeholder="Telefoonnummer" value="<?php echo $change['Achternaam']?>" required>
     <input type="text" name="adres" placeholder="Adres" value="<?php echo $change['Geboortedatum']?>" required>
     <input type="submit">
    </form>

  <?php } ?>