<h1 class="text-center">Persoon wijzigen</h1>

<?php foreach ($mensen as $change){?>
	
 <form class="text-center" style="margin-top:200px;" name="update" method="post" action="<?php echo URL?>home/edit/<?php echo $change['id']?>">
    <input type="text" name="Voornaam" placeholder="Naam" value="<?php echo $change['Voornaam']?>" required>
    <input type="text" name="Achternaam" placeholder="Achternaam" value="<?php echo $change['Achternaam']?>" required>
     <input type="text" name="Geboortedatum" placeholder="Geboortedatum" value="<?php echo $change['Geboortedatum']?>" required>
     <input type="submit">
    </form>




  <?php } ?>