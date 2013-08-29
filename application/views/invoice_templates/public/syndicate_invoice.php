<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>FusionInvoice</title>

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/default/css/bootstrap.min.css">

        <style>
            #invoice-container {
                margin: auto;
                margin-top: 25px;
                width: 900px;
                padding: 20px;
                top:10px;
                background-color: white;
                box-shadow: 4px 4px 14px rgba(0, 0, 0, 0.8);
                overflow-y: hidden;
            }
            #menu-container {
                margin: auto;
                margin-top: 25px;
                width: 900px;
                top:10px;
                overflow-y: hidden;
            }
            .flash-message {
                font-size: 120%;
                font-weight: bold;
            }
            <?php $this->load->file(APPPATH.'/../syndicate_assets/invoice_styles.css') ?>
            body {
              background: #888;
            }
            body, p {
              font-size: 13px;
            }
        </style>

    </head>

    <body>

        <div id="menu-container">
            
            <a href="<?php echo site_url('guest/view/generate_invoice_pdf/' . $invoice_url_key); ?>" class="btn btn-primary"><i class="icon-white icon-print"></i> <?php echo lang('download_pdf'); ?></a> 
            <?php if ($this->mdl_settings->setting('merchant_enabled') == 1 and $invoice->invoice_balance > 0) { ?><a href="<?php echo site_url('guest/payment_handler/make_payment/' . $invoice_url_key); ?>" class="btn btn-success"><i class="icon-white icon-ok"></i> <?php echo lang('pay_now'); ?></a><?php } ?>
            
            <?php if ($flash_message) { ?>
            <div class="alert flash-message">
                <?php echo $flash_message; ?>
            </div>
            <?php } ?>
        </div>

        <div id="invoice-container">
          <?php $this->load->view('syndicate/invoice_content') ?>
        </div>

    </body>
</html>
