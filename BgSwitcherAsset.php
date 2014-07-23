<?php
namespace raoul2000\widget\bgswitcher;

use yii\web\AssetBundle;

/**
 * @author Raoul <raoul.boulard@gmail.com>
 */
class BgSwitcherAsset extends AssetBundle
{
	public $js = ['jquery.bgswitcher.js'];
	public $depends = ['yii\web\JqueryAsset'];

	public function init()
	{
		$this->sourcePath = __DIR__.'/assets';
		return parent::init();
	}
}
