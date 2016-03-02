<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/js/toucher.js"></script>

<div id="loading">
	<div class="loading-logo">
		<div class="loading-mask"></div>
	</div>
</div>

<div class="videoFrame">
    <div id="mod_player"></div>
</div>

<div class="homepage" id="touchBox">

<div href="javascript:;" class="logo">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/logo.png" width="100%" />
</div>

<!-- pageSection two -->
<div class="pageSection" id="ctwo">
    <div class="slogan">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/slogan_2.png" width="100%" />
    </div>

    <div class="sliderCon">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sscon">
                        <a href="javascript:;" class="playBtn"></a>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/poster.jpg" width="100%" />
                        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/tips2_1.png" width="100%" /></p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="sscon">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/slider_3_1.jpg" width="100%" />
                        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/tips2_2.png" width="100%" /></p>
                    </div>
                </div>

            </div>

        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

    <div class="sliderArr_down">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/sliderArrDown.png" width="100%" />
    </div>
</div>

<!-- pageSection one -->
<div class="pageSection" id="cone">
    <div class="slogan">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/slogan_1.png" width="100%" />
    </div>

    <div class="sliderCon">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sscon">
                        <a href="javascript:;" class="playBtn"></a>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/poster.jpg" width="100%" />
                        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/tips1_1.png" width="100%" /></p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

    <div class="sliderArr_down">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/sliderArr.png" width="100%" />
    </div>
</div>


<!-- pageSection zero -->
<div class="pageSection" id="czero">
    <div class="slogan">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/slogan_0.png" width="100%" />
    </div>

    <div class="sliderCon">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sscon">
                        <a href="javascript:;" class="playBtn"></a>
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/poster.jpg" width="100%" />
                        <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/tips1_1.png" width="100%" /></p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

    <div class="sliderArr_down">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/sliderArrDown.png" width="100%" />
    </div>
</div>



</div>




<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script>


<script type="text/javascript">
    ;(function($){
        $(function(){

            var vidArr = ["j0186t7y55y"];
            var vPic = ["../fws3/img/poster.jpg"]

    		var player;
    		var videoWidth = document.body.clientWidth;
    		var videoHeight = videoWidth * (1080 / 1920);

    		$(".video").css({"height":videoHeight});

    		var videoFun = function(n){
    			var video = new tvp.VideoInfo();
    			video.setVid(vidArr[n]);
    			player = new tvp.Player();
    			player.create({
    				width: videoWidth + 'px',
    				height: videoHeight + 'px',
    				video: video,
    				pic: vPic[n],
    				modId:"mod_player", //mod_player是刚刚在页面添加的div容器 autoplay:true
    				onallended: function () {
                        //播放器播放完毕时
                        $(".videoFrame").hide();
                        videoFun("0");
                    },
                    onpause: function () {
                        //播放器触发暂停时，目前只针对HTML5播放器有效
                        $(".videoFrame").hide();
                        videoFun("0");
                    },
    			});

    		}

            videoFun(0);

            $(".playBtn").click(function(){
                $(".videoFrame").show();
                player.enterFullScreen();
                player.play();
            })

            $(".videoFrame").click(function(){
                $(".videoFrame").hide();
                videoFun("0");
            })


     	})


    function pageSection(cnode){
        $(".pageSection").hide();
        $("#"+cnode).show();
    }



    var swipercTwo = new Swiper('#ctwo .swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        spaceBetween : 10,
        paginationClickable: true
        //loop: true
    });

    var swipercOne = new Swiper('#cone .swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        spaceBetween : 10,
        paginationClickable: true
        //loop: true
    });

    var swipercZero = new Swiper('#czero .swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        spaceBetween : 10,
        paginationClickable: true
        //loop: true
    });

    var StateManager = function(){
      currState = 'cone';
      var states = {
        ctwo: function(){
            swipercTwo.update();
            currState = 'ctwo';
            //  切换状态
        },
        cone: function(){
            swipercOne.update();
            currState = 'cone';
            //  切换状态
        },
        czero: function(){
            swipercZero.update();
            currState = 'czero';
            //  切换状态
        }
      }
      var changeState = function( state ){
            state == null ? state = currState : state;
            pageSection(state);
            states[ state ] && states[ state ]();
      }
      return {
          changeState  : changeState
      }
    }, currState;
    var stateManager = StateManager();
    stateManager.changeState();


    var myTouch = util.toucher(document.getElementById('touchBox'));
    myTouch.on('swipeUp',function(){
        //console.log("up:" + currState);
        if(currState == "ctwo"){
             stateManager.changeState("cone");
        }else{

        }

//        if(currState == "ctwo"){
//             stateManager.changeState("cone");
//        }else if(currState == "cone"){
//            stateManager.changeState("czero");
//        }else{
//
//        }

    })

    myTouch.on('swipeDown',function(){
        //console.log("down:" + currState);
        if(currState == "cone"){
             stateManager.changeState("ctwo");
        }else{

        }

//        if(currState == "cone"){
//             stateManager.changeState("ctwo");
//        }else if(currState == "czero"){
//            stateManager.changeState("cone");
//        }else{
//
//        }

    })



    })(jQuery)









</script>

