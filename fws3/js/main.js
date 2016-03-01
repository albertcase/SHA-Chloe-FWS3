
var allImgArr = [];


document.addEventListener('touchmove' , function (ev){
	ev.preventDefault();
	return false;
} , false)



function LoadFn ( arr , fn , fn2){
		var loader = new PxLoader();
		for( var i = 0 ; i < arr.length; i ++)
		{
			loader.addImage(arr[i]);
		};
		
		loader.addProgressListener(function(e) {
				var percent = Math.round( e.completedCount / e.totalCount * 100 );
				if(fn2) fn2(percent)
		});	
		
		
		loader.addCompletionListener( function(){
			if(fn) fn();	
		});
		loader.start();	
}


$('img,audio').each( function (){
	if(!$(this).attr('src')) return;
	allImgArr.push($(this).attr('src'));		
});



LoadFn(allImgArr , function (){
	setTimeout(function(){
		$("#loading").fadeOut();
	},200)


	console.log("加载完成！");
} , function ( p ){
	$('.loading-mask').animate({"width":p+"%"});
	console.log(p);
	//$('.loading-mask').html('<br />' + p + '%')
});







