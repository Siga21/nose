<?php

/* OcasoOcasoBundle:Default:ciao.html.twig */
class __TwigTemplate_491e0c0cbaab42baa2bbbde62f91c2cd extends Twig_Template
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
        echo "<h1>Me voy, ciao ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>
<ul>
   <li><strong>Enlaces</strong></li>
   <li><a href=\"http://www.google.es\">Google</a></li>
   <li><a href=\"http://www.ubuntu.com\">Ubuntu</a></li>
   <li><a href=\"http://www.mandarinahome.es\">MandarinaHome</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "OcasoOcasoBundle:Default:ciao.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
