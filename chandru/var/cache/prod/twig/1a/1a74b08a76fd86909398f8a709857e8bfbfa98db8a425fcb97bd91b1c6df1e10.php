<?php

/* :state:editstate.html.twig */
class __TwigTemplate_eaf2e35b837658a33895b3d8eaf5feeb3cf56feca54cc380edc2032e1ab5ca30 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":state:editstate.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " 

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
  <h2>Edit State</h2>
 
 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 

 
<div class=\"form-group\">
<label>State<span class=\"required\">*</span></label>
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>StateCode<span class=\"required\">*</span></label>
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "statecode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "statecode", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp;  Save Changes </button> 
 <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("state");
        echo "\" class=\"btn btn-secondary\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i> Cancel</a>
</div>

  ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    </div>
    </div>

 ";
    }

    public function getTemplateName()
    {
        return ":state:editstate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  79 => 31,  70 => 25,  66 => 24,  58 => 19,  54 => 18,  45 => 12,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":state:editstate.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/state/editstate.html.twig");
    }
}