<?php

$styleString = "";
if (count($style) > 0) {
    $styleString = "style='";
    foreach ($style as $key => $value) {
       $styleString .= "$key: $value; ";
    }
    $styleString .= "'";
}


?>

<svg
   <?php echo $styleString ?>
   class="c-logo__one-hex c-logo__one-hex--<?php echo $type ?>"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   id="svg5240"
   xml:space="preserve"
   style="overflow:visible"
   viewBox="0 0 57.700002 49.999999"
   height="50"
   width="57.700001"
   y="0px"
   x="0px"
   version="1.1">
<defs
   id="defs5066">
</defs>
<g
   transform="translate(-200.2,-68.1)"
   id="g5082">
	<polygon
   id="polygon5080"
   points="243.5,68.1 214.6,68.1 200.2,93.1 214.6,118.1 243.5,118.1 257.9,93.1 "
   class="c-logo__top" />
</g>
</svg>