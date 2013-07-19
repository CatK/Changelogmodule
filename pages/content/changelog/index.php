 <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>#ID</th>
		<th>GAME/SERVER</th>
        <th>TITLE</th>
		<th>DATE</th>
        <th>AUTHOR</th>
      </tr>
    </thead>
    <tbody>
	<?php
	$pagination = 100;
	$sql = "SELECT * FROM devblog ORDER BY date DESC LIMIT 0, $pagination";
    $resultat = mysql_query($sql);
    while ($donnee = mysql_fetch_assoc($resultat)) 
	{?>
      <tr>
        <td>#<?php echo $donnee['id']?></td>
		<td><span class="label label-warning"><?php echo $donnee['category']?></span></td>
        <td><a href ="update-<?php echo $donnee['id'] ?>"><?php echo $donnee['title']?></a></td>
		  <td><?php echo $donnee['date']?></td>
        <td><?php echo $donnee['author']?></td>
      </tr>
		<?php }?>
		
    </tbody>
  </table>