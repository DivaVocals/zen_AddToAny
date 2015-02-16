<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// |                                                                      |
// +----------------------------------------------------------------------+
// | AddToAny Sharing version 1.0                                         |
// | This file contains the AddToAny supporting javascript                                               |
// | AddToAny is the very first universal sharing platform, and the       | 
// | customizable sharing platform that makes it easy for                 | 
// | visitors to share and bookmark content using any service             |
// |                                                                      |
// +----------------------------------------------------------------------+
// $Id: jscript_add_to_any.php 2015-02-15 06:45:56 cjones $
//
?>

<script type="text/javascript">
// A custom "onReady" function for AddToAny
function my_addtoany_onready() {
    a2a_config.target = '.share-this';
    a2a.init('page');
}

// Setup AddToAny "onReady" callback
var a2a_config = a2a_config || {};
a2a_config.tracking_callback = {
    ready: my_addtoany_onready
};
	a2a_config.onclick = 0;
	a2a_config.delay = 200;
	a2a_config.show_title = 1;
	//a2a_config.orientation = "down"; //By default the drop-down menu displays above the button when there is not enough visible space below the button. You can force the drop-"down" menu to always appear downward.
	//a2a_config.orientation = "up"; //You can also force the menu to appear upward.
// Additional a2a_config properties may go above here

// Load AddToAny script asynchronously
(function(){
    var a = document.createElement('script');
    a.type = 'text/javascript';
    a.async = true;
    a.src = '//static.addtoany.com/menu/page.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(a, s);
})();
</script>