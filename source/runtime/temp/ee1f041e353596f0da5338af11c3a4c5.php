<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"F:\demo\CM\web/../source/application/store\view\article\edit.php";i:1551177151;s:59:"F:\demo\CM\source\application\store\view\layouts\layout.php";i:1550806007;s:76:"F:\demo\CM\source\application\store\view\layouts\_template\tpl_file_item.php";i:1550814821;s:75:"F:\demo\CM\source\application\store\view\layouts\_template\file_library.php";i:1539228309;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        <?= $setting['store']['values']['name'] ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/store/i/favicon.ico" />
    <meta name="apple-mobile-web-app-title" content="<?= $setting['store']['values']['name'] ?>" />
    <link rel="stylesheet" href="assets/store/css/amazeui.min.css" />
    <link rel="stylesheet" href="assets/store/css/app.css" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_783249_t6knt0guzo.css">
    <script src="assets/store/js/jquery.min.js"></script>
    <script src="//at.alicdn.com/t/font_783249_e5yrsf08rap.js"></script>    
    <script>
        BASE_URL = '<?= isset($base_url) ? $base_url : '
        ' ?>';
        STORE_URL = '<?= isset($store_url) ? $store_url : '
        ' ?>';
    </script>
</head>

<body data-type="">
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header class="tpl-header">
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-button switch-button">
                    <i class="iconfont icon-menufold"></i>
                </div>
                <!-- 刷新页面 -->
                <div class="am-fl tpl-header-button refresh-button">
                    <i class="iconfont icon-refresh"></i>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="<?= url('store.user/renew') ?>">欢迎你，<span>
                                    <?= $store['user']['user_name'] ?></span>
                            </a>
                        </li>
                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="<?= url('passport/logout') ?>">
                                <i class="iconfont icon-tuichu"></i> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <?php $menus = $menus ?: []; $group = $group ?: 0; ?>
            <!-- 一级菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">
                    <?= $setting['store']['values']['name'] ?>
                </li>
                <?php foreach ($menus as $key => $item): ?>
                <li class="sidebar-nav-link">
                    <a href="<?= isset($item['index']) ? url($item['index']) : 'javascript:void(0);' ?>" class="<?= $item['active'] ? 'active' : '' ?>">
                        <?php if (isset($item['is_svg']) && $item['is_svg'] === true): ?>
                        <svg class="icon sidebar-nav-link-logo" aria-hidden="true">
                            <use xlink:href="#<?= $item['icon'] ?>"></use>
                        </svg>
                        <?php else: ?>
                        <i class="iconfont sidebar-nav-link-logo <?= $item['icon'] ?>" style="<?= isset($item['color']) ? " color:{$item['color']};" : '' ?>"></i>
                        <?php endif; ?>
                        <?= $item['name'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <!-- 子级菜单-->
            <?php $second = isset($menus[$group]['submenu']) ? $menus[$group]['submenu'] : []; if (!empty($second)): ?>
            <ul class="left-sidebar-second">
                <li class="sidebar-second-title">
                    <?= $menus[$group]['name'] ?>
                </li>
                <li class="sidebar-second-item">
                    <?php foreach ($second as $item): if (!isset($item['submenu'])): ?>
                    <!-- 二级菜单-->
                    <a href="<?= url($item['index']) ?>" class="<?= $item['active'] ? 'active' : '' ?>">
                        <?= $item['name']; ?>
                    </a>
                    <?php else: ?>
                    <!-- 三级菜单-->
                    <div class="sidebar-third-item">
                        <a href="javascript:void(0);" class="sidebar-nav-sub-title <?= $item['active'] ? 'active' : '' ?>">
                            <i class="iconfont icon-caret"></i>
                            <?= $item['name']; ?>
                        </a>
                        <ul class="sidebar-third-nav-sub">
                            <?php foreach ($item['submenu'] as $third): ?>
                            <li>
                                <a class="<?= $third['active'] ? 'active' : '' ?>" href="<?= url($third['index']) ?>">
                                    <?= $third['name']; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; endforeach; ?>
                </li>
            </ul>
            <?php endif; ?>
        </div>

        <!-- 内容区域 start -->
        <div class="tpl-content-wrapper <?= empty($second) ? 'no-sidebar-second' : '' ?>">
            <link rel="stylesheet" href="assets/store/css/goods.css">
<link rel="stylesheet" href="assets/store/plugins/umeditor/themes/default/css/umeditor.css">
<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" method="post">
                    <div class="widget-body">
                        <fieldset>
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">基本信息</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">文章名称 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <input type="text" class="tpl-form-input" name="article[name]" value="<?= $model['name'] ?>" required>
                                </div>
                            </div>
                            <input type="hidden" name="article[is_child]" value="0">
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">文章分类 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <select name="article[pid]" required data-am-selected="{searchBox: 1, btnSize: 'sm',  placeholder:'请选择文章分类'}">
                                        <option value=""></option>
                                        <?php if (isset($p_list)): foreach ($p_list as $first): ?>
                                        <option value="<?= $first['id'] ?>" <?= $model['pid'] === $first['id'] ? 'selected' : '' ?>>
                                            <?= $first['name'] ?>
                                        </option>
                                        <?php endforeach;
                                endif; ?>
                                    </select>
                                    <small class="am-margin-left-xs">
                                        <a href="<?= url('article/parent/add') ?>">去添加</a>
                                    </small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">文章类型 </label>
                                <div class="am-u-sm-9 am-u-end" style="margin-top:5px;">
                                    <select name="article[type]" id="js-selected" data-am-selected="{btnSize: 'sm',  placeholder:'请选择文章类型'}">
                                        <option value="1" <?= $model['type'] == 1 ? 'selected' : '' ?>>图文</option>
                                        <option value="2" <?= $model['type'] == 2 ? 'selected' : '' ?>>多图相册</option>
                                        <option value="3" <?= $model['type'] == 3 ? 'selected' : '' ?>>新闻列表</option>
                                        <option value="4" <?= $model['type'] == 4 ? 'selected' : '' ?>>左图右文</option>
                                    </select>
                                </div>
                            </div>


                            <div class="am-form-group" id="banner">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label">对应banner图</label>
                                <div class="am-u-sm-9 am-u-end">
                                    <div class="am-form-file">
                                        <div class="am-form-file">
                                            <button type="button" class="upload-file-banner am-btn am-btn-secondary am-radius">
                                                <i class="am-icon-cloud-upload"></i> 选择图片
                                            </button>
                                            <div class="uploader-list am-cf">
                                                <?php if (!empty($model['banner'])): ?>
                                                <div class="file-item">
                                                    <img src="<?= $model['banner']['src'] ?>">
                                                    <input type="hidden" name="article[banner_id][0][id]" value="<?= $model['banner']['id'] ?>">
                                                    <input type="text" name="article[banner_id][0][title]" placeholder="填写标题" value="<?= $model['banner']['title'] ?>">
                                                    <i class="iconfont icon-shanchu file-item-delete"></i>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="help-block am-margin-top-sm">
                                            <small>尺寸750x750像素以上，大小2M以下 (可拖拽图片调整显示顺序 )</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="detail" style="display:none;">
                                <div class="widget-head am-cf">
                                    <div class="widget-title am-fl">文章详情</div>
                                </div>

                                <div class="am-form-group" id="pic" style="display:none;">
                                    <label class="am-u-sm-3 am-u-lg-2 am-form-label">相册图片</label>
                                    <div class="am-u-sm-9 am-u-end">
                                        <div class="am-form-file">
                                            <div class="am-form-file">
                                                <button type="button" class="upload-file am-btn am-btn-secondary am-radius">
                                                    <i class="am-icon-cloud-upload"></i> 选择图片
                                                </button>
                                                <div class="uploader-list am-cf">
                                                    <?php foreach ($model['image'] as $key => $item): ?>
                                                    <div class="file-item">
                                                        <img src="<?= $item['src'] ?>">
                                                        <input type="hidden" name="article[pic_ids][<?= $key ?>][id]" value="<?= $item['id'] ?>">
                                                        <input type="text" name="article[pic_ids][<?= $key ?>][title]" placeholder="填写标题" value="<?= $item['title'] ?>">
                                                        <i class="iconfont icon-shanchu file-item-delete"></i>
                                                    </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="help-block am-margin-top-sm">
                                                <small>尺寸750x750像素以上，大小2M以下 (可拖拽图片调整显示顺序 )</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="am-form-group" id="text">
                                    <label class="am-u-sm-3 am-u-lg-2 am-form-label">文章详情 </label>
                                    <div class="am-u-sm-9 am-u-end">
                                        <!-- 加载编辑器的容器 -->
                                        <textarea id="container" name="article[content]" type="text/plain" style="width:1000px;height:600px;"><?= $model['content'] ?></textarea>
                                    </div>
                                </div>

                            </div>





                            <!--  -->
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">其他</div>
                            </div>

                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">文章排序 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <input type="number" class="tpl-form-input" name="article[sort]" value="<?= $model['sort'] ?>" required>
                                    <small>数字越小越靠前</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3 am-margin-top-lg">
                                    <button type="submit" class="j-submit am-btn am-btn-secondary">提交
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 图片文件列表模板 -->

<script id="tpl-file-item" type="text/template">
    {{ each list }}
    <div class="file-item">
        <img src="{{ $value.file_path }}">
        <input type="hidden" name="{{ name }}[{{ $value.file_id }}][id]" value="{{ $value.file_id }}">
        <input type="text" name="{{ name }}[{{ $value.file_id }}][title]" placeholder="填写标题" value="">
        <i class="iconfont icon-shanchu file-item-delete"></i>
    </div>
    {{ /each }}
</script>




<!-- 文件库弹窗 -->
<!-- 文件库模板 -->
<script id="tpl-file-library" type="text/template">
    <div class="row">
        <div class="file-group">
            <ul class="nav-new">
                <li class="ng-scope {{ is_default ? 'active' : '' }}" data-group-id="-1">
                    <a class="group-name am-text-truncate" href="javascript:void(0);" title="全部">全部</a>
                </li>
                <li class="ng-scope" data-group-id="0">
                    <a class="group-name am-text-truncate" href="javascript:void(0);" title="未分组">未分组</a>
                </li>
                {{ each group_list }}
                <li class="ng-scope"
                    data-group-id="{{ $value.group_id }}" title="{{ $value.group_name }}">
                    <a class="group-edit" href="javascript:void(0);" title="编辑分组">
                        <i class="iconfont icon-bianji"></i>
                    </a>
                    <a class="group-name am-text-truncate" href="javascript:void(0);">
                        {{ $value.group_name }}
                    </a>
                    <a class="group-delete" href="javascript:void(0);" title="删除分组">
                        <i class="iconfont icon-shanchu1"></i>
                    </a>
                </li>
                {{ /each }}
            </ul>
            <a class="group-add" href="javascript:void(0);">新增分组</a>
        </div>
        <div class="file-list">
            <div class="v-box-header am-cf">
                <div class="h-left am-fl am-cf">
                    <div class="am-fl">
                        <div class="group-select am-dropdown">
                            <button type="button" class="am-btn am-btn-sm am-btn-secondary am-dropdown-toggle">
                                移动至 <span class="am-icon-caret-down"></span>
                            </button>
                            <ul class="group-list am-dropdown-content">
                                <li class="am-dropdown-header">请选择分组</li>
                                {{ each group_list }}
                                <li>
                                    <a class="move-file-group" data-group-id="{{ $value.group_id }}"
                                       href="javascript:void(0);">{{ $value.group_name }}</a>
                                </li>
                                {{ /each }}
                            </ul>
                        </div>
                    </div>
                    <div class="am-fl tpl-table-black-operation">
                        <a href="javascript:void(0);" class="file-delete tpl-table-black-operation-del"
                           data-group-id="2">
                            <i class="am-icon-trash"></i> 删除
                        </a>
                    </div>
                </div>
                <div class="h-rigth am-fr">
                    <div class="j-upload upload-image">
                        <i class="iconfont icon-add1"></i>
                        上传图片
                    </div>
                </div>
            </div>
            <div id="file-list-body" class="v-box-body">
                {{ include 'tpl-file-list' file_list }}
            </div>
            <div class="v-box-footer am-cf"></div>
        </div>
    </div>

</script>

<!-- 文件列表模板 -->
<script id="tpl-file-list" type="text/template">
    <ul class="file-list-item">
        {{ include 'tpl-file-list-item' data }}
    </ul>
    {{ if last_page > 1 }}
    <div class="file-page-box am-fr">
        <ul class="pagination">
            {{ if current_page > 1 }}
            <li>
                <a class="switch-page" href="javascript:void(0);" title="上一页" data-page="{{ current_page - 1 }}">«</a>
            </li>
            {{ /if }}
            {{ if current_page < last_page }}
            <li>
                <a class="switch-page" href="javascript:void(0);" title="下一页" data-page="{{ current_page + 1 }}">»</a>
            </li>
            {{ /if }}
        </ul>
    </div>
    {{ /if }}
</script>

<!-- 文件列表模板 -->
<script id="tpl-file-list-item" type="text/template">
    {{ each $data }}
    <li class="ng-scope" title="{{ $value.file_name }}" data-file-id="{{ $value.file_id }}"
        data-file-path="{{ $value.file_path }}">
        <div class="img-cover"
             style="background-image: url('{{ $value.file_path }}')">
        </div>
        <p class="file-name am-text-center am-text-truncate">{{ $value.file_name }}</p>
        <div class="select-mask">
            <img src="assets/store/img/chose.png">
        </div>
    </li>
    {{ /each }}
</script>

<!-- 分组元素-->
<script id="tpl-group-item" type="text/template">
    <li class="ng-scope" data-group-id="{{ group_id }}" title="{{ group_name }}">
        <a class="group-edit" href="javascript:void(0);" title="编辑分组">
            <i class="iconfont icon-bianji"></i>
        </a>
        <a class="group-name am-text-truncate" href="javascript:void(0);">
            {{ group_name }}
        </a>
        <a class="group-delete" href="javascript:void(0);" title="删除分组">
            <i class="iconfont icon-shanchu1"></i>
        </a>
    </li>
</script>


<script src="assets/store/js/ddsort.js"></script>
<script src="assets/store/plugins/umeditor/umeditor.config.js"></script>
<script src="assets/store/plugins/umeditor/umeditor.min.js"></script>
<script>
    $(function() {

        // 富文本编辑器
        UM.getEditor('container');

        // 选择图片
        $('.upload-file').selectImages({
            name: 'article[pic_ids]',
            multiple: true
        });

        // banner
        $('.upload-file-banner').selectImages({
            name: 'article[banner_id]',
            multiple: false
        });

        // 图片列表拖动
        $('.uploader-list').DDSort({
            target: '.file-item',
            delay: 100, // 延时处理，默认为 50 ms，防止手抖点击 A 链接无效
            floatStyle: {
                'border': '1px solid #ccc',
                'background-color': '#fff'
            }
        });


        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm({
            // 自定义验证
            validation: function() {

                return true;
            }
        });


        var $selected = $('#js-selected');
        var selected_value = $('#js-selected :selected').val();
        if (selected_value == 1) {
            $('.detail').show();
            $('#text').show();
            $('#pic').hide();
        }
        if (selected_value == 2) {
            $('.detail').show();
            $('#text').hide();
            $('#pic').show();
        }
        if (selected_value == 3) {
            $('#text').hide();
            $('#pic').hide();
            $('.detail').hide();
        }
        if (selected_value == 4) {
            $('#text').show();
            $('#pic').show();
            $('.detail').show();
        }
        $selected.on('change', function() {
            selected_value = $(this).val();
            if (selected_value == 1) {
                $('.detail').show();
                $('#text').show();
                $('#pic').hide();
            }
            if (selected_value == 2) {
                $('.detail').show();
                $('#text').hide();
                $('#pic').show();
            }
            if (selected_value == 3) {
                $('#text').hide();
                $('#pic').hide();
                $('.detail').hide();
            }
            if (selected_value == 4) {
                $('#text').show();
                $('#pic').show();
                $('.detail').show();
            }
        });





    });
</script> 
        </div>
        <!-- 内容区域 end -->

    </div>
    <script src="assets/layer/layer.js"></script>
    <script src="assets/store/js/jquery.form.min.js"></script>
    <script src="assets/store/js/amazeui.min.js"></script>
    <script src="assets/store/js/webuploader.html5only.js"></script>
    <script src="assets/store/js/art-template.js"></script>
    <script src="assets/store/js/app.js"></script>
    <script src="assets/store/js/file.library.js"></script>
</body>

</html> 