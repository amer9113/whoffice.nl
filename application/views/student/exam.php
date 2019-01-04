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
				<form method="POST" class="manual_validation">
					<div class="panel panel-success">
						<div class="panel-heading"><h3 class="text-center"><?= $exam->exam_name; ?></h3></div>
						<div class="panel-body">
							<ul class="list-group">
							<?php foreach ($questions as $key => $question): ?>
								<li class="list-group-item"><h4><b><?= $question->question_no."- ".$question->question; ?></b></h4></li>
								<ul class="list-group">
									<?php foreach ($question->answers as $key => $answer): ?>
										<?php if ($already_have_answers == 0): ?>
											<li class="list-group-item"><?= $answer->answer_no.". "; ?> <input type="radio" name="<?= $question->id; ?>" value="<?= $answer->id; ?>" required> <?= $answer->answer; ?></li>
										<?php else: ?>
											<li class="list-group-item <?= $answer->is_correct == 1 ? 'list-group-item-success' : 'list-group-item-danger'; ?>"><?= $answer->answer_no.". "; ?> <input type="radio" name="<?= $question->id; ?>" value="<?= $answer->id; ?>" required <?= $question->student_answer_id == $answer->id ? "checked" : "" ?> disabled> <?= $answer->answer; ?></li>
										<?php endif ?>

									<?php endforeach ?>
								</ul>
							<?php endforeach ?>
							</ul>
						</div>
				  		<div class="panel-footer text-center">
				  			<a href="<?= base_url().'student'; ?>"><button type="button" class="btn btn-danger">Close</button></a>
				  		<?php if ($already_have_answers == 0): ?>
				  			<button type="submit" class="submit btn btn-primary">Submit Exam</button>
				  		<?php else: ?>
				  			<button type="submit" class="submit btn btn-primary" disabled>Submit Exam</button>
				  		<?php endif ?>
				  		</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>