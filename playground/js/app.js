// Setup a router
var app = angular.module('Playground', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
  $routeProvider

    // Create each route destination
    .when('/about', {
      templateUrl: 'templates/pages/about/index.html', controller: "PageCtrl"
    })
    .when('/portfolio', {
      templateUrl: 'templates/pages/portfilio/index.html', controller: "PageCtrl"
    })
    .when('/',{
		templateUrl: 'templates/pages/about/index.html', controller: "PageCtrl"
    })
    .otherwise('/',{
    	templateUrl: 'templates/pages/about/index.html', controller: "PageCtrl"
    })
  ;

}]);
