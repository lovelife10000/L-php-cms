/**
 * Created by v_lljunli on 2017/5/10.
 */
app.controller('modifyPassword', ['$scope', '$http', 'modifyPasswordService', function ($scope, $http, modifyPasswordService) {

  $scope.passwordModify = function () {
    passwordModifyService.get($scope.adminUser_password,$scope.adminUser_repassword).then(function success(res) {
      if(res.data.code===1){
        $('#password_modify_modal').modal({
          keyboard: true
        });
      }
    }, function error(res) {

    });


  };

}]);