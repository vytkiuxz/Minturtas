<?php

/* adminbase.html.twig */
class __TwigTemplate_c5524f5d7338b86c2607286d1fdfae75f5481c2544d95e383507caf173519fe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t<title>Brio Web App - Bootstrap Admin Template + AngularJS</title>

\t<meta name=\"description\" content=\"\">

\t<!-- Bootstrap core CSS -->
\t<link rel=\"stylesheet\" href=\"assets/css/bootstrap/bootstrap.css\" /> 

\t<!-- Calendar Styling  -->
    <link rel=\"stylesheet\" href=\"assets/css/plugins/calendar/calendar.css\" />
    
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel=\"stylesheet\" href=\"assets/css/app/app.v1.css\" />

\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
<body data-ng-app>

\t
    <!-- Preloader 
    <div class=\"loading-container\">
      <div class=\"loading\">
        <div class=\"l1\">
          <div></div>
        </div>
        <div class=\"l2\">
          <div></div>
        </div>
        <div class=\"l3\">
          <div></div>
        </div>
        <div class=\"l4\">
          <div></div>
        </div>
      </div>
    </div>
    <!-- Preloader -->
    \t
    
\t<aside class=\"left-panel\">
    \t\t
            <div class=\"user text-center\">
                  <img src=\"assets/images/avtar/user.png\" class=\"img-circle\" alt=\"...\">
                  <h4 class=\"user-name\">Akshay Kumar</h4>
                  
                  <div class=\"dropdown user-login\">
                  <button class=\"btn btn-xs dropdown-toggle btn-rounded\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                    <i class=\"fa fa-circle status-icon available\"></i> Available <i class=\"fa fa-angle-down\"></i>
                  </button>
                  <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
                    <li role=\"presentation\"><a role=\"menuitem\" href=\"#\"><i class=\"fa fa-circle status-icon busy\"></i> Busy</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" href=\"#\"><i class=\"fa fa-circle status-icon invisibled\"></i> Invisible</a></li>
                    <li role=\"presentation\"><a role=\"menuitem\" href=\"#\"><i class=\"fa fa-circle status-icon signout\"></i> Sign out</a></li>
                  </ul>
                  </div>\t 
            </div>
            
            
            
            <nav class=\"navigation\">
            \t<ul class=\"list-unstyled\">
                \t<li class=\"active\"><a href=\"#\"><i class=\"fa fa-bookmark-o\"></i><span class=\"nav-label\">Dashboard</span></a></li>
                    <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-comment-o\"></i> <span class=\"nav-label\">Widgets &amp; Apps</span></a>
                    \t<ul class=\"list-unstyled\">
                        \t<li><a href=\"email.html\">Email</a></li>
                            <li><a href=\"timeline.html\">Timeline</a></li>
                            <li><a href=\"calendar.html\">Calendar</a></li>
                            <li><a href=\"notes.html\">Notes</a></li>
                            <li><a href=\"file-browser.html\">File Browser</a></li>
                        </ul>
                    </li>
                    <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-flag-o\"></i> <span class=\"nav-label\">UI Elements</span></a>
                    \t<ul class=\"list-unstyled\">
                        \t<li><a href=\"uielements-general.html\">General Elements</a></li>
                            <li><a href=\"buttons.html\">Buttons</a></li>
                            <li><a href=\"icons.html\">Icons</a></li>
                            <li><a href=\"typography.html\">Typography</a></li>
                            <li><a href=\"grid.html\">Grid</a></li>
                            <li><a href=\"panels.html\">Panels</a></li>
                        </ul>
                    </li>
                    <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-file-text-o\"></i> <span class=\"nav-label\">Forms</span></a>
                    \t<ul class=\"list-unstyled\">
                        \t<li><a href=\"forms-element.html\">General Elements</a></li>
                            <li><a href=\"forms-validation.html\">Form Validation</a></li>
                            <li><a href=\"wysihtml.html\">Wysihtml</a></li>
                            <li><a href=\"file-upload.html\">File Upload</a></li>
                            <li><a href=\"image-crop.html\">Image Crop</a></li>
                        </ul>
                    </li>
                    <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i> <span class=\"nav-label\">Table &amp; Grid</span></a>
                    \t<ul class=\"list-unstyled\">
                        \t<li><a href=\"basic-tables.html\">Basic Tables</a></li>
                            <li><a href=\"data-tables.html\">Data Table</a></li>
                        </ul>
                    </li>
                    <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-code\"></i> <span class=\"nav-label\">Charts</span></a>
                    \t<ul class=\"list-unstyled\">
                        \t<li><a href=\"chart-variants.html\">Chart Variants</a></li>
                            <li><a href=\"gauges.html\">Gauges</a></li>
                            <li><a href=\"vector-maps.html\">Vector Maps</a></li>
                            <li><a href=\"range-selector.html\">Range Selector</a></li>
                        </ul>
                    </li>
                    <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-star-o\"></i> <span class=\"nav-label\">Plugins &amp; More</span></a>
                    \t<ul class=\"list-unstyled\">
                        \t<li><a href=\"404.html\">404 Page</a></li>
                        \t<li><a href=\"invoice.html\">Invoice</a></li>
                            <li><a href=\"elfinder.html\">File Manager</a></li>
                            <li><a href=\"google-maps.html\">Google Maps</a></li>
                            <li><a href=\"signin.html\">Signin</a></li>
                            <li><a href=\"signup.html\">Signup</a></li>
                            <li><a href=\"search.html\">Search</a></li>
                            <li><a href=\"full-screen.html\">Full Screen</a></li>
                            <li><a href=\"blank.html\">Blank Page</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </nav>
            
    </aside>
    <!-- Aside Ends-->
    
    <section class=\"content\">
    \t
        <header class=\"top-head container-fluid\">
            <button type=\"button\" class=\"navbar-toggle pull-left\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            
            <form role=\"search\" class=\"navbar-left app-search pull-left hidden-xs\">
              <input type=\"text\" placeholder=\"Enter keywords...\" class=\"form-control form-control-circle\">
         \t</form>
            
            <nav class=\" navbar-default hidden-xs\" role=\"navigation\">
                <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                  <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Dropdown <span class=\"caret\"></span></a>
                  <ul role=\"menu\" class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
            
            <ul class=\"nav-toolbar\">
            \t<li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-comments-o\"></i> <span class=\"badge bg-warning\">7</span></a>
                \t<div class=\"dropdown-menu md arrow pull-right panel panel-default arrow-top-right messages-dropdown\">
                        <div class=\"panel-heading\">
                      \tMessages
                        </div>
                        
                        <div class=\"list-group\">
                            
                            <a href=\"#\" class=\"list-group-item\">
                            <div class=\"media\">
                              <div class=\"user-status busy pull-left\">
                              <img class=\"media-object img-circle pull-left\" src=\"assets/images/avtar/user2.png\" alt=\"user#1\" width=\"40\">
                              </div>
                              <div class=\"media-body\">
                                <h5 class=\"media-heading\">Lorem ipsum dolor sit consect....</h5>
                                <small class=\"text-muted\">23 Sec ago</small>
                              </div>
                            </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                            <div class=\"media\">
                              <div class=\"user-status offline pull-left\">
                              <img class=\"media-object img-circle pull-left\" src=\"assets/images/avtar/user3.png\" alt=\"user#1\" width=\"40\">
                              </div>
                              <div class=\"media-body\">
                                <h5 class=\"media-heading\">Nunc elementum, enim vitae</h5>
                                <small class=\"text-muted\">23 Sec ago</small>
                              </div>
                            </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                            <div class=\"media\">
                              <div class=\"user-status invisibled pull-left\">
                              <img class=\"media-object img-circle pull-left\" src=\"assets/images/avtar/user4.png\" alt=\"user#1\" width=\"40\">
                              </div>
                              <div class=\"media-body\">
                                <h5 class=\"media-heading\">Praesent lacinia, arcu eget</h5>
                                <small class=\"text-muted\">23 Sec ago</small>
                              </div>
                            </div>
                            </a>
                            <a href=\"#\" class=\"list-group-item\">
                            <div class=\"media\">
                              <div class=\"user-status online pull-left\">
                              <img class=\"media-object img-circle pull-left\" src=\"assets/images/avtar/user5.png\" alt=\"user#1\" width=\"40\">
                              </div>
                              <div class=\"media-body\">
                                <h5 class=\"media-heading\">In mollis blandit tempor.</h5>
                                <small class=\"text-muted\">23 Sec ago</small>
                              </div>
                            </div>
                            </a>
                            
                            <a href=\"#\" class=\"btn btn-info btn-flat btn-block\">View All Messages</a>

                        </div>
                        
                    </div>
                </li>
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-bell-o\"></i><span class=\"badge\">3</span></a>
                \t<div class=\"dropdown-menu arrow pull-right md panel panel-default arrow-top-right notifications\">
                        <div class=\"panel-heading\">
                      \tNotification
                        </div>
                        
                        <div class=\"list-group\">
                            
                            <a href=\"#\" class=\"list-group-item\">
                            <p>Installing App v1.2.1<small class=\"pull-right text-muted\">45% Done</small></p>
                            <div class=\"progress progress-xs no-margn progress-striped active\">
                              <div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%\">
                                <span class=\"sr-only\">45% Complete</span>
                              </div>
                            </div>
                            </a>
                            
                            <a href=\"#\" class=\"list-group-item\">
                            Fusce dapibus molestie tincidunt. Quisque facilisis libero eget justo iaculis
                            </a>
                            
                            <a href=\"#\" class=\"list-group-item\">
                            <p>Server Status</p>
                            <div class=\"progress progress-xs no-margn\">
                              <div class=\"progress-bar progress-bar-success\" style=\"width: 35%\">
                                <span class=\"sr-only\">35% Complete (success)</span>
                              </div>
                              <div class=\"progress-bar progress-bar-warning\" style=\"width: 20%\">
                                <span class=\"sr-only\">20% Complete (warning)</span>
                              </div>
                              <div class=\"progress-bar progress-bar-danger\" style=\"width: 10%\">
                                <span class=\"sr-only\">10% Complete (danger)</span>
                              </div>
                            </div>
                            </a>
                            
                            
                            
                            <a href=\"#\" class=\"list-group-item\">
                            <div class=\"media\">
                              <span class=\"label label-danger media-object img-circle pull-left\">Danger</span>
                              <div class=\"media-body\">
                                <h5 class=\"media-heading\">Lorem ipsum dolor sit consect..</h5>
                              </div>
                            </div>
                            </a>
                            
                            
                            <a href=\"#\" class=\"list-group-item\">
                            <p>Server Status</p>
                            <div class=\"progress progress-xs no-margn\">
                              <div style=\"width: 60%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"60\" role=\"progressbar\" class=\"progress-bar progress-bar-info\">
                                <span class=\"sr-only\">60% Complete (warning)</span>
                              </div>
                            </div>
    \t\t\t\t\t\t</a>
                            

                        </div>
                        
                    </div>
                </li>
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-ellipsis-v\"></i></a>
                \t<div class=\"dropdown-menu lg pull-right arrow panel panel-default arrow-top-right\">
                    \t<div class=\"panel-heading\">
                        \tMore Apps
                        </div>
                        <div class=\"panel-body text-center\">
                        \t<div class=\"row\">
                            \t<div class=\"col-xs-6 col-sm-4\"><a href=\"#\" class=\"text-green\"><span class=\"h2\"><i class=\"fa fa-envelope-o\"></i></span><p class=\"text-gray no-margn\">Messages</p></a></div>
                                <div class=\"col-xs-6 col-sm-4\"><a href=\"#\" class=\"text-purple\"><span class=\"h2\"><i class=\"fa fa-calendar-o\"></i></span><p class=\"text-gray no-margn\">Events</p></a></div>
                                
                                <div class=\"col-xs-12 visible-xs-block\"><hr></div>
                                
                                <div class=\"col-xs-6 col-sm-4\"><a href=\"#\" class=\"text-red\"><span class=\"h2\"><i class=\"fa fa-comments-o\"></i></span><p class=\"text-gray no-margn\">Chatting</p></a></div>
                                
                                <div class=\"col-lg-12 col-md-12 col-sm-12  hidden-xs\"><hr></div>
                            
                            \t<div class=\"col-xs-6 col-sm-4\"><a href=\"#\" class=\"text-yellow\"><span class=\"h2\"><i class=\"fa fa-folder-open-o\"></i></span><p class=\"text-gray\">Folders</p></a></div>
                                
                                <div class=\"col-xs-12 visible-xs-block\"><hr></div>
                                
                                <div class=\"col-xs-6 col-sm-4\"><a href=\"#\" class=\"text-primary\"><span class=\"h2\"><i class=\"fa fa-flag-o\"></i></span><p class=\"text-gray\">Task</p></a></div>
                                <div class=\"col-xs-6 col-sm-4\"><a href=\"#\" class=\"text-info\"><span class=\"h2\"><i class=\"fa fa-star-o\"></i></span><p class=\"text-gray\">Favorites</p></a></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
        <!-- Header Ends -->
        
        
        <div class=\"warper container-fluid\">
        \t
            <!-- data goes here -->
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
        <footer class=\"container-fluid footer\">
        \tCopyright &copy; 2014 <a href=\"http://freakpixels.com/\" target=\"_blank\">FreakPixels</a>
            <a href=\"#\" class=\"pull-right scrollToTop\"><i class=\"fa fa-chevron-up\"></i></a>
        </footer>
        
    
    </section>
    <!-- Content Block Ends Here (right box)-->
    
    
    <!-- JQuery v1.9.1 -->
