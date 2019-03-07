<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"F:\demo\CM\web/../source/application/home\view\index\article.php";i:1551930119;s:58:"F:\demo\CM\source\application\home\view\layouts\layout.php";i:1551151161;s:58:"F:\demo\CM\source\application\home\view\layouts\header.php";i:1551939320;s:58:"F:\demo\CM\source\application\home\view\layouts\footer.php";i:1551930118;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>企业网站模板</title>
    <link rel="stylesheet" href="assets/home/css/amazeui.css" />
    <link rel="stylesheet" href="assets/home/css/common.min.css" />
    <link rel="stylesheet" href="assets/home/css/index.min.css" />
    <link rel="stylesheet" href="assets/home/css/zqh.css" />
    <link rel="stylesheet" href="assets/home/css/zqh-m.css" />
</head>

<body>
    <div class="layout">
        <!--===========layout-header================-->
        <div class="layout-header am-hide-sm-only">
            <div class="header-box" data-am-sticky>
                <!--nav start-->
                <div class="nav-contain" style="display: flex;">
                    <div class="nav-logo">
                        <img src="assets/home/images/logo.png" alt="">
                    </div>
                    <div class="nav-inner">
                        <ul class="am-nav am-nav-pills am-nav-justify">
                            <li class="menu-item-p"><a href="<?= url('/index') ?>">首页</a></li>
                            <?php foreach ($menus as $item) : ?>
                            <li class="menu-item-p">
                                <a class="<?= $item['is_child'] == 1 ? 'pchild' : '' ?>" href="<?= $item['is_child'] == 1 ? '#' : url('/article', ['id' => $item['id']]) ?>">
                                    <?= $item['name'] ?></a>
                                <!-- sub-menu start-->
                                <?php if (!empty($item['children'])) : ?>
                                <ul class="sub-menu">
                                    <?php foreach ($item['children'] as $child) : ?>
                                    <li class="menu-item"><a href="<?= url('/article', ['id' => $child['id']]) ?>">
                                            <?= $child['name'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
                                <!-- sub-menu end-->
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <!--  -->

                    </div>
                </div>
                <!--nav end-->
            </div>
        </div>

        <!--mobile header start-->
        <div class="m-header">
            <div class="am-g am-show-sm-only">
                <div class="am-u-sm-2">
                    <div class="menu-bars">
                        <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
                        <!-- 侧边栏内容 -->
                        <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas>
                            <a href="javascript: void(0)" class="am-menu-toggle"></a>
                            <div class="am-offcanvas">
                                <div class="am-offcanvas-bar">
                                    <ul class="am-menu-nav am-avg-sm-1">                                        
                                        <li><a href="<?= url('index') ?>" class="">首页</a></li>

                                        <?php foreach ($menus as $item) : ?>
                                        <li class="<?= !empty($item['children']) ? 'am-parent' : '' ?>">
                                            <a href="<?= $item['is_child'] == 1 ? '#' : url('/article', ['id' => $item['id']]) ?>">
                                                <?= $item['name'] ?></a>
                                            <?php if (!empty($item['children'])) : ?>
                                            <ul class="am-menu-sub am-collapse ">
                                                <?php foreach ($item['children'] as $child) : ?>
                                                <li class=""><a href="<?= url('/article', ['id' => $child['id']]) ?>">
                                                        <?= $child['name'] ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php endif; ?>
                                            <!-- sub-menu end-->
                                        </li>
                                        <?php endforeach; ?>

                                        <!-- <li class=""><a href="html/about.html" class="">关于我们</a></li>
                                        <li class=""><a href="html/join.html" class="">加入我们</a></li> -->
                                        <!-- <li class=""><a href="#" class="">联系我们</a></li>
                                        <li class="am-parent">
                                            <a href="" class="nav-icon nav-icon-globe">Language</a>
                                            <ul class="am-menu-sub am-collapse  ">
                                                <li>
                                                    <a href="#">English</a>
                                                </li>
                                                <li class="">
                                                    <a href="#">Chinese</a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>

                                </div>
                            </div>
                        </nav>

                    </div>
                </div>
                <div class="am-u-sm-8 am-u-end">
                    <div class="m-logo">
                        <a href=""><img src="assets/home/images/logo_m.png" alt=""></a>
                    </div>
                </div>
            </div>
            <!--mobile header end-->
        </div>

        <!--===========layout-container================-->
        <div class="layout-container">
            <div class="index-page">
                <div data-am-widget="tabs" class="am-tabs am-tabs-default">
                    <div class="am-tabs-bd banner">
                        <div data-tab-panel-0 class="am-tab-panel am-active">
                            <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{directionNav:false,slideshowSpeed: 2000}'>
                                <ul class="am-slides">
                                    <?php if (isset($detail) && !empty($detail['banner'])) : ?>
                                    <li>
                                        <img src="<?= $detail['banner']['src'] ?>">
                                    </li>
                                    <?php else : foreach ($background as $item) : ?>
                                    <li>
                                        <img src="<?= $item['imgUrl'] ?>">
                                    </li>
                                    <?php endforeach;
                            endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> 
<div class="layout-container">
    <div class="breadcrumb-box">
        <div class="nav-parent">
            <div class="nav-parent-item">
                <?php if ($detail['pid'] == 0) : ?>
                <div class="nav-item-active nav-child-item" onclick="article(<?= $detail['id'] ?>)">
                    <?= $detail['name'] ?>
                </div>
                <?php else : foreach ($detail['parent']['child'] as $item) : ?>
                <div class="<?= $detail['id'] == $item['id'] ? 'nav-item-active' : 'nav-item' ?> nav-child-item" onclick="article(<?= $item['id'] ?>)">
                    <?= $item['name'] ?>
                </div>
                <?php endforeach; endif; ?>
            </div>
            <div style="cursor: pointer;" onclick="home()">
                <span class="am-icon-home am-icon-md"></span>
                首页
            </div>
        </div>
    </div>

    <!-- media -->
    <div class="breadcrumb-box-media">
        <div class="am-container">
            <ol class="am-breadcrumb">
                <li><a href="<?= url('/index') ?>" style="color:#000;">首页</a></li>
                <!-- <li class="am-active">客户案例</li> -->
                <?php if ($detail['pid'] == 0) : ?>
                <li class="am-active" onclick="article(<?= $detail['id'] ?>)">
                    <?= $detail['name'] ?>
                </li>
                <?php else : ?>
                <li class="am-active">
                    <?= $detail['parent']['name'] ?>
                </li>
                <?php foreach ($detail['parent']['child'] as $item) : if ($item['id'] == $detail['id']) : ?>
                <li class="am-active" onclick="article(<?= $item['id'] ?>)">
                    <?= $item['name'] ?>
                </li>
                <?php endif;
        endforeach; endif; ?>
            </ol>
        </div>
    </div>
</div>

<div class="section">
    <?php if ($detail['type'] == 1) : ?>
    <div class="container">
        <div class="art1-container">
            <?php echo htmlspecialchars_decode($detail['content']); ?>
        </div>
    </div>
    <?php endif; ?>


    <!-- 图册 -->
    <?php if ($detail['type'] == 2) : ?>
    <div class="container">
        <div class="art2-container">
            <?php foreach ($list as $item) : ?>
            <div class="img9-item">
                <div class="img9-div">
                    <img class="in" src="<?= $item['file_path'] ?>">
                    <div class="img9-attr">
                        <p>
                            <?= $item['title'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="art2-foot">
            <?= $list->render() ?>
        </div>
    </div>
    <?php endif; ?>


    <!-- 新闻列表 -->
    <?php if ($detail['type'] == 3) : ?>
    <div class="container">
        <div class="art3-container">
            <?php foreach ($list as $k => $new) : ?>
            <div class="new3-item <?= $k == 1 ? 'rever' : '' ?>" onclick="news(<?= $new['id'] ?>)">
                <div class="new3-div">
                    <img src="<?= $new['cover']['file_path'] ?>">
                    <div class="news3-cover">
                        <p class="news3-coverp">查看详情</p>
                    </div>
                </div>
                <div class="new3-txt">
                    <div class="new3-title">
                        <p>
                            <?= $new['title'] ?>
                        </p>
                    </div>
                    <div class="new3-content">
                        <p>
                            <?= checkCN($new['content']) ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="art2-foot">
            <?= $list->render() ?>
        </div>
    </div>
    <?php endif; ?>




    <!-- 左图右文 -->
    <?php if ($detail['type'] == 4) : ?>
    <div class="container">
        <div class="art4-container">
            <div class="left-pic">
                <img src="<?= $detail['image'][0]['src'] ?>">
            </div>
            <div class="right-text">
                <img class="r-logo" src="assets/home/images/logo.png">
                <div class="r-content">
                    <?php echo htmlspecialchars_decode($detail['content']); ?>
                </div>

            </div>
        </div>


    </div>
    <?php endif; ?>
</div> 
</div>
<!--===========layout-footer================-->
<div class="layout-footer">
    <div class="footer">
        <div style="background-color:#AB1312;" class="footer--bg"></div>
        <div class="footer--inner">
            <div class="container foot-container">
                <div class="footer_main">
                    <div class="am-g">
                        <!--  -->
                        <?php foreach ($menus as $item) : ?>
                        <div class="am-u-md-3">
                            <div class="footer_main--column">
                                <strong class="footer_main--column_title" <?php if ($item['is_child'] == 0) : ?> onclick="article(<?= $item['id'] ?>)" <?php endif; ?>>
                                    <?= $item['name'] ?></strong>
                                <ul class="footer_navigation">
                                    <?php if (!empty($item['children'])) : foreach ($item['children'] as $child) : ?>
                                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link" onclick="article(<?= $child['id'] ?>)">
                                            <?= $child['name'] ?></a></li>
                                    <?php endforeach;
                            endif; ?>
                                </ul>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!--  -->
                        <div class="am-u-md-6 foot-company">
                            <div class="footer_main--column">
                                <strong class="footer_main--column_title">子公司链接</strong>
                                <ul class="footer_contact_info">
                                    <?php foreach ($foot_company as $company) : ?>
                                    <li class="footer_contact_info--item">
                                        <a href="<?= $company['jumpUrl'] ?>" style="color:#fff;">
                                            <?= $company['name'] ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-foot">Copyright © 2013-2019 备案号：闽ICP备15012807号-1</div>
</div>
<script src="assets/home/js/jquery-2.1.0.js" charset="utf-8"></script>
<script src="assets/home/js/amazeui.js" charset="utf-8"></script>
<script src="assets/home/js/common.js" charset="utf-8"></script>
</body>
<script>
    function article(id) {
        var url = "<?= url('/article') ?>/id/" + id;
        window.location.href = url;
    }

    function home() {
        var url = "<?= url('/index') ?>";
        window.location.href = url;
    }

    function news(id) {
        var url = "<?= url('/news') ?>/id/" + id;
        window.location.href = url;
    }


    <?php if ((isset($detail) && $detail['type'] == 1) || isset($news)) : ?>
    $('.art1-container img').click(function() {
        var src = $(this).attr('src');
        window.location.href = src;
    })


    $('.news-container p img').click(function() {
        var src = $(this).attr('src');
        window.location.href = src;
    })

    <?php endif; ?>




    // 




    <?php if (isset($detail) && $detail['type'] == 3) : ?>
    $('.new3-item').mouseover(function() {
        $(this).find(".news3-cover").css('height', '100%');
        $(this).find(".news3-coverp").css('display', 'flex');
    })

    $('.new3-item').mouseout(function() {
        $(this).find(".news3-cover").css('height', '0');
        $(this).find(".news3-coverp").css('display', 'none');
    })

    <?php endif; ?>






    //Index
    <?php if (isset($index_data)) : ?>
    $('.news-pic-item').mouseover(function() {
        $(this).find('.news-pic-title').css('color', '#AB1312');
        $(this).find('.news-pic-title').css('text-decoration', 'underline');
        // 
        $(this).find('.new-pic-con').css('color', '#AB1312');
        $(this).find('.new-pic-con').css('text-decoration', 'underline');

    })
    $('.news-pic-item').mouseout(function() {
        $(this).find('.news-pic-title').css('color', '#000');
        $(this).find('.news-pic-title').css('text-decoration', 'none');
        // 
        $(this).find('.new-pic-con').css('color', '#000');
        $(this).find('.new-pic-con').css('text-decoration', 'none');
    })

    <?php endif; ?>









    // 
    $(function() {
        $('.img9-div img').hover(function() {
            $(this).next().hide();
        })
        $('.img9-div img').mouseleave(function() {
            $(this).next().show();
        })
    })
</script>

</html> 
