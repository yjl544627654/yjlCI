<?php $this->load->view('common/header'); ?>
<!-- 内容区域 -->

<body class="gray">
<div class="page-group">
    <div class="content">
        <div class="headerTop">
            <a href="<?=site_url('user/edit')?>">
            <div class="headerImg">
                <img src="<?=PUBLIC_PATH?>images/main1.jpg" alt="" width="100%" />
            </div>
            <h1><?=$user['wx_name']?></h1>
            </a>
        </div>
    </div>
    <div class="infor basicBorder"></div>
    <div class="list-box">
        <ul>
            <li>
                <a href="<?=site_url('integral/userlog')?>" class="basicBorder">
                    <div class="icoleft">
                        <img src="<?=PUBLIC_PATH?>images/fimg33.png" width="22" alt=""/>
                    </div>
                    <span>我的积分</span>
                    <div class="listrihgt"><?=$user['integral']?></div>
                </a>
            </li>
            <li>
                <a href="#" class="basicBorder">
                    <div class="icoleft">
                        <img src="<?=PUBLIC_PATH?>images/fimg34.png" width="22" alt=""/>
                    </div>
                    <span>我要兑换</span>
                    <div class="listrihgt">&nbsp;</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="icoleft">
                        <img src="<?=PUBLIC_PATH?>images/fimg35.png" width="22" alt=""/>
                    </div>
                    <span>历史兑换记录</span>
                    <div class="listrihgt">&nbsp;</div>
                </a>
            </li>
        </ul>
    </div>
    <div class="infor basicBorder"></div>
    <div class="list-box">
        <ul>
            <li>
                <a href="#">
                    <div class="icoleft">
                        <img src="<?=PUBLIC_PATH?>images/fimg36.png" width="22" alt=""/>
                    </div>
                    <span>优惠券</span>
                    <div class="listrihgt">5</div>
                </a>
            </li>
        </ul>
    </div>
    <div class="infor basicBorder"></div>
    <div class="list-box">
        <ul>
            <li>
                <a href="#">
                    <div class="icoleft">
                        <img src="<?=PUBLIC_PATH?>images/fimg37.png" width="22" alt=""/>
                    </div>
                    <span>我的会员卡</span>
                    <div class="listrihgt">&nbsp;</div>
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- 内容区域end -->


<?php $this->load->view('common/nav'); ?>


</body>
</html>
