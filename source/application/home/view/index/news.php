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
            {{:htmlspecialchars_decode($news['content'])}}
        </div>
    </div>
</div> 