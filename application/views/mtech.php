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
                        <li class="dropdown active">
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
                        <li class="dropdown">
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
                                    <a href="<?php echo base_url() . "StudentResumes"; ?>">Resumes</a>
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
                                    <a href="<?php echo base_url() . "CompanyRegister"; ?>">Looking for recruiting <em>DA-IICTians</em></a>
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
                <h3>M.Tech (ICT)</h3>
            </div>
            <div class="span12">
                <h4>Program Overview</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    Master of Technology (Information and Communication Technology) is a 2-year Research oriented Program focused on providing a domain capability to each student that allows them to have a meaningful research-oriented career, as well as prepares them to satisfy the demands of the industry for innovative solutions. The program curriculum includes a wide range of elective courses along with a few core courses. Students are also required to pursue one full year (two semesters) of research under the guidance of a professor mentor and submit a Master's Thesis. The high quality of research facilities and the opportunity to work under one of the finest faculty in India, aided with the capability of DA-IICT students to think in new horizons, has led this program at DA-IICT to be a research benchmark in the country and one of the primary choices of students who want to pursue a career in research.
                    <br />
                    <br />
                    The students specialize in one of four streams:
                    <br />
                    <br />
                    <ul>
                        <li>
                            <strong>Machine Intelligence (MI)</strong> - The objective of the Machine Intelligence stream is to carry out research in an attempt to make a machine behave like a human being.
                        </li>
                        <li>
                            <strong>Networks (CNS)</strong> - This stream aims at imparting cutting edge technical knowledge to the students who wish to pursue their careers in the field of computer networks.
                        </li>
                        <li>
                            <strong>Communications (COMM)</strong> - Keeping in mind the high frequency electronics and communication revolution in the last decade, the Communication Systems program has been designed to equip the students with the concepts of various communication technologies.
                        </li>
                        <li>
                            <strong>VLSI &amp; Embedded Systems (VLSI-ES)</strong> - This course has won the legacy of being one of the flagship courses at DA-IICT. The students here have the privilege of studying from the best in the field of embedded systems and VLSI.
                        </li>
                    </ul>
                </div>
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
        <script src="<?php echo base_url() . "/js/jquery.js"; ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url() . "/js/bootstrap.min.js"; ?>" ></script>
    </body>
</html>