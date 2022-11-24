<div class= "container">
<p style="text-align: center;">Since, Scott's Pi is given by: \[&pi; = {Po-Pe \over 100-Pe}\] 
    <br>where Po = <?php print_r($hundred); ?> - <?php print_r($absDiff); ?> = <?php print_r($p_nut); ?> 
    <br>and, Pe = <?php print_r($p_expected); ?> </p>
<p style="text-align: center;">Therefore, \[&pi; = {<?php print_r($p_nut); ?> - <?php print_r($p_expected); ?> \over 100 - <?php print_r($p_expected); ?>}\]   </p>

<?php

$nume = $p_nut - $p_expected;
$denom = $hundred - $p_expected;
$raw_pi = $nume / $denom;
$pi = round($raw_pi, 2);

?>

<p style="text-align: center;">Therefore, Scott's Pi, <b> &pi; =  <?php print_r($pi); ?></b> </p>

</div>