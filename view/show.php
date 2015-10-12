<?php ob_start(); ?>
	<h2><?php echo $row['title']; ?></h2>
	<p>Автор: <?php echo $row['autor'];?></p>
	<p>Дата: <?php echo $row['date'];?></p>
	<p>Текст статьи: <?php echo $row['text'];?></p>
		
<?php $content=ob_get_clean(); ?>

<?php include 'view/layout.php'; ?>
