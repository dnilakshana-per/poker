<?php
require 'blocks/Draft/Percentage.php';
$percentage   = new \blocks\Draft\Percentage();
$buttonStatus = $percentage->getMatchedStatus();
?>
<h1 class="card-title pricing-card-title"><?php echo $percentage->getPercentage()?><small class="text-muted">%</small></h1>
<div>Chance of getting selected card on the next Draft.</div>
<?php if(!$buttonStatus) { ?>
<button type="button" class="btn btn-lg btn-block btn-primary" onclick="document.getElementById('draft-form').submit();">Draft</button>
<?php } ?>
<button type="button" onclick="confirmMessage();" class="btn btn-lg btn-block btn-primary">Reset</button>