<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "css/bootstrap.css"; ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "css/bootstrap-responsive.css"; ?>" />
		<title>Placements at DA-IICT</title>
		<style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }
	    </style>
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
		    	<div class="container">
		    		<div class="brand">
		    			<a href="<?php echo base_url(); ?>" style="text-decoration: none">Student Placement Cell</a>
		    		</div>
		        	<ul class="nav">
		        		<li class="divider-vertical"></li>
		        		<li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() . "AboutDAIICT"; ?>">About DA-IICT</a></li>
                                <li><a href="<?php echo base_url() . "AboutICT"; ?>">About ICT</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Academics <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() . "BTech"; ?>">B.Tech</a></li>
                                <li><a href="<?php echo base_url() . "MTech"; ?>">M.Tech</a></li>
                                <li><a href="<?php echo base_url() . "MScIT"; ?>">M.Sc. IT</a></li>
                                <li><a href="<?php echo base_url() . "MScITARD"; ?>">M.Sc. (ICT in ARD)</a></li>
                                <li><a href="<?php echo base_url() . "MDes"; ?>">M.Des</a></li>
                                <li class="dropdown-submenu"><a href="">Research</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() . "Research"; ?>">Research at DA-IICT</a></li>
                                        <li><a href="<?php echo base_url() . "ResearchProjects"; ?>">Research Projects</a></li>
                                        <li><a href="#">Paper and Publications</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Placements <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() . "PlacementPolicy"; ?>">Placement Policy</a></li>
                                <li><a href="<?php echo base_url() . "Demographics"; ?>">Demographics 2013</a></li>
                                <li><a href="#">Why Recruit at DA-IICT</a></li>
                                <li class="dropdown-submenu"><a href="#">Placement 2012-13</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Past Recuriters</a></li>
                                        <li><a href="#">Past Placement Stats</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Achivements</a></li>
                                <li><a href="<?php echo base_url() . "StudentResumes"; ?>">Resumes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Placement Cell</a></li>
                                <li><a href="#">Reach DA-IICT</a></li>
                                <li><a href="<?php echo base_url() . "CompanyRegister"; ?>">Looking for recruiting <em>DA-IICTians</em></a></li>                                
                            </ul>
                        </li>
					</ul>
                    <ul class="nav pull-right">
            			<li class="divider-vertical"></li>
            			<?php
                        if ($this -> session -> userdata("isLoggedIn")) {
                            if ($this -> session -> userdata('roleid') == 1) {echo "<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">" . $this -> session -> userdata("studentname") . " <b class=\"caret\"></b></a> <ul class=\"dropdown-menu\"> 
                                        <li><a href='" . base_url() . "Student'>Profile</a></li>
                                        <li><a href='" . base_url() . "Student/Logout'>Logout</a></li>                               
                                        </ul>";
                            } else if ($this -> session -> userdata('roleid') == 2) {echo "<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">" . $this -> session -> userdata("studentname") . " <b class=\"caret\"></b></a> <ul class=\"dropdown-menu\"> 
                                        <li><a href='" . base_url() . "Admin'>My Account</a></li>
                                        <li><a href='" . base_url() . "Admin/Logout'>Logout</a></li>                               
                                        </ul>";
                            }
                        } else {
                            echo "<li><a href='" . base_url() . "Login'>Login</a></li>";
                        }
                                ?>
          			</ul>
			   </div>
		   	</div>
		</div>
		<div class="container">
			<div class="hero-unit" style="background-color:#191919">
				<img src="<?php echo base_url() . "/img/daiictlogo2.png"; ?>" />
			</div>
        </div>
        <div class="container">
        	<div class="row">
	        	<div class="span12">
                	<h4>Company Registration For Placement Drive 2013-2014</h4>
            	</div>
            </div>
            <hr />
        	<form class="form-horizontal" action="<?php echo base_url() . "CompanyRegister/Registration"; ?>" method="post" enctype="multipart/form-data">
                        <div class="control-group">
                            <label class="control-label" for="companyName">Company Name: <span style="color:#C30">*</span></label>
                            <div class="controls">
									<input id="companyName" type="text" name="companyName" value="<?php echo set_value("companyName"); ?>" />
                                    <label style="color:#C30"><?php echo form_error('companyName'); ?></label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label  class="control-label" for="HRName">HR Name: <span style="color:#C30">*</span> </label>
                            <div class="controls">
                                <input type="text" id ="HRName" name="HRName" value="<?php echo set_value("HRName"); ?>"/>
                                <label style="color:#C30"><?php echo form_error('HRName'); ?></label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label  class="control-label" for="ContactNumber">Contact Number: <span style="color:#C30">*</span></label>
                            <div class="controls">
                                <input type="number" id ="ContactNumber" name="ContactNumber" value="<?php echo set_value("ContactNumber"); ?>"/>
                                <label style="color:#C30"><?php echo form_error('ContactNumber'); ?></label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="PostalAddress">Postal Address: </label>
                            <div class="controls">
                            	<textarea id="PostalAddress" name="PostalAddress"><?php echo set_value("PostalAddress"); ?></textarea>
                                <label style="color:#C30"><?php echo form_error('PostalAddress'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="Email">EMail Address: </label>
                            <div class="controls">
                            	<input type="email" id="Email" name="Email" value="<?php echo set_value("Email"); ?>" />
                                <label style="color:#C30"><?php echo form_error('Email'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="Website">Website:</label>
                            <div class="controls">
                            	<input type="url" id="Website" name="Website" value="<?php echo set_value("Website"); ?>" />
                                <label style="color:#C30"><?php echo form_error('Website'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="Eligibility">Eligibility Criteria:</label>
                            <div class="controls">
                            	<input type="text" id="Eligibility" name="Eligibility" value="<?php echo set_value("Eligibility"); ?>"/>
                                <label style="color:#C30"><?php echo form_error('Eligibility'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="CTC">CTC: <span style="color:#C30">*</span></label>
                            <div class="controls">
                                <input type="number" id="CTC" name="CTC" value="<?php echo set_value("CTC"); ?>"/>
                                <label style="color:#C30"><?php echo form_error('CTC'); ?></label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="Domain">Domain: <span style="color:#C30">*</span></label>
                            <div class="controls">
                                <select name="Domain">
                                    <option value="Other">Other</option>
                                    <option value="IT">IT</option>
                                    <option value="EC">EC</option>
                                    <option value="CT">CT</option>
                                    <option value="Consultancy">Consultancy</option>
                                </select>
                                <label style="color:#C30"><?php echo form_error('Domain'); ?></label>
                            </div>
                        </div>
                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary"/>
                        <label style="color:#C30"><?php echo $Message ?></label>
            </form>
            <hr />
        </div>
        <div class="container">
            <div class="row">
            	<div class="span6">
	            	&copy; 2013 Student Placement Cell
                </div>
                <div class="span6" style="text-align:right">
	            	Developed &amp; Maintained by <a href="https://www.facebook.com/sharadrsoni" target="_blank">Sharad Soni</a> and <a href="https://www.facebook.com/whizvids" target="_blank">Vidhan Agrawal</a>
                </div>
            </div>
	    </div>
		<script src="<?php echo base_url() . "/js/jquery.js"; ?>"></script>
		<script type="text/javascript" src="<?= base_url() . "js/bootstrap.min.js"; ?>"></script>
	</body>
</html>