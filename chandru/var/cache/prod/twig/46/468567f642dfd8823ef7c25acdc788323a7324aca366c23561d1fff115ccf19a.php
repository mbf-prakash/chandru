<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_6637158b6faacef821615b4885b0fce0af0717046f921c7ecf53df4aa066ec6d extends Twig_Template
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
        echo "<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo ((($context["expand"] ?? null)) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        ";
        // line 7
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", array()), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 8
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", array()), "\\")) > 1)) ? ("\\") : (""));
        echo "
                    </span>
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", array()), "\\")), "html", null, true);
        echo "

                    <span class=\"icon icon-close\">";
        // line 12
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 13
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>

                ";
        // line 16
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", array())) && (($context["index"] ?? null) > 1))) {
            // line 17
            echo "                    <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            echo "            ";
            $context["_display_code_snippet"] = (((($context["_is_first_user_code"] ?? null) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", array()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", array())));
            // line 26
            echo "            ";
            if (($context["_display_code_snippet"] ?? null)) {
                $context["_is_first_user_code"] = false;
            }
            // line 27
            echo "            <div class=\"trace-line\">
                ";
            // line 28
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", array("prefix" => ($context["index"] ?? null), "i" => $context["i"], "trace" => $context["trace"], "_display_code_snippet" => ($context["_display_code_snippet"] ?? null)), false);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  93 => 28,  90 => 27,  85 => 26,  82 => 25,  77 => 24,  75 => 23,  71 => 22,  66 => 19,  60 => 17,  58 => 16,  52 => 13,  48 => 12,  43 => 10,  38 => 8,  36 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:traces.html.twig", "/opt/bitnami/apache2/htdocs/chandru/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}
