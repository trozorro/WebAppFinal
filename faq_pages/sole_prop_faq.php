<?php
/**
 * Created by PhpStorm.
 * User: SatyaJit
 * Date: 14-02-2019
 * Time: 21:48
 */



echo "



 <section  class=\"Material-about-section section-padding\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">FREQUENTLY ASKED QUESTIONS</h1>
</div>

</div>";

$handle = fopen("../faq_pages/faq_data/sole_prop_faq.faq", "r");
if ($handle) {

    $count = 1;

    while (($line = fgets($handle)) !== false) {

        $pos = strpos($line, "?");
        $ans = substr($line,$pos+1);
        $que = substr($line,0,$pos+1);

        echo "<div class=\"panel-group Material-default-accordion Material-accordion-2\" id=\"Material-accordion2\" role=\"tablist\" aria-multiselectable=\"true\">
<div class=\"panel panel-default mb-3\">
<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo".$count."\">
<h4 class=\"panel-title\">
<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#Material-accordion3\" href=\"#collapseTwo".$count."\" aria-expanded=\"false\" aria-controls=\"collapseTwo".$count."\">
".$que."
</a>
</h4>
</div>
<div id=\"collapseTwo".$count."\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo".$count."\">
<div class=\"panel-body\">
".$ans."</div>
</div>
</div>
</div>";

        $count++;

    }

    fclose($handle);
} else {
    // error opening the file.
}




echo  " </div>

</section>";

?>