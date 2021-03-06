<?php

return [
    'accepted'        => ':Attribute musi zostać zaakceptowany.',
    'active_url'      => ':Attribute jest nieprawidłowym adresem URL.',
    'after'           => ':Attribute musi być datą późniejszą od :date.',
    'after_or_equal'  => ':Attribute musi być datą nie wcześniejszą niż :date.',
    'alpha'           => ':Attribute może zawierać jedynie litery.',
    'alpha_dash'      => ':Attribute może zawierać jedynie litery, cyfry i myślniki.',
    'alpha_num'       => ':Attribute może zawierać jedynie litery i cyfry.',
    'array'           => ':Attribute musi być tablicą.',
    'before'          => ':Attribute musi być datą wcześniejszą od :date.',
    'before_or_equal' => ':Attribute musi być datą nie późniejszą niż :date.',
    'between'         => [
        'numeric' => ':Attribute musi zawierać się w granicach :min - :max.',
        'file'    => ':Attribute musi zawierać się w granicach :min - :max kilobajtów.',
        'string'  => ':Attribute musi zawierać się w granicach :min - :max znaków.',
        'array'   => ':Attribute musi składać się z :min - :max elementów.',
    ],
    'boolean'        => ':Attribute musi mieć wartość prawda albo fałsz',
    'confirmed'      => 'Potwierdzenie :attribute nie zgadza się.',
    'date'           => ':Attribute nie jest prawidłową datą.',
    'date_format'    => ':Attribute nie jest w formacie :format.',
    'different'      => ':Attribute oraz :other muszą się różnić.',
    'digits'         => ':Attribute musi składać się z :digits cyfr.',
    'digits_between' => ':Attribute musi mieć od :min do :max cyfr.',
    'dimensions'     => ':Attribute ma niepoprawne wymiary.',
    'distinct'       => ':Attribute ma zduplikowane wartości.',
    'email'          => 'Format :attribute jest nieprawidłowy.',
    'exists'         => 'Zaznaczony :attribute jest nieprawidłowy.',
    'file'           => ':Attribute musi być plikiem.',
    'filled'         => 'Pole :attribute musi mieć wartość.',
    'image'          => ':Attribute musi być obrazkiem.',
    'in'             => 'Zaznaczony :attribute jest nieprawidłowy.',
    'in_array'       => 'Pole :attribute nie znajduje się w :other.',
    'integer'        => ':Attribute musi być liczbą całkowitą.',
    'ip'             => ':Attribute musi być prawidłowym adresem IP.',
    'ipv4'           => ':Attribute musi być prawidłowym adresem IPv4.',
    'ipv6'           => ':Attribute musi być prawidłowym adresem IPv6.',
    'json'           => ':Attribute musi być prawidłowym ciągiem znaków JSON.',
    'max'            => [
        'numeric' => ':Attribute nie może być większy niż :max.',
        'file'    => ':Attribute nie może być większy niż :max kilobajtów.',
        'string'  => ':Attribute nie może być dłuższy niż :max znaków.',
        'array'   => ':Attribute nie może mieć więcej niż :max elementów.',
    ],
    'mimes'     => ':Attribute musi być plikiem typu :values.',
    'mimetypes' => ':Attribute musi być plikiem typu :values.',
    'min'       => [
        'numeric' => ':Attribute musi być nie mniejszy od :min.',
        'file'    => ':Attribute musi mieć przynajmniej :min kilobajtów.',
        'string'  => ':Attribute musi mieć przynajmniej :min znaków.',
        'array'   => ':Attribute musi mieć przynajmniej :min elementów.',
    ],
    'not_in'               => 'Zaznaczony :attribute jest nieprawidłowy.',
    'numeric'              => ':Attribute musi być liczbą.',
    'present'              => 'Pole :attribute musi być obecne.',
    'regex'                => 'Format :attribute jest nieprawidłowy.',
    'required'             => 'Pole :attribute jest wymagane.',
    'required_if'          => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_unless'      => 'Pole :attribute jest wymagane jeżeli :other nie znajduje się w :values.',
    'required_with'        => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_with_all'    => 'Pole :attribute jest wymagane gdy :values jest obecny.',
    'required_without'     => 'Pole :attribute jest wymagane gdy :values nie jest obecny.',
    'required_without_all' => 'Pole :attribute jest wymagane gdy żadne z :values nie są obecne.',
    'same'                 => 'Pole :attribute i :other muszą się zgadzać.',
    'size'                 => [
        'numeric' => ':Attribute musi mieć :size.',
        'file'    => ':Attribute musi mieć :size kilobajtów.',
        'string'  => ':Attribute musi mieć :size znaków.',
        'array'   => ':Attribute musi zawierać :size elementów.',
    ],
    'string'   => ':Attribute musi być ciągiem znaków.',
    'timezone' => ':Attribute musi być prawidłową strefą czasową.',
    'unique'   => 'Taki :attribute już występuje.',
    'uploaded' => 'Nie udało się wgrać pliku :attribute.',
    'url'      => 'Format :attribute jest nieprawidłowy.',

    /*
     * Custom validation rules
     */
    'alpha_spaces'                                              => ':Attribute może zawierać jedynie litery i spacje.',
    'alpha_spaces_hyphens'                                      => ':Attribute może zawierać jedynie litery, spacje i myślniki.',
    'alpha_spaces_hyphens_apostrophes'                          => ':Attribute może zawierać jedynie litery, spacje, myślniki i apostrofy.',
    'alpha_spaces_hyphens_apostrophes_parentheses'              => ':Attribute może zawierać jedynie litery, spacje, myślniki, apostrofy i nawiasy.',
    'alpha_spaces_hyphens_apostrophes_parentheses_slashes'      => ':Attribute może zawierać jedynie litery, spacje, myślniki, apostrofy, nawiasy i ukośniki.',
    'alpha_spaces_hyphens_apostrophes_parentheses_slashes_dots' => ':Attribute może zawierać jedynie litery, spacje, myślniki, apostrofy, nawiasy, ukośniki i kropki.',

    'current_password' => ':Attribute jest nieprawidłowe.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'price' => [
            'regex' => ':Attribute musi być liczbą dodatnią.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of 'email'. This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'password'         => 'hasło',
        'current_password' => 'aktualne hasło',
        'new_password'     => 'nowe hasło',
        'email'            => 'adres e-mail',

        'comment' => 'komentarz',
        'date'    => 'data',
        'name'    => 'nazwa',
        'value'   => 'wartość',

        'number'   => 'numer',
        'floor'    => 'piętro',
        'capacity' => 'pojemność',
        'price'    => 'cena',

        'first_name' => 'imię',
        'last_name'  => 'nazwisko',
        'address'    => 'adres',
        'zip_code'   => 'kod pocztowy',
        'place'      => 'miejscowość',
        'PESEL'      => 'PESEL',
        'contact'    => 'kontakt',

        'guest'      => 'gość',
        'date_start' => 'data rozpoczęcia',
        'date_end'   => 'data zakończenia',
        'people'     => 'ilość osób',

        'rooms'  => 'pokoje',
        'guests' => 'goście',
    ],
];
