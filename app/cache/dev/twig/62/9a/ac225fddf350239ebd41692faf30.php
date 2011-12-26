<?php

/* Siga21SociosBundle:Mano:edit.html.twig */
class __TwigTemplate_629aac225fddf350239ebd41692faf30 extends Twig_Template
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
        return "Siga21SociosBundle::basesocios.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de Socios";
    }

    // line 3
    public function block_cabeza($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Socios</h1>
";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<br />
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "edit_form"));
        echo ">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "edit_form"));
        echo "
    <p>
        <button type=\"submit\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/editar.gif"), "html", null, true);
        echo "\" alt=\"Editar\"></button>
    </p>
</form>
<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/back.gif"), "html", null, true);
        echo "\" alt=\"Volver\"></a>
<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
         <button type=\"submit\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/trash.gif"), "html", null, true);
        echo "\" alt=\"Borrar\"></button>
</form>   

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
        return "Siga21SociosBundle:Mano:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
