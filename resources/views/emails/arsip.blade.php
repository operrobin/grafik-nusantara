<?php
$template = \App\Models\Config::getContent('submit');
$content = str_replace(['{$name}','{$email}','{$phone}','{$instagram}','{$story}', '{$type}'],[$name,$email,$phone, $instagram, $story, $type], $template);
?>
<div id="content">
    {!! $content !!}
</div>
