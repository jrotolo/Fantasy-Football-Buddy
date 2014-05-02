<?php print_r($players) ?>

<?php foreach ($players as $key => $value): ?>
	<?php if ($key == 'player_name') $player_name = $value ?>
	<?php if ($key == 'player_team') $player_team = $value ?>
	<?php if ($key == 'position') $position = $value ?>
	<?php if ($key == 'total_yards') $total_yards = $value ?>
	<?php if ($key == 'tds') $tds = $value ?>
	<?php if ($key == 'status') $status = $value ?>
	<?php echo $value ?>
<?php endforeach ?>

<?php echo $player_name ?>
<?php echo $player_team ?>
<?php echo $position ?>
<?php echo $total_yards ?>
