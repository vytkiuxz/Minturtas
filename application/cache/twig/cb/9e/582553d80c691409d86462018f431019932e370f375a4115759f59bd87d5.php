<?php

/* index.html.twig */
class __TwigTemplate_cb9e582553d80c691409d86462018f431019932e370f375a4115759f59bd87d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'most_recent_property' => array($this, 'block_most_recent_property'),
            'featured_property' => array($this, 'block_featured_property'),
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
    <meta name=\"author\" content=\"Aviators, http://themes.byaviators.com\">

    <link rel=\"shortcut icon\" href=\"assets/img/favicon.png\" type=\"image/png\">

    <!--[if lt IE 9]>
    <script src=\"assets/js/html5.js\" type=\"text/javascript\"></script>
    <![endif]-->

    <meta name='robots' content='noindex,nofollow'/>

    <link rel='stylesheet' id='font-css'
          href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C300&#038;subset=latin%2Clatin-ext&#038;ver=3.6'
          type='text/css' media='all'/>


    <link rel='stylesheet' id='revolution-fullwidth' href='assets/libraries/rs-plugin/css/fullwidth.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='revolution-settings' href='assets/libraries/rs-plugin/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css' href='assets/libraries/bootstrap/css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-responsive-css' href='assets/libraries/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='pictopro-normal-css' href='assets/icons/pictopro-normal/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='justvector-web-font-css' href='assets/icons/justvector-web-font/stylesheet.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='chosen-css' href='assets/libraries/chosen/chosen.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='aviators-css' href='assets/css/jquery.bxslider.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='properta-css' href='assets/css/properta.css' type='text/css' media='all'/>

    <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
    <script type='text/javascript' src='assets/js/aviators-settings.js'></script>
    <script type='text/javascript' src='assets/libraries/chosen/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='assets/libraries/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='assets/libraries/rs-plugin/js/jquery.themepunch.plugins.min.js'></script>

    <title>Properta | Real Estate Template</title>
</head>

<body class=\"home page page-template\">

<div class=\"top\">
    
    <div class=\"container\">
        <div class=\"top-inner inverted\">
            <div class=\"header clearfix\">
                <!--
                <div id=\"language-switch\" class=\"languages\">
                    <div id=\"lang_sel_list\" class=\"lang_sel_list_horizontal\">
                        <ul>
                            <li class=\"language-en\">
                                <a href=\"#\" class=\"language-active\">
                                    <img class=\"iclflag\"
                                         src=\"assets/img/flags/en.png\" alt=\"en\"
                                         title=\"English\"/>
                                </a>
                            </li>
                            <li class=\"language-fr\">
                                <a href=\"#\">
                                    <img class=\"language-flag\"
                                         src=\"assets/img/flags/fr.png\" alt=\"fr\"
                                         title=\"Fran?ais\"/>
                                </a>
                            </li>
                            <li class=\"language-de\">
                                <a href=\"#\">
                                    <img class=\"language-flag\"
                                         src=\"assets/img/flags/de.png\" alt=\"de\"
                                         title=\"Deutsch\"/>
                                </a>
                            </li>
                            <li class=\"language-it\">
                                <a href=\"#\">

                                    <img class=\"language-flag\"
                                         src=\"assets/img/flags/it.png\" alt=\"it\"
                                         title=\"Italiano\"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                -->
                <div class=\"branding pull-left\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\" title=\"Pradžia\">
                            <img src=\"assets/img/logo.png\" alt=\"Pradžia\">
                        </a>
                    </div>
                    <!-- /.logo -->

                    <div class=\"site-name\">
                        <a href=\"";
        // line 105
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

            
    ";
        // line 143
        $this->displayBlock('menu', $context, $blocks);
        // line 146
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
    <div class=\"map-wrapper\">
        <div class=\"map\">

            <script type=\"text/javascript\">

                var infoBoxes = [];
\t\t\t\t";
        // line 164
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 165
            echo "                var property1 = '<div class=\"infobox clearfix\"><div class=\"close\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/close.png\" \\
\t\t\t\t\talt=\"\"></div><div class=\"image\"><a href=\"properties/property-detail\" ><img src=\"";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "main_img"), "html", null, true);
            echo "\" alt=\"property.name\" \\
