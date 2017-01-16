<?php

/* layout.html */
class __TwigTemplate_049bcd4d23be97828cc2aa858fe93a0629f69b55b5054f3d06146dd8ca2c0f55 extends Twig_Template
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
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1\">
  <title>首页</title>

  <!-- Set render engine for 360 browser -->
  <meta name=\"renderer\" content=\"webkit\">

  <!-- No Baidu Siteapp-->
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  

  <!-- Add to homescreen for Safari on iOS -->
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Amaze UI\"/>
  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel=\"canonical\" href=\"http://www.example.com/\">
  -->

  <link rel=\"stylesheet\" href=\"assets/css/amazeui.min.css\">
  <link rel=\"stylesheet\" href=\"assets/css/app.css\">
</head>
<body>
<!--[if lte IE 9]>
<p class=\"browsehappy\">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
  href=\"http://browsehappy.com/\" target=\"_blank\">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class=\"am-topbar am-text-center\">
\t<h1 class=\"am-sm-12\">超简单留言本</h1>
\t<div class=\"am-g\">
\t\t<a  class=\"am-btn-default\" href=\"\">显示留言</a>
\t\t<a  class=\"am-btn-default\" href=\"/index/add\">添加留言</a>
\t</div>
</header>
<div class=\"am-g content\">
<% block content %>

<% endblock %>
</div>

<footer class=\"footer\">

  <p>
    2017 超简单留言本
  </p>
</footer>
<!-- 以上页面内容 开发时删除 -->

<!--[if lt IE 9]>
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<script src=\"assets/js/amazeui.min.js\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout.html";
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
        return new Twig_Source("<!doctype html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"viewport\"
        content=\"width=device-width, initial-scale=1\">
  <title>首页</title>

  <!-- Set render engine for 360 browser -->
  <meta name=\"renderer\" content=\"webkit\">

  <!-- No Baidu Siteapp-->
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>

  <!-- Add to homescreen for Chrome on Android -->
  <meta name=\"mobile-web-app-capable\" content=\"yes\">
  

  <!-- Add to homescreen for Safari on iOS -->
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
  <meta name=\"apple-mobile-web-app-title\" content=\"Amaze UI\"/>
  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel=\"canonical\" href=\"http://www.example.com/\">
  -->

  <link rel=\"stylesheet\" href=\"assets/css/amazeui.min.css\">
  <link rel=\"stylesheet\" href=\"assets/css/app.css\">
</head>
<body>
<!--[if lte IE 9]>
<p class=\"browsehappy\">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
  href=\"http://browsehappy.com/\" target=\"_blank\">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class=\"am-topbar am-text-center\">
\t<h1 class=\"am-sm-12\">超简单留言本</h1>
\t<div class=\"am-g\">
\t\t<a  class=\"am-btn-default\" href=\"\">显示留言</a>
\t\t<a  class=\"am-btn-default\" href=\"/index/add\">添加留言</a>
\t</div>
</header>
<div class=\"am-g content\">
<% block content %>

<% endblock %>
</div>

<footer class=\"footer\">

  <p>
    2017 超简单留言本
  </p>
</footer>
<!-- 以上页面内容 开发时删除 -->

<!--[if lt IE 9]>
<script src=\"http://libs.baidu.com/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js\"></script>
<script src=\"assets/js/amazeui.ie8polyfill.min.js\"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src=\"assets/js/jquery.min.js\"></script>
<!--<![endif]-->
<script src=\"assets/js/amazeui.min.js\"></script>

</body>
</html>
", "layout.html", "D:\\web\\vhost\\dev.frame.com\\app\\views\\layout.html");
    }
}
