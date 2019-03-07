<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"F:\demo\CM\web/../source/application/home\view\index\news.php";i:1551929553;s:58:"F:\demo\CM\source\application\home\view\layouts\layout.php";i:1551151161;s:58:"F:\demo\CM\source\application\home\view\layouts\header.php";i:1551865263;s:58:"F:\demo\CM\source\application\home\view\layouts\footer.php";i:1551929840;}*/ ?>
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
                            <li class="menu-item-p"><a href="./index">首页</a></li>
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
                <?php foreach ($news['parent']['parent']['child'] as $item) : ?>
                <div class="<?= $news['parent']['id'] == $item['id'] ? 'nav-item-active' : 'nav-item' ?> nav-child-item" onclick="article(<?= $item['id'] ?>)">
                    <?= $item['name'] ?>
                </div>
                <?php endforeach; ?>
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
                <li class="am-active" onclick="article(<?= $news['parent']['id'] ?>)">
                    <?= $news['parent']['name'] ?>
                </li>
                <li class="am-active" onclick="news(<?= $item['id'] ?>)">
                    <?= $news['title'] ?>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="section" style="padding:50px 0;">
    <div class="container">
        <div class="news-title">
            <h2 style="margin: 20px 0px 40px; padding: 0px; text-align: center; color: rgb(64, 64, 64); line-height: 1.1; font-family: 微软雅黑; font-size: 30px; white-space: normal; box-sizing: border-box; background-color: rgb(255, 255, 255);"><?= $news['title'] ?></h2>
        </div>
        <div class="news-container">
            <?php echo htmlspecialchars_decode($news['content']); ?>
        </div>
    </div>
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
