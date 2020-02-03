<?php

/* :invoiceitem:invoiceitem.html.twig */
class __TwigTemplate_0b4d147fd2711f13f63322c3b0458b40432aa3f9baebba3aeeabdf406ee13ffa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":invoiceitem:invoiceitem.html.twig", 1);
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

   ";
        // line 10
        echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
        echo "
  <div class=\"bg-white table-bg\">
  <h2></h2>
 
 ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo " 
 


<div class=\"form-group\">

<div class=\"row\">
<div class=\"col-sm-8\">
<label>Select Product<span class=\"required\">*</span></label>
";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Product Name")));
        echo "
    <span class=\"error required\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product", array()), 'errors');
        echo "</span>
</div>
<div class=\"col-sm-1\">
<label>Disc(%)<span class=\"required\">*</span></label>
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discount", array()), 'errors');
        echo "</span>
</div> 

<div class=\"col-sm-1\">
<label>Qty<span class=\"required\">*</span></label>
";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", array()), 'errors');
        echo "</span>
</div> 

<div class=\"col-sm-2\">
<div style=\"padding-bottom:6px\">&nbsp;</div>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\">
<i class=\"fa fa-floppy-o\"></i> &nbsp; Save </button> 
</div>
</div>

";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


";
        // line 48
        if ((($context["subtotal"] ?? null) > 0)) {
            // line 49
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid($this->env, ($context["grid"] ?? null));
            echo "

";
            // line 51
            $this->displayBlock('grid_filters', $context, $blocks);
            // line 52
            echo "<div class=\"grid\">
<table class=\"table table-striped\">
<tbody>

    <tr>
        <td style=\"width:50px\"></td>
        <td style=\"text-align:right;color:red;\">Sub Total</td> 
        <td style=\"width:100px;text-align:right;color:red;\">";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["subtotal"] ?? null), 2, ".", ","), "html", null, true);
            echo "</td>
        <td style=\"width:135px;\"></td>
    </tr>
";
            // line 62
            if ((($context["igst"] ?? null) == 0)) {
                // line 63
                echo "    <tr>
        <td></td>
        <td style=\"text-align:right\">CGST</td> 
        <td style=\"text-align:right\">";
                // line 66
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["cgst"] ?? null), 2, ".", ","), "html", null, true);
                echo "</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td style=\"text-align:right\">SGST</td> 
        <td style=\"text-align:right\">";
                // line 72
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sgst"] ?? null), 2, ".", ","), "html", null, true);
                echo "</td>
        <td></td>
    </tr>
   ";
            } else {
                // line 76
                echo "   <tr>
        <td></td>
        <td style=\"text-align:right\">IGST</td> 
        <td style=\"text-align:right\">";
                // line 79
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["igst"] ?? null), 2, ".", ","), "html", null, true);
                echo "</td>
        <td></td>
    </tr>
";
            }
            // line 83
            echo "    <tr>
        <td></td>
        <td style=\"text-align:right;color:red;\">Total</td> 
        <td style=\"text-align:right;color:red;\">";
            // line 86
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? null), 2, ".", ","), "html", null, true);
            echo "</td>
        <td></td>
    </tr>

</tbody>
</table>
</div>
";
        }
        // line 94
        echo "
</div>
</div>
</div>


 ";
    }

    // line 51
    public function block_grid_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":invoiceitem:invoiceitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 51,  184 => 94,  173 => 86,  168 => 83,  161 => 79,  156 => 76,  149 => 72,  140 => 66,  135 => 63,  133 => 62,  127 => 59,  118 => 52,  116 => 51,  111 => 49,  109 => 48,  103 => 45,  90 => 35,  86 => 34,  78 => 29,  74 => 28,  67 => 24,  63 => 23,  51 => 14,  44 => 10,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":invoiceitem:invoiceitem.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/invoiceitem/invoiceitem.html.twig");
    }
}
