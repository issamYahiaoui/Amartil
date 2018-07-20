# ubislider 1.0.0.0
##Simple and lightweight responsive jQuery slider

###Why should I use this slider?

Fully responsive - will adapt to any device
Slides can contain images, video, or HTML content
Small file size, fully themed, simple to implement
Browser support: Firefox, Chrome, Safari, iOS, Android, IE7+
Very light and loading fast
Different types of usage


##License

Released under the MIT license - http://opensource.org/licenses/MIT

Let's get on with it!

##Installation

###Step 1: Link required files

First and most important, the jQuery library needs to be included (no need to download - link directly from Google). Next, download the package from this site and link the ubislider CSS file (for the theme) and the ubislider Javascript file.

```html
<!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- ubislider Javascript file -->
<script src="/js/ubislider.min.js"></script>
<!-- ubislider CSS file -->
<link href="/css/ubislider.css" rel="stylesheet" />
```

###Step 2: Create HTML markup
Slides can contain images, video, or any other HTML content! Put your content of each slider inside `<li>` tag


```html
<div class="ubislider" id="ubislider">
    <a class="arrow prev"></a>
    <a class="arrow next"></a>
    <ul class="ubislider-inner">
        <li>
        	<img src="img/sample1.jpg">
        </li>
        <li>
        	<img src="img/sample2.jpg">
        </li>
        <li>
        	<img src="img/sample3.jpg">
        </li>
   	</ul>
</div>
```

###Step 3: Call the ubislider
Call .ubislider() on `<div id="ubislider">`. Note that the call can made inside or outside of a $(document).ready() call, and the  plugin will work without issue! 

```javascript
$(document).ready(function(){
  $('#ubislider').ubislider();
});
```


##Configuration options

###General
**type**
Type of images to be displayed
```
default: 'standard'
options: 'standard', 'thumb'
```

##Changelog

###Version 1.0.0.0
First Commit