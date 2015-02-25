<?php

/* property.html.twig */
class __TwigTemplate_01c57cc7f8c8b96cde0a0516066a5c778aad0b4d08a73c30967f9d5835dd7a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'sidebar_block1' => array($this, 'block_sidebar_block1'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar_block1($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"enquireproperties_widget-2\" class=\"widget enquire\">
    <h2>Pasiteirauti</h2>

    <div class=\"content\">
        <form method=\"post\" action=\"javascript:void(0);\">
            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputName\">
                    Vardas
                    <span class=\"form-required\" title=\"Būtina užpildyti lauką.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"inputName\" name=\"name\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputPhone\">
                    Telefono nr.
                    <span class=\"form-required\" title=\"Būtina užpildyti lauką.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"inputPhone\" name=\"phone\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
\t\t\t";
        // line 45
        echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputEmail\">
                    El. paštas
                    <span class=\"form-required\" title=\"Būtina užpildyti lauką.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"email\" id=\"inputEmail\" name=\"email\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputMessage\">
                    Žinutė
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <textarea id=\"inputMessage\" name=\"message\" required=\"required\"></textarea>
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->

            <div class=\"form-actions\">
                <input type=\"hidden\" name=\"post_id\" value=\"358\">
                <button class=\"btn btn-primary arrow-right\">Siūsti</button>
            </div>
            <!-- /.form-actions -->
        </form>
    </div><!-- /.content -->
</div>   
";
    }

    // line 79
    public function block_main($context, array $blocks = array())
    {
        // line 80
        echo "<div id=\"main\" class=\"span9 single-property\">

<h1 class=\"page-header fl\">";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "propname"), "html", null, true);
        echo ",</h1>
<span>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "locationname"), "html", null, true);
        echo "</span>

<div class=\"property-detail\">

<div class=\"row\">
\t";
        // line 88
        if (($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "main_img") != "")) {
            // line 89
            echo "    <div class=\"span6 gallery\">
        <div class=\"preview\">
            <a href=\"#\"><img class=\"previewimg\" src=\"";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "main_img"), "html", null, true);
            echo "\" alt=\"\"></a>
\t\t\t
        </div>
\t\t\t<a class=\"photo\" data-fancybox-group=\"gallery\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "main_img"), "html", null, true);
            echo "\">
\t\t\t";
            // line 95
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 96
                echo "\t\t\t\t<a class=\"photo\" data-fancybox-group=\"gallery\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/property/";
                echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
                echo "\"/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "        <div class=\"content\">
            <ul>
                <li class=\"active\">
                    <div class=\"thumb\">
                        <a href=\"#\"><img src=\"";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "main_img"), "html", null, true);
            echo "\" alt=\"\"></a>
                    </div>
                </li>
\t\t\t\t";
            // line 105
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 106
                echo "                <li>
                    <div class=\"thumb\">
                        <a href=\"#\"><img src=\"";
                // line 108
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "assets/img/property/";
                echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
                echo "\" alt=\"\"></a>
                    </div>
                </li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "            </ul>
        </div>
        <!-- /.content -->
    </div>
\t";
        }
        // line 117
        echo "    <div class=\"overview\">
        <div class=\"pull-right overview\">
            <div class=\"row\">
                <div class=\"span3\">
                    <!-- <h2>Overview</h2> -->

                    <table>
                        <tbody>
                        <tr>
                            <th>Kaina:</th>
                            <td class=\"price\">
                                ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "price"), "html", null, true);
        echo " €
                            </td>
                        </tr>

                        <tr>
                            <th>ID:</th>
                            <td><strong>#";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "id"), "html", null, true);
        echo "</strong></td>
                        </tr>

                        <tr>
                            <th>Tipas:</th>
\t\t\t\t\t\t\t";
        // line 139
        if (($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "sale") == true)) {
            // line 140
            echo "                            <td>
\t\t\t\t\t\t\t\t<span class=\"contract-type\">Parduodamas</span>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t\t\t\t";
        if (($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "rent") == true)) {
            // line 145
            echo "                            <td>
\t\t\t\t\t\t\t\t<span class=\"contract-type\">Nuomojamas</span>\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
        }
        // line 149
        echo "                        </tr>

                        <tr>
                            <th>Tipas:</th>
                            <td>";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "typename"), "html", null, true);
        echo "</td>
                        </tr>

                        <tr>
                            <th>Miestas:</th>
                            <td>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "locationname"), "html", null, true);
        echo "</td>
                        </tr>


                        <tr>
                            <th>Kambariai:</th>
                            <td>";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "bedrooms"), "html", null, true);
        echo "</td>
                        </tr>

                        <tr>
                            <th>Plotas:</th>
                            <td>";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "area"), "html", null, true);
        echo " m<sup>2</sup></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.span2 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.overview -->        </div>
