$('.menu').on('click', function () {
  $(this).toggleClass('active');
  $('.overlay').toggleClass('menu-open');
});

$('.nav a').on('click', function () {
  $('.menu').removeClass('active');
  $('.overlay').removeClass('menu-open');
});


var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider) {
    $routeProvider

        .when('/', {
            templateUrl : 'pages/home.html',
            controller  : 'HomeController'
        })

        .when('/blog', {
            templateUrl : 'pages/blog.html',
            controller  : 'BlogController'
        })

        .when('/about', {
            templateUrl : 'pages/about.html',
            controller  : 'AboutController'
        })

        .otherwise({redirectTo: '/'});
});

app.controller('HomeController', function($scope) {
    $scope.message = 'Hello from HomeController';
});

app.controller('BlogController', function($scope) {
    $scope.message = 'Hello from BlogController';
});

app.controller('AboutController', function($scope) {
    $scope.message = 'Hello from AboutController';
});