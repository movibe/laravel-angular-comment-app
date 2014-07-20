var commentApp = angular.module('commentApp', ['mainCtrl', 'commentService']);

var xhReq = new XMLHttpRequest();
xhReq.open("GET", "//" + window.location.hostname + "/api/csrf", false);
xhReq.send(null);

commentApp.constant("CSRF_TOKEN", xhReq.responseText);

commentApp.run(['$http', 'CSRF_TOKEN', function ($http, CSRF_TOKEN) {
    $http.defaults.headers.common['X-Csrf-Token'] = CSRF_TOKEN;
}]);

commentApp
    .directive('formComment',function(){
        return {
            restrict:  'E',
            templateUrl: 'partials/form-comment.html'
        }
    });