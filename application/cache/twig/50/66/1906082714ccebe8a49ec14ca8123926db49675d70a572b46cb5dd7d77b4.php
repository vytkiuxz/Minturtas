<?php

/* base.html.twig */
class __TwigTemplate_50661906082714ccebe8a49ec14ca8123926db49675d70a572b46cb5dd7d77b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'sidebar_block1' => array($this, 'block_sidebar_block1'),
            'most_recent_property' => array($this, 'block_most_recent_property'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--[if IE 7]>
<html class=\"ie ie7\" lang=\"en-US\">
<![endif]-->
<!--[if IE 8]>
<html class=\"ie ie8\" lang=\"en-US\">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang=\"en-US\">
<!--<![endif]-->

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/favicon.png\" type=\"image/png\">

    <!--[if lt IE 9]>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/html5.js\" type=\"text/javascript\"></script>
    <![endif]-->

    <meta name='robots' content='noindex,nofollow'/>

    <link rel='stylesheet' id='font-css'
          href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C300&#038;subset=latin%2Clatin-ext&#038;ver=3.6'
          type='text/css' media='all'/>


    <link rel='stylesheet' id='revolution-fullwidth' href='";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/rs-plugin/css/fullwidth.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='revolution-settings' href='";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/rs-plugin/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css' href='";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/bootstrap/css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-responsive-css' href='";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='pictopro-normal-css' href='";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/icons/pictopro-normal/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='justvector-web-font-css' href='";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/icons/justvector-web-font/stylesheet.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='chosen-css' href='";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/chosen/chosen.css' type='text/css' media='all'/>
\t
    <link rel='stylesheet' id='aviators-css' href='";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/jquery.bxslider.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='properta-css' href='";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/css/properta.css' type='text/css' media='all'/>
\t
\t<link rel='stylesheet' id='chosen-css' href='";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/fancybox/jquery.fancybox-1.3.4.css' type='text/css' media='all'/>

    <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
    <script type='text/javascript' src='";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/aviators-settings.js'></script>
    <script type='text/javascript' src='";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/chosen/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/rs-plugin/js/jquery.themepunch.plugins.min.js'></script>
\t
    <script type='text/javascript' src='";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/libraries/fancybox/jquery.fancybox.pack.js'></script>

    <title>Properta | Real Estate Template</title>
</head>

<body class=\"home page page-template\">

<div class=\"top\">
    <div class=\"container\">
        <div class=\"top-inner inverted\">
            <div class=\"header clearfix\">
\t\t\t";
        // line 98
        echo "
                <div class=\"branding pull-left\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\" title=\"Pradžia\">
                            <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/logo.png\" alt=\"Pradžia\">
                        </a>
                    </div>
                    <!-- /.logo -->

                    <div class=\"site-name\">
                        <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\" title=\"Pradžia\" class=\"brand\">
                            Minturtas
                        </a>
                    </div>
                    <!-- /.site-name -->
                </div>

                <div class=\"contact-top\">
                    <ul class=\"menu nav\">
                        <li class=\"first leaf facebook\">
                            <a href=\"http://www.facebook.com\" class=\"facebook\"><i>F</i></a>
                        </li>

                        <li class=\"leaf flickr\"><a href=\"http://www.flickr.com\" class=\"flickr\"><i>n</i></a></li>

                        <li class=\"leaf google-plus\"><a href=\"http://plus.google.com\" class=\"google\"><i>g</i></a></li>

                        <li class=\"leaf linkedin\"><a href=\"htp://linkedin.com\" class=\"linkedin\"><i>l</i></a></li>

                        <li class=\"leaf twitter\"><a href=\"http://www.twitter.com\" class=\"twitter\"><i>T</i></a></li>

                        <li class=\"last leaf vimeo\"><a href=\"http://vimeo.com\" class=\"vimeo\"><i>v</i></a></li>
                    </ul>
                </div>
                <!--    
                <div class=\"user-area pull-right\">
                    <div class=\"menu-anonymous-container\">
                        <ul id=\"menu-anonymous\" class=\"nav nav-pills\">
                            <li class=\"menu-item\"><a href=\"register.html\">Register</a></li>
                            <li class=\"menu-item\"><a href=\"login.html\">Login</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.user-area -->
            </div>
            <!-- /.header -->
 
<!-- insert menu -->
    ";
        // line 146
        $this->displayBlock('menu', $context, $blocks);
        // line 148
        echo "            

<div class=\"breadcrumb pull-left\">
    <!-- Breadcrumb NavXT 4.4.0 -->
    <a title=\"Go to Properta.\" href=\"default.htm\" class=\"home\">Properta</a> &gt; Page
</div>

<!-- /.breadcrumb -->
</div>
</div>
</div>

<div id=\"content\" class=\"clearfix\">
<!-- /.map-wrapper -->
<div class=\"container\">
<div class=\"row\">

<div class=\"sidebar span3\">
";
        // line 166
        $this->displayBlock('sidebar_block1', $context, $blocks);
        // line 169
        echo "
    <h2>Paieška</h2>

<div class=\"property-filter widget\">
    <div class=\"content\">
        <form method=\"get\" action=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["form_url"]) ? $context["form_url"] : null), "html", null, true);
        echo "\" name=\"search_form\" class=\"search_form\">
            <div class=\"location control-group\">
                <label class=\"control-label\">
                    Miestas
                </label>

                <div class=\"controls\">
                    <select name=\"filter_location\">
\t\t\t\t\t\t<option value=\"\">-</option>
\t\t\t\t\t\t";
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 184
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "location_id", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "location_id") == $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "id")))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"type control-group\">
                <label class=\"control-label\">
                    Tipas
                </label>

                <div class=\"controls\">
                    <select name=\"filter_type\">
                        <option value=\"\">-</option>
                        ";
        // line 200
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 201
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "type_id", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "type_id") == $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id")))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->


            <div class=\"rent control-group\">
                <div class=\"controls\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" value=\"1\" ";
        // line 213
        if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "rent", array(), "any", true, true)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"filter_rent\"> Nuomoja
                    </label>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"sale control-group\">
                <div class=\"controls\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" value=\"1\" ";
        // line 223
        if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "sale", array(), "any", true, true)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"filter_sale\"> Parduoda
                    </label>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"price-from control-group\">
                <label class=\"control-label\">
                    Kaina nuo
                </label>

                <div class=\"controls\">
                    <select name=\"filter_price_from\">
                        <option value=\"\">-</option>
                        <option value=\"5000\" ";
        // line 238
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from") == 5000))) {
            echo " selected=\"selected\" ";
        }
        echo ">5,000 €</option>
                        <option value=\"20000\" ";
        // line 239
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from") == 20000))) {
            echo " selected=\"selected\" ";
        }
        echo ">20,000 €</option>
                        <option value=\"50000\" ";
        // line 240
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from") == 50000))) {
            echo " selected=\"selected\" ";
        }
        echo ">50,000 €</option>
                        <option value=\"100000\" ";
        // line 241
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from") == 100000))) {
            echo " selected=\"selected\" ";
        }
        echo ">100,000 €</option>
