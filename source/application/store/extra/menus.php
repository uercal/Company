<?php
/**
 * 后台菜单配置
 *    'home' => [
 *       'name' => '首页',                // 菜单名称
 *       'icon' => 'icon-home',          // 图标 (class)
 *       'index' => 'index/index',         // 链接
 *     ],
 */
return [
    'index' => [
        'name' => '首页',
        'icon' => 'icon-home',
        'index' => 'index/index',
    ],
    'article' => [
        'name' => '文章管理',
        'icon' => 'icon-order',
        'index' => 'article/parent',
        'submenu' => [
            [
                'name' => '分类管理',
                'index' => 'article/parent',
            ],
            [
                'name' => '文章管理',
                'index' => 'article/index',
            ]
        ]
    ],
    'news' => [
        'name' => '新闻管理',
        'icon' => 'icon-order',
        'index' => 'news/index',
    ],
    'project' => [
        'name' => '项目管理',
        'icon' => 'icon-order',
        'index' => 'project/index',
    ],
    'wxapp' => [
        'name' => '首页',
        'icon' => 'icon-wxapp',
        'color' => '#36b313',
        'index' => 'wxapp.page/home',
        'submenu' => [
            [
                'name' => '页面管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '首页设计',
                        'index' => 'wxapp.page/home'
                    ],
                ]
            ],
        ],
    ],
    'setting' => [
        'name' => '设置',
        'icon' => 'icon-setting',
        'index' => 'setting.cache/clear',
        'submenu' => [
            [
                'name' => '其他',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '清理缓存',
                        'index' => 'setting.cache/clear'
                    ],
                    [
                        'name' => '环境检测',
                        'index' => 'setting.science/index'
                    ],
                ]
            ]
        ],
    ],
    // 'article_en' => [
    //     'name' => 'ArticleManage',
    //     'icon' => 'icon-order',
    //     'index' => 'article_en/parent',
    //     'submenu' => [
    //         [
    //             'name' => '分类管理',
    //             'index' => 'article_en/parent',
    //         ],
    //         [
    //             'name' => '文章管理',
    //             'index' => 'article_en/index',
    //         ]
    //     ]
    // ],
    // 'news_en' => [
    //     'name' => 'NewsManage',
    //     'icon' => 'icon-order',
    //     'index' => 'news_en/index',
    // ],
    // 'project_en' => [
    //     'name' => 'ProjectManage',
    //     'icon' => 'icon-order',
    //     'index' => 'project_en/index',
    // ],
    // 'wxapp_en' => [
    //     'name' => 'IndexPage',
    //     'icon' => 'icon-wxapp',
    //     'color' => '#36b313',
    //     'index' => 'wxapp_en.page/home',
    //     'submenu' => [
    //         [
    //             'name' => 'Index',
    //             'active' => true,
    //             'submenu' => [
    //                 [
    //                     'name' => 'Design',
    //                     'index' => 'wxapp_en.page/home'
    //                 ],
    //             ]
    //         ],
    //     ],
    // ],
];
