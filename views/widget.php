<?php
use Pagekit\Application as App;
$view->script('theme', 'twitter:js/twitterapi.js');
$settings = App::module('twitter')->config();
?>
<a class="twitter-timeline" href="https://twitter.com/<?=$settings['name']?>" data-tweet-limit="<?= $settings['number'] ?>" data-chrome="<?php if ($settings['transparent']) {echo 'transparent';}; if ($settings['noborders']) {echo 'noborders';}; if ($settings['noscrollbar']) {echo 'noscrollbar';};?>">
</a>