\t\t\t\t\twidth=\"130px\"></a><div class=\"contract-type\">";
            // line 167
            if (($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "sale") == true)) {
                echo "Parduodamas";
            } else {
                echo "Nuomojamas";
            }
            echo "</div></div><div class=\"info\"><div class=\"title\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link"), "html", null, true);
            echo "\"> \\
\t\t\t\t\t";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "name"), "html", null, true);
            echo "</a></div><div class=\"location\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "locationname"), "html", null, true);
            echo "</div><div class=\"property-info clearfix\"><div class=\"area\"><i class=\"icon icon-normal-cursor-scale-up\"> \\
\t\t\t\t\t</i>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area"), "html", null, true);
            echo "m<sup>2</sup></div><div class=\"bedrooms\"><i class=\"icon icon-normal-bed\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms"), "html", null, true);
            echo "</div> \\
\t\t\t\t\t</div><div class=\"price\">";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price"), "html", null, true);
            echo " €</div><div class=\"link\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "link"), "html", null, true);
            echo "\">Plačiau</a></div></div></div>';
\t\t\t\tinfoBoxes.push(property1);
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t\t\t\t//  var property2 = '<div class=\"infobox clearfix\"><div class=\"close\"><img src=\"assets/img/close.png\" alt=\"\"></div><div class=\"image\"><a href=\"properties/property-detail\"><img src=\"assets/img/property/19.jpg\" alt=\"643 37th Ave\" width=\"130px\"></a><div class=\"contract-type\">For sale</div></div><div class=\"info\"><div class=\"title\"><a href=\"properties/property-detail\">643 37th Ave</a></div><div class=\"location\">Burrville</div><div class=\"property-info clearfix\"><div class=\"area\"><i class=\"icon icon-normal-cursor-scale-up\"></i>800m<sup>2</sup></div><div class=\"bedrooms\"><i class=\"icon icon-normal-bed\"></i>2</div><div class=\"bathrooms\"><i class=\"icon icon-normal-shower\"></i>2</div></div><div class=\"price\">Contact us</div><div class=\"link\"><a href=\"properties/property-detail\">View more</a></div></div></div>';
               // var property3 = '<div class=\"infobox clearfix\"><div class=\"close\"><img src=\"assets/img/close.png\" alt=\"\"></div><div class=\"image\"><a href=\"properties/property-detail\" ><img src=\"assets/img/property/17.jpg\" alt=\"677 Cottage Terrace\" width=\"130px\"></a>                  <div class=\"contract-type\">For sale</div></div><div class=\"info\"><div class=\"title\"><a href=\"properties/property-detail\">677 Cottage Terrace</a></div><div class=\"location\">Spring Valley</div><div class=\"property-info clearfix\"><div class=\"area\"><i class=\"icon icon-normal-cursor-scale-up\"></i>650m<sup>2</sup></div><div class=\"bedrooms\"><i class=\"icon icon-normal-bed\"></i>1</div><div class=\"bathrooms\"><i class=\"icon icon-normal-shower\"></i>1</div></div><div class=\"price\">59,600 €</div><div class=\"link\"><a href=\"properties/property-detail\">View more</a></div></div></div>';

                /*for (var i=0;i< 15 ;i++)
                {
                    infoBoxes.push(property1);
                    infoBoxes.push(property2);
                    infoBoxes.push(property3);
                }*/

                jQuery(document).ready(function (\$) {
                    var map = \$('#map').aviators_map({
                        //locations: new Array([55.908731, 23.258294], [55.923232, 23.322265], [55.930154, 23.310808], [55.932486, 23.294908], [55.932799, 23.294006], [55.937450, 23.308083], [55.935239, 23.326965], [55.928832, 23.327957], [55.928663, 23.309847], [55.923831, 23.316670], [55.919671, 23.344232], [55.950148, 23.280960], [55.960767, 23.299242], [55.955242, 23.301988], [55.947505, 23.291431], [55.937122, 23.291088], [55.949116, 23.353017], [55.950125, 23.349755], [55.936089, 23.357394], [55.936762, 23.328126], [55.934839, 23.326324], [55.958198, 23.361428], [55.966461, 23.416789], [38.932474, -77.026441], [38.932941, -77.034165], [38.932641, -77.044079], [38.932908, -77.061674], [38.931372, -77.07781], [38.926665, -77.101457], [38.929135, -77.101671], [38.919086, -77.108538], [38.910103, -77.104504], [38.920221, -77.084033], [38.915513, -77.089741], [38.918752, -77.095105], [38.912073, -77.00597], [38.90486, -77.024724], [38.918418, -77.010605], [38.928868, -77.021377], [38.920154, -77.010562], [38.915847, -77.069699], [38.926164, -77.056739], [38.925045, -77.040063], [38.922591, -77.034291]),
                        locations: new Array(";
        // line 186
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            echo " ";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                echo ",";
            }
            echo "[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "latitude"), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "longitude"), "html", null, true);
            echo "] ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "),
\t\t\t\t\t\t//types: new Array('family-house', 'villa', 'cottage', 'single-home', 'family-house', 'cottage', 'apartment', 'building-area', 'apartment', 'family-house', 'villa', 'family-house', 'villa', 'single-home', 'cottage', 'villa', 'condo', 'apartment', 'single-home', 'cottage', 'family-house', 'villa', 'apartment', 'apartment', 'villa', 'villa', 'apartment', 'cottage', 'villa', 'family-house', 'building-area', 'family-house', 'family-house', 'cottage', 'apartment', 'cottage', 'family-house', 'villa', 'cottage', 'condo', 'building-area', 'family-house', 'single-home', 'apartment'),
                        types: new Array(";
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            echo " ";
            if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                echo ",";
            }
            echo "'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "marker"), "html", null, true);
            echo "' ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "),
\t\t\t\t\t\tcontents: infoBoxes,
                        transparentMarkerImage: 'assets/img/marker-transparent.png',
                        transparentClusterImage: 'assets/img/markers/cluster-transparent.png',
                        zoom: 13,
                        center: {
                            latitude: 55.929169, 
                            longitude: 23.312273
                        },
                        filterForm: '.map-filtering',
                        enableGeolocation: '',
                        pixelOffsetX: -75,
                        pixelOffsetY: -200
                    });
                });
            </script>

            <div class=\"container\" style=\"height:0px;\">
                <div class=\"row\">
                    <div class=\"span3\">
                        <div class=\"property-filter widget\">
    <div class=\"content\">
        <form method=\"get\" action=\"";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["form_url"]) ? $context["form_url"] : null), "html", null, true);
        echo "\">
            <div class=\"location control-group\">
                <label class=\"control-label\">
                    Miestas
                </label>

                <div class=\"controls\">
                    <select name=\"filter_location\">
