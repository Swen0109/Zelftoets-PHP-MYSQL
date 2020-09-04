<div class="alert alert-warning text-center" style="margin-top:200px;" role="alert">
	<strong>Warning!</strong> Weet je zeker dat dit persoon van de verjaardagskalender wilt verwijderen?
</div>
<form class="text-center" action="<?php echo URL ?>home/destroy/<?php echo $id ?>">
<button class="btn-outline-light bg-danger" type="submit">Bevestigen</button>
<a class="btn-outline-light bg-info" type="submit" href="<?php echo URL?>home/index/">Annuleren</a>
</form>
