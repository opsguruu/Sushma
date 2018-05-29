<?php
/** Let\'s suppose $content contains the entire HTML or a part of the HTML
 *  from which we need to replace/remove specific parts
 */

// Remove the element which has the element2 ID
$content = preg_replace(
  '#<div[^>]*id="element2"[^>]*>.*?</div>#is', '', $content
);

// Remove the element which has the yasglobal-translation ID
$content = preg_replace(
  '#<table[^>]*id="yasglobal-translation"[^>]*>.*?</table>#is', '', $content
);

// Remove the elements which have the wrapper class
$content = preg_replace(
  '#<table[^>]*class="wrapper"[^>]*>.*?</table>#is', '', $content
);

// Replace the element which has the element2 ID
$content = preg_replace(
  '#<div[^>]*id="element2"[^>]*>.*?</div>#is', '<div>Testing Element</div>', $content
);

// Replace the element which has the yasglobal-translation ID
$content = preg_replace(
  '#<table[^>]*id="yasglobal-translation"[^>]*>.*?</table>#is', '<div>Testing Element</div>', $content
);
