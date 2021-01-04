<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'activated' => 'Activated',
            'email' => 'Email',
            'first_name' => 'First name',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            'last_name' => 'Last name',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'collection-type' => [
        'title' => 'Collection Types',

        'actions' => [
            'index' => 'Collection Types',
            'create' => 'New Collection Type',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'description' => 'Description',
            'name' => 'Name',
            
        ],
    ],

    'collection-category' => [
        'title' => 'Collection Categories',

        'actions' => [
            'index' => 'Collection Categories',
            'create' => 'New Collection Category',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'description' => 'Description',
            'name' => 'Name',
            'type_id' => 'Type',
            
        ],
    ],

    'collection' => [
        'title' => 'Collections',

        'actions' => [
            'index' => 'Collections',
            'create' => 'New Collection',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'category_id' => 'Category',
            'created_when' => 'Created when',
            'created_who' => 'Created who',
            'description' => 'Description',
            'image_path' => 'Image path',
            'name' => 'Name',
            
        ],
    ],

    'journal' => [
        'title' => 'Journals',

        'actions' => [
            'index' => 'Journals',
            'create' => 'New Journal',
            'edit' => 'Edit :name',
            'will_be_published' => 'Journal will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'content' => 'Content',
            'published_at' => 'Published at',
            'tags' => 'Tags',
            'title' => 'Title',
            
        ],
    ],

    'config' => [
        'title' => 'Configs',

        'actions' => [
            'index' => 'Configs',
            'create' => 'New Config',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'content' => 'Content',
            
        ],
    ],

    'email-config' => [
        'title' => 'Email Configs',

        'actions' => [
            'index' => 'Email Configs',
            'create' => 'New Email Config',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'driver' => 'Driver',
            'email' => 'Email',
            'encryption' => 'Encryption',
            'host' => 'Host',
            'password' => 'Password',
            'port' => 'Port',
            'username' => 'Username',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];