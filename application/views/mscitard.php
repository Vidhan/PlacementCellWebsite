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
                <h3>M.Sc (IT in ARD)</h3>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    DA-IICT also offers a Master of Science degree in ICT in Agriculture and Rural Development. This program prepares professionals who will be able to use ICT as a means for developing innovative solutions to existing and emerging challenges in the areas of rural development, entrepreneurship, marketing, agriculture and services for sustainable livelihood security by enabling rural people to take control of their future. The program offers a unique career opportunity to the students that ranges from Agribusiness to Commodity Exchanges and from Research to Market Analysis, and thus aims to occupy the unique developmental niche in the field of agricultural and sustainable development using ICT. The courses taught in this program include Computer Basics along with Rural Finance, Approaches to Sustainable Development, E-governance, Agribusiness Management, ICT Infrastructure Management and others. An Industrial/Research internship and a thesis based on the same are also included in the program.
                </div>
            </div>
            <div class="span12">
                <h4>Programme</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    Existing Agriculture Universities do not offer an ICT grounded interface. They produce Agriculture scientists. Others like rural development institutes or management institutes cater to specific niches such as microfinance, land and water or sustainable development but without the ICT interface component. ICT enabled services are being considered pivotal in ushering change in rural contexts We are the only institute in India who has the ability and the expertise to offer the ICT interface niche within the larger requirements.
                    <br />
                    <br />
                    Our Courses:
                    <br />
                    <br />
                    <ul>
                        <li>
                            <strong>Offer</strong> A comprehensive structure for an individual to carve a niche in the field of ICT and its interfaces within the emerging context.
                        </li>
                        <li>
                            <strong>Capture</strong> emerging initiative at the national and global levels in developmental fields.
                        </li>
                        <li>
                            Are strategically positioned as we cover the entire range in relation to Mission 2007, National Plan of E-Governance and the entry of MNCs and Indian Industry in the field of development that is enabled by the ICT. Here our potential outreach is unmatched compared to other courses which are limited in scope and outreach.
                        </li>
                        <li>
                            <strong>Link</strong> up with the Southeast Asian and Saarc initiatives in terms of teaching and training of professionals who would execute these programmes.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="span12">
                <h4>Curriculum</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    <ul>
                        <li>
                            Takes into account the larger perspective of the rural and the developmental context.
                        </li>
                        <li>
                            Also addresses the concerns of the emerging markets.
                        </li>
                    </ul>
                    Includes Agriculture Information Systems, Agribusiness and Finance, Supply Chain Management, Land-Water Management Systems, Resource Mapping, Developmental issues in rural areas, ICT and Technology application, E-governance and related fields including the Public Information Systems database creation. Foundation Courses mainly from the perspective of Information Communication Technology include: Agriculture Information Systems, Agribusiness and Finance, Supply Chain Management, Land-Water Management Systems, Resource Mapping, Developmental issues in rural development, ICT and Technology application, E-governance and other related fields including Public Information Systems database creation.
                    <br />
                    <br />
                    These foundation courses thus include a basic training tool in the ICT, an introduction to development studies, programmes and policies in development and agriculture as well as in Information Communication Technology. They also offer a basket of specializations. The emphasis is on covering the broadest possible range in each of the above and providing the necessary analytical tools.
                </div>
            </div>
            <div class="span12">
                <h4>Employment Opportunity</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    Our students have been placed in Chambal Fertilizers, Dena Bank, Dr. Reddy's Lab, DSCL, Excel Crop Care, Godrej Agrovat, ICICI, ICRISAT, I-Kisan Ltd., Monsanto India Ltd., MCX, NDDB, NMCE, Parle Agro Products Ltd., Reliance Agro, Reliance Retail Limited, Shri Ram Fertilizers Ltd., Tata Rallis, Transgraph.
                    <br />
                    <br />
                    Their job profile includes
                    <ul>
                        <li>
                            Decision support systems for agriculture
                        </li>
                        <li>
                            Management and administration of Rural and databases
                        </li>
                        <li>
                            Agricultural extension and professional services
                        </li>
                        <li>
                            Application of remote sensing and GIS in Land and Water Management
                        </li>
                        <li>
                            Agriculture-related information services and systems
                        </li>
                        <li>
                            Management of multi-media and multi-purpose info-kiosks
                        </li>
                        <li>
                            Development of technology mediated learning for extension
                        </li>
                        <li>
                            Software design for Rural and Agriculture applications
                        </li>
                        <li>
                            Development and maintenance of Knowledge portals
                        </li>
                        <li>
                            E-procurement and e-commerce.
                        </li>
                        <li>
                            E-Governance and Rural Infrastructures
                        </li>
                        <li>
                            Commodity Exchanges
                        </li>
                    </ul>
                </div>
            </div>
            <div class="span12">
                <h4>Strategic Alliances</h4>
            </div>
            <div class="row">
                <div class="span12" style="text-align:justify">
                    We are in a strategic alliances with the follwoing International and National Organisations for internships, research collaborations and placement related issues.
                    <br />
                    <br />
                    <ul>
                        <li>
                            International Crops Research Institute for Semi Arid Tropics (ICRISAT), Hyderabad
                        </li>
                        <li>
                            Mission 2007, Chennai
                        </li>
                        <li>
                            MANAGE Hyderabad
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