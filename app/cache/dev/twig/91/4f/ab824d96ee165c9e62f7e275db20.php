<?php

/* Siga21SociosBundle:Mano:index.html.twig */
class __TwigTemplate_914fab824d96ee165c9e62f7e275db20 extends Twig_Template
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
        echo "<center>
<br />
<table  cellpading=\"3\" border=\"1\" style=\"font:bold 16px Arial;color: #a0a0a0; background-color #fff; border-collapse: collapse;\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Especialidad</th>
            <th>Fecha</th>
            <th>Ver</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "        <tr>
            <td align=\"center\" width=\"50\"><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td align=\"center\" width=\"100\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
            echo "</td>
            <td align=\"center\" width=\"250\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Especialidad"), "html", null, true);
            echo "</td>
            <td align=\"center\" width=\"100\">";
            // line 26
            if ($this->getAttribute($this->getContext($context, "entity"), "FechaDeNacimiento")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "entity"), "FechaDeNacimiento"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
            <td align=\"center\" width=\"75\"><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">
              <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/ver.jpg"), "html", null, true);
            echo "\" alt=\"Ver\">
              </a></td>
            <td align=\"center\" width=\"75\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">
              <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/editar.gif"), "html", null, true);
            echo "\" alt=\"Editar\">
              </a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "    </tbody>
</table>
<br />
<a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_new"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/add.gif"), "html", null, true);
        echo "\" alt=\"Añadir\">
</a>
</center>
";
    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        // line 44
        echo "<p>(c) nocopyright 2011</p>
";
    }

    public function getTemplateName()
    {
        return "Siga21SociosBundle:Mano:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
