<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		form li{
			list-style: none;
		}

		form ul{
			margin: 0;
			padding: 0;
		}
		.notice{
			font-style: italic;
			color: red;
		}
	</style>
</head>
<body>

	<h1>Join the mailing list!</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="name">Your name:</label>
				<input type="text" id="name" name="name" value="<?=old('name');?>">
			</li>
			<li>
				<label for="email">Your email address:</label>
				<input type="text" id="email" name="email" value="<?=old('email');?>">
			</li>
			<li>
				<input type="submit" value="Submit" name="submit">
			</li>
		</ul>	
		<?php if (isset($status)) : ?>
		<p class='notice'><?php echo $status; ?></p>
		<?php endif; ?>	
	</form>
</body>
</html>