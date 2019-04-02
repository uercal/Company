<?php

namespace app\store\model;

use app\common\model\News as NewsModel;
use think\Cache;
use think\Request;
use think\Db;

/**
 * 商品分类模型
 * Class Category
 * @package app\store\model
 */
class News extends NewsModel
{
    /**
     * 添加新记录
     * @param $data
     * @return false|int
     */
    public function add($data)
    {
        Db::startTrans();
        try {
            if (!empty($data['cover_id'])) {
                $data['cover_id'] = array_values($data['cover_id'])[0]['id'];
            }
            $this->allowField(true)->save($data);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
            Db::rollback();
        }
    }

    /**
     * 编辑记录
     * @param $data
     * @return bool|int
     */
    public function edit($data)
    {
        Db::startTrans();
        try {
            if (is_array($data['cover_id'])) {
                if (isset($data['cover_id'])) {
                    $data['cover_id'] = array_values($data['cover_id'])[0]['id'];
                }
            }
            $this->allowField(true)->save($data);
            Db::commit();
            return true;
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
            Db::rollback();
        }
    }


    public function remove()
    {
        return $this->delete();
    }

    public function getList($map = [])
    {
        return $this->with(['parent'])->where($map)->paginate(15, false, [
            'query' => Request::instance()->request()
        ]);
    }
}
