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
        echo "<center><h1>Portada</h1>
<h2>Usuario: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "</h2></center>
<ul>
   <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Siga21SociosBundle_homepage"), "html", null, true);
        echo " \">SOCIOS</a></li>
   <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Ocaso_adios", array("name" => "Dardi")), "html", null, true);
        echo " \">Segunda accion primer controlador</a></li>
   <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_busca"), "html", null, true);
        echo "\">Busca socios por id</a></li>
   <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_buscan"), "html", null, true);
        echo "\">Busca socios por nombre</a></li>
   <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tareas_portada"), "html", null, true);
        echo "\">Tareas</a></li>
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
