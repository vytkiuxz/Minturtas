<?php

/* administrator/base.html.twig */
class __TwigTemplate_c01355647715676fb61eab439b90cc889fc05e40c542b3be2ad99ed3c693ebab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
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
    <!-- JQuery v1.9.1 -->
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery/jquery-1.9.1.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/underscore/underscore-min.js\"></script>
    
\t<title>Minturtas Administrator</title>

\t<meta name=\"description\" content=\"\">

\t<!-- Bootstrap core CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap/bootstrap.css\" /> 

\t<!-- Calendar Styling  -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/plugins/calendar/calendar.css\" />

        <!-- Fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

        <!-- Base Styling  -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/app/app.v1.css\" />

        <!-- DateTime Picker  -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css\" />

        <!-- Bootstrap Validator  -->
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap-validator/bootstrap-validator.css\" />
        
        <!-- Switch Buttons  -->
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/switch-buttons/switch-buttons.css\" />
         
        
    

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
                  <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avtar/";
        echo twig_escape_filter($this->env, (isset($context["user_img"]) ? $context["user_img"] : null), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"...\">
                  <h4 class=\"user-name\">";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["user_name"]) ? $context["user_name"] : null), "html", null, true);
        echo "</h4>
                  
                  <div class=\"dropdown user-login\">
                  </div>\t 
            </div>
            
            
            <!-- menu -->
            ";
        // line 84
        $this->displayBlock('menu', $context, $blocks);
        // line 87
        echo "            
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
                              <img class=\"media-object img-circle pull-left\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avtar/user2.png\" alt=\"user#1\" width=\"40\">
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
                              <img class=\"media-object img-circle pull-left\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avtar/user3.png\" alt=\"user#1\" width=\"40\">
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
                              <img class=\"media-object img-circle pull-left\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avtar/user4.png\" alt=\"user#1\" width=\"40\">
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
                              <img class=\"media-object img-circle pull-left\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/images/avtar/user5.png\" alt=\"user#1\" width=\"40\">
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
                <li class=\"dropdown\"><a href=\"";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["logout_url"]) ? $context["logout_url"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i></a>
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
        ";
        // line 277
        $this->displayBlock('main', $context, $blocks);
        // line 278
        echo "    
            <!-- data goes here -->
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
        <footer class=\"container-fluid footer\">
        \tCopyright &copy; 2015 <a href=\"http://www.minturtas.lt/\" target=\"_blank\">Minturtas</a>
            <a href=\"#\" class=\"pull-right scrollToTop\"><i class=\"fa fa-chevron-up\"></i></a>
        </footer>
        
    
    </section>
    <!-- Content Block Ends Here (right box)-->
    
    
    <!-- Bootstrap -->
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap/bootstrap.min.js\"></script>
    
    <!-- Globalize -->
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/globalize/globalize.min.js\"></script>
    
    <!-- NanoScroll -->
    <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/nicescroll/jquery.nicescroll.min.js\"></script>
    
    <!-- Chart JS -->
    <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/DevExpressChartJS/dx.chartjs.js\"></script>
    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/DevExpressChartJS/world.js\"></script>
   \t<!-- For Demo Charts -->
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/DevExpressChartJS/demo-charts.js\"></script>
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/DevExpressChartJS/demo-vectorMap.js\"></script>
    
    <!-- Sparkline JS -->
    <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/sparkline/jquery.sparkline.min.js\"></script>
    <!-- For Demo Sparkline -->
    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/sparkline/jquery.sparkline.demo.js\"></script>
    
    <!-- Angular JS -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js\"></script>
    <!-- ToDo List Plugin -->
    <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/angular/todo.js\"></script>
    
    
    
    <!-- Calendar JS -->
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/calendar/calendar.js\"></script>
    <!-- Calendar Conf -->
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/calendar/calendar-conf.js\"></script>

     <!-- moment -->
    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/moment/moment.js\"></script>
    
    <!-- DateTime Picker -->
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js\"></script>
    
\t<!-- Bootstrap Validator -->
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/bootstrap-validator/bootstrapValidator.min.js\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/bootstrap-validator/bootstrapValidator-conf.js\"></script>
    
    <!-- Custom JQuery -->
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/app/custom.js\" type=\"text/javascript\"></script>
    
    <!-- TagsInput -->
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js\"></script>
    
    <!-- Data Table -->
    <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/datatables/jquery.dataTables.js\"></script>
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/datatables/DT_bootstrap.js\"></script>
    <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/datatables/jquery.dataTables-conf.js\"></script>
    
    <!-- ckeditor -->
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/ckeditor/ckeditor.js\"></script>
    <script src=\"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/ckeditor/adapters/jquery.js\"></script>
    
    <!-- InputMask -->
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/inputmask/jquery.inputmask.bundle.js\"></script>
    
    <script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?v=3&#038;sensor=true&#038;ver=3.6'></script>
    <script type='text/javascript' src='";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/aviators-map.js'></script>
    <script type='text/javascript' src='";
        // line 358
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/gmap3.infobox.min.js'></script>
    <script type='text/javascript' src='";
        // line 359
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/retina.js'></script>
    <script type='text/javascript' src='";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/gmap3.clusterer.js'></script>
    <script type='text/javascript' src='";
        // line 362
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.ezmark.js'></script>
    <script type='text/javascript' src='";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/carousel.js'></script>
    <script type='text/javascript' src='";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.bxslider.js'></script>
    <script type='text/javascript' src='";
        // line 365
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/properta.js'></script>
    <script type='text/javascript' src='";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.bxslider.min.js'></script>
    <script type='text/javascript' src='";
        // line 367
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.tinysort.min.js'></script>
    <script type='text/javascript' src='";
        // line 368
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/functions.js'></script>
</body>
</html>
";
    }

    // line 84
    public function block_menu($context, array $blocks = array())
    {
        // line 85
        echo "            ";
        $this->env->loadTemplate("administrator/menu.html.twig")->display($context);
        echo "    
            ";
    }

    // line 277
    public function block_main($context, array $blocks = array())
    {
        // line 278
        echo "        ";
    }

    public function getTemplateName()
    {
        return "administrator/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 278,  564 => 277,  557 => 85,  554 => 84,  546 => 368,  542 => 367,  538 => 366,  534 => 365,  530 => 364,  526 => 363,  522 => 362,  518 => 361,  514 => 360,  510 => 359,  506 => 358,  502 => 357,  496 => 354,  490 => 351,  486 => 350,  480 => 347,  476 => 346,  472 => 345,  466 => 342,  460 => 339,  454 => 336,  450 => 335,  444 => 332,  438 => 329,  432 => 326,  427 => 324,  419 => 319,  411 => 314,  406 => 312,  400 => 309,  396 => 308,  391 => 306,  387 => 305,  381 => 302,  375 => 299,  369 => 296,  349 => 278,  347 => 277,  312 => 245,  232 => 168,  218 => 157,  204 => 146,  190 => 135,  140 => 87,  138 => 84,  127 => 76,  121 => 75,  79 => 36,  73 => 33,  67 => 30,  61 => 27,  52 => 21,  46 => 18,  36 => 11,  32 => 10,  21 => 1,);
    }
}
