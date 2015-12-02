<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href=" <?php echo base_url() . "css/bootstrap.css"; ?>"/>
		<link rel="stylesheet" type="text/css" href=" <?php echo base_url() . "css/bootstrap-responsive.css"; ?>" />
		<title>Placements at DA-IICT</title>
		<style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }
	    </style>
	    <script language="JavaScript">
            function toggle(source) {
                checkboxes = document.getElementsByName('status');
                for (var i = 0, n = checkboxes.length; i < n; i++) {
                    checkboxes[i].checked = source.checked;
                }
            }
		</script>
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
                                    echo "<li class='" . base_url() . "dropdown'> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">" . $this -> session -> userdata("studentname") . " <b class=\"caret\"></b></a> <ul class=\"dropdown-menu\"> 
                    					<li><a href='" . base_url() . "Admin'>My Account</a></li>
			                            <li><a href='" . base_url() . "Admin/Logout'>Logout</a></li>                               
			                        	</ul>";
                                } else {
                                    echo "<li><a href='" . base_url() . "Login'>Login</a></li>";
                                }
                    			?>
                        </li>
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
			<div class="span12 row-fluid">
				<div class="row">
				<label style = "font-size:20px;"><strong>Profile View: </strong>&nbsp; <?php echo $firstname; ?>&nbsp; <?php echo $middlename; ?>&nbsp; <?php echo $lastname; ?></label><br/>
				</div>
			</div>	 	
     	 	<table class="table table-hover table-striped">
     	 		<thead>
     	 		</thead>
     	 			<tbody>
			<tr ><td>First Name:</td><td  > <?php echo $firstname; ?> </td></tr>
							<tr><td>Middle Name: </td><td  ><?php echo $middlename; ?> </td></tr>
							<tr ><td>Last Name: </td><td  ><?php echo $lastname; ?> </td></tr>
							<tr><td>Student ID: </td><td><?php echo $username; ?> </td></tr>
							<tr ><td>CPI: </td><td><?php echo $cpi; ?> </td></tr>
							<tr><td>Date Of Birth: </td><td><?php echo date("d-m-Y", strtotime($DOB)); ?> </td></tr>
							<tr ><td>Gender: </td><td><?php echo $Gender; ?> </td></tr>
							<tr><td>10th Percentage: </td><td><?php echo $SSC ?> </td></tr>
							<tr ><td>12th Percentage: </td><td> <?php echo $HSC ?> </td></tr>
							<tr><td>Graduation Percentage:</td><td> <?php echo $Graduation ?> </td></tr>
							<tr ><td>Current BackLogs:</td><td> <?php echo $CurrentBackLogs ?> </td></tr>
							<tr><td>Total BackLogs: </td><td><?php echo $TotalBackLogs ?> </td></tr>
							<tr ><td>Domain: </td><td><?php echo $Domain ?> </td></tr>
							<tr><td>Mobile Number: </td><td><?php echo $MobileNumber ?> </td></tr>
							<tr ><td>Alternate Mobile Number:</td><td  > <?php echo $AlternateMobileNumber ?> </td></tr>
							<tr><td style="vertical-align: top; padding-left: 10px;">Address: </td><td  ><?php echo $AddressLine1 . " " . $AddressLine2 . "<br />" . $City . ", " . $State . "- " . $PostalCode ?> </td></tr>
							<tr ><td>Guardian Name: </td><td  ><?php echo $GuardianName ?> </td></tr>
							<tr><td>Guardian Mobile Number:</td><td> <?php echo $GuardianMobileNumber ?> </td></tr>
							<tr><td>Interested in Placement:</td><td> <?php echo $IsInterested ?></td></tr>
							<tr ><td>Resume: </td><td><?php echo $resumepath ?></td></tr>  
						
     	 		</tbody>
     	 	</table>
     	 <form action = "<?php echo base_url() . "Admin/UpdateStudent/" . $SID; ?>" > 
				<input type="submit" value="Edit" class="btn btn-info"/></form>
            <hr />
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
		<script type="text/javascript" src="<?php echo base_url() . "js/bootstrap.min.js"; ?>" ></script>
	</body>
</html>