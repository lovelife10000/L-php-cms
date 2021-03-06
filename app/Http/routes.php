<?php

/*
 * 前台页面
 * */
Route::group(['namespace' => 'Index'], function () {

  //注册登录


  // Route::get('/user/login', 'loginController@view')->name('login');
// Route::get('/user/register', 'registerController@view')->name('register');
  Route::post('/register_before_send_email', 'registerController@register')->name('register_post');
  Route::post('/send_register_email', 'registerController@sendRegisterEmail')->name('send_register_email');
  //Route::post('/register_after_send_email', 'registerController@registerAfterSendEmail')->name('register_after_send_email');
  Route::post('/user/check_account', 'registerController@checkAccount')->name('check_account');

  //首页
  Route::get('/', 'indexController@view')->name('index');
  Route::get('/index/banner_get', 'indexController@indexBannerGet')->name('index_banner_get');
  Route::get('/index/get_index_list', 'indexController@getIndexList')->name('get_index_list');
  Route::get('/index/get_hot_doc', 'indexController@getHotDoc')->name('get_hot_doc');
  Route::get('/index/get_menu', 'indexController@getMenu')->name('get_menu');
  Route::get('/is_login', 'indexController@isLogin')->name('is_login');

  //前台用户中心
  Route::get('/me', 'meController@mePost')->name('me');
  Route::get('/me/get_user_info', 'meController@getUserInfo')->name('get_user_info');
  Route::get('/me/post', 'meController@mePost')->name('me_post');
  Route::get('/me/collection', 'meController@meCollection')->name('me_collection');
  Route::get('/me/answer', 'meController@meAnswer')->name('me_answer');
  Route::get('/me/comment', 'meController@meComment')->name('me_comment');
  Route::get('/me/subscribe', 'meController@meSubscribe')->name('me_subscribe');
  Route::get('/me/reward', 'meController@meReward')->name('me_reward');
  Route::get('/me/message', 'meController@meMessage')->name('me_message');
  Route::get('/me/setting', 'meController@meSetting')->name('me_setting');
  Route::get('/me/setting/password', 'meController@meSettingPassword')->name('me_setting_password');
  Route::get('/me/setting/avatar', 'meController@meSettingAvatar')->name('me_setting_avatar');
  Route::get('/user/{userId}', 'userController@view')->name('user_center');

  //tag页
  Route::post('/tag/get_doc_by_tag', 'tagController@getDocByTag')->name('get_doc_by_tag');
  Route::get('/tag/{tag}', 'tagController@view')->name('tag');

  //分类页
  Route::get('/category/get_tag', 'categoryController@getTag')->name('category_get_tag');
  Route::get('/category/{category}', 'categoryController@view')->name('category');
  Route::post('/category/get_doc_by_category', 'categoryController@getDocByCategory')->name('get_doc_by_category');
  Route::get('/category/{category}/page/{id?}', 'categoryController@view')->name('');


  //内容页
  Route::post('/index/get_content', 'contentController@getContent')->name('get_content');
  Route::get('/content/:title', 'webSettingController@view')->name('web_setting');
  Route::get('/user/find_password', 'findPasswordController@view')->name('find_password');
  Route::get('/{category}/{id}', 'contentController@view')->name('content')->where(['category' => '[a-z]+', 'id' => '[0-9]+']);
});

Route::group(['namespace' => 'Auth','middleware' => 'isLogin'], function () {
  Route::get('/admin', 'adminLoginController@gotoLogin')->name('admin');
  Route::get('/admin/admin_login', 'adminLoginController@view')->name('admin_login');
  Route::post('/admin/admin_login', 'adminLoginController@adminLogin')->name('admin_login_post');
  Route::post('/admin/admin_login_get_code', 'adminLoginController@getCode')->name('admin_login_post_get_code');
  Route::post('/admin/admin_login_update_code', 'adminLoginController@updateCode')->name('admin_login_post_update_code');

});
Route::group(['namespace' => 'Auth'], function () {
  Route::get('/admin/manage/admin_logout', 'adminLoginController@adminLogout')->name('admin_logout');
});
/*
 * 登录退出
 * */
//Route::group(['namespace' => 'Admin'], function () {
//  Route::get('/admin', 'adminLoginController@gotoLogin')->name('admin');
//  Route::get('/admin/admin_login', 'adminLoginController@view')->name('admin_login');
//  Route::post('/admin/admin_login', 'adminLoginController@login')->name('admin_login_post');
//  Route::post('/admin/admin_login_get_code', 'adminLoginController@getCode')->name('admin_login_post_get_code');
//  Route::post('/admin/admin_login_update_code', 'adminLoginController@updateCode')->name('admin_login_post_update_code');
//});
/*
 * 仪表盘
 * */
