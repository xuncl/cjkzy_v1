<?php
return array(
	//'配置项'=>'配置值'
//    'DEFAULT_V_LAYER'=>'Template', // 将默认视图存放目录View改为Template（自定义）
//    'TMPL_TEMPLATE_SUFFIX'=>'.xcl', // 更改模板最终显示的后缀
//    'TMPL_FILE_DEPR'=>'_', // 视图模板文件夹下的连接符替换，内部也需要改
//    'VIEW_PATH'=>'./Public/Views/' ,
        // 上面四项修改后自己内如路径也要如同显示一样，或者说上面几个选项是为了配合内部改动而存在的。

//    'TMPL_L_DELIM'=>'{{',
//    'TMPL_R_DELIM'=>'}}',   // 如果要打印出{}符号可以考虑这样写



    'DEFAULT_THEME'=>'default',
    'TMPL_DETECT_THEME'=>true,    //
    'THEME_LIST'=>'default,xcl',  //多主题情形下这两项必须要配置
    'TMPL_PARSE_STRING'=>
        array(
            '__pub__'=>'__PUBLIC__', // __PUBLIC__本身也是替换文本，它属于默认规则
        ),

);