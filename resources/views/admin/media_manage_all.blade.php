@include('admin.header')
<div class="content-wrapper" id="media_manage_all" ng-controller="mediaManageAll" ng-init="getAllMedia()">


    <section class="content-header">
        <h1>
            {{$cms}}
            <small>{{$item}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
            <li><a href="#">{{$category }}</a></li>
            <li class="active">{{$item}}</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <a href="" style="    display: inline-block;margin-left: 10px;" ng-click="changeListStyle(1)" ng-class="{'media_list_active':!listStyle}"><i class="fa fa-list"></i></a>
                    <a href="" style="    display: inline-block;margin:0 10px;" ng-click="changeListStyle(0)" ng-class="{'media_list_active':listStyle}"><i class="fa fa-th"></i></a>
                    <a href="" role="button" class="btn btn-primary btn-sm" ng-click="gotoMediaManageUpload()"><span class="fa fa-plus-square" aria-hidden="true">&nbsp;</span>添加媒体</a>


                    <select class="form-control input-sm"
                            style="width: 16%;display: inline-block;margin-left: 10px;" name="media_type"
                            ng-model="media_type" ng-options="x.id as x.name for x in mediaTypeOptions">


                    </select>
                    <select class="form-control input-sm"
                            style="width: 16%;display: inline-block;margin-left: 10px;" name="unique_year_month"
                            ng-model="unique_year_month" ng-options="x.id as x.name for x in uniqueYearMonthOptions">

                    </select>
                    <button href="" role="button" class="btn btn-primary btn-sm" ng-click="filterData()">筛选</button>
                    <div class="pull-right">

                        <form action="/admin/manage/contentList" name="searchForm" class="ng-pristine ng-valid">
                            <div class="input-group" >
                                <input type="text" name="searchKey" id="searchInput"
                                       class="form-control input-sm pull-right"
                                       placeholder="请输入需要查询的关键字" value="">
                                <div class="input-group-btn" style="width: auto;">
                                    <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-search"></i>&nbsp;搜索
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <select class="form-control input-sm ng-pristine ng-untouched ng-valid"
                                style="width: 200px;display: inline-block;    margin-bottom: 10px;" name="status"
                                ng-model="status" ng-options="x.id as x.name for x in statusOptions">
                            <option value="">-- 批量操作 --</option>
                            <option value="">-- 永久删除 --</option>
                        </select>
                        <a href="" role="button" class="btn btn-default btn-sm" data-toggle="modal"
                           data-target="#banner_add_modal">应用</a>
                    </div>
                </div>
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$item}}</h3>
                    </div>


                    <div class="box-body table-responsive no-padding">
                        <table class="table table-bordered  table-striped" ng-if="listStyle">
                            <tr>
                                <th style="width: 10px"><input type="checkbox" class="minimal"></th>
                                <th>文件</th>
                                <th>作者</th>
                                <th>上传至</th>
                                <th>文件大小</th>
                                <th>上传日期</th>


                                <th>操作</th>
                            </tr>
                            <tr ng-repeat="x in data">

                                <td><input type="checkbox" class="minimal"></td>
                                <td style="width: 200px">


                                    <div class="media_manage_all_list"
                                         ng-if="x.type_real==='jpeg' || x.type_real==='jpg' || x.type_real==='png' || x.type_real==='gif'">
                                        <img ng-src="@{{ x.url | urlCut}}/@{{x.filename_now}}" title=""
                                             alt="Product Image">@{{x.filename_now}}
                                    </div>
                                    <div class="media_manage_all_list"
                                         ng-if="x.type_real==='zip' || x.type_real==='rar' || x.type_real==='pdf'">
                                        <img ng-src="@{{ x.url | urlCutNoNumber}}/@{{ x.type_real }}-default.jpg"
                                             title=""
                                             alt="Product Image">@{{x.filename_now}}
                                    </div>

                                </td>
                                <td>@{{x.admin_user}}</td>
                                <td>@{{x.url}}</td>
                                <td>@{{x.size | sizeFormat}}</td>
                                <td>@{{x.upload_time}}</td>


                                <td>
                                    <button type="button" class="btn btn-primary btn-xs btn-flat"
                                            data-toggle="modal"
                                            data-target="#category_all_edit_modal" ng-click="edit(x)">编辑
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs btn-flat" data-toggle="modal"
                                            data-target="#category_all_remove_modal" ng-click="remove(x)">删除
                                    </button>
                                </td>
                            </tr>

                        </table>
                        <div class=""  ng-if="!listStyle" ng-repeat="x in data">
                            <div class="col-lg-2 col-xs-6">
                                <div class="small-box bg-white">
                                    <img ng-src="@{{ x.url | urlCut}}/@{{x.filename_now}}"
                                         title=""
                                         alt="Product Image" ng-if="x.type_real==='jpeg' || x.type_real==='jpg' || x.type_real==='png' || x.type_real==='gif'">
                                    <img ng-src="@{{ x.url | urlCutNoNumber}}/@{{ x.type_real }}-default.jpg"
                                         title=""
                                         alt="Product Image" ng-if="x.type_real==='zip' || x.type_real==='rar' || x.type_real==='pdf'">

                                    <a href="javascript:void(0)" class="small-box-footer">
                                        @{{x.filename_now}}
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right" ng-click="addAdminUserGroup()">添加
                        </button>
                    </div>


                </div>
            </div>

        </div>

    </section>

</div>


@include('admin.footer')