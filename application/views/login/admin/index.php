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
                                    echo "<li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">" . $this -> session -> userdata("studentname") . " <b class=\"caret\"></b></a> <ul class=\"dropdown-menu\"> 
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
     	 <form action="<?php echo base_url() . "Admin"; ?>" method="post">
		<div class="row">
			<div class="span3">
				Program:
				<select name="Program" class="span2">
					<option value="All">All</option>
						<?php foreach($programs as $program): ?>
  								<option value="<?php echo($program -> programId); ?>"><?php echo($program -> programName); ?></option>
  						<?php endforeach; ?>
				</select>
			</div>
			<div class="span3 pull-left">
						CPI:
						<select name="Comparision" class="span1">
							<option value="<"><</option>
							<option value="<="><=</option>
							<option value="=">=</option>
							<option value=">">></option>
							<option value=">=">>=</option>
						</select> 
						<input name="CPI" class="span1" type="text" size="4"/><?php echo form_error('CPI'); ?>
			</div>			
			<div class="span6 pull-left">
				<input class = "btn btn-success" name="submit" value="Go" type="submit"/>
			</div>
		</div>
		<hr />				
	</form>
	<?= $this -> session -> flashdata("Delete"); ?>
    <table class="table table-hover table-striped">
    	<thead>
     		<tr>
     	 		<th class="tableHeader"><a href = "<?php echo base_url() . "Admin/index/StudentId/" . ($sortorder == 'asc' && $sortby == 'StudentId' ? 'desc' : 'asc'); ?>">StudentId</a></th>
				<th class="tableHeader"><?php echo anchor(base_url() . "Admin/index/StudentFirstName/" . ($sortorder == 'asc' && $sortby == 'StudentFirstName' ? 'desc' : 'asc'), "First Name"); ?></th>
				<th class="tableHeader"><?php echo anchor(base_url() . "Admin/index/StudentMiddleName/" . ($sortorder == 'asc' && $sortby == 'StudentMiddleName' ? 'desc' : 'asc'), "Middle Name"); ?></th>
				<th class="tableHeader"><?php echo anchor(base_url() . "Admin/index/StudentLastName/" . ($sortorder == 'asc' && $sortby == 'StudentLastName' ? 'desc' : 'asc'), "Last Name"); ?></th>
				<th class="tableHeader"><?php echo anchor(base_url() . "Admin/index/StudentCPI/" . ($sortorder == 'asc' && $sortby == 'StudentCPI' ? 'desc' : 'asc'), "CPI"); ?></th>
				<th class="tableHeader"><?php echo anchor(base_url() . "Admin/index/StudentIsApproved/" . ($sortorder == 'asc' && $sortby == 'StudentIsApproved' ? 'desc' : 'asc'), "Is Approved"); ?></th>
				<th class="tableHeader"><input type="checkbox" onClick="toggle(this)" /></th>
				<th class="tableHeader">Actions</th>
				<th class="tableHeader">Resume Downloads</th>
     	 	</tr>
     	</thead>
		<tbody>
			<?php foreach($users as $key): ?>
			<tr>
				<td class="tableRow"><?php echo anchor(base_url() . "Admin/View/" . $key -> StudentId, $key -> StudentId); ?></td>
				<td class="tableRow"><?php echo $key -> StudentFirstName; ?></td>
				<td class="tableRow"><?php echo $key -> StudentMiddleName; ?></td>
				<td class="tableRow"><?php echo $key -> StudentLastName; ?></td>
				<td class="tableRow"><?php echo $key -> StudentCPI; ?></td>
				<td class="tableRow"><?php
                if ($key -> StudentIsApproved)
                    echo "Approved";
                else
                    echo "Pending";
 ?></td>
				<th class="tableRow"><input type="checkbox" name ="status" /></th>
				<th class="tableRow"><?php echo anchor(base_url() . "Admin/EditStudent/" . $key -> StudentId, "Edit"); ?> 
					
					<?php
                    if ($key -> RoleId == 1) {
                        echo "<a href=\"#myModal\" role=\"button\" data-toggle=\"modal\">Delete</a></th>";
                    }
					?>
				<th class="tableRow"><a href = "<?php echo base_url() . "Admin/ResumeDownload/" . $key->StudentId ?>" >Download</a></th>
			</tr>
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Delete Confirmation</h3>
	</div>
	<div class="modal-body">
		<p>Are you sure you want to delete a student profile?</p>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
		<a class="btn btn-primary" href="<?=base_url() . "Admin/DeleteStudent/" . $key -> StudentId; ?>">Yes</a>
	</div>
</div>
			<?php endforeach; ?>
		</tbody> 		
	</table>
<!-- <?php echo anchor(base_url() . "Admin/DeleteStudent/" . $key->StudentId, "Delete"); ?>-->
<!-- Modal -->
<!-- Modal -->
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



























	
