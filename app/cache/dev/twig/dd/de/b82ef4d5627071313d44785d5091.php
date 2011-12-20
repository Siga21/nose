<?php

/* OcasoOcasoBundle:Secondo:secondo.html.twig */
class __TwigTemplate_dddeb82ef4d5627071313d44785d5091 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cabeza' => array($this, 'block_cabeza'),
            'contenido' => array($this, 'block_contenido'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OcasoOcasoBundle::plantilla.html.twig";
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
    public function block_cabeza($context, array $blocks = array())
    {
        // line 5
        echo "\t<h1>Portada</h1>
";
    }

    // line 8
    public function block_contenido($context, array $blocks = array())
    {
        // line 9
        echo "<br />
<center>
<h2>enlazado desde otro controlador del mismo bundle</h2>
<h4>Probamos a crear a nosa plantilla e css</h4>
<ul>
   <li><strong>Enlaces</strong></li>
   <li><a href=\"http://www.mkvigo.com\">mkvigo</a></li>
   <li><a href=\"http://www.ubuntu.com\">Ubuntu</a></li>
   <li><a href=\"http://www.mandarinahome.es\">MandarinaHome</a></li>
</ul>
</center>
";
    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        // line 23
        echo "<p>(c) nocopyright 2011</p>
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
