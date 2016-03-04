
<div id="loading">
	<div class="loading-logo">
		<div class="loading-mask"></div>
	</div>
</div>

<!-- 视频
<div class="videoFrame">
    <div id="mod_player"></div>
</div> -->



<!-- 音频 -->
<audio id="audio" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/audio.wav" ></audio>


<div class="homepage" id="home">
    <div id="bjt_info">
        <div id="time">加载中...</div>
        <div id="date">加载中...</div>
    </div>

    <div class="message">
        <div class="msReference"></div>
        <div class="message_con">
            <!-- <p>微信</p>
            <p>你有一条来自CHLOE FW 2016得微信消息</p>
            <p class="tis">滑动来查看</p> -->
            <p><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/m.png" width="70%" /></p>
        </div>
        <div class="message_line"></div>
    </div>

    <div class="homeFooter">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/footer.png" width="100%" />
    </div>
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/bg.jpg" width="100%" />
</div>

<div class="homepage" id="dialog">
    <div class="mfooter">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mfooter.png" width="100%" />
    </div>

    <div class="pupLayer">
        <!-- Swiper -->
            <div class="swiper-container" id="pupLayerBox">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                    </div>
                </div>
            </div>
    </div>

    <!-- Swiper -->
    <div class="swiper-container" id="messageBox">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <ul class="dialogList">
                    <li>
                        <div class="mTime"><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mt_1.png" width="100%" /></div>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd>
                                <span class="triangle-left"></span>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mw_1.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd class="nobg">
                                <img data-src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/b1.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/m1.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd class="nobg">
                                <img data-src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/b2.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/m2.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <div class="mTime"><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mt_2.png" width="100%" /></div>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd>
                                <span class="triangle-left"></span>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mw_2.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd class="nobg">
                                <img data-src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/b3.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/m3.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <div class="mTime"><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mt_3.png" width="100%" /></div>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd>
                                <span class="triangle-left"></span>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mw_3.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd class="nobg">
                                <img data-src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/b4.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/m4.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <div class="mTime"><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mt_4.png" width="100%" /></div>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd>
                                <span class="triangle-left"></span>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mw_4.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd class="nobg">
                                <img data-src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/b5.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/m5.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <div class="mTime"><img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mt_5.png" width="100%" /></div>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd>
                                <span class="triangle-left"></span>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/mw_5.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <li>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd class="nobg">
                                <img data-src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/b6.jpg" src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/mImgs/m6.png" width="100%" />
                            </dd>
                        </dl>
                    </li>

                    <!-- <li>
                        <dl>
                            <dt>
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                            </dt>
                            <dd>
                                <span class="triangle-left"></span>
                                <h2>Chloé 2016 秋冬时装秀</h2>
                                <dl>
                                    <dt>
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/fws3/img/head.jpg" width="100%" />
                                    </dt>
                                    <dd>
                                        chloewechat.samesamechina.com
                                    </dd>
                                </dl>
                            </dd>
                        </dl>
                    </li> -->


                </ul>
            </div>
            <!-- Add Scroll Bar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
    </div>
</div>

