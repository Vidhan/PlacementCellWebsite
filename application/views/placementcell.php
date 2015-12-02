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
                        <li class="dropdown active">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url() . "PlacementCell"; ?>">Placement Cell</a>
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
                <h3>Placement Cell</h3>
            </div>
            <div class="row">
                <div class="span12">
                    <h4>Placement Cell Comprises of: </h4>
                    <ol>
                        <li>
                            Placement Officer
                        </li>
                        <li>
                            Faculty Members
                        </li>
                        <li>
                            Student Representatives from each batch
                        </li>
                    </ol>
                    <h4>Contact Details: </h4>
                    <em>Note : The contact information provided on this page is exclusively for <u>campus recruitment</u> and not for admission related queries. </em>
                    <br />
                    <br />
                    <h4>Placement Officer:</h4>
                    Anjali Kulshrestha
                    <br />
                    Placement CEP Officer
                    <br />
                    <strong>Phone: </strong> +91 (79) 30510615
                    <br />
                    <strong>Mobile: </strong> +91 9328994143
                    <br />
                    <strong>E-Mail: </strong><em>anjali_kulshrestha[at]daiict[dot]ac[dot]in</em> | <em>placement[at]daiict[dot]ac[dot]in</em>
                    <br />
                    <br />
                    <h4>Faculty Members:</h4>
                    <div class="row">
                        <div class="span6">
                            Prof. Ranendu Ghosh
                            <br />
                            Faculty Convener, Placement Committee
                            <br />
                            <strong>Phone: </strong> +91 (79) 30510649
                            <br />
                            <strong>Email: </strong> ranendu_ghosh[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Prof. Prabhat Ranjan
                            <br />
                            Faculty Convener, Placement Committee
                            <br />
                            <strong>Phone: </strong> +91 (79) 30510553
                            <br />
                            <strong>Email: </strong> prabhat_ranjan[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Prof. Asim Banerjee
                            <br />
                            Faculty Convener, Placement Committee
                            <br />
                            <strong>Phone: </strong> +91 (79) 30510554
                            <br />
                            <strong>Email: </strong> asim_banerjee[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Prof. Amit Bhatt
                            <br />
                            Faculty Convener, Placement Committee
                            <br />
                            <strong>Phone: </strong> +91 (79) 30510643
                            <br />
                            <strong>Email: </strong> amit_bhatt[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Prof. V Sunitha
                            <br />
                            Faculty Convener, Placement Committee
                            <br />
                            <strong>Phone: </strong> +91 (79) 30510563
                            <br />
                            <strong>Email: </strong> v_suni[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6"></div>
                    </div>
                    <br />
                    <h4>Student Representatives:</h4>
                    <h5><u>B. Tech 2010 Batch Representatives</u></h5>
                    <div class="row">
                        <div class="span6">
                            <h5>Student Convener</h5>
                            Nimit Agarwal - 201001150
                            <br />
                            <strong>Phone: </strong> +91 8905694574
                            <br />
                            <strong>Email: </strong> 201001150[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            <h5>Deputy Convener</h5>
                            Saheb Motiani - 201001152
                            <br />
                            <strong>Phone: </strong> +91 9724445808
                            <br />
                            <strong>Email: </strong> 201001152[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Saurabh Singh - 201001055
                            <br />
                            <strong>Phone: </strong> +91 9925429866
                            <br />
                            <strong>Email: </strong> 201001055[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Swena Gupta - 201001104
                            <br />
                            <strong>Phone: </strong> +91 9624118722
                            <br />
                            <strong>Email: </strong> 201001104[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Abhishek Shah - 201001159
                            <br />
                            <strong>Phone: </strong> +91 9426759820
                            <br />
                            <strong>Email: </strong> 201001159[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Shalki Shrivastava - 201001117
                            <br />
                            <strong>Phone: </strong> +91 9429532272
                            <br />
                            <strong>Email: </strong> 201001117[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Ishan Modi - 201001052
                            <br />
                            <strong>Phone: </strong> +91 9033879087
                            <br />
                            <strong>Email: </strong> 201001052[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6"></div>
                    </div>
                    <br />
                    <h5><u>B. Tech 2011 Batch Representatives</u></h5>
                    <div class="row">
                        <div class="span6">
                            Vamsi - 201101194
                            <br />
                            <strong>Phone: </strong> +91 7359477417
                            <br />
                            <strong>Email: </strong> 201101194[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Aditya - 201101028
                            <br />
                            <strong>Phone: </strong> +91 9898180907
                            <br />
                            <strong>Email: </strong> 201101028[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <h5><u>B. Tech 2012 Batch Representatives</u></h5>
                    <div class="row">
                        <div class="span6">
                            Nihal - 201201090
                            <br />
                            <strong>Phone: </strong> +91 8460073321
                            <br />
                            <strong>Email: </strong> 201201090[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Mohit - 201201180
                            <br />
                            <strong>Phone: </strong> +91 9624252635
                            <br />
                            <strong>Email: </strong> 201201180[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Anurag - 201201198
                            <br />
                            <strong>Phone: </strong> +91 7405352413
                            <br />
                            <strong>Email: </strong> 201201198[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6"></div>
                    </div>
                    <br />
                    <h5><u>M. Tech 2012 Batch Representatives</u></h5>
                    <div class="row">
                        <div class="span6">
                            Adarsa .S - 201211027
                            <br />
                            <strong>Phone: </strong> +91 9712711855
                            <br />
                            <strong>Email: </strong> 201211027[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Pradeep Nair - 201211002
                            <br />
                            <strong>Phone: </strong> +91 8128750105
                            <br />
                            <strong>Email: </strong> 201211002[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Santosh S Hosamani - 201211021
                            <br />
                            <strong>Phone: </strong> +91 9723145957
                            <br />
                            <strong>Email: </strong> 201211021[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6"></div>
                    </div>
                    <br />
                    <h5><u>M. Sc IT 2012 Batch Representatives</u></h5>
                    <div class="row">
                        <div class="span6">
                            Ankur Gandhi - 201212023
                            <br />
                            <strong>Phone: </strong> +91 8530881996
                            <br />
                            <strong>Email: </strong> 201212023[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Mudassir Malik - 201212077
                            <br />
                            <strong>Phone: </strong> +91 9727350331
                            <br />
                            <strong>Email: </strong> 201212077[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="span6">
                            Upasana P Chauhan - 201212034
                            <br />
                            <strong>Phone: </strong> +91 9016410600
                            <br />
                            <strong>Email: </strong> 201212034[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Maulik Kotadiya - 201212080
                            <br />
                            <strong>Phone: </strong> +91 9727686244
                            <br />
                            <strong>Email: </strong> 201212080[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <h5><u>M. Sc IT in ARD 2012 Batch Representatives</u></h5>
                    <div class="row">
                        <div class="span6">
                            Veerendra Patel - 201213004
                            <br />
                            <strong>Phone: </strong> +91 8306506080
                            <br />
                            <strong>Email: </strong> 201213004[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Gunjan Pahuja - 201213003
                            <br />
                            <strong>Phone: </strong> +91 9712711855
                            <br />
                            <strong>Email: </strong> 201213003[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
                    <h5><u>M.Des in ARD 2012 Batch Representatives</u></h5>
                    <div class="row">
                        <div class="span6">
                            Nitish Sharma - 201214002
                            <br />
                            <strong>Phone: </strong> +91 8128753357
                            <br />
                            <strong>Email: </strong> 201214002[at]daiict[dot]ac[dot]in
                        </div>
                        <div class="span6">
                            Nupur Patel - 201214006
                            <br />
                            <strong>Phone: </strong> +91 9662510833
                            <br />
                            <strong>Email: </strong> 201214006[at]daiict[dot]ac[dot]in
                        </div>
                    </div>
                    <br />
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