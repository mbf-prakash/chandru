<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fc97ef4379cfa42e093f1eef197afa28d8f7b86600e0be147547ce4a027c3887 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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

               
                <form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"margintopbott-40\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
    ";
        // line 11
        if (($context["error"] ?? null)) {
            // line 12
            echo "    <div class=\"error text-center\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Username / Email Address\">
                    </div>
                    <div class=\"form-group\">
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control form-size\" placeholder=\"Password\">
                      </div>
                      <div class=\"form-check\">
                      <label class=\"form-check-label\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"form-check-input\" value=\"\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                      </label>
                      <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\" class=\"body-color\" ><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> Forgot pwd?</a>
                      
                    </div>
                    <p class=\"paddingtopbott-30\">
                     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"LOG IN\" class=\"btn btn-info login\" />
                     </p>
                   
                </form>
<!--
<ul class=\"text-center\">
  <li class=\"list-item-inline\"><a href=\"https://www.facebook.com/\" title=\"Login with facebook\" data-toggle=\"tooltip\" target=\"_blank\"><i class=\"fa fa-facebook fa-icon face-color\" aria-hidden=\"true\"></i></a></li> 
  <li class=\"list-item-inline\"><a href=\"https://plus.google.com\" title=\"Login with google+\" data-toggle=\"tooltip\" target=\"_blank\"><i class=\"fa fa-google-plus fa-icon google-color\" aria-hidden=\"true\"></i></a></li> 
</ul>
                <p class=\"text-center\">Don't have an account? <a href=\"#\" class=\"sign\">Sign Up</a></p> -->

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  71 => 22,  61 => 15,  58 => 14,  52 => 12,  50 => 11,  46 => 10,  42 => 9,  35 => 6,  32 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
