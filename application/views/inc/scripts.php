<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>js/script.js"></script>
<script type="text/javascript">
	signed_in = "<?= $this->session->userdata('signed_in'); ?>";
	acc_type = "<?= $this->session->userdata('acc_type'); ?>";
	acc_id = "<?= $this->session->userdata('acc_id'); ?>";
	base_url = "<?= base_url(); ?>";
	if (signed_in != "" && signed_in == 1 && acc_type != "") {
		setInterval(function(){$.getJSON(base_url+acc_type+'/authenticate',null,function(data){});}, 5000);
	
		/*var source = new EventSource(base_url+acc_type+'/wleknfwlnwiecnacwbeicubal');
		source.onmessage = function(event) {
		  	$.getJSON(base_url+acc_type+'/authenticate',null,function(data){});
		};*/
	}
</script>