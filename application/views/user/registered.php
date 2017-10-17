<?php $this->load->view('common/header'); ?>

<link rel="stylesheet" href="<?=PUBLIC_PATH?>css/validation_errors.css">
<link rel="stylesheet" href="<?=PUBLIC_PATH?>css/mui.css">
<link rel="stylesheet" type="text/css" href="<?=PUBLIC_PATH?>css/mui.picker.css" />

<!-- 内容区域 -->
<body>



<div class="page-group">
    <div class="content">
        <div class="content-block">
            <div class="logo">
                <img src="<?=PUBLIC_PATH?>images/logo.jpg" alt="" width="100%" />
            </div>
            <!--表单-->
            <form method="post" id="reg" >
            <div class="list-block">
                <div class="error"><?php echo validation_errors(); ?></div>

                <div class="item-inner">
                    <div class="item-title">姓名</div>
                    <div class="item-input">
                        <input type="text" name="truename" value="<?=set_value('truename')?>">
                    </div>
                </div>
                <div class="item-inner">
                    <div class="item-title">生日</div>
                    <div class="item-input" style="padding-right: 10px;">
                        <button id='demo2' data-options='{"type":"date","beginYear":1900,"endYear":2017}' class="btn mui-btn mui-btn-block addbg" ><?php if(set_value('birthday')){ echo set_value('birthday'); }else{ echo '选择日期 ...'; }?></button>
                        <input type="hidden" name="birthday" value="<?=set_value('birthday')?>" id='birthday'></input>
                    </div>
                </div>
                <div class="item-inner tel">
                    <div class="item-title">手机</div>
                    <div class="item-input" style="position: relative;">
                        <input type="text" max="11" name="phone" value="<?=set_value('phone')?>" >
                        <a href="#" class="send">发送验证码</a>
                    </div>
                </div>
                <div class="item-inner">
                    <div class="item-title">输入验证码</div>
                    <div class="item-input">
                        <input type="text" name="code">
                    </div>
                </div>
                <div class="item-inner">
                    <div class="item-title" >注册方式</div>
                    <div class="item-input" style="padding-right: 10px;">
                        <select name="store_id">
                            <option value="" >注册区域门店</option>
                            <option value="1" <?php echo  set_select('store_id', '1', TRUE); ?>>注册区域门店1</option>
                            <option value="2" <?php echo  set_select('store_id', '2', TRUE); ?>>注册区域门店2</option>
                        </select>
                    </div>
                </div>
                <div class="item-btn">
                    <input name="" type="submit" value="注 册" class="itembtn" >
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- 内容区域end -->


<?php $this->load->view('common/nav'); ?>

</body>


<script src="<?=PUBLIC_PATH?>js/jquery.js"></script>
<script src="<?=PUBLIC_PATH?>js/mui.min.js"></script>
<script src="<?=PUBLIC_PATH?>js/mui.picker.min.js"></script>
<script>

    (function($) {
        $.init();
        var result = $('#demo2')[0];

        var btns = $('.btn');
        btns.each(function(i, btn) {
            btn.addEventListener('tap', function() {
                var optionsJson = this.getAttribute('data-options') || '{}';
                var options = JSON.parse(optionsJson);
                var id = this.getAttribute('id');
                /*
                 * 首次显示时实例化组件
                 * 示例为了简洁，将 options 放在了按钮的 dom 上
                 * 也可以直接通过代码声明 optinos 用于实例化 DtPicker
                 */
                var picker = new $.DtPicker(options);
                

                picker.show(function(rs) {
                    /*
                     * rs.value 拼合后的 value
                     * rs.text 拼合后的 text
                     * rs.y 年，可以通过 rs.y.vaue 和 rs.y.text 获取值和文本
                     * rs.m 月，用法同年
                     * rs.d 日，用法同年
                     * rs.h 时，用法同年
                     * rs.i 分（minutes 的第二个字母），用法同年
                     */

                    result.innerText = rs.text;

                    document.getElementById("birthday").value = rs.text;

                    /*
                     * 返回 false 可以阻止选择框的关闭
                     * return false;
                     */
                    /*
                     * 释放组件资源，释放后将将不能再操作组件
                     * 通常情况下，不需要示放组件，new DtPicker(options) 后，可以一直使用。
                     * 当前示例，因为内容较多，如不进行资原释放，在某些设备上会较慢。
                     * 所以每次用完便立即调用 dispose 进行释放，下次用时再创建新实例。
                     */
                    picker.dispose();
                });
            }, false);
        });
    })(mui);
</script>
</html>


   