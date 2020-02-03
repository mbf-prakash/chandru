<?php

/* :product:editproduct.html.twig */
class __TwigTemplate_b770b7603c928529845bfbf86090b93cdc12133fb88ecdc084df0f087d467950 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":product:editproduct.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a> / <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Product</a> / Edit Product</p>
</div>
  <div class=\"bg-white table-bg\">
  <h2>Edit Product</h2>

 ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  


<div class=\"form-group\">
<label>Category<span class=\"required\">*</span></label>
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'errors');
        echo "</span>
</div>


<div class=\"form-group\">
<label>Product Name<span class=\"required\">*</span></label>
";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Unit<span class=\"required\">*</span></label>
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unit", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>HSSN Code<span class=\"required\">*</span></label>
";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hssncode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hssncode", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>GST Percentage<span class=\"required\">*</span></label>
";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gst", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gst", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>MRP<span class=\"required\">*</span></label>
";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mrp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mrp", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Discount Percentage<span class=\"required\">*</span></label>
";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Selling Rate<span class=\"required\">*</span></label>
";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rate", array()), 'errors');
        echo "</span>
</div>




<div class=\"form-group\">
<label>Stock<span class=\"required\">*</span></label>
";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "stock", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "stock", array()), 'errors');
        echo "</span>
</div>


<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>


";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
  </div>
</div>


 ";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        echo "
 ";
        // line 91
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
\$(document).ready(function(){
    \$(\"#product_mrp\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
      \$(\"#product_discount\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
     \$(\"#product_gst\").change(function(){
        var num=\$(\"#product_mrp\").val()-(\$(\"#product_mrp\").val()*(\$(\"#product_discount\").val()/100));
        var gst=1+(\$(\"#product_gst\").val()/100);
        num=num/gst;
        \$(\"#product_rate\").val(num.toFixed(2));
       
    });
});
</script>

  ";
    }

    public function getTemplateName()
    {
        return ":product:editproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 91,  193 => 90,  190 => 89,  178 => 81,  165 => 71,  161 => 70,  150 => 62,  146 => 61,  138 => 56,  134 => 55,  126 => 50,  122 => 49,  114 => 44,  110 => 43,  102 => 38,  98 => 37,  90 => 32,  86 => 31,  78 => 26,  74 => 25,  65 => 19,  61 => 18,  53 => 13,  43 => 8,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":product:editproduct.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/product/editproduct.html.twig");
    }
}