<script src="http://imgcache.gtimg.cn/tencentvideo_v1/tvp/js/tvp.player_v2.js"></script>


            <script type="text/javascript">

                if (typeof console == "undefined"){
                    var console = {
                        log:function(){}
                    };
                }

                var swfLoaded = false;
                var initTime = undefined;


                function setFDF(){
                    swfLoaded = true;
                    //console.log(initTime);
                    if(initTime) setClockTime(initTime);
                    return true;
                }

                function setClockTime(time){
                    if (swfLoaded && swfCtrl) {
                        //console.log("COLK:"+time);
                        //try{
                            swfCtrl.setTime(time);
                        //}catch(e){}
                    }
                }
			</script>
			<script type="text/javascript">
			var myDate = new Date();
			    var _cm = myDate.getMonth();
			    var _cd = myDate.getDate();
			    var _xq = myDate.getDay();
			    var weekString = '日一二三四五六';

			    var timeString = parseInt(_cm+1) + "月" + _cd + "日 周" + weekString[_xq];

                //eg: pattern = "yyyy-MM-dd hh:mm:ss";
                Date.prototype.getFormattedDate = function(pattern){

                    function getFullStr(i){
                        return i>9?""+i:"0"+i;
                    }

                    pattern = pattern.replace(/yyyy/,this.getFullYear())
                        .replace(/MM/,getFullStr(this.getMonth()+1))
                        .replace(/dd/,getFullStr(this.getDate()))
                        .replace(/hh/,getFullStr(this.getHours()))
                        .replace(/mm/,getFullStr(this.getMinutes()))
                        .replace(/ss/,getFullStr(this.getSeconds()));

                    return pattern;
                };




				(function(){
				var week = '日一二三四五六';
				var innerHtml = '{0}:{1}';
				var dateHtml = "{0}月{1}日 周{2}";
				var timer = 0;
				var beijingTimeZone = 8;

				function format(str, json){
					return str.replace(/{(\d)}/g, function(a, key) {
						return json[key];
					});
				}

				function p(s) {
				    return s < 10 ? s : s;
					//return s < 10 ? '0' + s : s;
				}

				window.baidu_time = function(time){
					initTime = time;
					show(time);
					timer = setInterval(function(){
						time += 1000;
						show(time);
					}, 1000);

				}

				function show(time){
					var timeOffset = ((-1 * (new Date()).getTimezoneOffset()) - (beijingTimeZone * 60)) * 60000;
					var now = new Date(time - timeOffset);
					document.getElementById('time').innerHTML = (new Date()).getFormattedDate("hh<em>:</em>mm");
					setClockTime(time);
					//document.getElementById('date').innerHTML = format(dateHtml, [ p((now.getMonth()+1)), p(now.getDate()), week.charAt(now.getDay())]);
				    document.getElementById('date').innerHTML = timeString;
				}

				function init(){
                    var elm = document.createElement('SCRIPT');
                    elm.src = 'http://open.baidu.com/app?module=beijingtime&t=' + new Date().getTime();
                    document.getElementsByTagName('HEAD')[0].appendChild(elm);
                    setTimeout(function(){init()}, 60000);
                }

                window.baidu_time(1457098533602);

				})();









                var $container = $(".msReference"),
                    $dragBxo = $(".message_con"),
                    gridWidth = parseInt($(".message").width());

                TweenLite.set($container, {width: gridWidth*2});

				var myDraggable = Draggable.create($dragBxo, {
                        bounds:$container,
                        edgeResistance:0.65,
                        type:"x",  //type:"x,y"
                        throwProps:true,
                        autoScroll:true,
                });


                myDraggable[0].addEventListener("release", onPress);

                function onPress() {
                  if(Math.floor(myDraggable[0].pointerX) > Math.floor(gridWidth*0.8)){
                        $dragBxo.css({"opacity":0});
                        TweenMax.fromTo($("#home"), 0.3, {
                            scale:1,
                            blurFilter:{blurX:50, blurY:10},
                            opacity:1
                        }, {
                            scale:1.1,
                            //blurFilter:{blurX:50, blurY:10},
                            opacity:0,
                            onComplete:function(){
                                $("#home").hide();
                            }
                        });
                        TweenMax.fromTo($("#dialog"), 1, {
                            scale:2,
                            blurFilter:{blurX:50, blurY:10},
                            opacity:0
                        }, {
                            scale:1,
                            //blurFilter:{blurX:50, blurY:10},
                            opacity:1,
                            onComplete:function(){
                                messageWriteFun();
                            }
                        });

                  }else{
                        TweenLite.to($dragBxo, 0.3, {
                           x:0,
                           delay:0.1,
                           ease:Power2.easeInOut
                        });
                  }
                }

            var swiper;

            swiper = new Swiper('#messageBox', {
                  direction: 'vertical',
                  slidesPerView: 'auto',
                  mousewheelControl: true,
                  freeMode: true
            });


            function messageWriteFun(){
                        // Create a timeline
                        var tl = new TimelineLite();



                        var $body = $('body');
                        var $iframe = $('<iframe src="/favicon.ico"></iframe>');

                        document.title = '正在输入中...';
                        // hack在微信等webview中无法修改document.title的情况
                        $iframe.on('load',function() {
                          setTimeout(function() {
                              $iframe.off('load').remove();
                          }, 0);
                        }).appendTo($body);

                        // Sequence multiple tweens
                         $(".dialogList li").eq(0).css({"display":"inline-block"});
                         tl.to($(".dialogList li").eq(0), 0.6, {opacity:1, onComplete:function(){
                               document.getElementById('audio').play();
                               $(".dialogList li").eq(1).css({"display":"inline-block"});
                         }}, 2)
                         .to($(".dialogList li").eq(1), 0.1, {opacity:1, onComplete:function(){
                               document.getElementById('audio').play();
                               if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                   swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                               }
                               swiper.update();
                               $(".dialogList li").eq(2).css({"display":"inline-block"});
                         }}, 4)
                         .to($(".dialogList li").eq(2), 0.1, {opacity:1, onComplete:function(){
                               document.getElementById('audio').play();

                               if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                   swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                               }
                               swiper.update();
                               $(".dialogList li").eq(3).css({"display":"inline-block"});
                         }}, 6)
                         .to($(".dialogList li").eq(3), 0.1, {opacity:1, onComplete:function(){
                               document.getElementById('audio').play();

                               if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                    swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                               }
                               swiper.update();
                               $(".dialogList li").eq(4).css({"display":"inline-block"});
                          }}, 8)
                         .to($(".dialogList li").eq(4), 0.1, {opacity:1, onComplete:function(){
                               document.getElementById('audio').play();

                               if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                    swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                               }
                               swiper.update();
                               $(".dialogList li").eq(5).css({"display":"inline-block"});

                         }}, 10)
                         .to($(".dialogList li").eq(5), 0.1, {opacity:1, onComplete:function(){
                                document.getElementById('audio').play();

                                if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                     swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                                }
                                swiper.update();
                                $(".dialogList li").eq(6).css({"display":"inline-block"});

                          }}, 12)
                         .to($(".dialogList li").eq(6), 0.1, {opacity:1, onComplete:function(){
                                 document.getElementById('audio').play();

                                 if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                      swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                                 }
                                 swiper.update();
                                 $(".dialogList li").eq(7).css({"display":"inline-block"});

                           }}, 14)
                         .to($(".dialogList li").eq(7), 0.1, {opacity:1, onComplete:function(){
                                 document.getElementById('audio').play();

                                 if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                      swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                                 }
                                 swiper.update();
                                 $(".dialogList li").eq(8).css({"display":"inline-block"});

                           }}, 16)
                         .to($(".dialogList li").eq(8), 0.1, {opacity:1, onComplete:function(){
                                 document.getElementById('audio').play();

                                 if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                      swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                                 }
                                 swiper.update();
                                 $(".dialogList li").eq(9).css({"display":"inline-block"});

                           }}, 18)
                         .to($(".dialogList li").eq(9), 0.1, {opacity:1, onComplete:function(){
                                 document.getElementById('audio').play();

                                 if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                      swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                                 }

                                 swiper.update();
                                 $(".dialogList li").eq(10).css({"display":"inline-block"});
                           }}, 20)
                         .to($(".dialogList li").eq(10), 0.1, {opacity:1, onComplete:function(){
                                  document.getElementById('audio').play();

                                  document.title="高圆圆";
                                  // hack在微信等webview中无法修改document.title的情况
                                  $iframe.on('load',function() {
                                    setTimeout(function() {
                                        $iframe.off('load').remove();
                                    }, 0);
                                  }).appendTo($body);

                                  if(parseInt($(".dialogList").css("height")) > swiper.height - 32){
                                       swiper.setWrapperTranslate(-(parseInt($(".dialogList").css("height")) - swiper.height + 32));
                                  }

                                  swiper.update();
                            }}, 22);

            }








			</script>



