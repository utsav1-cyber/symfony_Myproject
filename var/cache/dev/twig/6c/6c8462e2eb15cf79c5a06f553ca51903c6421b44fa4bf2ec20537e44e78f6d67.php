<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front/video_list.html.twig */
class __TwigTemplate_9a2148b50a40cb49a394cd6124e61c7a1605b2046560b465484169a7155155c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/video_list.html.twig"));

        // line 1
        echo "<?php
\$sample_videos = [289729765,238902809,150870038,219727723,289879647,261379936,289029793,60594348,290253648];
?>

<?php include('includes/_header.php'); ?>
<?php include('includes/_menu.html.twig'); ?>

<main role=\"main\">

    <section class=\"jumbotron text-center\">
        <div class=\"container\">

            <h1 class=\"jumbotron-heading\">Category - Funny</h1>
            <div class=\"btn-group\">
                <div class=\"dropdown ml-2\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        Subcategories
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <ul class=\"mr-5\">
                            <li><a href=\"#\">Funny</a></li>
                            <ul>
                                <li><a href=\"#\">Surprising</a></li>
                                <li><a href=\"#\">Exciting</a></li>
                                <ul>
                                    <li><a href=\"#\">Strange</a></li>
                                    <li><a href=\"#\">Relaxing</a></li>
                                </ul>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div class=\"form-row align-items-center ml-3\">
                    <form action=\"#\" method=\"POST\">
                        <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
                            <option selected>Sort...</option>
                            <option value=\"1\">Highest rated</option>
                            <option value=\"2\">Title A-Z</option>
                            <option value=\"3\">Title Z-A</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                <?php foreach(\$sample_videos as \$video): ?>
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/<?=\$video?>\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up\"><small class=\"text-muted\">(23)</small></i>&nbsp;
                                    <i class=\"fa fa-thumbs-down\"><small class=\"text-muted\">(9)</small></i>
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to like the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm ml-1\">
                                        <i class=\"fa fa-thumbs-up\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You like the video. Click to unlike\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    </button> -->
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to dislike the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm ml-1 mr-1\">
                                        <i class=\"fa fa-thumbs-down\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You don't like the video. Click to undo\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-down\"></i>
                                    </button> -->
                                    <a href=\"video_details.html.twig#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- no members -->
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/113716040\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <p class=\"card-text text-danger\">Video for <b>MEMBERS</b> only. <a href=\"pricing.html.twig\">Sign
                                    up</a> for one month for free.</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up mr-2\"><small class=\"text-muted\">(23)</small></i>
                                    <i class=\"fa fa-thumbs-down mr-2\"><small class=\"text-muted\">(9)</small></i>

                                    <a href=\"video_details.html.twig#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- pagination -->
    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>
    </nav>


</main>

<?php include('includes/_footer_links.html.twig'); ?>
<?php include('includes/_footer.php'); ?>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front/video_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$sample_videos = [289729765,238902809,150870038,219727723,289879647,261379936,289029793,60594348,290253648];
?>

<?php include('includes/_header.php'); ?>
<?php include('includes/_menu.html.twig'); ?>

<main role=\"main\">

    <section class=\"jumbotron text-center\">
        <div class=\"container\">

            <h1 class=\"jumbotron-heading\">Category - Funny</h1>
            <div class=\"btn-group\">
                <div class=\"dropdown ml-2\">
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                        Subcategories
                    </button>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <ul class=\"mr-5\">
                            <li><a href=\"#\">Funny</a></li>
                            <ul>
                                <li><a href=\"#\">Surprising</a></li>
                                <li><a href=\"#\">Exciting</a></li>
                                <ul>
                                    <li><a href=\"#\">Strange</a></li>
                                    <li><a href=\"#\">Relaxing</a></li>
                                </ul>
                            </ul>
                        </ul>
                    </div>
                </div>

                <div class=\"form-row align-items-center ml-3\">
                    <form action=\"#\" method=\"POST\">
                        <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelect\" onchange='this.form.submit();'>
                            <option selected>Sort...</option>
                            <option value=\"1\">Highest rated</option>
                            <option value=\"2\">Title A-Z</option>
                            <option value=\"3\">Title Z-A</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">

            <div class=\"row\">
                <?php foreach(\$sample_videos as \$video): ?>
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/<?=\$video?>\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up\"><small class=\"text-muted\">(23)</small></i>&nbsp;
                                    <i class=\"fa fa-thumbs-down\"><small class=\"text-muted\">(9)</small></i>
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to like the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm ml-1\">
                                        <i class=\"fa fa-thumbs-up\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You like the video. Click to unlike\" type=\"button\" class=\"btn btn-primary btn-outline-success btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-up\"></i>
                                    </button> -->
                                    <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"Click to dislike the video\"
                                        type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm ml-1 mr-1\">
                                        <i class=\"fa fa-thumbs-down\"></i>
                                    </button>
                                    <!-- <button data-toggle=\"tooltip\" data-placement=\"top\" title=\"You don't like the video. Click to undo\" type=\"button\" class=\"btn btn-primary btn-outline-danger btn-sm mr-2\">
                                    <i class=\"fa fa-thumbs-down\"></i>
                                    </button> -->
                                    <a href=\"video_details.html.twig#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- no members -->
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\">
                        <div align=\"center\" class=\"embed-responsive embed-responsive-16by9\">
                            <iframe class=\"\" src=\"https://player.vimeo.com/video/113716040\" frameborder=\"0\"
                                allowfullscreen></iframe>
                        </div>
                        <div class=\"card-body\">
                            <h3>Video title</h3>
                            <p class=\"card-text text-danger\">Video for <b>MEMBERS</b> only. <a href=\"pricing.html.twig\">Sign
                                    up</a> for one month for free.</p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">

                                    <i class=\"fa fa-thumbs-up mr-2\"><small class=\"text-muted\">(23)</small></i>
                                    <i class=\"fa fa-thumbs-down mr-2\"><small class=\"text-muted\">(9)</small></i>

                                    <a href=\"video_details.html.twig#video_comments\">Comments (32)</a>
                                </div>
                                <small class=\"text-muted\">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- pagination -->
    <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>
    </nav>


</main>

<?php include('includes/_footer_links.html.twig'); ?>
<?php include('includes/_footer.php'); ?>", "front/video_list.html.twig", "C:\\Xampps\\htdocs\\My_Project\\templates\\front\\video_list.html.twig");
    }
}
