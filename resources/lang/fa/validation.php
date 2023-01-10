<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => ":attribute باید بین :min و :max باشد.",
        "file"    => ":attribute باید بین :min و :max کیلوبایت باشد.",
        "string"  => ":attribute باید بین :min و :max کاراکتر باشد.",
        "array"   => ":attribute باید بین :min و :max آیتم باشد.",
    ],
    'boolean' => 'The :attribute field must be true or false.',
    "confirmed"        => ":attribute با تاییدیه مطابقت ندارد.",
    "date"             => ":attribute یک تاریخ معتبر نیست.",
    "date_format"      => ":attribute با الگوی :format مطاقبت ندارد.",
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => "فرمت :attribute معتبر نیست.",
    'exists' => ":attribute انتخاب شده، معتبر نیست.",
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ":attribute باید تصویر باشد.",
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => ":attribute باید نوع داده ای عددی (integer) باشد.",
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'فیلد :attribute نباید بیشتر از :max باشد.',
        'file' => 'فایل :attribute نباید بیشتر از :max کیلوبایت باشد.',
        'string' => 'فیلد :attribute نباید بیشتر از :max کاراکتر باشد.',
        'array' => 'فیلد :attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'mimes' => ":attribute باید یکی از فرمت های :values باشد.",
    'mimetypes' =>'فایل :attribute باید از فرمت :values باشد.',
    'min' => [
        'numeric' => 'فیلد :attribute جداقل :min باشد.',
        'file' => 'فایل :attribute باید حداقل :min کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید حداقل :min کاراکتر باشد.',
        'array' => 'فیلد :attribute باید حداقل :min آیتم داشته باشد.',
    ],
    "not_in" => ":attribute انتخاب شده، معتبر نیست.",
    'not_regex' => 'The :attribute format is invalid.',
    "numeric" => ":attribute باید شامل عدد باشد.",
    'present' => 'The :attribute field must be present.',
    'regex' => ':attribute نامعتبر است.',
    "required" => "فیلد :attribute الزامی است",
    "required_if" => "فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.",
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        "numeric" => ":attribute باید برابر با :size باشد.",
        "file"    => ":attribute باید برابر با :size کیلوبایت باشد.",
        "string"  => ":attribute باید برابر با :size کاراکتر باشد.",
        "array"   => ":attribute باسد شامل :size آیتم باشد.",
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => ':attribute باید از نوع کاراکتر باشد.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ":attribute قبلا انتخاب شده است.",
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        "username" => "نام کاربری",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "nationalId" => "کد ملی",
        "email" => "آدرس ایمیل",
        "password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "password_confirm" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "state" => "استان",
        "province" => "استان",
        "country" => "کشور",
        "home_address" => "آدرس منزل",
        "mobileNumber" => "شماره همراه",
        "landline_phone" => "تلفن ثابت",
        "home_zipcode" => "کدپستی منزل",
        "legal_name" => "نام موسسه",
        "position" => "سمت",
        "legal_nid" => "شماره ملی",
        "financial_id" => "کد اقتصادی",
        "publish_id" => "شماره ثبت",
        "legal_address" => "آدرس موسسه",
        "legal_phone" => "تلفن ثابت موسسه",
        "legal_zipcode" => "کدپستی موسسه",
        "scan_recom" => "معرفی نامه",
        "scan_cv" => "رزومه",
        "thumbnail" => "تصویر شاخص",
        "name" => "نام محصول",
        "product_model" => "مدل محصول",
        "model" => "مدل محصول",
        "stock" => "موجودی",
        "min_order" => "حداقل سفارش",
        "min_preorder" => "حداقل پیش سفارش",
        "attributes" => "مشخصات",
        "tag" => "تگ",
        "price" => "قیمت",
        "avatar" => "تصویر پروفایل",
        "available" => "وضعیت",
        "attachment" => "فایل ضمیمه",
        "message" => "پیام",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "subject" => "عنوان",
        "text" => "متن",
        "content" => "محتوا",
        "description" => "توضیحات",
        "descriptions" => "توضیحات",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "serial" => "ُسریال محصول",
        "size" => "اندازه",
        "token"=>"کد",
        "validation.captcha"=>"کد امنیتی نامعتبر!"
    ],

];