\t<script src=\"assets/js/jquery/jquery-1.9.1.min.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/plugins/underscore/underscore-min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"assets/js/bootstrap/bootstrap.min.js\"></script>
    
    <!-- Globalize -->
    <script src=\"assets/js/globalize/globalize.min.js\"></script>
    
    <!-- NanoScroll -->
    <script src=\"assets/js/plugins/nicescroll/jquery.nicescroll.min.js\"></script>
    
    <!-- Chart JS -->
    <script src=\"assets/js/plugins/DevExpressChartJS/dx.chartjs.js\"></script>
    <script src=\"assets/js/plugins/DevExpressChartJS/world.js\"></script>
   \t<!-- For Demo Charts -->
    <script src=\"assets/js/plugins/DevExpressChartJS/demo-charts.js\"></script>
    <script src=\"assets/js/plugins/DevExpressChartJS/demo-vectorMap.js\"></script>
    
    <!-- Sparkline JS -->
    <script src=\"assets/js/plugins/sparkline/jquery.sparkline.min.js\"></script>
    <!-- For Demo Sparkline -->
    <script src=\"assets/js/plugins/sparkline/jquery.sparkline.demo.js\"></script>
    
    <!-- Angular JS -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js\"></script>
    <!-- ToDo List Plugin -->
    <script src=\"assets/js/angular/todo.js\"></script>
    
    
    
    <!-- Calendar JS -->
    <script src=\"assets/js/plugins/calendar/calendar.js\"></script>
    <!-- Calendar Conf -->
    <script src=\"assets/js/plugins/calendar/calendar-conf.js\"></script>
\t
    
    
    <!-- Custom JQuery -->
\t<script src=\"assets/js/app/custom.js\" type=\"text/javascript\"></script>
    

    
\t<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-56821827-1', 'auto');
    ga('send', 'pageview');
    
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}