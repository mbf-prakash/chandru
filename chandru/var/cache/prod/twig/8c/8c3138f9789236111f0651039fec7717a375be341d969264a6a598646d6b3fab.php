<?php

/* APYDataGridBundle::blocks.html.twig */
class __TwigTemplate_91bea2c870ac5577f369bfcfe28348ccc2173dc99b45bc2d5dd278a454365fe2 extends Twig_Template
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
    }

    // line 2
    public function block_grid($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"grid\">
";
        // line 4
        if ((((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "totalCount", array()) > 0) || twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isFiltered", array())) || (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noDataMessage", array()) === false))) {
            // line 5
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
        <div class=\"grid_header\">
        ";
            // line 7
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "massActions", array())) > 0)) {
                // line 8
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "actions", ($context["grid"] ?? null));
                echo "
        ";
            }
            // line 10
            echo "        </div>
        <div class=\"grid_body\">
        <table>
        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isTitleSectionVisible", array())) {
                // line 14
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "titles", ($context["grid"] ?? null));
                echo "
        ";
            }
            // line 16
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isFilterSectionVisible", array())) {
                // line 17
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "filters", ($context["grid"] ?? null));
                echo "
        ";
            }
            // line 19
            echo "        ";
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "rows", ($context["grid"] ?? null));
            echo "
        </table>
        </div>
        <div class=\"grid_footer\">
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isPagerSectionVisible", array())) {
                // line 24
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridPager($this->env, ($context["grid"] ?? null));
                echo "
        ";
            }
            // line 26
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "exports", array())) > 0)) {
                // line 27
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "exports", ($context["grid"] ?? null));
                echo "
        ";
            }
            // line 29
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "tweaks", array())) > 0)) {
                // line 30
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "tweaks", ($context["grid"] ?? null));
                echo "
        ";
            }
            // line 32
            echo "        </div>
        ";
            // line 33
            if (($context["withjs"] ?? null)) {
                // line 34
                echo "            ";
                echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts", ($context["grid"] ?? null));
                echo "
        ";
            }
            // line 36
            echo "    </form>
";
        } else {
            // line 38
            echo "    ";
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "no_data", ($context["grid"] ?? null));
            echo "
";
        }
        // line 40
        echo "</div>
";
    }

    // line 43
    public function block_grid_no_data($context, array $blocks = array())
    {
        echo "<p class=\"no_data\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noDataMessage", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noDataMessage", array()), "No data")) : ("No data")));
        echo "</p>";
    }

    // line 45
    public function block_grid_no_result($context, array $blocks = array())
    {
        // line 46
        ob_start();
        // line 47
        $context["nbColumns"] = 0;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 49
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isReadyForExport", array())), "method")) {
                // line 50
                echo "        ";
                $context["nbColumns"] = (($context["nbColumns"] ?? null) + 1);
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
        echo twig_escape_filter($this->env, ($context["nbColumns"] ?? null), "html", null, true);
        echo "\" style=\"text-align: center;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noResultMessage", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "noResultMessage", array()), "No result")) : ("No result")));
        echo "</td>
</tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_grid_titles($context, array $blocks = array())
    {
        // line 60
        echo "    <tr class=\"grid-row-titles\">
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "columns", array()));
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
            if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isReadyForExport", array())), "method")) {
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
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
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
                        $context["columnTitle"] = ((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "prefixTitle", array()) . ($context["columnTitle"] ?? null)) . "__abbr");
                        // line 73
                        echo "                    ";
                        if (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["columnTitle"] ?? null), array(), ($context["translation_domain"] ?? null)) == ($context["columnTitle"] ?? null))) {
                            // line 74
                            echo "                        ";
                            $context["columnTitle"] = (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "prefixTitle", array()) . twig_get_attribute($this->env, $this->source, $context["column"], "title", array()));
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
                    $context["columnTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["columnTitle"] ?? null), array(), ($context["translation_domain"] ?? null));
                    // line 79
                    echo "
                ";
                    // line 80
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "sortable", array())) {
                        // line 81
                        echo "                    <a class=\"order\" href=\"";
                        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("order", ($context["grid"] ?? null), $context["column"]);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order by"), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($context["columnTitle"] ?? null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ($context["columnTitle"] ?? null), "html", null, true);
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
                        echo twig_escape_filter($this->env, ($context["columnTitle"] ?? null), "html", null, true);
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
    }

    // line 98
    public function block_grid_filters($context, array $blocks = array())
    {
        // line 99
        echo "    <tr class=\"grid-row-filters\">
    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "columns", array()));
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
            if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isReadyForExport", array())), "method")) {
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
                    echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridFilter($this->env, $context["column"], ($context["grid"] ?? null));
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
    }

    // line 108
    public function block_grid_search($context, array $blocks = array())
    {
        // line 109
        if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isFilterSectionVisible", array())) {
            // line 110
            echo "    <div class=\"grid-search\">
        <form id=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "_search\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "routeUrl", array()), "html", null, true);
            echo "\" method=\"post\">
        ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "columns", array()));
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
                        $context["columnTitle"] = (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "prefixTitle", array()) . twig_get_attribute($this->env, $this->source, $context["column"], "title", array()));
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["columnTitle"] ?? null)), "html", null, true);
                    echo "</label>";
                    echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridFilter($this->env, $context["column"], ($context["grid"] ?? null), false);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "_reset();\"/></div>
        </form>
    </div>
";
        }
    }

    // line 128
    public function block_grid_rows($context, array $blocks = array())
    {
        // line 129
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "rows", array()));
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
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "columns", array()));
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
                if (twig_get_attribute($this->env, $this->source, $context["column"], "visible", array(0 => twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isReadyForExport", array())), "method")) {
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
                    if (($context["last_row"] ?? null)) {
                        echo " last-row";
                    }
                    echo "\">";
                    echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridCell($this->env, $context["column"], $context["row"], ($context["grid"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["gridColumns"] ?? null), "html", null, true);
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
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "no_result", ($context["grid"] ?? null));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 148
    public function block_grid_pager($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        if (($context["pagerfanta"] ?? null)) {
            // line 150
            echo "        ";
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getPagerfanta(($context["grid"] ?? null));
            echo "
    ";
        } else {
            // line 152
            echo "        <div class=\"pager\" style=\"float:left\">
            ";
            // line 153
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "pager_totalcount", ($context["grid"] ?? null));
            echo "
            ";
            // line 154
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "pager_selectpage", ($context["grid"] ?? null));
            echo "
            ";
            // line 155
            echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "pager_results_perpage", ($context["grid"] ?? null));
            echo "
        </div>
    ";
        }
    }

    // line 160
    public function block_grid_pager_totalcount($context, array $blocks = array())
    {
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("%count% Results, ", twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "totalCount", array()), array("%count%" => twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "totalCount", array()))), "html", null, true);
        echo "
";
    }

    // line 164
    public function block_grid_pager_selectpage($context, array $blocks = array())
    {
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page"), "html", null, true);
        echo "
";
        // line 166
        ob_start();
        // line 167
        echo "<input type=\"button\" class=\"prev\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "page", array()) <= 0)) {
            echo "disabled=\"disabled\"";
        }
        echo " value=\"<\" onclick=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_previousPage();\"/>
<input type=\"text\" class=\"current\" value=\"";
        // line 168
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "page", array()) + 1), "html", null, true);
        echo "\" size=\"2\" onkeypress=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_enterPage(event, parseInt(this.value)-1);\"/>
<input type=\"button\" value=\">\" class=\"next\" ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "page", array()) >= (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "pageCount", array()) - 1))) {
            echo "disabled=\"disabled\"";
        }
        echo " onclick=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_nextPage();\"/> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("of %count%", array("%count%" => twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "pageCount", array()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 173
    public function block_grid_pager_results_perpage($context, array $blocks = array())
    {
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(", Display"), "html", null, true);
        echo "
