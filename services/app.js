/**
 * Created by ADK on 10-12-2014.
 */

angular
    .module('app', [
        'ui.router'
    ])
    .config(['$urlRouterProvider','$stateProvider', function($urlRouterProvider, $stateProvider){
       $urlRouterProvider.otherwise('/');

        $stateProvider
            .state('home',{
                url: '/',
                templateUrl: 'partials/home.html'
            })
            .state('about',{
                url: '/about',
                templateUrl: 'partials/about.html'
            })
            .state('services',{
                url: '/services',
                templateUrl: 'partials/services.html'
            })
            .state('gallery',{
                url: '/gallery',
                templateUrl: 'partials/gallery.html'
            })
            .state('contact',{
                url: '/contact',
                templateUrl: 'partials/contact.html'
            })
    }])

