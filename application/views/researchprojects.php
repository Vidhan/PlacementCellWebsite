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
                <h3>Research Projects</h3>
            </div>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Sensor Network Test-Bed for Tokamak Environment</strong>
                    <br/>
                    Board for Research in Fusion Technologies (BRFST)
                    <br/>
                    Prof. Prabhat Ranjan
                    <br/>
                    Prof. Rahul Dubey
                    <br/>
                    10/BRFST/PRA/SNTTE
                    <br/>
                    29,06,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Securing Biometric Data Using Data Hiding Techniques</strong>
                    <br/>
                    Board for Research in Nuclear Sciences (BRNS)
                    <br/>
                    Prof. Mehul Raval
                    <br/>
                    Prof. Rahul Dubey
                    <br/>
                    10/BRNS/MSR/SBDHT
                    <br/>
                    13,03,150/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Development of Cross Lingual Information (CLIA) System Phase-II</strong>
                    <br/>
                    DIT
                    <br/>
                    Prof. Prasenjit Majumder
                    <br/>
                    Prof. Suman Mitra
                    <br/>
                    11/DITGOI/PMA/DCLIA
                    <br/>
                    70,84,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Security Proofs and Multidisciplinary Evaluation for Dynamic Key Assignment Schemes</strong>
                    <br/>
                    DST (Indo-Japan)
                    <br/>
                    Prof. Anish Mathuria
                    <br/>
                    Prof. Maniklal Das
                    <br/>
                    09/DSTJST/AMM/SPME
                    <br/>
                    29, 36,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Security and Privacy Infrastructure for Internet of Things- Scenarios and Applications</strong>
                    <br/>
                    DST (Indo-Spain)
                    <br/>
                    Prof. Maniklal Das
                    <br/>
                    Prof. Anish Mathuria
                    <br/>
                    10/DSTGOI/MLD/SPIIT
                    <br/>
                    21, 44,340/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Wireless Telemedicine using Body Area Sensor Networks and Heterogeneous Access Networks</strong>
                    <br/>
                    DST
                    <br/>
                    Prof. Laxminarayana Pillutla
                    <br/>
                    10/DSTGOI/LNP/WTUBA
                    <br/>
                    12, 60,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Distortion and Accuracy Improvement in Sample and Hold Circuits for Analog-Digital Converters </strong>
                    <br/>
                    DST
                    <br/>
                    Prof. Subhajit Sen
                    <br/>
                    Prof. Chetan Parikh
                    <br/>
                    Prof. Dipankar Nagchoudhuri
                    <br/>
                    11/DSTGOI/SSS/DAISH
                    <br/>
                    18,04,800/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Service-oriented Architecture for spatial Data Integration and Spatial Reasoning</strong>
                    <br/>
                    DST
                    <br/>
                    Prof. Sanjay Chaudhary
                    <br/>
                    Prof. Minal Bhise
                    <br/>
                    11/DSTGOI/SRC/SOASD
                    <br/>
                    35,04,280/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Indian Digital Heritage (IDH-Hampi) Phase-II (Digital Capture of Culture & Heritage) </strong>
                    <br/>
                    DST
                    <br/>
                    Prof. Manjunath Joshi
                    <br/>
                    Prof. Hemant Patil
                    <br/>
                    11/DSTGOI/MVJ/IDHHII
                    <br/>
                    37,60,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Value Addition in Grassroots Technologies</strong>
                    <br/>
                    National Innovation Foundation
                    <br/>
                    Prof. Anil Roy
                    <br/>
                    Prof. Rahul Dubey
                    <br/>
                    11/NIFAHD/AKR/VAGT
                    <br/>
                    9,59, 271/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Finger/Wrist mounted Universal Remote Control for CP Patient </strong>
                    <br/>
                    National Trust
                    <br/>
                    Prof. Prabhat Ranjan
                    <br/>
                    09/NTRUST/PRA/FMURC
                    <br/>
                    12,65,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div
                <div class = "span6">
                    <strong>Robust Ultra - Low _ Power double gate MOSFET design of analog, Digital & SRAM memory circuits</strong>
                    <br/>
                    Indo-French Centre for the Promotion of Advanced Research
                    <br/>
                    Prof. Dipankar Nagchoudhary
                    <br/>
                    Prof. Chetan Parikh
                    <br/>
                    09/IFCPAR/CDP/RUDMD
                    <br/>
                    8,92,800/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Development of Prosodically Guided Phonetic Engine for searching speech database in Indian Languages</strong>
                    <br/>
                    DITGOI
                    <br/>
                    Prof. Hemant Patil
                    <br/>
                    Prof. M.V. Joshi
                    <br/>
                    11/DITGOI/HAP/DPGPE
                    <br/>
                    50,60,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Co PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Development of Text to Speech System in Indian Languages Phase-II</strong>
                    <br/>
                    DITGOI
                    <br/>
                    Prof. Hemant Patil
                    <br/>
                    Prof. M.V. Joshi
                    <br/>
                    12/DITGOI/HAP/DTSSIL-2
                    <br/>
                    76,90,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>

                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Evaluation of spatiotemporal dynamics of land surface evapotranspiration and monsoon rainfall coupling over Indian region for climate change studies</strong>
                    <br/>
                    DST
                    <br/>
                    Dr. Indrani Choudhury Singh
                    <br/>

                    12/DSTGOI/RSG/WOS-A
                    <br/>
                    18,95,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Techniques for robust face recognition with pose variation</strong>
                    <br/>
                    BRNS
                    <br/>
                    Prof. Suman Mitra
                    <br/>
                    Prof. Mehul Raval
                    <br/>
                    12/DAEGOI/SKM/TRFRPV
                    <br/>
                    21,92,350/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>

                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Developing of Infant Cry Analyzer using source and system features</strong>
                    <br/>
                    DST
                    <br/>
                    Prof. Hemant Patil
                    <br/>

                    13/DSTGOI/HAP/DISSF
                    <br/>
                    5,96,000/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Semantic Web Based Persar, SPARQL Query Builder And Information Extraction from social networks</strong>
                    <br/>
                    eZDI
                    <br/>
                    Prof. Sanjay Chaudhary
                    <br/>
                    Prof. P.M. Jat & Prof. Minal Bhise
                    <br/>
                    12/eZDI/SRC/SWPSQB
                    <br/>
                    10,28,790/-
                    <br/>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row">
                <div class= "span2">
                    Project Title:
                    <br/>
                    Agency:
                    <br/>
                    PI:
                    <br/>
                    Project Code:
                    <br/>
                    Sanctioned Amount:
                    <br/>
                </div>
                <div class = "span6">
                    <strong>Mobile Application Development</strong>
                    <br/>
                    USID
                    <br/>
                    Prof. Asim Banerjee
                    <br/>
                    13/USID/AJB/CEMAD
                    <br/>
                    50,000/-
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