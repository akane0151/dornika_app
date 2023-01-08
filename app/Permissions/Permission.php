<?php

namespace App\Permissions;

class Permission
{
    public const CAN_CREATE_POSTS = 'create-blog-posts';
    public const CAN_UPDATE_POSTS = 'update-blog-posts';
    public const CAN_DELETE_POSTS = 'delete-blog-posts';

    public const CAN_CREATE_ADMIN = 'create-admins';
    public const CAN_UPDATE_ADMIN = 'update-admins';
    public const CAN_DELETE_ADMIN = 'delete-admins';

    public const CAN_CREATE_USER = 'create-users';
    public const CAN_UPDATE_USER = 'update-users';
    public const CAN_DELETE_USER = 'delete-users';

    public const CAN_CREATE_GEO = 'create-geo';
    public const CAN_UPDATE_GEO = 'update-geo';
    public const CAN_DELETE_GEO = 'delete-geo';
}