\t\t\t\t\t\t<option value=\"\">-</option>
\t\t\t\t\t\t";
        // line 219
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 220
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
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
        // line 236
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 237
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["type"]) ? $context["type"] : null), "name"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                    </select>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->


            <div class=\"rent control-group\">
                <div class=\"controls\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" value=\"1\" name=\"filter_rent\"> Nuomoja
                    </label>
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"sale control-group\">
                <div class=\"controls\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" value=\"1\" name=\"filter_sale\"> Parduoda
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
                        <option value=\"5000\">5,000 €</option>
                        <option value=\"20000\">20,000 €</option>
                        <option value=\"50000\">50,000 €</option>
                        <option value=\"100000\">100,000 €</option>
\t\t\t\t        <option value=\"200000\">200,000 €</option>
                        <option value=\"500000\">500,000 €</option>
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
                        <option value=\"5000\">5,000 €</option>
                        <option value=\"20000\">20,000 €</option>
                        <option value=\"50000\">50,000 €</option>
                        <option value=\"100000\">100,000 €</option>
\t\t\t\t        <option value=\"200000\">200,000 €</option>
                        <option value=\"500000\">500,000 €</option>
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
                    <input type=\"text\" value=\"\" name=\"filter_area_from\">
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"area-to control-group\">
                <label class=\"control-label\">
                    Plotas iki
                </label>

                <div class=\"controls\">
                    <input type=\"text\" value=\"\" name=\"filter_area_to\">
                </div>
                <!-- /.controls -->
            </div>
            <!-- /.control-group -->

            <div class=\"form-actions\">
                <button class=\"btn btn-primary btn-large\">Ieškoti</button>
            </div>
            <!-- /.form-actions -->
        </form>
    </div>
    <!-- /.content -->
