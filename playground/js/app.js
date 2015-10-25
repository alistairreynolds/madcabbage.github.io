angular.module('Playground', ['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider

    .when('/about', {
      templateUrl: 'templates/pages/about/index.html'
    })
    .when('/portfolio', {
      templateUrl: 'templates/pages/portfilio/index.html'
    })
    .when('/',{
		templateUrl: 'templates/pages/about/index.html'
    })
    .otherwise('/',{
    	templateUrl: 'templates/pages/about/index.html'
    })
  ;

}]);
