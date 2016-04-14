# ROUTER

This Router allow you to match simple url with params.
Each param must be written like this : `{your_param}`. These params will be available in the $_GET variable.

For example, if you have the following route : 
`Router::get('/product/{product_id}','ProductController#showOne');` 
The url `http://your-site/product/32` will call the `showOne` method of the `ProductController`, with `$_GET['product_id'] = 32`.

You can call an anonymous function as callback : 
```php
Router::get('/product/{product_id}', function() { 
	echo 'do_somehting'
});
```
Or a controller with it method as callback (there is no need to instanciate the controller before the router) :

```php
Class ProductController {
	public function __construct() {}
	
	public function showOne {
		echo "show me this product : " . $_GET['product_id'];
	}
}

Router::get('/product/{product_id}', 'ProductController#showOne');
```

If you call the url `http://your-site.com/product/iphone-5`, it will print :
`show me this product : iphone-5`

### USE
```php 
Router::get('/your_route/your_sub_route/{your_param}', 'YourController#Method');

Router::get('/your_other_route/{your_param}/other_route/{other_param}', 'YourController#Method');

Router::post('/your_route', 'YourController#your_method');

Router::post('/your_route/{param}', function() {
	echo "do_something";
});
```
### EXAMPLES

url : *http://your-site/team*

Router :
```php
Router::get('/team', function() {
	echo "This is our team";
});

// Will print "this is our team"
```

Other examples
```php
Router::get('/home','PageController#showHome');

Router::post('/product/tablet/{product_id}/price/{price_id}','ProductController#showOnePrice');

Router::post('/product/tablet/{product_id}/prices', 'ProductController#showPrices');

Router::post('/product/tablet/{product_id}/prices', function() {
	echo "show me this goddamn prices!";
});
```
