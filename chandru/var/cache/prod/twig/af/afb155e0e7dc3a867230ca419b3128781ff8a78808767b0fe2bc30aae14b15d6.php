<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7d9183ffc24ac94ebcea9e8a9b4d16b55a7a64cfb37fd7680b2219e27186f5b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::adminlayout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::adminlayout.html.twig";
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
  <h3>Let's confirm your email</h3>
  <div>Confirming your email ensures you always have access to your account</div>
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
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array())), "FOSUserBundle"), "html", null, true);
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
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 25,  47 => 16,  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:checkEmail.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
