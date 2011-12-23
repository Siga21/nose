<?php

/* Siga21SociosBundle:Mano:new.html.twig */
class __TwigTemplate_31d6a2bb4e1be077d8e639a34eb9a08e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Nuevo socio</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Aceptar</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano"), "html", null, true);
        echo "\">
            Volver a la lista
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "Siga21SociosBundle:Mano:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