</div><!-- /.property-filter -->                    </div>
                </div>
            </div>

            <div id=\"map\" class=\"map-inner\" style=\"height: 750px\"></div>
            <!-- /.map-inner -->
        </div>
        <!-- /.map -->
    </div>

    <!-- /.map-wrapper -->
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"sidebar span3\">
                <div id=\"quick-search\" class=\"widget widget-search\"><h2>Greita paieška</h2>

    <div class=\"content\">
        <form method=\"get\" class=\"site-search\" action=\"javascript:void(0);\">
            <input class=\"search-query form-text\" placeholder=\"Search\" type=\"text\" name=\"s\" id=\"s\" value=\"\">
            <button type=\"submit\" class=\"btn\">Ieškoti</button>
        </form>
        <!-- /.site-search -->
    </div>
    <!-- /.inner -->
</div>                <div id=\"partners_widget-2\" class=\"widget partners\">

    <h2>Reklama</h2>

    <div class=\"partners\">
        <div class=\"row\">
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"http://www.facebook.com\">
                        <img width=\"270\" height=\"70\" src=\"assets/img/partners/themeforest.png\"
                             class=\"thumbnail-image\" alt=\"themeforest\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.partners -->
</div>                
<div id=\"mostrecentproperties_widget-2\" class=\"widget properties\">

    ";
        // line 384
        $this->displayBlock('most_recent_property', $context, $blocks);
        // line 387
        echo "    <!-- /.content -->

</div>                <div id=\"agencies_widget-2\" class=\"widget agencies\">

    <h2>Agnetūros</h2>

    <div class=\"content\">
        <div class=\"agency clearfix\">
            <div class=\"header\">
                <div class=\"image\">
                    <a href=\"agencies/agency-detail.html\">
                        <img src=\"assets/img/agency-small-tmp.png\" alt=\"Beverly Hills Real Estate\">
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"info\">
                    <h2>Minturtas nekilnoj</h2>

                    <div class=\"properties-count\">
                        <span class=\"number\">17</span> skelbimų
                    </div>
                    <!-- /.properties-count -->

                    <a href=\"default.htm\" class=\"btn\">Profilis</a>
                </div>
                <!-- /.info -->
            </div>
            <!-- /.header -->

            <div class=\"address\">
                Rūdės g. 27F<br/>
                Šiauliai
            </div>
            <!-- /.address -->

            <div class=\"email\">
                <a href=\"mailto:minturtas@splius.lt\">minturtas@splius.lt</a>
            </div>
            <!-- /.email -->

            <div class=\"phone\">
                8 699 96737
            </div>
            <!-- /.phone -->

        </div>
        <!-- /.agency -->
    </div>
    <!-- /.content -->

 </div>           
</div>
            <!-- /#sidebar -->

<div id=\"main\" class=\"span9\">

<h2>Minturtas rekomenduoja</h2>
<div class=\"properties-grid featured\">
    <div class=\"row\">
        ";
        // line 447
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featured_properties"]) ? $context["featured_properties"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["featured"]) {
            // line 448
            echo "        <div class=\"span3\">
            <div class=\"property\">
                <div class=\"image\">
                    <div class=\"content\">
                        <a href=\"";
            // line 452
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "link"), "html", null, true);
            echo "\">
                            <div class=\"description\"><p>";
            // line 453
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "short_description"), "html", null, true);
            echo "</p></div>
                            <img src=\"";
            // line 454
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "main_img"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "name"), "html", null, true);
            echo "\">
                        </a>
                    </div>
                    <!-- /.content -->

                    <div class=\"rent-sale\">
                        ";
            // line 460
            if ($this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "sale")) {
                // line 461
                echo "                        Parduodama
                        ";
            } elseif ($this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "rent")) {
                // line 463
                echo "                        Nuomojama
                        ";
            }
            // line 465
            echo "                    </div>
                    <!-- /.rent-sale -->

                    <div class=\"price\">
                        ";
            // line 469
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "price"), "html", null, true);
            echo " €
                    </div>
                    <!-- /.price -->
                    ";
            // line 472
            if ($this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "reduced_price")) {
                // line 473
                echo "                    <div class=\"reduced\">
                        Atpigo
                    </div>
                    ";
            }
            // line 477
            echo "                </div>
                <!-- /.image -->

                <div class=\"info\">
                    <div class=\"title clearfix\">
                        <h2><a href=\"";
            // line 482
            echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "link"), "html", null, true);
            echo "\">
                                ";
            // line 483
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "name"), "html", null, true);
            echo "
                            </a></h2>
                    </div>
                    <!-- /.title -->

                    <div class=\"location\">";
            // line 488
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "locationname"), "html", null, true);
            echo "</div>
                    <!-- /.location -->
                </div>
                <!-- /.info -->

            </div>
            <!-- /.property -->

            <div class=\"property-info clearfix\">
                <div class=\"area\">
                    <i class=\"icon icon-normal-cursor-scale-up\"></i>
                    ";
            // line 499
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "area"), "html", null, true);
            echo "<sup>2</sup>
                </div>
                <!-- /.area -->

                <div class=\"bedrooms\">
                    <i class=\"icon icon-normal-bed\"></i>
                    ";
            // line 505
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["featured"]) ? $context["featured"] : null), "bedrooms"), "html", null, true);
            echo "
                </div>
                <!-- /.bedrooms -->
                <!--    
                <div class=\"bathrooms\">
                    <i class=\"icon icon-normal-shower\"></i>
                    2
                </div>
                -->
                <!-- /.bathrooms -->
            </div>
            <!-- /.property-info -->
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featured'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "       
    </div>
