<?php

/* @FOSCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_990cba9d9606a31e1d2575ac500eee3b2e360676593feb3ac27558f0726e7cd2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the FOSCKEditor Bundle.
 *
 * (c) 2018 - present  Friends of Symfony
 * (c) 2009 - 2017     Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @var CKEditorRendererInterface|FormView[]
 * @var object                               \$form
 * @var string                               \$value
 * @var bool                                 \$enable
 * @var bool                                 \$async
 */
use FOS\\CKEditorBundle\\Renderer\\CKEditorRendererInterface;
use Symfony\\Component\\Form\\FormView;

@trigger_error(
    'The ckeditor_widget.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

?>
<textarea <?php echo \$view['form']->block(\$form, 'attributes'); ?>><?php echo htmlspecialchars(\$value); ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php

/*
 * This file is part of the FOSCKEditor Bundle.
 *
 * (c) 2018 - present  Friends of Symfony
 * (c) 2009 - 2017     Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @var CKEditorRendererInterface|FormView[]
 * @var object                               \$form
 * @var string                               \$value
 * @var bool                                 \$enable
 * @var bool                                 \$async
 */
use FOS\\CKEditorBundle\\Renderer\\CKEditorRendererInterface;
use Symfony\\Component\\Form\\FormView;

@trigger_error(
    'The ckeditor_widget.html.php is deprecated since 1.x '.
    'and will be removed with the 2.0 release.',
    E_USER_DEPRECATED
);

?>
<textarea <?php echo \$view['form']->block(\$form, 'attributes'); ?>><?php echo htmlspecialchars(\$value); ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php'; ?>
<?php endif; ?>
", "@FOSCKEditor/Form/ckeditor_widget.html.php", "/opt/bitnami/apache2/htdocs/chandru/vendor/friendsofsymfony/ckeditor-bundle/src/Resources/views/Form/ckeditor_widget.html.php");
    }
}
