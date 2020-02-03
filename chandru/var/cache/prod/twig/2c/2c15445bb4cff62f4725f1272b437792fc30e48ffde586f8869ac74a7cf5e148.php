<?php

/* :invoice:changepstatus.html.twig */
class __TwigTemplate_48dc95587115fe137df10391f69d5f546a91d3797b7ba1c4731f4fcf655caeaa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":invoice:changepstatus.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"paddtopbottom-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
<p><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a> / <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invoice");
        echo "\">Invoice</a> / Change Payment Status</p>
</div>
  <div class=\"bg-white table-bg\">
  <h2></h2>

 ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  


<div class=\"row\">
<div class=\"col-sm-2\">

<div class=\"form-group\">
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "paiddate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "paiddate", array()), 'errors');
        echo "</span>
</div>

</div>




<div class=\"col-sm-10\">

<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Change Payment Status </button> 
 </div>

 </div>

</div>
";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return ":invoice:changepstatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  65 => 20,  61 => 19,  51 => 12,  41 => 7,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":invoice:changepstatus.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/invoice/changepstatus.html.twig");
    }
}
