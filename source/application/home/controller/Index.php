<?php
namespace app\home\controller;

use app\common\model\Article;
use app\common\model\News;
use app\common\model\Project;
use think\Request;
use function Qiniu\json_decode;


/**
 * 后台首页
 * Class Index
 * @package app\store\controller
 */
class Index extends Controller
{
    public function index()
    {
        $index_data = $this->getIndexData();
		$is_moblie = Request::instance()->isMobile();				
        return $this->fetch('index/index', compact('index_data','is_mobile'));
    }

    public function article()
    {
        $id = input('id');
        $detail = Article::detail($id);
        //
        if ($detail['type'] == 2) {
            $list = $detail->getImagePage();
            return $this->fetch('article', compact('detail', 'list'));
        }
        if ($detail['type'] == 3) {
            $list = $detail->getNews();            
            return $this->fetch('article', compact('detail', 'list'));
        }
        return $this->fetch('article', compact('detail'));
    }


    public function news()
    {
        $id = input('id');
        $news = News::detail($id);
        // increase        
        !empty($news) ? $news->incRead() : '';
        // halt($detail->toArray());
        return $this->fetch('news', compact('news'));
    }


    public function project()
    {
        $id = input('id');
        $project = Project::detail($id);
        // 
        !empty($project) ? $project->incRead() : '';
        return $this->fetch('project', compact('project'));
    }



    public function proList()
    {
        $pro = new Project;
        $list = $pro->getList();
        $detail = [
            'id' => 0,
            'pid' => 0,
            'name' => '项目总览',
            'type' => 3,
            'pro' => 1
        ];
        return $this->fetch('article', compact('detail', 'list'));
    }
}
