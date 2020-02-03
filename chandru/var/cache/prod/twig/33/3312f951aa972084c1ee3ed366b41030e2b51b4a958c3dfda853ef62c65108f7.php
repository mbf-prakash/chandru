<?php

/* :purchasebyyear:purchasebyyear.html.twig */
class __TwigTemplate_10e46d7f076cb993facda89f244e5065d398d2bb0b0ab0e78ee43767e1f48033 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":purchasebyyear:purchasebyyear.html.twig", 1);
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
<div class=\"container\">



<div class=\"bg-white padding-10 border\">
<h5 class=\"page-title text-center\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo " Purchase</h5>


<center>


";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  

<div class=\"form-inline\">

<div class=\"form-group\">
";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'errors');
        echo "</span>
</div>

<button type=\"submit\" class=\"btn btn-primary\">Search</button>

</div>



";
        // line 39
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
<th class=\"text-center\">Supplier</th>
<th class=\"text-center\">Status</th>
<th class=\"text-center\">Total</th>
</tr>
</thead>




";
        // line 61
        $context["totalpurchaseamount"] = 0;
        // line 62
        $context["counter"] = 1;
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["purchase"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            $context["totalpurchaseamount"] = (($context["totalpurchaseamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()));
            // line 65
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicenumber", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "supplier", array()), "supplier", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "status", array()) == true)) {
                echo " Paid ";
            } else {
                echo " UnPaid ";
            }
            echo "</span> </td>
<td class=\"text-right\"><span>";
            // line 71
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "grandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 75
            $context["counter"] = (($context["counter"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
<tr>
<th class=\"text-right\" colspan=\"4\">Total Amount</th>
<th class=\"text-right\">";
        // line 80
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalpurchaseamount"] ?? null), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>

</table>
</div>
</div>
<div class=\"clearfix\"></div>

</div>
<section>

</div>




";
    }

    public function getTemplateName()
    {
        return ":purchasebyyear:purchasebyyear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 80,  157 => 77,  151 => 75,  144 => 71,  136 => 70,  132 => 69,  128 => 68,  124 => 67,  120 => 65,  118 => 64,  114 => 63,  112 => 62,  110 => 61,  85 => 39,  73 => 30,  69 => 29,  61 => 24,  52 => 18,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":purchasebyyear:purchasebyyear.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/purchasebyyear/purchasebyyear.html.twig");
    }
}
