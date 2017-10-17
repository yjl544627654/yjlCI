<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!--<link rel="shortcut icon" href="/favicon.ico">-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="<?=PUBLIC_PATH?>css/style.css">

</head>

<link rel="stylesheet" href="<?=PUBLIC_PATH?>css/validation_errors.css">

<!-- 内容区域 -->

<body class="gray">
	<form method="post">
    <div class="basicBox basicBack">
        <div class="basicLine basicBorder basicPad_2">
            <div class="basicLine basicPad_1 basicPos basicMin">
                <div class="basicLeft">姓名</div>
                <div class="basicright">
                    <input name="" type="text" placeholder="" class="fom1" disabled="" value="<?=$user['truename']?> ">
                </div>
            </div>
        </div>
        <div class="basicLine basicBorder basicPad_2">
            <div class="basicLine basicPad_1 basicPos basicMin">
                <div class="basicLeft">生日</div>
                <div class="basicright">
                    <input name="" type="text" placeholder="" class="fom1" disabled="" value="<?=$user['birthday']?>">
                </div>
            </div>
        </div>
        <div class="basicLine basicBorder basicPad_2">
            <div class="basicLine basicPad_1 basicPos basicMin">
                <div class="basicLeft">联系电话</div>
                <div class="basicright">
                    <input name="" type="text" placeholder="" class="fom1" disabled="" value="<?=$user['phone']?>">
                </div>
            </div>
        </div>
    </div>
    <div class="infor basicBorder">收货地址</div>
    <div class="basicBox basicBack">
        <div class="basicLine basicPad_2">
            <div class="basicLine basicPad_1 basicPos basicMin basicBorder">
                <div class="basicLeft">选择地区</div>
                <div class="basicright">
                    <a class="address">
                        <b>
                            <img src="<?=PUBLIC_PATH?>images/fimg1.png" height="18" width="10"/>
                        </b>
                        <span>请选择</span>
                    </a>
                </div>
            </div>
           <input type="hidden" name="shipping_address" value="">
        </div>
        <div class="basicLine basicBorder basicPad_2">
            <div class="addressTit">详细地址</div>
            <div class="addressDown">
                <textarea name="detailed_address" cols="" rows="" class="fom2"><?=$user['detailed_address']?></textarea>
            </div>
        </div>
    </div>
    <div class="btnBox">
        <div class="btnLine">
            <input name="" type="submit" value="保存设置" class="fom3">
        </div>
        <div class="btnLine">
            <input name="" type="button" value="返回" class="fom3" onclick="javascript:history.go(-1)">
        </div>
    </div>
    </form>

    <?php $this->load->view('common/nav'); ?>
    
</body>

<!-- 内容区域end -->


