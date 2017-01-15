<?php

/* index.html */
class __TwigTemplate_4c783fde8d8a8f25c120c63c02ed0882acb3aca18d6e76141b58bd0a90105828 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
\t<h1>这是视图文件</h1>
\t<p><?php echo \$data;?></p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "D:\\web\\vhost\\dev.frame.com\\app\\views\\index.html");
    }
}
