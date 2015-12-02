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
            .semester {
                background-color: #98ddda;
                text-align: center;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .courses {
                background-color: #eefafa;
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
                                    <a href="#">Achievements</a>
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
                <h3>M.Sc (IT)</h3>
            </div>
            <div class="span12">
                <h4>Program Overview</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    Master of Science (Information Technology) is an intensive two year program designed for students who wish to pursue a professional career in Information Technology. At the end of this program, the students are trained in three important and complementary skills - a sound theoretical foundation; an ability to analyze, conceptualize and design systems; and fluency with modern software design and development tools. With these abilities, a post-graduate of this program will be able to build a satisfying career in the challenging field of Information Technology - as software engineer, analyst and system designer. The course has been carefully designed to guide the students from basic concepts to current practices in industry. Also, the students are required to carry out a summer internship of six-eight weeks after their first year and an industrial project internship in the last semester of the program, to make them aware of the current practices in the industry. The course is open to candidates who have obtained a degree in an engineering or science discipline with any computer science course in it.

                </div>
            </div>

            <div class="span12">
                <h4>Course Curriculum</h4>
            </div>
            <br/>
            <br/>
            <div class = "row">
                <div class = "span4 semester">
                    <strong>SEMESTER 1</strong>
                </div>

                <div class = "span4 semester">
                    <strong>SEMESTER 2</strong>
                </div>
            </div>
            <div class = "row">
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Database Design and Programming
                        </li>
                        <li>
                            Computer Organization
                        </li>
                        <li>
                            Programming Paradigms
                        </li>
                        <li>
                            Communication Skills (P/F)
                        </li>
                        <li>
                            Mathematics
                        </li>
                    </ul>
                </div>
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Algorithms and Data Structures
                        </li>
                        <li>
                            Programming Laboratory 1
                        </li>
                        <li>
                            Object-Oriented Analysis and Design
                        </li>
                        <li>
                            Computer Networks
                        </li>
                        <li>
                            Networking Economy and Society
                        </li>
                    </ul>
                </div>
            </div>
            <br/>
            <div class = "row">
                <div class = "span4 semester">
                    <strong>SEMESTER 3</strong>
                </div>

                <div class = "span4  semester">
                    <strong>SEMESTER 4</strong>
                </div>
            </div>
            <div class = "row">
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Principles of Management
                        </li>
                        <li>
                            Software Engineering
                        </li>
                        <li>
                            Programming Laboratory 2
                        </li>
                    </ul>
                    <strong>Elective:</strong>
                    <br/>
                    <ul>
                        <li>
                            Data Mining and Warehousing
                        </li>
                        <li>
                            Information System Services
                        </li>
                        <li>
                            Distributed Computing
                        </li>
                        <li>
                            Optimization
                        </li>
                        <li>
                            Service Oriented Computing
                        </li>
                        <li>
                            Information Retrieval
                        </li>
                        <li>
                            Quantitative Analysis
                        </li>
                        <li>
                            Computer Games - Design & Implementations
                        </li>
                        <li>
                            Technical Communication
                        </li>
                    </ul>
                </div>
                <div class = "span4  courses">
                    <strong>Project Internships (p/f)</strong>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
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