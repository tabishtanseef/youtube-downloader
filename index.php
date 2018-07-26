<?php require "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $config['site_title']; ?></title>
    <meta name="description" content="<?php echo $config['site_meta']; ?>">
    <meta name="keywords" content="<?php echo $config['site_meta']; ?>">
    <link rel="shortcut icon" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/slicknav.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
<div class="container">
<header>
			<div class="row">
				<div class="col-md-3 col-sm-3 logo">
				</div>
				<div class="col-md-9 col-sm-9 nav-wrapper">
				<nav>
			<ul class="sf-menu" id="menu"><li><a href="javascript:void(0);" data-target="#contact" id="contactus" data-toggle="modal">Contact Us</a></li></ul>
				</nav>
				</div>
			</div>
		</div>
	</header>
    <div class="noPadding center container-fluid">
      <div class="bg" style="min-height:550px;">
        <div class="topBannerHome">
          <div class="siteHeading">
          <h1 class="pageTitle"  >Free Online Video Downloader</h1>
          <h2 class="pageSubtitle"  >Download videos from YouTube for free!</h2>
        </div>
		
		<div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="#">
                    <p><input type="text" id="search" placeholder="Type something..." autocomplete="off" class="form-control" /></p>
                    <p><input type="submit" value="Search" class="form-control btn btn-primary w100"></p>
                </form>
                <div id="results">
				</div>
            </div>
        </div>
		
		
		
	
        </div>
      </div>
    </div>
<footer>
  <span class="copyright">Copyright © RDRINFOTECH<?php echo $config['site_title']; ?>. All Rights Reserved.</span>
</footer>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Full Name:
                                </label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email Address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Subject:
                                </label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Message:
                                </label>
                                <textarea class="form-control" rows="5" id="message"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                    	<div class="ajax-loadingc"><img src="img/loading.gif" alt="loading..."></div>
                        <button type="button" id="submit" class="btn btn-primary contactform">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
              </div>
       </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="app.js"></script>
        <script src="https://apis.google.com/js/client.js?onload=init"></script>
</body>
</html>
