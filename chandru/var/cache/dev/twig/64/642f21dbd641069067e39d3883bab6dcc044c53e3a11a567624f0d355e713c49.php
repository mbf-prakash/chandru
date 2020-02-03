<?php

/* :dashboard:_spchart.html.twig */
class __TwigTemplate_0b743d3b19ac333fd262f4fe5df91203a63f94f1ce9a7196403e758f39d7c089 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:_spchart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dashboard:_spchart.html.twig"));

        // line 1
        echo "<div id=\"sales_purchase\" class=\"padding-20 border bg-white\" style=\"height:300px\"></div>



 <script type=\"text/javascript\">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var datas = ";
        // line 10
        echo json_encode((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new Twig_Error_Runtime('Variable "datas" does not exist.', 10, $this->source); })()));
        echo ";

    var data = google.visualization.arrayToDataTable(JSON.parse(datas));

    var options = {
      chart: {
        title: 'Company Performance',
        subtitle: 'Sales, Expenses, and Profit: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('sales_purchase'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":dashboard:_spchart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sales_purchase\" class=\"padding-20 border bg-white\" style=\"height:300px\"></div>



 <script type=\"text/javascript\">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var datas = {{ datas|json_encode|raw }};

    var data = google.visualization.arrayToDataTable(JSON.parse(datas));

    var options = {
      chart: {
        title: 'Company Performance',
        subtitle: 'Sales, Expenses, and Profit: {{ year }}',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('sales_purchase'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>", ":dashboard:_spchart.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/dashboard/_spchart.html.twig");
    }
}