\t\t\t\t        <option value=\"200000\" ";
        // line 242
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from") == 200000))) {
            echo " selected=\"selected\" ";
        }
        echo ">200,000 €</option>
                        <option value=\"500000\" ";
        // line 243
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_from") == 500000))) {
            echo " selected=\"selected\" ";
        }
        echo ">500,000 €</option>
                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"price-to control-group\">
                <label class=\"control-label\">
                    Kaina iki
                </label>

                <div class=\"controls\">
                    <select name=\"filter_price_to\">
                        <option value=\"\">-</option>
                        <option value=\"5000\" ";
        // line 258
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to") == 5000))) {
            echo " selected=\"selected\" ";
        }
        echo ">5,000 €</option>
                        <option value=\"20000\" ";
        // line 259
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to") == 20000))) {
            echo " selected=\"selected\" ";
        }
        echo ">20,000 €</option>
                        <option value=\"50000\" ";
        // line 260
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to") == 50000))) {
            echo " selected=\"selected\" ";
        }
        echo ">50,000 €</option>
                        <option value=\"100000\" ";
        // line 261
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to") == 100000))) {
            echo " selected=\"selected\" ";
        }
        echo ">100,000 €</option>
\t\t\t\t        <option value=\"200000\" ";
        // line 262
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to") == 200000))) {
            echo " selected=\"selected\" ";
        }
        echo ">200,000 €</option>
                        <option value=\"500000\" ";
        // line 263
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to", array(), "any", true, true) && ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "price_to") == 500000))) {
            echo " selected=\"selected\" ";
        }
        echo ">500,000 €</option>
                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"area-from control-group\">
                <label class=\"control-label\">
                    Plotas nuo
                </label>

                <div class=\"controls\">
                    <input type=\"text\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "area_from"), "html", null, true);
        echo "\" name=\"filter_area_from\">
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"area-to control-group\">
                <label class=\"control-label\">
                    Plotas iki
                </label>

                <div class=\"controls\">
                    <input type=\"text\" value=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "area_to"), "html", null, true);
        echo "\" name=\"filter_area_to\">
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"form-actions\">
                <button class=\"btn btn-primary btn-large\">Ieškoti</button>
            </div>
