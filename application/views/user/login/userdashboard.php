<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-8">
				<h2>Stock Market Data</h2>
				<table class="table">
			    <thead>
			      <tr>
			        <th>Company</th>
			        <th>Ticker</th>
			        <th>Market Price</th>
			        <th>Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php foreach ($stock_market_data as $key => $value) { ?>
			    		<tr>
			    			<td><?php echo $value->company_name ?></td>
			    			<td><?php echo $value->ticker ?></td>
			    			<td><?php echo $value->maret_price ?></td>
			    			<td><a href="" class="btn btn-primary">Buy</a>/<a href="" class="btn btn-primary">Sell</a></td>
			      		</tr>
			    	<?php } ?>
			  	</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