</div>
<!-- /.properties-grid -->

<div class=\"show-all\">
    <a href=\"";
        // line 524
        echo twig_escape_filter($this->env, (isset($context["allfeatured_url"]) ? $context["allfeatured_url"] : null), "html", null, true);
        echo "\">Rodyti visus</a>
</div>                <hr>

<h1 class=\"page-header\">Naujausi pasiūlymai</h1>
<div class=\"properties-grid\">
";
        // line 529
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recent_properties"]) ? $context["recent_properties"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            echo "    
<div class=\"row-fluid\">
";
            // line 531
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row"]) ? $context["row"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recent"]) {
                // line 532
                echo "<div class=\"span3\">    
    <div class=\"property\">
        <div class=\"image\">
            <div class=\"content\">
                <a href=\"";
                // line 536
                echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "link"), "html", null, true);
                echo "\">
                    <div class=\"description\"><p>";
                // line 537
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "short_description"), "html", null, true);
                echo " </p></div>
                    <img src=\"";
                // line 538
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/property/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "main_img"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "name"), "html", null, true);
                echo "\">
                </a>
            </div>
            <!-- /.content -->

            <div class=\"rent-sale\">
                ";
                // line 544
                if ($this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "sale")) {
                    // line 545
                    echo "                Parduodama
                ";
                } elseif ($this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "rent")) {
                    // line 547
                    echo "                Nuomojama
                ";
                }
                // line 549
                echo "            </div>
            <!-- /.rent-sale -->

            <div class=\"price\">
                ";
                // line 553
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "price"), "html", null, true);
                echo " €
            </div>
            <!-- /.price -->
            ";
                // line 556
                if ($this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "reduced")) {
                    // line 557
                    echo "            <div class=\"reduced\">
                Atpigo
            </div>
            ";
                }
                // line 561
                echo "        </div>
        <!-- /.image -->

        <div class=\"info\">
            <div class=\"title clearfix\">
                <h2><a href=\"";
                // line 566
                echo twig_escape_filter($this->env, (isset($context["property_url"]) ? $context["property_url"] : null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "link"), "html", null, true);
                echo "\">
                        ";
                // line 567
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "name"), "html", null, true);
                echo "
                    </a></h2>
            </div>
            <!-- /.title -->

            <div class=\"location\">";
                // line 572
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "location"), "html", null, true);
                echo "</div>
            <!-- /.location -->
        </div>
        <!-- /.info -->

    </div>
    <!-- /.property -->
    

    <div class=\"property-info clearfix\">
        <div class=\"area\">
            <i class=\"icon icon-normal-cursor-scale-up\"></i>
            ";
                // line 584
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "area"), "html", null, true);
                echo "<sup>2</sup>
        </div>
        <!-- /.area -->

        <div class=\"bedrooms\">
            <i class=\"icon icon-normal-bed\"></i>
            ";
                // line 590
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recent"]) ? $context["recent"] : null), "bedrooms"), "html", null, true);
                echo "
        </div>
        <!-- /.bedrooms -->

    </div>
    <!-- /.property-info -->

</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 599
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 601
        echo "
<div class=\"row-fluid\">
</div>
<!-- /.row -->
</div>
<!-- /.properties-grid -->
<div class=\"show-all\">
    <a href=\"";
        // line 608
        echo twig_escape_filter($this->env, (isset($context["form_url"]) ? $context["form_url"] : null), "html", null, true);
        echo "\">Rodyti visus</a>
