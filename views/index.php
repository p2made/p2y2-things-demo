<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Dashboard - SB Admin</title>

	<!-- Favicon-->
	<link href="assets/ico/favicon.ico" type="image/x-icon" rel="icon">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous" rel="stylesheet">
	<link href="assets/css/sb-admin.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<!-- Navbar Brand-->
		<a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
		<!-- Sidebar Toggle-->
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch">
				<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
			</div>
		</form>
		<!-- Navbar-->
		<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#!">Settings</a></li>
					<li><a class="dropdown-item" href="#!">Activity Log</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#!">Logout</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<div class="sb-sidenav-menu-heading">Core</div>
						<a class="nav-link" href="index.php">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Dashboard
						</a>
						<div class="sb-sidenav-menu-heading">Interface</div>
						<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
							<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
							Layouts
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link" href="layout-static.php">Static Navigation</a>
								<a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
							</nav>
						</div>
						<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
							<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
							Pages
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
								<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
									Authentication
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
								</a>
								<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
									<nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="login.php">Login</a>
										<a class="nav-link" href="register.php">Register</a>
										<a class="nav-link" href="password.php">Forgot Password</a>
									</nav>
								</div>
								<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
									Error
									<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
								</a>
								<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
									<nav class="sb-sidenav-menu-nested nav">
										<a class="nav-link" href="401.php">401 Page</a>
										<a class="nav-link" href="404.php">404 Page</a>
										<a class="nav-link" href="500.php">500 Page</a>
									</nav>
								</div>
							</nav>
						</div>
						<div class="sb-sidenav-menu-heading">Addons</div>
						<a class="nav-link" href="charts.php">
							<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
							Charts
						</a>
						<a class="nav-link" href="tables.php">
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Tables
						</a>
					</div>
				</div>
				<div class="sb-sidenav-footer">
					<div class="small">Logged in as:</div>
					Start Bootstrap
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Dashboard</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
					<div class="row">
						<div class="col-xl-3 col-md-6">
							<div class="card bg-primary text-white mb-4">
								<div class="card-body">Primary Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card bg-warning text-white mb-4">
								<div class="card-body">Warning Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card bg-success text-white mb-4">
								<div class="card-body">Success Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card bg-danger text-white mb-4">
								<div class="card-body">Danger Card</div>
								<div class="card-footer d-flex align-items-center justify-content-between">
									<a class="small text-white stretched-link" href="#">View Details</a>
									<div class="small text-white"><i class="fas fa-angle-right"></i></div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-6">
							<div class="card mb-4">
								<div class="card-header">
									<i class="fas fa-chart-area me-1"></i>
									Area Chart Example
								</div>
								<div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="card mb-4">
								<div class="card-header">
									<i class="fas fa-chart-bar me-1"></i>
									Bar Chart Example
								</div>
								<div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
							</div>
						</div>
					</div>
					<div class="card mb-4">
						<div class="card-header">
							<i class="fas fa-table me-1"></i>
							DataTable Example
						</div>
						<div class="card-body">
							<table id="datatablesSimple">
								<thead>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>$320,800</td>
									</tr>
									<tr>
										<td>Garrett Winters</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$170,750</td>
									</tr>
									<tr>
										<td>Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>66</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
									</tr>
									<tr>
										<td>Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
									</tr>
									<tr>
										<td>Airi Satou</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td>Brielle Williamson</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
									</tr>
									<tr>
										<td>Herrod Chandler</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
									</tr>
									<tr>
										<td>Rhona Davidson</td>
										<td>Integration Specialist</td>
										<td>Tokyo</td>
										<td>55</td>
										<td>2010/10/14</td>
										<td>$327,900</td>
									</tr>
									<tr>
										<td>Colleen Hurst</td>
										<td>Javascript Developer</td>
										<td>San Francisco</td>
										<td>39</td>
										<td>2009/09/15</td>
										<td>$205,500</td>
									</tr>
									<tr>
										<td>Sonya Frost</td>
										<td>Software Engineer</td>
										<td>Edinburgh</td>
										<td>23</td>
										<td>2008/12/13</td>
										<td>$103,600</td>
									</tr>
									<tr>
										<td>Jena Gaines</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>30</td>
										<td>2008/12/19</td>
										<td>$90,560</td>
									</tr>
									<tr>
										<td>Quinn Flynn</td>
										<td>Support Lead</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2013/03/03</td>
										<td>$342,000</td>
									</tr>
									<tr>
										<td>Charde Marshall</td>
										<td>Regional Director</td>
										<td>San Francisco</td>
										<td>36</td>
										<td>2008/10/16</td>
										<td>$470,600</td>
									</tr>
									<tr>
										<td>Haley Kennedy</td>
										<td>Senior Marketing Designer</td>
										<td>London</td>
										<td>43</td>
										<td>2012/12/18</td>
										<td>$313,500</td>
									</tr>
									<tr>
										<td>Tatyana Fitzpatrick</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>19</td>
										<td>2010/03/17</td>
										<td>$385,750</td>
									</tr>
									<tr>
										<td>Michael Silva</td>
										<td>Marketing Designer</td>
										<td>London</td>
										<td>66</td>
										<td>2012/11/27</td>
										<td>$198,500</td>
									</tr>
									<tr>
										<td>Paul Byrd</td>
										<td>Chief Financial Officer (CFO)</td>
										<td>New York</td>
										<td>64</td>
										<td>2010/06/09</td>
										<td>$725,000</td>
									</tr>
									<tr>
										<td>Gloria Little</td>
										<td>Systems Administrator</td>
										<td>New York</td>
										<td>59</td>
										<td>2009/04/10</td>
										<td>$237,500</td>
									</tr>
									<tr>
										<td>Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>41</td>
										<td>2012/10/13</td>
										<td>$132,000</td>
									</tr>
									<tr>
										<td>Dai Rios</td>
										<td>Personnel Lead</td>
										<td>Edinburgh</td>
										<td>35</td>
										<td>2012/09/26</td>
										<td>$217,500</td>
									</tr>
									<tr>
										<td>Jenette Caldwell</td>
										<td>Development Lead</td>
										<td>New York</td>
										<td>30</td>
										<td>2011/09/03</td>
										<td>$345,000</td>
									</tr>
									<tr>
										<td>Yuri Berry</td>
										<td>Chief Marketing Officer (CMO)</td>
										<td>New York</td>
										<td>40</td>
										<td>2009/06/25</td>
										<td>$675,000</td>
									</tr>
									<tr>
										<td>Caesar Vance</td>
										<td>Pre-Sales Support</td>
										<td>New York</td>
										<td>21</td>
										<td>2011/12/12</td>
										<td>$106,450</td>
									</tr>
									<tr>
										<td>Doris Wilder</td>
										<td>Sales Assistant</td>
										<td>Sidney</td>
										<td>23</td>
										<td>2010/09/20</td>
										<td>$85,600</td>
									</tr>
									<tr>
										<td>Angelica Ramos</td>
										<td>Chief Executive Officer (CEO)</td>
										<td>London</td>
										<td>47</td>
										<td>2009/10/09</td>
										<td>$1,200,000</td>
									</tr>
									<tr>
										<td>Gavin Joyce</td>
										<td>Developer</td>
										<td>Edinburgh</td>
										<td>42</td>
										<td>2010/12/22</td>
										<td>$92,575</td>
									</tr>
									<tr>
										<td>Jennifer Chang</td>
										<td>Regional Director</td>
										<td>Singapore</td>
										<td>28</td>
										<td>2010/11/14</td>
										<td>$357,650</td>
									</tr>
									<tr>
										<td>Brenden Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>28</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
									</tr>
									<tr>
										<td>Fiona Green</td>
										<td>Chief Operating Officer (COO)</td>
										<td>San Francisco</td>
										<td>48</td>
										<td>2010/03/11</td>
										<td>$850,000</td>
									</tr>
									<tr>
										<td>Shou Itou</td>
										<td>Regional Marketing</td>
										<td>Tokyo</td>
										<td>20</td>
										<td>2011/08/14</td>
										<td>$163,000</td>
									</tr>
									<tr>
										<td>Michelle House</td>
										<td>Integration Specialist</td>
										<td>Sidney</td>
										<td>37</td>
										<td>2011/06/02</td>
										<td>$95,400</td>
									</tr>
									<tr>
										<td>Suki Burks</td>
										<td>Developer</td>
										<td>London</td>
										<td>53</td>
										<td>2009/10/22</td>
										<td>$114,500</td>
									</tr>
									<tr>
										<td>Prescott Bartlett</td>
										<td>Technical Author</td>
										<td>London</td>
										<td>27</td>
										<td>2011/05/07</td>
										<td>$145,000</td>
									</tr>
									<tr>
										<td>Gavin Cortez</td>
										<td>Team Leader</td>
										<td>San Francisco</td>
										<td>22</td>
										<td>2008/10/26</td>
										<td>$235,500</td>
									</tr>
									<tr>
										<td>Martena Mccray</td>
										<td>Post-Sales support</td>
										<td>Edinburgh</td>
										<td>46</td>
										<td>2011/03/09</td>
										<td>$324,050</td>
									</tr>
									<tr>
										<td>Unity Butler</td>
										<td>Marketing Designer</td>
										<td>San Francisco</td>
										<td>47</td>
										<td>2009/12/09</td>
										<td>$85,675</td>
									</tr>
									<tr>
										<td>Howard Hatfield</td>
										<td>Office Manager</td>
										<td>San Francisco</td>
										<td>51</td>
										<td>2008/12/16</td>
										<td>$164,500</td>
									</tr>
									<tr>
										<td>Hope Fuentes</td>
										<td>Secretary</td>
										<td>San Francisco</td>
										<td>41</td>
										<td>2010/02/12</td>
										<td>$109,850</td>
									</tr>
									<tr>
										<td>Vivian Harrell</td>
										<td>Financial Controller</td>
										<td>San Francisco</td>
										<td>62</td>
										<td>2009/02/14</td>
										<td>$452,500</td>
									</tr>
									<tr>
										<td>Timothy Mooney</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>37</td>
										<td>2008/12/11</td>
										<td>$136,200</td>
									</tr>
									<tr>
										<td>Jackson Bradshaw</td>
										<td>Director</td>
										<td>New York</td>
										<td>65</td>
										<td>2008/09/26</td>
										<td>$645,750</td>
									</tr>
									<tr>
										<td>Olivia Liang</td>
										<td>Support Engineer</td>
										<td>Singapore</td>
										<td>64</td>
										<td>2011/02/03</td>
										<td>$234,500</td>
									</tr>
									<tr>
										<td>Bruno Nash</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>38</td>
										<td>2011/05/03</td>
										<td>$163,500</td>
									</tr>
									<tr>
										<td>Sakura Yamamoto</td>
										<td>Support Engineer</td>
										<td>Tokyo</td>
										<td>37</td>
										<td>2009/08/19</td>
										<td>$139,575</td>
									</tr>
									<tr>
										<td>Thor Walton</td>
										<td>Developer</td>
										<td>New York</td>
										<td>61</td>
										<td>2013/08/11</td>
										<td>$98,540</td>
									</tr>
									<tr>
										<td>Finn Camacho</td>
										<td>Support Engineer</td>
										<td>San Francisco</td>
										<td>47</td>
										<td>2009/07/07</td>
										<td>$87,500</td>
									</tr>
									<tr>
										<td>Serge Baldwin</td>
										<td>Data Coordinator</td>
										<td>Singapore</td>
										<td>64</td>
										<td>2012/04/09</td>
										<td>$138,575</td>
									</tr>
									<tr>
										<td>Zenaida Frank</td>
										<td>Software Engineer</td>
										<td>New York</td>
										<td>63</td>
										<td>2010/01/04</td>
										<td>$125,250</td>
									</tr>
									<tr>
										<td>Zorita Serrano</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>56</td>
										<td>2012/06/01</td>
										<td>$115,000</td>
									</tr>
									<tr>
										<td>Jennifer Acosta</td>
										<td>Junior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>43</td>
										<td>2013/02/01</td>
										<td>$75,650</td>
									</tr>
									<tr>
										<td>Cara Stevens</td>
										<td>Sales Assistant</td>
										<td>New York</td>
										<td>46</td>
										<td>2011/12/06</td>
										<td>$145,600</td>
									</tr>
									<tr>
										<td>Hermione Butler</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>47</td>
										<td>2011/03/21</td>
										<td>$356,250</td>
									</tr>
									<tr>
										<td>Lael Greer</td>
										<td>Systems Administrator</td>
										<td>London</td>
										<td>21</td>
										<td>2009/02/27</td>
										<td>$103,500</td>
									</tr>
									<tr>
										<td>Jonas Alexander</td>
										<td>Developer</td>
										<td>San Francisco</td>
										<td>30</td>
										<td>2010/07/14</td>
										<td>$86,500</td>
									</tr>
									<tr>
										<td>Shad Decker</td>
										<td>Regional Director</td>
										<td>Edinburgh</td>
										<td>51</td>
										<td>2008/11/13</td>
										<td>$183,000</td>
									</tr>
									<tr>
										<td>Michael Bruce</td>
										<td>Javascript Developer</td>
										<td>Singapore</td>
										<td>29</td>
										<td>2011/06/27</td>
										<td>$183,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Your Website 2023</div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-1H217gwSVyLSIfaLxHbE7dRb3v4mYCKbpQvzx0cegeju1MVsGrX5xXxAvs/HgeFs" crossorigin="anonymous"></script>
	<!-- Bootstrap core JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<!-- Core theme JS-->
	<script src="assets/js/sb-admin.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
	<script src="demo/chart-area-demo.js"></script>
	<script src="demo/chart-bar-demo.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
	<script src="js/datatables-simple-demo.js"></script>
