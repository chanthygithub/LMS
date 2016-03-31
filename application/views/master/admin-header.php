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
			<link rel="icon" href="<?php echo base_url('assets/images/favicon.png');?>" type="image/png">
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
                  <a class="navbar-brand" href="<?php echo base_url('adminhome'); ?>" style="color:#FFF">អ្នកគ្រប់គ្រង</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="nav1">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-home"></i>គេហទំព័រ<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url("welcome");?>">ស្វាគមន៏</a></li>
                            <li><a href="<?php echo base_url("news");?>">ពត៏មាន</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="<?php echo base_url('menu'); ?>"><i class="glyphicon glyphicon-list"></i> Menu</a></li>-->
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-file"></i> អតិថិជន <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                          <li><a href="<?php echo base_url('clients');?>">បញ្ជីអតិថិជន</a></li>
                          <li><a href="<?php echo base_url('ContactUs/viewcontact'); ?>">ឯកសារអតិថិជន</a></li>
                          <li><a href="<?php echo base_url('career'); ?>">ពត៏មានអតិថិជន </a></li>
                        </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th"></i> សេវាកម្ម <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url('ItSolution/getsolution'); ?>">ប្រាក់កំម្ចីឯកតបុគ្គល</a></li>
                          <li><a href="<?php echo base_url('Description/getitdesc'); ?>">ប្រាក់កំម្ចីជាក្រុម</a></li>
                          <li><a href="<?php echo base_url('ItSolution/getlicense'); ?>">ប្រាក់កំម្ចីសំរាប់ការសិក្សា</a></li>
                          <li><a href="<?php echo base_url('license'); ?>">ប្រាក់កំម្ចីសំរាប់បុគ្គលិក</a></li>
        
                      </ul>
                  </li>
                  <!--<li><a href="<?php echo base_url('page'); ?>"><i class="glyphicon glyphicon-file"></i> Other Pages</a></li>-->
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th"></i> របាយការណ៍ <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url('ItSolution/getsolution'); ?>">របាយការណ៍ប្រចំាខែ</a></li>
                          <li><a href="<?php echo base_url('Description/getitdesc'); ?>">របាយការណ៍ប្រចំាឆ្នំា</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th"></i> ការទូទាត់ប្រាក់ <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url('ItSolution/getsolution'); ?>">ការទូទាត់ប្រាក់ប្រចំាថ្ងៃ</a></li>
                          <li><a href="<?php echo base_url('Description/getitdesc'); ?>">ការទូទាត់ប្រាក់ប្រចំាសប្តាហ៍</a></li>
                          <li><a href="<?php echo base_url('reports'); ?>">ការទូទាត់ប្រាក់ប្រចំាខែ</a></li>
                      </ul>
                  </li>
                  
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-th"></i> ដែគូ<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url('partners'); ?>">បង្កើតដែគូ</a></li>
                          <li><a href="<?php echo base_url('partners/getPartnersCon'); ?>">បញ្ជីដែគូ</a></li>
                          <li><a href="<?php echo base_url('capitals/getPartnersCapitalCon'); ?>">បញ្ជីំមូលធន</a></li>
                          <li><a href="<?php echo base_url('capitals'); ?>">បង្កើតមូលធន</a></li>
                      </ul>
                  </li>
                  
                  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i>អ្នកប្រើ<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('users'); ?>">ចំនួនអ្នកប្រើ</a></li>
						</ul>
				  </li>
                  <!--<li><a href="<?php echo base_url('media'); ?>"><i class="glyphicon glyphicon-file"></i> Media</a></li>-->
                </ul>
               <!-- right menu bar for user profile -->
                <ul class="nav navbar-nav navbar-right" id="nav2">
                 
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> ពត៏មានអំពីអ្នកប្រើ <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('user/newuser'); ?>">បង្កើតអ្នកប្រើថ្មី</a></li>
                        <li><a href="<?php echo base_url('email'); ?>">ការកំណត់ អ៊ិម៉ែល</a></li>
                      <li><a href="<?php echo base_url('user/changepassword'); ?>">ប្តូរលេខសំងាត់</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="<?php echo base_url('admin/logout');?>">​ចាកចេញ</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    
        <div class="container" style="margin-top: 27px; margin-bottom: 36px;"></div>
        
            