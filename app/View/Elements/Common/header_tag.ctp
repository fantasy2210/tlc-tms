<title><?php echo Configure::read('System.name') ?></title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="<?php echo Configure::read('System.name') ?>" content="">    
        <link rel="shortcut icon" href="favicon.ico">  
        <?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'); ?>
        <!-- Global CSS -->
        <?php echo $this->Html->css('/user/plugins/bootstrap/css/bootstrap.min') ?>
        <!-- Plugins CSS -->    
        <?php echo $this->Html->css('/user/plugins/font-awesome/css/font-awesome') ?>
        <?php echo $this->Html->css('/user/plugins/flexslider/flexslider') ?>
        <?php echo $this->Html->css('/user/plugins/pretty-photo/css/prettyPhoto') ?>
        <?php echo $this->Html->css('/user/plugins/bootstrap/css/bootstrap.min') ?>
        <!-- Theme CSS -->  
        <?php echo $this->Html->css('/user/css/styles') ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->