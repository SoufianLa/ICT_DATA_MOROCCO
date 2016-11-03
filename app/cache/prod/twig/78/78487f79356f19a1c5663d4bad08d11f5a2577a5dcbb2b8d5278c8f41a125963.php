<?php

/* ::template.html.twig */
class __TwigTemplate_91bb2c81c65ab9a38239d43a6a057ac73cb9e7fc468b399d2bd41d410c94148b extends Twig_Template
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
            <a class=\"navbar-brand\" href=\"\">ANRT</a>
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
    <section class=\"sccess\" >
        <div class=\"container\">
            <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
            <div class=\"nine columns centered text-centered\">
                <h2>Administration space</h2>
                <p class=\"subheading\">
                    this space is reserved for Administrators
                </p>
                <br />
                <a class=\"btn btn-success btn-lg\" href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" >Admin</a>
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
        // line 267
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
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 295
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
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/2.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 317
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
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/3.png"), "html", null, true);
        echo "\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 340
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
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4\" class = \"panel-collapse collapse\">
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
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"img-hover\">
                            <a data-toggle = \"collapse\" data-parent = \"#accordion\" href = \"#collapseThree5\">
                                <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/5.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m1m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m2m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 379
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
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/6.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m4m.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/m5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 400
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
        // line 427
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
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        </div>
                        <div id = \"collapseThree1m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"";
        // line 443
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/4.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 455
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
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m2.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree2m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/4.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 482
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
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m3.png"), "html", null, true);
        echo "\"  alt=\"\">
                            </a></div>
                        <div id = \"collapseThree3m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 499
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
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m4.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a></div>
                        <div id = \"collapseThree4m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/2.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/3.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/5.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 527
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
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m5.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree5m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">

                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/transparent/1.png"), "html", null, true);
        echo "\"  height=\"38\" width=\"200\" alt=\"\"></a></div>
                                    </div></div>
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 544
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
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m6.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                        <div id = \"collapseThree6m\" class = \"panel-collapse collapse\">
                            <div class = \"panel-body\">
                                <div class=\"row\">
                                    <div class=\"img-hover\"><div class=\"col-lg-12\"><a href=\"#\"><img src=\"";
        // line 557
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
        // line 583
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
                            <a href=\"";
        // line 593
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart_emobile");
        echo "\">
                                <img src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m1m.png"), "html", null, true);
        echo "\" alt=\"\" >
                            </a></div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"";
        // line 599
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart_efixe");
        echo "\">
                                <img src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/m2m.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a></div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-3 col-lg-offset-3\">
                        <div class=\"img-hover\">
                            <a href=\"";
        // line 608
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart_ecomputer");
        echo "\">
                                <img src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/portfolio/comp.png"), "html", null, true);
        echo "\"  alt=\"\" >
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"img-hover\">
                            <a href=\"";
        // line 615
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chart_einternet");
        echo "\">
                                <img src=\"";
        // line 616
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
        // line 626
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/freelancer.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 632
        $this->displayBlock('javascripts', $context, $blocks);
        // line 633
        echo "
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "ICT DATA MOROCCO";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 632
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  922 => 632,  917 => 47,  912 => 8,  906 => 7,  899 => 633,  897 => 632,  893 => 631,  889 => 630,  885 => 629,  881 => 628,  877 => 627,  873 => 626,  860 => 616,  856 => 615,  847 => 609,  843 => 608,  832 => 600,  828 => 599,  820 => 594,  816 => 593,  803 => 583,  774 => 557,  766 => 552,  755 => 544,  749 => 541,  740 => 535,  729 => 527,  723 => 524,  717 => 521,  711 => 518,  705 => 515,  697 => 510,  683 => 499,  677 => 496,  668 => 490,  657 => 482,  651 => 479,  645 => 476,  639 => 473,  633 => 470,  625 => 465,  612 => 455,  606 => 452,  600 => 449,  594 => 446,  586 => 443,  578 => 438,  564 => 427,  534 => 400,  527 => 396,  520 => 392,  512 => 387,  501 => 379,  494 => 375,  488 => 372,  480 => 367,  469 => 359,  463 => 356,  455 => 351,  441 => 340,  435 => 337,  429 => 334,  423 => 331,  415 => 326,  403 => 317,  396 => 313,  390 => 310,  382 => 305,  369 => 295,  363 => 292,  357 => 289,  351 => 286,  345 => 283,  337 => 278,  323 => 267,  246 => 193,  154 => 104,  133 => 86,  120 => 76,  90 => 48,  88 => 47,  50 => 12,  46 => 11,  42 => 10,  37 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::template.html.twig", "C:\\xampp\\htdocs\\ICT_DATA_MOROCCO\\app/Resources\\views/template.html.twig");
    }
}
