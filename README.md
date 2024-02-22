# huifupay

汇付天下支付

本地暂时忽略无用扩展依赖composer require tbryan24/huifupay:dev-main --ignore-platform-req=ext-mongodb

因为sdk需要初始化一些配置，需要在项目启动入口完成初始化，以webman框架为例，目前我的测试加载方案为(暂时还不知道有无问题)
1、在support目录下新建HuifupayInit.php
内容如下：
<?php

namespace support;

use tbryan24\Huifupay\Huifupay;
use Webman\Bootstrap;

class HuifupayInit implements Bootstrap
{
    public static function start($worker)
    {
        $debug = false;
        if (true === config('app.debug')) {
            $debug = true;
        }
        $config["sys_id"] = "6666000146998706";
        $config["product_id"] = "PAYUN";
        $config["rsa_merch_private_key"] = "填写你的商户私钥";
        $config["rsa_huifu_public_key"] = "填写你的汇付公钥";
        $huifupay = new Huifupay();
        $huifupay->setDebug($debug)->setLogDir(runtime_path() . '/logs')->setConfig($config)->init();
    }
}

2、打开 config/bootstrap.php将MemReport类加入到启动项中。

return [
    // ...这里省略了其它配置...

    \support\HuifupayInit::class
];

这样我们就完成了一个业务初始化流程。