<select onchange=\"return ";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_resultsPerPage(this.value);\">
";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "limits", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 177
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if (($context["key"] == twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "limit", array()))) {
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
    }

    // line 182
    public function block_grid_actions($context, array $blocks = array())
    {
        // line 183
        echo "<div class=\"mass-actions\">
    <span class=\"grid_massactions_helper\">
        <a href=\"#\" onclick=\"return ";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_markVisible(true);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_markVisible(false);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deselect visible"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_markAll(true);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all"), "html", null, true);
        echo "</a> |
        <a href=\"#\" onclick=\"return ";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_markAll(false);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deselect all"), "html", null, true);
        echo "</a>
        <span class=\"mass-actions-selected\" id=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_mass_action_all\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION_ALL_KEYS_SELECTED"), "html", null, true);
        echo "]\" value=\"0\"/>
        <select name=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_MASS_ACTION"), "html", null, true);
        echo "]\">
            <option value=\"-1\"></option>
            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "massActions", array()));
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
    }

    // line 207
    public function block_grid_exports($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_EXPORT"), "html", null, true);
        echo "]\">
            <option value=\"-1\"></option>
            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "exports", array()));
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
    }

    // line 222
    public function block_grid_tweaks($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_constant("APY\\DataGridBundle\\Grid\\Grid::REQUEST_QUERY_TWEAK"), "html", null, true);
        echo "]\">
            <option value=\"\"></option>
            ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "tweaks", array()));
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
    }

    // line 237
    public function block_grid_column_actions_cell($context, array $blocks = array())
    {
        // line 238
        echo "    ";
        $context["actions"] = twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "getActionsToRender", array(0 => ($context["row"] ?? null)), "method");
        // line 239
        echo "    <ul class=\"grid-row-actions\">
    ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 241
            echo "        <li>
        ";
            // line 242
            if (twig_get_attribute($this->env, $this->source, $context["action"], "enabled", array())) {
                // line 243
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["action"], "route", array()), twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "routeParameters", array(0 => ($context["row"] ?? null), 1 => $context["action"]), "method"), false), "html", null, true);
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
    }

    // line 252
    public function block_grid_column_massaction_cell($context, array $blocks = array())
    {
        // line 253
        echo "    <input type=\"checkbox\" class=\"action\" value=\"1\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "primaryFieldValue", array()), "html", null, true);
        echo "]\"/>
";
    }

    // line 256
    public function block_grid_column_boolean_cell($context, array $blocks = array())
    {
        // line 257
        echo "    <span class=\"grid_boolean_";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">";
        $this->displayBlock("grid_column_cell", $context, $blocks);
        echo "</span>
";
    }

    // line 259
    public function block_grid_column_type_boolean_cell($context, array $blocks = array())
    {
        // line 260
        echo "\t";
        $this->displayBlock("grid_column_boolean_cell", $context, $blocks);
        echo "
";
    }

    // line 263
    public function block_grid_column_rank_cell($context, array $blocks = array())
    {
        // line 264
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "page", array()) * twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "limit", array())) + ($context["value"] ?? null)), "html", null, true);
        echo "
";
    }

    // line 266
    public function block_grid_column_type_rank_cell($context, array $blocks = array())
    {
        // line 267
        echo "\t";
        $this->displayBlock("grid_column_rank_cell", $context, $blocks);
        echo "
";
    }

    // line 270
    public function block_grid_column_array_cell($context, array $blocks = array())
    {
        // line 271
        $context["sourceValues"] = twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "field", array(0 => twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array())), "method");
        // line 272
        $context["values"] = ($context["value"] ?? null);
        // line 273
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
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
            $context["sourceValue"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["sourceValues"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["key"]] ?? null) : null);
            // line 276
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo "
    ";
            // line 277
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                // line 278
                echo "      ";
                echo twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "separator", array());
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
    }

    // line 282
    public function block_grid_column_type_array_cell($context, array $blocks = array())
    {
        // line 283
        echo "\t";
        $this->displayBlock("grid_column_array_cell", $context, $blocks);
        echo "
";
    }

    // line 286
    public function block_grid_column_join_cell($context, array $blocks = array())
    {
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "joinColumns", array()));
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
            $context["value"] = twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "field", array(0 => $context["index"]), "method");
            // line 289
            echo "    ";
            $context["sourceValue"] = ($context["value"] ?? null);
            // line 290
            echo "    ";
            $this->displayBlock("grid_column_cell", $context, $blocks);
            echo twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "separator", array());
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
    }

    // line 293
    public function block_grid_column_type_join_cell($context, array $blocks = array())
    {
        // line 294
        echo "\t";
        $this->displayBlock("grid_column_join_cell", $context, $blocks);
        echo "
";
    }

    // line 297
    public function block_grid_column_type_simple_array_cell($context, array $blocks = array())
    {
        // line 298
        echo "    ";
        $this->displayBlock("grid_column_array_cell", $context, $blocks);
        echo "
";
    }

    // line 301
    public function block_grid_column_cell($context, array $blocks = array())
    {
        // line 302
        ob_start();
        // line 303
        if ((twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "filterable", array()) && twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "searchOnClick", array()))) {
            // line 304
            echo "    ";
            $context["sourceValue"] = (((isset($context["sourceValue"]) || array_key_exists("sourceValue", $context))) ? (($context["sourceValue"] ?? null)) : (twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "field", array(0 => twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array())), "method")));
            // line 305
            echo "    <a href=\"?";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "][from]=";
            echo twig_escape_filter($this->env, twig_urlencode_filter(($context["sourceValue"] ?? null)), "html", null, true);
            echo "\" class=\"searchOnClick\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</a>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 306