</div>                <hr>

<div id=\"features-grid\" class=\"features-grid widget\">
    <div class=\"textwidget\">
        <div class=\"row\">
            <div class=\"span3\">
                <div class=\"content-box\">
                    <div class=\"row\">

                        <div class=\"span1\">
                            <div class=\"pictopro-icon\">
                                <i class=\"icon icon-normal-profile-male\"></i>
                            </div>
                        </div>

                        <div class=\"content span2\">
                            <h3>Real Front end submission</h3>

                            <p>Properta allows your users to add their own properties in real front-end
                                page.</p>

                            <p><a href=\"default.htm\">Show All<i class=\"icon icon-normal-right-arrow-circle\"></i></a>
                            </p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.content-box --></div>
            <div class=\"span3\">
                <div class=\"content-box\">
                    <div class=\"row\">

                        <div class=\"span1\">
                            <div class=\"pictopro-icon\">
                                <i class=\"icon icon-normal-globe\"></i>
                            </div>
                        </div>

                        <div class=\"content span2\">
                            <h3>Translation Ready &amp; WPML Support</h3>

                            <p>Translate Properta to your language using PO files or WPML</p>

                            <p><a href=\"default.htm\">Show All<i class=\"icon icon-normal-right-arrow-circle\"></i></a>
                            </p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.content-box --></div>
            <div class=\"span3\">
                <div class=\"content-box\">
                    <div class=\"row\">

                        <div class=\"span1\">
                            <div class=\"pictopro-icon\">
                                <i class=\"icon icon-normal-magnifier\"></i>
                            </div>
                        </div>

                        <div class=\"content span2\">
                            <h3>dsIDXPress for WP Support</h3>

                            <p>Properta supports leading IDX/MLS real estate search WP plugin.</p>

                            <p><a href=\"default.htm\">Show All<i class=\"icon icon-normal-right-arrow-circle\"></i></a>
                            </p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.content-box --></div>
        </div>
    </div>
</div>


<div id=\"partners_widget-3\" class=\"widget partners\">
    <h2>Reklama</h2>

    <div class=\"partners\">
        <div class=\"row\">
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"http://www.facebook.com\">
                        <img width=\"270\" height=\"70\" src=\"assets/img/partners/themeforest.png\"
                             class=\"thumbnail-image \" alt=\"themeforest\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"../www.activeden.net/default.htm\">
                        <img width=\"270\" height=\"70\" src=\"assets/img/partners/activeden.png\"
                             class=\"thumbnail-image \" alt=\"activeden\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"../www.3docean.net/default.htm\">
                        <img width=\"270\" height=\"70\" src=\"assets/img/partners/3docean.png\"
                             class=\"thumbnail-image \" alt=\"3docean\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"../www.codecanyon.net/default.htm\">
                        <img width=\"270\" height=\"70\" src=\"assets/img/partners/code-canyon.png\"
                             class=\"thumbnail-image \" alt=\"code-canyon\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"../www.photodune.net/default.htm\">
                        <img width=\"270\" height=\"70\" src=\"assets/img/partners/photo-dune.png\"
                             class=\"thumbnail-image \" alt=\"photo-dune\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
            <div class=\"span3\">
                <div class=\"partner\">
                    <a href=\"../www.graphicriver.net/default.htm\">
                        <img width=\"270\" height=\"70\" src=\"assets/img/partners/graphic-river.png\"
                             class=\"thumbnail-image \" alt=\"graphic-river\"/>
                    </a>
                </div>
            </div>
            <!-- /.span3 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.partners -->
</div>            </div>
            <!-- /#main -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</div>
<!-- /#content -->
<div id=\"footer-wrapper\">

