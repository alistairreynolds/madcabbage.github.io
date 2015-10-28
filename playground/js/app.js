// Setup a router
var PlaygroundApp = angular.module('PlaygroundApp', ['ngRoute']);
PlaygroundApp.config(['$routeProvider', function($routeProvider) {
  $routeProvider

    // Create each route destination
    .when('/about', {
      templateUrl: 'templates/pages/about/index.html'
    })
    .when('/portfolio', {
      templateUrl: 'templates/pages/portfolio/index.html'
    })
    .when('/technologies',{
      templateUrl: 'templates/pages/technologies/index.html'//, controller: 'PageCtrl', controllerAs: 'pageController'
    })
    .when('/technologies/angular',{
      templateUrl: 'templates/pages/technologies/angular.html'//, controller: 'PageCtrl', controllerAs: 'pageController'
    })
    .when('/',{
      redirectTo: '/about'
    })
    .when('#',{
      redirectTo: '/about'
    })        
    .otherwise({
    	redirectTo: '/about'
    })
  ;

}]);