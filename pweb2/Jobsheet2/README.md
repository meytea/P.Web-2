<h2>JobSheet2</h2>

<h3>1. Membuat Class dam Object</h3>

```php
<?php
    //Definisi Kelas
    Class Mahasiswa{
        //Atribut atau Properties
        public $nama;
        public $nim;
        public $jurusan;

        //Metode atau Function
        public function tampilkanData() {
            return 
            "Nama : $this->nama <br>
             NIM : $this->nim <br>
             Jurusan :  $this->jurusan";
        }
    }
    
    //Instansisai Object
    $mhs1 = new Mahasiswa ();
    $mhs1->nama ="Meilita Ayu Nur Khasanah";
    $mhs1->nim ="230102038";
    $mhs1->jurusan ="Komputer dan Bisnis";

    echo $mhs1->tampilkanData();
?>
```
<h4>Langkah-langkah Pembuatan Kelas </h4>
- Memberikan nama Kelas Mahasiswa 

```php
Class Mahasiswa
```

- Memberikan atribut nama, nip dan mataKuliah dideklarasikan sebagai atribut (public) yang berarti atribut tersebut dapat diakses langsung dari luar kelas

  ```php
  public $nama;
  public $nim;
  public $jurusan;
  ```
  
- Menambahkan metode tampilkanData() untuk menampilkan data apa saja yang akan di tampilkan 

 ```php
  public function tampilkanData() {
            return 
            "Nama : $this->nama <br>
             NIM : $this->nim <br>
             Jurusan :  $this->jurusan";
        }
```

Output :


<h3>2. Implementasi Constructor</h3>

```php
<?php

    //Definisi Kelas
    Class Mahasiswa{
        //Atribut atau Properties
        public $nama;
        public $nim;
        public $jurusan;


        //Construct
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        //Metode atau Function
        public function tampilkanData() {
            return " Nama : $this->nama <br>
            NIM : $this->nim <br>
            Jurusan :  $this->jurusan";
        }
    }
    
    //Instansisai Object
    $mhs1 = new Mahasiswa ("Meilita Ayu Nur Khasanah", 230102038, "Komputer dan Bisnis");
    

    echo $mhs1->tampilkanData();
?>
```

<h3>3. Membuat Metode Tambahan</h3>

```php
<?php
    //Definisi Kelas
    Class Mahasiswa{
        //Atribut atau Properties
        public $nama;
        public $nim;
        public $jurusan;


        //Construct
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        //Metode atau Function
        public function tampilkanData() {
            return " Nama : $this->nama <br>
            NIM : $this->nim <br>
            Jurusan :  $this->jurusan";
        }

        public function updateJurusan($jurusanBaru) {
            $this->jurusan = $jurusanBaru;
        }
    }
    
    //Instansisai Object
    $mhs1 = new Mahasiswa ("Meilita Ayu Nur Khasanah", 230102038, "Komputer dan Bisnis");
    
    echo "<br><b>Sebelum di Update</b><br>";
    echo $mhs1->tampilkanData();

    echo "<br><hr>";

    echo "<b>Setelah di Update</b><br>";
    echo $mhs1->updateJurusan("Informatika");

    echo "<br>";

    echo $mhs1->tampilkanData();
?>
```
<h3>4. Penggunaan Atribut dan Metode</h3>

```php
<?php

    //Definisi Kelas
    Class Mahasiswa{
        //Atribut atau Properties
        public $nama;
        public $nim;
        public $jurusan;


        //Construct
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        public function setNim($nim){
            $this->nim = $nim;
        }

        //Metode atau Function
        public function tampilkanData() {
            return " Nama : $this->nama <br>
            NIM : $this->nim <br>
            Jurusan :  $this->jurusan";
        }
    }
    
    //Instansisai Object
    $mhs1 = new Mahasiswa ("Meilita Ayu Nur Khasanah", 230102038, "Komputer dan Bisnis");
    
    echo "<br><b>Sebelum di Ubah</b><br>";
    echo $mhs1->tampilkanData();

    echo "<br><hr>";

    echo "<b>Setelah di Ubah</b><br>";

    echo $mhs1->setNim("000000000");

    echo $mhs1->tampilkanData();
?>
```