Route::group(['namespace' => 'Admin','middleware' => 'auth'], function () {

  Route::get('/admin/manage/panel/basic_info', 'basicInfoController@view')->name('basic_info');
  Route::get('/admin/manage/panel/modify_password', 'modifyPasswordController@view')->name('modify_password');

});


/*
 * 用户管理
 * */
Route::group(['namespace' => 'Admin','middleware' => 'auth'], function () {

  //用户组管理
  Route::get('/admin/manage/user_group_manage', 'userGroupManageController@view')->name('user_group_manage');
  Route::post('/admin/manage/user_group_manage/add_user_group', 'userGroupManageController@addUserGroup')->name('add_user_group');
  Route::get('/admin/manage/user_group_manage/get_user_group', 'userGroupManageController@getUserGroup')->name('get_user_group');
  Route::post('/admin/manage/user_group_manage/forbidden_status', 'userGroupManageController@forbiddenStatus')->name('user_group_manage_forbidden_status');
  Route::post('/admin/manage/user_group_manage/start_using', 'userGroupManageController@startUsing')->name('user_group_manage_start_using');
  Route::post('/admin/manage/user_group_manage/modify_power', 'userGroupManageController@modifyPower')->name('user_group_manage_modify_power');
  Route::post('/admin/manage/user_group_manage/edit_user_group', 'userGroupManageController@editUserGroup')->name('user_group_manage_edit_user_group');


  //用户管理
  Route::get('/admin/manage/user_manage', 'userManageController@view')->name('user_manage');
  Route::get('/admin/manage/user_manage/get_user', 'userManageController@getUser')->name('get_user');
  Route::post('/admin/manage/user_manage/check_phone', 'userManageController@checkPhone')->name('check_phone');
  Route::post('/admin/manage/user_manage/check_email', 'userManageController@checkEmail')->name('check_email');
  Route::post('/admin/manage/user_manage/add_user_commit', 'userManageController@addUserCommit')->name('add_user_commit');
  Route::post('/admin/manage/user_manage/forbidden_status', 'userManageController@forbiddenStatus')->name('user_manage_forbidden_status');
  Route::post('/admin/manage/user_manage/start_using', 'userManageController@startUsing')->name('user_manage_start_using');
  Route::post('/admin/manage/user_manage/edit_user_commit', 'userManageController@editUserCommit')->name('edit_user_commit');
  Route::post('/admin/manage/user_manage/remove_user_commit', 'userManageController@removeUserCommit')->name('remove_user_commit');
  Route::post('/admin/manage/user_manage/upload_avatar', 'userManageController@uploadAvatar')->name('upload_avatar');
  Route::post('/admin/manage/user_manage/upload_avatar_commit', 'userManageController@uploadAvatarCommit')->name('upload_avatar_commit');



//后台用户组
  Route::get('/admin/manage/user_manage/admin_user_group_all', 'adminUserGroupAllController@view')->name('admin_user_group_all');
//  Route::post('/admin/manage/user_manage/forbidden_status', 'adminUserGroupAllController@forbiddenStatus')->name('admin_user_group_all_forbidden_status');
//  Route::post('/admin/manage/user_manage/start_using', 'adminUserGroupAllController@startUsing')->name('admin_user_group_all_start_using');
  Route::post('/admin/manage/user_manage/user_group_edit', 'adminUserGroupAllController@userGroupEdit')->name('admin_user_group_all_user_group_edit');
  Route::post('/admin/manage/user_manage/modify_power', 'adminUserGroupAllController@modifyPower')->name('admin_user_group_all_modify_power');
  Route::get('/admin/manage/user_manage/admin_user_group_get', 'adminUserGroupAllController@get')->name('admin_user_group_get');

  Route::get('/admin/manage/user_manage/admin_user_group_add', 'adminUserGroupAddController@view')->name('admin_user_group_add');
  Route::post('/admin/manage/user_manage/admin_user_group_add', 'adminUserGroupAddController@add')->name('admin_user_group_add_post');

  //后台用户
  Route::get('/admin/manage/user_manage/admin_user_all', 'adminUserAllController@view')->name('admin_user_all');
  Route::get('/admin/manage/user_manage/admin_user_get', 'adminUserAllController@get')->name('admin_user_get');
//  Route::post('/admin/manage/user_manage/upload_avatar', 'adminUserAllController@uploadAvatar')->name('upload_avatar');
  Route::post('/admin/manage/user_manage/upload_avatar_for_admin_user', 'adminUserAllController@uploadAvatarForAdminUser')->name('upload_avatar_for_admin_user');

  Route::get('/admin/manage/user_manage/admin_user_add', 'adminUserAddController@view')->name('admin_user_add');

  //前台用户
  Route::get('/admin/manage/user_manage/user_all', 'userAllController@view')->name('user_all');
  Route::get('/admin/manage/user_manage/user_add', 'userAddController@view')->name('user_add');
});


