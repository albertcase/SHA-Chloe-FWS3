
<div id="loading">
	<div class="loading-logo">
		<div class="loading-mask"></div>
	</div>
</div>


<div class="homepage" id="form">

<div href="javascript:;" class="logo">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/logo.png" width="100%" />
</div>

<form class="orderform" id="orderform">
  <fieldset>
    <legend>限量款预定</legend>
    <p>
      <label for="cname">姓名:</label>
      <input id="cname" placeholder="请输入您的姓名" name="cname" minlength="2" type="text" required>
    </p>
    <p>
      <label for="tel">手机:</label>
      <input id="tel" placeholder="请输入您的手机" type="tel" name="tel" required>
    </p>
    <p>
      <label for="email">邮箱:</label>
      <input id="email" placeholder="请输入您的邮箱" type="email" name="email">
    </p>
    <p class="agreeArea">
      <input id="agree" name="agree" type="checkbox">
      <label for="agree">我要预定Chloé限量版合作款手包</label>
    </p>
    <p class="btnArea">
      <input class="submitBtn" type="button" value="提 交">
    </p>
  </fieldset>
</form>

</div>

<script type="text/javascript">

var chloeFWS = function(){
}

chloeFWS.prototype.checkForm= function(){
    //do something
    //console.log("form");
}

var formObj = new chloeFWS();
formObj.checkForm();


var StateManager = function(){
  var states = {
    form: function( state ){
        //console.log(8);
    }
  }
  var changeState = function( state ){
    states[ state ] && states[ state ]();
  }
  return {
      changeStateFun : changeState
  }
}
var stateManager = StateManager();
stateManager.changeStateFun( 'form' );








var validator = {

    // 所有可以的验证规则处理类存放的地方，后面会单独定义
    types: {},

    // 验证类型所对应的错误消息
    messages: [],

    // 当然需要使用的验证类型
    config: {},

    // 暴露的公开验证方法
    // 传入的参数是 key => value对
    validate: function (data) {

        var i, msg, type, checker, result_ok;

        // 清空所有的错误信息
        this.messages = [];

        for (i in data) {
            if (data.hasOwnProperty(i)) {

                type = this.config[i];  // 根据key查询是否有存在的验证规则
                checker = this.types[type]; // 获取验证规则的验证类

                if (!type) {
                    continue; // 如果验证规则不存在，则不处理
                }
                if (!checker) { // 如果验证规则类不存在，抛出异常
                    throw {
                        name: "ValidationError",
                        message: "No handler to validate type " + type
                    };
                }

                result_ok = checker.validate(data[i]); // 使用查到到的单个验证类进行验证
                if (!result_ok) {
                    msg = "Invalid value for *" + i + "*, " + checker.instructions;
                    this.messages.push(msg);
                }
            }
        }
        return this.hasErrors();
    },

    // helper
    hasErrors: function () {
        return this.messages.length !== 0;
    },
    init: function(data){
        console.log(data);
        this.validate(data);
        if (validator.hasErrors()) {
            console.log(validator.messages.join("\n"));
        }
    }
};


// 验证给定的值是否不为空
validator.types.isNonEmpty = {
    validate: function (value) {
        return value !== "";
    },
    instructions: "传入的值不能为空"
};

// 验证给定的值是否是数字
validator.types.isNumber = {
    validate: function (value) {
        return !isNaN(value);
    },
    instructions: "传入的值只能是合法的数字，例如：1, 3.14 or 2010"
};

// 验证给定的值是否只是字母或数字
validator.types.isAlphaNum = {
    validate: function (value) {
        return !/[^a-z0-9]/i.test(value);
    },
    instructions: "传入的值只能保护字母和数字，不能包含特殊字符"
};


var data = {
    first_name: "Tom",
    last_name: "Xu",
    age: "unknown",
    username: "TomXu"
};

validator.config = {
    first_name: 'isNonEmpty',
    age: 'isNumber',
    username: 'isAlphaNum'
};


validator.validate(data);


</script>









