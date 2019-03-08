<div class="layout-container">
    <div class="breadcrumb-box">
        <div class="nav-parent">
            <div class="nav-parent-item">
                <div class="nav-item-active nav-child-item">
                    <?= $project['title'] ?>
                </div>
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
                <li class="am-active">
                    <?= $project['title'] ?>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="section" style="padding:50px 0;">
    <div class="container">
        <div class="news-title">
            <h2 style="margin: 20px 0px 40px; padding: 0px; text-align: center; color: rgb(64, 64, 64); line-height: 1.1; font-family: 微软雅黑; font-size: 30px; white-space: normal; box-sizing: border-box; background-color: rgb(255, 255, 255);"><?= $project['title'] ?></h2>
        </div>
        <div class="news-container">
            {{:htmlspecialchars_decode($project['content'])}}
        </div>
    </div>
</div> 