\t\t\t
\t\t\t<input class=\"sort_dir\" type=\"hidden\" name=\"sort_dir\"/>
\t\t\t<input class=\"sort_by\" type=\"hidden\" name=\"sort_by\"/>
            <!-- /.form-actions -->
        </form>
    </div>
    <!-- /.content -->
</div><!-- /.property-filter -->    <div id=\"partners_widget-2\" class=\"widget partners\">

    <h2>Partners</h2>

    <div class=\"partners\">
        <div class=\"row\">
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"http://www.facebook.com\">
                        <img width=\"270\" height=\"70\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/partners/themeforest.png\"
                             class=\"thumbnail-image\" alt=\"themeforest\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.partners -->
</div>    <div id=\"mostrecentproperties_widget-2\" class=\"widget properties\">
    ";
        // line 324
        $this->displayBlock('most_recent_property', $context, $blocks);
        // line 327
        echo "    <!-- /.content -->

</div>    <div id=\"agencies_widget-2\" class=\"widget agencies\">

    <h2>Agencies</h2>

    <div class=\"content\">
        <div class=\"agency clearfix\">
            <div class=\"header\">
                <div class=\"image\">
                    <a href=\"agencies/agency-detail.html\">
                        <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/agency-small-tmp.png\" alt=\"Beverly Hills Real Estate\">
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"info\">
                    <h2>Beverly Hills Real Estate</h2>

                    <div class=\"properties-count\">
                        <span class=\"number\">2</span> properties
                    </div>
                    <!-- /.properties-count -->

                    <a href=\"default.htm\" class=\"btn\">View profile</a>
                </div>
                <!-- /.info -->
            </div>
            <!-- /.header -->

            <div class=\"address\">
                4265 Broadway Avenue<br/>
                Johnson City, TN 37601
            </div>
            <!-- /.address -->

            <div class=\"email\">
                <a href=\"mailto:sample@example.com\">sample@example.com</a>
            </div>
            <!-- /.email -->

            <div class=\"phone\">
                (401) 852-987
            </div>
            <!-- /.phone -->

        </div>
        <!-- /.agency -->
        <div class=\"agency clearfix\">
            <div class=\"header\">
                <div class=\"image\">
                    <a href=\"agencies/agency-detail.html\">
                        <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/agency-small-tmp.png\" alt=\"Colombia Real Estate\">
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"info\">
                    <h2>Colombia Real Estate</h2>

                    <div class=\"properties-count\">
                        <span class=\"number\">6</span> properties
                    </div>
                    <!-- /.properties-count -->

                    <a href=\"default.htm\" class=\"btn\">View profile</a>
                </div>
                <!-- /.info -->
            </div>
            <!-- /.header -->

            <div class=\"address\">
                485 Shinn Avenue<br/>
                Pittsburgh, PA 15222
            </div>
            <!-- /.address -->

            <div class=\"email\">
                <a href=\"mailto:sample@example.com\">sample@example.com</a>
            </div>
            <!-- /.email -->

            <div class=\"phone\">
                (401) 458-965
            </div>
            <!-- /.phone -->

        </div>
        <!-- /.agency -->
    </div>
    <!-- /.content -->

</div></div>
<!-- /#sidebar -->


