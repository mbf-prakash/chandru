<?php

/* :product:addproduct.html.twig */
class __TwigTemplate_6d1ef027c4f485ca0b29470f946104e62c1ba000c9c693cbf57dad76debd3c5d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":product:addproduct.html.twig", 1);
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
        echo "\">Product</a> / Add Product</p>
</div>
  <div class=\"bg-white table-bg\">
  <h2>Create Product</h2>

 ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  



<div class=\"form-group\">
<label>Category<span class=\"required\">*</span></label>
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'errors');
        echo "</span>
</div>


<div class=\"form-group\">
<label>Product Name<span class=\"required\">*</span></label>
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Unit<span class=\"required\">*</span></label>
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unit", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>HSSN Code<span class=\"required\">*</span></label>
";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hssncode", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 39
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
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mrp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "mrp", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Discount Percentage<span class=\"required\">*</span></label>
";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount", array()), 'errors');
        echo "</span>
</div>

<div class=\"form-group\">
<label>Selling Rate<span class=\"required\">*</span></label>
";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rate", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 61
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
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

    </div>
  </div>
</div>


 ";
    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        // line 89
        echo "
 ";
        // line 90
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
        return ":product:addproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 90,  192 => 89,  189 => 88,  177 => 80,  165 => 71,  161 => 70,  149 => 61,  145 => 60,  137 => 55,  133 => 54,  125 => 49,  121 => 48,  114 => 44,  110 => 43,  103 => 39,  99 => 38,  91 => 33,  87 => 32,  79 => 27,  75 => 26,  66 => 20,  62 => 19,  53 => 13,  43 => 8,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":product:addproduct.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/product/addproduct.html.twig");
    }
}
