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
                            echo "<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">" . $this -> session -> userdata("studentname") . " <b class=\"caret\"></b></a> <ul class=\"dropdown-menu\"> 
                    					<li><a href='" . base_url() . "Admin'>My Account</a></li>
			                            <li><a href='" . base_url() . "Admin/Logout'>Logout</a></li>                               
			                        	</ul>";
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
			<div class="tabbable">
                    <ul id="myTab" class="nav nav-tabs nav-pills">
                    	<li class="active"><a  href="<?php echo base_url() . "Admin"; ?>">Students</a></li>
                    	<!--<li class=""><a href="<?php echo base_url() . "Register"; ?>">Events</a></li>-->
                    </ul>
                    <div id="myTabContent" class="tab-content">
                    </div>
     	 </div>
        </div>
        <div class="container">
        	<div class="row">
	        	<div class="span12">
                	<label style = "font-size:20px;"><strong>Edit Profile: </strong>&nbsp; <?php echo $firstname; ?>&nbsp; <?php echo $middlename; ?>&nbsp; <?php echo $lastname; ?></label><br/>
            	</div>
            </div>
        	<form class="form-horizontal" action="<?php echo base_url() ."Admin/UpdateStudent/". $SID  ?>" method="POST" enctype="multipart/form-data">
            	<fieldset>
                	<legend>User Details</legend>
                        <div class="control-group">
                            <label class="control-label" for="Username">Username:</label>
                            <div class="controls">
                            	<div class="input-append">
									<input id="Username" type="text" name="username" disabled="disabled" value="<?php echo set_value("username", $username); ?>" />
									<span class="add-on">@daiict.ac.in</span>
                                    <label style="color:#C30"><?php echo form_error('username'); ?><?php if (isset($studentid)) echo $studentid ?></label>
								</div>
                            </div>
                        </div>
                     
                </fieldset>
                <fieldset>
                	<legend>Personal Details</legend>
                        <div class="control-group">
                            <label class="control-label" for="FirstName">First Name: <span style="color:#C30">*</span> </label>
                            <div class="controls">
                            	<input type="text" id="FirstName" name="firstName" value="<?php echo set_value("firstName", $firstname); ?>" />
                                <label style="color:#C30"><?php echo form_error('firstName'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="MiddleName">Middle Name: </label>
                            <div class="controls">
                            	<input type="text" id="MiddleName" name="middleName" value="<?php echo set_value("middleName", $middlename); ?>" />
                                <label style="color:#C30"><?php echo form_error('middleName'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="LastName">Last Name: <span style="color:#C30">*</span></label>
                            <div class="controls">
                            	<input type="text" id="LastName" name="lastName" value="<?php echo set_value("lastName", $lastname); ?>" />
                                <label style="color:#C30"><?php echo form_error('lastName'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="DateofBirth">Date of Birth: <span style="color:#C30">*</span></label>
                            <div class="controls">
                            	<input type="text" id="DateofBirth" name="DOB" placeholder="dd-mm-yyyy" value="<?php echo set_value("DOB", date('d-m-Y', strtotime($DOB))); ?>"/>
                                <label style="color:#C30"><?php echo form_error('DOB'); ?></label>
                        	</div>
                        </div>
                        <div class="control-group">
                        	<label class="control-label">Gender: <span style="color:#C30">*</span> </label>
                                <div class="controls">
                                    <label class="radio inline">
                                        <input type="radio" name="Gender" id="optionsRadios1" value="1" <?php
                                        if ($Gender == "Male")
                                            echo "checked = 'checked' ";
 ?>>Male
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="Gender" id="optionsRadios2" value="0" <?php
                                        if ($Gender == "Female")
                                            echo "checked = 'checked' ";
 ?>>Female
                                    </label>
                                </div>
                       	</div>
                       	<div class="control-group">
                            <label class="control-label" for = "mobile">Mobile Number: <span style="color:#C30">*</span> </label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">+91</span>
									<input id="mobile" type="text" name="MobileNumber" value="<?php echo set_value("MobileNumber", $MobileNumber); ?>" />
                                    <label style="color:#C30"><?php echo form_error('MobileNumber'); ?></label>
								</div>
                        	</div>
                       	</div>
                       	<div class="control-group">
                            <label class="control-label" for = "altmobile">Alternate Mobile Number: </label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">+91</span>
									<input id="altmobile" type="text" name="AlternateMobileNumber1" value="<?php echo set_value("AlternateMobileNumber1", $AlternateMobileNumber); ?>" />
                                    <label style="color:#C30"><?php echo form_error('AlternateMobileNumber1'); ?></label>
								</div>
                        	</div>
                      	</div>
                       	<div class="control-group">
                            <label class="control-label" for="AddressLine1">Address Line 1: <span style="color:#C30">*</span></label>
                            <div class="controls">
                            	<input type="text" id="AddressLine1" name="AddressLine1" value="<?php echo set_value("AddressLine1", $AddressLine1); ?>"/>
                                <label style="color:#C30"><?php echo form_error('AddressLine1'); ?></label>
                        	</div>
                       	</div>
						<div class="control-group">
                            <label class="control-label" for="AddressLine2">Address Line 2: </label>
                            <div class="controls">
                                <input type="text" id="AddressLine2" name="AddressLine2" value="<?php echo set_value("AddressLine2", $AddressLine2); ?>" />
                                <label style="color:#C30"><?php echo form_error('AddressLine2'); ?></label>
                            </div>
                       	</div>
                        <div class="control-group">
                            <label class="control-label" for="City">City: <span style="color:#C30">*</span> </label>
                            <div class="controls">
                            	<input type="text" id="City" name="City" value="<?php echo set_value("City", $City); ?>" />
                                <label style="color:#C30"><?php echo form_error('City'); ?></label>
                        	</div>
                       	</div>
                        <div class="control-group">
                            <label class="control-label" for="State">State: <span style="color:#C30">*</span></label>
                            <div class="controls">
                            	<input type="text" id="State" name="State" value="<?php echo set_value("State", $State); ?>" />
                                <label style="color:#C30"><?php echo form_error('State'); ?></label>
                        	</div>
                       	</div>
                        <div class="control-group">
                            <label class="control-label" for="PostalCode">Postal Code: <span style="color:#C30">*</span></label>
                            <div class="controls">
                            	<input type="text" id="PostalCode" name="PostalCode" value="<?php echo set_value("PostalCode", $PostalCode); ?>"/>
                                <label style="color:#C30"><?php echo form_error('PostalCode'); ?></label>
                        	</div>
                       	</div>
                        <div class="control-group">
                            <label class="control-label" for="Guardian">Guardian Name: <span style="color:#C30">*</span></label>
                            <div class="controls">
                            	<input type="text" id="Guardian" name="GuardianName" value="<?php echo set_value("GuardianName", $GuardianName); ?>"/>
                                <label style="color:#C30"><?php echo form_error('GuardianName'); ?></label>
                        	</div>
                       	</div>
                        <div class="control-group">
                            <label class="control-label" for ="guardno">Guardian Mobile Number: <span style="color:#C30">*</span></label>
                            <div class="controls">
                            	<div class="input-prepend">
                                	<span class="add-on">+91</span>
									<input id="guardno" type="text" name="GuardianMobileNumber" value="<?php echo set_value("GuardianMobileNumber", $GuardianMobileNumber); ?>"/>
								<label style="color:#C30"><?php echo form_error('GuardianMobileNumber'); ?></label>
								</div>
                        	</div>
                      	</div>
                </fieldset>
                <fieldset>
                	<legend>Education Details</legend>
                	<div class="control-group">
                    	<label class="control-label" for = "10th">10 Percentage: <span style="color:#C30">*</span></label>
                        <div class="controls">
                        	<div class="input-append">
								<input class="span1" id="10th" type="text" name="10th" value="<?php echo set_value("10th", $SSC); ?>" />
                            	<span class="add-on">%</span>
                            	<label style="color:#C30"><?php echo form_error('10th'); ?></label>                              
							</div>
                        </div>
                    </div>
                	<div class="control-group">
                        <label class="control-label" for = "12th">12 Percentage: <span style="color:#C30">*</span></label>
                        <div class="controls">
                        	<div class="input-append">
								<input class="span1" id="12th" type="text" name="12th" value="<?php echo set_value("12th", $HSC); ?>"/>
                            	<span class="add-on">%</span>
                            	<label style="color:#C30"><?php echo form_error('12th'); ?></label>                                
							</div>
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="Graduation">Graduation Percentage:</label>
                        <div class="controls">
                        	<div class="input-append">
								<input class="span2" type="text" id="Graduation" name="Graduation" placeholder = "Only for PG Students" value="<?php echo set_value("Graduation", $Graduation); ?>" />
                            	<span class="add-on">%</span> 
                            	<label style="color:#C30"><?php echo form_error('Graduation'); ?></label>                               
							</div>
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="CPI">CPI: <span style="color:#C30">*</span></label>
                        <div class="controls">
                          	<input class="span1" type="text" id="CPI" name="CPI" value="<?php echo set_value("CPI", $cpi); ?>" />
                          	<label style="color:#C30"><?php echo form_error('CPI'); ?></label>
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="CurrentBacklogs">No. of current backlogs: <span style="color:#C30">*</span></label>
                        <div class="controls">
                          	<input class="span1" type="text" id="CurrentBacklogs" name="CurrentBackLogs" value="<?php echo set_value("CurrentBackLogs", $CurrentBackLogs); ?>" />
                        	<label style="color:#C30"><?php echo form_error('CurrentBackLogs'); ?></label>
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="TotalBacklogs">No. of total backlogs: <span style="color:#C30">*</span></label>
                        <div class="controls">
                          	<input class="span1" type="text" id="TotalBacklogs" name="TotalBackLogs" value="<?php echo set_value("TotalBackLogs", $TotalBackLogs); ?>" />
                          	<label style="color:#C30"><?php echo form_error('TotalBackLogs'); ?></label>
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="Electives">Technical Electives:</label>
                        <div class="controls">
                          	<input type="text" id="Electives" placeholder = "Eg: Operating Systems" name="TechnicalElectives" value="<?php echo set_value("TechnicalElectives", $TechnicalElectives); ?>" />
                        	<label style="color:#C30"><?php echo form_error('TechnicalElectives'); ?></label>
                        
                        </div>
                    </div>                 
                    <div class="control-group">
	                    <label class="control-label">Domain: <span style="color:#C30">*</span></label>
                        <div class="controls">
                            <label class="checkbox inline">
                                
                                <input type="checkbox" id="inlineCheckbox1" value = "IT" name ="Domain[]" <?=set_checkbox('Domain[]', 'IT'); ?> 
                                <?php
                                foreach ($Domain as $value) {
                                    if (trim($value) == "IT") {
                                        echo "checked";
                                    }
                                }
                                ?> > IT
                            </label>
                            <label class="checkbox inline">
                                <input type="checkbox" id="inlineCheckbox2" value="EL" name ="Domain[]" <?=set_checkbox('Domain[]', 'EL'); ?>
                                <?php
                                foreach ($Domain as $value) {
                                    if (trim($value) == "EL") {
                                        echo "checked";
                                    }
                                }
                                ?> > EL
                            </label>
                            <label class="checkbox inline">
                                <input type="checkbox" id="inlineCheckbox3" value="CT" name ="Domain[]"<?=set_checkbox('Domain[]', 'CT'); ?>
                                <?php
                                foreach ($Domain as $value) {
                                    if (trim($value) == "CT") {
                                        echo "checked";
                                    }
                                }
                                ?> > CT
                            </label>
                            <label class="checkbox inline">
                            	<input type="checkbox" id="inlineCheckbox4" value="Consultancy" name ="Domain[]"<?=set_checkbox('Domain[]', 'Consultancy'); ?>
                            	<?php
                                foreach ($Domain as $value) {
                                    if (trim($value) == "Consultancy") {
                                        echo "checked";
                                    }
                                }
                                ?> > Consultancy
                            </label>
                            <label style="color:#C30"><?php echo form_error('Domain[]'); ?></label>
                    	</div>
                    </div>
				</fieldset>
				<fieldset>
					<legend>
						Placement
					</legend>
					<div class="control-group">
                        	<label class="control-label">Interested in In-Campus Placement Procedure: <span style="color:#C30">*</span> </label>
                                <div class="controls">
                                    <label class="radio inline">
                                        <input type="radio" name="IsInterested" id="optionsRadios1" value="1" <?php
                                        if ($IsInterested == "Yes")
                                            echo "checked = 'checked' ";
 ?>>Yes
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="IsInterested" id="optionsRadios2" value="0" <?php
                                        if ($IsInterested == "No")
                                            echo "checked = 'checked' ";
 ?>>No
                                    </label>
                                </div>
                       	</div>
				</fieldset>
                <fieldset>
                	<legend>Resume</legend>
                    <div class="control-group">
                    	<label class="control-label" for="Resumes">Your Resume: <span style="color:#C30">*</span></label>
	                	<div class="controls">
    	                 	<input type="file" id="Resumes" name="userfile" value=""/>
    	                 	<label style="color:#C30"><?php
                                if (isset($upload))
                                    echo $upload;
 ?></label>
        	            </div>
            	    </div>
                </fieldset>
                <hr />
                <input type="submit" name="Submit" value="Save" class="btn btn-primary"/>
            <label style="color:#C30"><?php if (isset($Message)) echo $Message ?></label>
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
		<script type="text/javascript" src="<?= base_url() . "js/bootstrap.min.js"; ?>" ></script>
	</body>
</html>