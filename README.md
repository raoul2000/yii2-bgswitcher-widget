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

Once the extension is installed, and assuming that our 3 images are stored in `@webroot/images/background`, simply use this code by  :

```php
<?php
	use raoul2000\widget\bgswitcher\BgSwitcher;
	
	BgSwitcher::widget([
		'selector' => '#targetId',
		'pluginOptions' => [
			'images' => [
				'images/background/image1.jpg',
				'images/background/image2.jpg',
				'images/background/image3.jpg',
				'http://placehold.it/350x150'   // this image is remote
			]
		]
	]);
?>

<div id="targetId" class="cover-bg" style="width:100%;height:250px;">
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

**If this plugin did not convinced you, have a look to the [Backstretch Plugin](https://github.com/raoul2000/yii2-backstretch-widget)**

License
-------

**yii2-bgswitcher-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.
