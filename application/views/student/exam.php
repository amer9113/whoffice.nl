<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-success">
					<div class="panel-heading"><h3 class="text-center"><?= $exam->exam_name; ?></h3></div>
					<div class="panel-body">
						<form>
							<ul class="list-group">
							<?php foreach ($questions as $key => $question): ?>
								<li class="list-group-item"><h4><b><?= $question->question_no."- ".$question->question; ?></b></h4></li>
								<ul class="list-group">
									<?php foreach ($question->answers as $key => $answer): ?>
										<li class="list-group-item"><?= $answer->answer_no.". "; ?> <input type="radio" name="question_<?= $question->id; ?>" value="<?= $answer->id; ?>"> <?= $answer->answer; ?></li>
									<?php endforeach ?>
								</ul>
							<?php endforeach ?>
							</ul>
						</form>
					</div>
				  	<div class="panel-footer text-center"><a href="#" class="btn btn-primary">Submit Exam</a></div>
				</div>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>