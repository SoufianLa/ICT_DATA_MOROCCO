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
        $__internal_2380fcd863a2d5a0f67d6684cc5c51e367e1b5db77bb8e98f67f1ef632f2ce45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2380fcd863a2d5a0f67d6684cc5c51e367e1b5db77bb8e98f67f1ef632f2ce45->enter($__internal_2380fcd863a2d5a0f67d6684cc5c51e367e1b5db77bb8e98f67f1ef632f2ce45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::template.html.twig"));

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
        // line 251
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
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 279
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
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/2.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 301
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
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/3.png"), "html", null, true);
        echo "\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 324
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
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 343
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
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/5.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 363
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
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/6.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 384
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
        // line 411
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
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/4.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 439
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
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m2.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree2m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/4.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 466
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
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m3.png"), "html", null, true);
        echo "\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 483
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
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 511
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
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m5.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 528
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
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m6.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 541
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
        // line 567
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
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m1m.png"), "html", null, true);
        echo "\" alt=\"\" >
                            </a></div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"";
        // line 584
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
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/comp.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"#\">
                                <img src=\"";
        // line 600
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
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/freelancer.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 616
        $this->displayBlock('javascripts', $context, $blocks);
        // line 617
        echo "
</body>
</html>
";
        
        $__internal_2380fcd863a2d5a0f67d6684cc5c51e367e1b5db77bb8e98f67f1ef632f2ce45->leave($__internal_2380fcd863a2d5a0f67d6684cc5c51e367e1b5db77bb8e98f67f1ef632f2ce45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e2a45ee9d408080da92c2866b0810d4742731dbfdd462084acd98715076d052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2a45ee9d408080da92c2866b0810d4742731dbfdd462084acd98715076d052->enter($__internal_8e2a45ee9d408080da92c2866b0810d4742731dbfdd462084acd98715076d052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ICT DATA MOROCCO";
        
        $__internal_8e2a45ee9d408080da92c2866b0810d4742731dbfdd462084acd98715076d052->leave($__internal_8e2a45ee9d408080da92c2866b0810d4742731dbfdd462084acd98715076d052_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f581bf0b6e762717b92b77c6bc9fa1a4e5da40d3cbabf552eed538754ab92bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f581bf0b6e762717b92b77c6bc9fa1a4e5da40d3cbabf552eed538754ab92bd7->enter($__internal_f581bf0b6e762717b92b77c6bc9fa1a4e5da40d3cbabf552eed538754ab92bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f581bf0b6e762717b92b77c6bc9fa1a4e5da40d3cbabf552eed538754ab92bd7->leave($__internal_f581bf0b6e762717b92b77c6bc9fa1a4e5da40d3cbabf552eed538754ab92bd7_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_160d02c90bfaa6d46df06969d8f5fe8ce5493328c6ad643f219efd2fffe3408e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160d02c90bfaa6d46df06969d8f5fe8ce5493328c6ad643f219efd2fffe3408e->enter($__internal_160d02c90bfaa6d46df06969d8f5fe8ce5493328c6ad643f219efd2fffe3408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_160d02c90bfaa6d46df06969d8f5fe8ce5493328c6ad643f219efd2fffe3408e->leave($__internal_160d02c90bfaa6d46df06969d8f5fe8ce5493328c6ad643f219efd2fffe3408e_prof);

    }

    // line 616
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f808cf89e71534a9030c2c94d304fb704b4e2f7f9bbddd0ff09dc09137ed0527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f808cf89e71534a9030c2c94d304fb704b4e2f7f9bbddd0ff09dc09137ed0527->enter($__internal_f808cf89e71534a9030c2c94d304fb704b4e2f7f9bbddd0ff09dc09137ed0527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f808cf89e71534a9030c2c94d304fb704b4e2f7f9bbddd0ff09dc09137ed0527->leave($__internal_f808cf89e71534a9030c2c94d304fb704b4e2f7f9bbddd0ff09dc09137ed0527_prof);

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
        return array (  913 => 616,  902 => 47,  891 => 8,  879 => 7,  869 => 617,  867 => 616,  863 => 615,  859 => 614,  855 => 613,  851 => 612,  847 => 611,  843 => 610,  830 => 600,  820 => 593,  808 => 584,  799 => 578,  785 => 567,  756 => 541,  748 => 536,  737 => 528,  731 => 525,  722 => 519,  711 => 511,  705 => 508,  699 => 505,  693 => 502,  687 => 499,  679 => 494,  665 => 483,  659 => 480,  650 => 474,  639 => 466,  633 => 463,  627 => 460,  621 => 457,  615 => 454,  607 => 449,  594 => 439,  588 => 436,  582 => 433,  576 => 430,  570 => 427,  562 => 422,  548 => 411,  518 => 384,  511 => 380,  504 => 376,  496 => 371,  485 => 363,  478 => 359,  472 => 356,  464 => 351,  453 => 343,  447 => 340,  439 => 335,  425 => 324,  419 => 321,  413 => 318,  407 => 315,  399 => 310,  387 => 301,  380 => 297,  374 => 294,  366 => 289,  353 => 279,  347 => 276,  341 => 273,  335 => 270,  329 => 267,  321 => 262,  307 => 251,  157 => 104,  136 => 86,  123 => 76,  93 => 48,  91 => 47,  53 => 12,  49 => 11,  45 => 10,  40 => 9,  38 => 8,  34 => 7,  26 => 1,);
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
