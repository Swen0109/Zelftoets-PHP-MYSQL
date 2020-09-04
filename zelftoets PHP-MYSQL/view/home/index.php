<div class="container">
 <h1 class="text-center">Welkom bij de verjaardag.</h1>
 <br>
 <p class="text-center">Hier kun je mensen verwijderen, aanpassen of toevoegen aan uw lijst!</p>

  <table class="text-center" style="position: absolute; left:520px; top:250px;">  
      <td>Id</td>
      <td></td>
      <td>Voornaam</td>
      <td></td>
      <td>Achternaam</td>
      <td></td>
      <td>Geboortedatum</td>
      <td></td>
    </tr> 

    <?php
      foreach ($info as $data){?>
      <tr>
        <td><?php echo $data['id']?></td>
        <td>&nbsp;&nbsp;</td>
        <td><?php echo $data['Voornaam']?></td>
        <td>&nbsp;&nbsp;</td>
        <td><?php echo $data['Achternaam']?></td>
        <td>&nbsp;&nbsp;</td>
        <td><?php echo $data['Geboortedatum']?></td>
        <td></td>
      
<td>&nbsp;&nbsp;<a class="btn-outline-danger" href="<?php echo URL?>home/delete/<?php echo $data["id"]?>">Verwijderen</a></td>

<td>&nbsp;&nbsp;<a class="btn-outline-info" href="<?php echo URL?>home/update/<?php echo $data["id"]?>">Wijzigen</a></td>
    <tr>
    <tr>

  <?php }?>

  <a class="text-center btn-outline-info" style="position: absolute; left:650px;" href="<?php echo URL?>home/create/<?php echo $data["id"]?>">Registreer jezelf voor de verjaardag</a>

</table>
</div>
