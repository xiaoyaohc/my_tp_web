#!/bin/bash
#无需通过公共脚本文件直接执行脚本
#获取当前的时间将其存入变量
dates=`date "+%Y-%m-%d"`
#php运行php脚本,其中>> /home/wwwlogs/my_tp_web_cron/test_$1_$dates.log 2>&1为将执行的结果存入日志文件中
php /home/wwwroot/my_tp_web/cron.php Cron test $1 >> /home/wwwlogs/my_tp_web_cron/test_$1_$dates.log 2>&1
