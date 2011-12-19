<?php

/* OcasoOcasoBundle:Default:index.html.twig */
class __TwigTemplate_5ee30fcde8ffef1a219e0ae4e3b57725 extends Twig_Template
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
        echo "O noso Bundle";
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
        echo "<h1>Hola mundo ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>
<ul>
   <li><strong>Enlaces</strong></li>
   <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ocaso_adios", array("name" => "Dardi")), "html", null, true);
        echo " \">Segunda accion</a></li>
   <li><a href=\"http://www.ubuntu.com\">Ubuntu</a></li>
   <li><a href=\"http://www.mandarinahome.es\">MandarinaHome</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "OcasoOcasoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
