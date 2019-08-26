<nav class="navbar navbar-expand navbar-dark bg-dark w-100">
	<ul class="navbar-nav">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="<?php $this->lang->get('IDIOMA', TRUE); ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php $this->lang->GetLang(); ?>
			</a>
			<div class="dropdown-menu" aria-labelledby="<?php $this->lang->get('IDIOMA', TRUE); ?>">
				<a class="dropdown-item <?php echo ($this->lang->GetLang(TRUE) == 'pt-br')?'active':''; ?>" href="<?php echo BASE_URL.'lang/set/pt-br'; ?>"><?php $this->lang->get('BRASIL'); ?></a>
				<a class="dropdown-item <?php echo ($this->lang->GetLang(TRUE) == 'es-es')?'active':''; ?>" href="<?php echo BASE_URL.'lang/set/es-es'; ?>"><?php $this->lang->get('ESPANHA'); ?></a>
				<a class="dropdown-item <?php echo ($this->lang->GetLang(TRUE) == 'pt-pt')?'active':''; ?>" href="<?php echo BASE_URL.'lang/set/pt-pt'; ?>"><?php $this->lang->get('PORTUGAL'); ?></a>
				<a class="dropdown-item <?php echo ($this->lang->GetLang(TRUE) == 'en-us')?'active':''; ?>" href="<?php echo BASE_URL.'lang/set/en-us'; ?>"><?php $this->lang->get('EUA'); ?></a>
			</div>
		</li>
	</ul>
</nav>