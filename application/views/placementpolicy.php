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
                        <li>
                            <a href="<?php echo base_url(); ?>">Home</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">About Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url() . "AboutDAIICT"; ?>">About DA-IICT</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . "AboutICT"; ?>">About ICT</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">Academics <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url() . "BTech"; ?>">B.Tech</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . "MTech"; ?>">M.Tech</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . "MScIT"; ?>">M.Sc. IT</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . "MScITARD"; ?>">M.Sc. (ICT in ARD)</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . "MDes"; ?>">M.Des</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="">Research</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo base_url() . "Research"; ?>">Research at DA-IICT</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() . "ResearchProjects"; ?>">Research Projects</a>
                                        </li>
                                        <li>
                                            <a href="#">Paper and Publications</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">Placements <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url() . "PlacementPolicy"; ?>">Placement Policy</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() . "Demographics"; ?>">Demographics 2013</a>
                                </li>
                                <li>
                                    <a href="#">Why Recruit at DA-IICT</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Placement 2012-13</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Past Recuriters</a>
                                        </li>
                                        <li>
                                            <a href="#">Past Placement Stats</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Achivements</a>
                                </li>
                                <li>
                                    <a href="#">Resumes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Placement Cell</a>
                                </li>
                                <li>
                                    <a href="#">Reach DA-IICT</a>
                                </li>
                                <li>
                                    <a href="#">Looking for recruiting <em>DA-IICTians</em></a>
                                </li>
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hero-unit" style="background-color:#191919">
                <img src="<?php echo base_url() . "/img/daiictlogo2.png"; ?>" />
            </div>
            <div class="span12">
                <h3>Placement Policy</h3>
            </div>
            <div class="span12">
                <h4>Eligibility</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    All students graduating from the institute in the year 2013 are eligible to participate in the placement activities.
                </div>
            </div>

            <div class="span12">
                <h4>Definitions</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    <ol>
                        <li>
                            <strong>Placement Cell</strong> - A body consisting of the Placement Officer, Faculty members and the Student Placement Committee.
                        </li>
                        <li>
                            <strong>Category of a Company</strong> - The classification of a company into Niche or Regular, based on the criteria of pay packages and work profile.
                        </li>

                        <li>
                            <strong>Offer of a job</strong> -  If a student's name appears on the final shortlist declared after the Company's process through the Placement Cell, then that would be considered as an offer to the student.
                        </li>

                        <li>
                            <strong>Rejection of an Offer</strong> - An offer made will be considered rejected if the concerned student informs the placement cell about the rejection in person and in writing.
                        </li>
                    </ol>
                </div>
            </div>
            <div class="span12">
                <h4>Regulations</h4>
            </div>
            <div class="span12">
                <h4>Eligibility criteria for participation in a company's placement process</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    <ol>
                        <li>
                            The cell has confirmed her/his registration.
                        </li>
                        <li>
                            She/he meets the requirements/eligibility criteria specified
                            <ol type = "i">
                                <li>
                                    By the company and
                                </li>
                                <li>
                                    By the placement policy
                                </li>
                            </ol>
                        </li>
                        <li>
                            A student selected in a 'Regular' category company has the option of upgrading to a 'Niche' category company. Resulting permutations with the students are as follows:
                            <ol type = "i">
                                <li>
                                    Regular (Accepted)
                                </li>
                                <li>
                                    Regular to Niche (Upgradation)
                                </li>
                                <li>
                                    Niche (Accepted)
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="span12">
                <h4>Offer of a Job</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    <ol>
                        <li>
                            The company would provide the offer letters to the cell and not  to the students directly.
                        </li>
                        <li>
                            When the cell receives an offer letter from a company for a student, it would communicate the same to him/her.
                        </li>
                        <li>
                            The cell would also declare a time period within which the students would have to inform the cell regarding the decision on the offer. If a student fails to do so, it would be assumed that the offer has been rejected by her/his.
                        </li>
                        <li>
                            If a student is having a "Niche" offer, then he /she cannot upgrade futher, and is considered out of the campus placement process.
                        </li>
                        <li>
                            When a student receives a second offer, i.e. in case of upgradation, from 'Regular' to 'Niche/Domain' categories then previous offer automatically stands rejected.
                        </li>
                        <li>
                            The purview of the cell would be limited only to the offers made as a part of the campus placements.
                        </li>
                    </ol>
                </div>
            </div>
            <div class="span12">
                <h4>Rejection of an Offer</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    <ol>
                        <li>
                            If a student decides to participate in the placement process of a company, he/she cannot leave it in between. In such a case, it would be considered that  he/she has rejected  the offer.
                        </li>
                        <li>
                            A student can reject only one job offer and that would be the case, when a student rejects a 'Regular' category company. If a student rejects a 'Niche' category company, he/she is out of the placement process.
                        </li>
                        <li>
                            On upgrading to a higher category company, the previous offer stands rejected.
                        </li>
                        <li>
                            If a student does not inform the Placement Cell regarding her/his decision on acceptance of an offer within the declared time period, then it will be deemed as rejection of the offer.
                        </li>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="span6">
                    &copy; 2013 Student Placement Cell
                </div>
                <div class="span6" style="text-align:right">
                    Maintained by <a href="https://www.facebook.com/sharadrsoni" target="_blank">Sharad Soni</a> and <a href="https://www.facebook.com/whizvids" target="_blank">Vidhan Agrawal</a>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url() . "/js/jquery.js"; ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url() . "/js/bootstrap.min.js"; ?>" ></script>
    </body>
</html>