<html>
<head>
        <?php
            $this->load->helper('html');
            $this->load->helper('url');
            $meta = array(
                array('name' => 'robots', 'content' => 'no-cache'),
                array('name' => 'description', 'content' => 'ستاوین'),
                array('name' => 'keywords', 'content' => 'معماری'),
                array('name' => 'robots', 'content' => 'no-cache'),
                array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
            );
            echo meta($meta);
                
        ?>
	<title>
        ستاوین شبکه معماری ایران
        </title>
     <script src=" <?php echo asset_url().'js/jquery-1.11.1.min.js' ?>" ></script>
     <link rel="stylesheet" href="<?php echo asset_url(); ?>css/admin.css" type="text/css" />
</head>
<body dir="rtl" >
	<h1>
                    ستاوین شبکه معماری ایران
        </h1>
    <hr>
