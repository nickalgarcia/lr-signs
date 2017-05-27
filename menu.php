<nav>
	<ul class="sf-menu">
		<li<?php echo ($_GET["page"]=="" || $_GET["page"]=="home" ? " class='selected'" : ""); ?>>
			<a href="?page=home" title="Home">
				HOME
			</a>
		</li>
		<!--<li <?php echo ($_GET["page"]=="services" || $_GET["page"]=="service_interior_renovation" || $_GET["page"]=="service_design_build" || $_GET["page"]=="service_tiling_painting" || $_GET["page"]=="service_paver_walkways" || $_GET["page"]=="service_household_repairs" || $_GET["page"]=="service_solar_systems" ? " class='selected'" : ""); ?>>
			<a href="?page=services" title="Services">
				SERVICES
			</a>
			<ul>
				<li<?php echo ($_GET["page"]=="service_interior_renovation" ? " class='selected'" : ""); ?>>
					<a href="?page=service_interior_renovation" title="Interior Renovation">
						Interior Renovation
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_design_build" ? " class='selected'" : ""); ?>>
					<a href="?page=service_design_build" title="Design and Build">
						Design and Build
					</a>
				</li>
				<li<?php echo ($_GET["page"]=="service_tiling_painting" ? " class='selected'" : ""); ?>>
					<a href="?page=service_tiling_painting" title="Design and Build">
						Tiling and Painting
					</a>
				</li>
			</ul>
		</li>-->
		<!--<li <?php echo ($_GET["page"]=="projects" || $_GET["page"]=="project_interior_renovation" || $_GET["page"]=="project_garden_renovation" || $_GET["page"]=="project_painting" || $_GET["page"]=="project_design_build" || $_GET["page"]=="project_solar_systems" ? " class='selected'" : ""); ?>>
			<a href="?page=projects" title="Projects">
				PROJECTS
			</a>
		</li>-->
					<li>
			<a href="?page=gallery">GALLERY</a>
			</li>
		<li class="left-flyout<?php echo ($_GET["page"]=="contact" || $_GET["page"]=="contact_2" ? " selected" : ""); ?>">
			<a href="?page=contact" title="Contact">
				CONTACT
			</a>
		</li>
	</ul>
</nav>
<div class="mobile-menu-container">
	<div class="mobile-menu-divider"></div>
	<nav>
		<ul class="mobile-menu">
			<li<?php echo ($_GET["page"]=="" || $_GET["page"]=="home" ? " class='selected'" : ""); ?>>
				<a href="?page=home" title="Home">
					HOME
				</a>
			</li>
			<!--<li <?php echo ($_GET["page"]=="services" || $_GET["page"]=="service_interior_renovation" || $_GET["page"]=="service_design_build" || $_GET["page"]=="service_tiling_painting" || $_GET["page"]=="service_paver_walkways" || $_GET["page"]=="service_household_repairs" || $_GET["page"]=="service_solar_systems" ? " class='selected'" : ""); ?>>
				<a href="?page=services" title="Services">
					SERVICES
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="service_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=service_interior_renovation" title="Interior Renovation">
							Interior Renovation
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_design_build" ? " class='selected'" : ""); ?>>
						<a href="?page=service_design_build" title="Design and Build">
							Design and Build
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_tiling_painting" ? " class='selected'" : ""); ?>>
						<a href="?page=service_tiling_painting" title="Design and Build">
							Tiling and Painting
						</a>
					</li>
					li<?php echo ($_GET["page"]=="service_paver_walkways" ? " class='selected'" : ""); ?>>
						<a href="?page=service_paver_walkways" title="Paver Walkways">
							Paver Walkways
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_household_repairs" ? " class='selected'" : ""); ?>>
						<a href="?page=service_household_repairs" title="Household Repairs">
							Household Repairs
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_solar_systems" ? " class='selected'" : ""); ?>>
						<a href="?page=service_solar_systems" title="Solar Systems">
							Solar Systems
						</a>
					</li>
				</ul>
			</li>
			<li <?php echo ($_GET["page"]=="projects" || $_GET["page"]=="project_interior_renovation" || $_GET["page"]=="project_garden_renovation" || $_GET["page"]=="project_painting" || $_GET["page"]=="project_design_build" || $_GET["page"]=="project_solar_systems" ? " class='selected'" : ""); ?>>
				<a href="?page=projects" title="Projects">
					PROJECTS
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="project_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=project_interior_renovation" title="Interior Renovation">
							Interior Renovation
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_garden_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=project_garden_renovation" title="Garden Renovation">
							Garden Renovation
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_painting" ? " class='selected'" : ""); ?>>
						<a href="?page=project_painting" title="Painting">
							Painting
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_design_build" ? " class='selected'" : ""); ?>>
						<a href="?page=project_design_build" title="Design and Build">
							Design and Build
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_solar_systems" ? " class='selected'" : ""); ?>>
						<a href="?page=project_solar_systems" title="Solar Systems">
							Solar Systems
						</a>
					</li>
				</ul>
			</li>-->
			<!--<li<?php echo ($_GET["page"]=="about" || $_GET["page"]=="404" ? " class='selected'" : ""); ?>>
				<a href="?page=about" title="Pages">
					PAGES
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="about" ? " class='selected'" : ""); ?>>
						<a href="?page=about" title="About">
							About
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="404" ? " class='selected'" : ""); ?>>
						<a href="?page=404" title="404 Not Found">
							404 Not Found
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="service_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=service_interior_renovation" title="Single Service">
							Single Service
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="project_interior_renovation" ? " class='selected'" : ""); ?>>
						<a href="?page=project_interior_renovation" title="Single Project">
							Single Project
						</a>
					</li>
				</ul>
			</li>-->
			<li>
			<a href="https://www.facebook.com/landrsigns/photos_stream?tab=photos_stream" target="_blank">GALLERY</a>
			</li>
			<li class="left-flyout<?php echo ($_GET["page"]=="contact" || $_GET["page"]=="contact_2" ? " selected" : ""); ?>">
				<a href="?page=contact" title="Contact">
					CONTACT
				</a>
			</li>
		</ul>
	</nav>
</div>