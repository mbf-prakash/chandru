<?php

/* :dashboard:_spchart.html.twig */
class __TwigTemplate_e3f688d796004d7a680e74f187557a2a808027f67c46c9059038a99e69568fe0 extends Twig_Template
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
        // line 1
        echo "<div id=\"sales_purchase\" class=\"padding-20 border bg-white\" style=\"height:300px\"></div>



 <script type=\"text/javascript\">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var datas = ";
        // line 10
        echo json_encode(($context["datas"] ?? null));
        echo ";

    var data = google.visualization.arrayToDataTable(JSON.parse(datas));

    var options = {
      chart: {
        title: 'Company Performance',
        subtitle: 'Sales, Expenses, and Profit: ";
        // line 17
        echo twig_escape_filter($this->env, ($context["year"] ?? null), "html", null, true);
        echo "',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('sales_purchase'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>";
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
        return array (  44 => 17,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":dashboard:_spchart.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/dashboard/_spchart.html.twig");
    }
}
