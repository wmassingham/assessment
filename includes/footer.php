		</div>
		<div id="footer" class="light right">
			<?php
				$end = microtime(true);
				echo 'Copyright &copy; 2013-' . date('Y') . ' Keene State College. ';
				printf('Page created in %.3f seconds.', ($end - $start));
			?>
		</div>

		<script type="text/javascript" src="js/jquery.js"></script>
		<!--<script type="text/javascript" src="js/jquery-ui.js"></script>-->
		<!--<script type="text/javascript" src="js/jquery.ui.selectmenu.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
		<script type="text/javascript" src="js/dataTables.js"></script>
		<script type="text/javascript" src="js/dataTablesRowGrouping.js"></script>
		<script type="text/javascript" src="js/dataTables.fixedHeader.min.js"></script>
		<script type="text/javascript" src="js/TableTools.js"></script>
		<script type="text/javascript" src="js/ZeroClipboard.js"></script>
		<!--<script type="text/javascript" src="js/highcharts.js"></script>-->
		<!--<script type="text/javascript" src="js/exporting.js"></script>-->
		<script type="text/javascript" src="//code.highcharts.com/4.0/highcharts.js"></script>
		<script type="text/javascript" src="//code.highcharts.com/4.0/modules/exporting.js"></script>

		<script type="text/javascript" src="js/sessionInput.js" ></script>
		<script type="text/javascript" src="js/pageStart.js" ></script>
		<script type="text/javascript" src="js/docReady.js" ></script>

		<?php if (isset($jsOutput)) { echo '<script type="text/javascript">'.$jsOutput.'</script>'; } ?>

	</body>
</html>
