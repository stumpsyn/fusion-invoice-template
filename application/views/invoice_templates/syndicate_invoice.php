<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/default/css/bootstrap.min.css">

        <style>
          <?php $this->load->file(APPPATH.'/../syndicate_assets/invoice_styles.css') ?>
        </style>
	</head>
	<body>
    <?php $this->load->view('syndicate/invoice_content') ?>
	</body>
</html>
