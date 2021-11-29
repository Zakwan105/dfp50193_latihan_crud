<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Add New</title>
</head>
<body>
<form method="post" action="simpan.php" >
		<div class="input-group">
			<label>Id pengguna</label>
			<input type="text" name="idstaff" value="">
		</div>
		<div class="input-group">
			<label>Nama pengguna</label>
			<input type="text" name="staff_name" value="">
		</div>
		<div class="input-group">
			<br><button class="btn" type="submit" name="save" >Simpan</button>
		</div>
	</form>
</body>
</html>