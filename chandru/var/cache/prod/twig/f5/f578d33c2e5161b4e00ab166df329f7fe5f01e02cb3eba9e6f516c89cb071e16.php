<?php

/* :purchaseitems:purchaseitems.html.twig */
class __TwigTemplate_1733b970baf1c60205292ad17606dd909ec3a36d643d00c29fd62d146ac8bb07 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":purchaseitems:purchaseitems.html.twig", 1);
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



<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Supplier Name</th>
<th class=\"text-center\">Product Name</th>
<th class=\"text-center\">Quantity</th>
<th class=\"text-center\">Amount</th>
</tr>
</thead>
<tbody>



";
        // line 29
        $context["totalinamount"] = 0;
        // line 30
        $context["counter"] = 1;
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pinvoiceitem"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            $context["totalinamount"] = (($context["totalinamount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()));
            // line 33
            echo "
<tr>
<td class=\"text-center\"> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "pinvoice", array()), "invoicedate", array()), "d-m-Y"), "html", null, true);
            echo " </td>
<td class=\"text-center\"> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "pinvoice", array()), "supplier", array()), "supplier", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product", array()), "html", null, true);
            echo "</td>
<td class=\"text-center\"> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", array()), "html", null, true);
            echo "</td>
<td class=\"text-right\"><span>";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()), 2, ".", ","), "html", null, true);
            echo "</span></td>
</tr>


";
            // line 44
            $context["counter"] = (($context["counter"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
<tr>
<th class=\"text-right\" colspan=\"5\">Total Amount</th>
<th class=\"text-right\">";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalinamount"] ?? null), 2, ".", ","), "html", null, true);
        echo "</th>
</tr>


</tbody>
</table>
</div>


<div class=\"row \">
<div class=\"col-sm-12 text-center\">

               ";
        // line 62
        echo "               <div class=\"navigation\">
               <ul class=\"p12\">
               <li>
               ";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pinvoiceitem"] ?? null));
        echo "
               </li>
               </ul>

               </div>
</div>
</div>



</div>
</div>
</div>


 ";
    }

    public function getTemplateName()
    {
        return ":purchaseitems:purchaseitems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  129 => 62,  114 => 49,  109 => 46,  103 => 44,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  80 => 36,  76 => 35,  72 => 33,  70 => 32,  66 => 31,  64 => 30,  62 => 29,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":purchaseitems:purchaseitems.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/purchaseitems/purchaseitems.html.twig");
    }
}
