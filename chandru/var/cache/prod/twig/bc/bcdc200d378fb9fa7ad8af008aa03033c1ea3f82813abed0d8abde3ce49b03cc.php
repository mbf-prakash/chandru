<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_30e0974671a00fcb3ca33af35a44f6a768fa06fe0cce66dbc7c24a2f925359a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<section id=\"section-banner\">
  <div class=\"container\">
<div class=\"col-lg-12 col-md-12 col-xs-12  col-sm-12 form1\">
<center>
  <h3>Email Confirmed</h3>
  
</center>
</div>

<div class=\"col-lg-8 col-md-8 col-md-offset-2 col-xs-12 col-sm-12 \">
<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Confirmation email\" title=\"Confirmation email\"> 
<div class=\"email_bg\">
<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">

<div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-3\">
<i class=\"fa fa-envelope email\"></i>
</div>

<div class=\"col-lg-11 col-md-11 col-sm-9 col-xs-9\">

<span class=\"email-address\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array())), "FOSUserBundle"), "html", null, true);
        echo ".";
        if (($context["targetUrl"] ?? null)) {
            // line 27
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
       
    ";
        }
        // line 29
        echo "</span>
</div><div class=\"clearfix\"></div>

<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\"></div>

</div>
</div>
</div>
</div>
</section>
 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 29,  64 => 27,  60 => 26,  47 => 16,  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:confirmed.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
