<?php

/* /Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/jtherczeg-cyrus studio v2/layouts/condo-list.htm */
class __TwigTemplate_4149c331b154fed58bb3fc2edb37c623931420816c446add420f1374b4e3e37c extends Twig_Template
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
<meta charset=\"UTF-8\" />
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\" />
<meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\" />
<meta name=\"author\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/bootstrap/css/bootstrap.min.css", 1 => "assets/vendor/animate/animate.css", 2 => "assets/vendor/animate/set.css", 3 => "assets/vendor/gallery/blueimp-gallery.min.css", 4 => "assets/css/style.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
<!-- font awesome -->
<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<!-- favicon -->
<link rel=\"shortcut icon\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\" type=\"image/x-icon\">
</head>
<body>
<div class=\"topbar animated fadeInLeftBig\"></div>

<div class=\"navbar-wrapper\">
\t";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "</div>

";
        // line 33
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 34
        echo "
<div class=\"footer text-center spacer\">
\t";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "</div>
<!-- Scripts -->
<script src=\"";
        // line 39
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 40
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.js");
        echo "\"></script>
<script src=\"";
        // line 41
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/script.js");
        echo "\"></script>
<script src=\"";
        // line 42
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/touchSwipe.min.js");
        echo "\"></script>
<script src=\"";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
<script src=\"";
        // line 44
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/bootstrap/js/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 45
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/gallery/jquery.blueimp-gallery.min.js");
        echo "\"></script>
";
        // line 46
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 47
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/jtherczeg-cyrus studio v2/layouts/condo-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 47,  120 => 46,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 37,  84 => 36,  80 => 34,  78 => 33,  74 => 31,  70 => 30,  61 => 24,  57 => 23,  51 => 19,  48 => 14,  45 => 13,  39 => 10,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="description" content="{{ this.page.meta_description }}" />*/
/* <meta name="keywords" content="{{ this.page.meta_keywords }}" />*/
/* <meta name="author" content="{{ this.page.meta_author }}" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* <title>{{ this.page.title }}</title>*/
/* <!-- Google fonts -->*/
/* <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>*/
/* {% styles %}*/
/* <link href="{{ [*/
/*             'assets/vendor/bootstrap/css/bootstrap.min.css',*/
/*             'assets/vendor/animate/animate.css',*/
/*             'assets/vendor/animate/set.css',*/
/* 			'assets/vendor/gallery/blueimp-gallery.min.css',*/
/* 			'assets/css/style.css']|theme }}" rel="stylesheet">*/
/* <!-- font awesome -->*/
/* <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/* <!-- favicon -->*/
/* <link rel="shortcut icon" href="{{ 'assets/images/favicon.ico'|theme }}" type="image/x-icon">*/
/* <link rel="icon" href="{{ 'assets/images/favicon.ico'|theme }}" type="image/x-icon">*/
/* </head>*/
/* <body>*/
/* <div class="topbar animated fadeInLeftBig"></div>*/
/* */
/* <div class="navbar-wrapper">*/
/* 	{% partial "nav" %}*/
/* </div>*/
/* */
/* {% page %}*/
/* */
/* <div class="footer text-center spacer">*/
/* 	{% partial "footer" %}*/
/* </div>*/
/* <!-- Scripts -->*/
/* <script src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/respond.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/script.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/touchSwipe.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/bootstrap/js/bootstrap.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/gallery/jquery.blueimp-gallery.min.js'|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}             */
/*          */
/* </body>*/
/* </html>*/
