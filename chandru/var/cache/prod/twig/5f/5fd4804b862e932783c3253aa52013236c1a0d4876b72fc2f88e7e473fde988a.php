<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_9983afd19847cff837bb99c72eb0bfbccac6ed103d428d3dd574cf77ce904877 extends Twig_Template
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
        echo " 
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"admin\" class=\"img-fluid img-center\">

               
                
                ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? null))), "attr" => array("class" => "margintopbott-40", "role" => "form", "novalidate" => "novalidate")));
        echo "
    
   
                    <div class=\"form-group\">
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "New Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'errors');
        echo "</span>
                    </div>
                    <div class=\"form-group\">
                     ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control form-size", "placeholder" => "Confirm New Password")));
        echo "<span class=\"error\">";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'errors');
        echo "</span>
                      </div>
                    
                    <p class=\"paddingtopbott-30\">
                     <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"RESET PASSWORD\" class=\"btn btn-info login\" />
                     </p>
                   
               ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


 


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  48 => 13,  40 => 10,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:reset_content.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