<div id=\"footer-top\">
<div id=\"footer-top-inner\" class=\"container\">
<div class=\"row\">
<div class=\"span3\">
    <div id=\"mostrecentproperties_widget-3\" class=\"widget properties\">

        <h2>Naujausi pasiūlymai</h2>

        <div class=\"content\">
            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"properties/property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"assets/img/property/19.jpg\"
                             class=\"thumbnail-image \" alt=\"19\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"properties/property-detail.html\">
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
                    <a href=\"properties/property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"assets/img/property/20.jpg\"
                             class=\"thumbnail-image \" alt=\"20\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"properties/property-detail.html\">
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
                    <a href=\"properties/property-detail.html\">
                        <img width=\"570\" height=\"425\" src=\"assets/img/property/17.jpg\"
                             class=\"thumbnail-image \" alt=\"17\"/>
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"properties/property-detail.html\">
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
    <div id=\"nav_menu-2\" class=\"widget widget-nav_menu\"><h2>Nuorodos</h2>

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
                      href=\"faq\">FAQ</a></li>
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

        <h2>Agentai</h2>

        <div class=\"content\">
            <div class=\"agent clearfix\">
                <div class=\"image\">
                    <a href=\"agents/agent-detail.html\">
                        <img src=\"assets/img/agents/2.jpg\" alt=\"Mindaugas Klimas\">
                    </a>
                </div>
                <!-- /.image -->

                <div class=\"name\">
                    <a href=\"agents/agent-detail.html\">Mindaugas Klimas</a>
                </div>
                <!-- /.name -->

                <div class=\"phone\">
                    <i class=\"icon icon-normal-phone\"></i>
                    8-699 96737
                </div>
                <!-- /.phone -->

                <div class=\"email\">
                    <i class=\"icon icon-normal-mail\"></i>
                    <a href=\"mailto:minturtas@splius.lt\">minturtas@splius.lt</a>
                </div>
                <!-- /.email -->
            </div>
            <!-- /.agent -->
        </div>
        <!-- /.content -->

    </div>
</div>

<div class=\"span3\">
    ";
        // line 985
        $this->displayBlock('featured_property', $context, $blocks);
        // line 988
        echo "</div>
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
                                <li class=\"menu-item\"><a href=\"faq\">FAQ</a></li>
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
<script type='text/javascript' src='assets/js/aviators-map.js'></script>
<script type='text/javascript' src='assets/js/gmap3.infobox.min.js'></script>
<script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='assets/js/retina.js'></script>
<script type='text/javascript' src='assets/js/gmap3.clusterer.js'></script>
<script type='text/javascript' src='assets/js/jquery.ezmark.js'></script>
<script type='text/javascript' src='assets/js/carousel.js'></script>
<script type='text/javascript' src='assets/js/jquery.bxslider.js'></script>
<script type='text/javascript' src='assets/js/properta.js'></script>
<script type='text/javascript' src='assets/js/jquery.bxslider.min.js'></script>
</body>
</html>
";
    }

    // line 143
    public function block_menu($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $this->env->loadTemplate("menu.html.twig")->display($context);
        echo "    
    ";
    }

    // line 384
    public function block_most_recent_property($context, array $blocks = array())
    {
        // line 385
        echo "    ";
        $this->env->loadTemplate("mostrecentproperties.html.twig")->display($context);
        echo "    
    ";
    }

    // line 985
    public function block_featured_property($context, array $blocks = array())
    {
        // line 986
        echo "    ";
        $this->env->loadTemplate("featuredproperties.html.twig")->display($context);
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1382 => 986,  1379 => 985,  1372 => 385,  1369 => 384,  1362 => 144,  1359 => 143,  1301 => 988,  1299 => 985,  919 => 608,  910 => 601,  903 => 599,  888 => 590,  879 => 584,  864 => 572,  856 => 567,  850 => 566,  843 => 561,  837 => 557,  835 => 556,  829 => 553,  823 => 549,  819 => 547,  815 => 545,  813 => 544,  800 => 538,  796 => 537,  790 => 536,  784 => 532,  780 => 531,  773 => 529,  765 => 524,  757 => 518,  737 => 505,  728 => 499,  714 => 488,  706 => 483,  700 => 482,  693 => 477,  687 => 473,  685 => 472,  679 => 469,  673 => 465,  669 => 463,  665 => 461,  663 => 460,  650 => 454,  646 => 453,  640 => 452,  634 => 448,  630 => 447,  568 => 387,  566 => 384,  419 => 239,  408 => 237,  404 => 236,  388 => 222,  377 => 220,  373 => 219,  361 => 210,  302 => 188,  261 => 186,  246 => 173,  233 => 170,  227 => 169,  221 => 168,  209 => 167,  203 => 166,  198 => 165,  194 => 164,  174 => 146,  172 => 143,  131 => 105,  121 => 98,  22 => 1,);
    }
}
