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

- Memberikan atribut nama, nim dan jurusan dideklarasikan sebagai atribut (public) yang berarti atribut tersebut dapat diakses langsung dari luar kelas

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

Output : https://github.com/meytea/P.Web-2/blob/main/pweb2/Jobsheet2/output/1.png


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
<h4>Langkah-langkah Implementasi constructor </h4>
- Masih dalam kelas yang sama yaitu Mahasiswa

- Menambahkan metode Constructor yang digunakan untuk menginsialisasi atribut saat objek dibuat. Dalam contoh constructor ini menggunakan 3 parameter ($nama, $nim, $jurusan) dan constructor ini digunakan untuk mengatur nilai pada atribut kelas.

```php
 public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }
```
Output :


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

<h4>Langkah-langkah Metode Tambahan </h4>
- Masih dalam kelas yang sama yaitu Mahasiswa

- Terdapat metode tambahan dalam kelas yaitu  updateJurusan() yang berfungsi khusus untuk memperbarui nilai pada atribut jurusan.

```php
 public function updateJurusan($jurusanBaru) {
            $this->jurusan = $jurusanBaru;
        }
```


Output :


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

<h4>Langkah-langkah Atribut dan Method </h4>
- Masih dalam kelas yang sama yaitu Mahasiswa

- Menambahkan metode setter untuk mengubah nilai atribut nim pada kelas mahasiswa
  
- Instansiasi objek Mahasiswa, panggil metode setter yaitu setNim($nim)untuk mengubah nilai nim, dan tampilkan data mahasiswa yang sudah diperbarui.

```php
 public function setNim($nim){
            $this->nim = $nim;
        }
```

Output :


<h3>Tugas</h3>

```php
<?php
    class Dosen {
        public $nama;
        public $nip;
        public $mataKuliah;

        public function tampilkanDosen(){
            return "Nama Dosen   : $this->nama <br>
                    NIP          : $this->nip <br>
                    Mata Kuliah  : $this->mataKuliah";
        }
    }

    //Instansiasi Object
    $dosen1 = new Dosen ();
    $dosen1->nama = "Andi Suripto";
    $dosen1->nip = "10283216140946";
    $dosen1->mataKuliah ="Matematika";

    echo $dosen1->tampilkanDosen();
?>
```
<h4>Langkah-langkah Pembuatan Tugas </h4>
- Memberikan nama Kelas dosen  

```php
Class Dosen
```

- Memberikan atribut nama, nip dan mataKuliah dideklarasikan sebagai atribut (public) yang berarti atribut tersebut dapat diakses langsung dari luar kelas

  ```php
      public $nama;
        public $nip;
        public $mataKuliah;
  ```
  
- Menambahkan metode tampilkanDosen() untuk menampilkan data apa saja yang akan di tampilkan 

 ```php
  public function tampilkanDosen(){
            return "Nama Dosen   : $this->nama <br>
                    NIP          : $this->nip <br>
                    Mata Kuliah  : $this->mataKuliah";
        }
```

Output :
