<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ICTCebu IT-BPO Company and Jobs Directory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
	  .gray {
		color: gray;
	  }
	  .red {
		color: #DA4F49;
	  }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><span class="red"><strong>ICTCebu</strong></span><span class="gray">.com</span></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
			  <li><a href="companies.php">Companies</a></li>
			  <li class="active"><a href="jobs.php">Jobs</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
			<form class="navbar-search pull-left">
			  <input type="text" class="search-query" placeholder="Search">
			</form>
			<p class="navbar-text pull-right"><a href="access.php">Register Company</a> | <a href="access.php">Login</a></p>
            <!--<p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
		<div class="span3">
          <div class="well sidebar-nav">
			  <a href="#" class="thumbnail">
				<img src="http://placehold.it/260x180" alt="">
			  </a>
			  <p></p>
			  <ul class="nav nav-list social-links">
				<a href="company.php"><button class="btn btn-danger">View Company Profile</button></a>
				<p></p>
				  <address>
					<strong>Company, Inc.</strong><br>
					123 Some Ave, Suite 6457<br>
					Lahug, Ceby City, 6000<br>
					<a href="#">www.company.com</a></br>
				  </address>
				  <li class="nav-header">Related Job Listings</li>
				  <li><a href="job.php">Programmer</a></li>
				  <li><a href="job.php">Web Developer</a></li>
				  <li><a href="job.php">Technical Support</a></li>
				  <li><a href="job.php">Data Encoder</a></li>
				  <li><a href="job.php">Programmer</a></li>
				  <li><a href="job.php">Web Developer</a></li>
				  <li><a href="job.php">Technical Support</a></li>
				  <li><a href="job.php">Data Encoder</a></li>
				  <li><a href="job.php">Technical Support</a></li>
				  <li><a href="job.php">Data Encoder</a></li>
			 </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span6">
			<legend>Job Position <span class="badge badge-error">2yrs</span></legend>
			<blockquote>
			  <p>Job objectives here.</p>
			  <p>Chocolate cake pudding faworki gummi bears applicake pie croissant. Gummies lemon drops sweet roll sweet roll bear claw carrot cake marzipan chupa chups. Cheesecake applicake tart carrot cake.</p>
			</blockquote>
			<dl class="dl-horizontal">
				<dt>Expiration</dt>
					<dd>Accepting applications until April 22, 2012, Sunday</dd>
				<dt>Category</dt>
					<dd>BPO/ Call Centers</dd>
				<dt>Requirements</dt>
					<dd><p></p></dd>
					<dd><i class="icon-ok-sign p-right5"></i>Donec id elit non mi porta gravida at eget metus.</dd>
					<dd><i class="icon-ok-sign p-right5"></i>Donec id elit non mi porta gravida at eget metus.</dd>
					<dd><i class="icon-ok-sign p-right5"></i>Donec id elit non mi porta gravida at eget metus.</dd>
					<dd><i class="icon-ok-sign p-right5"></i>Donec id elit non mi porta gravida at eget metus.</dd>
					<dd><i class="icon-ok-sign p-right5"></i>Donec id elit non mi porta gravida at eget metus.</dd>
			</dl>
			<legend>Apply for this Job</legend>
			<form class="form-horizontal">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="input01">Name</label>
					<div class="controls">
					  <input type="text" class="input-xlarge" id="input01">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="input02">Email Address</label>
					<div class="controls">
					  <input type="text" class="input-xlarge" id="input02">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="textarea">Cover Letter</label>
					<div class="controls">
					  <textarea class="input-xlarge" id="textarea" rows="8"></textarea>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="fileInput">Attach Resume</label>
					<div class="controls">
					  <input class="input-file" id="fileInput" type="file">
					</div>
				  </div>
				  <div class="form-actions">
					<button type="submit" class="btn btn-danger">Submit</button>
					<button class="btn">Cancel</button>
				  </div>
				</fieldset>
			</form>
		</div><!--/span-->
		<div class="span3">
            <legend>Ad Banner?</legend>	
			<a href="#" class="thumbnail">
				<img src="/img/long-ad.png" alt="">
			</a>
        </div><!--/span-->
      </div><!--/row-->
      <hr>

      <footer>
        <p>&#169; <?php echo date('Y', time()); ?> ictcebu.com | Email us at <a href="/contact">info@ictcebu.com</a></p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
