<!DOCTYPE html>
<!-- https://dev.development.p2m/things -->
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-param" content="_csrf-frontend">
	<meta name="csrf-token" content="y1HmhYXl-ShFowTdTn_uV3UmpZ03TSyYS53aW4waBO-pBKDG7qfOey_MNLAMGtotPEDr7gApTqE8zqg0400p3Q==">
	<title>P2Y2Things | P2Y2Things</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css" integrity="sha512-fjy4e481VEA/OTVR4+WHMlZ4wcX/+ohNWKpVfb7q+YNnOCS++4ZDn3Vi6EaA2HJ89VXARJt7VvuAKaQ/gs1CbQ==" rel="stylesheet" crossorigin="anonymous" referrerpolicy="no-referrer">
	<script src="https://kit.fontawesome.com/7a226d9121.js" crossorigin="anonymous"></script>
	<link href="./assets/css/p2additions.css" rel="stylesheet">
</head>
<body>

	<div class="wrap">
		<nav id="w0" class="navbar-p2m navbar-inverse navbar-fixed-top navbar">
			<div class="container">
				<a class="navbar-brand" href="/index.php">
					<img width="150" height="50" src="http://placehold.it/150x50/222222/FFCC00?text=P2Y2Things" alt="P2Y2Things">
				</a>
				<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#w0-collapse" aria-controls="w0-collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="w0-collapse" class="collapse navbar-collapse">
					<ul id="w1" class="navbar-nav navbar-right nav">
						<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Charts</a>
							<div id="w2" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=flot">Flot Charts</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=morris">Morris.js Charts</a>
							</div>
						</li>
						<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Demos</a>
							<div id="w3" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=is-gd">is.gd</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=uuid">UUID</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=tables">Tables</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=forms">Forms</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=calendar">Calendar</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=animate">Animate.css</a>
							</div>
						</li>
						<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">UI Elements</a>
							<div id="w4" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=panels-wells">Panels and Wells</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=buttons">Buttons</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=notifications">Notifications</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=typography">Typography</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=grid">Grid</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=shortcodes">Shortcodes</a>
							</div>
						</li>
						<li class="dropdown nav-item">
							<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Icons</a>
							<div id="w5" class="dropdown-menu">
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=font-awesome">Font Awesome</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=font-awesome-examples">Font Awesome Examples</a>
								<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=glyphicons">Glyphicons</a>
						<li class="divider"></li>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=flag-icon-css">Flag Icon CSS</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=bootstrap-social">Bootstrap Social</a>
				</div>
				</li>
				<li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
					<div id="w6" class="dropdown-menu">
						<a class="dropdown-item" href="/index.php?r=site%2Fabout">About</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fcontact">Contact</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=blank">Blank Page</a>
					</div>
				</li>
				<li class="dropdown nav-item">
					<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">Developer</a>
					<div id="w7" class="dropdown-menu">
						<a class="dropdown-item" href="/index.php?r=gii">Gii</a>
						<a class="dropdown-item" href="/index.php?r=debug">Debug</a>
						<a class="dropdown-item" href="/index.php?r=site%2Fpage&amp;view=scratchpad">Scratchpad</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">... in progress</a>
				</li>
				<li class="dropdown dropdown nav-item">
					<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">User</a>
					<div id="w8" class="dropdown-menu">
						<a class="dropdown-item" href="/index.php?r=site%2Fsignup">Signup</a>
						<a class="dropdown-item" href="/index.php?r=site%2Flogin">Login</a>
					</div>
				</li>
				</ul>
			</div>
	</div>
	</nav>
	<div class="container">

		<div class="site-index">

			<div class="jumbotron">
				<h1>P2Y2Things!</h1>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-comments fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">26</div>
									<div>New Comments!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right">
									<i class="fa fa-arrow-circle-right"></i>
								</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-tasks fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">12</div>
									<div>New Tasks!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right">
									<i class="fa fa-arrow-circle-right"></i>
								</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-shopping-cart fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">124</div>
									<div>New Orders!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right">
									<i class="fa fa-arrow-circle-right"></i>
								</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-red">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-support fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge">13</div>
									<div>Support Tickets!</div>
								</div>
							</div>
						</div>
						<a href="#">
							<div class="panel-footer">
								<span class="pull-left">View Details</span>
								<span class="pull-right">
									<i class="fa fa-arrow-circle-right"></i>
								</span>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i>
							 Area Chart Example

							<div class="pull-right">
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">

																		Actions

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div id="morris-area-chart"></div>
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i>
							 Bar Chart Example

							<div class="pull-right">
								<div class="btn-group">
									<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">

																		Actions

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li>
											<a href="#">Action</a>
										</li>
										<li>
											<a href="#">Another action</a>
										</li>
										<li>
											<a href="#">Something else here</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="#">Separated link</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-4">
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped">
											<thead>
												<tr>
													<th>#</th>
													<th>Date</th>
													<th>Time</th>
													<th>Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>3326</td>
													<td>10/21/2013</td>
													<td>3:29 PM</td>
													<td>$321.33</td>
												</tr>
												<tr>
													<td>3325</td>
													<td>10/21/2013</td>
													<td>3:20 PM</td>
													<td>$234.34</td>
												</tr>
												<tr>
													<td>3324</td>
													<td>10/21/2013</td>
													<td>3:03 PM</td>
													<td>$724.17</td>
												</tr>
												<tr>
													<td>3323</td>
													<td>10/21/2013</td>
													<td>3:00 PM</td>
													<td>$23.71</td>
												</tr>
												<tr>
													<td>3322</td>
													<td>10/21/2013</td>
													<td>2:49 PM</td>
													<td>$8345.23</td>
												</tr>
												<tr>
													<td>3321</td>
													<td>10/21/2013</td>
													<td>2:23 PM</td>
													<td>$245.12</td>
												</tr>
												<tr>
													<td>3320</td>
													<td>10/21/2013</td>
													<td>2:15 PM</td>
													<td>$5663.54</td>
												</tr>
												<tr>
													<td>3319</td>
													<td>10/21/2013</td>
													<td>2:13 PM</td>
													<td>$943.45</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /.table-responsive -->
								</div>
								<!-- /.col-lg-4 (nested) -->
								<div class="col-lg-8">
									<div id="morris-bar-chart"></div>
								</div>
								<!-- /.col-lg-8 (nested) -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-clock-o fa-fw"></i>
							 Responsive Timeline

						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<ul class="timeline">
								<li>
									<div class="timeline-badge">
										<i class="fa fa-check"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Lorem ipsum dolor</h4>
											<p>
												<small class="text-muted">
													<i class="fa fa-clock-o"></i>
													 11 hours ago via Twitter
												</small>
											</p>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge warning">
										<i class="fa fa-credit-card"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Lorem ipsum dolor</h4>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge danger">
										<i class="fa fa-bomb"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Lorem ipsum dolor</h4>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Lorem ipsum dolor</h4>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-badge info">
										<i class="fa fa-save"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Lorem ipsum dolor</h4>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
											<hr>
											<div class="btn-group">
												<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-gear"></i>
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li>
														<a href="#">Action</a>
													</li>
													<li>
														<a href="#">Another action</a>
													</li>
													<li>
														<a href="#">Something else here</a>
													</li>
													<li class="divider"></li>
													<li>
														<a href="#">Separated link</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Lorem ipsum dolor</h4>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted">
									<div class="timeline-badge success">
										<i class="fa fa-graduation-cap"></i>
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h4 class="timeline-title">Lorem ipsum dolor</h4>
										</div>
										<div class="timeline-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-8 -->
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-bell fa-fw"></i>
							 Notifications Panel

						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="list-group">
								<a href="#" class="list-group-item">
									<i class="fa fa-comment fa-fw"></i>
									 New Comment

									<span class="pull-right text-muted small">
										<em>4 minutes ago</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-twitter fa-fw"></i>
									 3 New Followers

									<span class="pull-right text-muted small">
										<em>12 minutes ago</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-envelope fa-fw"></i>
									 Message Sent

									<span class="pull-right text-muted small">
										<em>27 minutes ago</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-tasks fa-fw"></i>
									 New Task

									<span class="pull-right text-muted small">
										<em>43 minutes ago</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-upload fa-fw"></i>
									 Server Rebooted

									<span class="pull-right text-muted small">
										<em>11:32 AM</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-bolt fa-fw"></i>
									 Server Crashed!

									<span class="pull-right text-muted small">
										<em>11:13 AM</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-warning fa-fw"></i>
									 Server Not Responding

									<span class="pull-right text-muted small">
										<em>10:57 AM</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-shopping-cart fa-fw"></i>
									 New Order Placed

									<span class="pull-right text-muted small">
										<em>9:49 AM</em>
									</span>
								</a>
								<a href="#" class="list-group-item">
									<i class="fa fa-money fa-fw"></i>
									 Payment Received

									<span class="pull-right text-muted small">
										<em>Yesterday</em>
									</span>
								</a>
							</div>
							<!-- /.list-group -->
							<a href="#" class="btn btn-default btn-block">View All Alerts</a>
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i>
							 Donut Chart Example

						</div>
						<div class="panel-body">
							<div id="morris-donut-chart"></div>
							<a href="#" class="btn btn-default btn-block">View Details</a>
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
					<div class="chat-panel panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-comments fa-fw"></i>

												Chat

							<div class="btn-group pull-right">
								<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-chevron-down"></i>
								</button>
								<ul class="dropdown-menu slidedown">
									<li>
										<a href="#">
											<i class="fa fa-refresh fa-fw"></i>
											 Refresh

										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-check-circle fa-fw"></i>
											 Available

										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-times fa-fw"></i>
											 Busy

										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-clock-o fa-fw"></i>
											 Away

										</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">
											<i class="fa fa-sign-out fa-fw"></i>
											 Sign Out

										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<ul class="chat">
								<li class="left clearfix">
									<span class="chat-img pull-left">
										<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle"/>
									</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Jack Sparrow</strong>
											<small class="pull-right text-muted">
												<i class="fa fa-clock-o fa-fw"></i>
												 12 mins ago

											</small>
										</div>
										<p>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
																		</p>
									</div>
								</li>
								<li class="right clearfix">
									<span class="chat-img pull-right">
										<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle"/>
									</span>
									<div class="chat-body clearfix">
										<div class="header">
											<small class=" text-muted">
												<i class="fa fa-clock-o fa-fw"></i>
												 13 mins ago
											</small>
											<strong class="pull-right primary-font">Bhaumik Patel</strong>
										</div>
										<p>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
																		</p>
									</div>
								</li>
								<li class="left clearfix">
									<span class="chat-img pull-left">
										<img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle"/>
									</span>
									<div class="chat-body clearfix">
										<div class="header">
											<strong class="primary-font">Jack Sparrow</strong>
											<small class="pull-right text-muted">
												<i class="fa fa-clock-o fa-fw"></i>
												 14 mins ago
											</small>
										</div>
										<p>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
																		</p>
									</div>
								</li>
								<li class="right clearfix">
									<span class="chat-img pull-right">
										<img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle"/>
									</span>
									<div class="chat-body clearfix">
										<div class="header">
											<small class=" text-muted">
												<i class="fa fa-clock-o fa-fw"></i>
												 15 mins ago
											</small>
											<strong class="pull-right primary-font">Bhaumik Patel</strong>
										</div>
										<p>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
																		</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /.panel-body -->
						<div class="panel-footer">
							<div class="input-group">
								<input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..."/>
								<span class="input-group-btn">
									<button class="btn btn-warning btn-sm" id="btn-chat">
																	Send
																</button>
								</span>
							</div>
						</div>
						<!-- /.panel-footer -->
					</div>
					<!-- /.panel .chat-panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-arrow-circle-o-right fa-fw"></i>
							 Aliases

						</div>
						<div class="panel-body">

							<dl>
								<dt>
									<code>/var/www/Sites/yii_development/vendor/yiisoft/yii2</code>
								</dt>
								<dd>@yii, the directory where the BaseYii.php file is located (also called the framework directory).</dd>
								<dt>
									<code>/var/www/Sites/yii_development/frontend</code>
								</dt>
								<dd>@app, the base path of the currently running application.</dd>
								<dt>
									<code>/var/www/Sites/yii_development/frontend/runtime</code>
								</dt>
								<dd>@runtime, the runtime path of the currently running application. Defaults to @app/runtime.</dd>
								<dt>
									<code>/var/www/Sites/yii_development/frontend/web</code>
								</dt>
								<dd>@webroot, the Web root directory of the currently running Web application. It is determined based on the directory containing the entry script.</dd>
								<dt>
									<code>
										<a href="">@web</a>
									</code>
								</dt>
								<dd>@web, the base URL of the currently running Web application. It has the same value as yii\web\Request::$baseUrl.</dd>
								<dt>
									<code>/var/www/Sites/yii_development/vendor</code>
								</dt>
								<dd>@vendor, the Composer vendor directory. Defaults to @app/vendor.</dd>
								<dt>
									<code>/var/www/Sites/yii_development/vendor/bower-asset</code>
								</dt>
								<dd>@bower, the root directory that contains bower packages. Defaults to @vendor/bower.</dd>
								<dt>
									<code>/var/www/Sites/yii_development/vendor/npm-asset</code>
								</dt>
								<dd>@npm, the root directory that contains npm packages. Defaults to @vendor/npm.</dd>

								<dt>
									<code>/var/www/Sites/yii_development/backend</code>
								</dt>
								<dd>@backend</dd>
								<dt>
									<code>/var/www/Sites/yii_development/frontend</code>
								</dt>
								<dd>@frontend</dd>
							</dl>

						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-4 -->
			</div>
			<!-- /.row -->

			<!-- this goes on every site file in p2made demos -->
			<br>
			<div class="alert alert-success" role="alert">
				<ul class="fa-ul">
					<li>
						<!-- FA::etc etc removed here -->
					</li>
				</ul>
			</div>
		</div>
		<!-- /#content-wrapper -->
	</div>
	</div>

	<footer class="footer">
		<div class="container">
			<p class="pull-left">
				Crafted with
				<i class="fas fa-heart"></i>
				 by Pedro fp, on the
				<a href="https://en.wikipedia.org/wiki/Sunshine_Coast,_Queensland" target="_blank">
					Sunshine Coast
					<i class="fas fa-external-link-alt"></i>
					<i class="fas fa-external-link-alt fa-fw fa-10x"></i>
				</a>
				 of
				<a href="https://en.wikipedia.org/wiki/Queensland" target="_blank">
					Queensland
					<i class="fas fa-external-link-alt"></i>
				</a>
				 ,
				<a href="https://en.wikipedia.org/wiki/Australia" target="_blank">
					Australia
					<i class="fas fa-external-link-alt"></i>
				</a>
				<i class="fas fa-copyright"></i>
				 2021
			</p>

			<p class="pull-right">
				Powered by
				<a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>
			</p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<!-- <script src="/assets/e690261c/yii.js"></script> -->
	<script src="./assets/js/p2additions.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js" integrity="sha512-tBzZQxySO5q5lqwLWfu8Q+o4VkTcRGOeQGVQ0ueJga4A1RKuzmAu5HXDOXLEjpbKyV7ow9ympVoa6wZLEzRzDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js" integrity="sha512-6Cwk0kyyPu8pyO9DdwyN+jcGzvZQbUzQNLI0PadCY3ikWFXW9Jkat+yrnloE63dzAKmJ1WNeryPd1yszfj7kqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./data/morris-data.js"></script>
</body>
</html>
