<?php

/* APYDataGridBundle::blocks.html.twig */
class __TwigTemplate_8a08ae6b9306e6abbd7b36d92ae876faa19fb4cb33c7f58159db0d4cf24dc46e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'grid' => array($this, 'block_grid'),
            'grid_no_data' => array($this, 'block_grid_no_data'),
            'grid_no_result' => array($this, 'block_grid_no_result'),
            'grid_titles' => array($this, 'block_grid_titles'),
            'grid_filters' => array($this, 'block_grid_filters'),
            'grid_search' => array($this, 'block_grid_search'),
            'grid_rows' => array($this, 'block_grid_rows'),
            'grid_pager' => array($this, 'block_grid_pager'),
            'grid_pager_totalcount' => array($this, 'block_grid_pager_totalcount'),
            'grid_pager_selectpage' => array($this, 'block_grid_pager_selectpage'),
            'grid_pager_results_perpage' => array($this, 'block_grid_pager_results_perpage'),
            'grid_actions' => array($this, 'block_grid_actions'),
            'grid_exports' => array($this, 'block_grid_exports'),
            'grid_tweaks' => array($this, 'block_grid_tweaks'),
            'grid_column_actions_cell' => array($this, 'block_grid_column_actions_cell'),
            'grid_column_massaction_cell' => array($this, 'block_grid_column_massaction_cell'),
            'grid_column_boolean_cell' => array($this, 'block_grid_column_boolean_cell'),
            'grid_column_type_boolean_cell' => array($this, 'block_grid_column_type_boolean_cell'),
            'grid_column_rank_cell' => array($this, 'block_grid_column_rank_cell'),
            'grid_column_type_rank_cell' => array($this, 'block_grid_column_type_rank_cell'),
            'grid_column_array_cell' => array($this, 'block_grid_column_array_cell'),
            'grid_column_type_array_cell' => array($this, 'block_grid_column_type_array_cell'),
            'grid_column_join_cell' => array($this, 'block_grid_column_join_cell'),
            'grid_column_type_join_cell' => array($this, 'block_grid_column_type_join_cell'),
            'grid_column_type_simple_array_cell' => array($this, 'block_grid_column_type_simple_array_cell'),
            'grid_column_cell' => array($this, 'block_grid_column_cell'),
            'grid_column_operator' => array($this, 'block_grid_column_operator'),
            'grid_column_filter_type_input' => array($this, 'block_grid_column_filter_type_input'),
            'grid_column_filter_type_select' => array($this, 'block_grid_column_filter_type_select'),
            'grid_column_filter_type_massaction' => array($this, 'block_grid_column_filter_type_massaction'),
            'grid_column_filter_type_actions' => array($this, 'block_grid_column_filter_type_actions'),
            'grid_scripts' => array($this, 'block_grid_scripts'),
            'grid_scripts_goto' => array($this, 'block_grid_scripts_goto'),
            'grid_scripts_reset' => array($this, 'block_grid_scripts_reset'),
            'grid_scripts_previous_page' => array($this, 'block_grid_scripts_previous_page'),
            'grid_scripts_next_page' => array($this, 'block_grid_scripts_next_page'),
            'grid_scripts_enter_page' => array($this, 'block_grid_scripts_enter_page'),
            'grid_scripts_results_per_page' => array($this, 'block_grid_scripts_results_per_page'),
            'grid_scripts_mark_visible' => array($this, 'block_grid_scripts_mark_visible'),
            'grid_scripts_mark_all' => array($this, 'block_grid_scripts_mark_all'),
            'grid_scripts_switch_operator' => array($this, 'block_grid_scripts_switch_operator'),
            'grid_scripts_submit_form' => array($this, 'block_grid_scripts_submit_form'),
            'grid_scripts_ajax' => array($this, 'block_grid_scripts_ajax'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APYDataGridBundle::blocks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "APYDataGridBundle::blocks.html.twig"));

        // line 2
        $this->displayBlock('grid', $context, $blocks);
        // line 43
        $this->displayBlock('grid_no_data', $context, $blocks);
        // line 45
        $this->displayBlock('grid_no_result', $context, $blocks);
        // line 59
        $this->displayBlock('grid_titles', $context, $blocks);
        // line 98
        $this->displayBlock('grid_filters', $context, $blocks);
        // line 108
        $this->displayBlock('grid_search', $context, $blocks);
        // line 128
        $this->displayBlock('grid_rows', $context, $blocks);
        // line 148
        $this->displayBlock('grid_pager', $context, $blocks);
        // line 160
        $this->displayBlock('grid_pager_totalcount', $context, $blocks);
        // line 164
        $this->displayBlock('grid_pager_selectpage', $context, $blocks);
        // line 173
        $this->displayBlock('grid_pager_results_perpage', $context, $blocks);
        // line 182
        $this->displayBlock('grid_actions', $context, $blocks);
        // line 207
        $this->displayBlock('grid_exports', $context, $blocks);
        // line 222
        $this->displayBlock('grid_tweaks', $context, $blocks);
        // line 237
        $this->displayBlock('grid_column_actions_cell', $context, $blocks);
        // line 252
        $this->displayBlock('grid_column_massaction_cell', $context, $blocks);
        // line 256
        $this->displayBlock('grid_column_boolean_cell', $context, $blocks);
        // line 259
        $this->displayBlock('grid_column_type_boolean_cell', $context, $blocks);
        // line 263
        $this->displayBlock('grid_column_rank_cell', $context, $blocks);
        // line 266
        $this->displayBlock('grid_column_type_rank_cell', $context, $blocks);
        // line 270
        $this->displayBlock('grid_column_array_cell', $context, $blocks);
        // line 282
        $this->displayBlock('grid_column_type_array_cell', $context, $blocks);
        // line 286
        $this->displayBlock('grid_column_join_cell', $context, $blocks);
        // line 293
        $this->displayBlock('grid_column_type_join_cell', $context, $blocks);
        // line 297
        $this->displayBlock('grid_column_type_simple_array_cell', $context, $blocks);
        // line 301
        $this->displayBlock('grid_column_cell', $context, $blocks);
        // line 314
        $this->displayBlock('grid_column_operator', $context, $blocks);
        // line 326
        $this->displayBlock('grid_column_filter_type_input', $context, $blocks);
        // line 343
        $this->displayBlock('grid_column_filter_type_select', $context, $blocks);
        // line 387
        $this->displayBlock('grid_column_filter_type_massaction', $context, $blocks);
        // line 391
        $this->displayBlock('grid_column_filter_type_actions', $context, $blocks);
        // line 394
        echo "


";
        // line 398
        $this->displayBlock('grid_scripts', $context, $blocks);
        // line 413
        echo "
";
        // line 414
        $this->displayBlock('grid_scripts_goto', $context, $blocks);
        // line 429
        echo "
";
        // line 430
        $this->displayBlock('grid_scripts_reset', $context, $blocks);
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('grid_scripts_previous_page', $context, $blocks);
        // line 447
        echo "
";
        // line 448
        $this->displayBlock('grid_scripts_next_page', $context, $blocks);
        // line 456
        echo "
";
        // line 457
        $this->displayBlock('grid_scripts_enter_page', $context, $blocks);
        // line 473
        echo "
";
        // line 474
        $this->displayBlock('grid_scripts_results_per_page', $context, $blocks);
        // line 482
        echo "
";
        // line 483
        $this->displayBlock('grid_scripts_mark_visible', $context, $blocks);
        // line 512
        echo "
";
        // line 513
        $this->displayBlock('grid_scripts_mark_all', $context, $blocks);
        // line 537
        echo "
";
        // line 538
        $this->displayBlock('grid_scripts_switch_operator', $context, $blocks);
        // line 569
        echo "
";
        // line 570
        $this->displayBlock('grid_scripts_submit_form', $context, $blocks);
        // line 586
        echo "
";
        // line 587
        $this->displayBlock('grid_scripts_ajax', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_grid($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid"));

        // line 3
        echo "<div class=\"grid\">
";
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 4, $this->source); })()), "totalCount", array()) > 0) || twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 4, $this->source); })()), "isFiltered", array())) || (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 4, $this->source); })()), "noDataMessage", array()) === false))) {
            // line 5
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 5, $this->source); })()), "hash", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 5, $this->source); })()), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
        <div class=\"grid_header\">
        ";
            // line 7
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 7, $this->source); })()), "massActions", array())) > 0)) {
                // line 8
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "actions", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 8, $this->source); })()));
                echo "
        ";
            }
            // line 10
            echo "        </div>
        <div class=\"grid_body\">
        <table>
        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 13, $this->source); })()), "isTitleSectionVisible", array())) {
                // line 14
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "titles", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 14, $this->source); })()));
                echo "
        ";
            }
            // line 16
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 16, $this->source); })()), "isFilterSectionVisible", array())) {
                // line 17
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "filters", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 17, $this->source); })()));
                echo "
        ";
            }
            // line 19
            echo "        ";
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "rows", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 19, $this->source); })()));
            echo "
        </table>
        </div>
        <div class=\"grid_footer\">
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 23, $this->source); })()), "isPagerSectionVisible", array())) {
                // line 24
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridPager($this->env, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 24, $this->source); })()));
                echo "
        ";
            }
            // line 26
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 26, $this->source); })()), "exports", array())) > 0)) {
                // line 27
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "exports", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 27, $this->source); })()));
                echo "
        ";
            }
            // line 29
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 29, $this->source); })()), "tweaks", array())) > 0)) {
                // line 30
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "tweaks", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 30, $this->source); })()));
                echo "
        ";
            }
            // line 32
            echo "        </div>
        ";
            // line 33
            if ((isset($context["withjs"]) || array_key_exists("withjs", $context) ? $context["withjs"] : (function () { throw new Twig_Error_Runtime('Variable "withjs" does not exist.', 33, $this->source); })())) {
                // line 34
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 34, $this->source); })()));
                echo "
        ";
            }
            // line 36
            echo "    </form>
";
        } else {
            // line 38
            echo "    ";
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "no_data", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 38, $this->source); })()));
            echo "
