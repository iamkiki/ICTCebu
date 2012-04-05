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
			  <li><a href="jobs.php">Jobs</a></li>
              <li><a href="about.php">About</a></li>
              <li class="active"><a href="contact.php">Contact</a></li>
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
            <ul class="nav nav-list">
              <li class="nav-header">Browse Categories</li>
              <li class="active"><a href="#">BPO/ Call Centers</a></li>
              <li><a href="#">Web/ Mobile Development</a></li>
              <li><a href="#">Software Applications</a></li>
              <li><a href="#">Hardware/ Peripherals</a></li>
			  <li><a href="#">Others</a></li>
			  
			  <li class="nav-header">Hot Jobs</li>
              <li><a href="#">Programmer</a></li>
              <li><a href="#">Web Developer</a></li>
              <li><a href="#">Technical Support</a></li>
              <li><a href="#">Data Encoder</a></li>
			  <li><a href="#">Programmer</a></li>
              <li><a href="#">Web Developer</a></li>
              <li><a href="#">Technical Support</a></li>
              <li><a href="#">Data Encoder</a></li>
			  <li><a href="#">Technical Support</a></li>
              <li><a href="#">Data Encoder</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span5">
			<legend>Register Company for Free</legend>
			<form class="form-horizontal">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="input01">Company Name</label>
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
					<label class="control-label" for="input02">Password</label>
					<div class="controls">
					  <input type="password" class="input-medium" id="input02">
					  <p class="help-block">Must be atleast 6 characters</p>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="input02">Confirm Password</label>
					<div class="controls">
					  <input type="password" class="input-medium" id="input02">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="input02">Contact Person</label>
					<div class="controls">
					  <input type="text" class="input-xlarge" id="input02">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="input02">Contact Number</label>
					<div class="controls">
					  <input type="text" class="input-medium" id="input02">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="input02">Address</label>
					<div class="controls">
					  <input type="text" class="input-xlarge" id="input02">
					  <p></p>
					  <input type="text" class="input-xlarge" id="input02">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="input02">City</label>
					<div class="controls">
					  <input type="text" class="input-medium" id="input02">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="input02">Zip Code</label>
					<div class="controls">
					  <input type="text" class="input-small" id="input02">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="select01">Category</label>
					<div class="controls">
					  <select id="select01">
						<option>BPO/ Call Centers</option>
						<option>Web/ Mobile Development</option>
						<option>Software Applications</option>
						<option>Hardware/ Peripherals</option>
						<option>Others</option>
					  </select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="fileInput">Company Logo</label>
					<div class="controls">
					  <input class="input-file" id="fileInput" type="file">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="textarea">Description/ Services</label>
					<div class="controls">
					  <textarea class="input-xlarge" id="textarea" rows="5"></textarea>
					</div>
				  </div>
				  <div class="control-group">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox" value="option1">
						I Agree with the Terms and Agreements of ICTCebu.com <a href="#">Privacy Policy</a>
					  </label>
				  </div>
				  <div class="form-actions">
					<button type="submit" class="btn btn-danger">Submit</button>
					<button class="btn">Cancel</button>
				  </div>
				</fieldset>
			  </form>
		</div><!--/span-->
		<div class="span4">
            <form class="well form-horizontal">
				  <div class="n-legend">Have an account? Login</div>
				  <input type="text" class="input-xlarge" placeholder="Email">
				  <p></p>
				  <input type="password" class="input-xlarge" placeholder="Password">
				  <p></p>
				  <label class="checkbox">
					<input type="checkbox"> Remember me
				  </label>
				  <button type="submit" class="btn btn-danger">Login</button>
			</form>
			<blockquote>
			  <p>Cupcake ipsum dolor sit amet lemon drops. Marzipan topping topping. Muffin tootsie roll sweet wafer wafer danish jelly beans. Halvah I love candy I love tart oat cake ice cream macaroon. Sesame snaps gummi bears tart. Chocolate cake ice cream dessert chocolate cake cake bonbon topping gingerbread. Jelly-o fruitcake gingerbread chocolate apple pie I love ice cream applicake. Lemon drops icing I love I love liquorice danish pastry. Brownie caramels caramels I love dessert lemon drops powder. I love pudding oat cake sweet roll.</p>
			  <small>Someone famous</small>
			</blockquote>
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
