<html>
        <head>
                <title><?php echo $title; ?></title>
                
                <!-- Plugin CSS -->
                <link href="<?php echo base_url() . 'css/plugins/bootstrap-3.7.7.min.css'; ?>" rel="stylesheet">
                
                <!-- Custom CSS -->
                <link href="<?php echo base_url() . 'css/content/sticky-footer.css'; ?>" rel="stylesheet">
                <link href="<?php echo base_url() . 'css/content/style.css'; ?>" rel="stylesheet">

                <!-- Plugin JS -->
                <script src="<?php echo base_url() . 'js/plugins/jquery-3.3.1.min.js'; ?>"></script>
                <script src="<?php echo base_url() . 'js/plugins/bootstrap-3.7.7.min.js'; ?>"></script>

                <!-- Custom JS -->
        </head>
        <body>
                <nav class="navbar navbar-inverse">
                        <div class="container">
                                <div class="navbar-header">
                                        <a class="navbar-brand" href="<?php echo base_url(); ?>">CIAPP</a>
                                </div>
                                <div id="navbar" class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                                <li><a href="<?php echo base_url() . 'news'; ?>">News</a></li>                                                
                                        </ul>
                                        <ul class="nav navbar-nav pull-right">
                                                <?php                                                        
                                                        if(!isset($is_loggedin) || !$is_loggedin) {
                                                ?>
                                                        <li><a href="<?php echo base_url() . 'register'; ?>">Register</a></li>
                                                        <li><a href="<?php echo base_url() . 'login'; ?>">Login</a></li>
                                                <?php
                                                        }
                                                ?>
                                        </ul>
                                </div><!--/.nav-collapse -->
                        </div>
                </nav>
                <div class="container">                