</body>
</html>


<!-- -- ^ -- -- ^ -- -- ^ -- -- ^ -- -- ^ -- -->


<!DOCTYPE html>
<html lang="en-AU" class="h-100">
<head>
	<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>p2y2-things-demo</title>
<meta name="csrf-param" content="_csrf-frontend">
<meta name="csrf-token" content="_J2SV4QwNXk5cQM85bNYGSTRw46pbFfvAC85B4G0hzek2KM24F4BNXMBXHuq3h9cVZe1t-dbEYs2YF9B1YHrbw==">

<link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-zzPh8NflvEInFbVSzLYGVMLOn0j0kfsjq/UlNeMBRYw=" crossorigin="anonymous">
<link href="/assets/b0821e92/css/p2additions.css" rel="stylesheet">
<link href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
<link href="/assets/b0821e92/css/bootstrap-icons.min.css" rel="stylesheet">
<link href="/assets/8bb38f3d/css/sb-admin.min.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//cdn.jsdelivr.net/npm/simple-datatables@10.0.0/dist/style.min.css" rel="stylesheet" integrity="sha256-QDiWEIOYivjFEI0WQwdwihzwG9nJGKFWXiRh4dr5ito=" crossorigin="anonymous"></head>
<body id="page-top">
		<div id="wrapper">
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="index.php">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Components</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Components:</h6>
				<a class="collapse-item" href="buttons.php">Buttons</a>
				<a class="collapse-item" href="cards.php">Cards</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
			aria-expanded="true" aria-controls="collapseUtilities">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Utilities</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
			data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Utilities:</h6>
				<a class="collapse-item" href="utilities-color.php">Colors</a>
				<a class="collapse-item" href="utilities-border.php">Borders</a>
				<a class="collapse-item" href="utilities-animation.php">Animations</a>
				<a class="collapse-item" href="utilities-other.php">Other</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Addons
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
			aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-folder"></i>
			<span>Pages</span>
		</a>
		<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Login Screens:</h6>
				<a class="collapse-item" href="login.php">Login</a>
				<a class="collapse-item" href="register.php">Register</a>
				<a class="collapse-item" href="forgot-password.php">Forgot Password</a>
				<div class="collapse-divider"></div>
				<h6 class="collapse-header">Other Pages:</h6>
				<a class="collapse-item" href="401.php">401 Page</a>
				<a class="collapse-item" href="404.php">404 Page</a>
				<a class="collapse-item" href="500.php">500 Page</a>
				<a class="collapse-item" href="blank.php">Blank Page</a>
			</div>
		</div>
	</li>

	<!-- Nav Item - Charts -->
	<li class="nav-item">
		<a class="nav-link" href="charts.php">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Charts</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item">
		<a class="nav-link" href="tables.php">
			<i class="fas fa-fw fa-table"></i>
			<span>Tables</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		<i class="fa fa-bars"></i>
	</button>

	<!-- Topbar Search -->
	<form
		class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
		<div class="input-group">
			<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
				aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-primary" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
	</form>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

		<!-- Nav Item - Search Dropdown (Visible Only XS) -->
		<li class="nav-item dropdown no-arrow d-sm-none">
			<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-search fa-fw"></i>
			</a>
			<!-- Dropdown - Messages -->
			<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
				aria-labelledby="searchDropdown">
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small"
							placeholder="Search for..." aria-label="Search"
							aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>

		<!-- Nav Item - Alerts -->
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-bell fa-fw"></i>
				<!-- Counter - Alerts -->
				<span class="badge badge-danger badge-counter">3+</span>
			</a>
			<!-- Dropdown - Alerts -->
			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="alertsDropdown">
				<h6 class="dropdown-header">
					Alerts Center
				</h6>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="mr-3">
						<div class="icon-circle bg-primary">
							<i class="fas fa-file-alt text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 12, 2019</div>
						<span class="font-weight-bold">A new monthly report is ready to download!</span>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="mr-3">
						<div class="icon-circle bg-success">
							<i class="fas fa-donate text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 7, 2019</div>
						$290.29 has been deposited into your account!
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="mr-3">
						<div class="icon-circle bg-warning">
							<i class="fas fa-exclamation-triangle text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 2, 2019</div>
						Spending Alert: We've noticed unusually high spending for your account.
					</div>
				</a>
				<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
			</div>
		</li>

		<!-- Nav Item - Messages -->
		<li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-envelope fa-fw"></i>
				<!-- Counter - Messages -->
				<span class="badge badge-danger badge-counter">7</span>
			</a>
			<!-- Dropdown - Messages -->
			<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="messagesDropdown">
				<h6 class="dropdown-header">
					Message Center
				</h6>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="assets/img/undraw_profile_1.svg"
							alt="...">
						<div class="status-indicator bg-success"></div>
					</div>
					<div class="font-weight-bold">
						<div class="text-truncate">Hi there! I am wondering if you can help me with a
							problem I've been having.</div>
						<div class="small text-gray-500">Emily Fowler · 58m</div>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="assets/img/undraw_profile_2.svg"
							alt="...">
						<div class="status-indicator"></div>
					</div>
					<div>
						<div class="text-truncate">I have the photos that you ordered last month, how
							would you like them sent to you?</div>
						<div class="small text-gray-500">Jae Chun · 1d</div>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="assets/img/undraw_profile_3.svg"
							alt="...">
						<div class="status-indicator bg-warning"></div>
					</div>
					<div>
						<div class="text-truncate">Last month's report looks great, I am very happy with
							the progress so far, keep up the good work!</div>
						<div class="small text-gray-500">Morgan Alvarez · 2d</div>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
							alt="...">
						<div class="status-indicator bg-success"></div>
					</div>
					<div>
						<div class="text-truncate">Am I a good boy? The reason I ask is because someone
							told me that people say this to all dogs, even if they aren't good...</div>
						<div class="small text-gray-500">Chicken the Dog · 2w</div>
					</div>
				</a>
				<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
			</div>
		</li>

		<div class="topbar-divider d-none d-sm-block"></div>

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
				<img class="img-profile rounded-circle"
					src="assets/img/undraw_profile.svg">
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					Profile
				</a>
				<a class="dropdown-item" href="#">
					<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
					Settings
				</a>
				<a class="dropdown-item" href="#">
					<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
					Activity Log
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
			</div>
		</li>

	</ul>

