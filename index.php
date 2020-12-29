<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
	<center>
		<div class="card" style="width: 18rem;margin-top: 20vh;">
			<h5 class="card-header">LOGIN</h5>
			<div class="card-body">
				<form action="controller/validarpass.php" method="POST">
					<div class="form-group">
					<table>
						<tr>
							<td><input type="password" class="form-control" name="pass" placeholder="PASSWORD"></td>
							
						</tr>
						<tr>
							<td >
							<center>
							<button type="submit" name="Validar" class="btn btn-primary">VALIDAR</button>
							</center>
							</td>
						</tr>
					</table>
					</div>
				</form>
			</div>
		</div>
		</center>
</body>
</html>