<?php

/* :pinvoiceitem:pinvoiceitem.html.twig */
class __TwigTemplate_f40de76a6b8ac5a63d9b5070af5a23fd2a1e7fabdcb9de828f676c7ac0444a80 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":pinvoiceitem:pinvoiceitem.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'grid_filters' => array($this, 'block_grid_filters'),
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
  <h2></h2>
 
 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 


<div class=\"form-group\">

<div class=\"row\">
<div class=\"col-sm-7    \">
<label>Select Product<span class=\"required\">*</span></label>
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Product Name")));
        echo "
    <span class=\"error required\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'errors');
        echo "</span>
</div>
<div class=\"col-sm-1\">
<label>Rate<span class=\"required\">*</span></label>
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rate", array()), 'errors');
        echo "</span>
</div> 


<div class=\"col-sm-1\">
<label>Qty<span class=\"required\">*</span></label>
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", array()), 'errors');
        echo "</span>
</div> 
<div class=\"col-sm-1\">
<label>Amount<span class=\"required\">*</span></label>
";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amount", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amount", array()), 'errors');
        echo "</span>
</div> 

<div class=\"col-sm-2\">
<div style=\"padding-bottom:6px\">&nbsp;</div>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>
</div>

";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "



";
        // line 52
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid($this->env, ($context["grid"] ?? null));
        echo "

";
        // line 54
        $this->displayBlock('grid_filters', $context, $blocks);
        // line 55
        echo "


</div>
</div>
</div>


 ";
    }

    // line 54
    public function block_grid_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":pinvoiceitem:pinvoiceitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  123 => 55,  121 => 54,  116 => 52,  109 => 48,  97 => 39,  93 => 38,  86 => 34,  82 => 33,  73 => 27,  69 => 26,  62 => 22,  58 => 21,  46 => 12,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":pinvoiceitem:pinvoiceitem.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/pinvoiceitem/pinvoiceitem.html.twig");
    }
}
