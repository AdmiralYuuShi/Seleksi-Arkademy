# Seleksi-Arkademy
Repository ini dibuat untuk keperluan seleksi Bootcamp Arkademy Batch 13-3

Oleh : Hapid Moch Jamil

Untuk soal no. 1 - no. 5 saya menggunakan bahasa pemrograman Javascript yang dapat dibuka di console browser.

Untuk soal no 6.a, querynya sebagai berikut :

SELECT product.id, cashier.cashier_name, product.name, category.category_name, product.price FROM (product INNER JOIN cashier ON product.id_cashier=cashier.id) INNER JOIN category ON product.id_category=category.id;

Untuk soal no 6.b terdapat pada folder "arkademy-static"

Untuk soal no. 6.c terdapat pada folder "arkademy-crud" dan saya menggunakan Framework CodeIgniter 3 dan Bootstrap 4 CDN.

Berikut ini langkah-langkah untuk menjalankan aplikasi pada soal no. 6.c :

1. Buka folder arkademy-crud

2. Import database yang berada di folder tersebut bernama "arkademy_coffeeshop.sql"

3. Buka link http://localhost/arkademy-crud/ pada web browser, maka akan terbuka halaman awal
![halaman_awal](https://i.ibb.co/5nB5kGt/halaman-awal.png)

4. Untuk memasukkan data baru klik tombol "ADD" yang berada di navbar
![halaman_awal](https://i.ibb.co/MRBp8wn/navbar.png)

5. Isi seluruh data lalu tekan tombol "ADD"
![halaman_awal](https://i.ibb.co/xfM0KmC/add-data.png)

6. Jika data berhasil dimasukkan maka akan ada alert dibawah
![halaman_awal](https://i.ibb.co/THsqGK5/berhasil-ditambah.png)

7. Untuk mengubah data, cari data yang ingin diubah pada tabel, lalu klik tombol "Edit"
![halaman_awal](https://i.ibb.co/y6djFwT/table.png)

8. Isi seluruh data lalu klik tombol "Edit"
![halaman_awal](https://i.ibb.co/bKkSBC4/edit.png)

9. Jika data berhasil diubah maka akan ada alert dibawah
![halaman_awal](https://i.ibb.co/b3RhFMr/Berhasil-diedit.png)

10. Untuk menghapus data, cari data yang ingin dihapus pada tabel, lalu klik tombol "Delete"
![halaman_awal](https://i.ibb.co/y6djFwT/table.png)

11. Jika data berhasil dihapus maka akan ada alert dibawah 
![halaman_awal](https://i.ibb.co/9sbxHbC/berhasil-dihapus.png)


Sekian penjelasan yang dapat saya sampaikan, maaf bila terdapat kesalahan.
Terima Kasih.
