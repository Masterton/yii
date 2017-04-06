# yii 框架（安装/使用）（1.0版本的）
------

### 安装

> 1.到官网下载 yii（1.0版本）。如图：

![](http://a.hiphotos.baidu.com/exp/w=500/sign=83f0b21efedcd100cd9cf821428b47be/43a7d933c895d143157cfc3075f082025aaf079e.jpg)
![](http://f.hiphotos.baidu.com/exp/w=500/sign=d271bcaca6ec08fa260013a769ef3d4d/023b5bb5c9ea15ce13a1f81ab0003af33a87b251.jpg)
![](http://b.hiphotos.baidu.com/exp/w=500/sign=6660bdcc70c6a7efb926a826cdfbafe9/a71ea8d3fd1f4134167b1d6d231f95cad1c85e50.jpg)


> 2.下载到本地，解压。这里就解压到www/yii/。（yii是新建的文件夹名）。如图：

![](http://e.hiphotos.baidu.com/exp/w=500/sign=dd0d3800db54564ee565e43983de9cde/b812c8fcc3cec3fd685aa366d088d43f879427b8.jpg)


> 3.安装 yii 之前，线检查一下是否符合 YII 配置需求。在浏览器中输入 yii 项目的路径，如（http://localhost/yii/requirements/），如图：

![](http://c.hiphotos.baidu.com/exp/w=500/sign=b37fbe30652762d0803ea4bf90ed0849/242dd42a2834349b19a86f96cfea15ce36d3be72.jpg)

> 4.打开 cmd ，找到 yii 目录里面的 framework，输入 yiic webapp 项目名称 （比如：yiic webapp ../one）one 就是这个项目的名称。然后会有提示，输入：y。如图：

![](http://c.hiphotos.baidu.com/exp/w=500/sign=c7d8ef3808f41bd5da53e8f461db81a0/0b55b319ebc4b745f96fbf05c9fc1e178a82152d.jpg)
![](http://b.hiphotos.baidu.com/exp/w=500/sign=1c5ee9092e34349b74066e85f9eb1521/7dd98d1001e93901184c852d7dec54e736d19652.jpg)
![](http://a.hiphotos.baidu.com/exp/w=500/sign=15e1375804087bf47dec57e9c2d2575e/6a600c338744ebf812386c2cdff9d72a6059a753.jpg)

> 5.在 yii 目录下看到有 “one” 这个项目，安装就成功了，在浏览器访问以下这个项目：http://localhost/yii/one/。

![](http://f.hiphotos.baidu.com/exp/w=500/sign=c22a310744a7d933bfa8e4739d4ad194/dbb44aed2e738bd47e85b922a78b87d6277ff979.jpg)

> 6.我这个项目的（目录结构）

* assets （系统自动生成的静态文件的存放目录）
* css （项目公共 css 存放目录）
* images （项目公共 image 存放目录）
* protected （项目程序代码、配置文件、相关组件等存储目录）
  * commands
  * components （项目组件目录）
  * config （项目配置文件目录：主配置文件：main.php）
  * controllers （项目控制器文件存放目录）
  * data
  * extendsions （项目扩展组件类存放目录）
  * messages
  * migrations
  * models （项目数据库模型文件存放目录）
  * runtime
  * tests
  * vendor
  * views （项目视图文件存放目录）
  * .htaccess
  * yiic
  * yiic.bat
  * yiic.php
* themes （项目主体文件存放目录）
* yii （yii 核心类库目录）
* index.php （应用入口文件）
* index-test.php （Yii 自动生成的项目检测文件，可删除）

> 7.yii 入口文件分析 [参考来源](http://www.jb51.net/article/57840.htm)
``` php
<?php

// change the following paths if necessary
// 定义 yii 核心类库文件路径
$yii=dirname(__FILE__).'/yii/framework/yii.php';
// 定义项目主配置文件路劲
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
// 设置项目为调试模式
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
//设置项目调试信息 log 的递归层级
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

// 包含 yii 核心类库
require_once($yii);
// 实例化 yii 核心类库文件，并条用run方法，启动项目
Yii::createWebApplication($config)->run();
```

### 简单使用