";
        }
        // line 40
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_grid_no_data($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_no_data"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_no_data"));

        echo "<p class=\"no_data\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noDataMessage", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noDataMessage", array()), "No data")) : ("No data")));
        echo "</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_grid_no_result($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_no_result"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_no_result"));

        // line 46
        ob_start();
        // line 47
        $context["nbColumns"] = 0;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 48, $this->source); })()), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 49
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 49, $this->source); })()), "isReadyForExport", array())), "method")) {
                // line 50
                echo "        ";
                $context["nbColumns"] = ((isset($context["nbColumns"]) || array_key_exists("nbColumns", $context) ? $context["nbColumns"] : (function () { throw new Twig_Error_Runtime('Variable "nbColumns" does not exist.', 50, $this->source); })()) + 1);
                // line 51
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "<tr class=\"grid-row-cells\">
    <td class=\"last-column last-row\" colspan=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["nbColumns"]) || array_key_exists("nbColumns", $context) ? $context["nbColumns"] : (function () { throw new Twig_Error_Runtime('Variable "nbColumns" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\" style=\"text-align: center;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noResultMessage", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noResultMessage", array()), "No result")) : ("No result")));
        echo "</td>
</tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_grid_titles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_titles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_titles"));

        // line 60
        echo "    <tr class=\"grid-row-titles\">
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 61, $this->source); })()), "columns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 62
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["column"], "translationDomain", array());
            // line 63
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 63, $this->source); })()), "isReadyForExport", array())), "method")) {
                // line 64
                echo "            <th class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "align", array()) != "left")) {
                    echo "align-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "align", array()), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, $context["column"], "class", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "class", array()), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo " last-column";
                }
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "size", array()) >  -1)) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "size", array()), "html", null, true);
                    echo "px;\"";
                }
                echo ">";
                // line 65
                ob_start();
                // line 66
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "type", array()) == "massaction")) {
                    // line 67
                    echo "                <input type=\"checkbox\" class=\"grid-mass-selector\" onclick=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 67, $this->source); })()), "hash", array()), "html", null, true);
                    echo "_markVisible(this.checked);\"/>
            ";
                } else {
                    // line 69
                    echo "                ";
                    $context["columnTitle"] = twig_get_attribute($this->env, $this->source, $context["column"], "title", array());
                    // line 70
                    echo "
                ";
                    // line 71
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "usePrefixTitle", array()) == true)) {
                        // line 72
                        echo "                    ";
                        $context["columnTitle"] = ((twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 72, $this->source); })()), "prefixTitle", array()) . (isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 72, $this->source); })())) . "__abbr");
                        // line 73
                        echo "                    ";
                        if (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 73, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 73, $this->source); })())) == (isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 73, $this->source); })()))) {
                            // line 74
                            echo "                        ";
                            $context["columnTitle"] = (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 74, $this->source); })()), "prefixTitle", array()) . twig_get_attribute($this->env, $this->source, $context["column"], "title", array()));
                            // line 75
                            echo "                    ";
                        }
                        // line 76
                        echo "                ";
                    }
                    // line 77
                    echo "
                ";
                    // line 78
                    $context["columnTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 78, $this->source); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 78, $this->source); })()));
                    // line 79
                    echo "
                ";
                    // line 80
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "sortable", array())) {
                        // line 81
                        echo "                    <a class=\"order\" href=\"";
                        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("order", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 81, $this->source); })()), $context["column"]);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order by"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, (isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 81, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 81, $this->source); })()), "html", null, true);
                        echo "</a>
                    ";
                        // line 82
                        if ((twig_get_attribute($this->env, $this->source, $context["column"], "order", array()) == "asc")) {
                            // line 83
                            echo "                        <div class=\"sort_up\"></div>
                    ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 84
$context["column"], "order", array()) == "desc")) {
                            // line 85
                            echo "                        <div class=\"sort_down\"></div>
                    ";
                        }
                        // line 87
                        echo "                ";
                    } else {
                        // line 88
                        echo "                    ";
                        echo twig_escape_filter($this->env, (isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 88, $this->source); })()), "html", null, true);
                        echo "
                ";
                    }
                    // line 90
                    echo "            ";
                }
                // line 91
                echo "            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 92
                echo "</th>
        ";
            }
            // line 94
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_grid_filters($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_filters"));

        // line 99
        echo "    <tr class=\"grid-row-filters\">
    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 100, $this->source); })()), "columns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 101
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 101, $this->source); })()), "isReadyForExport", array())), "method")) {
                // line 102
                echo "        <th class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "class", array())) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "class", array()), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo " last-column";
                }
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "size", array()) >  -1)) {
                    echo " style=\"width:";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "size", array()), "html", null, true);
                    echo "px;\"";
                }
                echo ">";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "filterable", array())) {
                    echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridFilter($this->env, $context["column"], (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 102, $this->source); })()));
                }
                echo "</th>
        ";
            }
            // line 104
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "    </tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_grid_search($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_search"));

        // line 109
        if (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 109, $this->source); })()), "isFilterSectionVisible", array())) {
            // line 110
            echo "    <div class=\"grid-search\">
        <form id=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 111, $this->source); })()), "hash", array()), "html", null, true);
            echo "_search\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 111, $this->source); })()), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 112, $this->source); })()), "columns", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 113
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "isFilterable", array()) && !twig_in_filter(twig_get_attribute($this->env, $this->source, $context["column"], "type", array()), array(0 => "actions", 1 => "massaction")))) {
                    // line 114
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "usePrefixTitle", array()) == true)) {
                        // line 115
                        echo "                    ";
                        $context["columnTitle"] = (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 115, $this->source); })()), "prefixTitle", array()) . twig_get_attribute($this->env, $this->source, $context["column"], "title", array()));
                        // line 116
                        echo "                ";
                    } else {
                        // line 117
                        echo "                    ";
                        $context["columnTitle"] = twig_get_attribute($this->env, $this->source, $context["column"], "title", array());
                        // line 118
                        echo "                ";
                    }
                    // line 119
                    echo "                <div class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), twig_get_attribute($this->env, $this->source, $context["loop"], "index", array())), "html", null, true);
                    echo "\"><label>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["columnTitle"]) || array_key_exists("columnTitle", $context) ? $context["columnTitle"] : (function () { throw new Twig_Error_Runtime('Variable "columnTitle" does not exist.', 119, $this->source); })())), "html", null, true);
                    echo "</label>";
                    echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridFilter($this->env, $context["column"], (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 119, $this->source); })()), false);
                    echo "</div>
            ";
                }
                // line 121
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "            <div class=\"grid-search-action\"><input type=\"submit\" class=\"grid-search-submit\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\"/><input type=\"button\" class=\"grid-search-reset\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
            echo "\" onclick=\"return ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 122, $this->source); })()), "hash", array()), "html", null, true);
            echo "_reset();\"/></div>
        </form>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_grid_rows($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_rows"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_rows"));

        // line 129
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 129, $this->source); })()), "rows", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 130
            echo "    ";
            $context["last_row"] = twig_get_attribute($this->env, $this->source, $context["loop"], "last", array());
            // line 131
            echo "    ";
            ob_start();
            // line 132
            echo "        ";
            ob_start();
            // line 133
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 133, $this->source); })()), "columns", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 134
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 134, $this->source); })()), "isReadyForExport", array())), "method")) {
                    // line 135
                    echo "                    <td class=\"grid-column-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "renderBlockId", array()), "html", null, true);
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "class", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "class", array()), "html", null, true);
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "align", array()) != "left")) {
                        echo " align-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "align", array()), "html", null, true);
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                        echo " last-column";
                    }
                    if ((isset($context["last_row"]) || array_key_exists("last_row", $context) ? $context["last_row"] : (function () { throw new Twig_Error_Runtime('Variable "last_row" does not exist.', 135, $this->source); })())) {
                        echo " last-row";
                    }
                    echo "\">";
                    echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridCell($this->env, $context["column"], $context["row"], (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 135, $this->source); })()));
                    echo "</td>
                ";
                }
                // line 137
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "        ";
            $context["gridColumns"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 139
            echo "        <tr";
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "color", array()) != "")) {
                echo " style=\"background-color:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "color", array()), "html", null, true);
                echo ";\"";
            }
            echo " class=\"grid-row-cells ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), twig_get_attribute($this->env, $this->source, $context["loop"], "index", array())), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["row"], "class", array()) != "")) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "class", array()), "html", null, true);
            }
            echo "\">
        ";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["gridColumns"]) || array_key_exists("gridColumns", $context) ? $context["gridColumns"] : (function () { throw new Twig_Error_Runtime('Variable "gridColumns" does not exist.', 140, $this->source); })()), "html", null, true);
            echo "
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 142
            echo "    </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 144
            echo "        ";
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "no_result", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 144, $this->source); })()));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_grid_pager($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager"));

        // line 149
        echo "    ";
        if ((isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new Twig_Error_Runtime('Variable "pagerfanta" does not exist.', 149, $this->source); })())) {
            // line 150
            echo "        ";
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getPagerfanta((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 150, $this->source); })()));
            echo "
    ";
        } else {
            // line 152
            echo "        <div class=\"pager\" style=\"float:left\">
            ";
            // line 153
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "pager_totalcount", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 153, $this->source); })()));
            echo "
            ";
            // line 154
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "pager_selectpage", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 154, $this->source); })()));
            echo "
            ";
            // line 155
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "pager_results_perpage", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 155, $this->source); })()));
            echo "
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_grid_pager_totalcount($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_totalcount"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_totalcount"));

        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("%count% Results, ", twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 161, $this->source); })()), "totalCount", array()), array("%count%" => twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 161, $this->source); })()), "totalCount", array()))), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_grid_pager_selectpage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_selectpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_selectpage"));

        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page"), "html", null, true);
        echo "
";
        // line 166
        ob_start();
        // line 167
        echo "<input type=\"button\" class=\"prev\" ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 167, $this->source); })()), "page", array()) <= 0)) {
            echo "disabled=\"disabled\"";
        }
        echo " value=\"<\" onclick=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 167, $this->source); })()), "hash", array()), "html", null, true);
        echo "_previousPage();\"/>
<input type=\"text\" class=\"current\" value=\"";
        // line 168
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 168, $this->source); })()), "page", array()) + 1), "html", null, true);
        echo "\" size=\"2\" onkeypress=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 168, $this->source); })()), "hash", array()), "html", null, true);
        echo "_enterPage(event, parseInt(this.value)-1);\"/>
<input type=\"button\" value=\">\" class=\"next\" ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 169, $this->source); })()), "page", array()) >= (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 169, $this->source); })()), "pageCount", array()) - 1))) {
            echo "disabled=\"disabled\"";
        }
        echo " onclick=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 169, $this->source); })()), "hash", array()), "html", null, true);
        echo "_nextPage();\"/> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("of %count%", array("%count%" => twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 169, $this->source); })()), "pageCount", array()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_grid_pager_results_perpage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_results_perpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_pager_results_perpage"));

        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(", Display"), "html", null, true);
        echo "
