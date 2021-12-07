<?php
/*
**
*/

if(!isset($__meta['title'])) $__meta['title'] = CLIENT_APP_NAME;
if(!isset($__meta['keywords'])) $__meta['keywords'] = CLIENT_APP_NAME;
if(!isset($__meta['description'])) $__meta['description'] = CLIENT_APP_NAME;

?>
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__meta['title'];?></title>
  <meta name="keywords" content="<?php echo $__meta['keywords'];?>">
  <meta name="description" content="<?php echo $__meta['description'];?>">
  <?php
    $str = '';

    if(isset($__meta['base_css'])) {
      foreach($__meta['base_css'] as $css) {
        $str .= '<link rel="stylesheet" type="text/css" href="'. $css . '?v='.APP_BUILD_NUMBER.'">'. PHP_EOL;
      }
    }

    if(isset($__meta['base_js'])) {
      foreach($__meta['base_js'] as $js) {
        $str .= '<script src="'.$js.'?v='.APP_BUILD_NUMBER.'"></script>'. PHP_EOL;
      }
    }

    if(isset($__meta['css'])) {
      foreach($__meta['css'] as $css) {
        $str .= '<link rel="stylesheet" type="text/css" href="'. $css . '?v='.APP_BUILD_NUMBER.'">'. PHP_EOL;
      }
    }

    if(isset($__meta['js'])) {
      foreach($__meta['js'] as $js) {
        $str .= '<script src="'.$js.'?v='.APP_BUILD_NUMBER.'"></script>'. PHP_EOL;
      }
    }
echo $str;
  ?>
</head>