/*
 * 文档管理
 * */
Route::group(['namespace' => 'Admin','middleware' => 'auth'], function () {
  //我的文档
  Route::get('/admin/manage/doc_manage/write', 'writeController@view')->name('write');
  Route::post('/admin/manage/doc_manage/write', 'writeController@write')->name('write_post');
  Route::post('/admin/manage/doc_manage/preview_img_upload', 'writeController@previewImgUpload')->name('preview_img_upload');
  Route::post('/admin/manage/doc_manage/gather_doc_commit', 'writeController@gatherDocCommit')->name('gather_doc_commit');

  Route::get('/admin/manage/doc_manage/published', 'publishedController@view')->name('published');
  Route::post('/admin/manage/doc_manage/get_published_doc', 'publishedController@getPublishedDoc')->name('get_published_doc');
  Route::get('/admin/manage/doc_manage/edit_doc/{id}', 'editDocController@view')->name('edit_doc');
  Route::post('/admin/manage/doc_manage/get_doc_by_id', 'editDocController@getDocById')->name('get_doc_by_id');
  Route::post('/admin/manage/doc_manage/update_doc', 'editDocController@updateDoc')->name('update_doc');
  Route::post('/admin/manage/doc_manage/recommend_doc', 'publishedController@recommendDoc')->name('recommend_doc');
  Route::post('/admin/manage/doc_manage/hot_doc', 'publishedController@hotDoc')->name('hot_doc');
  Route::post('/admin/manage/doc_manage/put_into_recycle', 'publishedController@putIntoRecycle')->name('put_into_recycle');

  Route::get('/admin/manage/doc_manage/wait_for_verify', 'waitForVerifyController@view')->name('wait_for_verify');
  Route::post('/admin/manage/doc_manage/get_wait_for_verify_doc', 'waitForVerifyController@getWaitForVerifyDoc')->name('get_wait_for_verify_doc');
  Route::get('/admin/manage/doc_manage/verify_doc/{id}', 'verifyDocController@view')->name('verify_doc');
  Route::post('/admin/manage/doc_manage/verify_doc', 'verifyDocController@verifyDoc')->name('verify_doc');

  Route::get('/admin/manage/doc_manage/no_access', 'noAccessController@view')->name('no_access');
  Route::get('/admin/manage/doc_manage/draft', 'draftController@view')->name('draft');
  Route::get('/admin/manage/doc_manage/recycle', 'recycleController@view')->name('recycle');

  //分类管理
  Route::get('/admin/manage/doc_manage/category_manage', 'categoryManageController@view')->name('category_manage');
  Route::get('/admin/manage/doc_manage/category_all', 'categoryAllController@view')->name('category_all');
  Route::get('/admin/manage/doc_manage/category_get', 'categoryAllController@categoryGet')->name('category_get');
  Route::post('/admin/manage/doc_manage/category_edit_commit', 'categoryAllController@editCommit')->name('category_edit_commit');
  Route::post('/admin/manage/doc_manage/category_remove_commit', 'categoryAllController@removeCommit')->name('category_remove_commit');

  Route::get('/admin/manage/doc_manage/category_add', 'categoryAddController@view')->name('category_add');
  Route::post('/admin/manage/doc_manage/category_add', 'categoryAddController@addCategory')->name('category_add_post');

  //菜单管理
  Route::get('/admin/manage/doc_manage/menu_manage', 'menuManageController@view')->name('menu_manage');
  Route::get('/admin/manage/doc_manage/get_menu', 'menuManageController@getMenu')->name('get_menu');
  Route::post('/admin/manage/doc_manage/add_menu_commit', 'menuManageController@addMenuCommit')->name('add_menu_commit');
  Route::post('/admin/manage/doc_manage/remove_menu', 'menuManageController@removeMenu')->name('remove_menu');
  Route::post('/admin/manage/doc_manage/edit_menu', 'menuManageController@editMenu')->name('edit_menu');
  Route::GET('/admin/manage/doc_manage/get_parent_menu', 'menuManageController@getParentMenu')->name('get_parent_menu');

  //轮播管理
  Route::get('/admin/manage/doc_manage/banner_manage', 'bannerManageController@view')->name('banner_manage');
  Route::get('/admin/manage/doc_manage/banner_manage_get', 'bannerManageController@bannerGet')->name('banner_manage_get');
  Route::post('/admin/manage/doc_manage/banner_manage_add', 'bannerManageController@bannerItemAddCommit')->name('banner_manage_add');
  Route::get('/admin/manage/doc_manage/banner_manage_edit/{id}/{name}', 'bannerManageEditController@view')->name('banner_manage_edit');
  Route::post('/admin/manage/doc_manage/banner_manage_edit_upload', 'bannerManageEditController@bannerManageEditUpload')->name('banner_manage_edit_upload');
  Route::post('/admin/manage/doc_manage/banner_edit_save_slider', 'bannerManageEditController@saveSlider')->name('banner_edit_save_slider');
  Route::post('/admin/manage/doc_manage/banner_edit_slider_get', 'bannerManageEditController@sliderGet')->name('banner_edit_slider_get');

  //采集管理
  Route::get('/admin/manage/doc_manage/gather_manage', 'gatherManageController@view')->name('gather_manage');
  Route::get('/admin/manage/doc_manage/get_gather', 'gatherManageController@getGather')->name('get_gather');
  Route::post('/admin/manage/doc_manage/add_gather', 'gatherManageController@addGather')->name('add_gather');
  Route::post('/admin/manage/doc_manage/auto_gather', 'gatherManageController@autoGather')->name('auto_gather');

  //标签管理
  Route::get('/admin/manage/doc_manage/tag_manage', 'tagManageController@view')->name('tag_manage');
  Route::get('/admin/manage/doc_manage/comment_manage', 'commentManageController@view')->name('comment_manage');
  Route::get('/admin/manage/doc_manage/message_manage', 'messageManageController@view')->name('message_manage');


});

