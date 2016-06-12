<?php

/* /Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/christophheich-semantic-ui-octobercms/pages/home.htm */
class __TwigTemplate_385b312a9d17882b48a31a819fe0f4f4acba781070731440740bdbef078d05c2 extends Twig_Template
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
        echo "<!-- HEADER -->
";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
<!-- INJECTED STYLE -->
";
        // line 5
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 6
        echo "<style>
.hidden.menu {
  display: none;
}

.masthead.segment {
  min-height: 700px;
  padding: 1em 0em;
}

.masthead .logo.item img {
  margin-right: 1em;
}

.masthead .ui.menu .ui.button {
  margin-left: 0.5em;
}

.masthead h1.ui.header {
  margin-top: 3em;
  margin-bottom: 0em;
  font-size: 4em;
  font-weight: normal;
}

.masthead h2 {
  font-size: 1.7em;
  font-weight: normal;
}

.ui.vertical.stripe {
  padding: 8em 0em;
}

.ui.vertical.stripe h3 {
  font-size: 2em;
}

.ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
  margin-top: 3em;
}

.ui.vertical.stripe .floated.image {
  clear: both;
}

.ui.vertical.stripe p {
  font-size: 1.33em;
}

.ui.vertical.stripe .horizontal.divider {
  margin: 3em 0em;
}

.quote.stripe.segment {
  padding: 0em;
}

.quote.stripe.segment .grid .column {
  padding-top: 5em;
  padding-bottom: 5em;
}

.footer.segment {
  padding: 5em 0em;
}

.secondary.pointing.menu .toc.item {
  display: none;
}

@media only screen and (max-width: 700px) {
  .ui.fixed.menu {
    display: none !important;
  }

  .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
    display: none;
  }

  .secondary.pointing.menu .toc.item {
    display: block;
  }

  .masthead.segment {
    min-height: 350px;
  }

  .masthead h1.ui.header {
    font-size: 2em;
    margin-top: 1.5em;
  }

  .masthead h2 {
    margin-top: 0.5em;
    font-size: 1.5em;
  }
}
</style>
";
        // line 5
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 108
        echo "