";
        // line 423
        $this->displayBlock('main', $context, $blocks);
        // line 426
        echo "<!-- /#main -->


<!-- /.row -->
</div>
<!-- /.container -->

</div>
</div>
<!-- /#content -->
<div id=\"footer-wrapper\">

<div id=\"footer-top\">
<div id=\"footer-top-inner\" class=\"container\">
<div class=\"row\">
<div class=\"span3\">
    <div id=\"mostrecentproperties_widget-3\" class=\"widget properties\">
        <h2>Most Recent Properties</h2>

        <div class=\"content\">
            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"";
        // line 449
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/19.jpg\"
                             class=\"thumbnail-image \" alt=\"19\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"property-detail.html\">
                                643 37th Ave
                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">Burrville</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        Contact us
                    </div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    800m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    2
                </div>
                <!-- /.bedrooms -->

            </div>
            <!-- /.info -->
            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"";
        // line 493
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/20.jpg\"
                             class=\"thumbnail-image \" alt=\"20\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"property-detail.html\">
                                2459 Tilden St
                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">Judiciary Square</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        500 € <span class=\"suffix\">/ per month</span></div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    1030m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    12
                </div>
                <!-- /.bedrooms -->

                <div class=\"bathrooms\">
                    <i class=\"icon icon-normal-shower\"></i>
                    6
                </div>
                <!-- /.bathrooms -->
            </div>
            <!-- /.info -->
            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"";
        // line 541
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/17.jpg\"
                             class=\"thumbnail-image \" alt=\"17\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"property-detail.html\">
                                677 Cottage Terrace
                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">Spring Valley</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        59,600 €
                    </div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    650m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    1
                </div>
                <!-- /.bedrooms -->

                <div class=\"bathrooms\">
                    <i class=\"icon icon-normal-shower\"></i>
                    1
                </div>
                <!-- /.bathrooms -->
            </div>
            <!-- /.info -->
        </div>
        <!-- /.content -->

    </div>
</div>

<div class=\"span3\">
    <div id=\"nav_menu-2\" class=\"widget widget-nav_menu\"><h2>Helpful Links</h2>

        <div class=\"menu-helpful-links-container\">
            <ul id=\"menu-helpful-links\" class=\"menu\">
                <li class=\"menu-item\"><a
                      href=\"templates/default-left.html\">Default Template</a></li>
                <li class=\"menu-item\"><a
                      href=\"templates/default-right.html\">Right Sidebar Template</a></li>
                <li class=\"menu-item\"><a
                      href=\"templates/default-full.html\">Fullwidth Template</a></li>
                <li class=\"menu-item\"><a
                      href=\"properties\">Properties Grid Template</a></li>
                <li class=\"menu-item\"><a
                      href=\"faq.html\">FAQ</a></li>
                <li class=\"menu-item\"><a
                      href=\"404.html\">404 page</a></li>
                <li class=\"menu-item\"><a
                      href=\"login.html\">Login Template</a></li>
                <li class=\"menu-item\"><a
                      href=\"register.html\">Register Template</a></li>
            </ul>
        </div>
    </div>
</div>