/*
 * 文件管理
 * */
Route::group(['namespace' => 'Admin','middleware' => 'auth'], function () {

  Route::get('/admin/manage/file_manage/media_manage_all', 'mediaManageAllController@view')->name('media_manage_all');
  Route::GET('/admin/manage/file_manage/media_manage_get', 'mediaManageAllController@getAllMedia')->name('media_manage_get');
  Route::post('/admin/manage/file_manage/media_manage_get_filter', 'mediaManageAllController@filterData')->name('media_manage_get_filter');
  Route::post('/admin/manage/file_manage/media_manage_get_filter_go_to_page', 'mediaManageAllController@filterDataGoToPage')->name('media_manage_get_filter_go_to_page');
  Route::get('/admin/manage/file_manage/media_manage_upload', 'mediaManageUploadController@view')->name('media_manage_upload');
  Route::post('/admin/manage/file_manage/media_manage_upload', 'mediaManageUploadController@mediaManageUpload')->name('media_manage_upload_post');

  Route::get('/admin/manage/file_manage/file_backup', 'file_backupController@view')->name('file_backup');
  Route::get('/admin/manage/file_manage/file_recover', 'file_recoverController@view')->name('file_recover');
});

/*
 * 数据管理
 * */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {

  Route::get('/admin/manage/data_manage/database_backup', 'databaseBackupController@view')->name('database_backup');
  Route::get('/admin/manage/data_manage/database_import', 'databaseImportController@view')->name('database_import');
  Route::get('/admin/manage/data_manage/database_compress', 'databaseCompressController@view')->name('database_compress');
  Route::get('/admin/manage/data_manage/database_optimize', 'databaseOptimizeController@view')->name('database_optimize');
  Route::get('/admin/manage/data_manage/clear_cache', 'clearCacheController@view')->name('clear_cache');
  Route::get('/admin/manage/data_manage/setting_cache', 'settingCacheController@view')->name('setting_cache');
  Route::get('/admin/manage/data_manage/count_statistics', 'countStatisticsController@view')->name('count_statistics');


});


/*
 * 定制中心
 * */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {

  Route::get('/admin/manage/customization_center/install_theme', 'installThemeController@view')->name('install_theme');
  Route::get('/admin/manage/customization_center/local_theme', 'localThemeController@view')->name('local_theme');
  Route::get('/admin/manage/customization_center/edit_template', 'editTemplateController@view')->name('edit_template');
  Route::get('/admin/manage/customization_center/plugin_manage', 'pluginManageController@view')->name('plugin_manage');
  Route::get('/admin/manage/customization_center/hook_manage', 'hookManageController@view')->name('hook_manage');
  Route::get('/admin/manage/customization_center/ad_manage', 'adManageController@view')->name('ad_manage');

});


/*
 * 系统设置
 * */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function () {

  Route::get('/admin/manage/system_setting/system_log', 'systemLogController@view')->name('system_log');
  Route::get('/admin/manage/system_setting/get_system_log', 'systemLogController@getSystemLog')->name('get_system_log');
  Route::get('/admin/manage/system_setting/website_setting', 'websiteSettingController@view')->name('website_setting');


});


/*
 * install
 * */
Route::group(['namespace' => 'Install'], function () {

  Route::get('/install/protocol', 'protocolController@view')->name('protocol');
  Route::get('/install/environment_test', 'environmentTestController@view')->name('environment_test');
  Route::get('/install/web_setting', 'webSettingController@view')->name('web_setting');
  Route::get('/install/complete', 'completeController@view')->name('complete');


});

Route::auth();


