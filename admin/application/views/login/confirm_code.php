<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Panel administracyjny - PWSZ Legnica</title>

    <link href="<?php echo base_url(); ?>assets/login/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/login/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/bracket.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">
  </head>
  <body>
    <form method="post" action="<?php echo base_url('home/confirm_code'); ?>" class="d-flex align-items-center justify-content-center bg-gray-900 ht-100v">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> PWSZ <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">Panel administracyjny dla Perfekcjonisty</div>

        <?php if(isset($_SESSION['flashdata'])): ?>
        <p><?php echo $_SESSION['flashdata']; ?></p>
        <?php endif; ?>

        <div class="form-group">
        	<label>Kod weryfikacyjny:</label>
          <input id="codeMask" type="text" class="form-control" name="code" placeholder="___ ___ ___" required>
        </div>
        <button type="submit" class="btn btn-info btn-block">Potwierdź</button>
      </div>
    </form>

    <script src="<?php echo base_url(); ?>assets/login/lib/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/lib/popper.js/popper.js"></script>
    <script src="<?php echo base_url(); ?>assets/login/lib/bootstrap/bootstrap.js"></script>    
    <script src="<?php echo base_url(); ?>assets/login/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script type="text/javascript">
        $('#codeMask').mask('999999999');
    </script>
    
  </body>
</html>
