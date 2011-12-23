<?php

/* Siga21SociosBundle::basesocios.html.twig */
class __TwigTemplate_26bea879a628a1ceb54c5657ea5ddfcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'cabeza' => array($this, 'block_cabeza'),
            'contenido' => array($this, 'block_contenido'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
       ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo " 
    </head>
    <body>
       <div id=\"cuerpo\">
          <div id=\"cabeza\">";
        // line 13
        $this->displayBlock('cabeza', $context, $blocks);
        echo "</div>
       \t  <div id=\"contenido\">";
        // line 14
        $this->displayBlock('contenido', $context, $blocks);
        echo "</div>        
          <div id=\"footer\">";
        // line 15
        $this->displayBlock('footer', $context, $blocks);
        echo "</div>        
       </div>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "O noso bundle";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/css/plantilla.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
       ";
    }

    // line 13
    public function block_cabeza($context, array $blocks = array())
    {
        echo " ";
    }

    // line 14
    public function block_contenido($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "Siga21SociosBundle::basesocios.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
