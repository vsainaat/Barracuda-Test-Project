$(window).load(function(){
	
	$('.multi-field-wrapper').each(function () {
        var $wrapper = $('.multi-fields', this);
        var x = 1;
        $(".add-field", $(this)).click(function (e) {
            x++;
			
			$($wrapper).append('<div class="column-labels"><label class="product-details">Product</label><label class="product-quantity">Quantity</label><label class="product-price">Price</label></div>');
				
			$($wrapper).append('<div class="multi-field-wrapper"><div class="product"><div class="product-details"><div class="multi-fields"><div class="multi-field"><form id="dropdowns"><label>Select your product: </label><br/><br/><label>Product:</label><br/><select id="product1" class="product1" name="product"><option value="000">-(Select)-</option></select><br /><label>Deployment Option:</label><br/><select id="deployment1" class="deployment1" name="network"><option value="000">-(Select)-</option></select><br /><label>Product Model:</label><br/><select id="model1" class="model1" name="model"><option value="000">-(Select)-</option></select><br/></form></div></div></div><div class="product-quantity"><form><label>Quantity: </label><input type="number" value="1" id="quantity1" class="quantity1" min="1"/></form></div><div class="product-price"><input type="text" id="price1" class="price1" name="price" value="Price" /></div><a href="#" class="remove_field">Remove</a></div></div>');
						
				
				var myJson = {
						"products": [
							{
								"product_name": "Barracuda Backup",
								"product_id": "1",
								"deployment_methods": 
								[
									{
										"deployment_name": "Appliance",
										"deployment_id": "1",
										"product_models": [
											{
												"model_name": "B190",
												"model_id": "1",
												"model_price": 500
											},
											{
												"model_name": "B290",
												"model_id": "2",
												"model_price": 1500
											},
											{
												"model_name": "B390",
												"model_id": "3",
												"model_price": 2500						
											}
										]
									},
									{
										"deployment_name": "Cloud Subscription",
										"deployment_id": "3",
										"product_models": [
											{
												"model_name": "Cloud-to-Cloud Backup",
												"model_id": "4",
												"model_price": 500
											}
										]
									}
								]
							},
							{
								"product_name": "NextGen Firewall",
								"product_id": "2",
								"deployment_methods":
								[
									{
										"deployment_name": "Appliance",
										"deployment_id": "1.",
										"product_models":
										[
											{
												"model_name": "FW100",
												"model_id": "5",
												"model_price": 1000
											},
											{
												"model_name": "FW200",
												"model_id": "6",
												"model_price": 1500
											},
											{
												"model_name": "FW300",
												"model_id": "7",
												"model_price": 3500
											},
											{
												"model_name": "FW400",
												"model_id": "8",
												"model_price": 5000
											}
										]
									},
									{
										"deployment_name": "Virtual Appliance",
										"deployment_id": "2",
										"product_models":
										[
											{
												"model_name": "FW100-V",
												"model_id": "9",
												"model_price": 500
											},
											{
												"model_name": "FW200-V",
												"model_id": "10",
												"model_price": 7500
											},
											{
												"model_name": "FW300-V",
												"model_id": "11",
												"model_price": 1750
											},
											{
												"model_name": "FW400-V",
												"model_id": "12",
												"model_price": 2500
											}
										]
									}
									
								]
							},
							
							{
								"product_name": "Email Security Gateway",
								"product_id": "3",
								"deployment_methods":
								[
									{
										"deployment_name": ".Appliance",
										"deployment_id": ".1",
										"product_models":
										[
											{
												"model_name": "EM100",
												"model_id": "13",
												"model_price": 1000
											},
											{
												"model_name": "EM200",
												"model_id": "14",
												"model_price": 2000
											}
										]
									},
									{
										"deployment_name": "Virtual Appliance.",
										"deployment_id": "2.",
										"product_models":
										[
											{
												"model_name": "EM100-V",
												"model_id": "15",
												"model_price": 500
											},
											{
												"model_name": "EM200-V",
												"model_id": "16",
												"model_price": 1500
											}
										]
									}
									
								]
							}
						]
					}

					
					
					// Iterating through the Json data, each product is appended as a dropdown value for the Select Product dropdown option
		$.each(myJson.products, function (index, value) {
			$('.product1').append('<option value="'+value.product_id+'">'+value.product_name+'</option>');
		});
		
		//On change of product selection, respective deployment options for that product is displayed in the next dropdown
		$('.product1').on('change', function(){
			
			for(var i = 0; i < myJson.products.length; i++)
			{
			  
			  if(myJson.products[i].product_id == $(this).val())
			  {
				
				 $.each(myJson.products[i].deployment_methods, function (index, value) {
					$('.deployment1').append('<option value="'+value.deployment_id+'">'+value.deployment_name+'</option>');
				});
				}
			}
		});

		/* getModels() function iterated through json array and retrieves deployment Ids and related model Ids and 
			inset them in the models array. the models array consists of all models for a partcular deployment option */
		function getModels() {
			var models = [];
			
			for(var i = 0; i < myJson.products.length; i++) {
			  var product = myJson.products[i];
			  for(var j = 0; j < product.deployment_methods.length; j++) {
				  var deployment_method = product.deployment_methods[j];
				  for (var k = 0; k < deployment_method.product_models.length; k++) {
					var product_model = deployment_method.product_models[k];
					models.push({
						deploymentId: deployment_method.deployment_id,
						deploymentName: deployment_method.deployment_name,
						modelId: product_model.model_id,
						modelName: product_model.model_name,
						modelPrice: product_model.model_price
						
					});
					
				  }
			  }
			}
			return models;
		}

		/* On change of the deployment selection, models for the particular deployment is obtained from getModels() function
			and are appended to the product model dropdown list */
		
		$('.deployment1').on('change', function(){
		   
		   var models = getModels();
		   var deploymentId = $(this).val();
		   
			$.each(models, function (index, value) {
			  if (value.deploymentId == deploymentId) {
				  $('.model1').append('<option value="'+value.modelId +'">'+value.modelName+'</option>');
			  }
			  });
		  });
		  
		  
		  // On selection of product model, respective proce is displayed and also added to proice array to calculate total price later
		});
		});
		});