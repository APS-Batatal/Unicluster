<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	<div id="inner-footer" class="wrap cf">
		<div class="d-all">
			<div class="d-1of4">
				<p>Grupo de estudos</p>
				<p><?php bloginfo( 'name' ); ?>.</p>
			</div>
			<div class="d-1of4">
				<p><?= get_field('address','options')['address'] ?></p>
			</div>
			<div class="d-1of4">
				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> by <?php bloginfo( 'name' ); ?>.</p>
			</div>			
			<div class="d-1of4">
				<ul>
					<li><?= get_field('twitter','options') ?></li>
					<li><?= get_field('youtube','options') ?></li>
					<li><?= get_field('facebook','options') ?></li>
				</ul>
			</div>			
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
<script type='text/javascript' id="__bs_script__">//<![CDATA[
document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.9.11.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</html> <!-- end of site. what a ride! -->