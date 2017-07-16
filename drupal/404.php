<?php

/**
 * This is used to show the 404 page in Drupal 7.
 * If you created the page using module and alias is "/docs/yasglobal". Then, when you acces "/docs/yasglobal/sami" it gives you the same page as "/docs/yasglobal". In this case, we can use some condition here to give Drupal 404 Page instead of the wrong page.
 */
if(arg(2) != '') {
    drupal_not_found();
    drupal_exit;
}
?>
