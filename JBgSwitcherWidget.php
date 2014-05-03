<?php
namespace raoul2000\bgswitcher;

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
 *	echo JBgSwitcherWidget::widget([
 *		'id' => 'jumbotron',
 *		'images' => [
 *			'images/background/image1.jpg',
 *			'images/background/image2.jpg',
 *			'images/background/image3.jpg',
 *			'images/background/image4.jpg'
 *		]
 *	]);
 * ~~~
 * 
 * @author Raoul <raoul.boulard@gmail.com>
 *
 */
class JBgSwitcherWidget extends Widget
{
	/**
	 * @var 
	 */
	public $id;
	/**
	 * @var array Background images
	 */	
	public $images= [];
	/**
	 * @var int Interval of switching in milliseconds
	 */	
	public $interval = 5000;
	/**
	 * @var boolean Start the switch on after initialization
	 */	
	public $start = true;
	/**
	 * @var boolean Loop the switch
	 */	
	public $loop = true;
	/**
	 * @var boolean Shuffle the image order
	 */	
	public $shuffle = false;
	/**
	 * @var string Effect type
	 */	
	public $effect = 'fade';
	/**
	 * @var int  Effect duration
	 */
	public $duration = 1000;
	/**
	 * @var string Effect easing
	 */
	public $easing = 'swing';
	/**
	 * Initializes the widget.
	 * @throws InvalidConfigException if the "id" property is not set.
	 */	
	public function init()
	{
		parent::init();
		if (empty($this->id)) {
			throw new InvalidConfigException('The "id" property must be set.');
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
	 * Registers the needed JavaScript.
	 */
	public function registerClientScript()
	{
		$options = $this->getClientOptions();
 		$options = empty($options) ? '' : Json::encode($options);
 		
 		$js = "jQuery(\"#{$this->id}\").bgswitcher(".$options.");";

 		$view = $this->getView();
		JBgSwitcherAsset::register($view);
		$view->registerJs($js);
	}	
	/**
	 * @return array the options for the text field
	 */
	protected function getClientOptions()
	{
		$options = [];
		if ($this->images !== null) {
			$options['images'] = $this->images;
		}
	
		if ($this->interval !== null) {
			$options['interval'] = $this->interval;
		}		

		if ($this->start !== null) {
			$options['start'] = $this->start;
		}
		
		if ($this->loop !== null) {
			$options['loop'] = $this->loop;
		}	
		if ($this->shuffle !== null) {
			$options['shuffle'] = $this->shuffle;
		}			
		if ($this->effect !== null) {
			$options['effect'] = $this->effect;
		}		

		if ($this->duration !== null) {
			$options['duration'] = $this->duration;
		}
		
		if ($this->easing !== null) {
			$options['easing'] = $this->easing;
		}

		return $options;
	}	
}