<?php
namespace raoul2000\widget\bgswitcher;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

/**
 * JBgSwitcherWidget is a wrapper for the [jQuery.BgSwitcher](https://github.com/rewish/jquery-bgswitcher).
 *
 * ~~~
 *	echo BgSwitcher::widget([
 *		'selector' => '#jumbotron',
 *      'pluginOptions' => [
  *			'images' => [
 *				'images/background/image1.jpg',
 *				'images/background/image2.jpg',
 *				'images/background/image3.jpg',
 *				'images/background/image4.jpg'
 *			]
 *      ]
 *	]);
 * ~~~
 * 
 * @author Raoul <raoul.boulard@gmail.com>
 *
 */
class BgSwitcher extends Widget
{
	/**
	 * @var string the JQuery selector to attach the background switcher (e.g. '#bg_container')
	 */
	public $selector;
	/**
	 * @var array jQuery.BgSwitcher options see https://github.com/rewish/jquery-bgswitcher
	 */
	public $pluginOptions = [];	

	/**
	 * Initializes the widget.
	 * @throws InvalidConfigException if the "selector" property is not set.
	 */	
	public function init()
	{
		parent::init();
		if (empty($this->selector)) {
			throw new InvalidConfigException('The "selector" property must be set.');
		}		
	}
	/**
	 *  Runs the widget.
	 * @see \yii\base\Widget::run()
	 */
	public function run()
	{
		$this->registerClientScript();
	}
	/**
	 * Registers the needed JavaScript and inject the JS initialization code
	 */
	public function registerClientScript()
	{
 		$options = empty($this->pluginOptions) ? '' : Json::encode($this->pluginOptions);
 		
 		$js = "jQuery(\"{$this->selector}\").bgswitcher(".$options.");";

 		$view = $this->getView();
		BgSwitcherAsset::register($view);
		$view->registerJs($js);
	}		
}