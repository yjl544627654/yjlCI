<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!--<link rel="shortcut icon" href="/favicon.ico">-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="<?=PUBLIC_PATH?>css/style.css">
    <script type="text/javascript" src="<?=PUBLIC_PATH?>js/jquery-1.11.2.min.js"></script>
</head>


<body class="gray">
    <div class="memSelect">
        <h2>当前积分</h2>
        <div class="count"><?=$user['integral']?></div>
        <div class="btn">
            <a href="<?=site_url('goods/index')?>"><span>积分兑换</span><img src="<?=PUBLIC_PATH?>images/fimg5.png" height="16" width="10"/></a>
        </div>
    </div>
    <div class="mempoint basicBorder">
        <div class="pointleft">
            <b><img src="<?=PUBLIC_PATH?>images/fimg6.png" height="20" width="19"/></b>
            <span>积分详情</span>
        </div>
        <div class="pointtime">
            <div class="timebox" pzdatatype="select">
                <input type="hidden" />
                <div class="titcon"  pzdatatype="title">
                    时间筛选
                </div>
                <ul class='serul' pzdatatype="content">
                    <div class="htree">
                        <img src="<?=PUBLIC_PATH?>images/fimg9.png" height="8" width="14"/>
                    </div>
                    <div class="divbox">
                        <li <?php if(empty($where_day)) echo 'class="on"';?>>
                            <a href="<?=site_url('integral/userlog')?>">全部</a>
                            <b>
                                <img src="<?=PUBLIC_PATH?>images/fimg8.png" height="12" width="15"/>
                            </b>
                        </li>
                        <li <?php if($where_day == 7) echo 'class="on"';?>>
                            <a href="<?=site_url('integral/userlog/7')?>">近一周</a>
                            <b>
                                <img src="<?=PUBLIC_PATH?>images/fimg8.png" height="12" width="15"/>
                            </b>
                        </li>
                        <li <?php if($where_day == 60) echo 'class="on"';?>>
                            <a href="<?=site_url('integral/userlog/60')?>">近三个月</a>
                            <b>
                                <img src="<?=PUBLIC_PATH?>images/fimg8.png" height="12" width="15"/>
                            </b>
                        </li>
                        <li <?php if($where_day == 365) echo 'class="on"';?>>
                            <a href="<?=site_url('integral/userlog/365')?>">近一年</a>
                            <b>
                                <img src="<?=PUBLIC_PATH?>images/fimg8.png" height="12" width="15"/>
                            </b>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="infor basicBorder"></div>
    <div class="tiemall">
        <h3 class="visittitle">
            <span>全部</span>
        </h3>
        <ul class="visitbox">
            <?php foreach($log as $key=>$val): ?>
            <li>
                <div class="visittme"><?=$val->addtime?></div>
                <div class="visitcount"><span><?=$val->integralnum?></span>分</div>
                <a href="#" class="elli"><?=$val->use_adder?></a>
            </li>
            <?php endforeach;?>
            
        </ul>
    </div>
    <div class="btnBox">
        <div class="btnLine">
            <input name="" type="button" value="返回" class="fom3" onclick='window.location.href="<?=site_url('user/index')?>"'>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(function () {
        var pzselect = $('div[pzdatatype=select]');

        pzselect.each(function () {
            //为自身赋值样式
            pzselect.css({ position: 'relative' });

            //为下拉框内容赋值样式
            var $title = $(this).find('div[pzdatatype=title]');
            //var _kuandu = $title.width(),
             _gaodu = $title.height();
            $(this).find('ul[pzdatatype=content]').css({
                //width: _kuandu + 'px',
                position: 'absolute',
                top: _gaodu + 'px',
                //'max-height': '150px',
                //'overflow-x': 'hidden',
                //'overflow-y': 'auto',
                display: 'none'
            });
        });
        pzselect.click(function () {
            $(this).find('ul[pzdatatype=content]').slideToggle(0);
            $(this).toggleClass("on")
        });
        pzselect.find('ul[pzdatatype=content] li').click(function () {
            var val = $(this).text();
            $(this).parent().parent().siblings('div[pzdatatype=title]').text(val);
            $(this).parent().parent().siblings('input[type=hidden]').val(val);
            $(this).addClass('on').siblings().removeClass('on');
        });
        pzselect.bind('mouseleave', function () {
            $(this).find('ul[pzdatatype=content]').hide();
        });
    });
</script>