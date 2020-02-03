<?php

/* :pinvoice:index.html.twig */
class __TwigTemplate_3a6b51c7d02eb05c00139106cf6e0a7130ac43acf7097507bec4589fed3733ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("adminbase.html.twig", ":pinvoice:index.html.twig", 1);
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<!-- table starts here -->

<div class=\"padding-20\">
<div class=\"container-fluid\">
<div class=\"row paddleft-18\">
</div>
  <div class=\"bg-white table-bg\">
  ";
        // line 13
        echo twig_include($this->env, $context, "site/_flash_messages.html.twig");
        echo "
  <div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>Purchase Invoice</h2>
    </div>
     <div class=\"col-sm-6 text-right\">
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addpinvoice");
        echo "\" class=\"btn btn-success add-btn\"><i class=\"fa fa-plus add-icon\" aria-hidden=\"true\"></i> Add New</a>
    </div>
    </div>
    ";
        // line 22
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid($this->env, ($context["grid"] ?? null), "pinvoice/index1.html.twig", null, array("totalsum" => ($context["totalsum"] ?? null)));
        echo "
";
        // line 23
        $this->displayBlock('grid_filters', $context, $blocks);
        // line 24
        echo "  </div>
  </div>
</div>
<!-- table ends here -->

 ";
    }

    // line 23
    public function block_grid_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":pinvoice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  67 => 24,  65 => 23,  61 => 22,  55 => 19,  46 => 13,  36 => 5,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":pinvoice:index.html.twig", "/opt/bitnami/apache2/htdocs/chandru/app/Resources/views/pinvoice/index.html.twig");
    }
}
