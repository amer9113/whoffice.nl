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
				<div class="panel panel-primary">
					<div class="panel-heading"><h3 class="text-center">Exams</h3></div>
					<div class="panel-body">
						<ul class="list-group">
						<?php foreach ($exams as $key => $exam): ?>
							<li class="list-group-item"><a href="<?= base_url().'student/exam/'.$exam->id; ?>"><?= ($key+1)."- ".$exam->exam_name; ?></a></li>
						<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>