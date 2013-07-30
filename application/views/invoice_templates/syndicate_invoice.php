<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/default/css/bootstrap.min.css">

        <style>
            * {
                margin:0px;
            }
            body, p {
                color: #000 !important;
                font-size: 11px;
            }
            table {
                width:100%;
            }
            tr.highlight {
              background: rgb(240, 240, 240);
              border: 1px solid rgb(220,220,220);
            }
            #header {
                margin-bottom: 2em;
            }
            #logo {
                float: right;
            }
            #header table {
                width:100%;
                padding: 0px;
            }
            #header table td, .amount-summary td {
                vertical-align: text-top;
                padding: 5px;
            }
            #invoice-to td {
                text-align: left
            }
            #invoice-to {
                margin-bottom: 15px;
            }
            #invoice-to-right-table td,
            #invoice-to-right-table th {
                padding: .25em .5em;
                text-align: right;
                font-weight: normal;
            }
            #invoice-to-right-table th {
                padding-right: 3em
            }
            .seperator {
                height: 25px
            }
            .top-border {
                border-top: none;
            }
            .no-bottom-border {
                border:none !important;
                background-color: white !important;
            }
            th {
              text-align: left;
            }
        </style>

	</head>
	<body>
    <?php $this->load->view('syndicate/invoice_content') ?>
	</body>
</html>
