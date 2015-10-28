<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	<div id="inner-footer" class="wrap cf">
		<div class="d-all">
			<div class="t-1of4 d-1of4">&nbsp;</div>
			<div class="t-1of4 d-1of4">
				<p><?= get_field('address','options')['address'] ?></p>
			</div>
			<div class="t-1of4 d-1of4">
				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> by <?php bloginfo( 'name' ); ?>.</p>
			</div>			
			<div class="t-1of4 d-1of4 social-container">
				<ul>
					<li class="facebook"><a href="<?= get_field('twitter','options') ?>" title="facebook" target="_blank"></a></li>
					<li class="twitter"<a href="<?= get_field('youtube','options') ?>" title="twitter" target="_blank"></a></li>
					<li class="youtube"><a href="<?= get_field('facebook','options') ?>" title="youtube" target="_blank"></a></li>
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