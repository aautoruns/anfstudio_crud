<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

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
        'username' => [
            'rules' => 'required|min_length[5]',
        ],
        'password' => [
            'rules' => 'required',
        ],
        'repeatPassword' => [
            'rules' => 'required|matches[password]',
        ],
    ];

    public $register_errors = [
        'username' => [
            'required' => '{field} must be fill',
            'min_length' => '{field} minimum 5 character',
        ],
        'password' => [
            'required' => '{field} must be fill',
        ],
        'repeatPassword' => [
            'required' => '{field} must be fill',
            'matches' => '{field} doesnt match with password'
        ],
    ];

    public $login = [
        'username' => [
            'rules' => 'required|min_length[5]',
        ],
        'password' => [
            'rules' => 'required',
        ],
    ];

    public $transaksi = [
        'id_barang' => [
            'rules' => 'required',
        ],
        'id_pembeli' => [
            'rules' => 'required',
        ],
        'jumlah' => [
            'rules' => 'required',
        ],
        'total_harga' => [
            'rules' => 'required',
        ],
        'alamat' => [
            'rules' => 'required',
        ],
        'ongkir' => [
            'rules' => 'required',
        ]
    ];

    public $transaksi_errors = [
        'alamat' => [
            'required' => '{field} must be fill',
        ],
    ];
    public $login_errors = [
        'username' => [
            'required' => '{field} must be fill',
            'min_length' => '{field} minimum 5 character',
        ],
        'password' => [
            'required' => '{field} must be fill',
        ],
    ];

    public $barang = [
        'nama' => [
            'rules' => 'required|min_length[3]',
        ],
        'harga' => [
            'rules' => 'required|is_natural',
        ],
        'stok' => [
            'rules' => 'required|is_natural',
        ],
        'gambar' => [
            'rules' => 'uploaded[gambar]',
        ],
    ];
    public $barang_errors = [
        'nama' => [
            'required' => '{field} must be fill',
            'min_length' => '{field} minimum 3 character',
        ],
        'harga' => [
            'required' => '{field} must be fill',
            'is_natural' => '{field} cant negative',
        ],
        'stok' => [
            'required' => '{field} must be fill',
            'is_natural' => '{field} cant negative',
        ],
        'gambar' => [
            'uploaded' => '{field} must be upload',
        ],
    ];

    public $barangupdate = [
        'nama' => [
            'rules' => 'required|min_length[3]',
        ],
        'harga' => [
            'rules' => 'required|is_natural',
        ],
        'stok' => [
            'rules' => 'required|is_natural',
        ],
    ];
    public $barangupdate_errors = [
        'nama' => [
            'required' => '{field} must be fill',
            'min_length' => '{field} minimum 3 character',
        ],
        'harga' => [
            'required' => '{field} must be fill',
            'is_natural' => '{field} cant negative',
        ],
        'stok' => [
            'required' => '{field} must be fill',
            'is_natural' => '{field} cant negative',
        ],
    ];

    public $komentar = [
        'komentar' => [
            'rules' => 'required',
        ]
    ];
    public $komentar_errors = [
        'required' => '{field} must be fill',
    ];

    public $portofolio = [
        'nama ' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} must be fill'
            ]
        ],
    ];
}
