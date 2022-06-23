<?php
class akun extends Illuminate\Database\Eloquent\Model {
    protected $table = "akun";
    protected $primaryKey = "id_akun";
    public $timestamps = false;
}

class barang extends Illuminate\Database\Eloquent\Model {
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}

class kategori extends Illuminate\Database\Eloquent\Model {
    protected $table = "kategori";
    protected $primaryKey = "id_kategori";
    public $timestamps = false;
}

class pelanggan extends Illuminate\Database\Eloquent\Model {
    protected $table = "pelanggan";
    protected $primaryKey = "id_pelanggan";
    public $timestamps = false;
}

class transaksi extends Illuminate\Database\Eloquent\Model {
    protected $table = "transaksi";
    protected $primaryKey = "id_transaksi";
    public $timestamps = false;
}

class transaksiitem extends Illuminate\Database\Eloquent\Model {
    protected $table = "transaksi_item";
    protected $primaryKey = "id_item";
    public $timestamps = false;
}

?>