<select onchange=\"return ";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 175, $this->source); })()), "hash", array()), "html", null, true);
        echo "_resultsPerPage(this.value);\">
";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 176, $this->source); })()), "limits", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 177
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 177, $this->source); })()), "limit", array()))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "</select> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_grid_actions($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_actions"));

        // line 183
        echo "<div class=\"mass-actions\">
    <span class=\"grid_massactions_helper\">
        <a href=\"#\" onclick=\"return ";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 185, $this->source); })()), "hash", array()), "html", null, true);
        echo "_markVisible(true);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 186, $this->source); })()), "hash", array()), "html", null, true);
        echo "_markVisible(false);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deselect visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 187, $this->source); })()), "hash", array()), "html", null, true);
        echo "_markAll(true);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 188, $this->source); })()), "hash", array()), "html", null, true);
        echo "_markAll(false);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deselect all"), "html", null, true);
        echo "</a>
        <span class=\"mass-actions-selected\" id=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 189, $this->source); })()), "hash", array()), "html", null, true);
        echo "_mass_action_selected\"></span>
    </span>
    ";
        // line 191
        ob_start();
        // line 192
        echo "    <div style=\"float:right;\" class=\"grid_massactions\">
        ";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        echo "
        <input type=\"hidden\" id=\"";
        // line 194
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 194, $this->source); })()), "hash", array()), "html", null, true);
        echo "_mass_action_all\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 194, $this->source); })()), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION_ALL_KEYS_SELECTED"), "html", null, true);
        echo "]\" value=\"0\"/>
        <select name=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 195, $this->source); })()), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION"), "html", null, true);
        echo "]\">
            <option value=\"-1\"></option>
            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 197, $this->source); })()), "massActions", array()));
        foreach ($context['_seq'] as $context["key"] => $context["massAction"]) {
            // line 198
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["massAction"], "title", array())), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['massAction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "        </select>
        <input type=\"submit\"  value=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit Action"), "html", null, true);
        echo "\"/>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 204
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 207
    public function block_grid_exports($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_exports"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_exports"));

        // line 208
        echo "<div class=\"exports\" style=\"float:right\">
    ";
        // line 209
        ob_start();
        // line 210
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export"), "html", null, true);
        echo "
            <select name=\"";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 211, $this->source); })()), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_EXPORT"), "html", null, true);
        echo "]\">
            <option value=\"-1\"></option>
            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 213, $this->source); })()), "exports", array()));
        foreach ($context['_seq'] as $context["key"] => $context["export"]) {
            // line 214
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["export"], "title", array())), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['export'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        </select>
        <input type=\"submit\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export"), "html", null, true);
        echo "\"/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 219
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_grid_tweaks($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_tweaks"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_tweaks"));

        // line 223
        echo "<div class=\"tweaks\" style=\"float:right\">
    ";
        // line 224
        ob_start();
        // line 225
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tweaks"), "html", null, true);
        echo "
            <select name=\"";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 226, $this->source); })()), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_TWEAK"), "html", null, true);
        echo "]\">
            <option value=\"\"></option>
            ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 228, $this->source); })()), "tweaks", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tweak"]) {
            // line 229
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tweak"], "title", array())), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tweak'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "        </select>
        <input type=\"submit\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tweak"), "html", null, true);
        echo "\"/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 234
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 237
    public function block_grid_column_actions_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_actions_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_actions_cell"));

        // line 238
        echo "    ";
        $context["actions"] = twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 238, $this->source); })()), "getActionsToRender", array(0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 238, $this->source); })())), "method");
        // line 239
        echo "    <ul class=\"grid-row-actions\">
    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new Twig_Error_Runtime('Variable "actions" does not exist.', 240, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 241
            echo "        <li>
        ";
            // line 242
            if (twig_get_attribute($this->env, $this->source, $context["action"], "enabled", array())) {
                // line 243
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["action"], "route", array()), twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 243, $this->source); })()), "routeParameters", array(0 => (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 243, $this->source); })()), 1 => $context["action"]), "method"), false), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "target", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "confirm", array())) {
                    echo " onclick=\"return confirm('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "confirmMessage", array()), "html", null, true);
                    echo "')\"";
                }
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["action"], "attributes", array()));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", array())), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 245
                echo "            <span";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["action"], "attributes", array()));
                foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "title", array())), "html", null, true);
                echo "</span>
        ";
            }
            // line 247
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 252
    public function block_grid_column_massaction_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_massaction_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_massaction_cell"));

        // line 253
        echo "    <input type=\"checkbox\" class=\"action\" value=\"1\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 253, $this->source); })()), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 253, $this->source); })()), "id", array()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 253, $this->source); })()), "primaryFieldValue", array()), "html", null, true);
        echo "]\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_grid_column_boolean_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_boolean_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_boolean_cell"));

        // line 257
        echo "    <span class=\"grid_boolean_";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 257, $this->source); })()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 257, $this->source); })()), "html", null, true);
        echo "\">";
        $this->displayBlock("grid_column_cell", $context, $blocks);
        echo "</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 259
    public function block_grid_column_type_boolean_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_boolean_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_boolean_cell"));

        // line 260
        echo "\t";
        $this->displayBlock("grid_column_boolean_cell", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 263
    public function block_grid_column_rank_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_rank_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_rank_cell"));

        // line 264
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 264, $this->source); })()), "page", array()) * twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 264, $this->source); })()), "limit", array())) + (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 264, $this->source); })())), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 266
    public function block_grid_column_type_rank_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_rank_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_rank_cell"));

        // line 267
        echo "\t";
        $this->displayBlock("grid_column_rank_cell", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 270
    public function block_grid_column_array_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_array_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_array_cell"));

        // line 271
        $context["sourceValues"] = twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 271, $this->source); })()), "field", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 271, $this->source); })()), "id", array())), "method");
        // line 272
        $context["values"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 272, $this->source); })());
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new Twig_Error_Runtime('Variable "values" does not exist.', 273, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 274
            $context["value"] = $context["index"];
            // line 275
            echo "    ";
            $context["sourceValue"] = twig_get_attribute($this->env, $this->source, (isset($context["sourceValues"]) || array_key_exists("sourceValues", $context) ? $context["sourceValues"] : (function () { throw new Twig_Error_Runtime('Variable "sourceValues" does not exist.', 275, $this->source); })()), $context["key"], array(), "array");
            // line 276
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo "
    ";
            // line 277
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                // line 278
                echo "      ";
                echo twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 278, $this->source); })()), "separator", array());
                echo "
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 282
    public function block_grid_column_type_array_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_array_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_array_cell"));

        // line 283
        echo "\t";
        $this->displayBlock("grid_column_array_cell", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 286
    public function block_grid_column_join_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_join_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_join_cell"));

        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 287, $this->source); })()), "joinColumns", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["index"]) {
            // line 288
            $context["value"] = twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 288, $this->source); })()), "field", array(0 => $context["index"]), "method");
            // line 289
            echo "    ";
            $context["sourceValue"] = (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 289, $this->source); })());
            // line 290
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 290, $this->source); })()), "separator", array());
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 293
    public function block_grid_column_type_join_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_join_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_join_cell"));

        // line 294
        echo "\t";
        $this->displayBlock("grid_column_join_cell", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_grid_column_type_simple_array_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_simple_array_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_type_simple_array_cell"));

        // line 298
        echo "    ";
        $this->displayBlock("grid_column_array_cell", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 301
    public function block_grid_column_cell($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_cell"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_cell"));

        // line 302
        ob_start();
        // line 303
        if ((twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 303, $this->source); })()), "filterable", array()) && twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 303, $this->source); })()), "searchOnClick", array()))) {
            // line 304
            echo "    ";
            $context["sourceValue"] = (((isset($context["sourceValue"]) || array_key_exists("sourceValue", $context))) ? ((isset($context["sourceValue"]) || array_key_exists("sourceValue", $context) ? $context["sourceValue"] : (function () { throw new Twig_Error_Runtime('Variable "sourceValue" does not exist.', 304, $this->source); })())) : (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new Twig_Error_Runtime('Variable "row" does not exist.', 304, $this->source); })()), "field", array(0 => twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 304, $this->source); })()), "id", array())), "method")));
            // line 305
            echo "    <a href=\"?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 305, $this->source); })()), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 305, $this->source); })()), "id", array()), "html", null, true);
            echo "][from]=";
            echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["sourceValue"]) || array_key_exists("sourceValue", $context) ? $context["sourceValue"] : (function () { throw new Twig_Error_Runtime('Variable "sourceValue" does not exist.', 305, $this->source); })())), "html", null, true);
            echo "\" class=\"searchOnClick\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 305, $this->source); })()), "html", null, true);
            echo "</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 306
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 306, $this->source); })()), "safe", array()) === false)) {
            // line 307
            echo "    ";
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 307, $this->source); })());
            echo "
";
        } else {
            // line 309
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 309, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 309, $this->source); })()), "safe", array()));
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 314
    public function block_grid_column_operator($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_operator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_operator"));

        // line 315
        if (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 315, $this->source); })()), "operatorsVisible", array())) {
            // line 316
            echo "<span class=\"grid-filter-operator\">
    <select name=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 317, $this->source); })()), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 317, $this->source); })()), "id", array()), "html", null, true);
            echo "][operator]\" onchange=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 317, $this->source); })()), "hash", array()), "html", null, true);
            echo "_switchOperator(this, '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 317, $this->source); })()), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 317, $this->source); })()), "id", array()), "html", null, true);
            echo "__query__'";
            if (((isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 317, $this->source); })()) === false)) {
                echo ", false";
            }
            echo ");\">
    ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 318, $this->source); })()), "operators", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
                // line 319
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["operator"], "html", null, true);
                echo "\"";
                if (((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 319, $this->source); })()) == $context["operator"])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["operator"]), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            echo "    </select>
