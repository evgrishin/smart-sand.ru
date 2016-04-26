/**
 * 
 */

function dataPurchaseFast(order, phone, id_product, name, price,quantity,variant, brand, category, shipping)
{	
	var now = new Date();
	if (order == "" && phone !="")
		order = now.getDate()+'-'+now.getMonth()+'-'+now.getFullYear()+'_'+phone+'_'+id_product;
	if (variant != '')
		order += '_'+variant;
	
	dataAdd(id_product,name,price,variant,quantity,brand,category);
	
	window.dataLayer.push({
	    "ecommerce": {
	        "purchase": {
	            "actionField": {
	                "id" : order,
	            },
	            "products": [
	                {
	                    "id": id_product,
	                    "name": name,
	                    "price": price,
	                    "brand": brand,
	                    "category": category,
	                    "variant": variant,
	                    "revenue": price,
	                    "shipping": shipping
	                }
	            ]
	        }
	    }
	});
	/*
	ga('ec:setAction', 'purchase', {
		  'id': order,
		  'affiliation': location.host,
		  'revenue': price+shipping,
		  'shipping': shipping
		});

	ga('send', 'pageview');
	*/  
}	

function dataDisplay(id_product,name, variant,price,category,brand,currency,host)
{
	if (host=="")
		host = location.host;
	if (currency=="")
		currency = "RUB";
	
	window.dataLayer.push({
	   "ecommerce": {
	   	"currencyCode": currency,
	       "detail": {
	           "actionField": {
	               "affiliation": host
	           },
	           "products": [{
		                    "id": id_product,
		                    "name": name,
		                    "price": price,
		                    "brand": brand,
		                    "category": category,
		                    "variant": variant
		                }]
		        }
		    }
	});
	/*
	ga('ec:addProduct', {
		  'id': id_product,
		  'name': name, 
		  'category': category,   
		  'brand': brand,   
		  'variant': variant  
		});
		 
	ga('ec:setAction', 'detail');
	ga('send', 'pageview');
	*/
}

function dataAdd(id_product,name,price,variant,quantity,brand,category)
{
	window.dataLayer.push({
	    "ecommerce": {
	        "add": {
	            "products": [
	                {
	                    "id": id_product,
	                    "name": name,
	                    "price": price,
	                    "brand": brand,
	                    "category": category,
	                    "variant": variant,
	                    "quantity": quantity
	                }
	            ]
	        }
	    }
	});		
	/*
	ga('ec:addProduct', {
		  'id': id_product,
		  'name': name,
		  'category': category,
		  'brand': brand,
		  'variant': variant,
		  'price': price,
		  'quantity': quantity
		});
	ga('ec:setAction', 'add');
	ga('send', 'event', 'UX', 'click', 'add to cart');
	*/ 
}

function dataRemove(id, name, variant, quantity)
{
/*
	window.dataLayer.push({
	    "ecommerce": {
	        "remove": {
	            "products": [
	                {
	                    "id": id,
	                    "name": name,
	                    "variant": variant,
	                    "quantity": quantity
	                }
	            ]
	        }
	    }
	});
	*/		
}	
