<?php

/* :pinvoice:index1.html.twig */
class __TwigTemplate_e2933c365bea8a0e6974774cb36db139e0d24ed92449ecf2ff6bc3259667b4a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("APYDataGridBundle::blocks.html.twig", ":pinvoice:index1.html.twig", 1);
        $this->blocks = array(
            'grid_rows' => array($this, 'block_grid_rows'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_grid_rows($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("grid_rows", $context, $blocks);
        echo "

";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "rows", array())) {
            // line 8
            echo "<tfoot class=\"totalsum\">
    <tr>
        <td></td>
        <td></td> 
        <td></td>
        <td></td>
        
        
        <td  style=\"text-align:right;color:red\">";
            // line 16
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totalsubtotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 17
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totalcgst", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totalsgst", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 19
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totaligst", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totalgrandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>       
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td> 
        <td></td>
        <td></td>
        <td></td>
        <td></td>
       
      
        <td  style=\"text-align:right;color:blue\">TAX</td>
        <td  style=\"text-align:right;color:blue\">";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totalcgst", array()) + twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totalsgst", array())) + twig_get_attribute($this->env, $this->source, ($context["totalsum"] ?? null), "totaligst", array())), 2, ".", ","), "html", null, true);
            echo "</td>
        
        <td></td>
        <td></td>
       <td></td>
        <td></td>
    </tr>
</tfoot>
";
        }
    }

    public function getTemplateName()
    {
        return ":pinvoice:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  45 => 8,  43 => 7,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":pinvoice:index1.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/pinvoice/index1.html.twig");
    }
}
