<?php

/* OcasoOcasoBundle:Secondo:secondo.html.twig */
class __TwigTemplate_dddeb82ef4d5627071313d44785d5091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OcasoOcasoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "cambio de controlador";
    }

    // line 4
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Otro Controlador, primera accion</h1>
<h2>enlazado desde otro controlador del mismo bundle</h2>
<ul>
   <li><strong>Enlaces</strong></li>
   <li><a href=\"http://www.mkvigo.com\">mkvigo</a></li>
   <li><a href=\"http://www.ubuntu.com\">Ubuntu</a></li>
   <li><a href=\"http://www.mandarinahome.es\">MandarinaHome</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "OcasoOcasoBundle:Secondo:secondo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
