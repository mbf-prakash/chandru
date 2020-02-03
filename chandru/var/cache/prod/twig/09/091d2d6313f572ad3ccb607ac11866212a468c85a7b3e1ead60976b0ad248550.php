<?php

/* :expensesbymonth:expensesbymonth.html.twig */
class __TwigTemplate_ef741b310c61f208e6d503284609835bb4b8e0374a2e4f6aa35495f800c2b6af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":expensesbymonth:expensesbymonth.html.twig", 1);
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
        echo " Expenses</h5>


<center>


";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "  

<div class=\"form-inline\">

<div class=\"form-group mgrt-30\">
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'errors');
        echo "</span>
</div>



<div class=\"form-group\">
";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    <span class=\"error required\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'errors');
        echo "</span>
</div>

<button type=\"submit\" class=\"btn btn-primary\">Search</button>

</div>



";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

</center> <br>


<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Name</th>
<th class=\"text-center\">Amount</th>
</tr>
</thead>
<tbody>


";
        // line 63
        $context["totalexpensesamount"] = 0;
        // line 64
        $context["counter"] = 1;
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["expenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            $context["totalexpensesamount"] = (($context["totalexpensesamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()));
            // line 67
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td class=\"text-center\"> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 76
            $context["counter"] = (($context["counter"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
<tr>
<th class=\"text-right\" colspan=\"3\">Total Amount</th>
<th class=\"text-right\">";
        // line 81
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalexpensesamount"] ?? null), 2, ".", ","), "html", null, true);
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
        return ":expensesbymonth:expensesbymonth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 81,  157 => 78,  151 => 76,  144 => 72,  140 => 71,  136 => 70,  132 => 69,  128 => 67,  126 => 66,  122 => 65,  120 => 64,  118 => 63,  97 => 45,  85 => 36,  81 => 35,  72 => 29,  68 => 28,  60 => 23,  51 => 17,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":expensesbymonth:expensesbymonth.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/expensesbymonth/expensesbymonth.html.twig");
    }
}