";
        // line 109
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 110
        echo "<script>
  \$(document)
    .ready(function() {

      // fix menu when passed
      \$('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            \$('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            \$('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      \$('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
</script>
";
        // line 109
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 136
        echo "
<!-- Following Menu -->
<div class=\"ui large top fixed hidden menu\">
  <div class=\"ui container\">
\t<a class=\"active item\">Home</a>
\t<a class=\"item\">Work</a>
\t<a class=\"item\">Company</a>
\t<a class=\"item\">Careers</a>
\t<div class=\"right menu\">
\t  <div class=\"item\">
\t\t<a href=\"/login\" class=\"ui button\">Log in</a>
\t  </div>
\t  <div class=\"item\">
\t\t<a class=\"ui primary button\">Sign Up</a>
\t  </div>
\t</div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class=\"ui vertical inverted sidebar menu\">
  <a class=\"active item\">Home</a>
  <a class=\"item\">Work</a>
  <a class=\"item\">Company</a>
  <a class=\"item\">Careers</a>
  <a href=\"/login\" class=\"item\">Login</a>
  <a class=\"item\">Signup</a>
</div>


<!-- Page Contents -->
<div class=\"pusher\">
  <div class=\"ui inverted vertical masthead center aligned segment\">

\t<div class=\"ui container\">
\t  <div class=\"ui large secondary inverted pointing menu\">
\t\t<a class=\"toc item\">
\t\t  <i class=\"sidebar icon\"></i>
\t\t</a>
\t\t<a class=\"active item\">Home</a>
\t\t<a class=\"item\">Work</a>
\t\t<a class=\"item\">Company</a>
\t\t<a class=\"item\">Careers</a>
\t\t<div class=\"right item\">
\t\t  <a href=\"/login\" class=\"ui inverted button\">Log in</a>
\t\t  <a class=\"ui inverted button\">Sign Up</a>
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"ui text container\">
\t  <h1 class=\"ui inverted header\">
\t\tImagine-a-Company
\t  </h1>
\t  <h2>Do whatever you want when you want to.</h2>
\t  <div class=\"ui huge primary button\">Get Started <i class=\"right arrow icon\"></i></div>
\t</div>

  </div>

  <div class=\"ui vertical stripe segment\">
\t<div class=\"ui middle aligned stackable grid container\">
\t  <div class=\"row\">
\t\t<div class=\"eight wide column\">
\t\t  <h3 class=\"ui header\">We Help Companies and Companions</h3>
\t\t  <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>
\t\t  <h3 class=\"ui header\">We Make Bananas That Can Dance</h3>
\t\t  <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>
\t\t</div>
\t  </div>
\t  <div class=\"row\">
\t\t<div class=\"center aligned column\">
\t\t  <a class=\"ui huge button\">Check Them Out</a>
\t\t</div>
\t  </div>
\t</div>
  </div>


  <div class=\"ui vertical stripe quote segment\">
\t<div class=\"ui equal width stackable internally celled grid\">
\t  <div class=\"center aligned row\">
\t\t<div class=\"column\">
\t\t  <h3>\"What a Company\"</h3>
\t\t  <p>That is what they all say about us</p>
\t\t</div>
\t\t<div class=\"column\">
\t\t  <h3>\"I shouldn't have gone with their competitor.\"</h3>
\t\t  <p>
\t\t\t<img src=\"";
        // line 225
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/avatar/nan.jpg");
        echo "\" class=\"ui avatar image\"> <b>Nan</b> Chief Fun Officer Acme Toys
\t\t  </p>
\t\t</div>
\t  </div>
\t</div>
  </div>

  <div class=\"ui vertical stripe segment\">
\t<div class=\"ui text container\">
\t  <h3 class=\"ui header\">Breaking The Grid, Grabs Your Attention</h3>
\t  <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>
\t  <a class=\"ui large button\">Read More</a>
\t  <h4 class=\"ui horizontal header divider\">
\t\t<a href=\"#\">Case Studies</a>
\t  </h4>
\t  <h3 class=\"ui header\">Did We Tell You About Our Bananas?</h3>
\t  <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>
\t  <a class=\"ui large button\">I'm Still Quite Interested</a>
\t</div>
  </div>
</div>

<!-- FOOTER -->
";
        // line 248
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/Hiruma/MyWorkSpace/Me/Github/gade/themes/christophheich-semantic-ui-octobercms/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 248,  262 => 225,  171 => 136,  169 => 109,  142 => 110,  140 => 109,  137 => 108,  135 => 5,  32 => 6,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- HEADER -->*/
/* {% partial "header" %}*/
/* */
/* <!-- INJECTED STYLE -->*/
/* {% put styles %}*/
/* <style>*/
/* .hidden.menu {*/
/*   display: none;*/
/* }*/
/* */
/* .masthead.segment {*/
/*   min-height: 700px;*/
/*   padding: 1em 0em;*/
/* }*/
/* */
/* .masthead .logo.item img {*/
/*   margin-right: 1em;*/
/* }*/
/* */
/* .masthead .ui.menu .ui.button {*/
/*   margin-left: 0.5em;*/
/* }*/
/* */
/* .masthead h1.ui.header {*/
/*   margin-top: 3em;*/
/*   margin-bottom: 0em;*/
/*   font-size: 4em;*/
/*   font-weight: normal;*/
/* }*/
/* */
/* .masthead h2 {*/
/*   font-size: 1.7em;*/
/*   font-weight: normal;*/
/* }*/
/* */
/* .ui.vertical.stripe {*/
/*   padding: 8em 0em;*/
/* }*/
/* */
/* .ui.vertical.stripe h3 {*/
/*   font-size: 2em;*/
/* }*/
/* */
/* .ui.vertical.stripe .button + h3,*/
/*     .ui.vertical.stripe p + h3 {*/
/*   margin-top: 3em;*/
/* }*/
/* */
/* .ui.vertical.stripe .floated.image {*/
/*   clear: both;*/
/* }*/
/* */
/* .ui.vertical.stripe p {*/
/*   font-size: 1.33em;*/
/* }*/
/* */
/* .ui.vertical.stripe .horizontal.divider {*/
/*   margin: 3em 0em;*/
/* }*/
/* */
/* .quote.stripe.segment {*/
/*   padding: 0em;*/
/* }*/
/* */
/* .quote.stripe.segment .grid .column {*/
/*   padding-top: 5em;*/
/*   padding-bottom: 5em;*/
/* }*/
/* */
/* .footer.segment {*/
/*   padding: 5em 0em;*/
/* }*/
/* */
/* .secondary.pointing.menu .toc.item {*/
/*   display: none;*/
/* }*/
/* */
/* @media only screen and (max-width: 700px) {*/
/*   .ui.fixed.menu {*/
/*     display: none !important;*/
/*   }*/
/* */
/*   .secondary.pointing.menu .item,*/
/*       .secondary.pointing.menu .menu {*/
/*     display: none;*/
/*   }*/
/* */
/*   .secondary.pointing.menu .toc.item {*/
/*     display: block;*/
/*   }*/
/* */
/*   .masthead.segment {*/
/*     min-height: 350px;*/
/*   }*/
/* */
/*   .masthead h1.ui.header {*/
/*     font-size: 2em;*/
/*     margin-top: 1.5em;*/
/*   }*/
/* */
/*   .masthead h2 {*/
/*     margin-top: 0.5em;*/
/*     font-size: 1.5em;*/
/*   }*/
/* }*/
/* </style>*/
/* {% endput %}*/
/* */
/* {% put scripts %}*/
/* <script>*/
/*   $(document)*/
/*     .ready(function() {*/
/* */
/*       // fix menu when passed*/
/*       $('.masthead')*/
/*         .visibility({*/
/*           once: false,*/
/*           onBottomPassed: function() {*/
/*             $('.fixed.menu').transition('fade in');*/
/*           },*/
/*           onBottomPassedReverse: function() {*/
/*             $('.fixed.menu').transition('fade out');*/
/*           }*/
/*         })*/
/*       ;*/
/* */
/*       // create sidebar and attach to menu open*/
/*       $('.ui.sidebar')*/
/*         .sidebar('attach events', '.toc.item')*/
/*       ;*/
/* */
/*     })*/
/*   ;*/
/* </script>*/
/* {% endput %}*/
/* */
/* <!-- Following Menu -->*/
/* <div class="ui large top fixed hidden menu">*/
/*   <div class="ui container">*/
/* 	<a class="active item">Home</a>*/
/* 	<a class="item">Work</a>*/
/* 	<a class="item">Company</a>*/
/* 	<a class="item">Careers</a>*/
/* 	<div class="right menu">*/
/* 	  <div class="item">*/
/* 		<a href="/login" class="ui button">Log in</a>*/
/* 	  </div>*/
/* 	  <div class="item">*/
/* 		<a class="ui primary button">Sign Up</a>*/
/* 	  </div>*/
/* 	</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- Sidebar Menu -->*/
/* <div class="ui vertical inverted sidebar menu">*/
/*   <a class="active item">Home</a>*/
/*   <a class="item">Work</a>*/
/*   <a class="item">Company</a>*/
/*   <a class="item">Careers</a>*/
/*   <a href="/login" class="item">Login</a>*/
/*   <a class="item">Signup</a>*/
/* </div>*/
/* */
/* */
/* <!-- Page Contents -->*/
/* <div class="pusher">*/
/*   <div class="ui inverted vertical masthead center aligned segment">*/
/* */
/* 	<div class="ui container">*/
/* 	  <div class="ui large secondary inverted pointing menu">*/
/* 		<a class="toc item">*/
/* 		  <i class="sidebar icon"></i>*/
/* 		</a>*/
/* 		<a class="active item">Home</a>*/
/* 		<a class="item">Work</a>*/
/* 		<a class="item">Company</a>*/
/* 		<a class="item">Careers</a>*/
/* 		<div class="right item">*/
/* 		  <a href="/login" class="ui inverted button">Log in</a>*/
/* 		  <a class="ui inverted button">Sign Up</a>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	<div class="ui text container">*/
/* 	  <h1 class="ui inverted header">*/
/* 		Imagine-a-Company*/
/* 	  </h1>*/
/* 	  <h2>Do whatever you want when you want to.</h2>*/
/* 	  <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>*/
/* 	</div>*/
/* */
/*   </div>*/
/* */
/*   <div class="ui vertical stripe segment">*/
/* 	<div class="ui middle aligned stackable grid container">*/
/* 	  <div class="row">*/
/* 		<div class="eight wide column">*/
/* 		  <h3 class="ui header">We Help Companies and Companions</h3>*/
/* 		  <p>We can give your company superpowers to do things that they never thought possible. Let us delight your customers and empower your needs...through pure data analytics.</p>*/
/* 		  <h3 class="ui header">We Make Bananas That Can Dance</h3>*/
/* 		  <p>Yes that's right, you thought it was the stuff of dreams, but even bananas can be bioengineered.</p>*/
/* 		</div>*/
/* 	  </div>*/
/* 	  <div class="row">*/
/* 		<div class="center aligned column">*/
/* 		  <a class="ui huge button">Check Them Out</a>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/*   </div>*/
/* */
/* */
/*   <div class="ui vertical stripe quote segment">*/
/* 	<div class="ui equal width stackable internally celled grid">*/
/* 	  <div class="center aligned row">*/
/* 		<div class="column">*/
/* 		  <h3>"What a Company"</h3>*/
/* 		  <p>That is what they all say about us</p>*/
/* 		</div>*/
/* 		<div class="column">*/
/* 		  <h3>"I shouldn't have gone with their competitor."</h3>*/
/* 		  <p>*/
/* 			<img src="{{ 'assets/images/avatar/nan.jpg'|theme }}" class="ui avatar image"> <b>Nan</b> Chief Fun Officer Acme Toys*/
/* 		  </p>*/
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/*   </div>*/
/* */
/*   <div class="ui vertical stripe segment">*/
/* 	<div class="ui text container">*/
/* 	  <h3 class="ui header">Breaking The Grid, Grabs Your Attention</h3>*/
/* 	  <p>Instead of focusing on content creation and hard work, we have learned how to master the art of doing nothing by providing massive amounts of whitespace and generic content that can seem massive, monolithic and worth your attention.</p>*/
/* 	  <a class="ui large button">Read More</a>*/
/* 	  <h4 class="ui horizontal header divider">*/
/* 		<a href="#">Case Studies</a>*/
/* 	  </h4>*/
/* 	  <h3 class="ui header">Did We Tell You About Our Bananas?</h3>*/
/* 	  <p>Yes I know you probably disregarded the earlier boasts as non-sequitor filler content, but its really true. It took years of gene splicing and combinatory DNA research, but our bananas can really dance.</p>*/
/* 	  <a class="ui large button">I'm Still Quite Interested</a>*/
/* 	</div>*/
/*   </div>*/
/* </div>*/
/* */
/* <!-- FOOTER -->*/
/* {% partial "footer" %}*/
