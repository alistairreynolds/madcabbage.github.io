// Setup a router
var app = angular.module('Playground', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
  $routeProvider

    // Create each route destination
    .when('/about', {
      templateUrl: 'templates/pages/about/index.html', controller: 'PageCtrl'
    })
    .when('/portfolio', {
      templateUrl: 'templates/pages/portfolio/index.html', controller: 'PageCtrl'
    })
    .when('/technologies',{
      templateUrl: 'templates/pages/technologies/index.html', controller: 'PageCtrl'
    })
    .when('/technologies/angular',{
      templateUrl: 'templates/pages/technologies/angular.html', controller: 'PageCtrl'
    })
    .when('/',{
      redirectTo: '/about'
    })
    .when('#',{
      redirectTo: '/about'
    })        
    .otherwise('/',{
    	redirectTo: 'about'
    })
  ;

}]);


