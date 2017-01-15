<?php

/* layout.html */
class __TwigTemplate_049bcd4d23be97828cc2aa858fe93a0629f69b55b5054f3d06146dd8ca2c0f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\" />
\t<title>index</title>
</head>
<body>
\t<header>
\t\t</header>
\t\t\t\t<content>
\t\t\t";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "\t\t\t\t</content>
\t\t<footer>
\t</footer>
</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  34 => 13,  32 => 11,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\" />
\t<title>index</title>
</head>
<body>
\t<header>
\t\t</header>
\t\t\t\t<content>
\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t\t\t</content>
\t\t<footer>
\t</footer>
</body>
</html>", "layout.html", "D:\\web\\vhost\\dev.frame.com\\app\\views\\layout.html");
    }
}
