<?php $copyright = $this->params->get('copyright'); ?>
<?php $date = date("Y"); ?>
<div id="copyright-outer" class="clr">
<div id="copyright-inner" class="<?php if(empty($copyright)) { echo "auto"; } elseif($copyright) { echo "show"; } ?>">
<?php if($copyright) echo "<div id='copyright'>Copyright &copy; $date $copyright. All Right Reserve.</div>"; ?>
<div id="designer">Template by <a href="http://www.joomlasaver.com" target="_blank" title="www.joomlasaver.com">JoomlaSaver</a></div>
</div>
</div>