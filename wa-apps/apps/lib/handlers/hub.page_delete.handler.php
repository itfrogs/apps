<?php

class appsHubPage_deleteHandler extends waEventHandler
{
    public function execute(&$params = null, $array_keys = null){
		$event = wa('apps')->event('hub.page_delete', $params, $array_keys);
        return ifempty($event);
    }
}
