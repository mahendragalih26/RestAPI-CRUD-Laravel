<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

##Proses Instalasi
1. <p>Koneksi ke database</p>
    <pre><code>
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=gudang
   DB_USERNAME=root
   DB_PASSWORD=
   </code></pre>
 
2. <p>Model Gudang (Mendeklarasikan tabel barang dan isinya)</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/model.PNG">
    
3. <p>System Routing (Menghubungkan controller)</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/routeapi.PNG">

4. <p>+ ApiController Create Data</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/create.PNG"> 
   <p>+ ApiController Show Data</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/showall.PNG">
    <p>Saat dijalankan</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/postid1.PNG">
   <p>+ ApiController Show Data berdasarkan ID</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/showbyid.PNG">
    <p>Saat dijalankan</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/postid.PNG">
   <p>+ ApiController Edit Data</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/updateid.PNG">
    <p>Saat dijalankan</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/postid2.PNG">
   <p>+ ApiController Delete Data</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/deleteid.PNG">
    <p>Saat dijalankan</p>
    <img src="https://github.com/mahendragalih26/RestAPI-CRUD-Laravel/blob/master/img/postid3.PNG">