</div>

<h2>Aprašymas</h2>

<p>";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "description"), "html", null, true);
        echo "</p>


<div class=\"row\">
    <div class=\"span6\">
        <div class=\"row\">
            <div class=\"span6\">
                <h2>Patogumai</h2>

                <div class=\"row\">
                    <ul class=\"span2\">
                        <li class=\"checked\">Air conditioning</li>
                        <li class=\"plain\">Balcony</li>
                        <li class=\"plain\">Bedding</li>
                        <li class=\"checked\">Cable TV</li>
                        <li class=\"plain\">Cleaning after exit</li>
                        <li class=\"plain\">Cofee pot</li>
                        <li class=\"checked\">Computer</li>
                        <li class=\"checked\">Cot</li>
                        <li class=\"checked\">Dishwasher</li>
                        <li class=\"checked\">DVD</li>
                        <li class=\"plain\">Fan</li>
                    </ul>
                    <!-- /.span2 -->
                    <ul class=\"span2\">
                        <li class=\"plain\">Fridge</li>
                        <li class=\"checked\">Grill</li>
                        <li class=\"plain\">Hairdryer</li>
                        <li class=\"plain\">Heating</li>
                        <li class=\"plain\">Hi-fi</li>
                        <li class=\"plain\">Internet</li>
                        <li class=\"plain\">Iron</li>
                        <li class=\"checked\">Juicer</li>
                        <li class=\"plain\">Lift</li>
                        <li class=\"checked\">Microwave</li>
                        <li class=\"plain\">Oven</li>
                    </ul>
                    <!-- /.span2 -->
                    <ul class=\"span2\">
                        <li class=\"plain\">Parking</li>
                        <li class=\"checked\">Parquet</li>
                        <li class=\"checked\">Radio</li>
                        <li class=\"checked\">Roof terrace</li>
                        <li class=\"plain\">Smoking allowed</li>
                        <li class=\"plain\">Terrace</li>
                        <li class=\"plain\">Toaster</li>
                        <li class=\"checked\">Towelwes</li>
                        <li class=\"checked\">Use of pool</li>
                        <li class=\"plain\">Video</li>
                    </ul>
                    <!-- /.span2 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.span12 -->
        </div>
        <!-- /.row -->
    </div>

    <div class=\"span3\">
        <h2>Žemėlapis</h2>

        <div id=\"property-map\"
             style=\"position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0);\">
        </div>

        <script type=\"text/javascript\">
            jQuery(document).ready(function (\$) {
                function LoadMapProperty() {
                    var locations = new Array(
                      [";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "latitude"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "longitude"), "html", null, true);
        echo "]
                    );
                    var types = new Array(
                      '";
        // line 256
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "marker"), "html", null, true);
        echo "'
                    );
                    var markers = new Array();
                    var plainMarkers = new Array();

                    var mapOptions = {
                        center: new google.maps.LatLng(";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "latitude"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "longitude"), "html", null, true);
        echo "),
                        zoom: 14,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        scrollwheel: false
                    };

                    var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

                    \$.each(locations, function (index, location) {
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(location[0], location[1]),
                            map: map,
                            icon: '../assets/img/marker-transparent.png'
                        });

                        var myOptions = {
                            draggable: true,
                            content: '<div class=\"marker ' + types[index] + '\"><div class=\"marker-inner\"></div></div>',
                            disableAutoPan: true,
                            pixelOffset: new google.maps.Size(-21, -58),
                            position: new google.maps.LatLng(location[0], location[1]),
                            closeBoxURL: \"\",
                            isHidden: false,
                            // pane: \"mapPane\",
                            enableEventPropagation: true
                        };
                        marker.marker = new InfoBox(myOptions);
                        marker.marker.isHidden = false;
                        marker.marker.open(map, marker);
                        markers.push(marker);
                    });

                    google.maps.event.addListener(map, 'zoom_changed', function () {
                        \$.each(markers, function (index, marker) {
                            marker.infobox.close();
                        });
                    });
                }

                google.maps.event.addDomListener(window, 'load', LoadMapProperty);

                var dragFlag = false;
                var start = 0, end = 0;

                function thisTouchStart(e) {
                    dragFlag = true;
                    start = e.touches[0].pageY;
                }

                function thisTouchEnd() {
                    dragFlag = false;
                }

                function thisTouchMove(e) {
                    if (!dragFlag) return;
                    end = e.touches[0].pageY;
                    window.scrollBy(0, ( start - end ));
                }

                document.getElementById(\"property-map\").addEventListener(\"touchstart\", thisTouchStart, true);
                document.getElementById(\"property-map\").addEventListener(\"touchend\", thisTouchEnd, true);
                document.getElementById(\"property-map\").addEventListener(\"touchmove\", thisTouchMove, true);
\t\t\t\t
\t\t\t\tvar images = [];
\t\t\t\timages.push('";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "main_img"), "html", null, true);
        echo "');
\t\t\t\t";
        // line 327
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 328
            echo "\t\t\t\t\timages.push('";
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "assets/img/property/";
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : null), "html", null, true);
            echo "');
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t\$( \".preview\" ).click(function() {
\t\t\t\t\t
\t\t\t\t\tvar url = \$('.previewimg').attr('src');
\t\t\t\t
\t\t\t\t\tvar index =  \$.inArray(url, images);
\t\t\t\t\tif (index >= 0) {
\t\t\t\t\t\tvar images2 = [];
\t\t\t\t\t\tfor (i=0;i<images.length;i++) {
\t\t\t\t\t\t\tif (i+index>images.length-1)
\t\t\t\t\t\t\t\tj = i+index-images.length
\t\t\t\t\t\t\telse j = i+index;
\t\t\t\t\t\t\timages2.push(images[j]);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telse images2 = images;
\t\t\t\t    \$.fancybox(images2, {
\t\t\t\t\t\tbeforeShow: function () {
\t\t\t\t\t\t\t// set size to (fancybox) img
\t\t\t\t\t\t\t\$(\".fancybox-image\").css({
\t\t\t\t\t\t\t\t\"width\": \"auto\",
\t\t\t\t\t\t\t\t\"height\": \$(window).height() * 0.9
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t// set size for parent container
\t\t\t\t\t\t\tthis.width = \$(\".fancybox-image\").innerWidth(); //\$(window).width() * 0.9;
\t\t\t\t\t\t\tthis.height = \$(window).height() * 0.9;
\t\t\t\t\t\t\t//this.aspectRatio = true;
\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t/*
\t\t\t\t\$('.preview').click(function() {
\t\t\t\t\t\$('a.photo').fancybox();
\t\t\t\t});
\t\t\t\t*/
\t\t\t\t
\t\t\t\t/*
\t\t\t\t
\t\t\t\t\$(\"a#inline\").fancybox({
\t\t\t\t\t'hideOnContentClick': true
\t\t\t\t});

\t\t\t\t/* Apply fancybox to multiple items */ // class=\"photo\" rel=\"propertygroup\"*/ 
\t\t\t\t/*
\t\t\t\t
\t\t\t\t\$(\"a.photo\").fancybox({
\t\t\t\t\t'transitionIn'\t:\t'elastic',
\t\t\t\t\t'transitionOut'\t:\t'elastic',
\t\t\t\t\t'speedIn'\t\t:\t600, 
\t\t\t\t\t'speedOut'\t\t:\t200, 
\t\t\t\t\t'overlayShow'\t:\tfalse,
\t\t\t\t\t'href'\t\t\t:\t'";
        // line 383
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "assets/img/property/";
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : null), "html", null, true);
        echo "' 
\t\t\t\t});*/
            });

        </script>
    </div>

</div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 383,  468 => 330,  457 => 328,  453 => 327,  447 => 326,  378 => 262,  369 => 256,  361 => 253,  288 => 183,  271 => 169,  263 => 164,  254 => 158,  246 => 153,  240 => 149,  234 => 145,  231 => 144,  225 => 140,  223 => 139,  215 => 134,  206 => 128,  193 => 117,  186 => 112,  174 => 108,  170 => 106,  166 => 105,  158 => 102,  152 => 98,  141 => 96,  137 => 95,  131 => 94,  123 => 91,  119 => 89,  117 => 88,  109 => 83,  105 => 82,  101 => 80,  98 => 79,  62 => 45,  32 => 4,  29 => 3,);
    }
}
