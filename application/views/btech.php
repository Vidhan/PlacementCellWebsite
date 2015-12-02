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
                <h3>B.Tech (ICT)</h3>
            </div>
            <div class="span12">
                <h4>Program Overview</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    DA-IICT offers a unique four-year undergraduate program leading to the degree of Bachelor of Technology in Information and Communication Technology - B. Tech. (ICT). "ICT" embodies the convergence of Computer, Electronics and Communication systems and has obtained wide acceptance as a distinct discipline. Since technological courses are introduced from the very first semester, the student has the necessary background to specialize and delve deeper into specific sub-areas of knowledge within ICT in the later part of the Program. It is also expected that ICT graduates would enjoy a special niche since they have certain performance capabilities not found in conventional CSE and/or ECE graduates. This is because given the unique interdisciplinary structure of the four-year-long B.Tech. program, the student acquires a good balance between the breadth demanded by comprehension at the systems level and the depth demanded by scientific understanding of the fundamentals.
                    <br />
                    <br />
                    Elective courses constitute the bulk of the curriculum in the third and fourth years of study, which means that the student has the freedom to acquire proficiency in her/his fields of interest. Group electives differentiate between students of core Information Technology, core Electronics and core Communications fields. Science electives are courses offered in the areas of Mathematics and Engineering Sciences. Technical electives cover technical courses from various fields of Information and Communication Technology, and Open electives are courses offered from areas like Humanities, Social Sciences, Management and Engineering Arts including Design, which are not covered in the technical electives. The blend of theoretical, technical and humanities courses available ensures a distinctive mental development of the students, whereby they are equally adept in the understanding of the theoretical foundations, practical applications and social and cultural context related to the technology they are studying. Projects, which are aimed at providing practical knowledge to students, form a significant component in the education.
                </div>
            </div>
            <div class="span12">
                <h4>Course Curriculum</h4>
            </div>
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
                            Approaches to Indian Society
                        </li>
                        <li>
                            Basic Electronics Circuits
                        </li>
                        <li>
                            Calculus and Complex Variables
                        </li>
                        <li>
                            Communication Skills
                        </li>
                        <li>
                            Introduction to programming
                        </li>
                        <li>
                            ICT for Freshers
                        </li>
                    </ul>
                </div>
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Introduction to Communication Systems
                        </li>
                        <li>
                            Digital Logic Design
                        </li>
                        <li>
                            Principles of Economics
                        </li>
                        <li>
                            Object Oriented Programming
                        </li>
                        <li>
                            Introduction to Discrete Mathematics
                        </li>

                    </ul>
                </div>
            </div>
            <br/>
            <div class = "row">
                <div class = "span4 semester">
                    <strong>SEMESTER 3</strong>
                </div>

                <div class = "span4 semester">
                    <strong>SEMESTER 4</strong>
                </div>
            </div>
            <div class = "row">
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Signals and Systems
                        </li>
                        <li>
                            Science, Technology, Society
                        </li>
                        <li>
                            Data Structures
                        </li>
                        <li>
                            Computer Organization
                        </li>
                        <li>
                            Algebraic Structures
                        </li>
                        <li>
                            Electromagnetic Theory
                        </li>
                    </ul>
                    <br/>
                    <div class = "span4 ">
                        WINTER: RURAL INTERNSHIP
                    </div>
                </div>
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Analog and Digital Communication
                        </li>
                        <li>
                            Analog Circuits
                        </li>
                        <li>
                            Introduction to Business Finance
                        </li>
                        <li>
                            System Software
                        </li>
                        <li>
                            Environmental Studies
                        </li>
                        <li>
                            Probability and Statistics
                        </li>
                    </ul>
                </div>
            </div>
            <br/>
            <div class = "row">
                <div class = "span4 semester">
                    <strong>SEMESTER 5</strong>
                </div>
                <div class = "span4 semester">
                    <strong>SEMESTER 6</strong>
                </div>
            </div>
            <div class = "row">
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Embedded Hardware Design
                        </li>
                        <li>
                            Computer Networks
                        </li>
                        <li>
                            Database Management System
                        </li>
                    </ul>
                    <strong>Elective:</strong>
                    <br/>
                    <ul>
                        <li>
                            Introduction to Algorithms
                        </li>
                        <li>
                            Digital Signal Processing
                        </li>
                        <li>
                            Introduction to VLSI
                        </li>
                        <li>
                            Stochastic Simulation
                        </li>
                        <li>
                            Optical Communication
                        </li>
                        <li>
                            Introduction to Graph Theory
                        </li>
                        <li>
                            Dynamics of Animation
                        </li>
                        <li>
                            Biotechnology
                        </li>
                        <li>
                            International management
                        </li>
                        <li>
                            Organisational Behaviour
                        </li>
                        <li>
                            Elements of Business Management
                        </li>
                        <li>
                            Development Theory and Practices
                        </li>
                    </ul>
                </div>
                <div class = "span4 courses">
                    <strong>Core:</strong>
                    <br/>
                    <ul>
                        <li>
                            Software Engineering
                        </li>
                    </ul>
                    <strong>Elective:</strong>
                    <br/>
                    <ul>
                        <li>
                            Web Programming
                        </li>
                        <li>
                            Advanced Digital Signal Processing
                        </li>
                        <li>
                            Introduction to Quantum Mechanics
                        </li>
                        <li>
                            Multicultural Education and Human Diversity
                        </li>
                        <li>
                            The Business of Technology
                        </li>
                        <li>
                            Satellite Communication
                        </li>
                        <li>
                            Digital Image processing
                        </li>
                        <li>
                            Models of Computation
                        </li>
                        <li>
                            Radio wave Propagation
                        </li>
                        <li>
                            Digital System Architecture
                        </li>
                        <li>
                            Quantum Computers
                        </li>
                        <li>
                            Introduction to Coding Theory and Applications
                        </li>
                        <li>
                            Elements of Business Management
                        </li>
                        <li>
                            Information Retrieval
                        </li>
                        <li>
                            Computer Graphics
                        </li>
                        <li>
                            Web Data Management
                        </li>
                    </ul>
                </div>
            </div>
            <br/>
            <div class = "row">
                <div class = "span4 semester">
                    <strong>SEMESTER 6</strong>
                </div>
                <div class = "span4 semester">
                    <strong>SEMESTER 7</strong>
                </div>
            </div>
            <div class = "row">
                <div class = "span4 courses">
                    <strong>Elective(continued):</strong>
                    <br/>
                    <ul>
                        <li>
                            Radio Frequency Engineering
                        </li>
                        <li>
                            Introduction to Nanoscience and Technology
                        </li>
                        <li>
                            Introduction to Marketing
                        </li>
                        <li>
                            Satyajit Ray: Artist and Film-maker
                        </li>
                        <li>
                            Sensors Networks Systems
                        </li>
                        <li>
                            Introduction to Cryptology
                        </li>
                        <li>
                            Adaptive System Design
                        </li>
                        <li>
                            Topics in Medical Electronics
                        </li>
                        <li>
                            Dynamics of Animation
                        </li>
                        <li>
                            Advanced Animation
                        </li>
                        <li>
                            Modernity and Political Theory
                        </li>
                        <li>
                            Operating Systems
                        </li>
                        <li>
                            Combinatorial Games and Algorithm Design
                        </li>
                        <li>
                            Statistical communication Theory
                        </li>
                        <li>
                            Solid State Devices
                        </li>
                        <li>
                            Modern Optics
                        </li>
                        <li>
                            Culture, Politics, Identity
                        </li>
                    </ul>
                </div>
                <div class = "span4 courses">
                    <strong>Elective:</strong>
                    <br/>
                    <ul>
                        <li>
                            Network Protocols
                        </li>
                        <li>
                            Advanced radio Freq. Eng.
                        </li>
                        <li>
                            Speech Communication
                        </li>
                        <li>
                            Security Protocols
                        </li>
                        <li>
                            Logic of Computer Science
                        </li>
                        <li>
                            Language in India and Language Mapping
                        </li>
                        <li>
                            Systems, Politics and Implications
                        </li>
                        <li>
                            Optical Information Processing
                        </li>
                        <li>
                            System and Network Security
                        </li>
                        <li>
                            Quantum Computers
                        </li>
                        <li>
                            Approaches to Science Fiction
                        </li>
                        <li>
                            Robotics Lab
                        </li>
                        <li>
                            Natural Computing
                        </li>
                        <li>
                            Optimization
                        </li>
                        <li>
                            The Proper Work of Reason: An Introduction to the culture of Philosophy
                        </li>
                        <li>
                            Games, Simulations and Modelling
                        </li>
                    </ul>
                    <strong>B.Tech. Project (Part-1) </strong>
                </div>
            </div>
            <br/>
            <div class = "row">
                <div class = "span8 semester">
                    <strong>SEMESTER 8</strong>
                </div>
            </div>
            <div class = "row">
                <div class = "span8 courses">
                    <strong>B.Tech. Project/B.Tech. Project (Part-2)</strong>
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