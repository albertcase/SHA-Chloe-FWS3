<?php

class SiteController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
//		if(!isset($_SESSION['openid'])){
//			Header('Location: /weixin/oauth?callback=/');
//			Yii::app()->end();
//		}
		$this->render('index');
	}

	public function actionCountdown(){
	    $this->layout = '//layouts/fws3_main';
//	    if (intval(date("mdHi")) >= 3022300 )
//	       $this->render('countdown_beta');
//	    else
           $this->render('countdown');
    }

    public function actionCountdownbeta(){
        $this->layout = '//layouts/fws3_main';

//        if (intval(date("mdHi")) >= 3022300 )
//           $this->render('countdown');
//        else

        $this->render('countdown_beta');
    }

    public function actionMessage(){
    	    $this->layout = '//layouts/fws3_main';
            $this->render('message');
    }

    public function actionForm(){
            $this->layout = '//layouts/fws3_main';
            $this->render('form');
    }

    public function actionTest()
    	{
    	    $this->layout = '//layouts/fws3_main';
    		$this->render('test');
    	}

	public function actionProlist()
	{
		$this->render('prolist');
	}

	public function actionStore($id)
	{
		$sql = "select * from same_store where id = ".intval($id);
		$store = Yii::app()->db->createCommand($sql)->queryRow();
		$this->render('store', array('store' => $store));
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