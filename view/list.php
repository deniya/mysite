<?php ob_start(); ?>
	<h3>Список всех записей в таблице</h3>
		<ol>
			<?php foreach($rows as $row): ?>
				<li>
					<a href="/mysite/index.php/show?id=<?php echo $row['id'];?>">
						<?php echo $row['title']; ?>
					</a>
				</li>
			<?php endforeach ?>
		</ol>
<?php $content=ob_get_clean(); ?>

<?php include 'view/layout.php'; ?>
