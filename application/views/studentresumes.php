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
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us <b class="caret"></b></a>
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
          			</ul>
			   </div>
		   	</div>
		</div>
		<div class="container">
			<div class="hero-unit" style="background-color:#191919">
				<img src="<?php echo base_url() . "/img/daiictlogo2.png"; ?>" />
			</div>
            <div class="span12">
                <h2>Resumes</h2>
            </div>
            <hr />
            <div class="tabbable">
                    <ul id="myTab" class="nav nav-tabs nav-pills">
                        <?php foreach($programs as $program): ?>
                                <li name="<?php echo($program -> programId); ?>"><a  href="<?php echo "#" . ($program -> programId); ?>" data-toggle="tab"><?php echo($program -> programName); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <?php foreach($programs as $program): ?>
                         <div class="tab-pane fade in" id="<?php echo($program -> programId); ?>">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="tableHeader">Student Id</th>
                                        <th class="tableHeader">First Name</th>
                                        <th class="tableHeader">Middle Name</th>
                                        <th class="tableHeader">Last Name</th>
                                        <th class="tableHeader">Resume Downloads</th>
                                    </tr>
                               </thead>
                                <tbody>
                                    <?php foreach($users as $key): ?>
                                        <?php
                                        if (floor($key -> StudentId / 1000) % 100 == $program -> programId) {
                                            echo "<tr>
                                            <td class=\"tableRow\">{$key->StudentId}</td>
                                            <td class=\"tableRow\">{$key->StudentFirstName}</td>
                                            <td class=\"tableRow\">{$key->StudentMiddleName}</td>
                                            <td class=\"tableRow\">{$key->StudentLastName}</td>
                                            <th class=\"tableRow\">
                                            <a href = \"" . base_url() . "StudentResumes/ResumeDownload/{$key->StudentId}\" >Download</a></th></tr>";
                                        }
                                        ?>
                                    <?php endforeach; ?>
                                </tbody>
                        </table>
                        <div class="row">
                        <!--<div class="span12">
                            <?php if (strlen($pagination)): ?>
                                <?php echo $pagination; ?>
                                <?php endif ?>
                        </div>-->
                    </div>
                      </div>
                      <?php endforeach; ?>
                    </div>
                    
                    <hr />
            <div class="row">
                <div class="span6">
                    &copy; 2013 Student Placement Cell
                </div>
                <div class="span6" style="text-align:right">
                    Developed &amp; Maintained by <a href="https://www.facebook.com/sharadrsoni" target="_blank">Sharad Soni</a> and <a href="https://www.facebook.com/whizvids" target="_blank">Vidhan Agarwal</a>
                </div>
            </div>
         </div>
    </div>
    <script>
        var element = document.getElementsByName("1");
        element[0].className = "active";
    </script>
    <script src="<?php echo base_url() . "/js/jquery.js"; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . "js/bootstrap.min.js"; ?>" ></script>
</body>
</html>