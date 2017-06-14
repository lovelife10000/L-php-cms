/**
 * Created by v_lljunli on 2017/5/10.
 */
app.factory('adminUserGroupAllService', ['$http', function ($http) {
  return {

    /*
     * 获取用户组数据
     * */
    get: function () {
      return $http({
        method: 'GET',
        url: 'admin_user_group_get',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

    /*
     *修改用户组名称及修改用户组权限
     * */
    modify: function (name,power) {

      return $http({
        method: 'POST',
        url: '/admin/manage/user_manage/modify_power',
        data:$.param({
          name:name,
          power:power
        }),
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

    forbidden:function (name) {
      return $http({
        method: 'POST',
        data:$.param({
          name:name
        }),
        url: '/admin/manage/user_manage/forbidden_status',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },

    startUsing:function (name) {
      return $http({
        method: 'POST',
        data:$.param({
          name:name
        }),
        url: 'start_using',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      });
    },




  };
}]);