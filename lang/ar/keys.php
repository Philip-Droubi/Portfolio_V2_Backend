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
    'items'                         => 'عناصر',
    'user_personal_info'            => 'معلومات المستخدم الشخصية',
    'info'                          => 'معلومات',
    'file'                          => 'الملف',

    //Fields
    'user_name'                     => 'اسم المستخدم',
    'name'                          => 'الاسم',
    'name_ar'                       => 'الاسم بالعربية',
    'name_en'                       => 'الاسم بالانجليزية',
    'role'                          => 'دور المستخدم',
    'password'                      => 'كلمة المرور',
    'is_active'                     => 'هل هو نشط؟',
    'title'                         => 'العنوان',
    'description'                   => 'الوصف',
    'image'                         => 'الصورة',
    'avatar'                        => 'صورة شخصية',
    'email'                         => 'بريد الكتروني',
    'image_url'                     => 'رابط الصورة',
    'price'                         => 'السعر',
    'ingredients'                   => 'المكونات',
    'phone_number'                  => 'رقم الهاتف',
    'address'                       => 'العنوان',
    'notes'                         => 'ملاحظات',
    'amount'                        => 'الكمية',
    'size'                          => 'القياس',
    'quantity'                      => 'الكمية',
    'status'                        => 'الحالة',
    'all'                           => 'الكل',
    'active'                        => 'نشط',
    'inactive'                      => 'غير نشط',
    'stock_status'                  => 'حالة المخزون',
    'in_stock'                      => 'متوفر',
    'out_of_stock'                  => 'غير متوفر',
    'creator_name'                  => 'أنشء بواسطة',
    'created_at'                    => 'تاريخ إنشاء',
    'updated_at'                    => 'تاريخ تعديل',
    'color'                         => 'اللون',
    'icon'                          => 'أيقونة',
    'ar'                            => 'العربية',
    'en'                            => 'الانجليزية',

    //Admins
    'admins'                        => 'المدراء',
    'admin'                         => 'مدير',

    //Relations Manager
    'login_history'                 => 'سجل تسجيل الدخول',

    //Login History
    'country'                       => 'الدولة',
    'city'                          => 'المدينة',
    'device_name'                   => 'اسم الجهاز',
    'ip_address'                    => 'عنوان الـ IP',

    //Tags
    'tags'                          => 'التاغات',
    'tag'                           => 'تاغ',

    //Statistics
    'profit_for'                    => 'ربح بتاريخ',
    'since'                         => 'منذ',
    'today_profit'                  => 'ربح اليوم',
    'this_month_profit'             => 'ربح هذا الشهر',
    'last_7_days'                   => 'اخر 7 ايام',
    'last_30_days'                  => 'اخر 30 يوم',
    'last_year'                     => 'خلال سنة',

    //Navigation Groups
    'system_users'                  => 'نظام المستخدمين',
    'projects'                      => 'المشاريع',

    //Projects
    'project'                       => 'مشروع',
    'teches'                        => 'التقنيات',
    'tech'                          => 'تقنية',
    'tiny_description'              => 'وصف قصير',
    'general_info'                  => 'معلومات عامة',
    'settings'                      => 'الاعدادات',
    'start_date'                    => 'تاريخ البدء',
    'end_date'                      => 'تاريخ الانتهاء',
    'is_draft'                      => 'هل هو مسودة؟',
    'media'                         => 'الوسائط',
    'main_image'                    => 'الصورة الرئيسية',
    'other_media'                   => 'وسائط أخرى',
    'url'                           => 'رابط',
    'live_url'                      => 'رابط مباشر',
    'draft'                         => 'مسودة',
    'is_company'                    => 'شركة',
    'company'                       => 'شركة',
    'not_company'                   => 'ليس شركة',

    //Certificates
    'certificates'                  => 'الشهادات',
    'certificate'                   => 'شهادة',
    'source'                        => 'المصدر',
    'issue_date'                    => 'تاريخ الصدور',

    CertificateSourceEnum::GOOGLE->value    => 'Google',
    CertificateSourceEnum::UDACITY->value   => 'Udacity',
    CertificateSourceEnum::ACADEMIC->value  => 'Academic & Volunteer',
    CertificateSourceEnum::COURSERA->value  => 'Coursera',
];
