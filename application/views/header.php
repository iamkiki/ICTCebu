<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ICTCebu IT, BPO and Call Center Companies and Jobs Directory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/"><span class="red"><strong>ICTCebu</strong></span><span class="gray">.com</span></a>
          <div class="nav-collapse">
            <ul class="nav">
              <?php $s_uri = $this->uri->segment(1); ?>
              <li <?php echo $s_uri == '' ? 'class="active"': ''; ?>><a href="/">Home</a></li>
              <li <?php echo $s_uri == 'companies' ? 'class="active"': ''; ?>><a href="/companies">Companies</a></li>
              <li <?php echo $s_uri == 'jobs' ? 'class="active"': ''; ?>><a href="/jobs">Jobs</a></li>
              <li <?php echo $s_uri == 'about' ? 'class="active"': ''; ?>><a href="/about">About</a></li>
              <li <?php echo $s_uri == 'contact' ? 'class="active"': ''; ?>><a href="/contact">Contact</a></li>
            </ul>
			<form class="navbar-search pull-left">
			  <input type="text" class="search-query" placeholder="Search">
			</form>
                        <?php if(!$this->session->userdata('auth')){ ?>
			<p class="navbar-text pull-right"><a href="/access">Register Company</a> | <a href="/access">Login</a></p>
                        <?php } else { $a_user = $this->session->userdata('auth'); ?>
                        <ul class="nav pull-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <span class="red"><?php echo $a_user->name; ?></span><b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="/companies/profile"><i class="icon-eye-open"></i>View Profile</a></li>
					<li><a href="/"><i class="icon-home"></i>Go to Dashboard</a></li>
                                        <li><a href="/account"><i class="icon-user"></i>Account Settings</a></li>
					<li><a href="/post"><i class="icon-plus"></i>Post Job</a></li>
                                        <li class="divider"></li>
					<li><a href="/logout"><i class="icon-off"></i>Log out</a></li>
				  </ul>
				</li>
			</ul>
                        <?php } ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="container">