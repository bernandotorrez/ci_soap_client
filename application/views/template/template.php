<!DOCTYPE html>
<html>
<head>
  <title><?=WEB_TITLE;?></title>

  <!-- Meta tag -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="keywords" content="your web keyword">
  <meta name="description" content="your web description">
  <meta name="author" content="Bernand D H">
  <!-- Meta tag -->

  <!-- Place your css here -->
  <link href="<?=base_url('template/assets/css/vertical-nav.css');?>" rel="stylesheet" />
  <!-- Place your css here -->
</head>
<body>

    <!-- Tampilkan menu -->
    <?php echo $_menu;?>
    <!-- Tampilkan menu -->
  
    <!-- Tampilkan content web -->
    <?php echo $_content;?>
    <!-- Tampilkan menu -->
    
    <!-- Tampilkan footer -->
    <?php echo $_footer; ?>
    <!-- Tampilkan footer -->

    <!-- Place your js here -->
    <script src="<?=base_url('template/assets/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- Place your js here -->

</body>
</html>