</span>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 326
    public function block_grid_column_filter_type_input($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_input"));

        // line 327
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 328
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 329
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 330
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 331
        $context["op"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 331, $this->source); })()), "data", array()), "operator", array())) : (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 331, $this->source); })()), "defaultOperator", array())));
        // line 332
        $context["from"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 332, $this->source); })()), "data", array()), "from", array())) : (null));
        // line 333
        $context["to"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 333, $this->source); })()), "data", array()), "to", array())) : (null));
        // line 334
        echo "<span class=\"grid-filter-input\">
    ";
        // line 335
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridColumnOperator($this->env, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 335, $this->source); })()), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 335, $this->source); })()), (isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 335, $this->source); })()), (isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 335, $this->source); })()));
        echo "
    <span class=\"grid-filter-input-query\">
        <input type=\"";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 337, $this->source); })()), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new Twig_Error_Runtime('Variable "from" does not exist.', 337, $this->source); })()), "html", null, true);
        echo "\" class=\"grid-filter-input-query-from\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 337, $this->source); })()), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 337, $this->source); })()), "id", array()), "html", null, true);
        echo "][from]\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 337, $this->source); })()), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 337, $this->source); })()), "id", array()), "html", null, true);
        echo "__query__from\" ";
        if (((isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 337, $this->source); })()) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 337, $this->source); })()), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 337, $this->source); })()) == (isset($context["isNullOperator"]) || array_key_exists("isNullOperator", $context) ? $context["isNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNullOperator" does not exist.', 337, $this->source); })())) || ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 337, $this->source); })()) == (isset($context["isNotNullOperator"]) || array_key_exists("isNotNullOperator", $context) ? $context["isNotNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNotNullOperator" does not exist.', 337, $this->source); })())))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
        echo " />
        <input type=\"";
        // line 338
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 338, $this->source); })()), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new Twig_Error_Runtime('Variable "to" does not exist.', 338, $this->source); })()), "html", null, true);
        echo "\" class=\"grid-filter-input-query-to\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 338, $this->source); })()), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 338, $this->source); })()), "id", array()), "html", null, true);
        echo "][to]\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 338, $this->source); })()), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 338, $this->source); })()), "id", array()), "html", null, true);
        echo "__query__to\" ";
        if (((isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 338, $this->source); })()) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 338, $this->source); })()), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo (((((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 338, $this->source); })()) == (isset($context["btwOperator"]) || array_key_exists("btwOperator", $context) ? $context["btwOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btwOperator" does not exist.', 338, $this->source); })())) || ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 338, $this->source); })()) == (isset($context["btweOperator"]) || array_key_exists("btweOperator", $context) ? $context["btweOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btweOperator" does not exist.', 338, $this->source); })())))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
        echo " />
    </span>
</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 343
    public function block_grid_column_filter_type_select($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_select"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_select"));

        // line 344
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 345
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 346
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 347
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 348
        $context["op"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 348, $this->source); })()), "data", array()), "operator", array())) : (twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 348, $this->source); })()), "defaultOperator", array())));
        // line 349
        $context["from"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 349, $this->source); })()), "data", array()), "from", array())) : (null));
        // line 350
        $context["to"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 350, $this->source); })()), "data", array()), "to", array())) : (null));
        // line 351
        $context["multiple"] = twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 351, $this->source); })()), "selectMulti", array());
        // line 352
        $context["expanded"] = twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 352, $this->source); })()), "selectExpanded", array());
        // line 353
        echo "<span class=\"grid-filter-select\">
    ";
        // line 354
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridColumnOperator($this->env, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 354, $this->source); })()), (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 354, $this->source); })()), (isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 354, $this->source); })()), (isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 354, $this->source); })()));
        echo "
    <span class=\"grid-filter-select-query\">
    ";
        // line 356
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 356, $this->source); })())) {
            // line 357
            echo "        <span class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 357, $this->source); })()), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 357, $this->source); })()), "id", array()), "html", null, true);
            echo "__query__from\" ";
            echo (((((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 357, $this->source); })()) == (isset($context["isNullOperator"]) || array_key_exists("isNullOperator", $context) ? $context["isNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNullOperator" does not exist.', 357, $this->source); })())) || ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 357, $this->source); })()) == (isset($context["isNotNullOperator"]) || array_key_exists("isNotNullOperator", $context) ? $context["isNotNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNotNullOperator" does not exist.', 357, $this->source); })())))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
        ";
            // line 358
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 358, $this->source); })()), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 359
                echo "            <span><input type=\"";
                if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 359, $this->source); })())) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 359, $this->source); })()), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 359, $this->source); })()), "id", array()), "html", null, true);
                echo "][from][]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new Twig_Error_Runtime('Variable "from" does not exist.', 359, $this->source); })()))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 359, $this->source); })()) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 359, $this->source); })()), "hash", array()), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</label></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "        </span>
        <span class=\"grid-filter-select-query-to\" id=\"";
            // line 362
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 362, $this->source); })()), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 362, $this->source); })()), "id", array()), "html", null, true);
            echo "__query__to\" ";
            echo (((((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 362, $this->source); })()) == (isset($context["btwOperator"]) || array_key_exists("btwOperator", $context) ? $context["btwOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btwOperator" does not exist.', 362, $this->source); })())) || ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 362, $this->source); })()) == (isset($context["btweOperator"]) || array_key_exists("btweOperator", $context) ? $context["btweOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btweOperator" does not exist.', 362, $this->source); })())))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
        ";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 363, $this->source); })()), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 364
                echo "            <span><input type=\"";
                if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 364, $this->source); })())) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 364, $this->source); })()), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 364, $this->source); })()), "id", array()), "html", null, true);
                echo "][to]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (( !(null === (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new Twig_Error_Runtime('Variable "to" does not exist.', 364, $this->source); })())) && ((isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new Twig_Error_Runtime('Variable "to" does not exist.', 364, $this->source); })()) == $context["key"]))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if (((isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 364, $this->source); })()) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 364, $this->source); })()), "hash", array()), "html", null, true);
                    echo "_submitForm(event, this.form);\"";
                }
                echo "/><label>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</label></span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "        </span>
        ";
            // line 367
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 367, $this->source); })())) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 368
            echo "    ";
        } else {
            // line 369
            echo "        <select";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 369, $this->source); })())) {
                echo " multiple=\"multiple\"";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 369, $this->source); })()), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 369, $this->source); })()), "id", array()), "html", null, true);
            echo "][from][]\" class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 369, $this->source); })()), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 369, $this->source); })()), "id", array()), "html", null, true);
            echo "__query__from\" ";
            if (((isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 369, $this->source); })()) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 369, $this->source); })()), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 369, $this->source); })()) == (isset($context["isNullOperator"]) || array_key_exists("isNullOperator", $context) ? $context["isNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNullOperator" does not exist.', 369, $this->source); })())) || ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 369, $this->source); })()) == (isset($context["isNotNullOperator"]) || array_key_exists("isNotNullOperator", $context) ? $context["isNotNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNotNullOperator" does not exist.', 369, $this->source); })())))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
            <option value=\"\">&nbsp;</option>
            ";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 371, $this->source); })()), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 372
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (twig_in_filter($context["key"], (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new Twig_Error_Runtime('Variable "from" does not exist.', 372, $this->source); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 374
            echo "        </select>
        <select name=\"";
            // line 375
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 375, $this->source); })()), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 375, $this->source); })()), "id", array()), "html", null, true);
            echo "][to]\" class=\"grid-filter-select-query-to\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 375, $this->source); })()), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 375, $this->source); })()), "id", array()), "html", null, true);
            echo "__query__to\" ";
            if (((isset($context["submitOnChange"]) || array_key_exists("submitOnChange", $context) ? $context["submitOnChange"] : (function () { throw new Twig_Error_Runtime('Variable "submitOnChange" does not exist.', 375, $this->source); })()) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 375, $this->source); })()), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo (((((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 375, $this->source); })()) == (isset($context["btwOperator"]) || array_key_exists("btwOperator", $context) ? $context["btwOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btwOperator" does not exist.', 375, $this->source); })())) || ((isset($context["op"]) || array_key_exists("op", $context) ? $context["op"] : (function () { throw new Twig_Error_Runtime('Variable "op" does not exist.', 375, $this->source); })()) == (isset($context["btweOperator"]) || array_key_exists("btweOperator", $context) ? $context["btweOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btweOperator" does not exist.', 375, $this->source); })())))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
            <option value=\"\">&nbsp;</option>
            ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new Twig_Error_Runtime('Variable "column" does not exist.', 377, $this->source); })()), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 378
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (( !(null === (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new Twig_Error_Runtime('Variable "to" does not exist.', 378, $this->source); })())) && ((isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new Twig_Error_Runtime('Variable "to" does not exist.', 378, $this->source); })()) == $context["key"]))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            echo "        </select>
        ";
            // line 381
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 381, $this->source); })())) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 382
            echo "    ";
        }
        // line 383
        echo "    </span>
</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 387
    public function block_grid_column_filter_type_massaction($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_massaction"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_massaction"));

        // line 388
        echo "    <input type=\"button\" class=\"grid-search-reset\" value=\"R\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "\" onclick=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 388, $this->source); })()), "hash", array()), "html", null, true);
        echo "_reset();\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 391
    public function block_grid_column_filter_type_actions($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_column_filter_type_actions"));

        // line 392
        echo "    <a class=\"grid-reset\" href=\"";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("reset", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 392, $this->source); })()));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 398
    public function block_grid_scripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts"));

        // line 399
        echo "<script type=\"text/javascript\">
";
        // line 400
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_goto", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 400, $this->source); })()));
        echo "
";
        // line 401
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_reset", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 401, $this->source); })()));
        echo "
";
        // line 402
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_previous_page", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 402, $this->source); })()));
        echo "
";
        // line 403
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_next_page", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 403, $this->source); })()));
        echo "
";
        // line 404
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_enter_page", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 404, $this->source); })()));
        echo "
";
        // line 405
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_results_per_page", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 405, $this->source); })()));
        echo "
";
        // line 406
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_mark_visible", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 406, $this->source); })()));
        echo "
";
        // line 407
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_mark_all", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 407, $this->source); })()));
        echo "
";
        // line 408
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_switch_operator", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 408, $this->source); })()));
        echo "
";
        // line 409
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_submit_form", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 409, $this->source); })()));
        echo "
