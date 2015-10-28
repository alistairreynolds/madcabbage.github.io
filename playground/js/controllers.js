PlaygroundApp.controller('AboutController', function ($scope) {
	currentPage.title = "About";
});

PlaygroundApp.controller('PortfilioController', function ($scope) {
	currentPage.title = "Portfilo";
});

PlaygroundApp.controller('PageController', function() {
	//$scope.tile = currentPage;
	console.log(currentPage.title);
});

PlaygroundApp.controller('DemoController', function(){
	this.items = demoItems;
})

/*
PlaygroundApp.controller('PageController', function () {
	this.title = "rawr";
	// Set the page to the current page property
	//this.page = currentPage;
});*/