Background Image Switcher
=========================
This extension is a wrapper for the jQuery Background Image Switcher Plugin

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist raoul2000/yii2-bgswitcher-widget "*"
```

or add

```
"raoul2000/yii2-bgswitcher-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
	echo JBgSwitcherWidget::widget([
		'id' => 'targetId',
		'images' => [
			'images/background/image1.jpg',
			'images/background/image2.jpg',
			'images/background/image3.jpg',
			'images/background/image4.jpg'
		]
	]);
?>

<div id="targetId" style="cover-bg" style="width:100%;">
	<p>some text here ... </p>
</div>
```

Below is an example of a CSS style to apply to the target container :  


```css
.cover-bg {
	background-repeat: no-repeat;
	background-position: center;
	background-attachment: fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
```

For complete documentation please refer to the [official BgSwitcher page](http://rewish.github.io/jquery-bgswitcher/). You may also have a look
to the [Github](https://github.com/rewish/jquery-bgswitcher) project page.

License
-------

**yii2-bgswitcher-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.