";
        // line 410
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_ajax", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 410, $this->source); })()));
        echo "
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 414
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_goto"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_goto"));

        // line 415
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 415, $this->source); })()), "hash", array()), "html", null, true);
        echo "_goto(url)
{
    if (/MSIE (8\\.\\d+);/.test(navigator.userAgent)) {
        var referLink = document.createElement('a');
        referLink.href = url;
        document.body.appendChild(referLink);
        referLink.click();
    } else {
        window.location.href = url;
    }

    return false;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 430
    public function block_grid_scripts_reset($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_reset"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_reset"));

        // line 431
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 431, $this->source); })()), "hash", array()), "html", null, true);
        echo "_reset()
{
    ";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 433, $this->source); })()), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("reset", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 433, $this->source); })()));
        echo "');

    return false;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 439
    public function block_grid_scripts_previous_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_previous_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_previous_page"));

        // line 440
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 440, $this->source); })()), "hash", array()), "html", null, true);
        echo "_previousPage()
{
    ";
        // line 442
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 442, $this->source); })()), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("page", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 442, $this->source); })()), (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 442, $this->source); })()), "page", array()) - 1));
        echo "');

    return false;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 448
    public function block_grid_scripts_next_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_next_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_next_page"));

        // line 449
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 449, $this->source); })()), "hash", array()), "html", null, true);
        echo "_nextPage()
{
    ";
        // line 451
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 451, $this->source); })()), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("page", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 451, $this->source); })()), (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 451, $this->source); })()), "page", array()) + 1));
        echo "');

    return false;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 457
    public function block_grid_scripts_enter_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_enter_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_enter_page"));

        // line 458
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 458, $this->source); })()), "hash", array()), "html", null, true);
        echo "_enterPage(event, page)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (key == 13) {
        ";
        // line 467
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 467, $this->source); })()), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("page", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 467, $this->source); })()));
        echo "' + page);

        return false;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 474
    public function block_grid_scripts_results_per_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_results_per_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_results_per_page"));

        // line 475
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 475, $this->source); })()), "hash", array()), "html", null, true);
        echo "_resultsPerPage(limit)
{
    ";
        // line 477
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 477, $this->source); })()), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("limit", (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 477, $this->source); })()));
        echo "' + limit);

    return true;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 483
    public function block_grid_scripts_mark_visible($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_mark_visible"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_mark_visible"));

        // line 484
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 484, $this->source); })()), "hash", array()), "html", null, true);
        echo "_markVisible(select)
{
    var form = document.getElementById('";
        // line 486
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 486, $this->source); })()), "hash", array()), "html", null, true);
        echo "');

    var counter = 0;

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;

            if (form.elements[i].checked){
               counter++;
            }
        }
    }

    ";
        // line 500
        if (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 500, $this->source); })()), "isFilterSectionVisible", array())) {
            // line 501
            echo "    counter--;
    ";
        }
        // line 503
        echo "
    var selected = document.getElementById('";
        // line 504
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 504, $this->source); })()), "hash", array()), "html", null, true);
        echo "_mass_action_selected');
    selected.innerHTML = counter > 0 ? '";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', counter) : '';

    document.getElementById('";
        // line 507
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 507, $this->source); })()), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';

    return false;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 513
    public function block_grid_scripts_mark_all($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_mark_all"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_mark_all"));

        // line 514
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 514, $this->source); })()), "hash", array()), "html", null, true);
        echo "_markAll(select)
{
    var form = document.getElementById('";
        // line 516
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 516, $this->source); })()), "hash", array()), "html", null, true);
        echo "');

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;
        }
    }

    var selected = document.getElementById('";
        // line 524
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 524, $this->source); })()), "hash", array()), "html", null, true);
        echo "_mass_action_selected');

    if (select) {
        document.getElementById('";
        // line 527
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 527, $this->source); })()), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '1';
        selected.innerHTML = '";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 528, $this->source); })()), "totalCount", array()), "html", null, true);
        echo "');
    } else {
        document.getElementById('";
        // line 530
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 530, $this->source); })()), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';
        selected.innerHTML = '';
    }

    return false;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 538
    public function block_grid_scripts_switch_operator($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_switch_operator"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_switch_operator"));

        // line 539
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 540
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 541
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 542
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 543
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 543, $this->source); })()), "hash", array()), "html", null, true);
        echo "_switchOperator(elt, query_, submitOnChange)
{
\tsubmitOnChange = (typeof submitOnChange == 'undefined') ? true : submitOnChange;
    var inputFrom = document.getElementById(query_+'from');
    var inputTo = document.getElementById(query_+'to');
    if ((elt.options[elt.selectedIndex].value == '";
        // line 548
        echo twig_escape_filter($this->env, (isset($context["btwOperator"]) || array_key_exists("btwOperator", $context) ? $context["btwOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btwOperator" does not exist.', 548, $this->source); })()), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["btweOperator"]) || array_key_exists("btweOperator", $context) ? $context["btweOperator"] : (function () { throw new Twig_Error_Runtime('Variable "btweOperator" does not exist.', 548, $this->source); })()), "html", null, true);
        echo "')) {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = '';
        inputTo.disabled=false;
    } else if ((elt.options[elt.selectedIndex].value == '";
        // line 553
        echo twig_escape_filter($this->env, (isset($context["isNullOperator"]) || array_key_exists("isNullOperator", $context) ? $context["isNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNullOperator" does not exist.', 553, $this->source); })()), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, (isset($context["isNotNullOperator"]) || array_key_exists("isNotNullOperator", $context) ? $context["isNotNullOperator"] : (function () { throw new Twig_Error_Runtime('Variable "isNotNullOperator" does not exist.', 553, $this->source); })()), "html", null, true);
        echo "')) {
        inputFrom.style.display = 'none';
        inputFrom.disabled=true;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
        if (submitOnChange) {
            elt.form.submit();
        }
    } else {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
    }
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 570
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_submit_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_submit_form"));

        // line 571
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new Twig_Error_Runtime('Variable "grid" does not exist.', 571, $this->source); })()), "hash", array()), "html", null, true);
        echo "_submitForm(event, form)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (event.type != 'keypress' || key == 13) {
        form.submit();
    }

    return true;
}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 587
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_ajax"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "grid_scripts_ajax"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2642 => 587,  2616 => 571,  2607 => 570,  2579 => 553,  2569 => 548,  2560 => 543,  2558 => 542,  2556 => 541,  2554 => 540,  2552 => 539,  2543 => 538,  2526 => 530,  2519 => 528,  2515 => 527,  2509 => 524,  2498 => 516,  2492 => 514,  2483 => 513,  2468 => 507,  2463 => 505,  2459 => 504,  2456 => 503,  2452 => 501,  2450 => 500,  2433 => 486,  2427 => 484,  2418 => 483,  2401 => 477,  2395 => 475,  2386 => 474,  2368 => 467,  2355 => 458,  2346 => 457,  2329 => 451,  2323 => 449,  2314 => 448,  2297 => 442,  2291 => 440,  2282 => 439,  2265 => 433,  2259 => 431,  2250 => 430,  2225 => 415,  2216 => 414,  2203 => 410,  2199 => 409,  2195 => 408,  2191 => 407,  2187 => 406,  2183 => 405,  2179 => 404,  2175 => 403,  2171 => 402,  2167 => 401,  2163 => 400,  2160 => 399,  2151 => 398,  2136 => 392,  2127 => 391,  2112 => 388,  2103 => 387,  2091 => 383,  2088 => 382,  2082 => 381,  2079 => 380,  2064 => 378,  2060 => 377,  2041 => 375,  2038 => 374,  2023 => 372,  2019 => 371,  1995 => 369,  1992 => 368,  1986 => 367,  1983 => 366,  1952 => 364,  1948 => 363,  1940 => 362,  1937 => 361,  1906 => 359,  1902 => 358,  1893 => 357,  1891 => 356,  1886 => 354,  1883 => 353,  1881 => 352,  1879 => 351,  1877 => 350,  1875 => 349,  1873 => 348,  1871 => 347,  1869 => 346,  1867 => 345,  1865 => 344,  1856 => 343,  1824 => 338,  1802 => 337,  1797 => 335,  1794 => 334,  1792 => 333,  1790 => 332,  1788 => 331,  1786 => 330,  1784 => 329,  1782 => 328,  1780 => 327,  1771 => 326,  1758 => 321,  1743 => 319,  1739 => 318,  1723 => 317,  1720 => 316,  1718 => 315,  1709 => 314,  1694 => 309,  1688 => 307,  1686 => 306,  1675 => 305,  1672 => 304,  1670 => 303,  1668 => 302,  1659 => 301,  1646 => 298,  1637 => 297,  1624 => 294,  1615 => 293,  1591 => 290,  1588 => 289,  1586 => 288,  1569 => 287,  1560 => 286,  1547 => 283,  1538 => 282,  1512 => 278,  1510 => 277,  1505 => 276,  1502 => 275,  1500 => 274,  1483 => 273,  1481 => 272,  1479 => 271,  1470 => 270,  1457 => 267,  1448 => 266,  1436 => 264,  1427 => 263,  1414 => 260,  1405 => 259,  1388 => 257,  1379 => 256,  1362 => 253,  1353 => 252,  1342 => 249,  1335 => 247,  1316 => 245,  1288 => 243,  1286 => 242,  1283 => 241,  1279 => 240,  1276 => 239,  1273 => 238,  1264 => 237,  1253 => 234,  1248 => 232,  1245 => 231,  1234 => 229,  1230 => 228,  1223 => 226,  1218 => 225,  1216 => 224,  1213 => 223,  1204 => 222,  1193 => 219,  1188 => 217,  1185 => 216,  1174 => 214,  1170 => 213,  1163 => 211,  1158 => 210,  1156 => 209,  1153 => 208,  1144 => 207,  1133 => 204,  1127 => 201,  1124 => 200,  1113 => 198,  1109 => 197,  1102 => 195,  1094 => 194,  1090 => 193,  1087 => 192,  1085 => 191,  1080 => 189,  1074 => 188,  1068 => 187,  1062 => 186,  1056 => 185,  1052 => 183,  1043 => 182,  1030 => 179,  1015 => 177,  1011 => 176,  1007 => 175,  1003 => 174,  994 => 173,  975 => 169,  969 => 168,  960 => 167,  958 => 166,  954 => 165,  945 => 164,  933 => 161,  924 => 160,  910 => 155,  906 => 154,  902 => 153,  899 => 152,  893 => 150,  890 => 149,  881 => 148,  864 => 144,  850 => 142,  845 => 140,  830 => 139,  827 => 138,  813 => 137,  791 => 135,  788 => 134,  770 => 133,  767 => 132,  764 => 131,  761 => 130,  742 => 129,  733 => 128,  713 => 122,  699 => 121,  689 => 119,  686 => 118,  683 => 117,  680 => 116,  677 => 115,  674 => 114,  671 => 113,  654 => 112,  648 => 111,  645 => 110,  643 => 109,  634 => 108,  623 => 105,  609 => 104,  588 => 102,  585 => 101,  568 => 100,  565 => 99,  556 => 98,  545 => 95,  531 => 94,  527 => 92,  524 => 91,  521 => 90,  515 => 88,  512 => 87,  508 => 85,  506 => 84,  503 => 83,  501 => 82,  490 => 81,  488 => 80,  485 => 79,  483 => 78,  480 => 77,  477 => 76,  474 => 75,  471 => 74,  468 => 73,  465 => 72,  463 => 71,  460 => 70,  457 => 69,  451 => 67,  448 => 66,  446 => 65,  426 => 64,  423 => 63,  420 => 62,  403 => 61,  400 => 60,  391 => 59,  375 => 54,  372 => 53,  365 => 51,  362 => 50,  359 => 49,  355 => 48,  353 => 47,  351 => 46,  342 => 45,  322 => 43,  311 => 40,  305 => 38,  301 => 36,  295 => 34,  293 => 33,  290 => 32,  284 => 30,  281 => 29,  275 => 27,  272 => 26,  266 => 24,  264 => 23,  256 => 19,  250 => 17,  247 => 16,  241 => 14,  239 => 13,  234 => 10,  228 => 8,  226 => 7,  218 => 5,  216 => 4,  213 => 3,  204 => 2,  194 => 587,  191 => 586,  189 => 570,  186 => 569,  184 => 538,  181 => 537,  179 => 513,  176 => 512,  174 => 483,  171 => 482,  169 => 474,  166 => 473,  164 => 457,  161 => 456,  159 => 448,  156 => 447,  154 => 439,  151 => 438,  149 => 430,  146 => 429,  144 => 414,  141 => 413,  139 => 398,  134 => 394,  132 => 391,  130 => 387,  128 => 343,  126 => 326,  124 => 314,  122 => 301,  120 => 297,  118 => 293,  116 => 286,  114 => 282,  112 => 270,  110 => 266,  108 => 263,  106 => 259,  104 => 256,  102 => 252,  100 => 237,  98 => 222,  96 => 207,  94 => 182,  92 => 173,  90 => 164,  88 => 160,  86 => 148,  84 => 128,  82 => 108,  80 => 98,  78 => 59,  76 => 45,  74 => 43,  72 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# ------------------------------------------------------ grid ------------------------------------------------------ #}
{% block grid %}
<div class=\"grid\">
{% if grid.totalCount > 0 or grid.isFiltered or grid.noDataMessage is same as (false) %}
    <form id=\"{{ grid.hash }}\" action=\"{{ grid.routeUrl }}\" method=\"post\">
        <div class=\"grid_header\">
        {% if grid.massActions|length > 0 %}
            {{ grid_actions(grid) }}
        {% endif %}
        </div>
        <div class=\"grid_body\">
        <table>
        {% if grid.isTitleSectionVisible %}
            {{ grid_titles(grid) }}
        {% endif %}
        {% if grid.isFilterSectionVisible %}
            {{ grid_filters(grid) }}
        {% endif %}
        {{ grid_rows(grid) }}
        </table>
        </div>
        <div class=\"grid_footer\">
        {% if grid.isPagerSectionVisible %}
            {{ grid_pager(grid) }}
        {% endif %}
        {% if grid.exports|length > 0 %}
            {{ grid_exports(grid) }}
        {% endif %}
        {% if grid.tweaks|length > 0 %}
            {{ grid_tweaks(grid) }}
        {% endif %}
        </div>
        {% if withjs %}
            {{ grid_scripts(grid) }}
        {% endif %}
    </form>
{% else %}
    {{ grid_no_data(grid) }}
{% endif %}
</div>
{% endblock grid %}
{# --------------------------------------------------- grid_no_data ------------------------------------------------- #}
{% block grid_no_data %}<p class=\"no_data\">{{ grid.noDataMessage|default('No data')|trans|raw }}</p>{% endblock grid_no_data %}
{# --------------------------------------------------- grid_no_result ------------------------------------------------- #}
{% block grid_no_result %}
{% spaceless %}
{% set nbColumns = 0 %}
{% for column in grid.columns %}
    {% if column.visible(grid.isReadyForExport) %}
        {% set nbColumns = nbColumns + 1 %}
    {% endif %}
{% endfor %}
<tr class=\"grid-row-cells\">
    <td class=\"last-column last-row\" colspan=\"{{ nbColumns }}\" style=\"text-align: center;\">{{ grid.noResultMessage|default('No result')|trans|raw }}</td>
</tr>
{% endspaceless %}
{% endblock grid_no_result %}
{# --------------------------------------------------- grid_titles -------------------------------------------------- #}
{% block grid_titles %}
    <tr class=\"grid-row-titles\">
    {% for column in grid.columns %}
        {% set translation_domain = column.translationDomain %}
        {% if column.visible(grid.isReadyForExport) %}
            <th class=\"{% if column.align != 'left'%}align-{{ column.align }}{% endif %}{% if column.class %} {{ column.class }}{% endif %}{% if loop.last %} last-column{% endif %}\"{% if(column.size > -1) %} style=\"width:{{ column.size }}px;\"{% endif %}>
            {%- spaceless %}
            {% if column.type == 'massaction' %}
                <input type=\"checkbox\" class=\"grid-mass-selector\" onclick=\"{{ grid.hash }}_markVisible(this.checked);\"/>
            {% else %}
                {% set columnTitle = column.title %}

                {% if column.usePrefixTitle == true %}
                    {% set columnTitle = grid.prefixTitle ~ columnTitle ~ '__abbr' %}
                    {% if columnTitle|trans({}, translation_domain) == columnTitle %}
                        {% set columnTitle = grid.prefixTitle ~ column.title %}
                    {% endif %}
                {% endif %}

                {% set columnTitle = columnTitle|trans({}, translation_domain) %}

                {% if (column.sortable) %}
                    <a class=\"order\" href=\"{{ grid_url('order', grid, column) }}\" title=\"{{ 'Order by'|trans }} {{ columnTitle }}\">{{ columnTitle }}</a>
                    {% if column.order == 'asc' %}
                        <div class=\"sort_up\"></div>
                    {% elseif column.order == 'desc' %}
                        <div class=\"sort_down\"></div>
                    {% endif %}
                {% else %}
                    {{ columnTitle }}
                {% endif %}
            {% endif %}
            {% endspaceless -%}
            </th>
        {% endif %}
    {% endfor %}
    </tr>
{% endblock grid_titles %}
{# -------------------------------------------------- grid_filters -------------------------------------------------- #}
{% block grid_filters %}
    <tr class=\"grid-row-filters\">
    {% for column in grid.columns %}
        {% if column.visible(grid.isReadyForExport) %}
        <th class=\"{% if column.class %}{{ column.class }}{% endif %}{% if loop.last %} last-column{% endif %}\"{% if(column.size > -1) %} style=\"width:{{ column.size }}px;\"{% endif %}>{% if column.filterable %}{{ grid_filter(column, grid)|raw }}{% endif %}</th>
        {% endif %}
    {% endfor %}
    </tr>
{% endblock grid_filters %}
{# -------------------------------------------------- grid_search -------------------------------------------------- #}
{% block grid_search %}
{% if grid.isFilterSectionVisible %}
    <div class=\"grid-search\">
        <form id=\"{{ grid.hash }}_search\" action=\"{{ grid.routeUrl }}\" method=\"post\">
        {% for column in grid.columns %}
            {% if column.isFilterable and column.type not in ['actions', 'massaction'] %}
                {% if column.usePrefixTitle == true %}
                    {% set columnTitle = grid.prefixTitle ~ column.title %}
                {% else %}
                    {% set columnTitle = column.title %}
                {% endif %}
                <div class=\"{{ cycle(['odd', 'even'], loop.index) }}\"><label>{{ columnTitle|trans }}</label>{{ grid_filter(column, grid, false)|raw }}</div>
            {% endif %}
        {% endfor %}
            <div class=\"grid-search-action\"><input type=\"submit\" class=\"grid-search-submit\" value=\"{{ 'Search'|trans }}\"/><input type=\"button\" class=\"grid-search-reset\" value=\"{{ 'Reset'|trans }}\" onclick=\"return {{ grid.hash }}_reset();\"/></div>
        </form>
    </div>
{% endif %}
{% endblock grid_search %}
{# ---------------------------------------------------- grid_rows --------------------------------------------------- #}
{% block grid_rows %}
    {% for row in grid.rows %}
    {% set last_row = loop.last %}
    {% spaceless %}
        {% set gridColumns %}
            {% for column in grid.columns %}
                {% if column.visible(grid.isReadyForExport) %}
                    <td class=\"grid-column-{{ column.renderBlockId }}{% if column.class %} {{ column.class }}{% endif %}{% if column.align != 'left'%} align-{{ column.align }}{% endif %}{% if loop.last %} last-column{% endif %}{% if last_row %} last-row{% endif %}\">{{ grid_cell(column, row, grid)|raw }}</td>
                {% endif %}
            {% endfor %}
        {% endset %}
        <tr{% if row.color != '' %} style=\"background-color:{{ row.color }};\"{% endif %} class=\"grid-row-cells {{ cycle(['odd', 'even'], loop.index) }}{% if row.class != '' %} {{ row.class }}{% endif %}\">
        {{ gridColumns }}
    {% endspaceless %}
    </tr>
    {% else %}
        {{ grid_no_result(grid) }}
    {% endfor %}
{% endblock grid_rows %}
{# ---------------------------------------------------- grid_pager -------------------------------------------------- #}
{% block grid_pager %}
    {% if pagerfanta %}
        {{ grid_pagerfanta(grid) }}
    {% else %}
        <div class=\"pager\" style=\"float:left\">
            {{ grid_pager_totalcount(grid) }}
            {{ grid_pager_selectpage(grid) }}
            {{ grid_pager_results_perpage(grid) }}
        </div>
    {% endif %}
{% endblock grid_pager %}
{# ---------------------------------------------------- grid_pager_totalcount -------------------------------------------------- #}
{% block grid_pager_totalcount %}
{{ '%count% Results, ' | transchoice(grid.totalCount, {'%count%': grid.totalCount}) }}
{% endblock grid_pager_totalcount %}
{# ---------------------------------------------------- grid_pager_selectpage -------------------------------------------------- #}
{% block grid_pager_selectpage %}
{{ 'Page'|trans }}
{% spaceless %}
<input type=\"button\" class=\"prev\" {% if grid.page <= 0 %}disabled=\"disabled\"{% endif %} value=\"<\" onclick=\"return {{ grid.hash }}_previousPage();\"/>
<input type=\"text\" class=\"current\" value=\"{{ grid.page + 1 }}\" size=\"2\" onkeypress=\"return {{ grid.hash }}_enterPage(event, parseInt(this.value)-1);\"/>
<input type=\"button\" value=\">\" class=\"next\" {% if grid.page >= grid.pageCount-1 %}disabled=\"disabled\"{% endif %} onclick=\"return {{ grid.hash }}_nextPage();\"/> {{ 'of %count%'|trans({ '%count%' : grid.pageCount }) }}
{% endspaceless %}
{% endblock grid_pager_selectpage %}
{# ---------------------------------------------------- grid_pager_results_perpage -------------------------------------------------- #}
{% block grid_pager_results_perpage %}
{{ ', Display'|trans }}
<select onchange=\"return {{ grid.hash }}_resultsPerPage(this.value);\">
{% for key, value in grid.limits %}
    <option value=\"{{ key }}\"{% if (key == grid.limit) %} selected=\"selected\"{% endif %}>{{ value }}</option>
{% endfor %}
</select> {{ 'Items per page'|trans }}
{% endblock grid_pager_results_perpage %}
{# --------------------------------------------------- grid_actions ------------------------------------------------- #}
{% block grid_actions %}
<div class=\"mass-actions\">
    <span class=\"grid_massactions_helper\">
        <a href=\"#\" onclick=\"return {{ grid.hash }}_markVisible(true);\">{{ 'Select visible'|trans }}</a> |
        <a href=\"#\" onclick=\"return {{ grid.hash }}_markVisible(false);\">{{ 'Deselect visible'|trans }}</a> |
        <a href=\"#\" onclick=\"return {{ grid.hash }}_markAll(true);\">{{ 'Select all'|trans }}</a> |
        <a href=\"#\" onclick=\"return {{ grid.hash }}_markAll(false);\">{{ 'Deselect all'|trans }}</a>
        <span class=\"mass-actions-selected\" id=\"{{ grid.hash }}_mass_action_selected\"></span>
    </span>
    {% spaceless %}
    <div style=\"float:right;\" class=\"grid_massactions\">
        {{ 'Action'|trans }}
        <input type=\"hidden\" id=\"{{ grid.hash }}_mass_action_all\" name=\"{{ grid.hash }}[{{ constant('APY\\\\DataGridBundle\\\\Grid\\\\Grid::REQUEST_QUERY_MASS_ACTION_ALL_KEYS_SELECTED') }}]\" value=\"0\"/>
        <select name=\"{{ grid.hash }}[{{ constant('APY\\\\DataGridBundle\\\\Grid\\\\Grid::REQUEST_QUERY_MASS_ACTION') }}]\">
            <option value=\"-1\"></option>
            {% for key, massAction in grid.massActions %}
            <option value=\"{{ key }}\">{{ massAction.title|trans }}</option>
            {% endfor %}
        </select>
        <input type=\"submit\"  value=\"{{ 'Submit Action'|trans }}\"/>
    </div>
    {% endspaceless %}
</div>
{% endblock grid_actions %}
{# --------------------------------------------------- grid_exports ------------------------------------------------- #}
{% block grid_exports %}
<div class=\"exports\" style=\"float:right\">
    {% spaceless %}
        {{ 'Export'|trans }}
            <select name=\"{{grid.hash}}[{{ constant('APY\\\\DataGridBundle\\\\Grid\\\\Grid::REQUEST_QUERY_EXPORT') }}]\">
            <option value=\"-1\"></option>
            {% for key, export in grid.exports %}
            <option value=\"{{key}}\">{{ export.title|trans }}</option>
            {% endfor %}
        </select>
        <input type=\"submit\" value=\"{{ 'Export'|trans }}\"/>
    {% endspaceless %}
</div>
{% endblock grid_exports %}
{# --------------------------------------------------- grid_tweaks ------------------------------------------------- #}
{% block grid_tweaks %}
<div class=\"tweaks\" style=\"float:right\">
    {% spaceless %}
        {{ 'Tweaks'|trans }}
            <select name=\"{{grid.hash}}[{{ constant('APY\\\\DataGridBundle\\\\Grid\\\\Grid::REQUEST_QUERY_TWEAK') }}]\">
            <option value=\"\"></option>
            {% for key, tweak in grid.tweaks %}
            <option value=\"{{key}}\">{{ tweak.title|trans }}</option>
            {% endfor %}
        </select>
        <input type=\"submit\" value=\"{{ 'Tweak'|trans }}\"/>
    {% endspaceless %}
</div>
{% endblock grid_tweaks %}
{# ------------------------------------------------ grid_column_actions_cell --------------------------------------------- #}
{% block grid_column_actions_cell %}
    {% set actions = column.getActionsToRender(row) %}
    <ul class=\"grid-row-actions\">
    {% for action in actions %}
        <li>
        {% if action.enabled %}
            <a href=\"{{ url(action.route, column.routeParameters(row, action), false) }}\" target=\"{{ action.target }}\"{% if action.confirm %} onclick=\"return confirm('{{ action.confirmMessage }}')\"{% endif %}{% for name, value in action.attributes %} {{ name }}=\"{{ value }}\" {% endfor %}>{{ action.title|trans }}</a>
        {% else %}
            <span{% for name, value in action.attributes %} {{ name }}=\"{{ value }}\" {% endfor %}>{{ action.title|trans }}</span>
        {% endif %}
        </li>
    {% endfor %}
    </ul>
{% endblock grid_column_actions_cell %}
{# ------------------------------------------------ grid_column_massaction_cell --------------------------------------------- #}
{% block grid_column_massaction_cell %}
    <input type=\"checkbox\" class=\"action\" value=\"1\" name=\"{{ grid.hash }}[{{ column.id }}][{{ row.primaryFieldValue }}]\"/>
{% endblock grid_column_massaction_cell %}
{# ------------------------------------------------ grid_column_type_boolean_cell --------------------------------------------- #}
{% block grid_column_boolean_cell %}
    <span class=\"grid_boolean_{{ value }}\" title=\"{{ value }}\">{{ block('grid_column_cell') }}</span>
{% endblock grid_column_boolean_cell %}
{% block grid_column_type_boolean_cell %}
\t{{ block('grid_column_boolean_cell') }}
{% endblock grid_column_type_boolean_cell %}
{# ------------------------------------------------ grid_column_type_rank_cell --------------------------------------------- #}
{% block grid_column_rank_cell %}
{{ grid.page * grid.limit + value }}
{% endblock grid_column_rank_cell %}
{% block grid_column_type_rank_cell %}
\t{{ block('grid_column_rank_cell') }}
{% endblock grid_column_type_rank_cell %}
{# ------------------------------------------------ grid_column_type_array_columns --------------------------------------------- #}
{% block grid_column_array_cell %}
{% set sourceValues = row.field(column.id) %}
{% set values = value %}
{% for key, index in values -%}
    {% set value = index %}
    {% set sourceValue = sourceValues[key] %}
    {{ block('grid_column_cell') | raw }}
    {% if not loop.last %}
      {{ column.separator | raw }}
    {% endif %}
{%- endfor %}
{% endblock grid_column_array_cell %}
{% block grid_column_type_array_cell %}
\t{{ block('grid_column_array_cell') }}
{% endblock grid_column_type_array_cell %}
{# ------------------------------------------------ grid_column_type_join_cell --------------------------------------------- #}
{% block grid_column_join_cell %}
{% for key, index in column.joinColumns -%}
    {% set value = row.field(index) %}
    {% set sourceValue = value %}
    {{ block('grid_column_cell') | raw }}{{ column.separator | raw }}
{%- endfor %}
{% endblock grid_column_join_cell %}
{% block grid_column_type_join_cell %}
\t{{ block('grid_column_join_cell') }}
{% endblock grid_column_type_join_cell %}
{# ------------------------------------------------ grid_column_type_simple_array_columns --------------------------------------------- #}
{% block grid_column_type_simple_array_cell %}
    {{ block('grid_column_array_cell') }}
{% endblock grid_column_type_simple_array_cell %}
{# ------------------------------------------- grid_column_cell ---------------------------------------- #}
{% block grid_column_cell %}
{%- spaceless %}
{% if column.filterable and column.searchOnClick %}
    {% set sourceValue = sourceValue is defined ? sourceValue : row.field(column.id) %}
    <a href=\"?{{ grid.hash }}[{{ column.id }}][from]={{ sourceValue | url_encode() }}\" class=\"searchOnClick\">{{ value }}</a>
{% elseif column.safe is same as (false) %}
    {{ value|raw }}
{% else %}
    {{ value|escape(column.safe)|raw }}
{% endif %}
{% endspaceless -%}
{% endblock grid_column_cell %}
{# -------------------------------------------- grid_column_operator --------------------------------------- #}
{% block grid_column_operator %}
{% if column.operatorsVisible %}
<span class=\"grid-filter-operator\">
    <select name=\"{{ grid.hash }}[{{ column.id }}][operator]\" onchange=\"{{ grid.hash }}_switchOperator(this, '{{ grid.hash }}__{{ column.id }}__query__'{% if submitOnChange is same as (false) %}, false{% endif%});\">
    {% for operator in column.operators %}
        <option value=\"{{ operator }}\"{% if op == operator %} selected=\"selected\"{% endif %}>{{ operator |trans }}</option>
    {% endfor %}
    </select>
</span>
{% endif %}
{% endblock grid_column_operator %}
{# -------------------------------------------- grid_column_filter_type_input --------------------------------------- #}
{% block grid_column_filter_type_input %}
{% set btwOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_BTW') %}
{% set btweOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_BTWE') %}
{% set isNullOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_ISNULL') %}
{% set isNotNullOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_ISNOTNULL') %}
{% set op = column.data.operator is defined ? column.data.operator : column.defaultOperator %}
{% set from = column.data.from is defined ? column.data.from : null %}
{% set to = column.data.to is defined ? column.data.to : null %}
<span class=\"grid-filter-input\">
    {{ grid_column_operator(column, grid, op, submitOnChange) }}
    <span class=\"grid-filter-input-query\">
        <input type=\"{{ column.inputType }}\" value=\"{{ from }}\" class=\"grid-filter-input-query-from\" name=\"{{ grid.hash }}[{{ column.id }}][from]\" id=\"{{ grid.hash }}__{{ column.id }}__query__from\" {% if submitOnChange is same as (true) %}onkeypress=\"return {{ grid.hash }}_submitForm(event, this.form);\"{% endif%} {{ ( op == isNullOperator or op == isNotNullOperator ) ? 'style=\"display: none;\" disabled=\"disabled\"' : '' }} />
        <input type=\"{{ column.inputType }}\" value=\"{{ to }}\" class=\"grid-filter-input-query-to\" name=\"{{ grid.hash }}[{{ column.id }}][to]\" id=\"{{ grid.hash }}__{{ column.id }}__query__to\" {% if submitOnChange is same as (true) %}onkeypress=\"return {{ grid.hash }}_submitForm(event, this.form);\"{% endif%} {{ ( op == btwOperator or op == btweOperator ) ? '': 'style=\"display: none;\" disabled=\"disabled\"' }} />
    </span>
</span>
{% endblock grid_column_filter_type_input %}
{# -------------------------------------------- grid_column_filter_type_select --------------------------------------- #}
{% block grid_column_filter_type_select %}
{% set btwOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_BTW') %}
{% set btweOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_BTWE') %}
{% set isNullOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_ISNULL') %}
{% set isNotNullOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_ISNOTNULL') %}
{% set op = column.data.operator is defined ? column.data.operator : column.defaultOperator %}
{% set from = column.data.from is defined ? column.data.from : null %}
{% set to = column.data.to is defined ? column.data.to : null %}
{% set multiple = column.selectMulti %}
{% set expanded = column.selectExpanded %}
<span class=\"grid-filter-select\">
    {{ grid_column_operator(column, grid, op, submitOnChange) }}
    <span class=\"grid-filter-select-query\">
    {% if expanded %}
        <span class=\"grid-filter-select-query-from\" id=\"{{ grid.hash }}__{{ column.id }}__query__from\" {{ ( op == isNullOperator or op == isNotNullOperator ) ? 'style=\"display: none;\" disabled=\"disabled\"' : '' }}>
        {% for key, value in column.values %}
            <span><input type=\"{% if multiple %}checkbox{% else %}radio{% endif %}\" name=\"{{ grid.hash }}[{{ column.id }}][from][]\" value=\"{{ key }}\" {% if key in from %} checked=\"checked\"{% endif %} {% if submitOnChange is same as (true) %}onclick=\"return {{ grid.hash }}_submitForm(event, this.form);\"{% endif%}/><label>{{ value }}</label></span>
        {% endfor %}
        </span>
        <span class=\"grid-filter-select-query-to\" id=\"{{ grid.hash }}__{{ column.id }}__query__to\" {{ ( op == btwOperator or op == btweOperator ) ? '': 'style=\"display: none;\" disabled=\"disabled\"' }}>
        {% for key, value in column.values %}
            <span><input type=\"{% if multiple %}checkbox{% else %}radio{% endif %}\" name=\"{{ grid.hash }}[{{ column.id }}][to]\" value=\"{{ key }}\" {% if not to is null and to == key %} checked=\"checked\"{% endif %} {% if submitOnChange is same as (true) %}onclick=\"return {{ grid.hash }}_submitForm(event, this.form);\"{% endif%}/><label>{{ value }}</label></span>
        {% endfor %}
        </span>
        {% if multiple %}<input type=\"submit\" value=\"{{ 'Go'|trans }}\" />{% endif %}
    {% else %}
        <select{% if multiple %} multiple=\"multiple\"{% endif %} name=\"{{ grid.hash }}[{{ column.id }}][from][]\" class=\"grid-filter-select-query-from\" id=\"{{ grid.hash }}__{{ column.id }}__query__from\" {% if submitOnChange is same as (true) %}onchange=\"return {{ grid.hash }}_submitForm(event, this.form);\"{% endif%} {{ ( op == isNullOperator or op == isNotNullOperator ) ? 'style=\"display: none;\" disabled=\"disabled\"' : '' }}>
            <option value=\"\">&nbsp;</option>
            {% for key, value in column.values %}
                <option value=\"{{ key }}\"{% if key in from %} selected=\"selected\"{% endif %}>{{ value }}</option>
            {% endfor %}
        </select>
        <select name=\"{{ grid.hash }}[{{ column.id }}][to]\" class=\"grid-filter-select-query-to\" id=\"{{ grid.hash }}__{{ column.id }}__query__to\" {% if submitOnChange is same as (true) %}onchange=\"return {{ grid.hash }}_submitForm(event, this.form);\"{% endif%} {{ ( op == btwOperator or op == btweOperator ) ? '': 'style=\"display: none;\" disabled=\"disabled\"' }}>
            <option value=\"\">&nbsp;</option>
            {% for key, value in column.values %}
                <option value=\"{{ key }}\"{% if not to is null and to == key %} selected=\"selected\"{% endif %}>{{ value }}</option>
            {% endfor %}
        </select>
        {% if multiple %}<input type=\"submit\" value=\"{{ 'Go'|trans }}\" />{% endif %}
    {% endif %}
    </span>
</span>
{% endblock grid_column_filter_type_select %}
{# -------------------------------------------- grid_column_filter_type_massaction --------------------------------------- #}
{% block grid_column_filter_type_massaction %}
    <input type=\"button\" class=\"grid-search-reset\" value=\"R\" title=\"{{ 'Reset'|trans }}\" onclick=\"return {{ grid.hash }}_reset();\"/>
{% endblock grid_column_filter_type_massaction %}
{# -------------------------------------------- grid_column_filter_type_massaction_filter --------------------------------------- #}
{% block grid_column_filter_type_actions %}
    <a class=\"grid-reset\" href=\"{{ grid_url('reset', grid) }}\">{{ 'Reset'|trans }}</a>
{% endblock grid_column_filter_type_actions %}



{# --------------------------------------------------- grid_scripts -------------------------------------------------- #}
{% block grid_scripts %}
<script type=\"text/javascript\">
{{ grid_scripts_goto(grid) }}
{{ grid_scripts_reset(grid) }}
{{ grid_scripts_previous_page(grid) }}
{{ grid_scripts_next_page(grid) }}
{{ grid_scripts_enter_page(grid) }}
{{ grid_scripts_results_per_page(grid) }}
{{ grid_scripts_mark_visible(grid) }}
{{ grid_scripts_mark_all(grid) }}
{{ grid_scripts_switch_operator(grid) }}
{{ grid_scripts_submit_form(grid) }}
{{ grid_scripts_ajax(grid) }}
</script>
{% endblock grid_scripts %}

{% block grid_scripts_goto %}
function {{ grid.hash }}_goto(url)
{
    if (/MSIE (8\\.\\d+);/.test(navigator.userAgent)) {
        var referLink = document.createElement('a');
        referLink.href = url;
        document.body.appendChild(referLink);
        referLink.click();
    } else {
        window.location.href = url;
    }

    return false;
}
{% endblock grid_scripts_goto %}

{% block grid_scripts_reset %}
function {{ grid.hash }}_reset()
{
    {{ grid.hash }}_goto('{{ grid_url('reset', grid) }}');

    return false;
}
{% endblock grid_scripts_reset %}

{% block grid_scripts_previous_page %}
function {{ grid.hash }}_previousPage()
{
    {{ grid.hash }}_goto('{{ grid_url('page', grid, grid.page - 1) }}');

    return false;
}
{% endblock grid_scripts_previous_page %}

{% block grid_scripts_next_page %}
function {{ grid.hash }}_nextPage()
{
    {{ grid.hash }}_goto('{{ grid_url('page', grid, grid.page + 1) }}');

    return false;
}
{% endblock grid_scripts_next_page %}

{% block grid_scripts_enter_page %}
function {{ grid.hash }}_enterPage(event, page)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (key == 13) {
        {{ grid.hash }}_goto('{{ grid_url('page', grid) }}' + page);

        return false;
    }
}
{% endblock grid_scripts_enter_page %}

{% block grid_scripts_results_per_page %}
function {{ grid.hash }}_resultsPerPage(limit)
{
    {{ grid.hash }}_goto('{{ grid_url('limit', grid) }}' + limit);

    return true;
}
{% endblock grid_scripts_results_per_page %}

{% block grid_scripts_mark_visible %}
function {{ grid.hash }}_markVisible(select)
{
    var form = document.getElementById('{{ grid.hash }}');

    var counter = 0;

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;

            if (form.elements[i].checked){
               counter++;
            }
        }
    }

    {% if grid.isFilterSectionVisible %}
    counter--;
    {% endif %}

    var selected = document.getElementById('{{ grid.hash }}_mass_action_selected');
    selected.innerHTML = counter > 0 ? '{{ 'Selected _s_ rows'|trans }}'.replace('_s_', counter) : '';

    document.getElementById('{{ grid.hash }}_mass_action_all').value = '0';

    return false;
}
{% endblock grid_scripts_mark_visible %}

{% block grid_scripts_mark_all %}
function {{ grid.hash }}_markAll(select)
{
    var form = document.getElementById('{{ grid.hash }}');

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;
        }
    }

    var selected = document.getElementById('{{ grid.hash }}_mass_action_selected');

    if (select) {
        document.getElementById('{{ grid.hash }}_mass_action_all').value = '1';
        selected.innerHTML = '{{ 'Selected _s_ rows'|trans }}'.replace('_s_', '{{ grid.totalCount }}');
    } else {
        document.getElementById('{{ grid.hash }}_mass_action_all').value = '0';
        selected.innerHTML = '';
    }

    return false;
}
{% endblock grid_scripts_mark_all %}

{% block grid_scripts_switch_operator %}
{% set btwOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_BTW') %}
{% set btweOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_BTWE') %}
{% set isNullOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_ISNULL') %}
{% set isNotNullOperator = constant('APY\\\\DataGridBundle\\\\Grid\\\\Column\\\\Column::OPERATOR_ISNOTNULL') %}
function {{ grid.hash }}_switchOperator(elt, query_, submitOnChange)
{
\tsubmitOnChange = (typeof submitOnChange == 'undefined') ? true : submitOnChange;
    var inputFrom = document.getElementById(query_+'from');
    var inputTo = document.getElementById(query_+'to');
    if ((elt.options[elt.selectedIndex].value == '{{ btwOperator }}') || (elt.options[elt.selectedIndex].value == '{{ btweOperator }}')) {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = '';
        inputTo.disabled=false;
    } else if ((elt.options[elt.selectedIndex].value == '{{ isNullOperator }}') || (elt.options[elt.selectedIndex].value == '{{ isNotNullOperator }}')) {
        inputFrom.style.display = 'none';
        inputFrom.disabled=true;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
        if (submitOnChange) {
            elt.form.submit();
        }
    } else {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = 'none';
        inputTo.disabled=true;
    }
}
{% endblock grid_scripts_switch_operator %}

{% block grid_scripts_submit_form %}
function {{ grid.hash }}_submitForm(event, form)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (event.type != 'keypress' || key == 13) {
        form.submit();
    }

    return true;
}
{% endblock grid_scripts_submit_form %}

{% block grid_scripts_ajax %}
{% endblock grid_scripts_ajax %}
", "APYDataGridBundle::blocks.html.twig", "E:\\pandiaraj\\chandru\\vendor\\apy\\datagrid-bundle\\Resources\\views\\blocks.html.twig");
    }
}
