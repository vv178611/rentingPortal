<div class="row" style="margin: 15px 100px 15px 100px;">
	<aside class="col-sm-2">
		<div class="card">
			<article class="card-group-item">
				<header class="card-header">
					<h6 class="title">Property Type</h6>
				</header>
				<div class="filter-content">
					<div class="card-body">
						<form action="/project/components/content/content.php" method="post">
							<label class="form-check">
								<!-- <span class="form-check-label">Location</span> -->
								<input type="hidden" id="last_search_location" name="last_search">
							</label>
							<label class="form-check">
							  	<input class="form-check-input" type="checkbox" value="no" name="flat">
							  	<span class="form-check-label">Flat</span>
							</label>
							<label class="form-check">
						  		<input class="form-check-input" type="checkbox" value="no" name="pg">
						  		<span class="form-check-label">PG</span>
							</label>
							<label class="form-check">
						  		<input class="form-check-input" type="checkbox" value="no" name="villa">
						  		<span class="form-check-label">Villa</span>
							</label>
						
					</div>
				</div>
			</article>

			<article class="card-group-item">
				<header class="card-header">
					<h6 class="title">BHK</h6>
				</header>
				<div class="filter-content">
					<div class="card-body">
						<label class="form-check">
					  		<input class="form-check-input" type="radio" name="bhk1" value="">
					  		<span class="form-check-label">1 BHK</span>
						</label>
						<label class="form-check">
						  	<input class="form-check-input" type="radio" name="bhk2" value="">
						  	<span class="form-check-label">2 BHK</span>
						</label>
						<label class="form-check">
						  	<input class="form-check-input" type="radio" name="bhk3" value="">
						  	<span class="form-check-label">3 BHK</span>
						</label>
					</div>
				</div>
				<footer class="card-footer text-center">
					<button class="btn btn-warning" id = "filterbtn">Filter</button>
				</footer>
				</form>
			</article>
		</div>
	</aside>
	<!-- Rest code in card.php -->