</nav>

				<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
								Earnings (Monthly)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Earnings (Annual)</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
							</div>
							<div class="row no-gutters align-items-center">
								<div class="col-auto">
									<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
								</div>
								<div class="col">
									<div class="progress progress-sm mr-2">
										<div class="progress-bar bg-info" role="progressbar"
											style="width: 50%" aria-valuenow="50" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
								Pending Requests</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->

	<div class="row">

		<!-- Area Chart -->
		<div class="col-xl-8 col-lg-7">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div
					class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
							aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="chart-area">
						<canvas id="myAreaChart"></canvas>
					</div>
				</div>
			</div>
		</div>

		<!-- Pie Chart -->
		<div class="col-xl-4 col-lg-5">
			<div class="card shadow mb-4">
				<!-- Card Header - Dropdown -->
				<div
					class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
					<h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
					<div class="dropdown no-arrow">
						<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
							aria-labelledby="dropdownMenuLink">
							<div class="dropdown-header">Dropdown Header:</div>
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
				<!-- Card Body -->
				<div class="card-body">
					<div class="chart-pie pt-4 pb-2">
						<canvas id="myPieChart"></canvas>
					</div>
					<div class="mt-4 text-center small">
						<span class="mr-2">
							<i class="fas fa-circle text-primary"></i> Direct
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-success"></i> Social
						</span>
						<span class="mr-2">
							<i class="fas fa-circle text-info"></i> Referral
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Row -->
	<div class="row">

		<!-- Content Column -->
		<div class="col-lg-6 mb-4">

			<!-- Project Card Example -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Projects</h6>
				</div>
				<div class="card-body">
					<h4 class="small font-weight-bold">Server Migration <span
							class="float-right">20%</span></h4>
					<div class="progress mb-4">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
							aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h4 class="small font-weight-bold">Sales Tracking <span
							class="float-right">40%</span></h4>
					<div class="progress mb-4">
						<div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
							aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h4 class="small font-weight-bold">Customer Database <span
							class="float-right">60%</span></h4>
					<div class="progress mb-4">
						<div class="progress-bar" role="progressbar" style="width: 60%"
							aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h4 class="small font-weight-bold">Payout Details <span
							class="float-right">80%</span></h4>
					<div class="progress mb-4">
						<div class="progress-bar bg-info" role="progressbar" style="width: 80%"
							aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<h4 class="small font-weight-bold">Account Setup <span
							class="float-right">Complete!</span></h4>
					<div class="progress">
						<div class="progress-bar bg-success" role="progressbar" style="width: 100%"
							aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>

			<!-- Color System -->
			<div class="row">
				<div class="col-lg-6 mb-4">
					<div class="card bg-primary text-white shadow">
						<div class="card-body">
							Primary
							<div class="text-white-50 small">#4e73df</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="card bg-success text-white shadow">
						<div class="card-body">
							Success
							<div class="text-white-50 small">#1cc88a</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="card bg-info text-white shadow">
						<div class="card-body">
							Info
							<div class="text-white-50 small">#36b9cc</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="card bg-warning text-white shadow">
						<div class="card-body">
							Warning
							<div class="text-white-50 small">#f6c23e</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="card bg-danger text-white shadow">
						<div class="card-body">
							Danger
							<div class="text-white-50 small">#e74a3b</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="card bg-secondary text-white shadow">
						<div class="card-body">
							Secondary
							<div class="text-white-50 small">#858796</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="card bg-light text-black shadow">
						<div class="card-body">
							Light
							<div class="text-black-50 small">#f8f9fc</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mb-4">
					<div class="card bg-dark text-white shadow">
						<div class="card-body">
							Dark
							<div class="text-white-50 small">#5a5c69</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="col-lg-6 mb-4">

			<!-- Illustrations -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
				</div>
				<div class="card-body">
					<div class="text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
							src="assets/img/undraw_posting_photo.svg" alt="...">
					</div>
					<p>Add some quality, svg illustrations to your project courtesy of <a
							target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
						constantly updated collection of beautiful svg images that you can use
						completely free and without attribution!</p>
					<a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
						unDraw &rarr;</a>
				</div>
			</div>

			<!-- Approach -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
				</div>
				<div class="card-body">
					<p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
						CSS bloat and poor page performance. Custom CSS classes are used to create
						custom components and custom utility classes.</p>
					<p class="mb-0">Before working with this theme, you should become familiar with the
						Bootstrap framework, especially the utility classes.</p>
				</div>
			</div>

		</div>
	</div>

