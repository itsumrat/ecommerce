<?php require_once 'partials/_header.php'; ?>

	<div class="container">
		<div class="card">
			<table class="table table-hover shopping-cart-wrap">
				<thead class="text-muted">
				<tr>
				  <th scope="col">Product</th>
				  <th scope="col" width="120">Quantity</th>
				  <th scope="col" width="120">Price</th>
				  <th scope="col" width="200" class="text-right">Action</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>
						<figure class="media">
							<div class="img-wrap"><img src="http://img.tjskl.org.cn/pic/z2577d9d-200x200-1/pinarello_lungavita_2010_single_speed_bike.jpg" class="img-thumbnail img-sm"></div>
							<figcaption class="media-body">
								<h6 class="title text-truncate">Product name goes here </h6>
								<dl class="param param-inline small">
								  <dt>Size: </dt>
								  <dd>XXL</dd>
								</dl>
								<dl class="param param-inline small">
								  <dt>Color: </dt>
								  <dd>Orange color</dd>
								</dl>
							</figcaption>
						</figure> 
					</td>
					<td> 
						<select class="form-control">
							<option>1</option>
							<option>2</option>	
							<option>3</option>	
							<option>4</option>	
						</select> 
					</td>
					<td> 
						<div class="price-wrap"> 
							<var class="price">USD 145</var> 
							<small class="text-muted">(USD5 each)</small> 
						</div> <!-- price-wrap .// -->
					</td>
					<td class="text-right"> 
					<a href="" class="btn btn-outline-danger"> × Remove</a>
					</td>
				</tr>
			</tbody>
			</table>
		</div> <!-- card.// -->
	</div>

<?php require_once 'partials/_footer.php'; ?>