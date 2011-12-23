<?php

/* Siga21SociosBundle:Mano:show.html.twig */
class __TwigTemplate_1fbb365c5f7611d9809341fc79623c29 extends Twig_Template
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
        echo "Ver Socio";
    }

    // line 3
    public function block_cabeza($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Socio ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
        echo "</h1>
";
    }

    // line 6
    public function block_contenido($context, array $blocks = array())
    {
        // line 7
        echo "<center>
<br />
<table  cellpading=\"3\" border=\"1\" style=\"font:bold 16px Arial;color: #a0a0a0; background-color #fff; border-collapse: collapse;\">
   <tr>
      <th width=\"200\" align=\"center\">Id</th>
      <td width=\"200\" align=\"center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
   </tr>
   <tr>
      <th align=\"center\">Nombre</th>
      <td align=\"center\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Nombre"), "html", null, true);
        echo "</td>
   </tr>
   <tr>
      <th align=\"center\">Especialidad</th>
      <td align=\"center\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "Especialidad"), "html", null, true);
        echo "</td>
   </tr>
   <tr>
      <th align=\"center\">Fecha_de_nacimiento</th>
      <td align=\"center\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "entity"), "FechaDeNacimiento"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
   </tr>
</table>
<br />

<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/back.gif"), "html", null, true);
        echo "\" alt=\"Volver\"></a>
<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/editar.gif"), "html", null, true);
        echo "\" alt=\"Editar\"></a>
<form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mano_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <button type=\"submit\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Siga21/images/trash.gif"), "html", null, true);
        echo "\" alt=\"Borrar\"></button>
</form>

</center>
";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "<p>(c) nocopyright 2011</p>
";
    }

    public function getTemplateName()
    {
        return "Siga21SociosBundle:Mano:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
