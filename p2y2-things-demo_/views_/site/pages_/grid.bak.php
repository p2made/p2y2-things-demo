<?php
/**
 * grid.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
//use p2m\helpers\FA;
use rmrevin\yii\fontawesome\FA;

// load assets...

/* @var $this yii\web\View */

$this->title = 'Grid';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= Html::encode($this->title) ?></h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3>Grid options</h3>
						<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th></th>
										<th>
											Extra small devices
											<small>Phones (&lt;768px)</small>
										</th>
										<th>
											Small devices
											<small>Tablets (&ge;768px)</small>
										</th>
										<th>
											Medium devices
											<small>Desktops (&ge;992px)</small>
										</th>
										<th>
											Large devices
											<small>Desktops (&ge;1200px)</small>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Grid behavior</th>
										<td>Horizontal at all times</td>
										<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
									</tr>
									<tr>
										<th>Max container width</th>
										<td>None (auto)</td>
										<td>750px</td>
										<td>970px</td>
										<td>1170px</td>
									</tr>
									<tr>
										<th>Class prefix</th>
										<td>
											<code>.col-xs-</code>
										</td>
										<td>
											<code>.col-sm-</code>
										</td>
										<td>
											<code>.col-md-</code>
										</td>
										<td>
											<code>.col-lg-</code>
										</td>
									</tr>
									<tr>
										<th># of columns</th>
										<td colspan="4">12</td>
									</tr>
									<tr>
										<th>Max column width</th>
										<td class="text-muted">Auto</td>
										<td>60px</td>
										<td>78px</td>
										<td>95px</td>
									</tr>
									<tr>
										<th>Gutter width</th>
										<td colspan="4">30px (15px on each side of a column)</td>
									</tr>
									<tr>
										<th>Nestable</th>
										<td colspan="4">Yes</td>
									</tr>
									<tr>
										<th>Offsets</th>
										<td colspan="4">Yes</td>
									</tr>
									<tr>
										<th>Column ordering</th>
										<td colspan="4">Yes</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any
							<code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a
							<code>.col-lg-</code> class is not present.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3>Example: Stacked-to-horizontal</h3>
						<p>Using a single set of
							<code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any
							<code>.row</code>.</p>
						<div class="row show-grid">
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
							<div class="col-md-1">.col-md-1</div>
						</div>
						<div class="row show-grid">
							<div class="col-md-8">.col-md-8</div>
							<div class="col-md-4">.col-md-4</div>
						</div>
						<div class="row show-grid">
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4">.col-md-4</div>
						</div>
						<div class="row show-grid">
							<div class="col-md-6">.col-md-6</div>
							<div class="col-md-6">.col-md-6</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3>Example: Mobile and desktop</h3>
						<p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding
							<code>.col-xs-*</code>
							<code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
						<div class="row show-grid">
							<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
						</div>
						<div class="row show-grid">
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
						</div>
						<div class="row show-grid">
							<div class="col-xs-6">.col-xs-6</div>
							<div class="col-xs-6">.col-xs-6</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3>Example: Mobile, tablet, desktops</h3>
						<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet
							<code>.col-sm-*</code> classes.</p>
						<div class="row show-grid">
							<div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
							<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
						</div>
						<div class="row show-grid">
							<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
							<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
							<!-- Optional: clear the XS cols if their content doesn't match in height -->
							<div class="clearfix visible-xs"></div>
							<div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 id="grid-responsive-resets">Responsive column resets</h3>
						<p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a
							<code>.clearfix</code> and our <a href="#responsive-utilities">responsive utility classes</a>.</p>
						<div class="row show-grid">
							<div class="col-xs-6 col-sm-3">
								.col-xs-6 .col-sm-3
								<br>Resize your viewport or check it out on your phone for an example.
							</div>
							<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

							<!-- Add the extra clearfix for only the required viewport -->
							<div class="clearfix visible-xs"></div>

							<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
							<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 id="grid-offsetting">Offsetting columns</h3>
						<p>Move columns to the right using
							<code>.col-md-offset-*</code> classes. These classes increase the left margin of a column by
							<code>*</code> columns. For example,
							<code>.col-md-offset-4</code> moves
							<code>.col-md-4</code> over four columns.</p>
						<div class="row show-grid">
							<div class="col-md-4">.col-md-4</div>
							<div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
						</div>
						<div class="row show-grid">
							<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
							<div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
						</div>
						<div class="row show-grid">
							<div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 id="grid-nesting">Nesting columns</h3>
						<p>To nest your content with the default grid, add a new
							<code>.row</code> and set of
							<code>.col-md-*</code> columns within an existing
							<code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>
						<div class="row show-grid">
							<div class="col-md-9">
								Level 1: .col-md-9
								<div class="row show-grid">
									<div class="col-md-6">
										Level 2: .col-md-6
									</div>
									<div class="col-md-6">
										Level 2: .col-md-6
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 id="grid-column-ordering">Column ordering</h3>
						<p>Easily change the order of our built-in grid columns with
							<code>.col-md-push-*</code> and
							<code>.col-md-pull-*</code> modifier classes.</p>
						<div class="row show-grid">
							<div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
							<div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- /.body-content -->

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>
</div><!-- /#content-wrapper -->
