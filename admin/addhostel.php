<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="jquery.js"></script>
<style>
    .inner_div{
        border:2px solid black;
        border-radius:5px;
        box-shadow:2px 2px 16px 2px;
        margin-top:60px;
        width:40%;
    }
</style>
</head>
<body>
<div class="">
						<div class="container inner_div">
                            <div class="container">
								<form method="post" action="upload.php" enctype="multipart/form-data">
                                <h3 class="text-center">Register hostel</h3>    
                                <label>Name of Hostel</label>
									<input type="text" name="hostel" class="form-control"><br>
									<label>Status</label>
									<select class="form-control" name="status">
										<option>Mixed</option>
										<option>Girls Only</option>
									</select><br>
									<label>Picture of the front end of the hostel</label><br>
									<input type="file" name="file"><br><br>
									<label for="">Hostel back end picture</label><br>
									<input type="file" name="file2"><br><br>
									<label for="">Room sample picture</label><br>
									<input type="file" name="file3"><br><br>
									<input type="submit" name="submit" class="btn btn-primary "><br>
                                </form>
</div>
						</div>
						
	
					</div>
</body>
</html>