<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_26bf99a39403e4b5b9ca8b4dcb57012e97343f22bebada5ab688add37b7399e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c562222738fd3b4def867982957e18b07d565cdeab6ea9fb2e36b3a8855e9a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c562222738fd3b4def867982957e18b07d565cdeab6ea9fb2e36b3a8855e9a84->enter($__internal_c562222738fd3b4def867982957e18b07d565cdeab6ea9fb2e36b3a8855e9a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_d127e07e1cf59babdf49bef6265bcc0d056ef45ee1dec99ede2cb02042b516b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d127e07e1cf59babdf49bef6265bcc0d056ef45ee1dec99ede2cb02042b516b6->enter($__internal_d127e07e1cf59babdf49bef6265bcc0d056ef45ee1dec99ede2cb02042b516b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_c562222738fd3b4def867982957e18b07d565cdeab6ea9fb2e36b3a8855e9a84->leave($__internal_c562222738fd3b4def867982957e18b07d565cdeab6ea9fb2e36b3a8855e9a84_prof);

        
        $__internal_d127e07e1cf59babdf49bef6265bcc0d056ef45ee1dec99ede2cb02042b516b6->leave($__internal_d127e07e1cf59babdf49bef6265bcc0d056ef45ee1dec99ede2cb02042b516b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
