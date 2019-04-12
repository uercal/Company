<?php

namespace app\common\model;

use think\Db;
use app\common\model\UploadFile;
use app\common\model\Article;
use think\Cache;
use think\Request;


/**
 * 项目模型
 * Class Article
 * @package app\common\model
 */
class Project extends BaseModel
{
    protected $name = 'project';
    protected $insert = ['wxapp_id' => 10001];


    public function cover()
    {
        return $this->hasOne('UploadFile', 'file_id', 'cover_id');
    }


    public function getList()
    {
        return $this->paginate(15, false, [
            'query' => Request::instance()->request()
        ]);
    }




    public static function detail($id)
    {
        return self::get($id);
    }



    public function add($data)
    {        
        // 开启事务
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
            Db::rollback();
            return false;
        }
    }


    public function remove()
    {
        return $this->delete();
    }



    public function incRead()
    {
        // 开启事务
        Db::startTrans();
        try {
            $this->setInc('read_count', 1);
            Db::commit();
        } catch (\Exception $e) {
            Db::rollback();
        }
    }
}
