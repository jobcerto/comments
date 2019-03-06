<?php

namespace Jobcerto\Comments;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jobcerto\Comments\Skeleton\SkeletonClass
 */
class CommentsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'comments';
    }
}
