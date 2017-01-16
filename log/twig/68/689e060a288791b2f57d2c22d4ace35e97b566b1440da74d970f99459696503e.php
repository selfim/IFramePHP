<?php

/* index.html */
class __TwigTemplate_5a64259c214bafcf9d6c31fee420b5f1ab7bfdb1f9b38244e39e3d375def91ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<ul>
\t<li class=\"am-u-sm-3\">
\t\t<h1>title</h1>
\t\t<p>content</p>
\t\t<p><span></span></p>
\t\t<a href=\"\"></a>
\t</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}

{% block content %}
<ul>
\t<li class=\"am-u-sm-3\">
\t\t<h1>title</h1>
\t\t<p>content</p>
\t\t<p><span></span></p>
\t\t<a href=\"\"></a>
\t</li>
</ul>
{% endblock %}", "index.html", "D:\\web\\vhost\\dev.frame.com\\app\\views\\index.html");
    }
}
