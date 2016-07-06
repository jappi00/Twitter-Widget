<?php
use Pagekit\Application as App;
$view->script('twitterapi', 'twitter:js/twitterapi.js');
$settings = App::module('twitter')->config();
?>
<a class="twitter-timeline"<?php if (!empty($settings['id'])) {echo 'data-widget-id="'.$settings['id'] . '"';}?>" href="https://twitter.com/<?=$settings['name']?>" data-tweet-limit="<?= $settings['number'] ?>" data-chrome="<?php if ($settings['transparent']) {echo 'transparent';};?> <?php if ($settings['noborders']) {echo 'noborders';};?>  <?php if ($settings['noscrollbar']) {echo 'noscrollbar';};?>">
</a>