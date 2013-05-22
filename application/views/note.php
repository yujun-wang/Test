<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <script type="text/javascript" src="/CI/lib/jquery.js"></script>
    <script type="text/javascript" src="/CI/lib/jquery.cookie.js"></script>
    <script type="text/javascript" src="/CI/lib/jquery.hotkeys.js"></script>
    <script type="text/javascript" src="/CI/lib/jquery.jstree.js"></script>
    <link type="text/css" rel="stylesheet" href="/CI/css/style.css"/>
    <title>Note</title>
  </head>
  <body>
    <h1>User Management</h1>
    <div id="demo1" class="demo" style="height:100px;">
      <?php
        echo $menu;     
      ?>
    </div>
  <script type="text/javascript" class="source below">
$(function () {
  // TO CREATE AN INSTANCE
  // select the tree container using jQuery
  $("#demo1")
    // call `.jstree` with the options object
    .jstree({
      // the `plugins` array allows you to configure the active plugins on this instance
      "plugins" : ["themes","html_data","ui","crrm","hotkeys"]
    })
    // EVENTS
    // each instance triggers its own events - to process those listen on the container
    // all events are in the `.jstree` namespace
    // so listen for `function_name`.`jstree` - you can function names from the docs
    .bind("loaded.jstree", function (event, data) {
      // you get two params - event & data - check the core docs for a detailed description
    });
});
</script>
  </body>
</html>