<?php

/* administrator/menu.html.twig */
class __TwigTemplate_a579f811382a713a6869bd38454be575429edd386ec48b665aa5c48e494d0ebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menu', $context, $blocks);
        // line 65
        echo " ";
    }

    // line 1
    public function block_menu($context, array $blocks = array())
    {
        // line 2
        echo "<nav class=\"navigation\">
    <ul class=\"list-unstyled\">
        <li class=\"active\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "administrator/home/dashboard\"><i class=\"fa fa-bookmark-o\"></i><span class=\"nav-label\">Valdymo skydas</span></a></li>
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "administrator/properties/showlist\"><i class=\"fa fa-building-o\"></i><span class=\"nav-label\">Skelbimai</span></a></li>
        <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-comment-o\"></i> <span class=\"nav-label\">Widgets &amp; Apps</span></a>
            <ul class=\"list-unstyled\">
                    <li><a href=\"email.html\">Email</a></li>
                <li><a href=\"timeline.html\">Timeline</a></li>
                <li><a href=\"calendar.html\">Calendar</a></li>
                <li><a href=\"notes.html\">Notes</a></li>
                <li><a href=\"file-browser.html\">File Browser</a></li>
            </ul>
        </li>
        <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-flag-o\"></i> <span class=\"nav-label\">UI Elements</span></a>
            <ul class=\"list-unstyled\">
                    <li><a href=\"uielements-general.html\">General Elements</a></li>
                <li><a href=\"buttons.html\">Buttons</a></li>
                <li><a href=\"icons.html\">Icons</a></li>
                <li><a href=\"typography.html\">Typography</a></li>
                <li><a href=\"grid.html\">Grid</a></li>
                <li><a href=\"panels.html\">Panels</a></li>
            </ul>
        </li>
        <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-file-text-o\"></i> <span class=\"nav-label\">Forms</span></a>
            <ul class=\"list-unstyled\">
                    <li><a href=\"forms-element.html\">General Elements</a></li>
                <li><a href=\"forms-validation.html\">Form Validation</a></li>
                <li><a href=\"wysihtml.html\">Wysihtml</a></li>
                <li><a href=\"file-upload.html\">File Upload</a></li>
                <li><a href=\"image-crop.html\">Image Crop</a></li>
            </ul>
        </li>
        <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-heart-o\"></i> <span class=\"nav-label\">Table &amp; Grid</span></a>
            <ul class=\"list-unstyled\">
                    <li><a href=\"basic-tables.html\">Basic Tables</a></li>
                <li><a href=\"data-tables.html\">Data Table</a></li>
            </ul>
        </li>
        <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-code\"></i> <span class=\"nav-label\">Charts</span></a>
            <ul class=\"list-unstyled\">
                    <li><a href=\"chart-variants.html\">Chart Variants</a></li>
                <li><a href=\"gauges.html\">Gauges</a></li>
                <li><a href=\"vector-maps.html\">Vector Maps</a></li>
                <li><a href=\"range-selector.html\">Range Selector</a></li>
            </ul>
        </li>
        <li class=\"has-submenu\"><a href=\"#\"><i class=\"fa fa-star-o\"></i> <span class=\"nav-label\">Plugins &amp; More</span></a>
            <ul class=\"list-unstyled\">
                    <li><a href=\"404.html\">404 Page</a></li>
                    <li><a href=\"invoice.html\">Invoice</a></li>
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
    
";
    }

    public function getTemplateName()
    {
        return "administrator/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  26 => 1,  22 => 65,  20 => 1,  447 => 263,  444 => 262,  437 => 70,  434 => 69,  419 => 319,  411 => 314,  406 => 312,  398 => 307,  390 => 302,  385 => 300,  379 => 297,  375 => 296,  370 => 294,  366 => 293,  360 => 290,  354 => 287,  348 => 284,  343 => 282,  339 => 281,  319 => 263,  317 => 262,  282 => 230,  202 => 153,  188 => 142,  174 => 131,  160 => 120,  110 => 72,  108 => 69,  97 => 61,  91 => 60,  52 => 24,  43 => 18,  37 => 5,  21 => 1,);
    }
}
