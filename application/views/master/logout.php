<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />    
             <!-- Start CSS and JavaScript Link Section  -->
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
            <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" />
            <script src="<?php echo base_url('assets/js/jquery-1.9.1.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <!-- End of CSS and JavaScript Link Section -->
        <title>
          LMS Administrator Page
        </title>
            <style>
                html,body{margin: 0; padding: 0;}
                div.container-fluid{
                    background-color:#45AB5C;
                }
				/*
                ul#nav1>li>a,ul#nav2>li>a
                {
                    color: #FFF;
                }
                ul#nav1>li>a:focus,ul#nav2>li>a:focus{
                 color: #036;   
                }
                @media (max-width:1024px){
                    ul#nav1{
                        background: #EEF !important;
                    }
                    ul#nav1>li>a{
                        color: #036;
                    }
                    ul#nav1>li>a:hover,ul#nav1>li>a:focus{
                        color: #FFF;
                    }
                }
				*/
				 ul#nav1>li>a,ul#nav2>li>a
                {
                    color: #EEF;
                }
                ul#nav1>li>a:hover,ul#nav2>li>a:hover
                {
                    background: #428bca;
                }
                ul#nav1>li>a:focus,ul#nav2>li>a:focus{
                 color: #FFF;   
                 background: #428bca;
                }
                ul.sub-menu li a:hover{
                    background: #afd9ee;
                }
                ul#partners li a{
                    display: inline-block !important;
                    height: 120px; 
                    vertical-align: middle !important;
                    line-height:120px;
                }
                @media (max-width:1024px){
                    ul#nav1,ul#nav2{
                        background: #EEF !important;
                    }
                    ul#nav1>li>a,ul#nav2>li>a{
                        color: #036;
                    }
                    ul#nav1>li>a:hover,ul#nav1>li>a:focus,ul#nav2>li>a:hover,ul#nav2>li>a:focus{
                        color: #FFF;
                    }
					ul#nav2{
						margin-top: -8px;
					}
					ul#nav2>li:last-child
					{
						background: red;
						margin-bottom
					}
                }
				@media (max-width:1024px){
					.navbar-toggle{
						display: inline-block;
					}
				}
				
				
            </style>
    </head>
    <body>
       <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="<?php echo base_url('admin'); ?>" style="color:#FFF">Admin</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="nav1">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-home"></i> Home<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url("welcome");?>">&raquo; Welcome</a></li>
                            <li><a href="<?php echo base_url("news");?>">&raquo; News</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="<?php echo base_url('menu'); ?>"><i class="glyphicon glyphicon-list"></i> Menu</a></li>-->
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-file"></i> Clients <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                          <li><a href="<?php echo base_url("about");?>">&raquo; About Us</a></li>
                          <li><a href="<?php echo base_url('ContactUs/viewcontact'); ?>">&raquo; Contact Us</a></li>
                          <li><a href="<?php echo base_url('career'); ?>">&raquo; Career</a></li>
                          <li><a href="<?php echo base_url("partner");?>">&raquo; Partners</a></li>
                          <li><a href="<?php echo base_url("customer");?>">&raquo; Customers</a></li>
                          <li><a href="<?php echo base_url("footer");?>">&raquo; Footer</a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th"></i> Services <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url('ItSolution/getsolution'); ?>">&raquo; IT Solutions</a></li>
                          <li><a href="<?php echo base_url('Description/getitdesc'); ?>">&raquo; IT Solutions Desc</a></li>
                          <li><a href="<?php echo base_url('ItSolution/getlicense'); ?>">&raquo; License</a></li>
                          <li><a href="<?php echo base_url('license'); ?>">&raquo; License Logo</a></li>
                          <li><a href="<?php echo base_url('software/listsoftware'); ?>">&raquo; Software Dev</a></li>
                          <li><a href="<?php echo base_url('Description/getsoftwaredesc'); ?>">&raquo; Software Dev Desc</a></li>
                          <li><a href="<?php echo base_url('training/trainingList'); ?>">&raquo; IT Training</a></li>
                          <li><a href="<?php echo base_url('training/centerlist'); ?>">&raquo; Test Center</a></li>
                          <li><a href="<?php echo base_url('training/slidelist'); ?>">&raquo; Training Slide</a></li>
                          
                          <li><a href="<?php echo base_url('MobileSite/service') ?>">&raquo; Mobile Site</a></li>
                          <li><a href="<?php echo base_url('MobileSite/slide') ?>">&raquo; Mobile Slider</a></li>
                      </ul>
                  </li>
                  <!--<li><a href="<?php echo base_url('page'); ?>"><i class="glyphicon glyphicon-file"></i> Other Pages</a></li>-->
                  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th"></i> Users <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('ItSolution/getsolution'); ?>">&raquo; IT Solutions</a></li>
							<li><a href="<?php echo base_url('Description/getitdesc'); ?>">&raquo; IT Solutions Desc</a></li>
							<li><a href="<?php echo base_url('ItSolution/getlicense'); ?>">&raquo; License</a></li>
							<li><a href="<?php echo base_url('license'); ?>">&raquo; License Logo</a></li>
						</ul>
				  </li>
                  <!--<li><a href="<?php echo base_url('media'); ?>"><i class="glyphicon glyphicon-file"></i> Media</a></li>-->
                </ul>
               <!-- right menu bar for user profile -->
                <ul class="nav navbar-nav navbar-right" id="nav2">
                 
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('user/newuser'); ?>">&raquo; New User</a></li>
                        <li><a href="<?php echo base_url('email'); ?>">&raquo; Email Settings</a></li>
                      <li><a href="<?php echo base_url('user/changepassword'); ?>">&raquo; Change Password</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="logout">&raquo; Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    
        <div class="container" style="margin-top: 27px; margin-bottom: 36px;"></div>
            