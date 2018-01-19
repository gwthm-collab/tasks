<!DOCTYPE html>
<html lang="en">
  <head>
<?php require_once('html_head.php'); ?>
  </head>
  <body>

<div class="container-fluid">
		<?php require_once('header.php'); ?>


	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron well">
				<h2>
					Unlimited Web Hosting
				</h2>
				<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
			<div class="row">
				<div class="col-md-6">
					<form class="form-horizontal" role="form" action="create_sess.php" method="post">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">
								Email
							</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail3" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">
								Password
							</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="inputPassword3" name = "passwd" required>
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
				</div>
				<div class="col-md-6">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
					<button type="button" class="btn btn-default">
						Learn More
					</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					<button type="button" class="btn btn-default">
						Learn More
					</button>
				</div>
				<div class="col-md-4">
					 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					<button type="button" class="btn btn-primary">
						Learn More
					</button>
				</div>
				<div class="col-md-4">
					 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
					<button type="button" class="btn btn-default">
						Learn More
					</button>
				</div>
			</div>
		</div>
	</div>
<?php require_once('footer.php'); ?>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>