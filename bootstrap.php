<?php

use Blessing\Filter;
use Blessing\Rejection;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events, Filter $filter) {
    $filter->add('can_rename_player', function() {
        return new Rejection(trans('DisablePlayerRename::player.rename'));
    });
};
