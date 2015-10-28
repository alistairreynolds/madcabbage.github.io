PlaygroundApp.controller('PageController', function() {
	this.currentPage = 'About';

	this.setPage = function(page){
		this.currentPage = page;
	}

	this.isCurrentPage = function(pageCheck){
		return this.currentPage === pageCheck;
	}

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