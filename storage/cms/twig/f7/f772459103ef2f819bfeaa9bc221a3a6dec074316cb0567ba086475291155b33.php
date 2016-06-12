<?php

/* /Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/christophheich-semantic-ui-octobercms/layouts/default.htm */
class __TwigTemplate_5ed567d5ba106ecbd95df78621b41a50c779c8953205a1efa946af9eacedd40e extends Twig_Template
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
<html>
    <head>
        <meta charset=\"utf-8\"/>
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "description", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"language\" content=\"\">
        <meta name=\"type\" content=\"\">
        <meta name=\"copyright\" content=\"\">
        <meta name=\"resource-type\" content=\"\">\t
        <meta name=\"distribution\" content=\"\">
        <meta name=\"email\" content=\"\">
        <meta name=\"rating\" content=\"General\">
        <meta name=\"robots\" content=\"INDEX,FOLLOW\">
        <meta name=\"revisit-after\" content=\"7 Days\">
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
        <meta http-equiv=\"content-language\" content=\"en\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/favicon.ico");
        echo "\"/>
        
\t\t<!-- CSS -->
        <link href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/vendor/semantic.min.css", 1 => "assets/css/main.css"));
        // line 29
        echo "\" rel=\"stylesheet\">
        ";
        // line 30
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 31
        echo "\t\t
    </head>
\t<body>

        <!-- CONTENT -->
        ";
        // line 36
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 37
        echo "        
        <!-- SCRIPTS -->
        <script src=\"";
        // line 39
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/vendor/jquery-2.2.1.min.js", 1 => "assets/js/vendor/semantic.min.js", 2 => "assets/js/app.js"));
        // line 43
        echo "\"></script>
        ";
        // line 44
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 45
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 46
        echo "\t\t
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/christophheich-semantic-ui-octobercms/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 46,  91 => 45,  84 => 44,  81 => 43,  79 => 39,  75 => 37,  73 => 36,  66 => 31,  63 => 30,  60 => 29,  58 => 26,  52 => 23,  34 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>{{ this.page.meta_title }}</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="title" content="{{ this.page.title }}">*/
/*         <meta name="description" content="{{ this.page.description }}">*/
/*         <meta name="author" content="">*/
/*         <meta name="keywords" content="">*/
/*         <meta name="language" content="">*/
/*         <meta name="type" content="">*/
/*         <meta name="copyright" content="">*/
/*         <meta name="resource-type" content="">	*/
/*         <meta name="distribution" content="">*/
/*         <meta name="email" content="">*/
/*         <meta name="rating" content="General">*/
/*         <meta name="robots" content="INDEX,FOLLOW">*/
/*         <meta name="revisit-after" content="7 Days">*/
/*         <meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*         <meta http-equiv="content-language" content="en">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <link rel="icon" type="image/x-icon" href="{{ 'assets/images/favicon.ico'|theme }}"/>*/
/*         */
/* 		<!-- CSS -->*/
/*         <link href="{{ [*/
/*             'assets/css/vendor/semantic.min.css',*/
/*             'assets/css/main.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*         {% styles %}*/
/* 		*/
/*     </head>*/
/* 	<body>*/
/* */
/*         <!-- CONTENT -->*/
/*         {% page %}*/
/*         */
/*         <!-- SCRIPTS -->*/
/*         <script src="{{ [*/
/*             'assets/js/vendor/jquery-2.2.1.min.js',*/
/*             'assets/js/vendor/semantic.min.js',*/
/*             'assets/js/app.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* 		*/
/*     </body>*/
/* </html>*/
