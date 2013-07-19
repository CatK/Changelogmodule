<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
?>

	<?php
                $id = $_GET['id'];
				$sql = "SELECT id, title, message, author, date FROM devblog WHERE id = $id";
				$resultat = mysql_query($sql);
				while ($donnee = mysql_fetch_assoc($resultat)) 
	{?>
					
					<div class="row">
	<div class="span5">
      <p><?php echo $donnee['message'] ?></p>
	</div>
  	<div class="span3">
      Author: <span class="label label-info">@<?php echo $donnee['author']?></span>
	  <p>Posted : <?php echo $donnee['date'] ?></p>
  	</div>
</div>
					<?php
                }
				} else {
    echo '<center><b>News introuvable</b></center>';
}
?>

