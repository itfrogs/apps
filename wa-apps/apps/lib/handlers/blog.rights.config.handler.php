<?php

class appsBlogRightsconfigHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
        return wa('apps')->event('blog.rights.config', $params, $array_keys);
    }
}