<?php

/* :pinvoice:pinvoiceamount.html.twig */
class __TwigTemplate_1d31df6d8621d271b871b2a0c196cbaecdd3e82b01af20ff277dbac305f7536c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":pinvoice:pinvoiceamount.html.twig", 1);
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
<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>


";
        // line 10
        if ((($context["pinvoiceamt"] ?? null) > 0)) {
            // line 11
            echo "
  <div class=\"bg-white table-bg\">
   ";
            // line 13
            echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
            echo "
  <h2></h2>

 ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("method" => "post", "attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
            echo "  


<div class=\"row\">
<div class=\"col-sm-2\">
</div>
<div class=\"col-sm-3\">

<div class=\"form-group\">
";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "paiddate", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Paid Date")));
            echo "
    <span class=\"error required\">";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "paiddate", array()), 'errors');
            echo "</span>
</div>

</div>

<div class=\"col-sm-3\">

<div class=\"form-group\">
";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amount", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Paid Amount")));
            echo "
    <span class=\"error required\">";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amount", array()), 'errors');
            echo "</span>
</div>

</div>




<div class=\"col-sm-4\">

<div class=\"form-group\">
<label></label>
<button type=\"submit\" name=\"submit\"  class=\"btn btn-danger addnew1 pull-left\"><i class=\"fa fa-floppy-o\"></i> &nbsp; Submit </button> 
 </div>

 </div>

</div>
";
            // line 53
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "


<div class=\"row justify-content-md-center\">
<div class=\"col-sm-6\">

<div class=\"table-responsive\">
<table class=\"table table-hover no-wrap\">
<thead>
<tr class=\"bg-info text-white\">
<th class=\"text-center\">Invoice #</th>
<th class=\"text-center\">Date</th>
<th class=\"text-center\">Amount</th>
<th class=\"text-center\">Balance</th>
</tr>
</thead>

<tbody>

";
            // line 72
            $context["counter"] = 1;
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paidamount"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                echo "
<tr>
<td class=\"text-center\"> ";
                // line 76
                echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                echo " </td>
<td class=\"text-center\"> ";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "paiddate", array()), "d-m-Y"), "html", null, true);
                echo " </td>
<td class=\"text-right\"> ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", array()), "html", null, true);
                echo "</td>
<td class=\"text-right\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "balance", array()), "html", null, true);
                echo "</td>
</tr>


";
                // line 83
                $context["counter"] = (($context["counter"] ?? null) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "
</tbody>
</table>
</div>
</div>
</div>

";
        }
        // line 93
        echo "

    </div>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return ":pinvoice:pinvoiceamount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 93,  165 => 85,  159 => 83,  152 => 79,  148 => 78,  144 => 77,  140 => 76,  136 => 74,  132 => 73,  130 => 72,  108 => 53,  87 => 35,  83 => 34,  72 => 26,  68 => 25,  56 => 16,  50 => 13,  46 => 11,  44 => 10,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":pinvoice:pinvoiceamount.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/pinvoice/pinvoiceamount.html.twig");
    }
}
