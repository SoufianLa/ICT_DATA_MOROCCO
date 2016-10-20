<?php

/* ::template.html.twig */
class __TwigTemplate_1e11e19ebcf55f4941897846e0e9c65dcfb0a41975fe448320b35288ca060ee3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_460e4820a7fcb300a051e8abd058902be36606b9aa0554f95b7f6136a369ef20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460e4820a7fcb300a051e8abd058902be36606b9aa0554f95b7f6136a369ef20->enter($__internal_460e4820a7fcb300a051e8abd058902be36606b9aa0554f95b7f6136a369ef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/freelancer.css"), "html", null, true);
        echo "\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"  />
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"  />
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"  />
</head>
<body id=\"page-top\" class=\"index\">
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
        <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"/login\">ANRT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                <li class=\"page-scroll\">
                    <a href=\"#portfolio\">Informations</a>
                </li>
                <li class=\"page-scroll\">
                    <a href=\"#about\">About</a>
                </li>
                <li class=\"page-scroll\">
                    <a href=\"#contact\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    </nav>
";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <br><br><br><br>
                    <div class=\"intro-text\">
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Dashboard</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row row-centered\">
                <div class=\"col-sm-4 portfolio-item col-centered\">
                    <a href=\"#portfolioModal1\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\">Indicators</i>
                            </div>
                        </div>
                        <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/indic.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item col-centered\">
                    <a href=\"#portfolioModal2\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\">Market</i>
                            </div>
                        </div>
                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/circus.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"center\">
                    </a>
                </div>
            </div>
            <div class=\"row row-centered\">
                <div class=\"row \">
                    <div class=\"col-lg-12 text-center\">
                        <h2>Survey</h2>
                        <hr class=\"star-primary\">
                    </div>
                </div>
                <div class=\"col-sm-4 portfolio-item col-centered\">
                    <a href=\"#portfolioModal3\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\">Market</i>
                            </div>
                        </div>
                        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/safe.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>About</h2>
                    <hr class=\"star-light\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-lg-offset-2\" >
                    <p class=\"text-justify\">Designed by the Moroccan National Telecommunication Regulatory Agency (ANRT), Morocco ICT Data allows access to many indicators on information and communication technologies in Morocco. Indicators cover many segments such as mobile and fixed telephony, Internet, payphones, domain names and IP addresses; and give an accurate idea about subscribers’ accounts, penetration rate, markets shares, traffic, revenues, usages and telecom infrastructures in Morocco.</p>
                </div>
                <div class=\"col-lg-4\">
                    <p class=\"text-justify\"> Some indicators show the evolution of the sector since 2004. Indicators are available in English, Arabic and French and are organized according to several approaches. The display could be customized following several types of charts or tabular form. Figures could be exportable to CSV file format and may be used in other environments.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Contact us</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Name</label>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Email Address</label>
                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Phone Number</label>
                                <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Message</label>
                                <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <br>
                        <div id=\"success\"></div>
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg\">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class=\"success\" >
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
            <div class=\"nine columns centered text-centered\">
                <h2>Administration space</h2>
                <p class=\"subheading\">
                    this space is reserved for Administrators
                </p>
                <a class=\"btn btn-success btn-lg\" href=\"\" >Admin</a>
            </div>
        </div>
                </div>
            </div>
    </section>
    <footer class=\"text-center\">
        <div class=\"footer-above\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footer-col col-md-4\">
                        <h3>Location</h3>
                        <p>L'agence national de réglementation des télécommunications
                            <br>Centre d'affaire, Boulevard Ar-Ryad</p>
                        <br>Tél : 05 37 71 84 00 - Fax : 05 37 20 38 62</p>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>Around the Web</h3>
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>About ICT DATA</h3>
                        <p>ICT DATA  MOROCCO is a free to use, created by ANRT.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-below\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        Copyright &copy; ICT DATA MOROCCO 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
        <a class=\"btn btn-primary\" href=\"#page-top\">
            <i class=\"fa fa-chevron-up\"></i>
        </a>
    </div>
    <!-- ++++++++++++++++++++++++++++++++++++++++Indicators++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- Portfolio Modals -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Indicators</h2>
                            <hr class=\"star-primary\">
                            <img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/indic.png"), "html", null, true);
        echo "\" class=\"img-responsive img-centered\" alt=\"the picture not found\" height=\"420\" width=\"420\">
                            <p>All  indicators are shown below :</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree1\">
                                <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                            </div>
                        </div>

                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree\">
                                <img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/2.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree3\">
                                <img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/3.png"), "html", null, true);
        echo "\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree4\">
                                <img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree5\">
                                <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/5.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a  data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree6\">
                                <img  src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/6.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m6.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
        </div>
    </div>
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++ Dashboard : Market ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Market</h2>
                            <hr class=\"star-primary\">
                            <img src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/circus.png"), "html", null, true);
        echo "\" class=\"img-responsive img-centered\" alt=\"the picture not found\" height=\"420\" width=\"420\">
                            <p>All  indicators are shown below :</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree1m\">
                                <img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/4.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                            </div>
                        </div>

                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree2m\">
                                <img src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m2.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree2m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/4.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree3m\">
                                <img src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m3.png"), "html", null, true);
        echo "\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree4m\">
                                <img src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/6.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree5m\">
                                <img src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m5.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/6.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a  data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree6m\">
                                <img  src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m6.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/6.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
        </div>
    </div>
    <!--+++++++++++++++++++++++++++++++++++++++++++++Survey: Market++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Market</h2>
                            <hr class=\"star-primary\">
                            <img src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/safe.png"), "html", null, true);
        echo "\" class=\"img-responsive img-centered\" alt=\"the picture not found\" height=\"420\" width=\"420\">
                            <p>All  indicators are shown below :</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-3\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m1m.png"), "html", null, true);
        echo "\" alt=\"\" >
                            </a></div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m2m.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-3\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/comp.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m4m.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
        </div>
    </div>
    <script src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/freelancer.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 631
        $this->displayBlock('javascripts', $context, $blocks);
        // line 632
        echo "
</body>
</html>
";
        
        $__internal_460e4820a7fcb300a051e8abd058902be36606b9aa0554f95b7f6136a369ef20->leave($__internal_460e4820a7fcb300a051e8abd058902be36606b9aa0554f95b7f6136a369ef20_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5e245cac7ec20f76231c29e83f476879bb8e13d1d439ae96b9faed1c4a6f0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e245cac7ec20f76231c29e83f476879bb8e13d1d439ae96b9faed1c4a6f0d1->enter($__internal_b5e245cac7ec20f76231c29e83f476879bb8e13d1d439ae96b9faed1c4a6f0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ICT DATA MOROCCO";
        
        $__internal_b5e245cac7ec20f76231c29e83f476879bb8e13d1d439ae96b9faed1c4a6f0d1->leave($__internal_b5e245cac7ec20f76231c29e83f476879bb8e13d1d439ae96b9faed1c4a6f0d1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f92b8b645ec9cac4a65b0067ea88f2ebb101f52e3eb05c256d76419c9ef721a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92b8b645ec9cac4a65b0067ea88f2ebb101f52e3eb05c256d76419c9ef721a3->enter($__internal_f92b8b645ec9cac4a65b0067ea88f2ebb101f52e3eb05c256d76419c9ef721a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f92b8b645ec9cac4a65b0067ea88f2ebb101f52e3eb05c256d76419c9ef721a3->leave($__internal_f92b8b645ec9cac4a65b0067ea88f2ebb101f52e3eb05c256d76419c9ef721a3_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_26d9dcbe869d4b98f6e6553f1e9a53dd5ea9e01684a57e38c58cee6c760e4a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d9dcbe869d4b98f6e6553f1e9a53dd5ea9e01684a57e38c58cee6c760e4a4a->enter($__internal_26d9dcbe869d4b98f6e6553f1e9a53dd5ea9e01684a57e38c58cee6c760e4a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26d9dcbe869d4b98f6e6553f1e9a53dd5ea9e01684a57e38c58cee6c760e4a4a->leave($__internal_26d9dcbe869d4b98f6e6553f1e9a53dd5ea9e01684a57e38c58cee6c760e4a4a_prof);

    }

    // line 631
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8182cbdaac28c65e8e981922394df717bab0024f3347d30d8c6ac04aa28c9ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8182cbdaac28c65e8e981922394df717bab0024f3347d30d8c6ac04aa28c9ebd->enter($__internal_8182cbdaac28c65e8e981922394df717bab0024f3347d30d8c6ac04aa28c9ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8182cbdaac28c65e8e981922394df717bab0024f3347d30d8c6ac04aa28c9ebd->leave($__internal_8182cbdaac28c65e8e981922394df717bab0024f3347d30d8c6ac04aa28c9ebd_prof);

    }

    public function getTemplateName()
    {
        return "::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  928 => 631,  917 => 47,  906 => 8,  894 => 7,  884 => 632,  882 => 631,  878 => 630,  874 => 629,  870 => 628,  866 => 627,  862 => 626,  858 => 625,  845 => 615,  835 => 608,  823 => 599,  814 => 593,  800 => 582,  771 => 556,  763 => 551,  752 => 543,  746 => 540,  737 => 534,  726 => 526,  720 => 523,  714 => 520,  708 => 517,  702 => 514,  694 => 509,  680 => 498,  674 => 495,  665 => 489,  654 => 481,  648 => 478,  642 => 475,  636 => 472,  630 => 469,  622 => 464,  609 => 454,  603 => 451,  597 => 448,  591 => 445,  585 => 442,  577 => 437,  563 => 426,  533 => 399,  526 => 395,  519 => 391,  511 => 386,  500 => 378,  493 => 374,  487 => 371,  479 => 366,  468 => 358,  462 => 355,  454 => 350,  440 => 339,  434 => 336,  428 => 333,  422 => 330,  414 => 325,  402 => 316,  395 => 312,  389 => 309,  381 => 304,  368 => 294,  362 => 291,  356 => 288,  350 => 285,  344 => 282,  336 => 277,  322 => 266,  157 => 104,  136 => 86,  123 => 76,  93 => 48,  91 => 47,  53 => 12,  49 => 11,  45 => 10,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}ICT DATA MOROCCO{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/freelancer.css') }}\"  />
    <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\"  />
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"  />
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"  />
</head>
<body id=\"page-top\" class=\"index\">
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
        <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"/login\">ANRT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"hidden\">
                    <a href=\"#page-top\"></a>
                </li>
                <li class=\"page-scroll\">
                    <a href=\"#portfolio\">Informations</a>
                </li>
                <li class=\"page-scroll\">
                    <a href=\"#about\">About</a>
                </li>
                <li class=\"page-scroll\">
                    <a href=\"#contact\">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    </nav>
{% block body %}{% endblock %}
    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <br><br><br><br>
                    <div class=\"intro-text\">
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Dashboard</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row row-centered\">
                <div class=\"col-sm-4 portfolio-item col-centered\">
                    <a href=\"#portfolioModal1\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\">Indicators</i>
                            </div>
                        </div>
                        <img src=\"{{ asset('img/portfolio/indic.png') }}\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-sm-4 portfolio-item col-centered\">
                    <a href=\"#portfolioModal2\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\">Market</i>
                            </div>
                        </div>
                        <img src=\"{{ asset('img/portfolio/circus.png') }}\" class=\"img-responsive\" alt=\"center\">
                    </a>
                </div>
            </div>
            <div class=\"row row-centered\">
                <div class=\"row \">
                    <div class=\"col-lg-12 text-center\">
                        <h2>Survey</h2>
                        <hr class=\"star-primary\">
                    </div>
                </div>
                <div class=\"col-sm-4 portfolio-item col-centered\">
                    <a href=\"#portfolioModal3\" class=\"portfolio-link\" data-toggle=\"modal\">
                        <div class=\"caption\">
                            <div class=\"caption-content\">
                                <i class=\"fa fa-search-plus fa-3x\">Market</i>
                            </div>
                        </div>
                        <img src=\"{{ asset('img/portfolio/safe.png') }}\" class=\"img-responsive\" alt=\"\">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>About</h2>
                    <hr class=\"star-light\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-lg-offset-2\" >
                    <p class=\"text-justify\">Designed by the Moroccan National Telecommunication Regulatory Agency (ANRT), Morocco ICT Data allows access to many indicators on information and communication technologies in Morocco. Indicators cover many segments such as mobile and fixed telephony, Internet, payphones, domain names and IP addresses; and give an accurate idea about subscribers’ accounts, penetration rate, markets shares, traffic, revenues, usages and telecom infrastructures in Morocco.</p>
                </div>
                <div class=\"col-lg-4\">
                    <p class=\"text-justify\"> Some indicators show the evolution of the sector since 2004. Indicators are available in English, Arabic and French and are organized according to several approaches. The display could be customized following several types of charts or tabular form. Figures could be exportable to CSV file format and may be used in other environments.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id=\"contact\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Contact us</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Name</label>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Email Address</label>
                                <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Phone Number</label>
                                <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"row control-group\">
                            <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                                <label>Message</label>
                                <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <br>
                        <div id=\"success\"></div>
                        <div class=\"row\">
                            <div class=\"form-group col-xs-12\">
                                <button type=\"submit\" class=\"btn btn-success btn-lg\">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class=\"success\" >
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
            <div class=\"nine columns centered text-centered\">
                <h2>Administration space</h2>
                <p class=\"subheading\">
                    this space is reserved for Administrators
                </p>
                <a class=\"btn btn-success btn-lg\" href=\"\" >Admin</a>
            </div>
        </div>
                </div>
            </div>
    </section>
    <footer class=\"text-center\">
        <div class=\"footer-above\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"footer-col col-md-4\">
                        <h3>Location</h3>
                        <p>L'agence national de réglementation des télécommunications
                            <br>Centre d'affaire, Boulevard Ar-Ryad</p>
                        <br>Tél : 05 37 71 84 00 - Fax : 05 37 20 38 62</p>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>Around the Web</h3>
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-facebook\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-twitter\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-dribbble\"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"footer-col col-md-4\">
                        <h3>About ICT DATA</h3>
                        <p>ICT DATA  MOROCCO is a free to use, created by ANRT.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-below\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        Copyright &copy; ICT DATA MOROCCO 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class=\"scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md\">
        <a class=\"btn btn-primary\" href=\"#page-top\">
            <i class=\"fa fa-chevron-up\"></i>
        </a>
    </div>
    <!-- ++++++++++++++++++++++++++++++++++++++++Indicators++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- Portfolio Modals -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal1\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Indicators</h2>
                            <hr class=\"star-primary\">
                            <img src=\"{{ asset('img/portfolio/indic.png') }}\" class=\"img-responsive img-centered\" alt=\"the picture not found\" height=\"420\" width=\"420\">
                            <p>All  indicators are shown below :</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree1\">
                                <img src=\"{{ asset('img/portfolio/1.png') }}\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m1m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m2m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m3.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m4m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m5.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                            </div>
                        </div>

                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree\">
                                <img src=\"{{ asset('img/portfolio/2.png') }}\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m1m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m2m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m4m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree3\">
                                <img src=\"{{ asset('img/portfolio/3.png') }}\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m1m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m2m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m3.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m4m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree4\">
                                <img src=\"{{ asset('img/portfolio/4.png') }}\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m1m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m2m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree5\">
                                <img src=\"{{ asset('img/portfolio/5.png') }}\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m1m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m2m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m4m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a  data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree6\">
                                <img  src=\"{{ asset('img/portfolio/6.png') }}\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m4m.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m5.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/m6.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
        </div>
    </div>
    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++ Dashboard : Market ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal2\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Market</h2>
                            <hr class=\"star-primary\">
                            <img src=\"{{ asset('img/portfolio/circus.png') }}\" class=\"img-responsive img-centered\" alt=\"the picture not found\" height=\"420\" width=\"420\">
                            <p>All  indicators are shown below :</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree1m\">
                                <img src=\"{{ asset('img/portfolio/m1.png') }}\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/1.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/2.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/3.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/4.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/5.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                            </div>
                        </div>

                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree2m\">
                                <img src=\"{{ asset('img/portfolio/m2.png') }}\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree2m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/1.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/2.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/3.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/4.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/5.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree3m\">
                                <img src=\"{{ asset('img/portfolio/m3.png') }}\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/1.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/3.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-1\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree4m\">
                                <img src=\"{{ asset('img/portfolio/m4.png') }}\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/1.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/2.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/3.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/5.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/6.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree5m\">
                                <img src=\"{{ asset('img/portfolio/m5.png') }}\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/1.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/6.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a  data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree6m\">
                                <img  src=\"{{ asset('img/portfolio/m6.png') }}\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"{{ asset('img/portfolio/transparent/6.png') }}\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
        </div>
    </div>
    <!--+++++++++++++++++++++++++++++++++++++++++++++Survey: Market++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal3\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>Market</h2>
                            <hr class=\"star-primary\">
                            <img src=\"{{ asset('img/portfolio/safe.png') }}\" class=\"img-responsive img-centered\" alt=\"the picture not found\" height=\"420\" width=\"420\">
                            <p>All  indicators are shown below :</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-3\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"{{ asset('img/portfolio/m1m.png') }}\" alt=\"\" >
                            </a></div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"{{ asset('img/portfolio/m2m.png') }}\"  alt=\"\" >
                            </a></div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-3\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"{{ asset('img/portfolio/comp.png') }}\"  alt=\"\" >
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"{{ asset('img/portfolio/m4m.png') }}\"  alt=\"\" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
        </div>
    </div>
    <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.easing.min.js') }}\"></script>
    <script src=\"{{ asset('js/jqBootstrapValidation.js') }}\"></script>
    <script src=\"{{ asset('js/contact_me.js') }}\"></script>
    <script src=\"{{ asset('js/freelancer.min.js') }}\"></script>
{% block javascripts %}{% endblock %}

</body>
</html>
";
    }
}
