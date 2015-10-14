<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header class="row">
			<h1>OLX Web Standards</h1>
			<hr>
		</header>
		<div class="row">
			<div class="small-3 columns">
				<ul>
					<li><a href="#grid">Grid</a></li>
					<li><a href="#type">Type</a></li>
					<li><a href="#buttons">Buttons</a></li>
					<li><a href="#btn-grp">Button Groups</a></li>
					<li><a href="#dropdowns">Dropdowns</a></li>
					<li><a href="#searchbar">Search Bar</a></li>
					<li><a href="#contentbox">Content Box</a></li>
					<li><a href="#listing">Sample Listing Area</a></li>
					<li><a href="#icons">Icons</a></li>
					<li><a href="#navigation">Navigation</a></li>
					<li><a href="#tabs">Tabs</a></li>
				</ul>
			</div>
			<!--Navigation-->
			
			<!--Main Column-->
			<div class="small-9 columns">

				<section class="row">
					<a href="#grid" name="grid"></a>
					<h2>Grid</h2>
					<div class="background-subtle text-center small-12">
						.small-12
					</div>
					<div class="background-neutral text-center text-white small-12 medium-8">
						.small-12 .medium-8
					</div>
					<div class="background-subtle text-center small-4 medium-6">
						.small-4 .medium-6
					</div>
					<div class="background-neutral text-center text-white small-4 medium-6">
						.small-4 .medium-6
					</div>
					<div class="background-subtle text-center small-4 medium-6">
						.small-4 .medium-6
					</div>
					<div class="background-neutral text-center text-white small-4 medium-6">
						.small-4 .medium-6
					</div>
					<div class="background-subtle text-center small-3 medium-6 columns">
						.small-3 .medium-6 .columns
					</div>
					<div class="background-neutral text-center text-white small-3 medium-6 columns">
						.small-3 .medium-6 .columns
					</div>
					<div class="background-subtle text-center small-3 medium-6 columns">
						.small-3 .medium-6 .columns
					</div>
					<div class="background-neutral text-center text-white small-3 medium-6 columns">
						.small-3 .medium-6 .columns
					</div>
				</section>
				
				<section class="row">
					<a href="#type" name="type"></a>
					<hr>
					<h2>Type</h2>
					<div class="small-12 medium-8 medium-offset-2">
						<h1>Heading 1</h1>
						<h2>Heading 2</h2>
						<h3>Heading 3</h3>
						<h4>Heading 4</h4>
						<h5>Heading 5</h5>
						<h6>Heading 6</h6>
						<p>Body copy</p>
						<small>Small</small>
						<a href="">Link</a>
					</div>
					
					<a href="#buttons" name="buttons"></a>
					<hr>
					<h2>Buttons</h2>
					<div class="small-12 medium-8 medium-offset-2">
						<a href="" class="button">Button</a>
						<a href="" class="button error">Error</a>
						<a href="" class="button warning">Warning</a>
						<a href="" class="button success">Success</a>
						<a href="" class="button neutral">Neutral</a>
						<a href="" class="button white">White</a>
						<a href="" class="button disabled">Disabled</a>
						<br>
						<br>
						<a href="" class="button">Regular</a>
						<a href="" class="button small">Small</a>
						<a href="" class="button tiny">Tiny</a>
						<br>
						<br>
						<a href="" class="button strong">Regular Strong</a>
						<a href="" class="button small strong">Small Strong</a>
						<a href="" class="button tiny strong">Tiny Strong</a>
						<br>
						<br>
						<a href="" class="button full">Full Width</a>
						<br>
						<a href="" class="button full strong">Full Width Strong</a>
					</div>
					
					<a href="#btn-grp" name="btn-grp"></a>
					<hr>
					<h2>Button Groups</h2>
					<div class="small-12 medium-8 medium-offset-2">
						<div class="button-group">
							<a href="" class="button">Button A</a>
							<a href="" class="button warning">Button B</a>
							<a href="" class="button success selected">Button C</a>
						</div>
						<div class="button-group">
							<a href="" class="button white">Button A</a>
							<a href="" class="button white">Button B</a>
							<a href="" class="button white selected">Button C</a>
						</div>
					</div>
					
					<a href="#dropdowns" name="dropdowns"></a>
					<hr>
					<h2>Dropdowns</h2>
					<div class="small-12 medium-8 medium-offset-2">
						<div class="dropdown">
							<a href="" class="button dropdown-toggle">Dropdown &#9662;</a>
							<ul class="dropdown-menu">
								<li><a href="">Option A</a></li>
								<li><a href="">Option B</a></li>
							</ul>
						</div>
					</div>
				</section>
				
				<section class="row">
					<a href="#searchbar" name="searchbar"></a>
					<hr>
					<h2>Search Bar</h2>
					<div class="small-12">
						<div class="search-bar clearfix">
							<div class="search-field small-10 columns">
								<span>&#128270;</span>
								<input type="text" placeholder="Ano hanap mo?">
								<div class="dropdown">
									<a href="" class="button white small dropdown-toggle"><strong>All Philippines</strong> &#9662;</a>
									<ul class="dropdown-menu small">
										<li><a href="" class="active">Current Location</a></li>
										<li><a href="">Metro Manila</a></li>
										<li><a href="">Batangas</a></li>
										<li><a href="">Benguet</a></li>
									</ul>
								</div>
							</div>
							<div class="small-2 columns">
								<a href="" class="button success full">Search</a>
							</div>
						</div>
					</div>
				</section>
				
				<section class="row">
					<a href="#contentbox" name="contentbox"></a>
					<hr>
					<h2>Content Box</h2>
					<div class="small-12">
						<div class="card small-6 medium-4 large-3">
							<div class="card-header">
								Hello!
							</div>
							<div class="card-body">
								<p>Body text here.</p>
								<a href="" class="button success">Yay!</a>
							</div>
						</div>
						<div class="card small-6 medium-7 large-5">
							<div class="card-header">
								<small>22 views</small>
							</div>
							<div class="card-body">
								<div class="table-data">
									<div class="data-set">
										<div class="label"><strong>Price</strong></div>
										<div><strong>Php 1,800.00</strong></div>
									</div>
									<div class="data-set">
										<div class="label">Contact Number</div>
										<div><a href="" class="button success"><strong>0917-588-05xx</strong></a></div>
									</div>
									<div class="data-set">
										<div class="label">Private Message</div>
										<div><a href="" class="button tiny white">Send this seller a message</a></div>
									</div>
									<div class="data-set">
										<div class="label">Date Posted</div>
										<div>March 28, 2015</div>
									</div>
									<div class="data-set">
										<div class="label">Condition</div>
										<div>2nd Hand (used)</div>
									</div>
									<div class="data-set">
										<div class="label">Location</div>
										<div><a href="">Taguig City, Metro Manila</a></div>
									</div>
								</div>
							</div>
							<div class="card-actions">
								<a href="" class="button white small full">More Ad Details</a>
							</div>
						</div>
						<div class="card small-6 medium-4 large-3">
							<div>
								<img src="http://placehold.it/300x200" alt="">
							</div>
							<div class="card-body item">
								<div class="item-name"><strong><a href="">iPhone 5 32GB Black very smooth</a></strong></div>
								<div class="item-price"><strong>Php 12,990</strong></div>
								<div class="item-details">
									<small>Posted 6 minutes ago</small>
									<small>Paranaque City, Metro Manila</small>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="row">
					<a href="#listing" name="listing"></a>
					<hr>
					<h2>Sample Listing Area</h2>
					<div class="card small-6 medium-3 large-3">
						<div>
							<img src="http://placehold.it/300x200" alt="">
						</div>
						<div class="card-body item">
							<div class="item-name"><strong><a href="">iPhone 5 32GB Black very smooth</a></strong></div>
							<div class="item-price"><strong>Php 12,990</strong></div>
							<div class="item-details">
								<small>Posted 6 minutes ago</small>
								<small>Paranaque City, Metro Manila</small>
							</div>
						</div>
					</div>
					<div class="card small-6 medium-3 large-3">
						<div>
							<img src="http://placehold.it/300x200" alt="">
						</div>
						<div class="card-body item">
							<div class="item-name"><strong><a href="">iPhone 5 32GB Black very smooth</a></strong></div>
							<div class="item-price"><strong>Php 12,990</strong></div>
							<div class="item-details">
								<small>Posted 6 minutes ago</small>
								<small>Paranaque City, Metro Manila</small>
							</div>
						</div>
					</div>
					<div class="card small-6 medium-3 large-3">
						<div>
							<img src="http://placehold.it/300x200" alt="">
						</div>
						<div class="card-body item">
							<div class="item-name"><strong><a href="">iPhone 5 32GB Black very smooth</a></strong></div>
							<div class="item-price"><strong>Php 12,990</strong></div>
							<div class="item-details">
								<small>Posted 6 minutes ago</small>
								<small>Paranaque City, Metro Manila</small>
							</div>
						</div>
					</div>
					<div class="card small-6 medium-3 large-3">
						<div>
							<img src="http://placehold.it/300x200" alt="">
						</div>
						<div class="card-body item">
							<div class="item-name"><strong><a href="">iPhone 5 32GB Black very smooth</a></strong></div>
							<div class="item-price"><strong>Php 12,990</strong></div>
							<div class="item-details">
								<small>Posted 6 minutes ago</small>
								<small>Paranaque City, Metro Manila</small>
							</div>
						</div>
					</div>
					<div class="card small-6 medium-3 large-3">
						<div>
							<img src="http://placehold.it/300x200" alt="">
						</div>
						<div class="card-body item">
							<div class="item-name"><strong><a href="">iPhone 5 32GB Black very smooth</a></strong></div>
							<div class="item-price"><strong>Php 12,990</strong></div>
							<div class="item-details">
								<small>Posted 6 minutes ago</small>
								<small>Paranaque City, Metro Manila</small>
							</div>
						</div>
					</div>
					<div class="card small-6 medium-3 large-3">
						<div>
							<img src="http://placehold.it/300x200" alt="">
						</div>
						<div class="card-body item">
							<div class="item-name"><strong><a href="">iPhone 5 32GB Black very smooth</a></strong></div>
							<div class="item-price"><strong>Php 12,990</strong></div>
							<div class="item-details">
								<small>Posted 6 minutes ago</small>
								<small>Paranaque City, Metro Manila</small>
							</div>
						</div>
					</div>
				</section>
				<section class="row">
					<hr>
					<h2>Icons</h2>
				</section>
				<section class="row">
					<hr>
					<h2>Navigation</h2>
				</section>
				<section class="row">
					<hr>
					<h2>Tabs</h2>
				</section>
			</div>
		</div>

		

		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="js/ui.js"></script>

	</body>
</html>