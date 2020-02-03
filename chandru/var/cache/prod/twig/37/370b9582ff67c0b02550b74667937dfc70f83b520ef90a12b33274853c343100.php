<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_712de0b8019846682006931e5a6540d6cc054ed22590ad7a849b4a73e57e4aa0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"admin\" class=\"img-fluid img-center\">
<p class=\"error tex text-center fontsize-20 paddtop-20\">Reset email has been sent</p>
<p>";
        // line 8
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? null)), "FOSUserBundle"), "html", null, true));
        echo "</p>  
<p class=\"text-center\"><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> Cancel</a></p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  41 => 8,  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:check_email.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
