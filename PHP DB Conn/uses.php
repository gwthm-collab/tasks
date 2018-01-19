<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
        session_start();
        require_once('html_head.php'); ?>
    </head>
<body>
    <div class="container-fluid">
<?php require_once('header.php');
echo "Hello ".$_SESSION["name"]; ?>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" action="insert.php" method="post">
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">
								Name
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputName" name="uname" required>
							</div>
                        </div>
                        <div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">
								Email
							</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail3" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputGender" class="col-sm-2 control-label">
								Gender
							</label>
							<div class="col-sm-10">
                                <label><input type="radio" class="form-control" name = "gender" value="Male" required>Male</label>
                                <label><input type="radio" class="form-control" name = "gender" value="Female" required>Female</label>                                
							</div>
                        </div>
                        <div class="form-group">
							<label for="inputLocation" class="col-sm-2 control-label">
								Location
							</label>
							<div class="col-sm-10">
                                <label>
                                <select name="loc">
                                    <option value="India">India</option>
                                    <option value="Other">Out of India</option>
                                </select>
                                <label>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">
                                    Insert
								</button>
							</div>
						</div>
                    </form>
                </div>
            </div>
            <div class="row">
				<div class="col-md-6">
					<form class="form-horizontal" role="form" action="select.php" method="get">
						<div class="form-group">
							<label for="inputName" class="col-sm-2 control-label">
								Name
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputName" name="name" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputID" class="col-sm-2 control-label">
								ID
							</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputID" name = "ID" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">
									Submit
								</button>
							</div>
						</div>
                    </form>
                    <form class="form-horizontal" role="form" action="select1.php" method="get">
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">
									List ALL
								</button>
							</div>
						</div>
					</form>
                </div>
            </div>
                <?php require_once('footer.php'); ?>
    </div>
            </body>
</html>