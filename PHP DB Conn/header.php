<?php //session_start(); ?>
<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Unimity Task</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">About US</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">In Chennai</a>
								</li>
								<li>
									<a href="#">In Kovai</a>
								</li>
								<li>
									<a href="#">In Madurai</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">International</a>
								</li>
							</ul>
                        </li>
                        <?php if(isset($_SESSION["name"])){
                            require('sampl.php');
                        }
                        ?>
                    </ul>
				</div>
			</nav>
        </div>
 	</div>