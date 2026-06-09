<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Custom Status Codes
    |--------------------------------------------------------------------------
    | Values are the Custom Status Code used in my car application.
    | SC => Status Code.
    |
    */

    'honeybot_SC'                       => 203,
    'complete_profile_SC'               => 220,
    'incomplete_driver_account_SC'      => 450,
    'app_update_SC'                     => 451,

    /*
    |--------------------------------------------------------------------------
    | Default User Profile Image
    |--------------------------------------------------------------------------
    | This value is the default user profile image of your application.
    |
    */

    'user_default_image'    => 'storage/assets/defaults/default_user.jpg',

    /*
    |--------------------------------------------------------------------------
    | Private File Storage Path
    |--------------------------------------------------------------------------
    | This value is used to define the folder where files should be stored as private files.
    | Notice that changing the path will not effect files already stored
    | in the system.
    |
    */

    'private_path' => 'private/',

    /*
    |--------------------------------------------------------------------------
    | Loging Attempts Rate Limiter
    |--------------------------------------------------------------------------
    | max_attempts => Set the maximum number of login attempts
    | decay_minutes => Set the number of minutes until the login attempts reset
    |
    */

    'max_login_attempts'          => 5,
    'decay_login_minutes'         => 60 * 5,  // five minutes
    'admin_max_login_attempts'    => 5,
    'admin_decay_login_minutes'   => 60 * 15, // 15 minutes

    /*
    |--------------------------------------------------------------------------
    | Time to wait before generate new phone OTP
    |--------------------------------------------------------------------------
    | This value is used to define the needed seconds to wait before generate a new OTP.
    |
    */

    'time_to_new_OTP' => 60,

    /*
    |--------------------------------------------------------------------------
    | OTP Expire Time
    |--------------------------------------------------------------------------
    | This value is used to define the whern otp in minutes.
    | Editing this will require to edit emails also
    |
    */

    'otp_expire_in' => 10, //Minutes

    /*
    |--------------------------------------------------------------------------
    | Accepted Languages
    |--------------------------------------------------------------------------
    | This value is used to define accepted user languages.
    |
    */

    'accepted_languages'            => ['ar', 'en'],
    'accepted_languages_key_value'  => ['en' => 'English', 'ar' => 'العربية'],
    'rtl_langs'                     => ['ar'],
    'ltr_langs'                     => ['en'],

    /*
    |--------------------------------------------------------------------------
    | Max ContactUs Links
    |--------------------------------------------------------------------------
    | This value is used to define max contact us links.
    |
    */

    'max_contact_us_links' => 15,

    /*
    |--------------------------------------------------------------------------
    | Application Emails
    |--------------------------------------------------------------------------
    | All Emails needed to let this app work.
    |
    */

    'support_email' => 'support@email.com', //TODO Replace with real email

    /*
    |--------------------------------------------------------------------------
    | User Time Zone Offset
    |--------------------------------------------------------------------------
    | This value is used to define the offset of the time zone in user device.
    | Default 0
    */

    'user_time_zone' => 'Etc/GMT-3',

    /*
    |--------------------------------------------------------------------------
    | Customer Service Card //TODO
    |--------------------------------------------------------------------------
    | This values is used to define Customer Service Card system variables.
    */

    'time_between_store_service_cards'      => 0,      //Minutes
    // 'time_between_store_service_cards'      => 60,      //Minutes
    'time_between_two_serveic_messages'     => 10,  //Seconds 60 * 5
    // 'time_between_two_serveic_messages'     => 60 * 5,  //Seconds 60 * 5
    'max_media_per_customer_card'           => 3,

    /*
    |--------------------------------------------------------------------------
    | Per Page default value
    |--------------------------------------------------------------------------
    | This values is used to define the deafult per_page parameter in requests
    |
    */

    'per_page_default_value' => 16,
    'max_per_page_value' => 100,

    /*
    |--------------------------------------------------------------------------
    | OTP Attempts Rate Limiter
    |--------------------------------------------------------------------------
    | otp_max_attempts  => Set the maximum number of otp attempts
    | otp_decay_minutes => Set the number of minutes until the login attempts reset
    |
    */

    'otp_max_attempts'          => 6,
    'otp_decay_minutes'         => 60 * 5,  // five minutes

    /*
    |--------------------------------------------------------------------------
    | Users Accounts Per Number
    |--------------------------------------------------------------------------
    |
    | Number of times user can use the same phone number to create account after
    | deleting the old account.
    |
    */

    'max_accounts_per_phone_number'          => 1,

    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    |
    | driver_offline_after_minutes => Set is_online status to false if no location updates have been received.
    |
    */

    'driver_offline_after_minutes'          => 5,
    'min_drivers_to_fallback_trip_type'     => 10,

    /*
    |--------------------------------------------------------------------------
    | Trip
    |--------------------------------------------------------------------------
    |
    | trip_location_update_lightweight_seconds  => Time to send lightweight event before any calculations
    | max_trip_driver_location_update           => Max location updates (prevent brust updates)
    | decay_seconds_between_location_update     => Seconds between each location brust updates
    | days_to_rate_trip                         => Days to rate trip (Thank Me Later 😁👍)
    | distance_error_meters_per_km              => Distance_error_meters_per_km' => 'Number of meters added per kilometer to account for error in distance calculation or rotation
    |
    */

    'trip_location_update_lightweight_seconds'          => 30,
    'max_trip_driver_location_update'                   => 3,
    'decay_seconds_between_location_update'             => 10,
    'days_to_rate_trip'                                 => 2,
    'distance_error_meters_per_km'                      => 30,
    'min_trip_distance_in_meters'                       => 200,
    'max_car_speed'                                     => 200,
];
