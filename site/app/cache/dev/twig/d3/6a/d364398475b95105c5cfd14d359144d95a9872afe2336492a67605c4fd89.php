<?php

/* base.html.twig */
class __TwigTemplate_d36ad364398475b95105c5cfd14d359144d95a9872afe2336492a67605c4fd89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("dinosaur_list");
        echo "\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/dino-logo.png"), "html", null, true);
        echo "\" alt=\"Dino logo\">
                    </a>
                </div>
            </div>
        </nav>

        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "
        <div class=\"navbar-inverse navbar-static-bottom\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-text\">
                    <p>Journey to the Center of Symfony with your guide KnpUniversity</p>
                </div>
                <div class=\"navbar-text navbar-right\">
                    <p>Dino image credit to <a href=\"http://dinosaurs.about.com/od/typesofdinosaurs/tp/dinosaurgroups.htm\" class=\"navbar-link\">about.com</a></p>
                </div>
                <div class=\"clearfix\">
                </div>
            </div>
        </div>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Journey to the Center of Symfony!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <!-- Bootstrap -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Custom CSS -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Google Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
        ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  117 => 45,  112 => 30,  104 => 13,  99 => 11,  96 => 10,  93 => 9,  87 => 7,  81 => 46,  79 => 45,  63 => 31,  61 => 30,  52 => 24,  48 => 23,  38 => 17,  36 => 9,  31 => 7,  23 => 1,);
    }
}
