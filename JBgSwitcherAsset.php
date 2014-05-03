<?php
namespace raoul2000\bgswitcher;
use yii\web\AssetBundle;

/**
 * @author Raoul <raoul.boulard@gmail.com>
 */
class JBgSwitcherAsset extends AssetBundle
{
	public $js = ['jquery.bgswitcher.js'];
	public $depends = ['yii\web\JqueryAsset'];
	
	public function init() {
		$this->sourcePath = __DIR__.'/assets';
		return parent::init();
	}
}
