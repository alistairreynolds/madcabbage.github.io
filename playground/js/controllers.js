// Main page controller which will set the title and active menu item
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
	this.currentTab = 0;

	// Set the current tab being used
	this.setTab = function(tab){
		this.currentTab = tab;
		for(item of this.items){
			item.visible = false;
		};
		this.items[tab].visible = true;
	}
});