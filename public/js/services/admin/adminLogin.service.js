/**
 * Created by v_lljunli on 2017/5/10.
 */
var app = angular.module('myApp', ['ngSanitize']);
// , function($interpolateProvider) {
//     $interpolateProvider.startSymbol('<%');
//     $interpolateProvider.endSymbol('%>');
// }


app.factory('adminLoginService', ['$http', function ($http) {
    return {
        get: function (username, password, code) {

            return $http({
                method: 'POST',
                url: 'admin_login',
                data: $.param({
                    username: username,
                    password: password,
                    code: code
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
        updateCode: function () {
            return $http({
                method: 'POST',
                url: 'admin_login_update_code',
                data: $.param({
                    data: Math.random()
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },


        getCode: function () {
            return $http({
                method: 'POST',
                url: 'admin_login_get_code',
                data: $.param({
                    data: Math.random()
                }),
                headers: {'content-type': 'application/x-www-form-urlencoded'}
            });
        },
    }
}]);