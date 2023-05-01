# PWEB-7-CRUD

Repository ini menampung tugas kedelapan mata kuliah pemrograman web yang berupa
website CRUD yang bertemakan silaturahmi. User dapat menuliskan serta membaca
ucapan kepada pejabat daearah yang nantinya akan dibalas oleh pejabat berkaitan.
Repository ini dikerjakan dan dimiliki oleh:

| Nama | NRP |
|------|-----|
| Richie Seputro | 5025211213 |
| Ghifari Maaliki Syafa Syuhada | 5025211158 |

Pengguna dimohon untuk menggunakan sebuah *web server* yang mendukung PHP serta
database MySQL atau MariaDB.

Untuk skema database-nya sendiri adalah sebagai berikut:

```sql
create database silaturahmi;
use silaturahmi;
create table User (id int primary key auto_increment, email varchar(64) not null unique, username varchar(64) not null, password varchar(64) not null, type char(1) not null);
create table Pesan (id int primary key auto_increment, user_id int not null references User(id), content varchar(512) not null);
create table Balasan (id int primary key auto_increment, user_id int not null references User(id), pesan_id int not null references Pesan(id), content varchar(512) not null);
```

Silakan mengubah file `config.php` untuk menggunakan kredensial MySQL / MariaDB yang lain.
