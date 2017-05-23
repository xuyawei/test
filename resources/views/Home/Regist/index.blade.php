<!DOCTYPE html>
<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width,user-scalable=yes">
    <title>会员注册_芒果网</title>
    <meta name="description" content="支持会员卡号、用户名、手机号、联名卡号等多种登录方式，非会员可直接进行机票、酒店、旅游度假预订，并在预订成功后自动注册成为会员">
    <meta name="keywords" content="会员，登录，注册，忘记密码，直接预订，继续预订，会员卡号，用户名，手机号，联名卡号，证件，代理编号，代理卡号">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/global.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/card.css') }}">
    <!--[if lt IE 7]>
    <link type="text/css" rel="stylesheet" href="/mbrWebCenter/skin/css/login/login-ie6.css">
    <![endif]-->

    <style type="text/css">
        .log_error {
            float: right;
            height: 32px;
            line-height: 32px;
            margin-right: 400px;
            padding: 0 17px;
            border: 1px solid rgb(255, 189, 191);
            background-color: rgb(255, 235, 236);
            color: rgb(255, 1, 1);
        }
    </style>

    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">
    <script src="{{ URL::asset('js/jquery-1.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.js') }}"></script>

    <script type="text/javascript">
        var categoryNameStr = '[&#034;N南方航空常旅客|9200600001&#034;,&#034;M芒果会籍-积分采购-银行|5500400001&#034;,&#034;M芒果会籍-亲友团|9400900001&#034;,&#034;Z中国银行信用卡|9103100001&#034;,&#034;G工行牡丹芒果信用卡|9105000001&#034;,&#034;G工行借记卡|9105000002&#034;,&#034;G工行爱购卡-深圳分行|9105000003&#034;,&#034;G工行信用卡|9105000005&#034;,&#034;Z招行信用卡|9102000004&#034;,&#034;Z招行银联标准信用卡|9102000005&#034;,&#034;N农业银行信用卡|9104700001&#034;,&#034;X兴业芒果联名卡|9104900001&#034;,&#034;X兴业银行信用卡(非联名)|9104900002&#034;,&#034;S深航尊鹏俱乐部|9200500001&#034;,&#034;J吉祥航空常旅客|9200700001&#034;,&#034;G广发银行信用卡|9100700001&#034;,&#034;G工商银行（亚洲）信用卡|9105000004&#034;,&#034;Z招商银行芒果旅行信用卡|9102000001&#034;,&#034;Z招商银行Hello Kitty-JCB普卡|9102000003&#034;,&#034;H海航金鹏俱乐部|9200100001&#034;,&#034;P浦发银行|9100800001&#034;,&#034;J交行信用卡|9101800001&#034;,&#034;P平安银行信用卡|9103700001&#034;,&#034;S深圳发展银行信用卡|9104000001&#034;,&#034;Z中信银行信用卡|9100500001&#034;,&#034;J建设银行—芒果旅行龙卡|9101500001&#034;,&#034;J建设银行信用卡|9101500002&#034;,&#034;M芒果会籍-香港直销|0510000001&#034;,&#034;M芒果会籍-直销|9010000001&#034;,&#034;D东方万里行|9200200001&#034;,&#034;S神州租车联名卡|9308100001&#034;,&#034;M魅秀芒果旅行卡|9309100001&#034;,&#034;F斐玛特芒果网联名卡|9304400001&#034;,&#034;M芒果-深业联名卡|9305700001&#034;,&#034;S商旅会籍-海尔|0000000132&#034;,&#034;J交行深圳分行信用卡|9101800002&#034;,&#034;Y亚洲万里通|9200900001&#034;,&#034;S深圳大运会|9310600001&#034;,&#034;G广州银行公务卡|9105300001&#034;,&#034;A澳门航空澳尊会|9200800001&#034;,&#034;N农行芒果联名信用卡|9104700002&#034;,&#034;G港中旅集团内部员工|9310200001&#034;,&#034;J建行芭比美丽卡|9101500003&#034;,&#034;X新浪微博|9604000001&#034;,&#034;D大學教職員(香港)|0560100003&#034;,&#034;X香港 - 香港教育工作者聯會|0560100004&#034;,&#034;X香港-香港理工大學理賞卡|9310800001&#034;,&#034;J建行欧洲旅行信用卡|9101500004&#034;,&#034;J交通银行信用卡(香港)-白金卡|0560300002&#034;,&#034;JCB信用卡|9105400001&#034;,&#034;J交通银行信用卡(香港)-普&amp;金卡|0560300001&#034;,&#034;X香港–“讚好”群组|0560400001&#034;,&#034;X香港 - 電訊盈科儲蓄互助社|0560100005&#034;,&#034;Z招商银行HelloKitty-JCB金卡|9102000006&#034;,&#034;A安卡-考拉合作卡|9311000001&#034;,&#034;M民生银行信用卡|9105500001&#034;,&#034;M芒果网7周年纪念会员卡|9312600001&#034;,&#034;X兴业银行白金卡信用卡|9313100001&#034;,&#034;D迪信通金卡会员|9314300001&#034;,&#034;D迪信通钻卡会员|9314400001&#034;,&#034;Z中国银行上海分行|9105700001&#034;,&#034;D迪信通银卡会员|9314200001&#034;,&#034;X香港 - 工银亚洲信用卡|9311400001&#034;,&#034;X香港 – 香港青年旅舍协会|9311500001&#034;,&#034;H华夏银行-深圳分行|9316500001&#034;,&#034;Z招商银行信用卡|9316800001&#034;,&#034;M芒果网业务拓展卡|9314500001&#034;,&#034;X兴业银行-深圳分行|9316700001&#034;,&#034;S上海农商银行信用卡|9105600001&#034;,&#034;D电视端合作|9311600001&#034;,&#034;X厦门航空白鹭会员|9315500001&#034;,&#034;H花旗银行信用卡|9315700001&#034;,&#034;Z招商银行掌上生活|9317000001&#034;,&#034;Z渣打银行|9106000001&#034;,&#034;X香港 - 恆生銀行信用卡|9312200001&#034;,&#034;J交行深圳分行借记卡|9316600001&#034;]';
        var categoryNameStr = categoryNameStr.replace(/&#034;/g,'\"');
        //var categoryNameStr = '["F斐玛特芒果网联名卡|9304400001","M芒果-深业联名卡|9305700001"]';
        //alert(categoryNameStr);
        var categorys = JSON.parse(categoryNameStr);
        //alert(categorys);

        var temp = [];
        var categoryNames = [];
        for(var index in categorys){
            //alert(categorys[index].split("|")[0]);
            //alert(categorys[index].split("|")[1]);
            temp[categorys[index].split("|")[0]] = categorys[index].split("|")[1];
            categoryNames.push(categorys[index].split("|")[0]);
        }

        $(function() {
            var availableTags = categoryNames;
            $( "#cardname" ).autocomplete({
                source: availableTags
            });
            $("#inputVerifyCode").keydown(function(event){
                var e = event || window.event || arguments.callee.caller.arguments[0];
                var ck=e.keyCode||e.which||e.charCode;
                if(!(ck==8||ck==9||ck==13||ck==27||ck==45||ck==46||ck==108||ck==144||(ck>34&&ck<41)||(ck>47&&ck<58)||(ck>95&&ck<106))){
                    event.preventDefault();
                }
            });
            $(cardname).keypress(function(event){
                var e = event || window.event || arguments.callee.caller.arguments[0];
                var ck=e.keyCode||e.which||e.charCode;
                if (ck==108||ck==13) pageSubmit();
            });
        });


        //验证卡段
        function validateCard(obj){
            var op = document.getElementById("mbrCategoryCd").value;
            var param={'mbrCategoryCd':op,'aliasCard':obj.value};
            if(obj.value||""){
                var url="/mbrWebCenter/ajax_new/ajaxValidateCard.action";
                $.post(url,param,function(data){
                    if(data.result != "0"){
                        document.getElementById("cardError").style.display='';
                        document.getElementById("cardError").innerText = '您输入的卡号不在卡段范围之内或此卡号已被注册，请重新输入！';
                        document.getElementById("cardSuccess").style.display='none';
                    } else {
                        document.getElementById("cardError").style.display='none';
                        document.getElementById("cardSuccess").style.display='';
                    }
                },"json");
            }
        }


    </script>
</head>

<body>
<!-- 登录头部 [[-->
<div class="log_header">
    <a href="http://www.mangocity.com/">
        <h1>芒果网</h1> <img src="{{ URL::asset('img/logo.gif') }}" alt="芒果网logo">
    </a> <span></span>
    <h2>会员注册</h2>
</div>
<!-- 登录头部 ]]-->

<div class="log_content">
    <div class="log_big">
        <!-- 注册页面 [[-->
        <div class="registered  xxxxx">
            <!-- 注册页面nav [[-->
            <ul class="registered_nav clear">
                <li class="on">芒果网会员 <span></span>
                </li>
            </ul>
            <!-- 注册页面 ]]-->
            <!-- 会员卡注册 [[ -->
            <div class="membership mgw_card" id="registerInputDiv">

                <form id="registerForm" action="/mbrWebCenter/register_new/resgister.action" method="post">

                    <input id="strength" name="strength" value="" type="hidden">
                    <input id="loyaltyaccount.customer.crm_countryMobileNo" name="registerVO.crm_countryMobileNo" value="86" type="hidden">
                    <input id="sex" name="registerVO.sex" value="99" type="hidden">

                    <div class="form_line" id="mbrCategoryCdNameDiv" style="display:none">
                        <label id="cardImg" class="yhk-type"></label>
                        <input class="yhk-card" name="mbrCategoryCdName" id="mbrCategoryCdName" value="芒果网网站会员" disabled="disabled" type="text">
                    </div>

                    <input id="mbrCategoryCd" name="registerVO.mbrCategoryCd" value="0100100001" type="hidden">

                    <div class="form_line" id="aliasNoDiv" style="display:none">
                        <label for="aliasNo">卡号</label> <input name="registerVO.aliasNo" id="aliasNo" placeholder="卡号" maxlength="30" onblur="validateCard(this);" type="text">
                        <div class="tishi">卡号</div>
                        <div id="cardSuccess" class="mber_success" style="display:none;"></div>
                        <div id="cardError" class="mber_error" style="display:none;">您输入的卡号不在卡段范围之内或此卡号已被注册，请重新输入！</div>
                    </div>
                    <!-- 暂时屏蔽邮箱 -->
                    <div class="form_line">
                        <label for="mobileNo"><span>*</span>登录名</label> <input name="registerVO.mobileNo" id="mobileNo" placeholder="手机  " onblur="checkAndShowVerificationCode();" type="text">
                        <div class="tishi">手机</div>
                        <div id="mobileSuccess" class="mber_success" style="display:none;"></div>
                        <div id="mobileError" class="mber_error" style="display:none;">
                            请正确填写你的手机号码，以便芒果网确认你的预订服务</div>
                    </div>
                    <div class="form_line">
                        <label for="password"><span>*</span>设置密码</label> <input name="password" id="password" value="" placeholder="6-12位数字" onkeyup="checkAndGetStrength()" onblur="checkAndGetStrength()" maxlength="12" onpaste="return false" oncontextmenu="return false" oncopy="return false" oncut="return false" type="password">
                        <div class="tishi">6-12位数字</div>
                        <div id="pswdSuccess" class="mber_success" style="display:none;"></div>
                        <div id="pswdError" class="mber_error" style="display:none;"></div>
                    </div>
                    <!--安全程度  弱 on-ruo、中 on-zhong、强 on-qiang [[-->
                    <div id="safetydegree" class="safetydegree on-ruo" style="display:none;">
                        安全程度 <span class="ruo">弱</span>
                        <span class="zhong">中</span>
                        <span class="qiang">强</span>
                    </div>
                    <!--安全程度  ]]-->
                    <div class="form_line">
                        <label for="password"><span>*</span>确认密码</label> <input name="registerVO.rePassword" id="rePassword" value="" placeholder="再次输入密码" onblur="checkRepassword()" onpaste="return false" oncontextmenu="return false" oncopy="return false" oncut="return false" type="password">
                        <div class="tishi">再次输入密码</div>
                        <div id="rePswdSuccess" class="mber_success" style="display:none;"></div>
                        <div id="rePswdError" class="mber_error" style="display:none;"></div>
                    </div>
                    <div id="emailCodeInput" class="verification_code_email" style="display:none;">
                        <label for="name">校验码</label> <input name="registerVO.verifyCode" id="verifyCode" autocomplete="off" onkeyup="validateVericode();" type="text"> <img id="image" src="%E4%BC%9A%E5%91%98%E6%B3%A8%E5%86%8C_%E8%8A%92%E6%9E%9C%E7%BD%91_files/ImageServlet.txt"> <a href="javascript:changeImage2();">换一张</a>
                        <div class="log_error" style="display:none;">请输入正确的校验码</div>
                    </div>
                    <div id="mobileCodeInput" class="verification_code_phone" style="display:none;">
                        <label for="inputCode">手机验证码</label> <input name="inputVerifyCode" id="inputVerifyCode" autocomplete="off" maxlength="6" type="text">
                        <input name="validateResult" id="validateResult" value="" type="hidden">
                        <div class="resend" id="sendCodeBtn" onclick="regainVerify()">发送验证码</div>
                    </div>
                    <!-- <div id="codeError" class="mber_error" style="display:none;"></div> -->

                    <input id="isCard" name="registerVO.isCard" value="1" type="hidden"> <input id="isAgreeSendPromotion" name="registerVO.isAgreeSendPromotion" value="0" type="hidden">
                    <!-- <div id="codeError2" class="mber_error" style="display:none;"></div> -->
                    <div class="regulations">
                        <input name="zddl" id="zddl" checked="checked" value="" type="checkbox"> <label for="zddl">同意</label> <span>
								<a href="http://www.mangocity.com/mbrWebCenter/jsp/member/gangz_tiaokuang.html" target="_blank">《芒果网服务条例》</a>
							</span>
                    </div>
                    <input value="注册" class="members_submit" onclick="checkCode()" type="button">
                </form>
            </div>
            <!-- 会员卡注册 ]] -->

        </div>
    </div>
</div>


<!--#include virtual="/inc/footer.html"-->



<script type="text/javascript">

    $(".registered_nav >li").click(function(){
        var index=$(".registered_nav >li").index($(this));
        $(this).addClass('on').siblings().removeClass('on');
        $(".mgw_card").hide();
        $(".mgw_card").eq(index).show();
        var isCard = document.getElementById("isCard");
        var name = new String($(this).text().replace(/[\s]/g,""));
        if(isCard.value == 1) {
            if(name == "芒果网会员") {
                isCard.value=0;
                document.getElementById("registerInputDiv").style.display = '';
                document.getElementById("selectCardDiv").style.display = 'none';
                document.getElementById("mbrCategoryCdNameDiv").style.display = 'none';
                document.getElementById("aliasNoDiv").style.display = 'none';
            }
            // alert(isCard.value);
        } else {
            if(name == "合作卡会员") {
                isCard.value=1;
            }
            // alert(isCard.value);
        }

    });


    $(".sharecard_nav>li").click(function(){
        var index=$(".sharecard_nav>li").index($(this));
        $(this).addClass('on').siblings().removeClass('on');
        $(".share_card").hide();
        $(".share_card").eq(index).show();
    });
    $(".unionpay_nav>li").click(function(){
        var index=$(".unionpay_nav>li").index($(this));
        $(this).addClass('on').siblings().removeClass('on');
        $(".unionpay_type").hide();
        $(".unionpay_type").eq(index).show();
    });

    // 下拉展示
    /* $("#cardname").click(function(e){
     $(this).focus();
     $(".sharecardtype").show();
     e.stopPropagation();

     }) */
    $("body").click(function(){
        $(".sharecardtype").hide();
    });
    $(".sharecardtype").click(function(e){
        e.stopPropagation();//阻止冒泡到body
    });
</script>



<script type="text/javascript">

    //document.oncontextmenu=function(){event.returnValue=false;};//屏蔽鼠标右键
    //document.onkeydown=function(){if(event.keyCode==116){alert("本网页严禁刷新！"); event.keyCode=0; event.returnValue=false;}};

    var count=0;
    function countTime(){
        if(this.count>0){
            this.count--;
            document.getElementById("sendCodeBtn").innerText=""+this.count+"秒";
        }else{
            document.getElementById("sendCodeBtn").innerText="点击重新发送";
            return;
        }
        setTimeout(countTime, 1000);
    }

    function regainVerify(){
        //判断密码、确认密码是否输入
        debugger;
        if(!checkPassword())
        {
            return;
        }

        if(!checkRepassword())
        {
            return;
        }

        if(!validateVericode()){
            return;
        }
        debugger;
        if(this.count>0){
            alert("随机验证码已经发送!请耐心等待"+this.count+"秒后如未收到请在此点击获取随机码...");
            return;
        }
        this.count=60;
        var mobileNo = document.getElementById("mobileNo").value;
        var verifyCode = $("#verifyCode").val();//校验码
        var param={'mobileNo':mobileNo,'_verifyCode':verifyCode};
        var url="/mbrWebCenter/registerAjax_new/randomNumber.action";
        $.ajax({
            type : "post",
            url : url,
            data : param,
            success : function(data){
                if (data.result == '1')
                    alert("您的验证码已经发送,请注意查收!");
                else{
                    alert(data.result);
                    // alert("666666" + data.result);
                }
            }
        });
        countTime();
    }

    //校验图片验证码
    function validateVericode(){
        var url = "/mbrWebCenter/validate_new/validateSysrand.action";
        var param = {};
        var flag = false;
        param.verifyCode=$("#verifyCode").val();
        $.ajax({
            type:"post",
            url:url,
            data:param,
            async:false,
            success:function(data){
                if(data == "E"){
                    $(".log_error").text('您输入的校验码为空').show();
                    flag = false;
                } else if(data == "N"){
                    $(".log_error").text('请输入正确的校验码').show();
                    flag = false;;
                }else if(data == "Y"){
                    debugger;
                    $(".log_error").hide();
                    flag = true;
                }
            }
        });
        return flag;
    }

    /*
     * 校验手机验证码
     */
    function validateDynamicCode() {
        var url = "/mbrWebCenter/validate_new/validateDynamicCode.action";
        var dynamicCode = document.getElementById("inputVerifyCode").value;
        var mobileNo = document.getElementById("mobileNo").value;
        $.ajax({
            type:"post",
            url:url,
            data:"dynamicCode="+dynamicCode + "&mobileNo="+mobileNo,
            async:false,
            success:function(responseText){

                document.getElementById("validateResult").value = responseText;
            }
        });
    }


    function checkCode() {
        // 校验合作卡卡号
        if($("#aliasNo:visible").size()>0&&!checkAlias()) {
            return;
        }

        // 校验手机号或邮箱
        if(!checkUsername()) {
            return;
        }

        // 校验密码
        if(!checkPassword()) {
            return;
        }

        // 校验确认密码
        if(!checkRepassword()) {
            return;
        }

        // 校验验证码是否输入
        var inputVerifyCode = document.getElementById("inputVerifyCode").value;
        var verifyCode = document.getElementById("verifyCode").value;
        if((inputVerifyCode == null || inputVerifyCode == "") && (verifyCode == null || verifyCode == "")) {
            /* document.getElementById("codeError").innerText = '请输入验证码！';
             document.getElementById("codeError").style.display = ''; */
            alert("请输入验证码！");
            return;
        }

        if(!document.getElementById("zddl").checked) {
            alert("请确认芒果网服务条款！");
            return;
        }

        var username = document.getElementById("mobileNo").value;
        if(!validateUsername(username)) {
            return;
        }

        if(username.indexOf('@') < 0) {
            validateDynamicCode();
        }

        document.getElementById("sendCodeBtn").disabled = true;
        var validateResult = document.getElementById("validateResult").value;

        if(validateResult == '0') {
            /* document.getElementById("codeError").innerText = '验证码输入错误，请重新输入！';
             document.getElementById("codeError").style.display = ''; */
            alert("验证码输入错误，请重新输入！");
            document.getElementById("sendCodeBtn").disabled = false;
            return;
        } else if(validateResult == '-1') {
            alert("对不起！您校验验证码已达限额，请明天尝试！");
            document.getElementById("sendCodeBtn").disabled = false;
            return;
        } else {
            document.getElementById("registerForm").submit();
            return;
        }

    }



    function pageSubmit() {
        var cardName = document.getElementById("cardname").value;
        if(cardName == null || cardName == '') {
            return;
        }
        var cardNameId = temp[cardName];
        if(cardNameId == null || cardNameId == '') {
            document.getElementById("cardNameError").innerText = '请输入正确的合作卡类型！';
            document.getElementById("cardNameError").style.display = '';
            return;
        }
        $("#cardNameError").hide();
        document.getElementById("registerInputDiv").style.display = '';
        document.getElementById("selectCardDiv").style.display = 'none';
        document.getElementById("mbrCategoryCdNameDiv").style.display = '';
        document.getElementById("aliasNoDiv").style.display = '';
        document.getElementById("mbrCategoryCdName").value = cardName;
        document.getElementById("mbrCategoryCd").value = cardNameId;
        document.getElementById("cardImg").style.background = 'url(../skin/img/login/card.jpg) right center no-repeat';
        initForm();
    }

    function checkAndGetStrength() {
        if(checkPassword()) {
            getStrength();
        }
    }

    function getStrength() {
        var password = document.getElementById("password").value;
        if(password == null || password == '') {
            document.getElementById("safetydegree").style.display='none';
        } else {
            document.getElementById("safetydegree").style.display='';
        }
        if(password.length <= 6) {
            document.getElementById("safetydegree").className = 'safetydegree on-ruo';
            document.getElementById("strength").value = '弱';
        }
        if(password.length > 6 && password.length <= 9) {
            document.getElementById("safetydegree").className = 'safetydegree on-zhong';
            document.getElementById("strength").value = '中';
        }
        if(password.length > 9) {
            document.getElementById("safetydegree").className = 'safetydegree on-qiang';
            document.getElementById("strength").value = '强';
        }
    }

    function setInnerText(element, text) {
        if (typeof element.textContent == "string") {
            element.textContent = text;
        } else {
            element.innerText = text;
        }
    }

    function checkPassword() {
        var password = document.getElementById("password").value;
        if(password == null || password == '') {
            document.getElementById("pswdSuccess").style.display='none';
            //document.getElementById("pswdError").innerText = '密码长度不小于6位';
            setInnerText(document.getElementById("pswdError"),'密码长度不小于6位');
            document.getElementById("pswdError").style.display = '';
            return false;
        }
        if(password.length < 6) {
            document.getElementById("safetydegree").className = 'safetydegree on-ruo';
            document.getElementById("strength").value = '弱';
            document.getElementById("pswdSuccess").style.display='none';
            setInnerText(document.getElementById("pswdError"),'密码长度不小于6位');
            document.getElementById("pswdError").style.display = '';
            return false;
        } else {
            if(password=="111111" || password=="222222" || password=="333333" || password=="444444" || password=="555555"
                    || password=="666666" || password=="777777" || password=="888888" || password=="999999" || password=="000000"
                    || password=="123456" || password=="654321") {
                document.getElementById("pswdSuccess").style.display='none';
                setInnerText(document.getElementById("pswdError"),'您的密码太简单，为了保证您的个人资料不被泄漏，请设置更复杂的密码。');
                //document.getElementById("pswdError").innerText = '您的密码太简单，为了保证您的个人资料不被泄漏，请设置更复杂的密码。';
                document.getElementById("pswdError").style.display = '';
                return false;
            }
            var pattern = /[^0-9]/g;
            if (pattern.test(password)) {
                document.getElementById("pswdSuccess").style.display='none';
                setInnerText(document.getElementById("pswdError"),'请输入6-12位数字!');
                //document.getElementById("pswdError").innerText = '请输入6-12位数字!';
                document.getElementById("pswdError").style.display = '';
                return false;
            }
            document.getElementById("pswdError").style.display = 'none';
            document.getElementById("pswdSuccess").style.display='';
            return true;
        }
    }

    function changeImage2(){
        var timenow = new Date().getTime();
        document.getElementById("image").src="/mbrWebCenter/servlet/ImageServlet?d="+timenow;
    }

    function checkAndShowVerificationCode() {
        if(checkUsername()) {
            showVerificationCode();
        }
    }

    function showVerificationCode() {
        var username = document.getElementById("mobileNo").value;
        if(username == null || username == '') {
            document.getElementById("mobileCodeInput").style.display='none';
            document.getElementById("emailCodeInput").style.display='none';
            return;
        }
        if(validateUsername(username)) {
            if(username.indexOf('@') < 0) {
                // mobile
                document.getElementById("mobileCodeInput").style.display='';
                document.getElementById("emailCodeInput").style.display='block';
            } else {
                // email
                document.getElementById("mobileCodeInput").style.display='none';
                document.getElementById("emailCodeInput").style.display='';
            }
        }
    }

    function checkAlias() {
        var flag=false;
        $.ajax({
            type: "POST",
            url: "/mbrWebCenter/ajax_new/ajaxValidateCard.action",
            data: {'mbrCategoryCd':$("#mbrCategoryCd").val(),'aliasCard':$("#aliasNo").val()},
            dataType: "json",
            async: false,
            cache: false,
            success: function(data){
                flag = data.result=="0";
                if(flag){
                    $("#cardError").hide();
                    $("#cardSuccess").show();
                } else {
                    $("#cardError").show();
                    $("#cardSuccess").hide();
                }
            }
        });
        return flag;
    }

    function checkUsername() {
        var username = document.getElementById("mobileNo").value;
        if(username == null || username == '') {
            document.getElementById("mobileError").style.display='';
            document.getElementById("mobileError").innerText = '请正确填写你的手机号码，以便芒果网确认你的预订服务';
            document.getElementById("mobileSuccess").style.display='none';
            return false;
        } else {
            if(username.indexOf('@') < 0) {
                var partten = /^1[3,4,5,7,8]\d{9}$/;
                if(partten.test(username)){
                    document.getElementById("mobileSuccess").style.display='';
                    document.getElementById("mobileError").style.display='none';
                    return true;
                } else {
                    document.getElementById("mobileError").style.display='';
                    //请正确填写你的手机号码或邮箱，以便芒果网确认你的预订服务
                    document.getElementById("mobileError").innerText = '请正确填写你的手机号码，以便芒果网确认你的预订服务';
                    document.getElementById("mobileSuccess").style.display='none';
                    return false;
                }
            } else {
                //不是邮箱，则验证提示错误
                document.getElementById("mobileError").style.display='';
                //请正确填写你的手机号码或邮箱，以便芒果网确认你的预订服务
                document.getElementById("mobileError").innerText = '请正确填写你的手机号码，以便芒果网确认你的预订服务';
                document.getElementById("mobileSuccess").style.display='none';
                return false;
                /*//暂时注释邮箱验证
                 var partten=/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
                 if(partten.test(username)){
                 document.getElementById("mobileSuccess").style.display='';
                 document.getElementById("mobileError").style.display='none';
                 return true;
                 } else {
                 document.getElementById("mobileError").style.display='';
                 document.getElementById("mobileError").innerText = '邮箱格式不正确';
                 document.getElementById("mobileSuccess").style.display='none';
                 return false;
                 }*/
            }
        }
    }

    function setCategoryName(obj) {
        $("#tagId > li").removeClass("on");
        $(obj).addClass("on");
        var temp = $(obj).text();
        //document.getElementById("cardname").value = obj.innerText;
        $("#cardname").val(temp);
        $("#cardname").focus();
    }

    function checkRepassword() {
        var rePassword = document.getElementById("rePassword").value;
        var password = document.getElementById("password").value;
        if(password == null || password == "") {
            document.getElementById("rePswdSuccess").style.display='none';
            document.getElementById("rePswdError").style.display='none';
            return false;
        }
        if(password == rePassword) {
            document.getElementById("rePswdError").style.display='none';
            document.getElementById("rePswdSuccess").style.display='';
            return true;
        } else {
            document.getElementById("rePswdError").style.display='';
            setInnerText(document.getElementById("rePswdError"),'确认密码不正确');
            //document.getElementById("rePswdError").innerText = '确认密码不正确';
            document.getElementById("rePswdSuccess").style.display='none';
            return false;
        }
    }

    function validateUsername(val) {
        var result = true;
        var param={'username':val};
        if(val != null && val != ""){
            var url="/mbrWebCenter/validate_new/validateUsername.action";
            $.ajax({
                type : "post",
                url : url,
                data : param,
                async : false,
                success : function(data){
                    if(data=="Y"){
                        document.getElementById("mobileError").style.display='';
                        document.getElementById("mobileError").innerText = '手机号码或者邮箱已被注册，请重新输入！';
                        document.getElementById("mobileSuccess").style.display='none';
                        result = false;
                    } else {
                        document.getElementById("mobileError").style.display='none';
                        document.getElementById("mobileSuccess").style.display='';
                        result = true;
                    }
                }
            });
            return result;
        }
    }

    function initForm() {
        document.getElementById("mobileNo").value='';
        document.getElementById("password").value='';
        document.getElementById("rePassword").value='';
        document.getElementById("inputVerifyCode").value='';
        document.getElementById("verifyCode").value='';
        document.getElementById("mobileSuccess").style.display='none';
        document.getElementById("mobileError").style.display='none';
        document.getElementById("pswdSuccess").style.display='none';
        document.getElementById("pswdError").style.display='none';
        document.getElementById("rePswdSuccess").style.display='none';
        document.getElementById("rePswdError").style.display='none';
    }
</script>

<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul><span role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></span></body></html>