($context["column"] ?? null), "safe", array()) === false)) {
            // line 307
            echo "    ";
            echo ($context["value"] ?? null);
            echo "
";
        } else {
            // line 309
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "safe", array()));
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 314
    public function block_grid_column_operator($context, array $blocks = array())
    {
        // line 315
        if (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "operatorsVisible", array())) {
            // line 316
            echo "<span class=\"grid-filter-operator\">
    <select name=\"";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "][operator]\" onchange=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "_switchOperator(this, '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "__query__'";
            if ((($context["submitOnChange"] ?? null) === false)) {
                echo ", false";
            }
            echo ");\">
    ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "operators", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
                // line 319
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["operator"], "html", null, true);
                echo "\"";
                if ((($context["op"] ?? null) == $context["operator"])) {
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
    }

    // line 326
    public function block_grid_column_filter_type_input($context, array $blocks = array())
    {
        // line 327
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 328
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 329
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 330
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 331
        $context["op"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array()), "operator", array())) : (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "defaultOperator", array())));
        // line 332
        $context["from"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array()), "from", array())) : (null));
        // line 333
        $context["to"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array()), "to", array())) : (null));
        // line 334
        echo "<span class=\"grid-filter-input\">
    ";
        // line 335
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridColumnOperator($this->env, ($context["column"] ?? null), ($context["grid"] ?? null), ($context["op"] ?? null), ($context["submitOnChange"] ?? null));
        echo "
    <span class=\"grid-filter-input-query\">
        <input type=\"";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["from"] ?? null), "html", null, true);
        echo "\" class=\"grid-filter-input-query-from\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
        echo "][from]\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
        echo "__query__from\" ";
        if ((($context["submitOnChange"] ?? null) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo ((((($context["op"] ?? null) == ($context["isNullOperator"] ?? null)) || (($context["op"] ?? null) == ($context["isNotNullOperator"] ?? null)))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
        echo " />
        <input type=\"";
        // line 338
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "inputType", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["to"] ?? null), "html", null, true);
        echo "\" class=\"grid-filter-input-query-to\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
        echo "][to]\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "__";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
        echo "__query__to\" ";
        if ((($context["submitOnChange"] ?? null) === true)) {
            echo "onkeypress=\"return ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "_submitForm(event, this.form);\"";
        }
        echo " ";
        echo ((((($context["op"] ?? null) == ($context["btwOperator"] ?? null)) || (($context["op"] ?? null) == ($context["btweOperator"] ?? null)))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
        echo " />
    </span>
</span>
";
    }

    // line 343
    public function block_grid_column_filter_type_select($context, array $blocks = array())
    {
        // line 344
        $context["btwOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTW");
        // line 345
        $context["btweOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_BTWE");
        // line 346
        $context["isNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNULL");
        // line 347
        $context["isNotNullOperator"] = twig_constant("APY\\DataGridBundle\\Grid\\Column\\Column::OPERATOR_ISNOTNULL");
        // line 348
        $context["op"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "operator", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array()), "operator", array())) : (twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "defaultOperator", array())));
        // line 349
        $context["from"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "from", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array()), "from", array())) : (null));
        // line 350
        $context["to"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array(), "any", false, true), "to", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "data", array()), "to", array())) : (null));
        // line 351
        $context["multiple"] = twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "selectMulti", array());
        // line 352
        $context["expanded"] = twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "selectExpanded", array());
        // line 353
        echo "<span class=\"grid-filter-select\">
    ";
        // line 354
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridColumnOperator($this->env, ($context["column"] ?? null), ($context["grid"] ?? null), ($context["op"] ?? null), ($context["submitOnChange"] ?? null));
        echo "
    <span class=\"grid-filter-select-query\">
    ";
        // line 356
        if (($context["expanded"] ?? null)) {
            // line 357
            echo "        <span class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "__query__from\" ";
            echo ((((($context["op"] ?? null) == ($context["isNullOperator"] ?? null)) || (($context["op"] ?? null) == ($context["isNotNullOperator"] ?? null)))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
        ";
            // line 358
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 359
                echo "            <span><input type=\"";
                if (($context["multiple"] ?? null)) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
                echo "][from][]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], ($context["from"] ?? null))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if ((($context["submitOnChange"] ?? null) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "__query__to\" ";
            echo ((((($context["op"] ?? null) == ($context["btwOperator"] ?? null)) || (($context["op"] ?? null) == ($context["btweOperator"] ?? null)))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
        ";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 364
                echo "            <span><input type=\"";
                if (($context["multiple"] ?? null)) {
                    echo "checkbox";
                } else {
                    echo "radio";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
                echo "[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
                echo "][to]\" value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (( !(null === ($context["to"] ?? null)) && (($context["to"] ?? null) == $context["key"]))) {
                    echo " checked=\"checked\"";
                }
                echo " ";
                if ((($context["submitOnChange"] ?? null) === true)) {
                    echo "onclick=\"return ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
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
            if (($context["multiple"] ?? null)) {
                echo "<input type=\"submit\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go"), "html", null, true);
                echo "\" />";
            }
            // line 368
            echo "    ";
        } else {
            // line 369
            echo "        <select";
            if (($context["multiple"] ?? null)) {
                echo " multiple=\"multiple\"";
            }
            echo " name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "][from][]\" class=\"grid-filter-select-query-from\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "__query__from\" ";
            if ((($context["submitOnChange"] ?? null) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo ((((($context["op"] ?? null) == ($context["isNullOperator"] ?? null)) || (($context["op"] ?? null) == ($context["isNotNullOperator"] ?? null)))) ? ("style=\"display: none;\" disabled=\"disabled\"") : (""));
            echo ">
            <option value=\"\">&nbsp;</option>
            ";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 372
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (twig_in_filter($context["key"], ($context["from"] ?? null))) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "][to]\" class=\"grid-filter-select-query-to\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
            echo "__";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", array()), "html", null, true);
            echo "__query__to\" ";
            if ((($context["submitOnChange"] ?? null) === true)) {
                echo "onchange=\"return ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
                echo "_submitForm(event, this.form);\"";
            }
            echo " ";
            echo ((((($context["op"] ?? null) == ($context["btwOperator"] ?? null)) || (($context["op"] ?? null) == ($context["btweOperator"] ?? null)))) ? ("") : ("style=\"display: none;\" disabled=\"disabled\""));
            echo ">
            <option value=\"\">&nbsp;</option>
            ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "values", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 378
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if (( !(null === ($context["to"] ?? null)) && (($context["to"] ?? null) == $context["key"]))) {
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
            if (($context["multiple"] ?? null)) {
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
    }

    // line 387
    public function block_grid_column_filter_type_massaction($context, array $blocks = array())
    {
        // line 388
        echo "    <input type=\"button\" class=\"grid-search-reset\" value=\"R\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "\" onclick=\"return ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_reset();\"/>
";
    }

    // line 391
    public function block_grid_column_filter_type_actions($context, array $blocks = array())
    {
        // line 392
        echo "    <a class=\"grid-reset\" href=\"";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("reset", ($context["grid"] ?? null));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "</a>
";
    }

    // line 398
    public function block_grid_scripts($context, array $blocks = array())
    {
        // line 399
        echo "<script type=\"text/javascript\">
";
        // line 400
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_goto", ($context["grid"] ?? null));
        echo "
";
        // line 401
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_reset", ($context["grid"] ?? null));
        echo "
";
        // line 402
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_previous_page", ($context["grid"] ?? null));
        echo "
";
        // line 403
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_next_page", ($context["grid"] ?? null));
        echo "
";
        // line 404
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_enter_page", ($context["grid"] ?? null));
        echo "
";
        // line 405
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_results_per_page", ($context["grid"] ?? null));
        echo "
";
        // line 406
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_mark_visible", ($context["grid"] ?? null));
        echo "
";
        // line 407
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_mark_all", ($context["grid"] ?? null));
        echo "
";
        // line 408
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_switch_operator", ($context["grid"] ?? null));
        echo "
";
        // line 409
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_submit_form", ($context["grid"] ?? null));
        echo "
";
        // line 410
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGrid_($this->env, "scripts_ajax", ($context["grid"] ?? null));
        echo "
</script>
";
    }

    // line 414
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        // line 415
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
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
    }

    // line 430
    public function block_grid_scripts_reset($context, array $blocks = array())
    {
        // line 431
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_reset()
{
    ";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("reset", ($context["grid"] ?? null));
        echo "');

    return false;
}
";
    }

    // line 439
    public function block_grid_scripts_previous_page($context, array $blocks = array())
    {
        // line 440
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_previousPage()
{
    ";
        // line 442
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("page", ($context["grid"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "page", array()) - 1));
        echo "');

    return false;
}
";
    }

    // line 448
    public function block_grid_scripts_next_page($context, array $blocks = array())
    {
        // line 449
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_nextPage()
{
    ";
        // line 451
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("page", ($context["grid"] ?? null), (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "page", array()) + 1));
        echo "');

    return false;
}
";
    }

    // line 457
    public function block_grid_scripts_enter_page($context, array $blocks = array())
    {
        // line 458
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_enterPage(event, page)
{
    key = event.which;

    if (window.event) {
        key = window.event.keyCode; //IE
    }

    if (key == 13) {
        ";
        // line 467
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("page", ($context["grid"] ?? null));
        echo "' + page);

        return false;
    }
}
";
    }

    // line 474
    public function block_grid_scripts_results_per_page($context, array $blocks = array())
    {
        // line 475
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_resultsPerPage(limit)
{
    ";
        // line 477
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_goto('";
        echo $this->extensions['APY\DataGridBundle\Twig\DataGridExtension']->getGridUrl("limit", ($context["grid"] ?? null));
        echo "' + limit);

    return true;
}
";
    }

    // line 483
    public function block_grid_scripts_mark_visible($context, array $blocks = array())
    {
        // line 484
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_markVisible(select)
{
    var form = document.getElementById('";
        // line 486
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "isFilterSectionVisible", array())) {
            // line 501
            echo "    counter--;
    ";
        }
        // line 503
        echo "
    var selected = document.getElementById('";
        // line 504
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_mass_action_selected');
    selected.innerHTML = counter > 0 ? '";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', counter) : '';

    document.getElementById('";
        // line 507
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';

    return false;
}
";
    }

    // line 513
    public function block_grid_scripts_mark_all($context, array $blocks = array())
    {
        // line 514
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_markAll(select)
{
    var form = document.getElementById('";
        // line 516
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "');

    for (var i=0; i < form.elements.length; i++ ) {
        if (form.elements[i].type == 'checkbox') {
            form.elements[i].checked = select;
        }
    }

    var selected = document.getElementById('";
        // line 524
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_mass_action_selected');

    if (select) {
        document.getElementById('";
        // line 527
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '1';
        selected.innerHTML = '";
        // line 528
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected _s_ rows"), "html", null, true);
        echo "'.replace('_s_', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "totalCount", array()), "html", null, true);
        echo "');
    } else {
        document.getElementById('";
        // line 530
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_mass_action_all').value = '0';
        selected.innerHTML = '';
    }

    return false;
}
";
    }

    // line 538
    public function block_grid_scripts_switch_operator($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
        echo "_switchOperator(elt, query_, submitOnChange)
{
\tsubmitOnChange = (typeof submitOnChange == 'undefined') ? true : submitOnChange;
    var inputFrom = document.getElementById(query_+'from');
    var inputTo = document.getElementById(query_+'to');
    if ((elt.options[elt.selectedIndex].value == '";
        // line 548
        echo twig_escape_filter($this->env, ($context["btwOperator"] ?? null), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, ($context["btweOperator"] ?? null), "html", null, true);
        echo "')) {
        inputFrom.style.display = '';
        inputFrom.disabled=false;
        inputTo.style.display = '';
        inputTo.disabled=false;
    } else if ((elt.options[elt.selectedIndex].value == '";
        // line 553
        echo twig_escape_filter($this->env, ($context["isNullOperator"] ?? null), "html", null, true);
        echo "') || (elt.options[elt.selectedIndex].value == '";
        echo twig_escape_filter($this->env, ($context["isNotNullOperator"] ?? null), "html", null, true);
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
    }

    // line 570
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        // line 571
        echo "function ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["grid"] ?? null), "hash", array()), "html", null, true);
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
    }

    // line 587
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2126 => 587,  2106 => 571,  2103 => 570,  2081 => 553,  2071 => 548,  2062 => 543,  2060 => 542,  2058 => 541,  2056 => 540,  2054 => 539,  2051 => 538,  2040 => 530,  2033 => 528,  2029 => 527,  2023 => 524,  2012 => 516,  2006 => 514,  2003 => 513,  1994 => 507,  1989 => 505,  1985 => 504,  1982 => 503,  1978 => 501,  1976 => 500,  1959 => 486,  1953 => 484,  1950 => 483,  1939 => 477,  1933 => 475,  1930 => 474,  1918 => 467,  1905 => 458,  1902 => 457,  1891 => 451,  1885 => 449,  1882 => 448,  1871 => 442,  1865 => 440,  1862 => 439,  1851 => 433,  1845 => 431,  1842 => 430,  1823 => 415,  1820 => 414,  1813 => 410,  1809 => 409,  1805 => 408,  1801 => 407,  1797 => 406,  1793 => 405,  1789 => 404,  1785 => 403,  1781 => 402,  1777 => 401,  1773 => 400,  1770 => 399,  1767 => 398,  1758 => 392,  1755 => 391,  1746 => 388,  1743 => 387,  1737 => 383,  1734 => 382,  1728 => 381,  1725 => 380,  1710 => 378,  1706 => 377,  1687 => 375,  1684 => 374,  1669 => 372,  1665 => 371,  1641 => 369,  1638 => 368,  1632 => 367,  1629 => 366,  1598 => 364,  1594 => 363,  1586 => 362,  1583 => 361,  1552 => 359,  1548 => 358,  1539 => 357,  1537 => 356,  1532 => 354,  1529 => 353,  1527 => 352,  1525 => 351,  1523 => 350,  1521 => 349,  1519 => 348,  1517 => 347,  1515 => 346,  1513 => 345,  1511 => 344,  1508 => 343,  1482 => 338,  1460 => 337,  1455 => 335,  1452 => 334,  1450 => 333,  1448 => 332,  1446 => 331,  1444 => 330,  1442 => 329,  1440 => 328,  1438 => 327,  1435 => 326,  1428 => 321,  1413 => 319,  1409 => 318,  1393 => 317,  1390 => 316,  1388 => 315,  1385 => 314,  1376 => 309,  1370 => 307,  1368 => 306,  1357 => 305,  1354 => 304,  1352 => 303,  1350 => 302,  1347 => 301,  1340 => 298,  1337 => 297,  1330 => 294,  1327 => 293,  1309 => 290,  1306 => 289,  1304 => 288,  1287 => 287,  1284 => 286,  1277 => 283,  1274 => 282,  1254 => 278,  1252 => 277,  1247 => 276,  1244 => 275,  1242 => 274,  1225 => 273,  1223 => 272,  1221 => 271,  1218 => 270,  1211 => 267,  1208 => 266,  1202 => 264,  1199 => 263,  1192 => 260,  1189 => 259,  1178 => 257,  1175 => 256,  1164 => 253,  1161 => 252,  1156 => 249,  1149 => 247,  1130 => 245,  1102 => 243,  1100 => 242,  1097 => 241,  1093 => 240,  1090 => 239,  1087 => 238,  1084 => 237,  1079 => 234,  1074 => 232,  1071 => 231,  1060 => 229,  1056 => 228,  1049 => 226,  1044 => 225,  1042 => 224,  1039 => 223,  1036 => 222,  1031 => 219,  1026 => 217,  1023 => 216,  1012 => 214,  1008 => 213,  1001 => 211,  996 => 210,  994 => 209,  991 => 208,  988 => 207,  983 => 204,  977 => 201,  974 => 200,  963 => 198,  959 => 197,  952 => 195,  944 => 194,  940 => 193,  937 => 192,  935 => 191,  930 => 189,  924 => 188,  918 => 187,  912 => 186,  906 => 185,  902 => 183,  899 => 182,  892 => 179,  877 => 177,  873 => 176,  869 => 175,  865 => 174,  862 => 173,  849 => 169,  843 => 168,  834 => 167,  832 => 166,  828 => 165,  825 => 164,  819 => 161,  816 => 160,  808 => 155,  804 => 154,  800 => 153,  797 => 152,  791 => 150,  788 => 149,  785 => 148,  774 => 144,  760 => 142,  755 => 140,  740 => 139,  737 => 138,  723 => 137,  701 => 135,  698 => 134,  680 => 133,  677 => 132,  674 => 131,  671 => 130,  652 => 129,  649 => 128,  635 => 122,  621 => 121,  611 => 119,  608 => 118,  605 => 117,  602 => 116,  599 => 115,  596 => 114,  593 => 113,  576 => 112,  570 => 111,  567 => 110,  565 => 109,  562 => 108,  557 => 105,  543 => 104,  522 => 102,  519 => 101,  502 => 100,  499 => 99,  496 => 98,  491 => 95,  477 => 94,  473 => 92,  470 => 91,  467 => 90,  461 => 88,  458 => 87,  454 => 85,  452 => 84,  449 => 83,  447 => 82,  436 => 81,  434 => 80,  431 => 79,  429 => 78,  426 => 77,  423 => 76,  420 => 75,  417 => 74,  414 => 73,  411 => 72,  409 => 71,  406 => 70,  403 => 69,  397 => 67,  394 => 66,  392 => 65,  372 => 64,  369 => 63,  366 => 62,  349 => 61,  346 => 60,  343 => 59,  333 => 54,  330 => 53,  323 => 51,  320 => 50,  317 => 49,  313 => 48,  311 => 47,  309 => 46,  306 => 45,  298 => 43,  293 => 40,  287 => 38,  283 => 36,  277 => 34,  275 => 33,  272 => 32,  266 => 30,  263 => 29,  257 => 27,  254 => 26,  248 => 24,  246 => 23,  238 => 19,  232 => 17,  229 => 16,  223 => 14,  221 => 13,  216 => 10,  210 => 8,  208 => 7,  200 => 5,  198 => 4,  195 => 3,  192 => 2,  188 => 587,  185 => 586,  183 => 570,  180 => 569,  178 => 538,  175 => 537,  173 => 513,  170 => 512,  168 => 483,  165 => 482,  163 => 474,  160 => 473,  158 => 457,  155 => 456,  153 => 448,  150 => 447,  148 => 439,  145 => 438,  143 => 430,  140 => 429,  138 => 414,  135 => 413,  133 => 398,  128 => 394,  126 => 391,  124 => 387,  122 => 343,  120 => 326,  118 => 314,  116 => 301,  114 => 297,  112 => 293,  110 => 286,  108 => 282,  106 => 270,  104 => 266,  102 => 263,  100 => 259,  98 => 256,  96 => 252,  94 => 237,  92 => 222,  90 => 207,  88 => 182,  86 => 173,  84 => 164,  82 => 160,  80 => 148,  78 => 128,  76 => 108,  74 => 98,  72 => 59,  70 => 45,  68 => 43,  66 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "APYDataGridBundle::blocks.html.twig", "/opt/bitnami/apache2/htdocs/chandru/vendor/apy/datagrid-bundle/Resources/views/blocks.html.twig");
    }
}
