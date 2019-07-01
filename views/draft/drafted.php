<?php
require 'blocks/Draft/Drafted.php';
$draftedClass = new \blocks\Draft\Drafted();
$drafted = $draftedClass->getDrafted();
$matched = $draftedClass->getMatchedStatus();
?>
<?php if($drafted !== false) { ?>
<div class="card-deck mb-1 text-center">
    <div class="card mb-1 shadow-sm">
        <div class="card-header">
            <h4 class="my-0 font-weight-normal">Drafted Cards</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <?php echo strtoupper($drafted); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php if($matched) { ?>
    <script type="text/javascript">
        alert('Got it, the chance was 0% and press Reset Button to go to Step 1.');
    </script>
<?php } ?>
