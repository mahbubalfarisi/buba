<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Go Fullscreen</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="js/swfobject.js"></script>
        <script type="text/javascript">                 
            var fo = new Object();
            function initFlash()
            {
                fo.flashvars = {};
                fo.params = {
                    allowScriptAccess: "always",
                    allowFullScreen: "true"
                };
                fo.attributes = {};         
                swfobject.embedSWF("./port.swf", "flashcontent", "100%", "100%", "10", "./port.swf", fo.flashvars, fo.params, fo.attributes);
            }
        </script>
    </head>
    <body>
        <div id="flashcontent"></div>
        <script type="text/javascript">
            initFlash();
        </script>
    </body>
</html>