</div>

			</div>
			<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Your Website 2021</span>
		</div>
	</div>
</footer>
		</div>
	</div>
	<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
	<div id="yii-debug-toolbar" data-url="/debug/default/toolbar?tag=67faaa835766d" data-skip-urls="[]" style="display:none" class="yii-debug-toolbar-bottom"></div><style>#yii-debug-toolbar-logo{position:fixed;right:31px;bottom:4px}@media print{.yii-debug-toolbar{display:none !important}}.yii-debug-toolbar{font:11px Verdana, Arial, sans-serif;text-align:left;width:96px;transition:width .3s ease;z-index:1000000}.yii-debug-toolbar.yii-debug-toolbar_active:not(.yii-debug-toolbar_animating) .yii-debug-toolbar__bar{overflow:visible;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.yii-debug-toolbar.yii-debug-toolbar_iframe_active:not(.yii-debug-toolbar_animating) .yii-debug-toolbar__resize-handle{display:block;height:4px;cursor:ns-resize;margin-bottom:0;z-index:1000001;position:absolute;left:0;right:0}.yii-debug-toolbar:not(.yii-debug-toolbar_active) .yii-debug-toolbar__bar,.yii-debug-toolbar.yii-debug-toolbar_animating .yii-debug-toolbar__bar{height:40px}.yii-debug-toolbar_active{width:100%}.yii-debug-toolbar_active .yii-debug-toolbar__toggle-icon{-webkit-transform:rotate(0);transform:rotate(0)}.yii-debug-toolbar_position_top{margin:0 0 20px 0;width:100%}.yii-debug-toolbar_position_bottom{position:fixed;right:0;bottom:0;margin:0}.yii-debug-toolbar_position_upper{position:fixed;right:0;top:0;margin:0}.yii-debug-toolbar_position_upper.yii-debug-toolbar_iframe_active{border-bottom:1px solid rgba(0,0,0,.11)}.yii-debug-toolbar_position_upper.yii-debug-toolbar_iframe_active .yii-debug-toolbar__toggle-icon{-webkit-transform:rotate(-90deg);transform:rotate(-90deg)}.yii-debug-toolbar__bar{position:relative;padding:0;font:11px Verdana, Arial, sans-serif;text-align:left;overflow:hidden;box-sizing:content-box;display:flex;flex-wrap:wrap;background:#fff;background:-moz-linear-gradient(top, #fff 0%, #f7f7f7 100%);background:-webkit-linear-gradient(top, #fff 0%, #f7f7f7 100%);background:linear-gradient(to bottom, #fff 0%, #f7f7f7 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0);border:1px solid rgba(0,0,0,0.11);direction:ltr}.yii-debug-toolbar__bar::after{content:'';display:table;clear:both}.yii-debug-toolbar__view{height:0;overflow:hidden;background:white}.yii-debug-toolbar__view iframe{margin:0;padding:10px 0 0;height:100%;width:100%;border:0}.yii-debug-toolbar_iframe_active .yii-debug-toolbar__view{height:100%}.yii-debug-toolbar_iframe_active .yii-debug-toolbar__toggle-icon{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.yii-debug-toolbar_iframe_active .yii-debug-toolbar__external{display:block}.yii-debug-toolbar_iframe_animating .yii-debug-toolbar__view{transition:height .3s ease}.yii-debug-toolbar__block{margin:0;border-right:1px solid rgba(0,0,0,0.11);border-bottom:1px solid rgba(0,0,0,0.11);padding:4px 8px;line-height:32px;white-space:nowrap}@media (max-width: 767.98px){.yii-debug-toolbar__block{flex-grow:1;text-align:center}}.yii-debug-toolbar__block a{display:inline-block;text-decoration:none;color:black}.yii-debug-toolbar__block img{vertical-align:middle;width:30px;height:30px}.yii-debug-toolbar__block_active,.yii-debug-toolbar__ajax:hover{background:#f7f7f7;background:-moz-linear-gradient(top, #f7f7f7 0%, #e0e0e0 100%);background:-webkit-linear-gradient(top, #f7f7f7 0%, #e0e0e0 100%);background:linear-gradient(to bottom, #f7f7f7 0%, #e0e0e0 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0)}.yii-debug-toolbar__label{display:inline-block;padding:2px 4px;font-size:12px;font-weight:normal;line-height:14px;white-space:nowrap;vertical-align:middle;max-width:100px;overflow-x:hidden;text-overflow:ellipsis;color:#ffffff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#737373;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.yii-debug-toolbar__label:empty{display:none}a.yii-debug-toolbar__label:hover,a.yii-debug-toolbar__label:focus{color:#ffffff;text-decoration:none;cursor:pointer}.yii-debug-toolbar__label_important,.yii-debug-toolbar__label_error{background-color:#b94a48}.yii-debug-toolbar__label_important[href]{background-color:#953b39}.yii-debug-toolbar__label_warning,.yii-debug-toolbar__badge_warning{background-color:#f89406}.yii-debug-toolbar__label_warning[href]{background-color:#c67605}.yii-debug-toolbar__label_success{background-color:#217822}.yii-debug-toolbar__label_success[href]{background-color:#356635}.yii-debug-toolbar__label_info{background-color:#0b72b8}.yii-debug-toolbar__label_info[href]{background-color:#2d6987}.yii-debug-toolbar__label_inverse,.yii-debug-toolbar__badge_inverse{background-color:#333333}.yii-debug-toolbar__label_inverse[href],.yii-debug-toolbar__badge_inverse[href]{background-color:#1a1a1a}.yii-debug-toolbar__title{background:#f7f7f7;background:-moz-linear-gradient(top, #f7f7f7 0%, #e0e0e0 100%);background:-webkit-linear-gradient(top, #f7f7f7 0%, #e0e0e0 100%);background:linear-gradient(to bottom, #f7f7f7 0%, #e0e0e0 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0)}.yii-debug-toolbar__block_last{width:80px;height:40px;float:left}.yii-debug-toolbar__toggle,.yii-debug-toolbar__external{cursor:pointer;position:absolute;width:30px;height:30px;font-size:25px;font-weight:100;line-height:28px;color:#ffffff;text-align:center;opacity:0.5;filter:alpha(opacity=50);transition:opacity .3s ease}.yii-debug-toolbar__toggle:hover,.yii-debug-toolbar__toggle:focus,.yii-debug-toolbar__external:hover,.yii-debug-toolbar__external:focus{color:#ffffff;text-decoration:none;opacity:0.9;filter:alpha(opacity=90)}.yii-debug-toolbar__toggle-icon,.yii-debug-toolbar__external-icon{display:inline-block;background-position:50% 50%;background-repeat:no-repeat}.yii-debug-toolbar__toggle{right:10px;bottom:4px}.yii-debug-toolbar__toggle-icon{padding:7px 0;width:10px;height:16px;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMTUuNTYzIDQwLjgzNmEuOTk3Ljk5NyAwIDAgMCAxLjQxNCAwbDE1LTE1YTEgMSAwIDAgMCAwLTEuNDE0bC0xNS0xNWExIDEgMCAwIDAtMS40MTQgMS40MTRMMjkuODU2IDI1LjEzIDE1LjU2MyAzOS40MmExIDEgMCAwIDAgMCAxLjQxNHoiLz48L3N2Zz4=");transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.yii-debug-toolbar__external{display:none;right:50px;bottom:4px}.yii-debug-toolbar__external-icon{padding:8px 0;width:14px;height:14px;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMzkuNjQyIDkuNzIyYTEuMDEgMS4wMSAwIDAgMC0uMzgyLS4wNzdIMjguMTAzYTEgMSAwIDAgMCAwIDJoOC43NDNMMjEuNyAyNi43OWExIDEgMCAwIDAgMS40MTQgMS40MTVMMzguMjYgMTMuMDZ2OC43NDNhMSAxIDAgMCAwIDIgMFYxMC42NDZhMS4wMDUgMS4wMDUgMCAwIDAtLjYxOC0uOTI0eiIvPjxwYXRoIGQ9Ik0zOS4yNiAyNy45ODVhMSAxIDAgMCAwLTEgMXYxMC42NmgtMjh2LTI4aDEwLjY4M2ExIDEgMCAwIDAgMC0ySDkuMjZhMSAxIDAgMCAwLTEgMXYzMGExIDEgMCAwIDAgMSAxaDMwYTEgMSAwIDAgMCAxLTF2LTExLjY2YTEgMSAwIDAgMC0xLTF6Ii8+PC9zdmc+")}.yii-debug-toolbar__switch-icon{margin-left:10px;padding:5px 10px;width:18px;height:18px;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDUwIDUwIiB2ZXJzaW9uPSIxLjEiPjxwYXRoIGQ9Im00MS4xIDIzYy0wLjYgMC0xIDAuNC0xIDF2MTAuN2wtMjUuNi0wLjFjMCAwIDAtMiAwLTIuOCAwLTAuOC0wLjctMS0xLTAuNmwtMy41IDMuNWMtMC42IDAuNi0wLjYgMS4zIDAgMmwzLjQgMy40YzAuNCAwLjQgMS4xIDAuMiAxLTAuNmwwLTIuOWMwIDAgMjAuOCAwLjEgMjYuNiAwIDAuNiAwIDEtMC40IDEtMXYtMTEuN2MwLTAuNi0wLjQtMS0xLTF6TTkgMjYuOSA5IDI2LjkgOSAyNi45IDkgMjYuOSIvPjxwYXRoIGQ9Im05IDI2LjljMC42IDAgMS0wLjQgMS0xdi0xMC43bDI1LjYgMC4xYzAgMCAwIDIgMCAyLjggMCAwLjggMC43IDEgMSAwLjZsMy41LTMuNWMwLjYtMC42IDAuNi0xLjMgMC0ybC0zLjQtMy40Yy0wLjQtMC40LTEuMS0wLjItMSAwLjZsMCAyLjljMCAwLTIwLjgtMC4xLTI2LjYgMC0wLjYgMC0xIDAuNC0xIDF2MTEuN2MwIDAuNiAwLjQgMSAxIDF6Ii8+PC9zdmc+")}.yii-debug-toolbar__ajax{position:relative}.yii-debug-toolbar__ajax:hover .yii-debug-toolbar__ajax_info,.yii-debug-toolbar__ajax:focus .yii-debug-toolbar__ajax_info{visibility:visible}.yii-debug-toolbar__ajax a{color:#337ab7}.yii-debug-toolbar__ajax table{width:100%;table-layout:auto;border-spacing:0;border-collapse:collapse}.yii-debug-toolbar__ajax table td{padding:4px;font-size:12px;line-height:normal;vertical-align:top;border-top:1px solid #ddd}.yii-debug-toolbar__ajax table th{padding:4px;font-size:11px;line-height:normal;vertical-align:bottom;border-bottom:2px solid #ddd}.yii-debug-toolbar__ajax_info{visibility:hidden;transition:visibility .2s linear;background-color:white;box-shadow:inset 0 -10px 10px -10px #e1e1e1;position:absolute;bottom:40px;left:-1px;padding:10px;max-width:480px;max-height:480px;word-wrap:break-word;overflow:hidden;overflow-y:auto;box-sizing:border-box;border:1px solid rgba(0,0,0,0.11);z-index:1000001}.yii-debug-toolbar__ajax_request_status{color:white;padding:2px 5px}.yii-debug-toolbar__ajax_request_url{max-width:170px;overflow:hidden;text-overflow:ellipsis}
