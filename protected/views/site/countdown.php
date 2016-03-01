<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/js/toucher.js"></script>

<div id="loading">
	<div class="loading-logo">
		<div class="loading-mask"></div>
	</div>
</div>


<div class="homepage" id="touchBox">

<div class="videoFrame">
    <div id="mod_player"></div>
</div>


<div href="javascript:;" class="logo">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/logo.png" width="100%" />
</div>

<div class="slogan">
    距离 Chloé 2016 秋冬巴黎时装秀<br />开幕还有 <em>2</em> 天
</div>

<div class="sliderCon">

    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="sscon">
                    <a href="javascript:;" class="playBtn"></a>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/poster.jpg" width="100%" />
                    <p>“And I…”<br />2016秋冬时装秀，即将启幕。<br /><br />左右滑动查看高圆圆最新照片</p>
                </div>


            </div>

            <div class="swiper-slide">
                <div class="sscon">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/slider_3_1.jpg" width="100%" />
                    <p>2016秋冬时装秀，即将启幕。<br /><br />左右滑动查看高圆圆最新照片</p>
                </div>
            </div>

        </div>

    </div>

    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>


</div>


</div>

<!-- <div class="sliderArr">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/sliderArr.png" width="100%" />
</div> -->

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true
        //loop: true
    });
</script>


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



//    var myTouch = util.toucher(document.getElementById('touchBox')),cDay;
//    myTouch.on('swipeUp',function(){
//        cDay = $(".slogan em").html();
//
//        if(cDay == 3 || cDay == 2){
//            $(".slogan em").html(parseInt(cDay)-1);
//        }
//
//    })
//
//    myTouch.on('swipeDown',function(){
//        cDay = $(".slogan em").html();
//
//        if(cDay == 2 || cDay == 1){
//            $(".slogan em").html(parseInt(cDay)+1);
//        }
//
//    })

    })(jQuery)

</script>



