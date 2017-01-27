
<div class="header_bar">
	<div class="container">
		<img id="famuLogo" src="/bootstrap/images/famulogo2014.png" alt="" />
	</div>
</div>

<div class="header_base_bar">
	<div class="container" style="width:1300px;">
		<div class="row">
			<div class="col-xs-4">
				<span id="pageHeader">New Employee Orientation</span>
			</div>
			<div class="col-xs-8" style="text-align:right;">
				<a
					class="btn btn-default"
					role="button"
					href="http://www.famu.edu/index.cfm?odtraining&NewEmployeeOrientation"
					style="margin:2px 0 2px 0;"
					>
					Return to Main Menu
				</a>
			</div>
		</div>
	</div>
</div>

<div class="container_1">

	<div class="container" style="width:1300px;">
		<div class="row">
			<div class="col-xs-12">
				<?php

					// If GET.pres exists, include specified NEO presentation
					if (isset($_GET["pres"])){
						include $_GET["pres"] . ".htm";
					}
					else{
						// Include intro video by default
						include "./NEO_Intro.htm";
					}
				?>
			</div>
		</div>
	</div>

</div>

<div class="footer">&nbsp;</div>