</style><script>(function () {
    'use strict';

    var findToolbar = function () {
            return document.querySelector('#yii-debug-toolbar');
        },
        ajax = function (url, settings) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            settings = settings || {};
            xhr.open(settings.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Accept', 'text/html');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200 && settings.success) {
                        settings.success(xhr);
                    } else if (xhr.status !== 200 && settings.error) {
                        settings.error(xhr);
                    }
                }
            };
            xhr.send(settings.data || '');
        },
        url,
        div,
        toolbarEl = findToolbar(),
        toolbarAnimatingClass = 'yii-debug-toolbar_animating',
        barSelector = '.yii-debug-toolbar__bar',
        viewSelector = '.yii-debug-toolbar__view',
        blockSelector = '.yii-debug-toolbar__block',
        toggleSelector = '.yii-debug-toolbar__toggle',
        externalSelector = '.yii-debug-toolbar__external',

        CACHE_KEY = 'yii-debug-toolbar',
        ACTIVE_STATE = 'active',

        animationTime = 300,

        activeClass = 'yii-debug-toolbar_active',
        iframeActiveClass = 'yii-debug-toolbar_iframe_active',
        iframeAnimatingClass = 'yii-debug-toolbar_iframe_animating',
        titleClass = 'yii-debug-toolbar__title',
        blockClass = 'yii-debug-toolbar__block',
        ignoreClickClass = 'yii-debug-toolbar__ignore_click',
        blockActiveClass = 'yii-debug-toolbar__block_active',
        requestStack = [];

    if (toolbarEl) {
        url = toolbarEl.getAttribute('data-url');

        ajax(url, {
            success: function (xhr) {
                div = document.createElement('div');
                div.innerHTML = xhr.responseText;

                toolbarEl.parentNode && toolbarEl.parentNode.replaceChild(div, toolbarEl);

                showToolbar(findToolbar());

                var event;
                if (typeof(Event) === 'function') {
                    event = new Event('yii.debug.toolbar_attached', {'bubbles': true});
                } else {
                    event = document.createEvent('Event');
                    event.initEvent('yii.debug.toolbar_attached', true, true);
                }

                div.dispatchEvent(event);
            },
            error: function (xhr) {
                toolbarEl.innerText = xhr.responseText;
            }
        });
    }

    function showToolbar(toolbarEl) {
        var barEl = toolbarEl.querySelector(barSelector),
            viewEl = toolbarEl.querySelector(viewSelector),
            toggleEl = toolbarEl.querySelector(toggleSelector),
            externalEl = toolbarEl.querySelector(externalSelector),
            blockEls = barEl.querySelectorAll(blockSelector),
            blockLinksEls = document.querySelectorAll(blockSelector + ':not(.' + titleClass + ') a'),
            iframeEl = viewEl.querySelector('iframe'),
            iframeHeight = function () {
                return (window.innerHeight * (toolbarEl.dataset.height / 100) - barEl.clientHeight) + 'px';
            },
            isIframeActive = function () {
                return toolbarEl.classList.contains(iframeActiveClass);
            },
            resizeIframe = function(mouse) {
                var availableHeight = window.innerHeight - barEl.clientHeight;
                viewEl.style.height = Math.min(availableHeight, availableHeight - mouse.y) + "px";
            },
            showIframe = function (href) {
                toolbarEl.classList.add(iframeAnimatingClass);
                toolbarEl.classList.add(iframeActiveClass);

                iframeEl.src = externalEl.href = href;
                iframeEl.removeAttribute('tabindex');

                viewEl.style.height = iframeHeight();
                setTimeout(function () {
                    toolbarEl.classList.remove(iframeAnimatingClass);
                }, animationTime);
            },
            hideIframe = function () {
                toolbarEl.classList.add(iframeAnimatingClass);
                toolbarEl.classList.remove(iframeActiveClass);
                iframeEl.setAttribute("tabindex", "-1");
                removeActiveBlocksCls();

                externalEl.href = '#';
                viewEl.style.height = '';
                setTimeout(function () {
                    toolbarEl.classList.remove(iframeAnimatingClass);
                }, animationTime);
            },
            removeActiveBlocksCls = function () {
                [].forEach.call(blockEls, function (el) {
                    el.classList.remove(blockActiveClass);
                });
            },
            toggleToolbarClass = function (className) {
                toolbarEl.classList.add(toolbarAnimatingClass);
                if (toolbarEl.classList.contains(className)) {
                    toolbarEl.classList.remove(className);
                    [].forEach.call(blockLinksEls, function (el) {
                        el.setAttribute('tabindex', "-1");
                    });
                } else {
                    [].forEach.call(blockLinksEls, function (el) {
                        el.removeAttribute('tabindex');
                    });
                    toolbarEl.classList.add(className);
                }
                setTimeout(function () {
                    toolbarEl.classList.remove(toolbarAnimatingClass);
                }, animationTime);
            },
            toggleStorageState = function (key, value) {
                if (window.localStorage) {
                    var item = localStorage.getItem(key);

                    if (item) {
                        localStorage.removeItem(key);
                    } else {
                        localStorage.setItem(key, value);
                    }
                }
            },
            restoreStorageState = function (key) {
                if (window.localStorage) {
                    return localStorage.getItem(key);
                }
            },
            togglePosition = function () {
                if (isIframeActive()) {
                    hideIframe();
                } else {
                    toggleToolbarClass(activeClass);
                    toggleStorageState(CACHE_KEY, ACTIVE_STATE);
                }
            };

        if (restoreStorageState(CACHE_KEY) === ACTIVE_STATE) {
            var transition = toolbarEl.style.transition;
            toolbarEl.style.transition = 'none';
            toolbarEl.classList.add(activeClass);
            setTimeout(function () {
                toolbarEl.style.transition = transition;
            }, animationTime);
        } else {
            [].forEach.call(blockLinksEls, function (el) {
                el.setAttribute('tabindex', "-1");
            });
        }

        toolbarEl.style.display = 'block';

        window.onresize = function () {
            if (toolbarEl.classList.contains(iframeActiveClass)) {
                viewEl.style.height = iframeHeight();
            }
        };

        toolbarEl.addEventListener("mousedown", function(e) {
            if (isIframeActive() && (e.y - toolbarEl.offsetTop < 4 /* 4px click zone */)) {
                document.addEventListener("mousemove", resizeIframe, false);
            }
        }, false);

        document.addEventListener("mouseup", function(){
            if (isIframeActive()) {
                document.removeEventListener("mousemove", resizeIframe, false);
            }
        }, false);

        barEl.onclick = function (e) {
            var target = e.target,
                block = findAncestor(target, blockClass);

            if (block
                && !block.classList.contains(titleClass)
                && !block.classList.contains(ignoreClickClass)
                && e.which !== 2 && !e.ctrlKey // not mouse wheel and not ctrl+click
            ) {
                while (target !== this) {
                    if (target.href) {
                        removeActiveBlocksCls();
                        block.classList.add(blockActiveClass);
                        showIframe(target.href);
                    }
                    target = target.parentNode;
                }

                e.preventDefault();
            }
        };

        toggleEl.onclick = togglePosition;
    }

    function findAncestor(el, cls) {
        while ((el = el.parentElement) && !el.classList.contains(cls)) ;
        return el;
    }

    function renderAjaxRequests() {
        var requestCounter = document.getElementsByClassName('yii-debug-toolbar__ajax_counter');
        if (!requestCounter.length) {
            return;
        }
        var ajaxToolbarPanel = document.querySelector('.yii-debug-toolbar__ajax');
        var tbodies = document.getElementsByClassName('yii-debug-toolbar__ajax_requests');
        var state = 'ok';
        if (tbodies.length) {
            var tbody = tbodies[0];
            var rows = document.createDocumentFragment();
            if (requestStack.length) {
                var firstItem = requestStack.length > 20 ? requestStack.length - 20 : 0;
                for (var i = firstItem; i < requestStack.length; i++) {
                    var request = requestStack[i];
                    var row = document.createElement('tr');
                    rows.appendChild(row);

                    var methodCell = document.createElement('td');
                    methodCell.innerHTML = request.method;
                    row.appendChild(methodCell);

                    var statusCodeCell = document.createElement('td');
                    var statusCode = document.createElement('span');
                    if (request.statusCode < 300) {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_success');
                    } else if (request.statusCode < 400) {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_warning');
                    } else {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_error');
                    }
                    statusCode.textContent = request.statusCode || '-';
                    statusCodeCell.appendChild(statusCode);
                    row.appendChild(statusCodeCell);

                    var pathCell = document.createElement('td');
                    pathCell.className = 'yii-debug-toolbar__ajax_request_url';
                    pathCell.innerHTML = request.url;
                    pathCell.setAttribute('title', request.url);
                    row.appendChild(pathCell);

                    var durationCell = document.createElement('td');
                    durationCell.className = 'yii-debug-toolbar__ajax_request_duration';
                    if (request.duration) {
                        durationCell.innerText = request.duration + " ms";
                    } else {
                        durationCell.innerText = '-';
                    }
                    row.appendChild(durationCell);
                    row.appendChild(document.createTextNode(' '));

                    var profilerCell = document.createElement('td');
                    if (request.profilerUrl) {
                        var profilerLink = document.createElement('a');
                        profilerLink.setAttribute('href', request.profilerUrl);
                        profilerLink.innerText = request.profile;
                        profilerCell.appendChild(profilerLink);
                    } else {
                        profilerCell.innerText = 'n/a';
                    }
                    row.appendChild(profilerCell);

                    if (request.error) {
                        if (state !== "loading" && i > requestStack.length - 4) {
                            state = 'error';
                        }
                    } else if (request.loading) {
                        state = 'loading'
                    }
                    row.className = 'yii-debug-toolbar__ajax_request';
                }
                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }
                tbody.appendChild(rows);
            }
            ajaxToolbarPanel.style.display = 'block';
        }
        requestCounter[0].innerText = requestStack.length;
        var className = 'yii-debug-toolbar__label yii-debug-toolbar__ajax_counter';
        if (state === 'ok') {
            className += ' yii-debug-toolbar__label_success';
        } else if (state === 'error') {
            className += ' yii-debug-toolbar__label_error';
        }
        requestCounter[0].className = className;
    }

    /**
     * Should AJAX request to be logged in debug panel
     *
     * @param requestUrl
     * @returns {boolean}
     */
    function shouldTrackRequest(requestUrl) {
        if (!toolbarEl) {
            return false;
        }
        var a = document.createElement('a');
        a.href = requestUrl;
        var skipAjaxRequestUrls = JSON.parse(toolbarEl.getAttribute('data-skip-urls'));
        if (Array.isArray(skipAjaxRequestUrls) && skipAjaxRequestUrls.length && skipAjaxRequestUrls.includes(requestUrl)) {
            return false;
        }
        return a.host === location.host;
    }

    var proxied = XMLHttpRequest.prototype.open;

    XMLHttpRequest.prototype.open = function (method, url, async, user, pass) {
        var self = this;

        if (shouldTrackRequest(url)) {
            var stackElement = {
                loading: true,
                error: false,
                url: url,
                method: method,
                start: new Date()
            };
            requestStack.push(stackElement);
            this.addEventListener('readystatechange', function () {
                if (self.readyState === 4) {
                    stackElement.duration = self.getResponseHeader('X-Debug-Duration') || new Date() - stackElement.start;
                    stackElement.loading = false;
                    stackElement.statusCode = self.status;
                    stackElement.error = self.status < 200 || self.status >= 400;
                    stackElement.profile = self.getResponseHeader('X-Debug-Tag');
                    stackElement.profilerUrl = self.getResponseHeader('X-Debug-Link');
                    renderAjaxRequests();
                }
            }, false);
            renderAjaxRequests();
        }
        proxied.apply(this, Array.prototype.slice.call(arguments));
    };

    // catch fetch AJAX requests
    if (window.fetch) {
        var originalFetch = window.fetch;

        window.fetch = function (input, init) {
            var method;
            var url;
            if (typeof input === 'string') {
                method = (init && init.method) || 'GET';
                url = input;
            } else if (window.URL && input instanceof URL) { // fix https://github.com/yiisoft/yii2-debug/issues/296
                method = (init && init.method) || 'GET';
                url = input.href;
            } else if (window.Request && input instanceof Request) {
                method = input.method;
                url = input.url;
            }
            var promise = originalFetch(input, init);

            if (shouldTrackRequest(url)) {
                var stackElement = {
                    loading: true,
                    error: false,
                    url: url,
                    method: method,
                    start: new Date()
                };
                requestStack.push(stackElement);
                promise.then(function (response) {
                    stackElement.duration = response.headers.get('X-Debug-Duration') || new Date() - stackElement.start;
                    stackElement.loading = false;
                    stackElement.statusCode = response.status;
                    stackElement.error = response.status < 200 || response.status >= 400;
                    stackElement.profile = response.headers.get('X-Debug-Tag');
                    stackElement.profilerUrl = response.headers.get('X-Debug-Link');
                    renderAjaxRequests();

                    return response;
                }).catch(function (error) {
                    stackElement.loading = false;
                    stackElement.error = true;
                    renderAjaxRequests();

                    throw error;
                });
                renderAjaxRequests();
            }

            return promise;
        };
    }

})();
</script><script src="//code.jquery.com/jquery-3.7.1.min.js" integrity="sha384-1H217gwSVyLSIfaLxHbE7dRb3v4mYCKbpQvzx0cegeju1MVsGrX5xXxAvs/HgeFs" crossorigin="anonymous"></script>
<script src="/assets/11779477/yii.js"></script>
<script src="/assets/b0821e92/js/p2additions.js"></script>
<script src="/assets/8bb38f3d/js/sb-admin.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/simple-datatables@10.0.0/dist/umd/simple-datatables.min.js" integrity="sha256-XMVx+UH21h8TkoCUMPmVwxu0IxIlINjmJu7j/itA8jI=" crossorigin="anonymous"></script></body>
</html>
