<?php
/**
 * Created by PhpStorm.
 * User: SatyaJit
 * Date: 14-02-2019
 * Time: 20:26
 */


echo "<div class=\"client section-padding section-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"client-logo\" class=\"owl-carousel\">";



if ($handle = opendir('assets/images/clients/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            //echo "$entry\n";


            echo  "<div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/".$entry."\" alt=\"\" />
                    </a>
                </div>";



        }
    }

    closedir($handle);
}


                
                
          echo "</div>
        </div>
    </div>
</div>";


?>