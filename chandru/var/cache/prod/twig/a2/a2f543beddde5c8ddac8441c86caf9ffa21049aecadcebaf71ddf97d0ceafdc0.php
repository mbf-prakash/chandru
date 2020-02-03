<?php

/* :salebymonth:salebymonth.html.twig */
class __TwigTemplate_46e4967902f400467580615e6bc21eba5c11487e3b40a87b25c321e32d7fe7f1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":salebymonth:salebymonth.html.twig", 1);
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
<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>


\t<div class=\"padding-20\">
    
    
    
    
    <section id=\"sales\" class=\"margintop-20\">
<div class=\"container-fluid\">


<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["monthyear"] ?? null), "html", null, true);
        echo " Sales</h5>
<center>


";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  

<div class=\"form-inline\">

<div class=\"form-group mgrt-30\">
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'errors');
        echo "</span>
</div>



<div class=\"form-group\">
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'errors');
        echo "</span>
</div>

<button type=\"submit\" class=\"btn btn-primary\">Search</button>

</div>



";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

</center>
<br>


<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Customer</th>
<th class=\"text-center\">Status</th>
<th class=\"text-center\">Total</th>
</tr>
</thead>
<tbody>


";
        // line 63
        $context["totalsalesamount"] = 0;
        // line 64
        $context["counter"] = 1;
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            $context["totalsalesamount"] = (($context["totalsalesamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 67
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "company", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == true)) {
                echo " Paid ";
            } else {
                echo " UnPaid ";
            }
            echo "</span> </td>
<td class=\"text-right\"><span>";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 77
            $context["counter"] = (($context["counter"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">";
        // line 82
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalsalesamount"] ?? null), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>


</tbody>
</table>
</div>

</div>

</div>
<section>

</div>




";
    }

    public function getTemplateName()
    {
        return ":salebymonth:salebymonth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 82,  165 => 79,  159 => 77,  152 => 73,  144 => 72,  140 => 71,  136 => 70,  132 => 69,  128 => 67,  126 => 66,  122 => 65,  120 => 64,  118 => 63,  95 => 43,  83 => 34,  79 => 33,  70 => 27,  66 => 26,  58 => 21,  51 => 17,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":salebymonth:salebymonth.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/salebymonth/salebymonth.html.twig");
    }
}
