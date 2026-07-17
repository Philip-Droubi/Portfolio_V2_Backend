<?php

use App\Enums\CertificateSourceEnum;

return [

    /*
    |--------------------------------------------------------------------------
    | App Keys Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various keys in the system
    | that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    //Public
    'items'                         => 'Items',
    'user_personal_info'            => 'User Personal Info',
    'info'                          => 'Info',
    'file'                          => 'File',

    //Fields
    'user_name'                     => 'User Name',
    'name'                          => 'Name',
    'name_ar'                       => 'Name (Arabic)',
    'name_en'                       => 'Name (English)',
    'password'                      => 'Password',
    'is_active'                     => 'Is Active?',
    'description'                   => 'Description',
    'image'                         => 'Image',
    'avatar'                        => 'Avatar',
    'email'                         => 'Email',
    'image_url'                     => 'Image URL',
    'title'                         => 'Title',
    'price'                         => 'Price',
    'ingredients'                   => 'Ingredients',
    'phone_number'                  => 'Phone Number',
    'address'                       => 'Address',
    'notes'                         => 'Notes',
    'amount'                        => 'Amount',
    'size'                          => 'Size',
    'quantity'                      => 'Quantity',
    'status'                        => 'Status',
    'all'                           => 'All',
    'role'                          => 'Role',
    'active'                        => 'Active',
    'inactive'                      => 'In-active',
    'stock_status'                  => 'Stock Status',
    'in_stock'                      => 'In Stock',
    'out_of_stock'                  => 'Out Of Stock',
    'creator_name'                  => 'Creator Name',
    'created_at'                    => 'Created At',
    'updated_at'                    => 'Updated At',
    'icon'                          => 'Icon',
    'color'                         => 'Color',
    'ar'                            => 'Arabic',
    'en'                            => 'English',

    //Relations Manager
    'login_history'                 => 'Login History',

    //Admins
    'admins'                        => 'Admins',
    'admin'                         => 'Admin',

    //Tags
    'tags'                          => 'Tags',
    'tag'                           => 'Tag',

    //Login History
    'country'                       => 'Country',
    'city'                          => 'City',
    'device_name'                   => 'Device Name',
    'ip_address'                    => 'IP Address',

    //Statistics
    'profit_for'                    => 'Profit For',
    'since'                         => 'Since',
    'today_profit'                  => 'Today Profit',
    'this_month_profit'             => 'This Month Profit',
    'last_7_days'                   => 'Last 7 Days',
    'last_30_days'                  => 'Last 30 Days',
    'last_year'                     => 'Last Year',

    //Navigation Groups
    'system_users'                  => 'System Users',
    'projects'                      => 'Projects',

    //Projects
    'project'                       => 'Project',
    'techs'                         => 'Techs',
    'tech'                          => 'Tech',
    'tiny_description'              => 'Tiny Description',
    'general_info'                  => 'General Info',
    'settings'                      => 'Settings',
    'start_date'                    => 'Start Date',
    'end_date'                      => 'End Date',
    'is_draft'                      => 'Is Draft?',
    'media'                         => 'Media',
    'main_image'                    => 'Main Image',
    'other_media'                   => 'Other Media',
    'url'                           => 'URL',
    'live_url'                      => 'Live URL',
    'draft'                         => 'Draft',
    'is_company'                    => 'Company',
    'company'                       => 'Company',
    'not_company'                   => 'Not Company',

    //Certificates
    'certificates'                  => 'Certificates',
    'certificate'                   => 'Certificate',
    'source'                        => 'Source',
    'issue_date'                    => 'Issue Date',

    CertificateSourceEnum::GOOGLE->value    => 'Google',
    CertificateSourceEnum::UDACITY->value   => 'Udacity',
    CertificateSourceEnum::ACADEMIC->value  => 'Academic & Volunteer',
    CertificateSourceEnum::COURSERA->value  => 'Coursera',
];
