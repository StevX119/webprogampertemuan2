<?php
class Kendaraan {
    public $warna;

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function info() {
        echo "Kendaraan berwarna " . $this->warna;
    }
}

class Mobil extends Kendaraan {
    public $jenis;

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function info() {
        parent::info();
        echo " dan jenis " . $this->jenis;
    }
}

$mobilSaya = new Mobil();
$mobilSaya->setWarna("Merah");
$mobilSaya->setJenis("SUV");
$mobilSaya->info(); // Output: Kendaraan berwarna Merah dan jenis SUV