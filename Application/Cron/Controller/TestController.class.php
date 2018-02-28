<?php
/**
 * Created by PhpStorm.
 * 测试定时脚本任务
 * User: hp
 * Date: 2018/2/28
 * Time: 13:47
 */
namespace Cron\Controller;
class TestController extends CronController{
    public function __construct()
    {
        parent::__construct();
    }
    //给表my_name添加数据
    public function addName(){
        $arr=array(
            'name'=>'测试',
        );
        M('Name')->add($arr);
    }

}