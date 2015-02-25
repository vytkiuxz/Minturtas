<?php

/* administrator/signin.html.twig */
class __TwigTemplate_6277899bbdef55a230e4204fb002457f155fda076214de63adb2d7d7a3ce4d7c extends Twig_Template
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

\t<title>Minturtas Administrator</title>

\t<meta name=\"description\" content=\"\">

\t<!-- Bootstrap core CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/bootstrap/bootstrap.css\" /> 

    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/app/app.v1.css\" />

\t<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
<body>\t
    
\t
    <div class=\"container\">
    \t<div class=\"row\">
    \t<div class=\"col-lg-4 col-lg-offset-4\">
        \t<h3 class=\"text-center\">Minturtas Administrator</h3>
            <p class=\"text-center\">Prisijungimas</p>
            <hr class=\"clean\">
            <!-- error handling -->
            ";
        // line 41
        if (array_key_exists("error", $context)) {
            // line 42
            echo "            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Uždaryti</span></button>
              <strong>Klaida!</strong> ";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
            echo " 
            </div>
            ";
        }
        // line 47
        echo "            <!-- end of error handling -->
            
        \t<form method=\"post\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["form_url"]) ? $context["form_url"] : null), "html", null, true);
        echo "\" name=\"login_form\" class=\"login_form\">
              <div class=\"form-group input-group\">
              \t<span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"Vartotojo vardas\">
              </div>
              <div class=\"form-group input-group\">
              \t<span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
                <input type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Slaptažodis\">
              </div>
              <div class=\"form-group\">
                <label class=\"cr-styled\">
                    <input type=\"checkbox\" ng-model=\"todo.done\">
                    <i class=\"fa\"></i> 
                </label>
                Prisiminti
              </div>
        \t  <button type=\"submit\" class=\"btn btn-purple btn-block\">Prisijungti</button>
            </form>
            <hr>
        </div>
        </div>
    </div>
    
    
    
    <!-- JQuery v1.9.1 -->
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery/jquery-1.9.1.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/underscore/underscore-min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap/bootstrap.min.js\"></script>
    
    <!-- Globalize -->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/globalize/globalize.min.js\"></script>
    
    <!-- NanoScroll -->
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/plugins/nicescroll/jquery.nicescroll.min.js\"></script>
    
\t
    
    
    <!-- Custom JQuery -->
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/app/custom.js\" type=\"text/javascript\"></script>
    

    
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
        return "administrator/signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 90,  133 => 84,  127 => 81,  121 => 78,  116 => 76,  112 => 75,  83 => 49,  79 => 47,  73 => 44,  69 => 42,  67 => 41,  44 => 21,  35 => 15,  19 => 1,);
    }
}
