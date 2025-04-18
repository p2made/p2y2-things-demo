<?php
/**
 * forms.php
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

$this->title = 'Forms';
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
						<div class="panel-heading">
							Basic Form Elements
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-6">
									<form role="form">
										<div class="form-group">
											<label>Text Input</label>
											<input class="form-control">
											<p class="help-block">Example block-level help text here.</p>
										</div>
										<div class="form-group">
											<label>Text Input with Placeholder</label>
											<input class="form-control" placeholder="Enter text">
										</div>
										<div class="form-group">
											<label>Static Control</label>
											<p class="form-control-static">email@example.com</p>
										</div>
										<div class="form-group">
											<label>File input</label>
											<input type="file">
										</div>
										<div class="form-group">
											<label>Text area</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label>Checkboxes</label>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">Checkbox 1
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">Checkbox 2
												</label>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="">Checkbox 3
												</label>
											</div>
										</div>
										<div class="form-group">
											<label>Inline Checkboxes</label>
											<label class="checkbox-inline">
												<input type="checkbox">1
											</label>
											<label class="checkbox-inline">
												<input type="checkbox">2
											</label>
											<label class="checkbox-inline">
												<input type="checkbox">3
											</label>
										</div>
										<div class="form-group">
											<label>Radio Buttons</label>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
												</label>
											</div>
										</div>
										<div class="form-group">
											<label>Inline Radio Buttons</label>
											<label class="radio-inline">
												<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
											</label>
											<label class="radio-inline">
												<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
											</label>
											<label class="radio-inline">
												<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
											</label>
										</div>
										<div class="form-group">
											<label>Selects</label>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										<div class="form-group">
											<label>Multiple Selects</label>
											<select multiple class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
											</select>
										</div>
										<button type="submit" class="btn btn-default">Submit Button</button>
										<button type="reset" class="btn btn-default">Reset Button</button>
									</form>
								</div>
								<div class="col-lg-6">
									<h1>Disabled Form States</h1>
									<form role="form">
										<fieldset disabled>
											<div class="form-group">
												<label for="disabledSelect">Disabled input</label>
												<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
											</div>
											<div class="form-group">
												<label for="disabledSelect">Disabled select menu</label>
												<select id="disabledSelect" class="form-control">
													<option>Disabled select</option>
												</select>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox">Disabled Checkbox
												</label>
											</div>
											<button type="submit" class="btn btn-primary">Disabled Button</button>
										</fieldset>
									</form>
									<h1>Form Validation States</h1>
									<form role="form">
										<div class="form-group has-success">
											<label class="control-label" for="inputSuccess">Input with success</label>
											<input type="text" class="form-control" id="inputSuccess">
										</div>
										<div class="form-group has-warning">
											<label class="control-label" for="inputWarning">Input with warning</label>
											<input type="text" class="form-control" id="inputWarning">
										</div>
										<div class="form-group has-error">
											<label class="control-label" for="inputError">Input with error</label>
											<input type="text" class="form-control" id="inputError">
										</div>
									</form>
									<h1>Input Groups</h1>
									<form role="form">
										<div class="form-group input-group">
											<span class="input-group-addon">@</span>
											<input type="text" class="form-control" placeholder="Username">
										</div>
										<div class="form-group input-group">
											<input type="text" class="form-control">
											<span class="input-group-addon">.00</span>
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="fa fa-eur"></i>
											</span>
											<input type="text" class="form-control" placeholder="Font Awesome Icon">
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon">$</span>
											<input type="text" class="form-control">
											<span class="input-group-addon">.00</span>
										</div>
										<div class="form-group input-group">
											<input type="text" class="form-control">
											<span class="input-group-btn">
												<button class="btn btn-default" type="button"><i class="fa fa-search"></i>
												</button>
											</span>
										</div>
									</form>
								</div>
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