<div class=\"span3\">
    <div id=\"agents_widget-2\" class=\"widget our-agents\">

        <h2>Agents</h2>

        <div class=\"content\">
            <div class=\"agent clearfix\">
                <div class=\"image\">
                    <a href=\"agents/agent-detail.html\">
                        <img src=\"";
        // line 628
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/agents/2.jpg\" alt=\"Cynthia G. Stenson\">
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"name\">
                    <a href=\"agents/agent-detail.html\">Cynthia G. Stenson</a>
                </div>
                <!-- /.name -->

                <div class=\"phone\">
                    <i class=\"icon icon-normal-phone\"></i>
                    985-632-254
                </div>
                <!-- /.phone -->

                <div class=\"email\">
                    <i class=\"icon icon-normal-mail\"></i>
                    <a href=\"mailto:cynthia@example.com\">cynthia@example.com</a>
                </div>
                <!-- /.email -->
            </div>
            <!-- /.agent -->
            <div class=\"agent clearfix\">
                <div class=\"image\">
                    <a href=\"agents/agent-detail.html\">
                        <img src=\"";
        // line 654
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/agents/1.jpg\" alt=\"Stephen E. Kennedy\">
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"name\">
                    <a href=\"agents/agent-detail.html\">Stephen E. Kennedy</a>
                </div>
                <!-- /.name -->

                <div class=\"phone\">
                    <i class=\"icon icon-normal-phone\"></i>
                    987-852-123
                </div>
                <!-- /.phone -->

                <div class=\"email\">
                    <i class=\"icon icon-normal-mail\"></i>
                    <a href=\"mailto:stephen@example.com\">stephen@example.com</a>
                </div>
                <!-- /.email -->
            </div>
            <!-- /.agent -->
            <div class=\"agent clearfix\">
                <div class=\"image\">
                    <a href=\"agents/agent-detail.html\">
                        <img src=\"";
        // line 680
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/agents/2.jpg\" alt=\"Myrtle J. Metz\">
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"name\">
                    <a href=\"agents/agent-detail.html\">Myrtle J. Metz</a>
                </div>
                <!-- /.name -->

                <div class=\"phone\">
                    <i class=\"icon icon-normal-phone\"></i>
                    987-963-654
                </div>
                <!-- /.phone -->

                <div class=\"email\">
                    <i class=\"icon icon-normal-mail\"></i>
                    <a href=\"mailto:myrtle@example.com\">myrtle@example.com</a>
                </div>
                <!-- /.email -->
            </div>
            <!-- /.agent -->
        </div>
        <!-- /.content -->

    </div>
</div>

<div class=\"span3\">
    <div id=\"featuredproperties_widget-2\" class=\"widget properties\">

        <h2>Featured Properties</h2>

        <div class=\"content\">
            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"";
        // line 718
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/1.jpg\"
                             class=\"thumbnail-image \" alt=\"1\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"property-detail.html\">
                                20th St NE
                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">Benning</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        85,600 €
                    </div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    450m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    1
                </div>
                <!-- /.bedrooms -->

                <div class=\"bathrooms\">
                    <i class=\"icon icon-normal-shower\"></i>
                    2
                </div>
                <!-- /.bathrooms -->
            </div>
            <!-- /.info -->
            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"";
        // line 767
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/12.jpg\"
                             class=\"thumbnail-image \" alt=\"12\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"property-detail.html\">
                                246 Varnum Pl NE
                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">Kingman Park</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        32,500 €
                    </div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    500m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    2
                </div>
                <!-- /.bedrooms -->

                <div class=\"bathrooms\">
                    <i class=\"icon icon-normal-shower\"></i>
                    3
                </div>
                <!-- /.bathrooms -->
            </div>
            <!-- /.info -->
            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"";
        // line 816
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/6.jpg\"
                             class=\"thumbnail-image \" alt=\"6\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"property-detail.html\">
                                Randolph St NW
                            </a></h3>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">Civic Betterment</div>
                    <!-- /.location -->

                    <div class=\"price\">
                        97,400 €
                    </div>
                    <!-- /.price -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    680m<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    3
                </div>
                <!-- /.bedrooms -->

                <div class=\"bathrooms\">
                    <i class=\"icon icon-normal-shower\"></i>
                    2
                </div>
                <!-- /.bathrooms -->
            </div>
            <!-- /.info -->
        </div>
        <!-- /.content -->

    </div>
</div>
</div>
<!-- /.row -->
</div>
<!-- /#footer-top-inner -->
</div>
<!-- /#footer-top -->

<div class=\"footer-bottom\">
    <div id=\"footer\" class=\"footer container\">
        <div id=\"footer-inner\">
            <div class=\"row\">
                <div class=\"span6\">
                    <div id=\"text-3\" class=\"widget widget-text\">
                        <div class=\"textwidget\">&copy; 2013 Aviators, All Rights reserved</div>
                    </div>
                </div>
                <!-- /.copyright -->

                <div class=\"span6\">
                    <div id=\"nav_menu-3\" class=\"widget widget-nav_menu\">
                        <div class=\"menu-footer-links-container\">
                            <ul id=\"menu-footer-links\" class=\"menu\">
                                <li class=\"menu-item active\"><a href=\"default.htm\">Homepage</a></li>
                                <li class=\"menu-item\"><a href=\"pricing.html\">Pricing</a></li>
                                <li class=\"menu-item\"><a href=\"faq.html\">FAQ</a></li>
                                <li class=\"menu-item\"><a href=\"contact.html\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.span6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#footer-inner -->
    </div>
    <!-- /#footer -->
