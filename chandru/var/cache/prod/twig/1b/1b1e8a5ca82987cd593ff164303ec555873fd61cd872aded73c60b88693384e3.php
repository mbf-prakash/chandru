<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_2df659d7ef6dc4f0c0a6f30f11bf3deb13f3ac9ddeec1573521884499b30e5b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('date_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('time_widget', $context, $blocks);
        // line 102
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 140
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 164
        echo "
";
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('choice_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('radio_label', $context, $blocks);
        // line 180
        echo "
";
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('button_row', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        $this->displayBlock('choice_row', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('date_row', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('time_row', $context, $blocks);
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('datetime_row', $context, $blocks);
    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        // line 11
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["money_pattern"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["money_pattern"] ?? null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, (((isset($context["group_class"]) || array_key_exists("group_class", $context))) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 36
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'errors');
            // line 44
            echo "<div class=\"sr-only\">";
            // line 45
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", false, true), "year", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), "year", array()), 'label');
            }
            // line 46
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", false, true), "month", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), "month", array()), 'label');
            }
            // line 47
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array(), "any", false, true), "day", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), "day", array()), 'label');
            }
            // line 48
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array(), "any", false, true), "hour", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), "hour", array()), 'label');
            }
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array(), "any", false, true), "minute", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), "minute", array()), 'label');
            }
            // line 50
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array(), "any", false, true), "second", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), "second", array()), 'label');
            }
            // line 51
            echo "</div>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 55
            echo "</div>";
        }
    }

    // line 59
    public function block_date_widget($context, array $blocks = array())
    {
        // line 60
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 61
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 63
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 64
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 65
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 67
            echo "            <div class=\"sr-only\">
                ";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'label');
            echo "
                ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'label');
            echo "
                ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", array()), 'label');
            echo "
            </div>";
            // line 73
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 74
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 75
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 76
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", array()), 'widget')));
            // line 78
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 79
                echo "</div>";
            }
        }
    }

    // line 84
    public function block_time_widget($context, array $blocks = array())
    {
        // line 85
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 86
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 88
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 89
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 90
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 92
            echo "<div class=\"sr-only\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", array()), 'label');
            echo "</div>";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", array()), 'widget');
            // line 94
            if (($context["with_minutes"] ?? null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", array()), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", array()), 'widget');
            }
            // line 95
            if (($context["with_seconds"] ?? null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", array()), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 96
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 97
                echo "</div>";
            }
        }
    }

    // line 102
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        // line 103
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 104
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 106
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 107
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 109
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 110
            echo twig_escape_filter($this->env, (((isset($context["table_class"]) || array_key_exists("table_class", $context))) ? (_twig_default_filter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 113
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'label');
                echo "</th>";
            }
            // line 114
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'label');
                echo "</th>";
            }
            // line 115
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 116
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'label');
                echo "</th>";
            }
            // line 117
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'label');
                echo "</th>";
            }
            // line 118
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 119
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 120
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 124
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", array()), 'widget');
                echo "</td>";
            }
            // line 125
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", array()), 'widget');
                echo "</td>";
            }
            // line 126
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 127
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", array()), 'widget');
                echo "</td>";
            }
            // line 128
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 129
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 130
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 131
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 135
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", array()), 'widget');
            }
            // line 136
            echo "</div>";
        }
    }

    // line 140
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 141
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 142
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 145
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 146
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 148
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 149
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 150
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 154
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 157
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 158
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "</div>";
        }
    }

    // line 167
    public function block_choice_label($context, array $blocks = array())
    {
        // line 169
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "")))));
        // line 170
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 173
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 177
    public function block_radio_label($context, array $blocks = array())
    {
        // line 178
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 183
    public function block_button_row($context, array $blocks = array())
    {
        // line 184
        echo "<div class=\"form-group\">";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 186
        echo "</div>";
    }

    // line 189
    public function block_choice_row($context, array $blocks = array())
    {
        // line 190
        $context["force_error"] = true;
        // line 191
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 194
    public function block_date_row($context, array $blocks = array())
    {
        // line 195
        $context["force_error"] = true;
        // line 196
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 199
    public function block_time_row($context, array $blocks = array())
    {
        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 204
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  592 => 206,  590 => 205,  587 => 204,  583 => 201,  581 => 200,  578 => 199,  574 => 196,  572 => 195,  569 => 194,  565 => 191,  563 => 190,  560 => 189,  556 => 186,  554 => 185,  552 => 184,  549 => 183,  545 => 178,  542 => 177,  538 => 174,  535 => 173,  531 => 170,  529 => 169,  526 => 167,  521 => 161,  515 => 158,  514 => 157,  513 => 156,  509 => 155,  505 => 154,  498 => 150,  497 => 149,  496 => 148,  492 => 147,  490 => 146,  487 => 145,  483 => 142,  481 => 141,  478 => 140,  473 => 136,  469 => 135,  464 => 131,  458 => 130,  452 => 129,  446 => 128,  440 => 127,  434 => 126,  428 => 125,  422 => 124,  417 => 120,  411 => 119,  405 => 118,  399 => 117,  393 => 116,  387 => 115,  381 => 114,  375 => 113,  370 => 110,  367 => 109,  365 => 108,  361 => 107,  359 => 106,  356 => 104,  354 => 103,  351 => 102,  345 => 97,  343 => 96,  336 => 95,  329 => 94,  327 => 93,  323 => 92,  318 => 90,  316 => 89,  314 => 88,  311 => 86,  309 => 85,  306 => 84,  300 => 79,  298 => 78,  296 => 76,  295 => 75,  294 => 74,  293 => 73,  289 => 70,  285 => 69,  281 => 68,  278 => 67,  273 => 65,  271 => 64,  269 => 63,  266 => 61,  264 => 60,  261 => 59,  256 => 55,  254 => 54,  252 => 53,  250 => 51,  246 => 50,  242 => 49,  238 => 48,  234 => 47,  230 => 46,  226 => 45,  224 => 44,  222 => 42,  220 => 41,  216 => 40,  214 => 39,  211 => 37,  209 => 36,  206 => 35,  201 => 31,  199 => 30,  197 => 29,  194 => 28,  189 => 24,  185 => 22,  179 => 20,  177 => 19,  175 => 18,  169 => 16,  167 => 15,  162 => 14,  159 => 13,  156 => 12,  154 => 11,  151 => 10,  147 => 7,  145 => 6,  142 => 5,  138 => 204,  135 => 203,  133 => 199,  130 => 198,  128 => 194,  125 => 193,  123 => 189,  120 => 188,  118 => 183,  115 => 182,  112 => 180,  110 => 177,  107 => 176,  105 => 173,  102 => 172,  100 => 167,  97 => 166,  94 => 164,  92 => 145,  89 => 144,  87 => 140,  85 => 102,  83 => 84,  80 => 83,  78 => 59,  75 => 58,  73 => 35,  70 => 34,  68 => 28,  65 => 27,  63 => 10,  60 => 9,  58 => 5,  55 => 4,  52 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_base_layout.html.twig", "/opt/bitnami/apache2/htdocs/chandru/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
