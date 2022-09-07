<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $register = [
        'username' => 'required|alpha_numeric|is_unique[user.username]',
        'divisi' => 'required',
        'password' => 'required'

    ];

    public $register_errors = [
        'username' => [
            'alpha_numeric' => 'Username hanya boleh mengandung huruf dan angka',
            'is_unique' => 'Username sudah dipakai',
            'required' => 'Username tidak boleh kosong'
        ],
        'divisi' => [
            'required' => 'Divisi harus dipilih'
        ],
        'password' => [
            'required' => 'Password tidak boleh kosong' 
        ]

    ];
}
