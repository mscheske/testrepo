<?php if($this->countModules('toolbar')) : ?>
<div id="navigation" class="navbar navbar-inverse" role="navigation">
<span class="navigation">Menu</span>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div id="toolbar" class="navbar-collapse collapse">
<jdoc:include type="modules" name="toolbar" style="none" />
</div>
</div>
<?php endif; ?>