<script type="text/javascript">
//    ;(function($){
//        $(function(){
//
//            var vidArr = ["n01549ttjri"];
//            var vPic = ["../fws3/img/poster.jpg"]
//
//    		var player;
//    		var videoWidth = document.body.clientWidth;
//    		var videoHeight = videoWidth * (1080 / 1920);
//
//    		$(".video").css({"height":videoHeight});
//
//    		var videoFun = function(n){
//    			var video = new tvp.VideoInfo();
//    			video.setVid(vidArr[n]);
//    			player = new tvp.Player();
//    			player.create({
//    				width: videoWidth + 'px',
//    				height: videoHeight + 'px',
//    				video: video,
//    				pic: vPic[n],
//    				modId:"mod_player", //mod_player是刚刚在页面添加的div容器 autoplay:true
//    				onallended: function () {
//                        //播放器播放完毕时
//                        $(".videoFrame").hide();
//                        videoFun("0");
//                    },
//                    onpause: function () {
//                        //播放器触发暂停时，目前只针对HTML5播放器有效
//                        $(".videoFrame").hide();
//                        videoFun("0");
//                    },
//    			});
//
//    		}
//
//            videoFun(0);
//
//            $(".playBtn").click(function(){
//                $(".videoFrame").show();
//                player.enterFullScreen();
//                player.play();
//            })
//
//            $(".videoFrame").click(function(){
//                $(".videoFrame").hide();
//                videoFun("0");
//            })
//
//
//     	})
//
//    })(jQuery)


var swiperPupLayer = new Swiper('#pupLayerBox', {
      direction: 'vertical',
      slidesPerView: 'auto',
      mousewheelControl: true,
      freeMode: true
});

$(".nobg img").click(function(){
    $(".pupLayer").css("height",$(document).height());
    var bImgNode = new Image();
        bImgNode.src = $(this).attr("data-src");
        bImgNode.width = $(document).width();
        bImgNode.onload = function(){
            $(".pupLayer .swiper-slide").html(bImgNode);
            $(".pupLayer").animate({"opacity": "1"},function(){
                swiperPupLayer.update();
            });

        }
})

$(".pupLayer").click(function(){
    $(this).css({"opacity": "0","height":"0"});
    $(this).find(".swiper-slide").html("");
})

</script>

