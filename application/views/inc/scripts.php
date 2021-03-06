<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?= base_url(); ?>js/moment.js"></script>
<script src="<?= base_url(); ?>js/bootstrap-datetimepicker.min.js"></script>
<script src="<?= base_url(); ?>js/script.js?<?= time(); ?>"></script>
<script type="text/javascript">
	base_url = "<?= base_url(); ?>";
</script>
<?php if ($this->session->userdata('student_signed_in') == 'true'): ?>
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){$.getJSON("<?= base_url().'student/authenticate'; ?>",null,function(data){});}, 5000);
	});
</script>
<?php endif ?>
<?php if ($this->session->userdata('teacher_signed_in') == 'true'): ?>
<script src="<?= base_url(); ?>js/admin_script.js?<?= time(); ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){$.getJSON("<?= base_url().'admin/authenticate'; ?>",null,function(data){});}, 5000);
	});
</script>
<?php endif ?>