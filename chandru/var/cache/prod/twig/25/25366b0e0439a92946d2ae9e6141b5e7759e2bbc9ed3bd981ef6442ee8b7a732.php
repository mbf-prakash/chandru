<?php

/* :dashboard:_username.html.twig */
class __TwigTemplate_a6acc7dfc020a89e23797654ca819c4d21fab8f9c3b6ee938e72adf6c19489c8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"d-sm-none d-lg-inline-block\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return ":dashboard:_username.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":dashboard:_username.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/dashboard/_username.html.twig");
    }
}