</div>
</div>
<!-- /#footer-wrapper -->
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?v=3&#038;sensor=true&#038;ver=3.6'></script>
<script type='text/javascript' src='";
        // line 908
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/aviators-map.js'></script>
<script type='text/javascript' src='";
        // line 909
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/gmap3.infobox.min.js'></script>
<script type='text/javascript' src='";
        // line 910
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='";
        // line 911
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/retina.js'></script>
<script type='text/javascript' src='";
        // line 912
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/gmap3.clusterer.js'></script>
<script type='text/javascript' src='";
        // line 913
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.ezmark.js'></script>
<script type='text/javascript' src='";
        // line 914
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/carousel.js'></script>
<script type='text/javascript' src='";
        // line 915
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.bxslider.js'></script>
<script type='text/javascript' src='";
        // line 916
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/properta.js'></script>
<script type='text/javascript' src='";
        // line 917
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.bxslider.min.js'></script>
<script type='text/javascript' src='";
        // line 918
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/js/jquery.tinysort.min.js'></script>
</body>
</html>
";
    }

    // line 146
    public function block_menu($context, array $blocks = array())
    {
        // line 147
        echo "    ";
        $this->env->loadTemplate("menu.html.twig")->display($context);
        echo "    
    ";
    }

    // line 166
    public function block_sidebar_block1($context, array $blocks = array())
    {
        // line 167
        echo "
";
    }

    // line 324
    public function block_most_recent_property($context, array $blocks = array())
    {
        // line 325
        echo "    ";
        $this->env->loadTemplate("mostrecentproperties.html.twig")->display($context);
        echo "    
    ";
    }

    // line 423
    public function block_main($context, array $blocks = array())
    {
        // line 424
        echo "
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1193 => 424,  1190 => 423,  1183 => 325,  1180 => 324,  1175 => 167,  1172 => 166,  1165 => 147,  1162 => 146,  1154 => 918,  1150 => 917,  1146 => 916,  1142 => 915,  1138 => 914,  1134 => 913,  1130 => 912,  1126 => 911,  1122 => 910,  1118 => 909,  1114 => 908,  1019 => 816,  967 => 767,  915 => 718,  874 => 680,  845 => 654,  816 => 628,  726 => 541,  675 => 493,  628 => 449,  603 => 426,  601 => 423,  554 => 379,  510 => 338,  497 => 327,  495 => 324,  481 => 313,  438 => 276,  420 => 263,  414 => 262,  408 => 261,  402 => 260,  396 => 259,  390 => 258,  370 => 243,  364 => 242,  358 => 241,  352 => 240,  346 => 239,  340 => 238,  320 => 223,  305 => 213,  293 => 203,  278 => 201,  274 => 200,  258 => 186,  243 => 184,  239 => 183,  227 => 174,  220 => 169,  218 => 166,  198 => 148,  196 => 146,  155 => 108,  146 => 102,  142 => 101,  118 => 48,  114 => 47,  110 => 46,  106 => 45,  100 => 42,  95 => 40,  91 => 39,  86 => 37,  82 => 36,  78 => 35,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  48 => 20,  41 => 17,  23 => 1,  523 => 383,  468 => 330,  457 => 328,  453 => 288,  447 => 326,  378 => 262,  369 => 256,  361 => 253,  288 => 183,  271 => 169,  263 => 164,  254 => 158,  246 => 153,  240 => 149,  234 => 145,  231 => 144,  225 => 140,  223 => 139,  215 => 134,  206 => 128,  193 => 117,  186 => 112,  174 => 108,  170 => 106,  166 => 105,  158 => 102,  152 => 98,  141 => 96,  137 => 98,  131 => 94,  123 => 50,  119 => 89,  117 => 88,  109 => 83,  105 => 82,  101 => 80,  98 => 79,  62 => 45,  32 => 4,  29 => 3,);
    }
}
