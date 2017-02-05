<?php

/* AdminDashboardBundle:Default:index.html.twig */
class __TwigTemplate_18c2e52057294b374b6c5a32770d278f174fbb8246794d9fce651d5fc3895ef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminDashboardBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6f039e78f5634a451e827343fc599d03e63455f26c284f2fe2b1e31a02b0b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f039e78f5634a451e827343fc599d03e63455f26c284f2fe2b1e31a02b0b93->enter($__internal_d6f039e78f5634a451e827343fc599d03e63455f26c284f2fe2b1e31a02b0b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminDashboardBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f039e78f5634a451e827343fc599d03e63455f26c284f2fe2b1e31a02b0b93->leave($__internal_d6f039e78f5634a451e827343fc599d03e63455f26c284f2fe2b1e31a02b0b93_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e5dda87642ecc26d6d5d95ec7d14eace3c6208033d57dfc33babb586b579ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5dda87642ecc26d6d5d95ec7d14eace3c6208033d57dfc33babb586b579ab5->enter($__internal_1e5dda87642ecc26d6d5d95ec7d14eace3c6208033d57dfc33babb586b579ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminDashboardBundle:Default:index.html.twig"));

        // line 3
        echo "
\t<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><span>ANRT </span>Morocco</a>
\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t<li class=\"dropdown pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> User <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t\t\t\t\t
\t\t</div><!-- /.container-fluid -->
\t</nav>
\t\t
\t<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
\t\t<form role=\"search\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t</div>
\t\t</form>
\t\t<ul class=\"nav menu\">
\t\t\t<li class=\"active\"><a href=\"index.html\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
\t\t\t<li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Trafic</a></li>
\t\t\t<li><a href=\"charts.html\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> penetration rate</a></li>
\t\t\t<li><a href=\"tables.html\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Revenu & usage</a></li>
\t\t\t<li><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Market part</a></li>
\t\t\t<li><a href=\"panels.html\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Parc abonnee</a></li>
\t\t\t<li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Infrastructure & others</a></li>
\t\t\t<li class=\"parent \">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Enquete 
\t\t\t\t</a>
\t\t\t\t<ul class=\"children collapse\" id=\"sub-item-1\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t<li><a href=\"login.html\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Login Page</a></li>
\t\t</ul>
\t\t<div class=\"attribution\">Developed with love by SoufianLa</div>
\t</div><!--/.sidebar-->
\t\t
\t<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">\t\t\t
\t\t<div class=\"row\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
\t\t\t\t<li class=\"active\">Icons</li>
\t\t\t</ol>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Dashboard</h1>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-blue panel-widget \">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked bag\"><use xlink:href=\"#stroked-bag\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">120</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">New Orders</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-orange panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked empty-message\"><use xlink:href=\"#stroked-empty-message\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">52</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Comments</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-teal panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">24</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">New Users</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-red panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked app-window-with-content\"><use xlink:href=\"#stroked-app-window-with-content\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">25.2k</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Page Views</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Site Traffic Overview</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"canvas-wrapper\">
\t\t\t\t\t\t\t<canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Orders</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\" ><span class=\"percent\">92%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Comments</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\" ><span class=\"percent\">65%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Users</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\" ><span class=\"percent\">56%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Visitors</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\" ><span class=\"percent\">27%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t\t\t\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t
\t\t\t\t<div class=\"panel panel-default chat\">
\t\t\t\t\t<div class=\"panel-heading\" id=\"accordion\"><svg class=\"glyph stroked two-messages\"><use xlink:href=\"#stroked-two-messages\"></use></svg> Chat</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"left clearfix\">
\t\t\t\t\t\t\t\t<span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"right clearfix\">
\t\t\t\t\t\t\t\t<span class=\"chat-img pull-right\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tMauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\">
\t\t\t\t\t\t\t\t<span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-md\" id=\"btn-chat\">Send</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><!--/.col-->
\t\t\t
\t\t\t<div class=\"col-md-4\">
\t\t\t
\t\t\t\t<div class=\"panel panel-blue\">
\t\t\t\t\t<div class=\"panel-heading dark-overlay\"><svg class=\"glyph stroked clipboard-with-paper\"><use xlink:href=\"#stroked-clipboard-with-paper\"></use></svg>To-do List</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<ul class=\"todo-list\">
\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Make a plan for today</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Update Basecamp</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Send email to Jane</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Drink coffee</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Do some work</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Tidy up workspace</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t</div><!--/.col-->
\t\t</div><!--/.row-->
\t</div>\t<!--/.main-->

";
        
        $__internal_1e5dda87642ecc26d6d5d95ec7d14eace3c6208033d57dfc33babb586b579ab5->leave($__internal_1e5dda87642ecc26d6d5d95ec7d14eace3c6208033d57dfc33babb586b579ab5_prof);

    }

    // line 342
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ebd27d136a05e593df214cdfbc7829e7a3c9752c1cfa849f8d9e8f3c43e6f8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebd27d136a05e593df214cdfbc7829e7a3c9752c1cfa849f8d9e8f3c43e6f8f->enter($__internal_2ebd27d136a05e593df214cdfbc7829e7a3c9752c1cfa849f8d9e8f3c43e6f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "AdminDashboardBundle:Default:index.html.twig"));

        // line 343
        echo "
<script>
\t\$('#calendar').datepicker({
\t});

\t!function (\$) {
\t    \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){          
\t\t        \$(this).find('em:first').toggleClass(\"glyphicon-minus\");      
\t    }); 
\t    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t}(window.jQuery);

