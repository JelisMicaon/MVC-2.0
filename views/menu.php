<a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/shield.png" width="85" class="img-fluid" alt="<?php echo TITLE_WEB; ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo TITLE_WEB; ?>"/></a>
<nav class="navbar navbar-expand-sm flex-column navbar-dark bg-dark">
	<button class="navbar-toggler" data-toggle="collapse" data-target="#NavbarMenu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="NavbarMenu">
		<div class="navbar-nav">
			<?php for ($q=0; $q < 5; $q++): ?>
				<a href="#" class="nav-item nav-link mt-2 mr-2 ml-2 mb-1 pr-2 pl-2 border border-secondary <?php echo ($q==0)?'active':''; ?>">Menu</a>
			<?php endfor; ?>
		</div>
	</div>
</nav>