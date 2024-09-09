#Jobsheet 1

<h3>Kelas dan Objek dalam PHP</h3>
<h4>Kelas (Class)</h4>

```php
Class Buku
```
- Template/ blueprint untuk membuat instance dari sebuah object
- Class mendefinisikan object
- Menyimpan data dan perilaku yang disebut dengan property dan method

<h4>Object</h4>

```php
$buku1 = new Buku;
```

- Instance yang didefinisikan oleh class
- Banyak object dapat dibuat menggunakan satu class
- Dibuat dengan menggunakan keyword new

<h3>Property dan Object</h3>

<h4>Property</h4>

```php
Class Buku {
 public $judul;
 private $penulis;
 protected $penerbit;
}
```

- Memrepresentasikan data/ keadaan dari sebuah object
- Variabel yang ada di dalam object (member variable)
- Jenis - jenis Property :
  - public = atribut yang dapat diakses dari mana saja, baik dalam dari dalam kelas, dari child class (kelas turunan), maupun dari luar kelas.
  - private = atribut yang hanya dapat diakses dari dalam class itu sendiri.
  - protected = atribut yang dapat diakses dari dalam class itu sendiri dan dari dalam child class.

<h4>Method</h4>

```php
public function tampilDataBuku(){
}
```
- Merepresentasikan perilaku dari sebuah object
- Function yang ada di dalam object

<h4>Constructor Method</h4>

```php
public function __construct tampilDataBuku(){


Sebuah method spesial atau khusu yang ada dalam sebuah kelas, method yang otomatis dijalankan ketika sebuah kelas instansiasi atau dibuat objectnya.
