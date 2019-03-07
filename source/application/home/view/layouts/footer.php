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
                                    <?php if (!empty($item['child'])) : foreach ($item['child'] as $child) : ?>
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