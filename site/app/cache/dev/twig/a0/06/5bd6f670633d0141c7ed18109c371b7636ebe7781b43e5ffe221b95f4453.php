<?php

/* dinosaurs/index.html.twig */
class __TwigTemplate_a0065bd6f670633d0141c7ed18109c371b7636ebe7781b43e5ffe221b95f4453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"dino-header text-center\">
            <h1>Journey to the Center of the Earth</h1>
            <h2 class=\"journey-font\">DINOSAURS!</h2>
        </div>
        <div class=\"row\">
            ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dinos"]) ? $context["dinos"] : $this->getContext($context, "dinos")));
        foreach ($context['_seq'] as $context["_key"] => $context["dino"]) {
            // line 11
            echo "                <div class=\"center-block col-xs-12 col-sm-6 col-md-4\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dinosaur_show", array("id" => $this->getAttribute($context["dino"], "id", array()))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["dino"], "imageUrl", array()), "html", null, true);
            echo "\"  alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dino"], "type", array()), "html", null, true);
            echo "\" class=\"center-block img-thumbnail dino-img\"/>
                    </a>
                    <br>
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dinosaur_show", array("id" => $this->getAttribute($context["dino"], "id", array()))), "html", null, true);
            echo "\">
                        <p class=\"dino-name\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["dino"], "name", array()), "html", null, true);
            echo " the ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dino"], "type", array()), "html", null, true);
            echo "</p>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dinosaurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  62 => 17,  58 => 16,  50 => 13,  46 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
