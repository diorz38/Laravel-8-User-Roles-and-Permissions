<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Menu extends Model
{
    use Sushi;

    protected $rows = [
        [
            'parent_id' => null,
            'name' => 'Home',
            'route' => 'home',
        ],
        [
            'parent_id' => null,
            'name' => 'Kegiatan',
            'route' => null,
        ],
        [
            'parent_id' => 2,
            'name' => 'Kegiatan Tahun ini',
            'route' => 'kegiatan.index',
        ],
        [
            'parent_id' => 2,
            'name' => 'Sub Kegiatan',
            'route' => 'kegiatan.sub',
        ],
        [
            'parent_id' => 2,
            'name' => 'Rekap Kegiatan',
            'route' => 'kegiatan.rekap',
        ],
        [
            'parent_id' => 2,
            'name' => 'Rekap CKP',
            'route' => 'kegiatan.ckp',
        ],
        [
            'parent_id' => null,
            'name' => 'Master Data',
            'route' => null,
        ],
        [
            'parent_id' => 7,
            'name' => 'Basis Kegiatan',
            'route' => 'master.basis',
        ],
        [
            'parent_id' => 7,
            'name' => 'Master Kode',
            'route' => 'master.kode',
        ],

    ];

    public function subMenu()
    {
        return $this->hasmany(Menu::class, 'parent_id')->where('parent_id', '!=', null);
    }

}
