<?php

/* :invoice:invoice1.html.twig */
class __TwigTemplate_cc4739c63ebce0e99e78f335d16178c6f2d5c818737c4b01cbee63c733579c86 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("APYDataGridBundle::blocks.html.twig", ":invoice:invoice1.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":invoice:invoice1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":invoice:invoice1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_grid_rows($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_rows"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_rows"));

        // line 4
        echo "
";
        // line 5
        $this->displayParentBlock("grid_rows", $context, $blocks);
        echo "

";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 7, $this->source); })()), "rows", array())) {
            // line 8
            echo "<tfoot class=\"totalsum\">
    <tr>
        <td></td>
        <td></td> 
        <td></td>
        <td></td>
        
        
        <td  style=\"text-align:right;color:red\">";
            // line 16
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 16, $this->source); })()), "totalsubtotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 17
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 17, $this->source); })()), "totalcgst", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 18, $this->source); })()), "totalsgst", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 19
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 19, $this->source); })()), "totaligst", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 20, $this->source); })()), "totalcashdiscount", array()), 2, ".", ","), "html", null, true);
            echo "</td>
        <td  style=\"text-align:right;color:red\">";
            // line 21
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 21, $this->source); })()), "totalgrandtotal", array()), 2, ".", ","), "html", null, true);
            echo "</td>       
        <td></td>
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
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 37, $this->source); })()), "totalcgst", array()) + twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 37, $this->source); })()), "totalsgst", array())) + twig_get_attribute($this->env, $this->source, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new Twig_Error_Runtime('Variable "totalsum" does not exist.', 37, $this->source); })()), "totaligst", array())), 2, ".", ","), "html", null, true);
            echo "</td>
        
        <td></td>
        <td></td>
        <td></td>
         <td></td>
         <td></td>
         <td></td>
    </tr>
</tfoot>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":invoice:invoice1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  63 => 8,  61 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'APYDataGridBundle::blocks.html.twig' %}

{% block grid_rows %}

{{ parent() }}

{% if(grid.rows) %}
<tfoot class=\"totalsum\">
    <tr>
        <td></td>
        <td></td> 
        <td></td>
        <td></td>
        
        
        <td  style=\"text-align:right;color:red\">{{ totalsum.totalsubtotal|number_format(2, '.', ',') }}</td>
        <td  style=\"text-align:right;color:red\">{{ totalsum.totalcgst|number_format(2, '.', ',') }}</td>
        <td  style=\"text-align:right;color:red\">{{ totalsum.totalsgst|number_format(2, '.', ',') }}</td>
        <td  style=\"text-align:right;color:red\">{{ totalsum.totaligst|number_format(2, '.', ',') }}</td>
        <td  style=\"text-align:right;color:red\">{{ totalsum.totalcashdiscount|number_format(2, '.', ',') }}</td>
        <td  style=\"text-align:right;color:red\">{{ totalsum.totalgrandtotal|number_format(2, '.', ',') }}</td>       
        <td></td>
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
        <td  style=\"text-align:right;color:blue\">{{ (totalsum.totalcgst +  totalsum.totalsgst + totalsum.totaligst)|number_format(2, '.', ',') }}</td>
        
        <td></td>
        <td></td>
        <td></td>
         <td></td>
         <td></td>
         <td></td>
    </tr>
</tfoot>
{% endif %}
{% endblock grid_rows %}", ":invoice:invoice1.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/invoice/invoice1.html.twig");
    }
}
