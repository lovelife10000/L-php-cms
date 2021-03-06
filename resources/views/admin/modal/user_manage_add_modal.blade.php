<!-- 模态框（Modal） -->
<div class="modal fade" id="user_manage_add_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true"
     ng-click="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">添加用户</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" onsubmit="return false;" name="myForm">
                    <div class="box-body">
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.userGroup.$invalid && !myForm.userGroup.$pristine,'has-success':myForm.userGroup.$valid && !myForm.userGroup.$pristine}">
                            <label class="col-sm-2 control-label">用户组</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="userGroup" ng-model="userGroup"
                                        ng-options="x.id as x.name for x in userGroupOptions" required>
                                    <option value="">-- 请选择 --</option>
                                </select>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.userGroup.$invalid && !myForm.userGroup.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，您必须选择一项！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.phone.$invalid && !myForm.phone.$pristine,'has-success':myForm.phone.$valid && !myForm.phone.$pristine,'has-error':isPhoneExist}">
                            <label for="" class="col-sm-2 control-label">手机</label>

                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control ng-invalid ng-touched ng-dirty ng-valid-parse ng-valid-required ng-invalid-pattern"
                                       id="" name="phone" ng-model="phone"
                                       placeholder="手机" ng-keyup="checkPhone()"  ng-change="checkPhone()" required
                                       ng-pattern="/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/">
                                <span class="help-block ng-hide"
                                      ng-show="myForm.phone.$invalid && !myForm.phone.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，手机号格式不正确！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.phone.$valid && !myForm.phone.$pristine && isPhoneExist">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    对不起，该手机号已经被注册！
                                </span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.phone.$valid && !myForm.phone.$pristine && !isPhoneExist"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，该手机号可用！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.email.$invalid && !myForm.email.$pristine,'has-success':myForm.email.$valid && !myForm.email.$pristine,'has-error':isEmailExist}">
                            <label for="adminUser_email" class="col-sm-2 control-label">邮箱</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="email"
                                       ng-model="email" placeholder="邮箱" required
                                       ng-pattern="/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/" ng-keyup="checkEmail()" ng-change="checkEmail()">
                                <span class="help-block ng-hide"
                                      ng-show="myForm.email.$invalid && !myForm.email.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，邮箱格式不正确！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.email.$valid && !myForm.email.$pristine && isEmailExist" ><span
                                            class="glyphicon glyphicon-remove"></span>对不起，该邮箱已经被注册！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.email.$valid && !myForm.email.$pristine && !isEmailExist"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，该邮箱可以注册！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.nickname.$invalid && !myForm.nickname.$pristine,'has-success':myForm.nickname.$valid && !myForm.nickname.$pristine}">
                            <label for="" class="col-sm-2 control-label">昵称</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="nickname"
                                       ng-model="nickname" placeholder="昵称" ng-pattern="/[\u4e00-\u9fa5\w]{2,20}/"
                                       ng-minlength="2" ng-maxlength="20" required>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.nickname.$invalid && !myForm.nickname.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，昵称必须为2~12个中文或字母或数字！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.nickname.$valid && !myForm.nickname.$pristine"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，该昵称可用！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.password.$invalid && !myForm.password.$pristine,'has-success':myForm.password.$valid && !myForm.password.$pristine}">
                            <label for="" class="col-sm-2 control-label">密码</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password"
                                       ng-model="password" placeholder="密码" ng-pattern="/^[_a-zA-Z]\w{5,21}$/"
                                       required>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.password.$invalid && !myForm.password.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，密码必须为字母或者下划线_开头，只能包含字母、数字、下划线_，且长度为6~22位！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.password.$valid && !myForm.password.$pristine"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，该密码可用！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.repassword.$invalid && !myForm.repassword.$pristine,'has-success':myForm.repassword.$valid && !myForm.repassword.$pristine}">
                            <label for="" class="col-sm-2 control-label">确认密码</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" pw-check="password" id=""
                                       name="repassword" ng-model="repassword" placeholder="确认密码"
                                       ng-pattern="/^[_a-zA-Z]\w{5,21}$/" required>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.repassword.$invalid && !myForm.repassword.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，两次输入密码不相同！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.repassword.$valid && !myForm.repassword.$pristine"><span
                                            class="glyphicon glyphicon-ok"></span>恭喜您，两次密码输入一致！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.status.$invalid && !myForm.status.$pristine,'has-success':myForm.status.$valid && !myForm.status.$pristine}">
                            <label class="col-sm-2 control-label">状态</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" ng-model="status"
                                        ng-options="x.id as x.name for x in statusOptions" required>
                                    <option value="">-- 请选择 --</option>
                                </select>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.status.$invalid && !myForm.status.$pristine"><span
                                            class="glyphicon glyphicon-remove"></span>对不起，您必须选择一项！</span>
                            </div>
                        </div>
                        <div class="form-group"
                             ng-class="{'has-warning':myForm.remark.$invalid && !myForm.remark.$pristine,'has-success':myForm.remark.$valid && !myForm.remark.$pristine}">
                            <label class="col-sm-2 control-label">备注</label>
                            <div class="col-sm-10">
            <textarea class="form-control" rows="3" placeholder="备注信息" name="remark"
                      ng-model="remark" required ng-minlength="2" ng-maxlength="30"></textarea>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.remark.$invalid && !myForm.remark.$pristine"> <span
                                            class="glyphicon glyphicon-remove"></span>请输入5~30个字符！</span>
                                <span class="help-block ng-hide"
                                      ng-show="myForm.remark.$valid && !myForm.remark.$pristine"> <span
                                            class="glyphicon glyphicon-ok"></span>符合要求！</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" ng-click="addUserCommit()">添加</button>
            </div>
        </div>

    </div>

</div>