\t\$(window).on('resize', function () {
\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t})
\t\$(window).on('resize', function () {
\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t})
\t</script>\t
";
        
        $__internal_2ebd27d136a05e593df214cdfbc7829e7a3c9752c1cfa849f8d9e8f3c43e6f8f->leave($__internal_2ebd27d136a05e593df214cdfbc7829e7a3c9752c1cfa849f8d9e8f3c43e6f8f_prof);

    }

    public function getTemplateName()
    {
        return "AdminDashboardBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 343,  386 => 342,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}

\t<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><span>ANRT </span>Morocco</a>
\t\t\t\t<ul class=\"user-menu\">
\t\t\t\t\t<li class=\"dropdown pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> User <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked gear\"><use xlink:href=\"#stroked-gear\"></use></svg> Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked cancel\"><use xlink:href=\"#stroked-cancel\"></use></svg> Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t\t\t\t\t
\t\t</div><!-- /.container-fluid -->
\t</nav>
\t\t
\t<div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
\t\t<form role=\"search\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t</div>
\t\t</form>
\t\t<ul class=\"nav menu\">
\t\t\t<li class=\"active\"><a href=\"index.html\"><svg class=\"glyph stroked dashboard-dial\"><use xlink:href=\"#stroked-dashboard-dial\"></use></svg> Dashboard</a></li>
\t\t\t<li><a href=\"widgets.html\"><svg class=\"glyph stroked calendar\"><use xlink:href=\"#stroked-calendar\"></use></svg> Trafic</a></li>
\t\t\t<li><a href=\"charts.html\"><svg class=\"glyph stroked line-graph\"><use xlink:href=\"#stroked-line-graph\"></use></svg> penetration rate</a></li>
\t\t\t<li><a href=\"tables.html\"><svg class=\"glyph stroked table\"><use xlink:href=\"#stroked-table\"></use></svg> Revenu & usage</a></li>
\t\t\t<li><a href=\"forms.html\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg> Market part</a></li>
\t\t\t<li><a href=\"panels.html\"><svg class=\"glyph stroked app-window\"><use xlink:href=\"#stroked-app-window\"></use></svg> Parc abonnee</a></li>
\t\t\t<li><a href=\"icons.html\"><svg class=\"glyph stroked star\"><use xlink:href=\"#stroked-star\"></use></svg> Infrastructure & others</a></li>
\t\t\t<li class=\"parent \">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<span data-toggle=\"collapse\" href=\"#sub-item-1\"><svg class=\"glyph stroked chevron-down\"><use xlink:href=\"#stroked-chevron-down\"></use></svg></span> Enquete 
\t\t\t\t</a>
\t\t\t\t<ul class=\"children collapse\" id=\"sub-item-1\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 1
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 2
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"\" href=\"#\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked chevron-right\"><use xlink:href=\"#stroked-chevron-right\"></use></svg> Sub Item 3
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li role=\"presentation\" class=\"divider\"></li>
\t\t\t<li><a href=\"login.html\"><svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg> Login Page</a></li>
\t\t</ul>
\t\t<div class=\"attribution\">Developed with love by SoufianLa</div>
\t</div><!--/.sidebar-->
\t\t
\t<div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">\t\t\t
\t\t<div class=\"row\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"#\"><svg class=\"glyph stroked home\"><use xlink:href=\"#stroked-home\"></use></svg></a></li>
\t\t\t\t<li class=\"active\">Icons</li>
\t\t\t</ol>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Dashboard</h1>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-blue panel-widget \">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked bag\"><use xlink:href=\"#stroked-bag\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">120</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">New Orders</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-orange panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked empty-message\"><use xlink:href=\"#stroked-empty-message\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">52</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Comments</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-teal panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked male-user\"><use xlink:href=\"#stroked-male-user\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">24</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">New Users</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-md-6 col-lg-3\">
\t\t\t\t<div class=\"panel panel-red panel-widget\">
\t\t\t\t\t<div class=\"row no-padding\">
\t\t\t\t\t\t<div class=\"col-sm-3 col-lg-5 widget-left\">
\t\t\t\t\t\t\t<svg class=\"glyph stroked app-window-with-content\"><use xlink:href=\"#stroked-app-window-with-content\"></use></svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9 col-lg-7 widget-right\">
\t\t\t\t\t\t\t<div class=\"large\">25.2k</div>
\t\t\t\t\t\t\t<div class=\"text-muted\">Page Views</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">Site Traffic Overview</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"canvas-wrapper\">
\t\t\t\t\t\t\t<canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Orders</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\" ><span class=\"percent\">92%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Comments</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\" ><span class=\"percent\">65%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>New Users</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\" ><span class=\"percent\">56%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-body easypiechart-panel\">
\t\t\t\t\t\t<h4>Visitors</h4>
\t\t\t\t\t\t<div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\" ><span class=\"percent\">27%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div><!--/.row-->
\t\t\t\t\t\t\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t
\t\t\t\t<div class=\"panel panel-default chat\">
\t\t\t\t\t<div class=\"panel-heading\" id=\"accordion\"><svg class=\"glyph stroked two-messages\"><use xlink:href=\"#stroked-two-messages\"></use></svg> Chat</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"left clearfix\">
\t\t\t\t\t\t\t\t<span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"right clearfix\">
\t\t\t\t\t\t\t\t<span class=\"chat-img pull-right\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tMauris dignissim porta enim, sed commodo sem blandit non. Ut scelerisque sapien eu mauris faucibus ultrices. Nulla ac odio nisl. Proin est metus, interdum scelerisque quam eu, eleifend pretium nunc. Suspendisse finibus auctor lectus, eu interdum sapien.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"left clearfix\">
\t\t\t\t\t\t\t\t<span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/80/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"chat-body clearfix\">
\t\t\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t\t\t<strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc. Vivamus luctus convallis mauris, eu gravida tortor aliquam ultricies. 
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-md\" id=\"btn-chat\">Send</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div><!--/.col-->
\t\t\t
\t\t\t<div class=\"col-md-4\">
\t\t\t
\t\t\t\t<div class=\"panel panel-blue\">
\t\t\t\t\t<div class=\"panel-heading dark-overlay\"><svg class=\"glyph stroked clipboard-with-paper\"><use xlink:href=\"#stroked-clipboard-with-paper\"></use></svg>To-do List</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<ul class=\"todo-list\">
\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Make a plan for today</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Update Basecamp</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Send email to Jane</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Drink coffee</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Do some work</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"todo-list-item\">
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"checkbox\" />
\t\t\t\t\t\t\t\t\t<label for=\"checkbox\">Tidy up workspace</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><svg class=\"glyph stroked pencil\"><use xlink:href=\"#stroked-pencil\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"flag\"><svg class=\"glyph stroked flag\"><use xlink:href=\"#stroked-flag\"></use></svg></a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"trash\"><svg class=\"glyph stroked trash\"><use xlink:href=\"#stroked-trash\"></use></svg></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t</div><!--/.col-->
\t\t</div><!--/.row-->
\t</div>\t<!--/.main-->

{% endblock %}
{% block javascripts %}

<script>
\t\$('#calendar').datepicker({
\t});

\t!function (\$) {
\t    \$(document).on(\"click\",\"ul.nav li.parent > a > span.icon\", function(){          
\t\t        \$(this).find('em:first').toggleClass(\"glyphicon-minus\");      
\t    }); 
\t    \$(\".sidebar span.icon\").find('em:first').addClass(\"glyphicon-plus\");
\t}(window.jQuery);

\t\$(window).on('resize', function () {
\t  if (\$(window).width() > 768) \$('#sidebar-collapse').collapse('show')
\t})
\t\$(window).on('resize', function () {
\t  if (\$(window).width() <= 767) \$('#sidebar-collapse').collapse('hide')
\t})
\t</script>\t
{% endblock %}", "AdminDashboardBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\src\\Admin\\AdminDashboardBundle/Resources/views/Default/index.html.twig");
    }
}
