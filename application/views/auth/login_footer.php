<div class="copyright">
	<p>&copy; <?php echo date('Y'); ?> <?php echo lang('site_name'); ?> | Terms and Conditions Apply</p>
  	<p>Phone: (+234) 704 238 3761 - Fax: (+234) 704 238 3761 - Email: info@carboncreditnetwork.org</p>
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/plugins/typed/js/typed.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/scripts/app.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/scripts/login.js" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
	jQuery(document).ready(function() {     
		//App.init();
		Login.init();
		$(function(){
			$("#scroller").typed({
			    strings: ["Kenny", "Loves", "Yemi CCN"],
		        typeSpeed: 30, // typing speed
		        backDelay: 500, // pause before backspacing
		        loop: true, // loop on or off (true or false)
				loopCount: false, // number of loops, false = infinite
		        callback: function(){ } // call function after typing is done
			});
  		});
	});
</script>
<!-- END JAVASCRIPTS -->