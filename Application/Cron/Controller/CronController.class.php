<?php
/**
 * Created by PhpStorm.
 * 脚本执行公共控制器
 * User: hp
 * Date: 2018/2/28
 * Time: 13:47
 */
namespace Cron\Controller;
use Think\Controller;
class CronController extends Controller{
    public function __construct()
    {
        //判断是否为计划任务脚本
        if(!constant('APP_CRONTAB')){
            echo "当前操作不是脚本执行!!!";
            exit;
        }
    }
}