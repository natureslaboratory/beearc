<?php

$styleString = "";
if (count($style) > 0) {
    $styleString = "style='";
    foreach ($style as $key => $value) {
       $styleString .= "$key: $value;";
    }
    $styleString .= "'";
}


?>

<svg
   <?php echo $styleString ?>
   class="c-logo__two-hexes c-logo__two-hexes--<?php echo $type ?>"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   id="svg5240"
   xml:space="preserve"
   style="overflow:visible"
   viewBox="0 0 102.5 75.800001"
   height="75.800003"
   width="102.5"
   y="0px"
   x="0px"
   version="1.1">
<defs
   id="defs5066">
</defs>

<g
   transform="translate(-244.9,-42.3)"
   id="g5074">
	<polygon
   id="polygon5072"
   points="288.2,42.3 259.4,42.3 244.9,67.3 259.4,92.3 288.2,92.3 302.7,67.3 "
   class="c-logo__top" />
</g>
<g
   transform="translate(-244.9,-42.3)"
   id="g5078">
	<polygon
   id="polygon5076"
   points="333,68.1 304.2,68.1 289.7,93.1 304.2,118.1 333,118.1 347.4,93.1 "
   class="c-logo__top" />
</g>
</svg>