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
            'id' => "ID",
            'first_name' => "First name",
            'last_name' => "Last name",
            'email' => "Email",
            'password' => "Password",
            'password_repeat' => "Password Confirmation",
            'activated' => "Activated",
            'forbidden' => "Forbidden",
            'language' => "Language",
                
            //Belongs to many relations
            'roles' => "Roles",
                
        ],
    ],

    'category' => [
        'title' => 'Categories',

        'actions' => [
            'index' => 'Categories',
            'create' => 'New Category',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'category' => "Category",
            'active' => "Active",
            'account_types_id' => "Account types",
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'firstname' => "Firstname",
            'lastname' => "Lastname",
            'email_verified_at' => "Email verified at",
            'email' => "Email",
            'password' => "Password",
            'phone' => "Phone",
            'birthday' => "Birthday",
            'chapters_id' => "Chapters",
            
        ],
    ],

    'chapter' => [
        'title' => 'Chapters',

        'actions' => [
            'index' => 'Chapters',
            'create' => 'New Chapter',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'chapter' => "Chapter",
            'description' => "Description",
            
        ],
    ],

    'giving-channel' => [
        'title' => 'Giving Channels',

        'actions' => [
            'index' => 'Giving Channels',
            'create' => 'New Giving Channel',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'channel' => "Channel",
            'active' => "Active",
            'description' => "Description",
            
        ],
    ],

    'giving-record' => [
        'title' => 'Giving Records',

        'actions' => [
            'index' => 'Giving Records',
            'create' => 'New Giving Record',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'amount' => "Amount",
            'currency' => "Currency",
            'giving_channel_id' => "Giving channel",
            'accounts_id' => "Accounts",
            
        ],
    ],

    'account-type' => [
        'title' => 'Account Types',

        'actions' => [
            'index' => 'Account Types',
            'create' => 'New Account Type',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'type' => "Type",
            
        ],
    ],

    'account' => [
        'title' => 'Accounts',

        'actions' => [
            'index' => 'Accounts',
            'create' => 'New Account',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'acc_number' => "Acc number",
            'account_type_id' => "Account type",
            'account_status_id' => "Account status",
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];