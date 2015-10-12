<?php ob_start(); ?>
	<h3>Администрирование странички</h3>

	<form action="/mysite/index.php/add" method="POST" name="form1">
		<table>
			<tr>
				<td>Заголовок статьи:</td>
				<td><input type="text" name="add_title"></td>
			</tr>
			<tr>
				<td>Автор:</td>
				<td><input type="text" name="add_autor"></td>
				
			</tr>
			<tr>
				<td>Текст статьи:</td>
				<td><input type="text" name="add_content"></td>
				
			</tr>
			<tr>
				<td><input type="reset" id="reset" value="Очистить"></td>
				<td><input type="submit" id="submin" value="Добавить"></td>
			</tr>
			
		</table>
	</form>
	<?php include 'view/list.php'; ?>	



