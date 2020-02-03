<?php

/* APYDataGridBundle::blocks_js.jquery.html.twig */
class __TwigTemplate_407c8757c987ce7f65516715baba4234afcef731d16bb6bd9fd6cc6b00c793ea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("APYDataGridBundle::blocks.html.twig", "APYDataGridBundle::blocks_js.jquery.html.twig", 1);
        $this->blocks = array(
            'grid_scripts_goto' => array($this, 'block_grid_scripts_goto'),
            'grid_scripts_submit_form' => array($this, 'block_grid_scripts_submit_form'),
            'grid_scripts_ajax' => array($this, 'block_grid_scripts_ajax'),
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
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        // line 4
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto(url, data, type)
{
    type = type || 'GET';
    data = data || [];

    \$.ajax({
        url: url,
        data: data,
        type: type
    }).done(function( msg ) {
        \$('#";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "').parent().replaceWith(msg);
    });

    return false
}
";
    }

    // line 21
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        // line 22
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_submitForm(event, form)
{
    if (event.type != 'keypress' || event.which == 13) {
        var data = '';
        \$('.grid-filter-operator select, .grid-filter-input-query-from, .grid-filter-input-query-to, .grid-filter-select-query-from, .grid-filter-select-query-to', form).each(function () {
            if (\$(this).is(':disabled') == false) {
                var name = \$(this).attr('name');
                var value = \$(this).val();
                if (value != null) {
                    if (\$(this).attr('multiple') == 'multiple') {
                        for(var i= 0; i < value.length; i++)
                        {
                            data += '&' + name + '=' + value[i];
                        }
                    } else {
                        data += '&' + name + '=' + value;
                    }
                } else {
                    data += '&' + name + '=';
                }
            }
        });

        ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "routeUrl", array()), "html", null, true);
        echo "', data.substring(1), 'POST');

        return false;
    }
}
";
    }

    // line 52
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
        // line 53
        echo "\$(function () {
    // Order and pagerfanta links
    \$('.pagination li.disabled a', '#";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "').click(function (e) {
        return false;
    });

    // Order and pagerfanta links
    \$('a.order, nav a, a.searchOnClick, .pagination li:not(.disabled) a', '#";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "').click(function () {
        ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto(this.href);

        return false;
    });

    // Reset link
    \$('#";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo " a.grid-reset').click(function () {
        ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_reset();

        return false;
    });

    // Mass actions submit
    \$('#";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo " input.submit-massaction').click(function () {
        var selector = \$('#";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo " .grid_massactions select');

        ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto('";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "routeUrl", array()), "html", null, true);
        echo "', selector.attr('name') + '=' + selector.val(), 'POST');

        return false;
    });

    // Grid_search submit (load only one time)
    \$('#";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_search').one('submit', function (event) {
        ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_submitForm(event, this);

        return false;
    });
});
";
    }

    public function getTemplateName()
    {
        return "APYDataGridBundle::blocks_js.jquery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 84,  164 => 83,  153 => 77,  148 => 75,  144 => 74,  135 => 68,  131 => 67,  122 => 61,  118 => 60,  110 => 55,  106 => 53,  103 => 52,  91 => 45,  64 => 22,  61 => 21,  51 => 14,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "APYDataGridBundle::blocks_js.jquery.html.twig", "/opt/bitnami/apache2/htdocs/chandru/vendor/apy/datagrid-bundle/Resources/views/blocks_js.jquery.html.twig");
    }
}
