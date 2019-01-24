<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted' => ' moet geaccepteerd zijn.',
    'active_url' => ' is geen geldige URL.',
    'after' => ' moet een datum na :date zijn.',
    'after_or_equal' => ' moet een datum na of gelijk aan :date zijn.',
    'alpha' => ' mag alleen letters bevatten.',
    'alpha_dash' => ' mag alleen letters, nummers, underscores (_) en streepjes (-) bevatten.',
    'alpha_num' => ' mag alleen letters en nummers bevatten.',
    'array' => ' moet geselecteerde elementen bevatten.',
    'before' => ' moet een datum voor :date zijn.',
    'before_or_equal' => ' moet een datum voor of gelijk aan :date zijn.',
    'between' => [
        'numeric' => ' moet tussen :min en :max zijn.',
        'file' => ' moet tussen :min en :max kilobytes zijn.',
        'string' => ' moet tussen :min en :max karakters zijn.',
        'array' => ' moet tussen :min en :max items bevatten.',
    ],
    'boolean' => ' moet ja of nee zijn.',
    'confirmed' => ' bevestiging komt niet overeen.',
    'date' => ' moet een datum bevatten.',
    'date_format' => ' moet een geldig datum formaat bevatten.',
    'different' => ' en :other moeten verschillend zijn.',
    'digits' => ' moet bestaan uit :digits cijfers.',
    'digits_between' => ' moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'dimensions' => ' heeft geen geldige afmetingen voor afbeeldingen.',
    'distinct' => ' heeft een dubbele waarde.',
    'email' => ' is geen geldig e-mailadres.',
    'exists' => ' bestaat niet.',
    'file' => ' moet een bestand zijn.',
    'filled' => ' is verplicht.',
    'gt' => [
        'numeric' => 'The  must be greater than :value.',
        'file' => 'The  must be greater than :value kilobytes.',
        'string' => 'The  must be greater than :value characters.',
        'array' => 'The  must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The  must be greater than or equal :value.',
        'file' => 'The  must be greater than or equal :value kilobytes.',
        'string' => 'The  must be greater than or equal :value characters.',
        'array' => 'The  must have :value items or more.',
    ],
    'image' => ' moet een afbeelding zijn.',
    'in' => ' is ongeldig.',
    'in_array' => ' bestaat niet in :other.',
    'integer' => ' moet een getal zijn.',
    'ip' => ' moet een geldig IP-adres zijn.',
    'ipv4' => ' moet een geldig IPv4-adres zijn.',
    'ipv6' => ' moet een geldig IPv6-adres zijn.',
    'json' => ' moet een geldige JSON-string zijn.',
    'lt' => [
        'numeric' => 'The  must be less than :value.',
        'file' => 'The  must be less than :value kilobytes.',
        'string' => 'The  must be less than :value characters.',
        'array' => 'The  must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The  must be less than or equal :value.',
        'file' => 'The  must be less than or equal :value kilobytes.',
        'string' => 'The  must be less than or equal :value characters.',
        'array' => 'The  must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ' mag niet hoger dan :max zijn.',
        'file' => ' mag niet meer dan :max kilobytes zijn.',
        'string' => ' mag niet uit meer dan :max karakters bestaan.',
        'array' => ' mag niet meer dan :max items bevatten.',
    ],
    'mimes' => ' moet een bestand zijn van het bestandstype :values.',
    'mimetypes' => ' moet een bestand zijn van het bestandstype :values.',
    'min' => [
        'numeric' => ' moet minimaal :min zijn.',
        'file' => ' moet minimaal :min kilobytes zijn.',
        'string' => ' moet minimaal :min karakters zijn.',
        'array' => ' moet minimaal :min items bevatten.',
    ],
    'not_in' => 'Het formaat van  is ongeldig.',
    'not_regex' => 'The  format is invalid.',
    'numeric' => ' moet een nummer zijn.',
    'present' => ' moet bestaan.',
    'regex' => ' formaat is ongeldig.',
    'required' => ' is verplicht.',
    'required_if' => ' is verplicht indien :other gelijk is aan :value.',
    'required_unless' => ' is verplicht tenzij :other gelijk is aan :values.',
    'required_with' => ' is verplicht i.c.m. :values',
    'required_with_all' => ' is verplicht i.c.m. :values',
    'required_without' => ' is verplicht als :values niet ingevuld is.',
    'required_without_all' => ' is verplicht als :values niet ingevuld zijn.',
    'same' => ' en :other moeten overeenkomen.',
    'size' => [
        'numeric' => ' moet :size zijn.',
        'file' => ' moet :size kilobyte zijn.',
        'string' => ' moet :size karakters zijn.',
        'array' => ' moet :size items bevatten.',
    ],
    'string' => ' moet een tekenreeks zijn.',
    'timezone' => ' moet een geldige tijdzone zijn.',
    'unique' => ' is al in gebruik.',
    'uploaded' => 'Het uploaden van  is mislukt.',
    'url' => ' is geen geldige URL.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'address' => 'adres',
        'age' => 'leeftijd',
        'available' => 'beschikbaar',
        'bad' => 'slechte reactie',
        'city' => 'stad',
        'content' => 'inhoud',
        'country' => 'land',
        'date' => 'datum',
        'day' => 'dag',
        'description' => 'omschrijving',
        'email' => 'e-mailadres',
        'excerpt' => 'uittreksel',
        'first_name' => 'voornaam',
        'gender' => 'geslacht',
        'good' => 'goede reactie',
        'hour' => 'uur',
        'last_name' => 'achternaam',
        'message' => 'boodschap',
        'minute' => 'minuut',
        'mobile' => 'mobiel',
        'month' => 'maand',
        'name' => 'naam',
        'password' => 'wachtwoord',
        'password_confirmation' => 'wachtwoordbevestiging',
        'phone' => 'telefoonnummer',
        'second' => 'seconde',
        'sex' => 'geslacht',
        'size' => 'grootte',
        'subject' => 'onderwerp',
        'time' => 'tijd',
        'title' => 'titel',
        'username' => 'gebruikersnaam',
        'year' => 'jaar',
    ],
];
