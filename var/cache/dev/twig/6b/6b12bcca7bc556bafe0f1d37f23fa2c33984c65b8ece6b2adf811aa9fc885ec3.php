<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2761b2f4f13ac238c28b3fe9e35dfaa6030f24002d5385966dde5a508a52720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2761b2f4f13ac238c28b3fe9e35dfaa6030f24002d5385966dde5a508a52720->enter($__internal_d2761b2f4f13ac238c28b3fe9e35dfaa6030f24002d5385966dde5a508a52720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ff7eb712f60693b13ef180181568264101cd7100d1cd7df6b1ddea86d8d123de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7eb712f60693b13ef180181568264101cd7100d1cd7df6b1ddea86d8d123de->enter($__internal_ff7eb712f60693b13ef180181568264101cd7100d1cd7df6b1ddea86d8d123de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2761b2f4f13ac238c28b3fe9e35dfaa6030f24002d5385966dde5a508a52720->leave($__internal_d2761b2f4f13ac238c28b3fe9e35dfaa6030f24002d5385966dde5a508a52720_prof);

        
        $__internal_ff7eb712f60693b13ef180181568264101cd7100d1cd7df6b1ddea86d8d123de->leave($__internal_ff7eb712f60693b13ef180181568264101cd7100d1cd7df6b1ddea86d8d123de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e3bf8a3e4ea0d852decb63f0b16b050b219a22aa4c5b517a7bfb4cf6c9613be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3bf8a3e4ea0d852decb63f0b16b050b219a22aa4c5b517a7bfb4cf6c9613be->enter($__internal_8e3bf8a3e4ea0d852decb63f0b16b050b219a22aa4c5b517a7bfb4cf6c9613be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73efb91a1d520ced44662ec324ce02a52d331789bdf5903c7b1f2247ea9596d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73efb91a1d520ced44662ec324ce02a52d331789bdf5903c7b1f2247ea9596d9->enter($__internal_73efb91a1d520ced44662ec324ce02a52d331789bdf5903c7b1f2247ea9596d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_73efb91a1d520ced44662ec324ce02a52d331789bdf5903c7b1f2247ea9596d9->leave($__internal_73efb91a1d520ced44662ec324ce02a52d331789bdf5903c7b1f2247ea9596d9_prof);

        
        $__internal_8e3bf8a3e4ea0d852decb63f0b16b050b219a22aa4c5b517a7bfb4cf6c9613be->leave($__internal_8e3bf8a3e4ea0d852decb63f0b16b050b219a22aa4c5b517a7bfb4cf6c9613be_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcbefced1b202b5339d929adfc2f0cad2d9604f3e8f6bfe32bce9f890dbf67a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbefced1b202b5339d929adfc2f0cad2d9604f3e8f6bfe32bce9f890dbf67a5->enter($__internal_fcbefced1b202b5339d929adfc2f0cad2d9604f3e8f6bfe32bce9f890dbf67a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe288397666253c4fd680ad1217422e7a6d0ad7ce3725cf78f06c5a440c54868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe288397666253c4fd680ad1217422e7a6d0ad7ce3725cf78f06c5a440c54868->enter($__internal_fe288397666253c4fd680ad1217422e7a6d0ad7ce3725cf78f06c5a440c54868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fe288397666253c4fd680ad1217422e7a6d0ad7ce3725cf78f06c5a440c54868->leave($__internal_fe288397666253c4fd680ad1217422e7a6d0ad7ce3725cf78f06c5a440c54868_prof);

        
        $__internal_fcbefced1b202b5339d929adfc2f0cad2d9604f3e8f6bfe32bce9f890dbf67a5->leave($__internal_fcbefced1b202b5339d929adfc2f0cad2d9604f3e8f6bfe32bce9f890dbf67a5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_542074cb5a38f8206d5e0f216369a2c4494460d8882ffbf8b932f521172a72ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542074cb5a38f8206d5e0f216369a2c4494460d8882ffbf8b932f521172a72ec->enter($__internal_542074cb5a38f8206d5e0f216369a2c4494460d8882ffbf8b932f521172a72ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d8b9243c8a44c28fd5732048a94959aad3d0cabb2d5c7006f86f07118a945244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b9243c8a44c28fd5732048a94959aad3d0cabb2d5c7006f86f07118a945244->enter($__internal_d8b9243c8a44c28fd5732048a94959aad3d0cabb2d5c7006f86f07118a945244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d8b9243c8a44c28fd5732048a94959aad3d0cabb2d5c7006f86f07118a945244->leave($__internal_d8b9243c8a44c28fd5732048a94959aad3d0cabb2d5c7006f86f07118a945244_prof);

        
        $__internal_542074cb5a38f8206d5e0f216369a2c4494460d8882ffbf8b932f521172a72ec->leave($__internal_542074cb5a38f8206d5e0f216369a2c4494460d8882ffbf8b932f521172a72ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\php\\netvlies_opdracht\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}