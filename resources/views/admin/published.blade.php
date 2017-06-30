@include('admin.header')
<div class="content-wrapper" ng-controller="published" ng-init="getPublishedByLimitAndCurrentPage(5, 1)">
  {{--@include('modal/remove_one_document_modal')--}}
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
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{$item}}</h3>

          </div>

          <div class="box-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="dataTables_length" id=""><label>每页显示&nbsp;&nbsp;
                    <select name="document_limit" aria-controls="" class="form-control input-sm"
                            ng-model="limit" ng-change="getPublishedByLimitAndCurrentPage(limit,1)">
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="50">50</option>
                    </select>&nbsp;&nbsp;条文档</label></div>
              </div>
              <div class="col-sm-6">
                <div id="example1_filter" class="dataTables_filter"><label>文档搜索:<input type="search"
                                                                                       class="form-control input-sm"
                                                                                       placeholder=""
                                                                                       aria-controls="example1"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <table class="table table-bordered">
                <tr>

                  <th>文档标题</th>
                  <th>发布时间</th>
                  <th>分类</th>
                  <th>作者</th>
                  <th>来源</th>
                  <th>类型</th>
                  <th>推荐</th>
                  <th>热门</th>
                  <th>浏览量</th>
                  <th>收藏数</th>
                  <th>点赞数</th>
                  <th>评论数</th>
                  <th>操作</th>
                </tr>

                <tr ng-repeat="x in data">

                  <td ng-bind="x.title"></td>
                  <td ng-bind='x.published_date | date:"yyyy-MM-dd HH:mm:ss"'></td>
                  <td ng-bind="x.category"></td>
                  <td ng-bind="x.author"></td>
                  <td ng-bind="x.from"></td>
                  <td ng-bind="x.type"></td>
                  <td ng-bind="x.recommend"></td>
                  <td ng-bind="x.hot"></td>
                  <td ng-bind="x.view"></td>
                  <td ng-bind="x.collection"></td>
                  <td ng-bind="x.like"></td>
                  <td ng-bind="x.view"></td>
                  <td>
                    <button type="button" class="btn btn-primary btn-xs btn-flat" ng-click="editDoc(x)">编辑</button>
                    <button type="button" class="btn btn-info btn-xs btn-flat" ng-show="x.recommend=='否'? true : false" ng-click="recommend('true',x.id,x)">推荐</button>
                    <button type="button" class="btn btn-danger btn-xs btn-flat" ng-show="x.recommend=='是'? true : false" ng-click="recommend('false',x.id,x)">取消推荐</button>
                    <button type="button" class="btn btn-info btn-xs btn-flat" ng-if="x.hot=='否'? true : false" ng-click="hot('true',x.id)">热门</button>
                    <button type="button" class="btn btn-danger btn-xs btn-flat" ng-if="x.hot=='是'? true : false" ng-click="hot('false',x.id)">取消热门</button>
                    <button type="button" class="btn btn-warning btn-xs btn-flat" ng-click="removeOneDoc(x)">删除</button>
                    <a type="button" class="btn btn-info btn-xs btn-flat" href="http://www.baidu.com">查看</a>
                  </td>
                </tr>


              </table>

            </div>


          </div>

          <div class="box-footer clearfix">
            <div class="row">
              <div class="col-sm-5">
                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                  共@{{count}}条文档
                </div>
              </div>
              <div class="col-sm-7">
                <div class="dataTables_paginate paging_simple_numbers" id="">
                  <ul class="pagination">
                    <li class="paginate_button previous" id=""
                        ng-click="getPublishedByLimitAndCurrentPage(limit,currentPage-1)"
                        ng-class="{'disabled':currentPage<=1}">
                      <a href="#" aria-controls="example1" tabindex="0">&laquo;</a>
                    </li>
                    <li class="paginate_button" ng-click="getPublishedByLimitAndCurrentPage(limit,1)"
                        ng-hide="currentPage==1 || currentPage==2">
                      <a href="#" tabindex="0">1</a>
                    </li>
                    <li class="paginate_button" ng-show="currentPage>3">
                      <a href="#" tabindex="0">...</a>
                    </li>
                    <li class="paginate_button" ng-click="getPublishedByLimitAndCurrentPage(limit,currentPage-1)"
                        ng-show="currentPage>1 ">
                      <a href="#" tabindex="0" ng-bind="currentPage-1"></a>
                    </li>
                    <li class="paginate_button active" ng-click="getPublishedByLimitAndCurrentPage(limit,currentPage)">
                      <a href="#" tabindex="0" ng-bind="currentPage"></a>
                    </li>
                    <li class="paginate_button" ng-click="getPublishedByLimitAndCurrentPage(limit,currentPage+1)"
                        ng-show="currentPage<allPage-1">
                      <a href="#" tabindex="0" ng-bind="currentPage+1"></a>
                    </li>
                    <li class="paginate_button" ng-show="currentPage<allPage-2">
                      <a href="#" tabindex="0">...</a>
                    </li>
                    <li class="paginate_button" ng-click="getPublishedByLimitAndCurrentPage(limit,allPage)"
                        ng-show="currentPage<allPage">
                      <a href="#" tabindex="0" ng-bind="allPage"></a>
                    </li>
                    <li class="paginate_button next" id="" ng-click="getPublishedByLimitAndCurrentPage(limit,currentPage+1)"
                        ng-class="{'disabled':currentPage>=allPage}">
                      <a href="#" tabindex="0">&raquo;</a>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

@include('admin.footer')