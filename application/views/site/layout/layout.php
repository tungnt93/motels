<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('site/layout/head');?>
</head>
<body>
	<?php $this->load->view('site/layout/header');?>
	<div class="container" id="main-content">
		<div class="row">
			<div class="col-md-3"><?php $this->load->view('site/layout/left');?></div>
			<div class="col-md-9"><?php $this->load->view($temp);?></div>
		</div>
	</div>
	<?php $this->load->view('site/layout/footer');?>
	<div id="back_to_top"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></div>
</body>
</html>