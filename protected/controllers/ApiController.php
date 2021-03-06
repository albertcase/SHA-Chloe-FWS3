<?php

class ApiController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$_SESSION['openid'] = '111';exit;
		$this->render('index');
	}

	public function actionList()
	{
		$sql = "select id,name from same_type";
		$typeList = Yii::app()->db->createCommand($sql)->queryAll();
		$sql2 = "select tid,url from same_pic where tid in (select id from same_type) order by tid,id";
		$picList = Yii::app()->db->createCommand($sql2)->queryAll();
		$slideList = array();
		for ($i=0;$i<count($picList);$i++) {
			for ($j=0;$j<count($typeList);$j++) {
				if ($typeList[$j]['id'] == $picList[$i]['tid']) {
					$slideList[$typeList[$j]['name']][]=$picList[$i];
				}
			}
		}
		echo json_encode($slideList);exit;
		$store = Yii::app()->db->createCommand($sql)->queryRow();
		$this->render('store', array('store' => $store));
	}

	public function actionJssdk()
	{
		$url = urldecode($_GET['url']);
		//$wechatObj = new Weixin();
		//echo $url=$wechatObj->getJsSDK($url);
		echo file_get_contents("http://chloewechat.samesamechina.com/api/jssdk?url=".urlencode($url));
		Yii::app()->end();
	}

	public function actionStatus()
	{
		$openid = isset($_SESSION['openid'])?$_SESSION['openid']:'';
		echo file_get_contents("http://chloewechat.samesamechina.com/api/status2?openid=".$openid);
		Yii::app()->end();
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}
}