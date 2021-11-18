<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">
        .wrapper {
            width: 1300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<form method="post" action="simpan.php" >
		<div class="input-group">
			<label>Nama:</label>
			<input type="text"  size="40%name="name" value="">
		</div>
		<div class="input-group">
			<label>No Kad Pengenalan:</label>
			<input type="text" name="ic" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Simpan</button>
		</div>
	</form>
</body>
</html>