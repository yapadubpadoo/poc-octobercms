<?php

/* /Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/jtherczeg-cyrus studio v2/pages/condo-detail.htm */
class __TwigTemplate_03eb99bd88d35de7b38d1bb0fa078f3deee166a2184b9fbd8f7011fd4491bf7f extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "post", array()), "title", array()), "html", null, true);
        echo "</h2>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/jtherczeg-cyrus studio v2/pages/condo-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <h2>{{ blogPost.post.title }}</h2>*/
/* {% component 'blogPost' %}*/
