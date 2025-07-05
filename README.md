# CodeIgniter 4 Application Starter

## Aplikasi Toko Online - CodeIgniter 4

Aplikasi toko online berbasis web yang dibangun menggunakan framework CodeIgniter 4 dengan fitur manajemen produk, sistem diskon, keranjang belanja, dan integrasi API pengiriman.

## Fitur

### 🛍️ Manajemen Produk

- CRUD Produk: Tambah, edit, hapus, dan lihat daftar produk
- Kategori Produk: Pengelompokan produk berdasarkan kategori
- Upload Gambar: Fitur upload foto produk dengan validasi format dan ukuran
- Download Data: Export data produk ke format PDF

### 👥 Sistem Autentikasi & Otorisasi

- Multi-role User: Admin dan Customer dengan akses yang berbeda
- Session Management: Pengelolaan sesi pengguna yang aman
- Password Encryption: Enkripsi password menggunakan PHP password_hash()
- Login/Logout: Sistem masuk dan keluar yang secure

### 🎯 Sistem Diskon

- Manajemen Diskon Harian: Admin dapat mengatur diskon berdasarkan tanggal
- Validasi Tanggal Unik: Tidak boleh ada duplikasi diskon untuk tanggal yang sama
- Tampilan Real-time: Notifikasi diskon aktif di header website
- Edit Readonly: Form edit diskon dengan tanggal yang tidak bisa diubah
- Auto Apply: Diskon otomatis diterapkan saat login berdasarkan tanggal

### 🛒 Keranjang Belanja (Shopping Cart)

- Add to Cart: Menambahkan produk ke keranjang dengan diskon otomatis
- Cart Management: Edit quantity, hapus item, kosongkan keranjang
- Price Calculation: Perhitungan harga dengan diskon real-time
- Session Storage: Keranjang tersimpan dalam sesi browser

### 🚚 Sistem Pengirima

- Integrasi RajaOngkir API: Cek ongkos kirim ke seluruh Indonesia
- Location Search: Pencarian lokasi tujuan dengan autocomplete
- Shipping Options: Pilihan layanan pengiriman (JNE, TIKI, POS)
- Cost Calculator: Kalkulasi biaya pengiriman otomatis

### 💳 Transaksi & Checkout

- Checkout Process: Proses pembelian dengan form alamat dan ongkir
- Transaction Detail: Penyimpanan detail transaksi dan item yang dibeli
- Discount Tracking: Pencatatan diskon yang diterapkan per item
- Order History: Riwayat transaksi pembelian user

### 📊 Dashboard & Reporting

- Admin Dashboard: Panel admin untuk mengelola seluruh sistem
- Transaction Dashboard: Dashboard terpisah untuk melihat data transaksi
- API Integration: Webservice untuk mengakses data transaksi
- Real-time Data: Data yang selalu terupdate dengan auto-refresh

### 🔌 API & Webservice

- RESTful API: API untuk mengakses data transaksi
- API Authentication: Sistem autentikasi API menggunakan API Key
- JSON Response: Format response yang standar dan konsisten
- External Dashboard: Dashboard terpisah yang mengonsumsi API

## Instalasi

### Prasyarat Sistem

PHP: Versi 7.4 atau lebih tinggi (disarankan PHP 8.1+)
Web Server: Apache/Nginx dengan mod_rewrite
Database: MySQL 5.7+ atau MariaDB 10.3+
Composer: Package manager untuk PHP
Extensions: intl, mbstring, json, mysqlnd, curl

### Langkah instalasi

#### 1. Clone/Download Project

bash
git clone https://github.com/Jusmat16/belajar-ci-tugas.git
cd belajar-ci-tugas


#### 2. Install Dependencies

bash
composer install


#### 3. Konfigurasi Environment

bash
# Copy file environment
cp env .env


# Edit file .env sesuai konfigurasi server Anda

#### 4. Konfigurasi Database

Edit file .env dan sesuaikan pengaturan database:

ini
database.default.hostname = localhost
database.default.database = nama_database
database.default.username = username_db
database.default.password = password_db
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306


#### 5. Konfigurasi API Keys

Tambahkan konfigurasi API di file .env:

ini
# API Key untuk internal webservice
API_KEY = random123678abcghi


# RajaOngkir API Key (daftar di rajaongkir.com)
COST_KEY = your-rajaongkir-api-key

# Base URL aplikasi
app.baseURL = 'http://localhost:8080/'

# Timezone
app.appTimezone = 'Asia/Jakarta'

#### 5. Setup Database

Setelah mengatur koneksi database, jalankan perintah berikut untuk melakukan migrasi dan seeder:

bash
# Jalankan migrasi database
php spark migrate

# Jalankan seeder untuk data awal
php spark db:seed UserSeeder
php spark db:seed ProductSeeder
php spark db:seed ProductDiskonSeeder


#### 6. Jalankan Server

Untuk menjalankan aplikasi, gunakan perintah berikut:

bash
##### Development server
php spark serve


## Akses Aplikasi

- URL Utama: http://localhost:8080/
- Dashboard API: http://localhost/dashboard-toko/

## Akun Pengguna

### Admin:
- *Username:* x0rganteng (admin)
- *Password:* 1234567

### Customer:
- *Username:* x0rbukanadmin (user) 
- *Password:* 1234567

## Struktur Project
.
├── app
│   ├── Common.php
│   ├── Config
│   │   ├── App.php
│   │   ├── Autoload.php
│   │   ├── Boot
│   │   │   ├── development.php
│   │   │   ├── production.php
│   │   │   └── testing.php
│   │   ├── Cache.php
│   │   ├── Constants.php
│   │   ├── ContentSecurityPolicy.php
│   │   ├── Cookie.php
│   │   ├── Cors.php
│   │   ├── CURLRequest.php
│   │   ├── Database.php
│   │   ├── DocTypes.php
│   │   ├── Email.php
│   │   ├── Encryption.php
│   │   ├── Events.php
│   │   ├── Exceptions.php
│   │   ├── Feature.php
│   │   ├── Filters.php
│   │   ├── ForeignCharacters.php
│   │   ├── Format.php
│   │   ├── Generators.php
│   │   ├── Honeypot.php
│   │   ├── Images.php
│   │   ├── Kint.php
│   │   ├── Logger.php
│   │   ├── Migrations.php
│   │   ├── Mimes.php
│   │   ├── Modules.php
│   │   ├── Optimize.php
│   │   ├── Pager.php
│   │   ├── Paths.php
│   │   ├── Publisher.php
│   │   ├── Routes.php
│   │   ├── Routing.php
│   │   ├── Security.php
│   │   ├── Services.php
│   │   ├── Session.php
│   │   ├── Toolbar.php
│   │   ├── UserAgents.php
│   │   ├── Validation.php
│   │   └── View.php
│   ├── Controllers
│   │   ├── ApiController.php
│   │   ├── AuthController.php
│   │   ├── BaseController.php
│   │   ├── DIskonController.php
│   │   ├── Home.php
│   │   ├── ProdukController.php
│   │   └── TransaksiController.php
│   ├── Database
│   │   ├── Migrations
│   │   │   ├── 2025-06-08-185054_Product.php
│   │   │   ├── 2025-06-08-185054_TransactionDetail.php
│   │   │   ├── 2025-06-08-185054_Transaction.php
│   │   │   ├── 2025-06-08-185054_User.php
│   │   │   └── 2025-07-04-232011_Diskon.php
│   │   └── Seeds
│   │       ├── DiskonSeeder.php
│   │       ├── ProductSeeder.php
│   │       └── UserSeeder.php
│   ├── Filters
│   │   ├── Auth.php
│   │   └── Redirect.php
│   ├── Helpers
│   ├── index.html
│   ├── Language
│   │   └── en
│   │       └── Validation.php
│   ├── Libraries
│   ├── Models
│   │   ├── DiskonModel.php
│   │   ├── ProductModel.php
│   │   ├── TransactionDetailModel.php
│   │   ├── TransactionModel.php
│   │   └── UserModel.php
│   ├── ThirdParty
│   └── Views
│       ├── components
│       │   ├── footer.php
│       │   ├── header.php
│       │   └── sidebar.php
│       ├── diskon
│       │   ├── create.php
│       │   ├── edit.php
│       │   └── index.php
│       ├── errors
│       │   ├── cli
│       │   │   ├── error_404.php
│       │   │   ├── error_exception.php
│       │   │   └── production.php
│       │   └── html
│       │       ├── debug.css
│       │       ├── debug.js
│       │       ├── error_400.php
│       │       ├── error_404.php
│       │       ├── error_exception.php
│       │       └── production.php
│       ├── layout_clear.php
│       ├── layout.php
│       ├── v_checkout.php
│       ├── v_diskon.php
│       ├── v_faq.php
│       ├── v_home.php
│       ├── v_keranjang.php
│       ├── v_login.php
│       ├── v_produkPDF.php
│       ├── v_produk.php
│       ├── v_profile.php
│       └── welcome_message.php
├── builds
├── composer.json
├── composer.lock
├── LICENSE
├── phpunit.xml.dist
├── preload.php
├── public
│   ├── favicon.ico
│   ├── img
│   │   ├── 1750799795_8f086ea3eca9cd1f391f.jpeg
│   │   ├── asus_tuf_a15.jpg
│   │   ├── asus_vivobook_14.jpg
│   │   └── lenovo_idepad_slim_3.jpg
│   ├── index.php
│   ├── NiceAdmin
│   │   ├── assets
│   │   │   ├── css
│   │   │   │   └── style.css
│   │   │   ├── img
│   │   │   │   ├── apple-touch-icon.png
│   │   │   │   ├── card.jpg
│   │   │   │   ├── favicon.png
│   │   │   │   ├── logo.png
│   │   │   │   ├── messages-1.jpg
│   │   │   │   ├── messages-2.jpg
│   │   │   │   ├── messages-3.jpg
│   │   │   │   ├── news-1.jpg
│   │   │   │   ├── news-2.jpg
│   │   │   │   ├── news-3.jpg
│   │   │   │   ├── news-4.jpg
│   │   │   │   ├── news-5.jpg
│   │   │   │   ├── not-found.svg
│   │   │   │   ├── product-1.jpg
│   │   │   │   ├── product-2.jpg
│   │   │   │   ├── product-3.jpg
│   │   │   │   ├── product-4.jpg
│   │   │   │   ├── product-5.jpg
│   │   │   │   ├── profile-img.jpg
│   │   │   │   ├── slides-1.jpg
│   │   │   │   ├── slides-2.jpg
│   │   │   │   └── slides-3.jpg
│   │   │   ├── js
│   │   │   │   └── main.js
│   │   │   ├── scss
│   │   │   │   └── Readme.txt
│   │   │   └── vendor
│   │   │       ├── apexcharts
│   │   │       │   ├── apexcharts.amd.js
│   │   │       │   ├── apexcharts.common.js
│   │   │       │   ├── apexcharts.css
│   │   │       │   ├── apexcharts.esm.js
│   │   │       │   ├── apexcharts.js
│   │   │       │   ├── apexcharts.min.js
│   │   │       │   └── locales
│   │   │       │       ├── ar.json
│   │   │       │       ├── ca.json
│   │   │       │       ├── cs.json
│   │   │       │       ├── de.json
│   │   │       │       ├── el.json
│   │   │       │       ├── en.json
│   │   │       │       ├── es.json
│   │   │       │       ├── et.json
│   │   │       │       ├── fa.json
│   │   │       │       ├── fi.json
│   │   │       │       ├── fr.json
│   │   │       │       ├── he.json
│   │   │       │       ├── hi.json
│   │   │       │       ├── hr.json
│   │   │       │       ├── hu.json
│   │   │       │       ├── hy.json
│   │   │       │       ├── id.json
│   │   │       │       ├── it.json
│   │   │       │       ├── ja.json
│   │   │       │       ├── ka.json
│   │   │       │       ├── ko.json
│   │   │       │       ├── lt.json
│   │   │       │       ├── lv.json
│   │   │       │       ├── nb.json
│   │   │       │       ├── nl.json
│   │   │       │       ├── pl.json
│   │   │       │       ├── pt-br.json
│   │   │       │       ├── pt.json
│   │   │       │       ├── rs.json
│   │   │       │       ├── ru.json
│   │   │       │       ├── se.json
│   │   │       │       ├── sk.json
│   │   │       │       ├── sl.json
│   │   │       │       ├── sq.json
│   │   │       │       ├── th.json
│   │   │       │       ├── tr.json
│   │   │       │       ├── ua.json
│   │   │       │       ├── zh-cn.json
│   │   │       │       └── zh-tw.json
│   │   │       ├── bootstrap
│   │   │       │   ├── css
│   │   │       │   │   ├── bootstrap.css
│   │   │       │   │   ├── bootstrap.css.map
│   │   │       │   │   ├── bootstrap-grid.css
│   │   │       │   │   ├── bootstrap-grid.css.map
│   │   │       │   │   ├── bootstrap-grid.min.css
│   │   │       │   │   ├── bootstrap-grid.min.css.map
│   │   │       │   │   ├── bootstrap-grid.rtl.css
│   │   │       │   │   ├── bootstrap-grid.rtl.css.map
│   │   │       │   │   ├── bootstrap-grid.rtl.min.css
│   │   │       │   │   ├── bootstrap-grid.rtl.min.css.map
│   │   │       │   │   ├── bootstrap.min.css
│   │   │       │   │   ├── bootstrap.min.css.map
│   │   │       │   │   ├── bootstrap-reboot.css
│   │   │       │   │   ├── bootstrap-reboot.css.map
│   │   │       │   │   ├── bootstrap-reboot.min.css
│   │   │       │   │   ├── bootstrap-reboot.min.css.map
│   │   │       │   │   ├── bootstrap-reboot.rtl.css
│   │   │       │   │   ├── bootstrap-reboot.rtl.css.map
│   │   │       │   │   ├── bootstrap-reboot.rtl.min.css
│   │   │       │   │   ├── bootstrap-reboot.rtl.min.css.map
│   │   │       │   │   ├── bootstrap.rtl.css
│   │   │       │   │   ├── bootstrap.rtl.css.map
│   │   │       │   │   ├── bootstrap.rtl.min.css
│   │   │       │   │   ├── bootstrap.rtl.min.css.map
│   │   │       │   │   ├── bootstrap-utilities.css
│   │   │       │   │   ├── bootstrap-utilities.css.map
│   │   │       │   │   ├── bootstrap-utilities.min.css
│   │   │       │   │   ├── bootstrap-utilities.min.css.map
│   │   │       │   │   ├── bootstrap-utilities.rtl.css
│   │   │       │   │   ├── bootstrap-utilities.rtl.css.map
│   │   │       │   │   ├── bootstrap-utilities.rtl.min.css
│   │   │       │   │   └── bootstrap-utilities.rtl.min.css.map
│   │   │       │   └── js
│   │   │       │       ├── bootstrap.bundle.js
│   │   │       │       ├── bootstrap.bundle.js.map
│   │   │       │       ├── bootstrap.bundle.min.js
│   │   │       │       ├── bootstrap.bundle.min.js.map
│   │   │       │       ├── bootstrap.esm.js
│   │   │       │       ├── bootstrap.esm.js.map
│   │   │       │       ├── bootstrap.esm.min.js
│   │   │       │       ├── bootstrap.esm.min.js.map
│   │   │       │       ├── bootstrap.js
│   │   │       │       ├── bootstrap.js.map
│   │   │       │       ├── bootstrap.min.js
│   │   │       │       └── bootstrap.min.js.map
│   │   │       ├── bootstrap-icons
│   │   │       │   ├── bootstrap-icons.css
│   │   │       │   ├── bootstrap-icons.json
│   │   │       │   ├── bootstrap-icons.scss
│   │   │       │   └── fonts
│   │   │       │       ├── bootstrap-icons.woff
│   │   │       │       └── bootstrap-icons.woff2
│   │   │       ├── boxicons
│   │   │       │   ├── css
│   │   │       │   │   ├── animations.css
│   │   │       │   │   ├── boxicons.css
│   │   │       │   │   ├── boxicons.min.css
│   │   │       │   │   └── transformations.css
│   │   │       │   └── fonts
│   │   │       │       ├── boxicons.eot
│   │   │       │       ├── boxicons.svg
│   │   │       │       ├── boxicons.ttf
│   │   │       │       ├── boxicons.woff
│   │   │       │       └── boxicons.woff2
│   │   │       ├── chart.js
│   │   │       │   ├── chart.cjs
│   │   │       │   ├── chart.cjs.map
│   │   │       │   ├── chart.js
│   │   │       │   ├── chart.js.map
│   │   │       │   ├── chart.umd.js
│   │   │       │   ├── chart.umd.js.map
│   │   │       │   ├── chunks
│   │   │       │   │   ├── helpers.segment.cjs
│   │   │       │   │   ├── helpers.segment.cjs.map
│   │   │       │   │   ├── helpers.segment.js
│   │   │       │   │   └── helpers.segment.js.map
│   │   │       │   ├── controllers
│   │   │       │   │   ├── controller.bar.d.ts
│   │   │       │   │   ├── controller.bubble.d.ts
│   │   │       │   │   ├── controller.doughnut.d.ts
│   │   │       │   │   ├── controller.line.d.ts
│   │   │       │   │   ├── controller.pie.d.ts
│   │   │       │   │   ├── controller.polarArea.d.ts
│   │   │       │   │   ├── controller.radar.d.ts
│   │   │       │   │   ├── controller.scatter.d.ts
│   │   │       │   │   └── index.d.ts
│   │   │       │   ├── core
│   │   │       │   │   ├── core.adapters.d.ts
│   │   │       │   │   ├── core.animation.d.ts
│   │   │       │   │   ├── core.animations.defaults.d.ts
│   │   │       │   │   ├── core.animations.d.ts
│   │   │       │   │   ├── core.animator.d.ts
│   │   │       │   │   ├── core.config.d.ts
│   │   │       │   │   ├── core.controller.d.ts
│   │   │       │   │   ├── core.datasetController.d.ts
│   │   │       │   │   ├── core.defaults.d.ts
│   │   │       │   │   ├── core.element.d.ts
│   │   │       │   │   ├── core.interaction.d.ts
│   │   │       │   │   ├── core.layouts.defaults.d.ts
│   │   │       │   │   ├── core.layouts.d.ts
│   │   │       │   │   ├── core.plugins.d.ts
│   │   │       │   │   ├── core.registry.d.ts
│   │   │       │   │   ├── core.scale.autoskip.d.ts
│   │   │       │   │   ├── core.scale.defaults.d.ts
│   │   │       │   │   ├── core.scale.d.ts
│   │   │       │   │   ├── core.ticks.d.ts
│   │   │       │   │   ├── core.typedRegistry.d.ts
│   │   │       │   │   └── index.d.ts
│   │   │       │   ├── elements
│   │   │       │   │   ├── element.arc.d.ts
│   │   │       │   │   ├── element.bar.d.ts
│   │   │       │   │   ├── element.line.d.ts
│   │   │       │   │   ├── element.point.d.ts
│   │   │       │   │   └── index.d.ts
│   │   │       │   ├── helpers
│   │   │       │   │   ├── helpers.canvas.d.ts
│   │   │       │   │   ├── helpers.collection.d.ts
│   │   │       │   │   ├── helpers.color.d.ts
│   │   │       │   │   ├── helpers.config.d.ts
│   │   │       │   │   ├── helpers.core.d.ts
│   │   │       │   │   ├── helpers.curve.d.ts
│   │   │       │   │   ├── helpers.dom.d.ts
│   │   │       │   │   ├── helpers.easing.d.ts
│   │   │       │   │   ├── helpers.extras.d.ts
│   │   │       │   │   ├── helpers.interpolation.d.ts
│   │   │       │   │   ├── helpers.intl.d.ts
│   │   │       │   │   ├── helpers.math.d.ts
│   │   │       │   │   ├── helpers.options.d.ts
│   │   │       │   │   ├── helpers.rtl.d.ts
│   │   │       │   │   ├── helpers.segment.d.ts
│   │   │       │   │   ├── index.d.ts
│   │   │       │   │   └── types.d.ts
│   │   │       │   ├── helpers.cjs
│   │   │       │   ├── helpers.cjs.map
│   │   │       │   ├── helpers.js
│   │   │       │   ├── helpers.js.map
│   │   │       │   ├── index.d.ts
│   │   │       │   ├── index.umd.d.ts
│   │   │       │   ├── platform
│   │   │       │   │   ├── index.d.ts
│   │   │       │   │   ├── platform.base.d.ts
│   │   │       │   │   ├── platform.basic.d.ts
│   │   │       │   │   └── platform.dom.d.ts
│   │   │       │   ├── plugins
│   │   │       │   │   ├── index.d.ts
│   │   │       │   │   ├── plugin.colors.d.ts
│   │   │       │   │   ├── plugin.decimation.d.ts
│   │   │       │   │   ├── plugin.filler
│   │   │       │   │   │   ├── filler.drawing.d.ts
│   │   │       │   │   │   ├── filler.helper.d.ts
│   │   │       │   │   │   ├── filler.options.d.ts
│   │   │       │   │   │   ├── filler.segment.d.ts
│   │   │       │   │   │   ├── filler.target.d.ts
│   │   │       │   │   │   ├── filler.target.stack.d.ts
│   │   │       │   │   │   ├── index.d.ts
│   │   │       │   │   │   └── simpleArc.d.ts
│   │   │       │   │   ├── plugin.legend.d.ts
│   │   │       │   │   ├── plugin.subtitle.d.ts
│   │   │       │   │   ├── plugin.title.d.ts
│   │   │       │   │   └── plugin.tooltip.d.ts
│   │   │       │   ├── scales
│   │   │       │   │   ├── index.d.ts
│   │   │       │   │   ├── scale.category.d.ts
│   │   │       │   │   ├── scale.linearbase.d.ts
│   │   │       │   │   ├── scale.linear.d.ts
│   │   │       │   │   ├── scale.logarithmic.d.ts
│   │   │       │   │   ├── scale.radialLinear.d.ts
│   │   │       │   │   ├── scale.time.d.ts
│   │   │       │   │   └── scale.timeseries.d.ts
│   │   │       │   ├── types
│   │   │       │   │   ├── animation.d.ts
│   │   │       │   │   ├── basic.d.ts
│   │   │       │   │   ├── color.d.ts
│   │   │       │   │   ├── geometric.d.ts
│   │   │       │   │   ├── helpers
│   │   │       │   │   │   ├── helpers.canvas.d.ts
│   │   │       │   │   │   ├── helpers.segment.d.ts
│   │   │       │   │   │   └── index.d.ts
│   │   │       │   │   ├── index.d.ts
│   │   │       │   │   ├── layout.d.ts
│   │   │       │   │   └── utils.d.ts
│   │   │       │   └── types.d.ts
│   │   │       ├── echarts
│   │   │       │   ├── echarts.common.js
│   │   │       │   ├── echarts.common.js.map
│   │   │       │   ├── echarts.common.min.js
│   │   │       │   ├── echarts.esm.js
│   │   │       │   ├── echarts.esm.js.map
│   │   │       │   ├── echarts.esm.min.js
│   │   │       │   ├── echarts.js
│   │   │       │   ├── echarts.js.map
│   │   │       │   ├── echarts.min.js
│   │   │       │   ├── echarts.simple.js
│   │   │       │   ├── echarts.simple.js.map
│   │   │       │   ├── echarts.simple.min.js
│   │   │       │   └── extension
│   │   │       │       ├── bmap.js
│   │   │       │       ├── bmap.js.map
│   │   │       │       ├── bmap.min.js
│   │   │       │       ├── dataTool.js
│   │   │       │       ├── dataTool.js.map
│   │   │       │       └── dataTool.min.js
│   │   │       ├── php-email-form
│   │   │       │   └── validate.js
│   │   │       ├── quill
│   │   │       │   ├── quill.bubble.css
│   │   │       │   ├── quill.core.css
│   │   │       │   ├── quill.core.js
│   │   │       │   ├── quill.js
│   │   │       │   ├── quill.min.js
│   │   │       │   ├── quill.min.js.map
│   │   │       │   └── quill.snow.css
│   │   │       ├── remixicon
│   │   │       │   ├── remixicon.css
│   │   │       │   ├── remixicon.eot
│   │   │       │   ├── remixicon.less
│   │   │       │   ├── remixicon.svg
│   │   │       │   ├── remixicon.symbol.svg
│   │   │       │   ├── remixicon.ttf
│   │   │       │   ├── remixicon.woff
│   │   │       │   └── remixicon.woff2
│   │   │       ├── simple-datatables
│   │   │       │   ├── simple-datatables.js
│   │   │       │   └── style.css
│   │   │       └── tinymce
│   │   │           ├── bower.json
│   │   │           ├── CHANGELOG.md
│   │   │           ├── composer.json
│   │   │           ├── icons
│   │   │           │   └── default
│   │   │           │       ├── icons.js
│   │   │           │       ├── icons.min.js
│   │   │           │       └── index.js
│   │   │           ├── license.txt
│   │   │           ├── models
│   │   │           │   └── dom
│   │   │           │       ├── index.js
│   │   │           │       ├── model.js
│   │   │           │       └── model.min.js
│   │   │           ├── package.json
│   │   │           ├── plugins
│   │   │           │   ├── advlist
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── anchor
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── autolink
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── autoresize
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── autosave
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── charmap
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── code
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── codesample
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── directionality
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── emoticons
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── js
│   │   │           │   │   │   ├── emojiimages.js
│   │   │           │   │   │   ├── emojiimages.min.js
│   │   │           │   │   │   ├── emojis.js
│   │   │           │   │   │   └── emojis.min.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── fullscreen
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── help
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── image
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── importcss
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── insertdatetime
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── link
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── lists
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── media
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── nonbreaking
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── pagebreak
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── preview
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── quickbars
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── save
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── searchreplace
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── table
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── template
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── visualblocks
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   ├── visualchars
│   │   │           │   │   ├── index.js
│   │   │           │   │   ├── plugin.js
│   │   │           │   │   └── plugin.min.js
│   │   │           │   └── wordcount
│   │   │           │       ├── index.js
│   │   │           │       ├── plugin.js
│   │   │           │       └── plugin.min.js
│   │   │           ├── README.md
│   │   │           ├── skins
│   │   │           │   ├── content
│   │   │           │   │   ├── dark
│   │   │           │   │   │   ├── content.css
│   │   │           │   │   │   └── content.min.css
│   │   │           │   │   ├── default
│   │   │           │   │   │   ├── content.css
│   │   │           │   │   │   └── content.min.css
│   │   │           │   │   ├── document
│   │   │           │   │   │   ├── content.css
│   │   │           │   │   │   └── content.min.css
│   │   │           │   │   ├── tinymce-5
│   │   │           │   │   │   ├── content.css
│   │   │           │   │   │   └── content.min.css
│   │   │           │   │   ├── tinymce-5-dark
│   │   │           │   │   │   ├── content.css
│   │   │           │   │   │   └── content.min.css
│   │   │           │   │   └── writer
│   │   │           │   │       ├── content.css
│   │   │           │   │       └── content.min.css
│   │   │           │   └── ui
│   │   │           │       ├── oxide
│   │   │           │       │   ├── content.css
│   │   │           │       │   ├── content.inline.css
│   │   │           │       │   ├── content.inline.min.css
│   │   │           │       │   ├── content.min.css
│   │   │           │       │   ├── skin.css
│   │   │           │       │   ├── skin.min.css
│   │   │           │       │   ├── skin.shadowdom.css
│   │   │           │       │   └── skin.shadowdom.min.css
│   │   │           │       ├── oxide-dark
│   │   │           │       │   ├── content.css
│   │   │           │       │   ├── content.inline.css
│   │   │           │       │   ├── content.inline.min.css
│   │   │           │       │   ├── content.min.css
│   │   │           │       │   ├── skin.css
│   │   │           │       │   ├── skin.min.css
│   │   │           │       │   ├── skin.shadowdom.css
│   │   │           │       │   └── skin.shadowdom.min.css
│   │   │           │       ├── tinymce-5
│   │   │           │       │   ├── content.css
│   │   │           │       │   ├── content.inline.css
│   │   │           │       │   ├── content.inline.min.css
│   │   │           │       │   ├── content.min.css
│   │   │           │       │   ├── skin.css
│   │   │           │       │   ├── skin.min.css
│   │   │           │       │   ├── skin.shadowdom.css
│   │   │           │       │   └── skin.shadowdom.min.css
│   │   │           │       └── tinymce-5-dark
│   │   │           │           ├── content.css
│   │   │           │           ├── content.inline.css
│   │   │           │           ├── content.inline.min.css
│   │   │           │           ├── content.min.css
│   │   │           │           ├── skin.css
│   │   │           │           ├── skin.min.css
│   │   │           │           ├── skin.shadowdom.css
│   │   │           │           └── skin.shadowdom.min.css
│   │   │           ├── themes
│   │   │           │   └── silver
│   │   │           │       ├── index.js
│   │   │           │       ├── theme.js
│   │   │           │       └── theme.min.js
│   │   │           ├── tinymce.d.ts
│   │   │           ├── tinymce.js
│   │   │           └── tinymce.min.js
│   │   ├── charts-apexcharts.html
│   │   ├── charts-chartjs.html
│   │   ├── charts-echarts.html
│   │   ├── components-accordion.html
│   │   ├── components-alerts.html
│   │   ├── components-badges.html
│   │   ├── components-breadcrumbs.html
│   │   ├── components-buttons.html
│   │   ├── components-cards.html
│   │   ├── components-carousel.html
│   │   ├── components-list-group.html
│   │   ├── components-modal.html
│   │   ├── components-pagination.html
│   │   ├── components-progress.html
│   │   ├── components-spinners.html
│   │   ├── components-tabs.html
│   │   ├── components-tooltips.html
│   │   ├── forms
│   │   │   ├── contact.php
│   │   │   └── Readme.txt
│   │   ├── forms-editors.html
│   │   ├── forms-elements.html
│   │   ├── forms-layouts.html
│   │   ├── forms-validation.html
│   │   ├── icons-bootstrap.html
│   │   ├── icons-boxicons.html
│   │   ├── icons-remix.html
│   │   ├── index.html
│   │   ├── pages-blank.html
│   │   ├── pages-contact.html
│   │   ├── pages-error-404.html
│   │   ├── pages-faq.html
│   │   ├── pages-login.html
│   │   ├── pages-register.html
│   │   ├── Readme.txt
│   │   ├── tables-data.html
│   │   ├── tables-general.html
│   │   └── users-profile.html
│   └── robots.txt
├── README.md
├── spark
├── tests
│   ├── database
│   │   └── ExampleDatabaseTest.php
│   ├── index.html
│   ├── README.md
│   ├── session
│   │   └── ExampleSessionTest.php
│   ├── _support
│   │   ├── Database
│   │   │   ├── Migrations
│   │   │   │   └── 2020-02-22-222222_example_migration.php
│   │   │   └── Seeds
│   │   │       └── ExampleSeeder.php
│   │   ├── Libraries
│   │   │   └── ConfigReader.php
│   │   └── Models
│   │       └── ExampleModel.php
│   └── unit
│       └── HealthTest.php
├── t.txt
├── vendor
│   ├── autoload.php
│   ├── bin
│   │   ├── php-parse
│   │   ├── php-parse.bat
│   │   ├── phpunit
│   │   └── phpunit.bat
│   ├── codeigniter4
│   │   └── framework
│   │       ├── app
│   │       │   ├── Common.php
│   │       │   ├── Config
│   │       │   │   ├── App.php
│   │       │   │   ├── Autoload.php
│   │       │   │   ├── Boot
│   │       │   │   │   ├── development.php
│   │       │   │   │   ├── production.php
│   │       │   │   │   └── testing.php
│   │       │   │   ├── Cache.php
│   │       │   │   ├── Constants.php
│   │       │   │   ├── ContentSecurityPolicy.php
│   │       │   │   ├── Cookie.php
│   │       │   │   ├── Cors.php
│   │       │   │   ├── CURLRequest.php
│   │       │   │   ├── Database.php
│   │       │   │   ├── DocTypes.php
│   │       │   │   ├── Email.php
│   │       │   │   ├── Encryption.php
│   │       │   │   ├── Events.php
│   │       │   │   ├── Exceptions.php
│   │       │   │   ├── Feature.php
│   │       │   │   ├── Filters.php
│   │       │   │   ├── ForeignCharacters.php
│   │       │   │   ├── Format.php
│   │       │   │   ├── Generators.php
│   │       │   │   ├── Honeypot.php
│   │       │   │   ├── Images.php
│   │       │   │   ├── Kint.php
│   │       │   │   ├── Logger.php
│   │       │   │   ├── Migrations.php
│   │       │   │   ├── Mimes.php
│   │       │   │   ├── Modules.php
│   │       │   │   ├── Optimize.php
│   │       │   │   ├── Pager.php
│   │       │   │   ├── Paths.php
│   │       │   │   ├── Publisher.php
│   │       │   │   ├── Routes.php
│   │       │   │   ├── Routing.php
│   │       │   │   ├── Security.php
│   │       │   │   ├── Services.php
│   │       │   │   ├── Session.php
│   │       │   │   ├── Toolbar.php
│   │       │   │   ├── UserAgents.php
│   │       │   │   ├── Validation.php
│   │       │   │   └── View.php
│   │       │   ├── Controllers
│   │       │   │   ├── BaseController.php
│   │       │   │   └── Home.php
│   │       │   ├── Database
│   │       │   │   ├── Migrations
│   │       │   │   └── Seeds
│   │       │   ├── Filters
│   │       │   ├── Helpers
│   │       │   ├── index.html
│   │       │   ├── Language
│   │       │   │   └── en
│   │       │   │       └── Validation.php
│   │       │   ├── Libraries
│   │       │   ├── Models
│   │       │   ├── ThirdParty
│   │       │   └── Views
│   │       │       ├── errors
│   │       │       │   ├── cli
│   │       │       │   │   ├── error_404.php
│   │       │       │   │   ├── error_exception.php
│   │       │       │   │   └── production.php
│   │       │       │   └── html
│   │       │       │       ├── debug.css
│   │       │       │       ├── debug.js
│   │       │       │       ├── error_400.php
│   │       │       │       ├── error_404.php
│   │       │       │       ├── error_exception.php
│   │       │       │       └── production.php
│   │       │       └── welcome_message.php
│   │       ├── composer.json
│   │       ├── env
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── preload.php
│   │       ├── public
│   │       │   ├── favicon.ico
│   │       │   ├── index.php
│   │       │   └── robots.txt
│   │       ├── README.md
│   │       ├── spark
│   │       ├── system
│   │       │   ├── API
│   │       │   │   └── ResponseTrait.php
│   │       │   ├── Autoloader
│   │       │   │   ├── Autoloader.php
│   │       │   │   ├── FileLocatorCached.php
│   │       │   │   ├── FileLocatorInterface.php
│   │       │   │   └── FileLocator.php
│   │       │   ├── BaseModel.php
│   │       │   ├── Boot.php
│   │       │   ├── bootstrap.php
│   │       │   ├── Cache
│   │       │   │   ├── CacheFactory.php
│   │       │   │   ├── CacheInterface.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── CacheException.php
│   │       │   │   ├── FactoriesCache
│   │       │   │   │   └── FileVarExportHandler.php
│   │       │   │   ├── FactoriesCache.php
│   │       │   │   ├── Handlers
│   │       │   │   │   ├── BaseHandler.php
│   │       │   │   │   ├── DummyHandler.php
│   │       │   │   │   ├── FileHandler.php
│   │       │   │   │   ├── MemcachedHandler.php
│   │       │   │   │   ├── PredisHandler.php
│   │       │   │   │   ├── RedisHandler.php
│   │       │   │   │   └── WincacheHandler.php
│   │       │   │   └── ResponseCache.php
│   │       │   ├── CLI
│   │       │   │   ├── BaseCommand.php
│   │       │   │   ├── CLI.php
│   │       │   │   ├── Commands.php
│   │       │   │   ├── Console.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── CLIException.php
│   │       │   │   ├── GeneratorTrait.php
│   │       │   │   └── InputOutput.php
│   │       │   ├── CodeIgniter.php
│   │       │   ├── Commands
│   │       │   │   ├── Cache
│   │       │   │   │   ├── ClearCache.php
│   │       │   │   │   └── InfoCache.php
│   │       │   │   ├── Database
│   │       │   │   │   ├── CreateDatabase.php
│   │       │   │   │   ├── Migrate.php
│   │       │   │   │   ├── MigrateRefresh.php
│   │       │   │   │   ├── MigrateRollback.php
│   │       │   │   │   ├── MigrateStatus.php
│   │       │   │   │   ├── Seed.php
│   │       │   │   │   └── ShowTableInfo.php
│   │       │   │   ├── Encryption
│   │       │   │   │   └── GenerateKey.php
│   │       │   │   ├── Generators
│   │       │   │   │   ├── CellGenerator.php
│   │       │   │   │   ├── CommandGenerator.php
│   │       │   │   │   ├── ConfigGenerator.php
│   │       │   │   │   ├── ControllerGenerator.php
│   │       │   │   │   ├── EntityGenerator.php
│   │       │   │   │   ├── FilterGenerator.php
│   │       │   │   │   ├── MigrationGenerator.php
│   │       │   │   │   ├── ModelGenerator.php
│   │       │   │   │   ├── ScaffoldGenerator.php
│   │       │   │   │   ├── SeederGenerator.php
│   │       │   │   │   ├── TestGenerator.php
│   │       │   │   │   ├── ValidationGenerator.php
│   │       │   │   │   └── Views
│   │       │   │   │       ├── cell.tpl.php
│   │       │   │   │       ├── cell_view.tpl.php
│   │       │   │   │       ├── command.tpl.php
│   │       │   │   │       ├── config.tpl.php
│   │       │   │   │       ├── controller.tpl.php
│   │       │   │   │       ├── entity.tpl.php
│   │       │   │   │       ├── filter.tpl.php
│   │       │   │   │       ├── migration.tpl.php
│   │       │   │   │       ├── model.tpl.php
│   │       │   │   │       ├── seeder.tpl.php
│   │       │   │   │       ├── test.tpl.php
│   │       │   │   │       └── validation.tpl.php
│   │       │   │   ├── Help.php
│   │       │   │   ├── Housekeeping
│   │       │   │   │   ├── ClearDebugbar.php
│   │       │   │   │   └── ClearLogs.php
│   │       │   │   ├── ListCommands.php
│   │       │   │   ├── Server
│   │       │   │   │   └── Serve.php
│   │       │   │   ├── Translation
│   │       │   │   │   ├── LocalizationFinder.php
│   │       │   │   │   └── LocalizationSync.php
│   │       │   │   └── Utilities
│   │       │   │       ├── ConfigCheck.php
│   │       │   │       ├── Environment.php
│   │       │   │       ├── FilterCheck.php
│   │       │   │       ├── Namespaces.php
│   │       │   │       ├── Optimize.php
│   │       │   │       ├── PhpIniCheck.php
│   │       │   │       ├── Publish.php
│   │       │   │       ├── Routes
│   │       │   │       │   ├── AutoRouteCollector.php
│   │       │   │       │   ├── AutoRouterImproved
│   │       │   │       │   │   ├── AutoRouteCollector.php
│   │       │   │       │   │   └── ControllerMethodReader.php
│   │       │   │       │   ├── ControllerFinder.php
│   │       │   │       │   ├── ControllerMethodReader.php
│   │       │   │       │   ├── FilterCollector.php
│   │       │   │       │   ├── FilterFinder.php
│   │       │   │       │   └── SampleURIGenerator.php
│   │       │   │       └── Routes.php
│   │       │   ├── Common.php
│   │       │   ├── ComposerScripts.php
│   │       │   ├── Config
│   │       │   │   ├── AutoloadConfig.php
│   │       │   │   ├── BaseConfig.php
│   │       │   │   ├── BaseService.php
│   │       │   │   ├── DotEnv.php
│   │       │   │   ├── Factories.php
│   │       │   │   ├── Factory.php
│   │       │   │   ├── Filters.php
│   │       │   │   ├── ForeignCharacters.php
│   │       │   │   ├── Publisher.php
│   │       │   │   ├── Routing.php
│   │       │   │   ├── Services.php
│   │       │   │   └── View.php
│   │       │   ├── Controller.php
│   │       │   ├── Cookie
│   │       │   │   ├── CloneableCookieInterface.php
│   │       │   │   ├── CookieInterface.php
│   │       │   │   ├── Cookie.php
│   │       │   │   ├── CookieStore.php
│   │       │   │   └── Exceptions
│   │       │   │       └── CookieException.php
│   │       │   ├── Database
│   │       │   │   ├── BaseBuilder.php
│   │       │   │   ├── BaseConnection.php
│   │       │   │   ├── BasePreparedQuery.php
│   │       │   │   ├── BaseResult.php
│   │       │   │   ├── BaseUtils.php
│   │       │   │   ├── Config.php
│   │       │   │   ├── ConnectionInterface.php
│   │       │   │   ├── Database.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   ├── DatabaseException.php
│   │       │   │   │   ├── DataException.php
│   │       │   │   │   └── ExceptionInterface.php
│   │       │   │   ├── Forge.php
│   │       │   │   ├── Migration.php
│   │       │   │   ├── MigrationRunner.php
│   │       │   │   ├── MySQLi
│   │       │   │   │   ├── Builder.php
│   │       │   │   │   ├── Connection.php
│   │       │   │   │   ├── Forge.php
│   │       │   │   │   ├── PreparedQuery.php
│   │       │   │   │   ├── Result.php
│   │       │   │   │   └── Utils.php
│   │       │   │   ├── OCI8
│   │       │   │   │   ├── Builder.php
│   │       │   │   │   ├── Connection.php
│   │       │   │   │   ├── Forge.php
│   │       │   │   │   ├── PreparedQuery.php
│   │       │   │   │   ├── Result.php
│   │       │   │   │   └── Utils.php
│   │       │   │   ├── Postgre
│   │       │   │   │   ├── Builder.php
│   │       │   │   │   ├── Connection.php
│   │       │   │   │   ├── Forge.php
│   │       │   │   │   ├── PreparedQuery.php
│   │       │   │   │   ├── Result.php
│   │       │   │   │   └── Utils.php
│   │       │   │   ├── PreparedQueryInterface.php
│   │       │   │   ├── QueryInterface.php
│   │       │   │   ├── Query.php
│   │       │   │   ├── RawSql.php
│   │       │   │   ├── ResultInterface.php
│   │       │   │   ├── Seeder.php
│   │       │   │   ├── SQLite3
│   │       │   │   │   ├── Builder.php
│   │       │   │   │   ├── Connection.php
│   │       │   │   │   ├── Forge.php
│   │       │   │   │   ├── PreparedQuery.php
│   │       │   │   │   ├── Result.php
│   │       │   │   │   ├── Table.php
│   │       │   │   │   └── Utils.php
│   │       │   │   ├── SQLSRV
│   │       │   │   │   ├── Builder.php
│   │       │   │   │   ├── Connection.php
│   │       │   │   │   ├── Forge.php
│   │       │   │   │   ├── PreparedQuery.php
│   │       │   │   │   ├── Result.php
│   │       │   │   │   └── Utils.php
│   │       │   │   └── TableName.php
│   │       │   ├── DataCaster
│   │       │   │   ├── Cast
│   │       │   │   │   ├── ArrayCast.php
│   │       │   │   │   ├── BaseCast.php
│   │       │   │   │   ├── BooleanCast.php
│   │       │   │   │   ├── CastInterface.php
│   │       │   │   │   ├── CSVCast.php
│   │       │   │   │   ├── DatetimeCast.php
│   │       │   │   │   ├── FloatCast.php
│   │       │   │   │   ├── IntBoolCast.php
│   │       │   │   │   ├── IntegerCast.php
│   │       │   │   │   ├── JsonCast.php
│   │       │   │   │   ├── TimestampCast.php
│   │       │   │   │   └── URICast.php
│   │       │   │   ├── DataCaster.php
│   │       │   │   └── Exceptions
│   │       │   │       └── CastException.php
│   │       │   ├── DataConverter
│   │       │   │   └── DataConverter.php
│   │       │   ├── Debug
│   │       │   │   ├── BaseExceptionHandler.php
│   │       │   │   ├── ExceptionHandlerInterface.php
│   │       │   │   ├── ExceptionHandler.php
│   │       │   │   ├── Exceptions.php
│   │       │   │   ├── Iterator.php
│   │       │   │   ├── Timer.php
│   │       │   │   ├── Toolbar
│   │       │   │   │   ├── Collectors
│   │       │   │   │   │   ├── BaseCollector.php
│   │       │   │   │   │   ├── Config.php
│   │       │   │   │   │   ├── Database.php
│   │       │   │   │   │   ├── Events.php
│   │       │   │   │   │   ├── Files.php
│   │       │   │   │   │   ├── History.php
│   │       │   │   │   │   ├── Logs.php
│   │       │   │   │   │   ├── Routes.php
│   │       │   │   │   │   ├── Timers.php
│   │       │   │   │   │   └── Views.php
│   │       │   │   │   └── Views
│   │       │   │   │       ├── _config.tpl
│   │       │   │   │       ├── _database.tpl
│   │       │   │   │       ├── _events.tpl
│   │       │   │   │       ├── _files.tpl
│   │       │   │   │       ├── _history.tpl
│   │       │   │   │       ├── _logs.tpl
│   │       │   │   │       ├── _routes.tpl
│   │       │   │   │       ├── toolbar.css
│   │       │   │   │       ├── toolbar.js
│   │       │   │   │       ├── toolbarloader.js
│   │       │   │   │       └── toolbar.tpl.php
│   │       │   │   └── Toolbar.php
│   │       │   ├── Email
│   │       │   │   └── Email.php
│   │       │   ├── Encryption
│   │       │   │   ├── EncrypterInterface.php
│   │       │   │   ├── Encryption.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── EncryptionException.php
│   │       │   │   └── Handlers
│   │       │   │       ├── BaseHandler.php
│   │       │   │       ├── OpenSSLHandler.php
│   │       │   │       └── SodiumHandler.php
│   │       │   ├── Entity
│   │       │   │   ├── Cast
│   │       │   │   │   ├── ArrayCast.php
│   │       │   │   │   ├── BaseCast.php
│   │       │   │   │   ├── BooleanCast.php
│   │       │   │   │   ├── CastInterface.php
│   │       │   │   │   ├── CSVCast.php
│   │       │   │   │   ├── DatetimeCast.php
│   │       │   │   │   ├── FloatCast.php
│   │       │   │   │   ├── IntBoolCast.php
│   │       │   │   │   ├── IntegerCast.php
│   │       │   │   │   ├── JsonCast.php
│   │       │   │   │   ├── ObjectCast.php
│   │       │   │   │   ├── StringCast.php
│   │       │   │   │   ├── TimestampCast.php
│   │       │   │   │   └── URICast.php
│   │       │   │   ├── Entity.php
│   │       │   │   └── Exceptions
│   │       │   │       └── CastException.php
│   │       │   ├── Events
│   │       │   │   └── Events.php
│   │       │   ├── Exceptions
│   │       │   │   ├── BadFunctionCallException.php
│   │       │   │   ├── BadMethodCallException.php
│   │       │   │   ├── ConfigException.php
│   │       │   │   ├── CriticalError.php
│   │       │   │   ├── DebugTraceableTrait.php
│   │       │   │   ├── DownloadException.php
│   │       │   │   ├── ExceptionInterface.php
│   │       │   │   ├── FrameworkException.php
│   │       │   │   ├── HasExitCodeInterface.php
│   │       │   │   ├── HTTPExceptionInterface.php
│   │       │   │   ├── InvalidArgumentException.php
│   │       │   │   ├── LogicException.php
│   │       │   │   ├── ModelException.php
│   │       │   │   ├── PageNotFoundException.php
│   │       │   │   ├── RuntimeException.php
│   │       │   │   └── TestException.php
│   │       │   ├── Files
│   │       │   │   ├── Exceptions
│   │       │   │   │   ├── ExceptionInterface.php
│   │       │   │   │   ├── FileException.php
│   │       │   │   │   └── FileNotFoundException.php
│   │       │   │   ├── FileCollection.php
│   │       │   │   ├── File.php
│   │       │   │   └── FileSizeUnit.php
│   │       │   ├── Filters
│   │       │   │   ├── Cors.php
│   │       │   │   ├── CSRF.php
│   │       │   │   ├── DebugToolbar.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── FilterException.php
│   │       │   │   ├── FilterInterface.php
│   │       │   │   ├── Filters.php
│   │       │   │   ├── ForceHTTPS.php
│   │       │   │   ├── Honeypot.php
│   │       │   │   ├── InvalidChars.php
│   │       │   │   ├── PageCache.php
│   │       │   │   ├── PerformanceMetrics.php
│   │       │   │   └── SecureHeaders.php
│   │       │   ├── Format
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── FormatException.php
│   │       │   │   ├── Format.php
│   │       │   │   ├── FormatterInterface.php
│   │       │   │   ├── JSONFormatter.php
│   │       │   │   └── XMLFormatter.php
│   │       │   ├── Helpers
│   │       │   │   ├── Array
│   │       │   │   │   └── ArrayHelper.php
│   │       │   │   ├── array_helper.php
│   │       │   │   ├── cookie_helper.php
│   │       │   │   ├── date_helper.php
│   │       │   │   ├── filesystem_helper.php
│   │       │   │   ├── form_helper.php
│   │       │   │   ├── html_helper.php
│   │       │   │   ├── inflector_helper.php
│   │       │   │   ├── kint_helper.php
│   │       │   │   ├── number_helper.php
│   │       │   │   ├── security_helper.php
│   │       │   │   ├── test_helper.php
│   │       │   │   ├── text_helper.php
│   │       │   │   ├── url_helper.php
│   │       │   │   └── xml_helper.php
│   │       │   ├── Honeypot
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── HoneypotException.php
│   │       │   │   └── Honeypot.php
│   │       │   ├── HotReloader
│   │       │   │   ├── DirectoryHasher.php
│   │       │   │   ├── HotReloader.php
│   │       │   │   └── IteratorFilter.php
│   │       │   ├── HTTP
│   │       │   │   ├── CLIRequest.php
│   │       │   │   ├── ContentSecurityPolicy.php
│   │       │   │   ├── Cors.php
│   │       │   │   ├── CURLRequest.php
│   │       │   │   ├── DownloadResponse.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   ├── BadRequestException.php
│   │       │   │   │   ├── ExceptionInterface.php
│   │       │   │   │   ├── HTTPException.php
│   │       │   │   │   └── RedirectException.php
│   │       │   │   ├── Files
│   │       │   │   │   ├── FileCollection.php
│   │       │   │   │   ├── UploadedFileInterface.php
│   │       │   │   │   └── UploadedFile.php
│   │       │   │   ├── Header.php
│   │       │   │   ├── IncomingRequest.php
│   │       │   │   ├── MessageInterface.php
│   │       │   │   ├── Message.php
│   │       │   │   ├── MessageTrait.php
│   │       │   │   ├── Method.php
│   │       │   │   ├── Negotiate.php
│   │       │   │   ├── OutgoingRequestInterface.php
│   │       │   │   ├── OutgoingRequest.php
│   │       │   │   ├── RedirectResponse.php
│   │       │   │   ├── RequestInterface.php
│   │       │   │   ├── Request.php
│   │       │   │   ├── RequestTrait.php
│   │       │   │   ├── ResponsableInterface.php
│   │       │   │   ├── ResponseInterface.php
│   │       │   │   ├── Response.php
│   │       │   │   ├── ResponseTrait.php
│   │       │   │   ├── SiteURIFactory.php
│   │       │   │   ├── SiteURI.php
│   │       │   │   ├── URI.php
│   │       │   │   └── UserAgent.php
│   │       │   ├── I18n
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── I18nException.php
│   │       │   │   ├── TimeDifference.php
│   │       │   │   ├── TimeLegacy.php
│   │       │   │   ├── Time.php
│   │       │   │   └── TimeTrait.php
│   │       │   ├── Images
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── ImageException.php
│   │       │   │   ├── Handlers
│   │       │   │   │   ├── BaseHandler.php
│   │       │   │   │   ├── GDHandler.php
│   │       │   │   │   └── ImageMagickHandler.php
│   │       │   │   ├── ImageHandlerInterface.php
│   │       │   │   └── Image.php
│   │       │   ├── index.html
│   │       │   ├── Language
│   │       │   │   ├── en
│   │       │   │   │   ├── Cache.php
│   │       │   │   │   ├── Cast.php
│   │       │   │   │   ├── CLI.php
│   │       │   │   │   ├── Cookie.php
│   │       │   │   │   ├── Core.php
│   │       │   │   │   ├── Database.php
│   │       │   │   │   ├── Email.php
│   │       │   │   │   ├── Encryption.php
│   │       │   │   │   ├── Errors.php
│   │       │   │   │   ├── Fabricator.php
│   │       │   │   │   ├── Files.php
│   │       │   │   │   ├── Filters.php
│   │       │   │   │   ├── Format.php
│   │       │   │   │   ├── HTTP.php
│   │       │   │   │   ├── Images.php
│   │       │   │   │   ├── Language.php
│   │       │   │   │   ├── Log.php
│   │       │   │   │   ├── Migrations.php
│   │       │   │   │   ├── Number.php
│   │       │   │   │   ├── Pager.php
│   │       │   │   │   ├── Publisher.php
│   │       │   │   │   ├── RESTful.php
│   │       │   │   │   ├── Router.php
│   │       │   │   │   ├── Security.php
│   │       │   │   │   ├── Session.php
│   │       │   │   │   ├── Test.php
│   │       │   │   │   ├── Time.php
│   │       │   │   │   ├── Validation.php
│   │       │   │   │   └── View.php
│   │       │   │   └── Language.php
│   │       │   ├── Log
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── LogException.php
│   │       │   │   ├── Handlers
│   │       │   │   │   ├── BaseHandler.php
│   │       │   │   │   ├── ChromeLoggerHandler.php
│   │       │   │   │   ├── ErrorlogHandler.php
│   │       │   │   │   ├── FileHandler.php
│   │       │   │   │   └── HandlerInterface.php
│   │       │   │   └── Logger.php
│   │       │   ├── Model.php
│   │       │   ├── Modules
│   │       │   │   └── Modules.php
│   │       │   ├── Pager
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── PagerException.php
│   │       │   │   ├── PagerInterface.php
│   │       │   │   ├── Pager.php
│   │       │   │   ├── PagerRenderer.php
│   │       │   │   └── Views
│   │       │   │       ├── default_full.php
│   │       │   │       ├── default_head.php
│   │       │   │       └── default_simple.php
│   │       │   ├── Publisher
│   │       │   │   ├── ContentReplacer.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── PublisherException.php
│   │       │   │   └── Publisher.php
│   │       │   ├── RESTful
│   │       │   │   ├── BaseResource.php
│   │       │   │   ├── ResourceController.php
│   │       │   │   └── ResourcePresenter.php
│   │       │   ├── rewrite.php
│   │       │   ├── Router
│   │       │   │   ├── AutoRouterImproved.php
│   │       │   │   ├── AutoRouterInterface.php
│   │       │   │   ├── AutoRouter.php
│   │       │   │   ├── DefinedRouteCollector.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   ├── ExceptionInterface.php
│   │       │   │   │   ├── MethodNotFoundException.php
│   │       │   │   │   └── RouterException.php
│   │       │   │   ├── RouteCollectionInterface.php
│   │       │   │   ├── RouteCollection.php
│   │       │   │   ├── RouterInterface.php
│   │       │   │   └── Router.php
│   │       │   ├── Security
│   │       │   │   ├── CheckPhpIni.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── SecurityException.php
│   │       │   │   ├── SecurityInterface.php
│   │       │   │   └── Security.php
│   │       │   ├── Session
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── SessionException.php
│   │       │   │   ├── Handlers
│   │       │   │   │   ├── ArrayHandler.php
│   │       │   │   │   ├── BaseHandler.php
│   │       │   │   │   ├── Database
│   │       │   │   │   │   ├── MySQLiHandler.php
│   │       │   │   │   │   └── PostgreHandler.php
│   │       │   │   │   ├── DatabaseHandler.php
│   │       │   │   │   ├── FileHandler.php
│   │       │   │   │   ├── MemcachedHandler.php
│   │       │   │   │   └── RedisHandler.php
│   │       │   │   ├── SessionInterface.php
│   │       │   │   └── Session.php
│   │       │   ├── Superglobals.php
│   │       │   ├── Test
│   │       │   │   ├── bootstrap.php
│   │       │   │   ├── CIUnitTestCase.php
│   │       │   │   ├── ConfigFromArrayTrait.php
│   │       │   │   ├── Constraints
│   │       │   │   │   └── SeeInDatabase.php
│   │       │   │   ├── ControllerTestTrait.php
│   │       │   │   ├── DatabaseTestTrait.php
│   │       │   │   ├── DOMParser.php
│   │       │   │   ├── Fabricator.php
│   │       │   │   ├── FeatureTestTrait.php
│   │       │   │   ├── Filters
│   │       │   │   │   └── CITestStreamFilter.php
│   │       │   │   ├── FilterTestTrait.php
│   │       │   │   ├── IniTestTrait.php
│   │       │   │   ├── Interfaces
│   │       │   │   │   └── FabricatorModel.php
│   │       │   │   ├── Mock
│   │       │   │   │   ├── MockAppConfig.php
│   │       │   │   │   ├── MockAutoload.php
│   │       │   │   │   ├── MockBuilder.php
│   │       │   │   │   ├── MockCache.php
│   │       │   │   │   ├── MockCLIConfig.php
│   │       │   │   │   ├── MockCodeIgniter.php
│   │       │   │   │   ├── MockCommon.php
│   │       │   │   │   ├── MockConnection.php
│   │       │   │   │   ├── MockCURLRequest.php
│   │       │   │   │   ├── MockEmail.php
│   │       │   │   │   ├── MockEvents.php
│   │       │   │   │   ├── MockFileLogger.php
│   │       │   │   │   ├── MockIncomingRequest.php
│   │       │   │   │   ├── MockInputOutput.php
│   │       │   │   │   ├── MockLanguage.php
│   │       │   │   │   ├── MockLogger.php
│   │       │   │   │   ├── MockQuery.php
│   │       │   │   │   ├── MockResourceController.php
│   │       │   │   │   ├── MockResourcePresenter.php
│   │       │   │   │   ├── MockResponse.php
│   │       │   │   │   ├── MockResult.php
│   │       │   │   │   ├── MockSecurity.php
│   │       │   │   │   ├── MockServices.php
│   │       │   │   │   ├── MockSession.php
│   │       │   │   │   └── MockTable.php
│   │       │   │   ├── PhpStreamWrapper.php
│   │       │   │   ├── ReflectionHelper.php
│   │       │   │   ├── StreamFilterTrait.php
│   │       │   │   ├── TestLogger.php
│   │       │   │   └── TestResponse.php
│   │       │   ├── ThirdParty
│   │       │   │   ├── Escaper
│   │       │   │   │   ├── Escaper.php
│   │       │   │   │   ├── Exception
│   │       │   │   │   │   ├── ExceptionInterface.php
│   │       │   │   │   │   ├── InvalidArgumentException.php
│   │       │   │   │   │   └── RuntimeException.php
│   │       │   │   │   └── LICENSE.md
│   │       │   │   ├── Kint
│   │       │   │   │   ├── CallFinder.php
│   │       │   │   │   ├── FacadeInterface.php
│   │       │   │   │   ├── init_helpers.php
│   │       │   │   │   ├── init.php
│   │       │   │   │   ├── Kint.php
│   │       │   │   │   ├── LICENSE
│   │       │   │   │   ├── Parser
│   │       │   │   │   │   ├── AbstractPlugin.php
│   │       │   │   │   │   ├── ArrayLimitPlugin.php
│   │       │   │   │   │   ├── ArrayObjectPlugin.php
│   │       │   │   │   │   ├── Base64Plugin.php
│   │       │   │   │   │   ├── BinaryPlugin.php
│   │       │   │   │   │   ├── BlacklistPlugin.php
│   │       │   │   │   │   ├── ClassHooksPlugin.php
│   │       │   │   │   │   ├── ClassMethodsPlugin.php
│   │       │   │   │   │   ├── ClassStaticsPlugin.php
│   │       │   │   │   │   ├── ClassStringsPlugin.php
│   │       │   │   │   │   ├── ClosurePlugin.php
│   │       │   │   │   │   ├── ColorPlugin.php
│   │       │   │   │   │   ├── ConstructablePluginInterface.php
│   │       │   │   │   │   ├── DateTimePlugin.php
│   │       │   │   │   │   ├── DomPlugin.php
│   │       │   │   │   │   ├── EnumPlugin.php
│   │       │   │   │   │   ├── FsPathPlugin.php
│   │       │   │   │   │   ├── HtmlPlugin.php
│   │       │   │   │   │   ├── IteratorPlugin.php
│   │       │   │   │   │   ├── JsonPlugin.php
│   │       │   │   │   │   ├── MicrotimePlugin.php
│   │       │   │   │   │   ├── MysqliPlugin.php
│   │       │   │   │   │   ├── Parser.php
│   │       │   │   │   │   ├── PluginBeginInterface.php
│   │       │   │   │   │   ├── PluginCompleteInterface.php
│   │       │   │   │   │   ├── PluginInterface.php
│   │       │   │   │   │   ├── ProfilePlugin.php
│   │       │   │   │   │   ├── ProxyPlugin.php
│   │       │   │   │   │   ├── SerializePlugin.php
│   │       │   │   │   │   ├── SimpleXMLElementPlugin.php
│   │       │   │   │   │   ├── SplFileInfoPlugin.php
│   │       │   │   │   │   ├── StreamPlugin.php
│   │       │   │   │   │   ├── TablePlugin.php
│   │       │   │   │   │   ├── ThrowablePlugin.php
│   │       │   │   │   │   ├── TimestampPlugin.php
│   │       │   │   │   │   ├── ToStringPlugin.php
│   │       │   │   │   │   ├── TracePlugin.php
│   │       │   │   │   │   └── XmlPlugin.php
│   │       │   │   │   ├── Renderer
│   │       │   │   │   │   ├── AbstractRenderer.php
│   │       │   │   │   │   ├── AssetRendererTrait.php
│   │       │   │   │   │   ├── CliRenderer.php
│   │       │   │   │   │   ├── ConstructableRendererInterface.php
│   │       │   │   │   │   ├── PlainRenderer.php
│   │       │   │   │   │   ├── RendererInterface.php
│   │       │   │   │   │   ├── Rich
│   │       │   │   │   │   │   ├── AbstractPlugin.php
│   │       │   │   │   │   │   ├── BinaryPlugin.php
│   │       │   │   │   │   │   ├── CallableDefinitionPlugin.php
│   │       │   │   │   │   │   ├── CallablePlugin.php
│   │       │   │   │   │   │   ├── ColorPlugin.php
│   │       │   │   │   │   │   ├── LockPlugin.php
│   │       │   │   │   │   │   ├── MicrotimePlugin.php
│   │       │   │   │   │   │   ├── PluginInterface.php
│   │       │   │   │   │   │   ├── ProfilePlugin.php
│   │       │   │   │   │   │   ├── SourcePlugin.php
│   │       │   │   │   │   │   ├── TablePlugin.php
│   │       │   │   │   │   │   ├── TabPluginInterface.php
│   │       │   │   │   │   │   ├── TraceFramePlugin.php
│   │       │   │   │   │   │   └── ValuePluginInterface.php
│   │       │   │   │   │   ├── RichRenderer.php
│   │       │   │   │   │   ├── Text
│   │       │   │   │   │   │   ├── AbstractPlugin.php
│   │       │   │   │   │   │   ├── LockPlugin.php
│   │       │   │   │   │   │   ├── MicrotimePlugin.php
│   │       │   │   │   │   │   ├── PluginInterface.php
│   │       │   │   │   │   │   ├── SplFileInfoPlugin.php
│   │       │   │   │   │   │   └── TracePlugin.php
│   │       │   │   │   │   └── TextRenderer.php
│   │       │   │   │   ├── resources
│   │       │   │   │   │   └── compiled
│   │       │   │   │   │       ├── aante-dark.css
│   │       │   │   │   │       ├── aante-light.css
│   │       │   │   │   │       ├── main.js
│   │       │   │   │   │       ├── original.css
│   │       │   │   │   │       ├── plain.css
│   │       │   │   │   │       ├── solarized.css
│   │       │   │   │   │       └── solarized-dark.css
│   │       │   │   │   ├── Utils.php
│   │       │   │   │   └── Value
│   │       │   │   │       ├── AbstractValue.php
│   │       │   │   │       ├── ArrayValue.php
│   │       │   │   │       ├── ClosedResourceValue.php
│   │       │   │   │       ├── ClosureValue.php
│   │       │   │   │       ├── ColorValue.php
│   │       │   │   │       ├── Context
│   │       │   │   │       │   ├── ArrayContext.php
│   │       │   │   │       │   ├── BaseContext.php
│   │       │   │   │       │   ├── ClassConstContext.php
│   │       │   │   │       │   ├── ClassDeclaredContext.php
│   │       │   │   │       │   ├── ClassOwnedContext.php
│   │       │   │   │       │   ├── ContextInterface.php
│   │       │   │   │       │   ├── DoubleAccessMemberContext.php
│   │       │   │   │       │   ├── MethodContext.php
│   │       │   │   │       │   ├── PropertyContext.php
│   │       │   │   │       │   └── StaticPropertyContext.php
│   │       │   │   │       ├── DateTimeValue.php
│   │       │   │   │       ├── DeclaredCallableBag.php
│   │       │   │   │       ├── DomNodeListValue.php
│   │       │   │   │       ├── DomNodeValue.php
│   │       │   │   │       ├── EnumValue.php
│   │       │   │   │       ├── FixedWidthValue.php
│   │       │   │   │       ├── FunctionValue.php
│   │       │   │   │       ├── InstanceValue.php
│   │       │   │   │       ├── MethodValue.php
│   │       │   │   │       ├── MicrotimeValue.php
│   │       │   │   │       ├── ParameterBag.php
│   │       │   │   │       ├── ParameterHoldingTrait.php
│   │       │   │   │       ├── Representation
│   │       │   │   │       │   ├── AbstractRepresentation.php
│   │       │   │   │       │   ├── BinaryRepresentation.php
│   │       │   │   │       │   ├── CallableDefinitionRepresentation.php
│   │       │   │   │       │   ├── ColorRepresentation.php
│   │       │   │   │       │   ├── ContainerRepresentation.php
│   │       │   │   │       │   ├── MicrotimeRepresentation.php
│   │       │   │   │       │   ├── ProfileRepresentation.php
│   │       │   │   │       │   ├── RepresentationInterface.php
│   │       │   │   │       │   ├── SourceRepresentation.php
│   │       │   │   │       │   ├── SplFileInfoRepresentation.php
│   │       │   │   │       │   ├── StringRepresentation.php
│   │       │   │   │       │   ├── TableRepresentation.php
│   │       │   │   │       │   └── ValueRepresentation.php
│   │       │   │   │       ├── ResourceValue.php
│   │       │   │   │       ├── SimpleXMLElementValue.php
│   │       │   │   │       ├── SplFileInfoValue.php
│   │       │   │   │       ├── StreamValue.php
│   │       │   │   │       ├── StringValue.php
│   │       │   │   │       ├── ThrowableValue.php
│   │       │   │   │       ├── TraceFrameValue.php
│   │       │   │   │       ├── TraceValue.php
│   │       │   │   │       ├── UninitializedValue.php
│   │       │   │   │       ├── UnknownValue.php
│   │       │   │   │       └── VirtualValue.php
│   │       │   │   └── PSR
│   │       │   │       └── Log
│   │       │   │           ├── AbstractLogger.php
│   │       │   │           ├── InvalidArgumentException.php
│   │       │   │           ├── LICENSE
│   │       │   │           ├── LoggerAwareInterface.php
│   │       │   │           ├── LoggerAwareTrait.php
│   │       │   │           ├── LoggerInterface.php
│   │       │   │           ├── LoggerTrait.php
│   │       │   │           ├── LogLevel.php
│   │       │   │           └── NullLogger.php
│   │       │   ├── Throttle
│   │       │   │   ├── ThrottlerInterface.php
│   │       │   │   └── Throttler.php
│   │       │   ├── Traits
│   │       │   │   ├── ConditionalTrait.php
│   │       │   │   └── PropertiesTrait.php
│   │       │   ├── Typography
│   │       │   │   └── Typography.php
│   │       │   ├── Validation
│   │       │   │   ├── CreditCardRules.php
│   │       │   │   ├── DotArrayFilter.php
│   │       │   │   ├── Exceptions
│   │       │   │   │   └── ValidationException.php
│   │       │   │   ├── FileRules.php
│   │       │   │   ├── FormatRules.php
│   │       │   │   ├── Rules.php
│   │       │   │   ├── StrictRules
│   │       │   │   │   ├── CreditCardRules.php
│   │       │   │   │   ├── FileRules.php
│   │       │   │   │   ├── FormatRules.php
│   │       │   │   │   └── Rules.php
│   │       │   │   ├── ValidationInterface.php
│   │       │   │   ├── Validation.php
│   │       │   │   └── Views
│   │       │   │       ├── list.php
│   │       │   │       └── single.php
│   │       │   └── View
│   │       │       ├── Cell.php
│   │       │       ├── Cells
│   │       │       │   └── Cell.php
│   │       │       ├── Exceptions
│   │       │       │   └── ViewException.php
│   │       │       ├── Filters.php
│   │       │       ├── Parser.php
│   │       │       ├── Plugins.php
│   │       │       ├── RendererInterface.php
│   │       │       ├── Table.php
│   │       │       ├── ViewDecoratorInterface.php
│   │       │       ├── ViewDecoratorTrait.php
│   │       │       └── View.php
│   │       ├── tests
│   │       │   ├── database
│   │       │   │   └── ExampleDatabaseTest.php
│   │       │   ├── index.html
│   │       │   ├── README.md
│   │       │   ├── session
│   │       │   │   └── ExampleSessionTest.php
│   │       │   ├── _support
│   │       │   │   ├── Database
│   │       │   │   │   ├── Migrations
│   │       │   │   │   │   └── 2020-02-22-222222_example_migration.php
│   │       │   │   │   └── Seeds
│   │       │   │   │       └── ExampleSeeder.php
│   │       │   │   ├── Libraries
│   │       │   │   │   └── ConfigReader.php
│   │       │   │   └── Models
│   │       │   │       └── ExampleModel.php
│   │       │   └── unit
│   │       │       └── HealthTest.php
│   │       └── writable
│   │           ├── cache
│   │           │   └── index.html
│   │           ├── index.html
│   │           ├── logs
│   │           │   └── index.html
│   │           ├── session
│   │           │   └── index.html
│   │           └── uploads
│   │               └── index.html
│   ├── composer
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── ClassLoader.php
│   │   ├── installed.json
│   │   ├── installed.php
│   │   ├── InstalledVersions.php
│   │   ├── LICENSE
│   │   └── platform_check.php
│   ├── dompdf
│   │   ├── dompdf
│   │   │   ├── AUTHORS.md
│   │   │   ├── composer.json
│   │   │   ├── lib
│   │   │   │   ├── Cpdf.php
│   │   │   │   ├── fonts
│   │   │   │   │   ├── Courier.afm
│   │   │   │   │   ├── Courier-Bold.afm
│   │   │   │   │   ├── Courier-BoldOblique.afm
│   │   │   │   │   ├── Courier-Oblique.afm
│   │   │   │   │   ├── DejaVuSans-BoldOblique.ttf
│   │   │   │   │   ├── DejaVuSans-BoldOblique.ufm
│   │   │   │   │   ├── DejaVuSans-Bold.ttf
│   │   │   │   │   ├── DejaVuSans-Bold.ufm
│   │   │   │   │   ├── DejaVuSansMono-BoldOblique.ttf
│   │   │   │   │   ├── DejaVuSansMono-BoldOblique.ufm
│   │   │   │   │   ├── DejaVuSansMono-Bold.ttf
│   │   │   │   │   ├── DejaVuSansMono-Bold.ufm
│   │   │   │   │   ├── DejaVuSansMono-Oblique.ttf
│   │   │   │   │   ├── DejaVuSansMono-Oblique.ufm
│   │   │   │   │   ├── DejaVuSansMono.ttf
│   │   │   │   │   ├── DejaVuSansMono.ufm
│   │   │   │   │   ├── DejaVuSans-Oblique.ttf
│   │   │   │   │   ├── DejaVuSans-Oblique.ufm
│   │   │   │   │   ├── DejaVuSans.ttf
│   │   │   │   │   ├── DejaVuSans.ufm
│   │   │   │   │   ├── DejaVuSerif-BoldItalic.ttf
│   │   │   │   │   ├── DejaVuSerif-BoldItalic.ufm
│   │   │   │   │   ├── DejaVuSerif-Bold.ttf
│   │   │   │   │   ├── DejaVuSerif-Bold.ufm
│   │   │   │   │   ├── DejaVuSerif-Italic.ttf
│   │   │   │   │   ├── DejaVuSerif-Italic.ufm
│   │   │   │   │   ├── DejaVuSerif.ttf
│   │   │   │   │   ├── DejaVuSerif.ufm
│   │   │   │   │   ├── Helvetica.afm
│   │   │   │   │   ├── Helvetica-Bold.afm
│   │   │   │   │   ├── Helvetica-BoldOblique.afm
│   │   │   │   │   ├── Helvetica-Oblique.afm
│   │   │   │   │   ├── installed-fonts.dist.json
│   │   │   │   │   ├── mustRead.html
│   │   │   │   │   ├── Symbol.afm
│   │   │   │   │   ├── Times-Bold.afm
│   │   │   │   │   ├── Times-Bold.afm.json
│   │   │   │   │   ├── Times-BoldItalic.afm
│   │   │   │   │   ├── Times-Italic.afm
│   │   │   │   │   ├── Times-Roman.afm
│   │   │   │   │   ├── Times-Roman.afm.json
│   │   │   │   │   └── ZapfDingbats.afm
│   │   │   │   └── res
│   │   │   │       ├── broken_image.png
│   │   │   │       ├── broken_image.svg
│   │   │   │       ├── html.css
│   │   │   │       ├── sRGB2014.icc
│   │   │   │       └── sRGB2014.icc.LICENSE
│   │   │   ├── LICENSE.LGPL
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Adapter
│   │   │   │   │   ├── CPDF.php
│   │   │   │   │   ├── GD.php
│   │   │   │   │   └── PDFLib.php
│   │   │   │   ├── CanvasFactory.php
│   │   │   │   ├── Canvas.php
│   │   │   │   ├── Cellmap.php
│   │   │   │   ├── Css
│   │   │   │   │   ├── AttributeTranslator.php
│   │   │   │   │   ├── Color.php
│   │   │   │   │   ├── Content
│   │   │   │   │   │   ├── Attr.php
│   │   │   │   │   │   ├── CloseQuote.php
│   │   │   │   │   │   ├── ContentPart.php
│   │   │   │   │   │   ├── Counter.php
│   │   │   │   │   │   ├── Counters.php
│   │   │   │   │   │   ├── NoCloseQuote.php
│   │   │   │   │   │   ├── NoOpenQuote.php
│   │   │   │   │   │   ├── OpenQuote.php
│   │   │   │   │   │   ├── StringPart.php
│   │   │   │   │   │   └── Url.php
│   │   │   │   │   ├── Style.php
│   │   │   │   │   └── Stylesheet.php
│   │   │   │   ├── Dompdf.php
│   │   │   │   ├── Exception
│   │   │   │   │   └── ImageException.php
│   │   │   │   ├── Exception.php
│   │   │   │   ├── FontMetrics.php
│   │   │   │   ├── Frame
│   │   │   │   │   ├── Factory.php
│   │   │   │   │   ├── FrameListIterator.php
│   │   │   │   │   ├── FrameTreeIterator.php
│   │   │   │   │   └── FrameTree.php
│   │   │   │   ├── FrameDecorator
│   │   │   │   │   ├── AbstractFrameDecorator.php
│   │   │   │   │   ├── Block.php
│   │   │   │   │   ├── Image.php
│   │   │   │   │   ├── Inline.php
│   │   │   │   │   ├── ListBulletImage.php
│   │   │   │   │   ├── ListBullet.php
│   │   │   │   │   ├── NullFrameDecorator.php
│   │   │   │   │   ├── Page.php
│   │   │   │   │   ├── TableCell.php
│   │   │   │   │   ├── Table.php
│   │   │   │   │   ├── TableRowGroup.php
│   │   │   │   │   ├── TableRow.php
│   │   │   │   │   └── Text.php
│   │   │   │   ├── Frame.php
│   │   │   │   ├── FrameReflower
│   │   │   │   │   ├── AbstractFrameReflower.php
│   │   │   │   │   ├── Block.php
│   │   │   │   │   ├── Image.php
│   │   │   │   │   ├── Inline.php
│   │   │   │   │   ├── ListBullet.php
│   │   │   │   │   ├── NullFrameReflower.php
│   │   │   │   │   ├── Page.php
│   │   │   │   │   ├── TableCell.php
│   │   │   │   │   ├── Table.php
│   │   │   │   │   ├── TableRowGroup.php
│   │   │   │   │   ├── TableRow.php
│   │   │   │   │   └── Text.php
│   │   │   │   ├── Helpers.php
│   │   │   │   ├── Image
│   │   │   │   │   └── Cache.php
│   │   │   │   ├── JavascriptEmbedder.php
│   │   │   │   ├── LineBox.php
│   │   │   │   ├── Options.php
│   │   │   │   ├── PhpEvaluator.php
│   │   │   │   ├── Positioner
│   │   │   │   │   ├── Absolute.php
│   │   │   │   │   ├── AbstractPositioner.php
│   │   │   │   │   ├── Block.php
│   │   │   │   │   ├── Fixed.php
│   │   │   │   │   ├── Inline.php
│   │   │   │   │   ├── ListBullet.php
│   │   │   │   │   ├── NullPositioner.php
│   │   │   │   │   ├── TableCell.php
│   │   │   │   │   └── TableRow.php
│   │   │   │   ├── Renderer
│   │   │   │   │   ├── AbstractRenderer.php
│   │   │   │   │   ├── Block.php
│   │   │   │   │   ├── Image.php
│   │   │   │   │   ├── Inline.php
│   │   │   │   │   ├── ListBullet.php
│   │   │   │   │   ├── TableCell.php
│   │   │   │   │   ├── TableRowGroup.php
│   │   │   │   │   ├── TableRow.php
│   │   │   │   │   └── Text.php
│   │   │   │   └── Renderer.php
│   │   │   └── VERSION
│   │   ├── php-font-lib
│   │   │   ├── AUTHORS.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── maps
│   │   │   │   ├── adobe-standard-encoding.map
│   │   │   │   ├── cp1250.map
│   │   │   │   ├── cp1251.map
│   │   │   │   ├── cp1252.map
│   │   │   │   ├── cp1253.map
│   │   │   │   ├── cp1254.map
│   │   │   │   ├── cp1255.map
│   │   │   │   ├── cp1257.map
│   │   │   │   ├── cp1258.map
│   │   │   │   ├── cp874.map
│   │   │   │   ├── iso-8859-11.map
│   │   │   │   ├── iso-8859-15.map
│   │   │   │   ├── iso-8859-16.map
│   │   │   │   ├── iso-8859-1.map
│   │   │   │   ├── iso-8859-2.map
│   │   │   │   ├── iso-8859-4.map
│   │   │   │   ├── iso-8859-5.map
│   │   │   │   ├── iso-8859-7.map
│   │   │   │   ├── iso-8859-9.map
│   │   │   │   ├── koi8-r.map
│   │   │   │   └── koi8-u.map
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       └── FontLib
│   │   │           ├── AdobeFontMetrics.php
│   │   │           ├── BinaryStream.php
│   │   │           ├── EncodingMap.php
│   │   │           ├── EOT
│   │   │           │   ├── File.php
│   │   │           │   └── Header.php
│   │   │           ├── Exception
│   │   │           │   └── FontNotFoundException.php
│   │   │           ├── Font.php
│   │   │           ├── Glyph
│   │   │           │   ├── OutlineComponent.php
│   │   │           │   ├── OutlineComposite.php
│   │   │           │   ├── Outline.php
│   │   │           │   └── OutlineSimple.php
│   │   │           ├── Header.php
│   │   │           ├── OpenType
│   │   │           │   ├── File.php
│   │   │           │   └── TableDirectoryEntry.php
│   │   │           ├── Table
│   │   │           │   ├── DirectoryEntry.php
│   │   │           │   ├── Table.php
│   │   │           │   └── Type
│   │   │           │       ├── cmap.php
│   │   │           │       ├── cvt.php
│   │   │           │       ├── fpgm.php
│   │   │           │       ├── glyf.php
│   │   │           │       ├── head.php
│   │   │           │       ├── hhea.php
│   │   │           │       ├── hmtx.php
│   │   │           │       ├── kern.php
│   │   │           │       ├── loca.php
│   │   │           │       ├── maxp.php
│   │   │           │       ├── name.php
│   │   │           │       ├── nameRecord.php
│   │   │           │       ├── os2.php
│   │   │           │       ├── post.php
│   │   │           │       └── prep.php
│   │   │           ├── TrueType
│   │   │           │   ├── Collection.php
│   │   │           │   ├── File.php
│   │   │           │   ├── Header.php
│   │   │           │   └── TableDirectoryEntry.php
│   │   │           └── WOFF
│   │   │               ├── File.php
│   │   │               ├── Header.php
│   │   │               └── TableDirectoryEntry.php
│   │   └── php-svg-lib
│   │       ├── AUTHORS.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── Svg
│   │               ├── CssLength.php
│   │               ├── DefaultStyle.php
│   │               ├── Document.php
│   │               ├── Gradient
│   │               │   └── Stop.php
│   │               ├── Style.php
│   │               ├── Surface
│   │               │   ├── CPdf.php
│   │               │   ├── SurfaceCpdf.php
│   │               │   ├── SurfaceInterface.php
│   │               │   └── SurfacePDFLib.php
│   │               └── Tag
│   │                   ├── AbstractTag.php
│   │                   ├── Anchor.php
│   │                   ├── Circle.php
│   │                   ├── ClipPath.php
│   │                   ├── Ellipse.php
│   │                   ├── Group.php
│   │                   ├── Image.php
│   │                   ├── LinearGradient.php
│   │                   ├── Line.php
│   │                   ├── Path.php
│   │                   ├── Polygon.php
│   │                   ├── Polyline.php
│   │                   ├── RadialGradient.php
│   │                   ├── Rect.php
│   │                   ├── Shape.php
│   │                   ├── Stop.php
│   │                   ├── StyleTag.php
│   │                   ├── Symbol.php
│   │                   ├── Text.php
│   │                   └── UseTag.php
│   ├── fakerphp
│   │   └── faker
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── rector-migrate.php
│   │       └── src
│   │           ├── autoload.php
│   │           └── Faker
│   │               ├── Calculator
│   │               │   ├── Ean.php
│   │               │   ├── Iban.php
│   │               │   ├── Inn.php
│   │               │   ├── Isbn.php
│   │               │   ├── Luhn.php
│   │               │   └── TCNo.php
│   │               ├── ChanceGenerator.php
│   │               ├── Container
│   │               │   ├── ContainerBuilder.php
│   │               │   ├── ContainerException.php
│   │               │   ├── ContainerInterface.php
│   │               │   ├── Container.php
│   │               │   └── NotInContainerException.php
│   │               ├── Core
│   │               │   ├── Barcode.php
│   │               │   ├── Blood.php
│   │               │   ├── Color.php
│   │               │   ├── Coordinates.php
│   │               │   ├── DateTime.php
│   │               │   ├── File.php
│   │               │   ├── Number.php
│   │               │   ├── Uuid.php
│   │               │   └── Version.php
│   │               ├── DefaultGenerator.php
│   │               ├── Documentor.php
│   │               ├── Extension
│   │               │   ├── AddressExtension.php
│   │               │   ├── BarcodeExtension.php
│   │               │   ├── BloodExtension.php
│   │               │   ├── ColorExtension.php
│   │               │   ├── CompanyExtension.php
│   │               │   ├── CountryExtension.php
│   │               │   ├── DateTimeExtension.php
│   │               │   ├── ExtensionNotFound.php
│   │               │   ├── Extension.php
│   │               │   ├── FileExtension.php
│   │               │   ├── GeneratorAwareExtension.php
│   │               │   ├── GeneratorAwareExtensionTrait.php
│   │               │   ├── Helper.php
│   │               │   ├── NumberExtension.php
│   │               │   ├── PersonExtension.php
│   │               │   ├── PhoneNumberExtension.php
│   │               │   ├── UuidExtension.php
│   │               │   └── VersionExtension.php
│   │               ├── Factory.php
│   │               ├── Generator.php
│   │               ├── Guesser
│   │               │   └── Name.php
│   │               ├── ORM
│   │               │   ├── CakePHP
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Doctrine
│   │               │   │   ├── backward-compatibility.php
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Mandango
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Propel
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Propel2
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   └── Spot
│   │               │       ├── ColumnTypeGuesser.php
│   │               │       ├── EntityPopulator.php
│   │               │       └── Populator.php
│   │               ├── Provider
│   │               │   ├── Address.php
│   │               │   ├── ar_EG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── ar_JO
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── ar_SA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── at_AT
│   │               │   │   └── Payment.php
│   │               │   ├── Barcode.php
│   │               │   ├── Base.php
│   │               │   ├── bg_BG
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Biased.php
│   │               │   ├── bn_BD
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Utils.php
│   │               │   ├── Color.php
│   │               │   ├── Company.php
│   │               │   ├── cs_CZ
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── da_DK
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── DateTime.php
│   │               │   ├── de_AT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── de_CH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── de_DE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── el_CY
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── el_GR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── en_AU
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_CA
│   │               │   │   ├── Address.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_GB
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_HK
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_IN
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_NG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_NZ
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_PH
│   │               │   │   ├── Address.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_SG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_UG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_US
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── en_ZA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── es_AR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── es_ES
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── es_PE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── es_VE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── et_EE
│   │               │   │   └── Person.php
│   │               │   ├── fa_IR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── fi_FI
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── File.php
│   │               │   ├── fr_BE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── fr_CA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── fr_CH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── fr_FR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── he_IL
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── hr_HR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── HtmlLorem.php
│   │               │   ├── hu_HU
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── hy_AM
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── id_ID
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Image.php
│   │               │   ├── Internet.php
│   │               │   ├── is_IS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── it_CH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── it_IT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ja_JP
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ka_GE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── kk_KZ
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ko_KR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── Lorem.php
│   │               │   ├── lt_LT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── lv_LV
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Medical.php
│   │               │   ├── me_ME
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Miscellaneous.php
│   │               │   ├── mn_MN
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── ms_MY
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Miscellaneous.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── nb_NO
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── ne_NP
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── nl_BE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── nl_NL
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── Payment.php
│   │               │   ├── Person.php
│   │               │   ├── PhoneNumber.php
│   │               │   ├── pl_PL
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── LicensePlate.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── pt_BR
│   │               │   │   ├── Address.php
│   │               │   │   ├── check_digit.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── pt_PT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── ro_MD
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ro_RO
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ru_RU
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── sk_SK
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── sl_SI
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── sr_Cyrl_RS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   └── Person.php
│   │               │   ├── sr_Latn_RS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   └── Person.php
│   │               │   ├── sr_RS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   └── Person.php
│   │               │   ├── sv_SE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Municipality.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Text.php
│   │               │   ├── th_TH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── tr_TR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── uk_UA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── UserAgent.php
│   │               │   ├── Uuid.php
│   │               │   ├── vi_VN
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── zh_CN
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   └── zh_TW
│   │               │       ├── Address.php
│   │               │       ├── Color.php
│   │               │       ├── Company.php
│   │               │       ├── DateTime.php
│   │               │       ├── Internet.php
│   │               │       ├── Payment.php
│   │               │       ├── Person.php
│   │               │       ├── PhoneNumber.php
│   │               │       └── Text.php
│   │               ├── UniqueGenerator.php
│   │               └── ValidGenerator.php
│   ├── guzzlehttp
│   │   ├── guzzle
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── BodySummarizerInterface.php
│   │   │   │   ├── BodySummarizer.php
│   │   │   │   ├── ClientInterface.php
│   │   │   │   ├── Client.php
│   │   │   │   ├── ClientTrait.php
│   │   │   │   ├── Cookie
│   │   │   │   │   ├── CookieJarInterface.php
│   │   │   │   │   ├── CookieJar.php
│   │   │   │   │   ├── FileCookieJar.php
│   │   │   │   │   ├── SessionCookieJar.php
│   │   │   │   │   └── SetCookie.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── BadResponseException.php
│   │   │   │   │   ├── ClientException.php
│   │   │   │   │   ├── ConnectException.php
│   │   │   │   │   ├── GuzzleException.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── RequestException.php
│   │   │   │   │   ├── ServerException.php
│   │   │   │   │   ├── TooManyRedirectsException.php
│   │   │   │   │   └── TransferException.php
│   │   │   │   ├── functions_include.php
│   │   │   │   ├── functions.php
│   │   │   │   ├── Handler
│   │   │   │   │   ├── CurlFactoryInterface.php
│   │   │   │   │   ├── CurlFactory.php
│   │   │   │   │   ├── CurlHandler.php
│   │   │   │   │   ├── CurlMultiHandler.php
│   │   │   │   │   ├── EasyHandle.php
│   │   │   │   │   ├── HeaderProcessor.php
│   │   │   │   │   ├── MockHandler.php
│   │   │   │   │   ├── Proxy.php
│   │   │   │   │   └── StreamHandler.php
│   │   │   │   ├── HandlerStack.php
│   │   │   │   ├── MessageFormatterInterface.php
│   │   │   │   ├── MessageFormatter.php
│   │   │   │   ├── Middleware.php
│   │   │   │   ├── Pool.php
│   │   │   │   ├── PrepareBodyMiddleware.php
│   │   │   │   ├── RedirectMiddleware.php
│   │   │   │   ├── RequestOptions.php
│   │   │   │   ├── RetryMiddleware.php
│   │   │   │   ├── TransferStats.php
│   │   │   │   └── Utils.php
│   │   │   └── UPGRADING.md
│   │   ├── promises
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── AggregateException.php
│   │   │       ├── CancellationException.php
│   │   │       ├── Coroutine.php
│   │   │       ├── Create.php
│   │   │       ├── Each.php
│   │   │       ├── EachPromise.php
│   │   │       ├── FulfilledPromise.php
│   │   │       ├── Is.php
│   │   │       ├── PromiseInterface.php
│   │   │       ├── Promise.php
│   │   │       ├── PromisorInterface.php
│   │   │       ├── RejectedPromise.php
│   │   │       ├── RejectionException.php
│   │   │       ├── TaskQueueInterface.php
│   │   │       ├── TaskQueue.php
│   │   │       └── Utils.php
│   │   └── psr7
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── AppendStream.php
│   │           ├── BufferStream.php
│   │           ├── CachingStream.php
│   │           ├── DroppingStream.php
│   │           ├── Exception
│   │           │   └── MalformedUriException.php
│   │           ├── FnStream.php
│   │           ├── Header.php
│   │           ├── HttpFactory.php
│   │           ├── InflateStream.php
│   │           ├── LazyOpenStream.php
│   │           ├── LimitStream.php
│   │           ├── Message.php
│   │           ├── MessageTrait.php
│   │           ├── MimeType.php
│   │           ├── MultipartStream.php
│   │           ├── NoSeekStream.php
│   │           ├── PumpStream.php
│   │           ├── Query.php
│   │           ├── Request.php
│   │           ├── Response.php
│   │           ├── Rfc7230.php
│   │           ├── ServerRequest.php
│   │           ├── StreamDecoratorTrait.php
│   │           ├── Stream.php
│   │           ├── StreamWrapper.php
│   │           ├── UploadedFile.php
│   │           ├── UriComparator.php
│   │           ├── UriNormalizer.php
│   │           ├── Uri.php
│   │           ├── UriResolver.php
│   │           └── Utils.php
│   ├── jason-napolitano
│   │   └── codeigniter4-cart-module
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── Cart.php
│   │           └── Config
│   │               └── Services.php
│   ├── laminas
│   │   └── laminas-escaper
│   │       ├── composer.json
│   │       ├── COPYRIGHT.md
│   │       ├── LICENSE.md
│   │       ├── README.md
│   │       └── src
│   │           ├── Escaper.php
│   │           └── Exception
│   │               ├── ExceptionInterface.php
│   │               ├── InvalidArgumentException.php
│   │               └── RuntimeException.php
│   ├── masterminds
│   │   └── html5
│   │       ├── bin
│   │       │   └── entities.php
│   │       ├── composer.json
│   │       ├── CREDITS
│   │       ├── LICENSE.txt
│   │       ├── README.md
│   │       ├── RELEASE.md
│   │       ├── src
│   │       │   ├── HTML5
│   │       │   │   ├── Elements.php
│   │       │   │   ├── Entities.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── InstructionProcessor.php
│   │       │   │   ├── Parser
│   │       │   │   │   ├── CharacterReference.php
│   │       │   │   │   ├── DOMTreeBuilder.php
│   │       │   │   │   ├── EventHandler.php
│   │       │   │   │   ├── FileInputStream.php
│   │       │   │   │   ├── InputStream.php
│   │       │   │   │   ├── ParseError.php
│   │       │   │   │   ├── README.md
│   │       │   │   │   ├── Scanner.php
│   │       │   │   │   ├── StringInputStream.php
│   │       │   │   │   ├── Tokenizer.php
│   │       │   │   │   ├── TreeBuildingRules.php
│   │       │   │   │   └── UTF8Utils.php
│   │       │   │   └── Serializer
│   │       │   │       ├── HTML5Entities.php
│   │       │   │       ├── OutputRules.php
│   │       │   │       ├── README.md
│   │       │   │       ├── RulesInterface.php
│   │       │   │       └── Traverser.php
│   │       │   └── HTML5.php
│   │       └── UPGRADING.md
│   ├── mikey179
│   │   └── vfsstream
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── phpunit.xml.dist
│   │       ├── README.md
│   │       └── src
│   │           ├── main
│   │           │   └── php
│   │           │       └── org
│   │           │           └── bovigo
│   │           │               └── vfs
│   │           │                   ├── content
│   │           │                   │   ├── FileContent.php
│   │           │                   │   ├── LargeFileContent.php
│   │           │                   │   ├── SeekableFileContent.php
│   │           │                   │   └── StringBasedFileContent.php
│   │           │                   ├── DotDirectory.php
│   │           │                   ├── Quota.php
│   │           │                   ├── vfsStreamAbstractContent.php
│   │           │                   ├── vfsStreamBlock.php
│   │           │                   ├── vfsStreamContainerIterator.php
│   │           │                   ├── vfsStreamContainer.php
│   │           │                   ├── vfsStreamContent.php
│   │           │                   ├── vfsStreamDirectory.php
│   │           │                   ├── vfsStreamException.php
│   │           │                   ├── vfsStreamFile.php
│   │           │                   ├── vfsStream.php
│   │           │                   ├── vfsStreamWrapper.php
│   │           │                   └── visitor
│   │           │                       ├── vfsStreamAbstractVisitor.php
│   │           │                       ├── vfsStreamPrintVisitor.php
│   │           │                       ├── vfsStreamStructureVisitor.php
│   │           │                       └── vfsStreamVisitor.php
│   │           └── test
│   │               ├── bootstrap.php
│   │               ├── php
│   │               │   └── org
│   │               │       └── bovigo
│   │               │           └── vfs
│   │               │               ├── content
│   │               │               │   ├── LargeFileContentTestCase.php
│   │               │               │   └── StringBasedFileContentTestCase.php
│   │               │               ├── DirectoryIterationTestCase.php
│   │               │               ├── FilenameTestCase.php
│   │               │               ├── Issue104TestCase.php
│   │               │               ├── PermissionsTestCase.php
│   │               │               ├── proxy
│   │               │               │   └── vfsStreamWrapperRecordingProxy.php
│   │               │               ├── QuotaTestCase.php
│   │               │               ├── UnlinkTestCase.php
│   │               │               ├── vfsStreamAbstractContentTestCase.php
│   │               │               ├── vfsStreamBlockTestCase.php
│   │               │               ├── vfsStreamContainerIteratorTestCase.php
│   │               │               ├── vfsStreamDirectoryIssue134TestCase.php
│   │               │               ├── vfsStreamDirectoryIssue18TestCase.php
│   │               │               ├── vfsStreamDirectoryTestCase.php
│   │               │               ├── vfsStreamExLockTestCase.php
│   │               │               ├── vfsStreamFileTestCase.php
│   │               │               ├── vfsStreamGlobTestCase.php
│   │               │               ├── vfsStreamResolveIncludePathTestCase.php
│   │               │               ├── vfsStreamTestCase.php
│   │               │               ├── vfsStreamUmaskTestCase.php
│   │               │               ├── vfsStreamWrapperAlreadyRegisteredTestCase.php
│   │               │               ├── vfsStreamWrapperBaseTestCase.php
│   │               │               ├── vfsStreamWrapperDirSeparatorTestCase.php
│   │               │               ├── vfsStreamWrapperDirTestCase.php
│   │               │               ├── vfsStreamWrapperFileTestCase.php
│   │               │               ├── vfsStreamWrapperFileTimesTestCase.php
│   │               │               ├── vfsStreamWrapperFlockTestCase.php
│   │               │               ├── vfsStreamWrapperLargeFileTestCase.php
│   │               │               ├── vfsStreamWrapperQuotaTestCase.php
│   │               │               ├── vfsStreamWrapperSetOptionTestCase.php
│   │               │               ├── vfsStreamWrapperStreamSelectTestCase.php
│   │               │               ├── vfsStreamWrapperTestCase.php
│   │               │               ├── vfsStreamWrapperUnregisterTestCase.php
│   │               │               ├── vfsStreamWrapperWithoutRootTestCase.php
│   │               │               ├── vfsStreamZipTestCase.php
│   │               │               └── visitor
│   │               │                   ├── vfsStreamAbstractVisitorTestCase.php
│   │               │                   ├── vfsStreamPrintVisitorTestCase.php
│   │               │                   └── vfsStreamStructureVisitorTestCase.php
│   │               ├── phpt
│   │               │   └── bug71287.phpt
│   │               └── resources
│   │                   └── filesystemcopy
│   │                       ├── emptyFolder
│   │                       └── withSubfolders
│   │                           ├── aFile.txt
│   │                           ├── subfolder1
│   │                           │   └── file1.txt
│   │                           └── subfolder2
│   ├── myclabs
│   │   └── deep-copy
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── DeepCopy
│   │               ├── deep_copy.php
│   │               ├── DeepCopy.php
│   │               ├── Exception
│   │               │   ├── CloneException.php
│   │               │   └── PropertyException.php
│   │               ├── Filter
│   │               │   ├── ChainableFilter.php
│   │               │   ├── Doctrine
│   │               │   │   ├── DoctrineCollectionFilter.php
│   │               │   │   ├── DoctrineEmptyCollectionFilter.php
│   │               │   │   └── DoctrineProxyFilter.php
│   │               │   ├── Filter.php
│   │               │   ├── KeepFilter.php
│   │               │   ├── ReplaceFilter.php
│   │               │   └── SetNullFilter.php
│   │               ├── Matcher
│   │               │   ├── Doctrine
│   │               │   │   └── DoctrineProxyMatcher.php
│   │               │   ├── Matcher.php
│   │               │   ├── PropertyMatcher.php
│   │               │   ├── PropertyNameMatcher.php
│   │               │   └── PropertyTypeMatcher.php
│   │               ├── Reflection
│   │               │   └── ReflectionHelper.php
│   │               ├── TypeFilter
│   │               │   ├── Date
│   │               │   │   ├── DateIntervalFilter.php
│   │               │   │   └── DatePeriodFilter.php
│   │               │   ├── ReplaceFilter.php
│   │               │   ├── ShallowCopyFilter.php
│   │               │   ├── Spl
│   │               │   │   ├── ArrayObjectFilter.php
│   │               │   │   ├── SplDoublyLinkedListFilter.php
│   │               │   │   └── SplDoublyLinkedList.php
│   │               │   └── TypeFilter.php
│   │               └── TypeMatcher
│   │                   └── TypeMatcher.php
│   ├── nikic
│   │   └── php-parser
│   │       ├── bin
│   │       │   └── php-parse
│   │       ├── composer.json
│   │       ├── lib
│   │       │   └── PhpParser
│   │       │       ├── Builder
│   │       │       │   ├── ClassConst.php
│   │       │       │   ├── Class_.php
│   │       │       │   ├── Declaration.php
│   │       │       │   ├── EnumCase.php
│   │       │       │   ├── Enum_.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Function_.php
│   │       │       │   ├── Interface_.php
│   │       │       │   ├── Method.php
│   │       │       │   ├── Namespace_.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── Property.php
│   │       │       │   ├── Trait_.php
│   │       │       │   ├── TraitUseAdaptation.php
│   │       │       │   ├── TraitUse.php
│   │       │       │   └── Use_.php
│   │       │       ├── BuilderFactory.php
│   │       │       ├── BuilderHelpers.php
│   │       │       ├── Builder.php
│   │       │       ├── Comment
│   │       │       │   └── Doc.php
│   │       │       ├── Comment.php
│   │       │       ├── compatibility_tokens.php
│   │       │       ├── ConstExprEvaluationException.php
│   │       │       ├── ConstExprEvaluator.php
│   │       │       ├── ErrorHandler
│   │       │       │   ├── Collecting.php
│   │       │       │   └── Throwing.php
│   │       │       ├── ErrorHandler.php
│   │       │       ├── Error.php
│   │       │       ├── Internal
│   │       │       │   ├── DiffElem.php
│   │       │       │   ├── Differ.php
│   │       │       │   ├── PrintableNewAnonClassNode.php
│   │       │       │   ├── TokenPolyfill.php
│   │       │       │   └── TokenStream.php
│   │       │       ├── JsonDecoder.php
│   │       │       ├── Lexer
│   │       │       │   ├── Emulative.php
│   │       │       │   └── TokenEmulator
│   │       │       │       ├── AsymmetricVisibilityTokenEmulator.php
│   │       │       │       ├── AttributeEmulator.php
│   │       │       │       ├── EnumTokenEmulator.php
│   │       │       │       ├── ExplicitOctalEmulator.php
│   │       │       │       ├── KeywordEmulator.php
│   │       │       │       ├── MatchTokenEmulator.php
│   │       │       │       ├── NullsafeTokenEmulator.php
│   │       │       │       ├── PropertyTokenEmulator.php
│   │       │       │       ├── ReadonlyFunctionTokenEmulator.php
│   │       │       │       ├── ReadonlyTokenEmulator.php
│   │       │       │       ├── ReverseEmulator.php
│   │       │       │       └── TokenEmulator.php
│   │       │       ├── Lexer.php
│   │       │       ├── Modifiers.php
│   │       │       ├── NameContext.php
│   │       │       ├── Node
│   │       │       │   ├── Arg.php
│   │       │       │   ├── ArrayItem.php
│   │       │       │   ├── AttributeGroup.php
│   │       │       │   ├── Attribute.php
│   │       │       │   ├── ClosureUse.php
│   │       │       │   ├── ComplexType.php
│   │       │       │   ├── Const_.php
│   │       │       │   ├── DeclareItem.php
│   │       │       │   ├── Expr
│   │       │       │   │   ├── ArrayDimFetch.php
│   │       │       │   │   ├── ArrayItem.php
│   │       │       │   │   ├── Array_.php
│   │       │       │   │   ├── ArrowFunction.php
│   │       │       │   │   ├── AssignOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   └── ShiftRight.php
│   │       │       │   │   ├── AssignOp.php
│   │       │       │   │   ├── Assign.php
│   │       │       │   │   ├── AssignRef.php
│   │       │       │   │   ├── BinaryOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── BooleanAnd.php
│   │       │       │   │   │   ├── BooleanOr.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Equal.php
│   │       │       │   │   │   ├── GreaterOrEqual.php
│   │       │       │   │   │   ├── Greater.php
│   │       │       │   │   │   ├── Identical.php
│   │       │       │   │   │   ├── LogicalAnd.php
│   │       │       │   │   │   ├── LogicalOr.php
│   │       │       │   │   │   ├── LogicalXor.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── NotEqual.php
│   │       │       │   │   │   ├── NotIdentical.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   ├── ShiftRight.php
│   │       │       │   │   │   ├── SmallerOrEqual.php
│   │       │       │   │   │   ├── Smaller.php
│   │       │       │   │   │   └── Spaceship.php
│   │       │       │   │   ├── BinaryOp.php
│   │       │       │   │   ├── BitwiseNot.php
│   │       │       │   │   ├── BooleanNot.php
│   │       │       │   │   ├── CallLike.php
│   │       │       │   │   ├── Cast
│   │       │       │   │   │   ├── Array_.php
│   │       │       │   │   │   ├── Bool_.php
│   │       │       │   │   │   ├── Double.php
│   │       │       │   │   │   ├── Int_.php
│   │       │       │   │   │   ├── Object_.php
│   │       │       │   │   │   ├── String_.php
│   │       │       │   │   │   └── Unset_.php
│   │       │       │   │   ├── Cast.php
│   │       │       │   │   ├── ClassConstFetch.php
│   │       │       │   │   ├── Clone_.php
│   │       │       │   │   ├── Closure.php
│   │       │       │   │   ├── ClosureUse.php
│   │       │       │   │   ├── ConstFetch.php
│   │       │       │   │   ├── Empty_.php
│   │       │       │   │   ├── Error.php
│   │       │       │   │   ├── ErrorSuppress.php
│   │       │       │   │   ├── Eval_.php
│   │       │       │   │   ├── Exit_.php
│   │       │       │   │   ├── FuncCall.php
│   │       │       │   │   ├── Include_.php
│   │       │       │   │   ├── Instanceof_.php
│   │       │       │   │   ├── Isset_.php
│   │       │       │   │   ├── List_.php
│   │       │       │   │   ├── Match_.php
│   │       │       │   │   ├── MethodCall.php
│   │       │       │   │   ├── New_.php
│   │       │       │   │   ├── NullsafeMethodCall.php
│   │       │       │   │   ├── NullsafePropertyFetch.php
│   │       │       │   │   ├── PostDec.php
│   │       │       │   │   ├── PostInc.php
│   │       │       │   │   ├── PreDec.php
│   │       │       │   │   ├── PreInc.php
│   │       │       │   │   ├── Print_.php
│   │       │       │   │   ├── PropertyFetch.php
│   │       │       │   │   ├── ShellExec.php
│   │       │       │   │   ├── StaticCall.php
│   │       │       │   │   ├── StaticPropertyFetch.php
│   │       │       │   │   ├── Ternary.php
│   │       │       │   │   ├── Throw_.php
│   │       │       │   │   ├── UnaryMinus.php
│   │       │       │   │   ├── UnaryPlus.php
│   │       │       │   │   ├── Variable.php
│   │       │       │   │   ├── YieldFrom.php
│   │       │       │   │   └── Yield_.php
│   │       │       │   ├── Expr.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Identifier.php
│   │       │       │   ├── InterpolatedStringPart.php
│   │       │       │   ├── IntersectionType.php
│   │       │       │   ├── MatchArm.php
│   │       │       │   ├── Name
│   │       │       │   │   ├── FullyQualified.php
│   │       │       │   │   └── Relative.php
│   │       │       │   ├── Name.php
│   │       │       │   ├── NullableType.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── PropertyHook.php
│   │       │       │   ├── PropertyItem.php
│   │       │       │   ├── Scalar
│   │       │       │   │   ├── DNumber.php
│   │       │       │   │   ├── Encapsed.php
│   │       │       │   │   ├── EncapsedStringPart.php
│   │       │       │   │   ├── Float_.php
│   │       │       │   │   ├── InterpolatedString.php
│   │       │       │   │   ├── Int_.php
│   │       │       │   │   ├── LNumber.php
│   │       │       │   │   ├── MagicConst
│   │       │       │   │   │   ├── Class_.php
│   │       │       │   │   │   ├── Dir.php
│   │       │       │   │   │   ├── File.php
│   │       │       │   │   │   ├── Function_.php
│   │       │       │   │   │   ├── Line.php
│   │       │       │   │   │   ├── Method.php
│   │       │       │   │   │   ├── Namespace_.php
│   │       │       │   │   │   ├── Property.php
│   │       │       │   │   │   └── Trait_.php
│   │       │       │   │   ├── MagicConst.php
│   │       │       │   │   └── String_.php
│   │       │       │   ├── Scalar.php
│   │       │       │   ├── StaticVar.php
│   │       │       │   ├── Stmt
│   │       │       │   │   ├── Block.php
│   │       │       │   │   ├── Break_.php
│   │       │       │   │   ├── Case_.php
│   │       │       │   │   ├── Catch_.php
│   │       │       │   │   ├── ClassConst.php
│   │       │       │   │   ├── ClassLike.php
│   │       │       │   │   ├── ClassMethod.php
│   │       │       │   │   ├── Class_.php
│   │       │       │   │   ├── Const_.php
│   │       │       │   │   ├── Continue_.php
│   │       │       │   │   ├── DeclareDeclare.php
│   │       │       │   │   ├── Declare_.php
│   │       │       │   │   ├── Do_.php
│   │       │       │   │   ├── Echo_.php
│   │       │       │   │   ├── ElseIf_.php
│   │       │       │   │   ├── Else_.php
│   │       │       │   │   ├── EnumCase.php
│   │       │       │   │   ├── Enum_.php
│   │       │       │   │   ├── Expression.php
│   │       │       │   │   ├── Finally_.php
│   │       │       │   │   ├── Foreach_.php
│   │       │       │   │   ├── For_.php
│   │       │       │   │   ├── Function_.php
│   │       │       │   │   ├── Global_.php
│   │       │       │   │   ├── Goto_.php
│   │       │       │   │   ├── GroupUse.php
│   │       │       │   │   ├── HaltCompiler.php
│   │       │       │   │   ├── If_.php
│   │       │       │   │   ├── InlineHTML.php
│   │       │       │   │   ├── Interface_.php
│   │       │       │   │   ├── Label.php
│   │       │       │   │   ├── Namespace_.php
│   │       │       │   │   ├── Nop.php
│   │       │       │   │   ├── Property.php
│   │       │       │   │   ├── PropertyProperty.php
│   │       │       │   │   ├── Return_.php
│   │       │       │   │   ├── Static_.php
│   │       │       │   │   ├── StaticVar.php
│   │       │       │   │   ├── Switch_.php
│   │       │       │   │   ├── Trait_.php
│   │       │       │   │   ├── TraitUseAdaptation
│   │       │       │   │   │   ├── Alias.php
│   │       │       │   │   │   └── Precedence.php
│   │       │       │   │   ├── TraitUseAdaptation.php
│   │       │       │   │   ├── TraitUse.php
│   │       │       │   │   ├── TryCatch.php
│   │       │       │   │   ├── Unset_.php
│   │       │       │   │   ├── Use_.php
│   │       │       │   │   ├── UseUse.php
│   │       │       │   │   └── While_.php
│   │       │       │   ├── Stmt.php
│   │       │       │   ├── UnionType.php
│   │       │       │   ├── UseItem.php
│   │       │       │   ├── VariadicPlaceholder.php
│   │       │       │   └── VarLikeIdentifier.php
│   │       │       ├── NodeAbstract.php
│   │       │       ├── NodeDumper.php
│   │       │       ├── NodeFinder.php
│   │       │       ├── Node.php
│   │       │       ├── NodeTraverserInterface.php
│   │       │       ├── NodeTraverser.php
│   │       │       ├── NodeVisitor
│   │       │       │   ├── CloningVisitor.php
│   │       │       │   ├── CommentAnnotatingVisitor.php
│   │       │       │   ├── FindingVisitor.php
│   │       │       │   ├── FirstFindingVisitor.php
│   │       │       │   ├── NameResolver.php
│   │       │       │   ├── NodeConnectingVisitor.php
│   │       │       │   └── ParentConnectingVisitor.php
│   │       │       ├── NodeVisitorAbstract.php
│   │       │       ├── NodeVisitor.php
│   │       │       ├── Parser
│   │       │       │   ├── Php7.php
│   │       │       │   └── Php8.php
│   │       │       ├── ParserAbstract.php
│   │       │       ├── ParserFactory.php
│   │       │       ├── Parser.php
│   │       │       ├── PhpVersion.php
│   │       │       ├── PrettyPrinter
│   │       │       │   └── Standard.php
│   │       │       ├── PrettyPrinterAbstract.php
│   │       │       ├── PrettyPrinter.php
│   │       │       └── Token.php
│   │       ├── LICENSE
│   │       └── README.md
│   ├── phar-io
│   │   ├── manifest
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── LICENSE
│   │   │   ├── manifest.xsd
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── ElementCollectionException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidApplicationNameException.php
│   │   │   │   │   ├── InvalidEmailException.php
│   │   │   │   │   ├── InvalidUrlException.php
│   │   │   │   │   ├── ManifestDocumentException.php
│   │   │   │   │   ├── ManifestDocumentLoadingException.php
│   │   │   │   │   ├── ManifestDocumentMapperException.php
│   │   │   │   │   ├── ManifestElementException.php
│   │   │   │   │   ├── ManifestLoaderException.php
│   │   │   │   │   └── NoEmailAddressException.php
│   │   │   │   ├── ManifestDocumentMapper.php
│   │   │   │   ├── ManifestLoader.php
│   │   │   │   ├── ManifestSerializer.php
│   │   │   │   ├── values
│   │   │   │   │   ├── ApplicationName.php
│   │   │   │   │   ├── Application.php
│   │   │   │   │   ├── AuthorCollectionIterator.php
│   │   │   │   │   ├── AuthorCollection.php
│   │   │   │   │   ├── Author.php
│   │   │   │   │   ├── BundledComponentCollectionIterator.php
│   │   │   │   │   ├── BundledComponentCollection.php
│   │   │   │   │   ├── BundledComponent.php
│   │   │   │   │   ├── CopyrightInformation.php
│   │   │   │   │   ├── Email.php
│   │   │   │   │   ├── Extension.php
│   │   │   │   │   ├── Library.php
│   │   │   │   │   ├── License.php
│   │   │   │   │   ├── Manifest.php
│   │   │   │   │   ├── PhpExtensionRequirement.php
│   │   │   │   │   ├── PhpVersionRequirement.php
│   │   │   │   │   ├── RequirementCollectionIterator.php
│   │   │   │   │   ├── RequirementCollection.php
│   │   │   │   │   ├── Requirement.php
│   │   │   │   │   ├── Type.php
│   │   │   │   │   └── Url.php
│   │   │   │   └── xml
│   │   │   │       ├── AuthorElementCollection.php
│   │   │   │       ├── AuthorElement.php
│   │   │   │       ├── BundlesElement.php
│   │   │   │       ├── ComponentElementCollection.php
│   │   │   │       ├── ComponentElement.php
│   │   │   │       ├── ContainsElement.php
│   │   │   │       ├── CopyrightElement.php
│   │   │   │       ├── ElementCollection.php
│   │   │   │       ├── ExtElementCollection.php
│   │   │   │       ├── ExtElement.php
│   │   │   │       ├── ExtensionElement.php
│   │   │   │       ├── LicenseElement.php
│   │   │   │       ├── ManifestDocument.php
│   │   │   │       ├── ManifestElement.php
│   │   │   │       ├── PhpElement.php
│   │   │   │       └── RequiresElement.php
│   │   │   └── tools
│   │   │       └── php-cs-fixer.d
│   │   │           ├── header.txt
│   │   │           └── PhpdocSingleLineVarFixer.php
│   │   └── version
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── BuildMetaData.php
│   │           ├── constraints
│   │           │   ├── AbstractVersionConstraint.php
│   │           │   ├── AndVersionConstraintGroup.php
│   │           │   ├── AnyVersionConstraint.php
│   │           │   ├── ExactVersionConstraint.php
│   │           │   ├── GreaterThanOrEqualToVersionConstraint.php
│   │           │   ├── OrVersionConstraintGroup.php
│   │           │   ├── SpecificMajorAndMinorVersionConstraint.php
│   │           │   ├── SpecificMajorVersionConstraint.php
│   │           │   └── VersionConstraint.php
│   │           ├── exceptions
│   │           │   ├── Exception.php
│   │           │   ├── InvalidPreReleaseSuffixException.php
│   │           │   ├── InvalidVersionException.php
│   │           │   ├── NoBuildMetaDataException.php
│   │           │   ├── NoPreReleaseSuffixException.php
│   │           │   └── UnsupportedVersionConstraintException.php
│   │           ├── PreReleaseSuffix.php
│   │           ├── VersionConstraintParser.php
│   │           ├── VersionConstraintValue.php
│   │           ├── VersionNumber.php
│   │           └── Version.php
│   ├── phpunit
│   │   ├── php-code-coverage
│   │   │   ├── ChangeLog-10.1.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── CodeCoverage.php
│   │   │       ├── Data
│   │   │       │   ├── ProcessedCodeCoverageData.php
│   │   │       │   └── RawCodeCoverageData.php
│   │   │       ├── Driver
│   │   │       │   ├── Driver.php
│   │   │       │   ├── PcovDriver.php
│   │   │       │   ├── Selector.php
│   │   │       │   └── XdebugDriver.php
│   │   │       ├── Exception
│   │   │       │   ├── BranchAndPathCoverageNotSupportedException.php
│   │   │       │   ├── DeadCodeDetectionNotSupportedException.php
│   │   │       │   ├── DirectoryCouldNotBeCreatedException.php
│   │   │       │   ├── Exception.php
│   │   │       │   ├── FileCouldNotBeWrittenException.php
│   │   │       │   ├── InvalidArgumentException.php
│   │   │       │   ├── NoCodeCoverageDriverAvailableException.php
│   │   │       │   ├── NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php
│   │   │       │   ├── ParserException.php
│   │   │       │   ├── PathExistsButIsNotDirectoryException.php
│   │   │       │   ├── PcovNotAvailableException.php
│   │   │       │   ├── ReflectionException.php
│   │   │       │   ├── ReportAlreadyFinalizedException.php
│   │   │       │   ├── StaticAnalysisCacheNotConfiguredException.php
│   │   │       │   ├── TestIdMissingException.php
│   │   │       │   ├── UnintentionallyCoveredCodeException.php
│   │   │       │   ├── WriteOperationFailedException.php
│   │   │       │   ├── XdebugNotAvailableException.php
│   │   │       │   ├── XdebugNotEnabledException.php
│   │   │       │   └── XmlException.php
│   │   │       ├── Filter.php
│   │   │       ├── Node
│   │   │       │   ├── AbstractNode.php
│   │   │       │   ├── Builder.php
│   │   │       │   ├── CrapIndex.php
│   │   │       │   ├── Directory.php
│   │   │       │   ├── File.php
│   │   │       │   └── Iterator.php
│   │   │       ├── Report
│   │   │       │   ├── Clover.php
│   │   │       │   ├── Cobertura.php
│   │   │       │   ├── Crap4j.php
│   │   │       │   ├── Html
│   │   │       │   │   ├── Colors.php
│   │   │       │   │   ├── CustomCssFile.php
│   │   │       │   │   ├── Facade.php
│   │   │       │   │   ├── Renderer
│   │   │       │   │   │   ├── Dashboard.php
│   │   │       │   │   │   ├── Directory.php
│   │   │       │   │   │   ├── File.php
│   │   │       │   │   │   └── Template
│   │   │       │   │   │       ├── branches.html.dist
│   │   │       │   │   │       ├── coverage_bar_branch.html.dist
│   │   │       │   │   │       ├── coverage_bar.html.dist
│   │   │       │   │   │       ├── css
│   │   │       │   │   │       │   ├── bootstrap.min.css
│   │   │       │   │   │       │   ├── custom.css
│   │   │       │   │   │       │   ├── nv.d3.min.css
│   │   │       │   │   │       │   ├── octicons.css
│   │   │       │   │   │       │   └── style.css
│   │   │       │   │   │       ├── dashboard_branch.html.dist
│   │   │       │   │   │       ├── dashboard.html.dist
│   │   │       │   │   │       ├── directory_branch.html.dist
│   │   │       │   │   │       ├── directory.html.dist
│   │   │       │   │   │       ├── directory_item_branch.html.dist
│   │   │       │   │   │       ├── directory_item.html.dist
│   │   │       │   │   │       ├── file_branch.html.dist
│   │   │       │   │   │       ├── file.html.dist
│   │   │       │   │   │       ├── file_item_branch.html.dist
│   │   │       │   │   │       ├── file_item.html.dist
│   │   │       │   │   │       ├── icons
│   │   │       │   │   │       │   ├── file-code.svg
│   │   │       │   │   │       │   └── file-directory.svg
│   │   │       │   │   │       ├── js
│   │   │       │   │   │       │   ├── bootstrap.min.js
│   │   │       │   │   │       │   ├── d3.min.js
│   │   │       │   │   │       │   ├── file.js
│   │   │       │   │   │       │   ├── jquery.min.js
│   │   │       │   │   │       │   ├── nv.d3.min.js
│   │   │       │   │   │       │   └── popper.min.js
│   │   │       │   │   │       ├── line.html.dist
│   │   │       │   │   │       ├── lines.html.dist
│   │   │       │   │   │       ├── method_item_branch.html.dist
│   │   │       │   │   │       ├── method_item.html.dist
│   │   │       │   │   │       └── paths.html.dist
│   │   │       │   │   └── Renderer.php
│   │   │       │   ├── PHP.php
│   │   │       │   ├── Text.php
│   │   │       │   ├── Thresholds.php
│   │   │       │   └── Xml
│   │   │       │       ├── BuildInformation.php
│   │   │       │       ├── Coverage.php
│   │   │       │       ├── Directory.php
│   │   │       │       ├── Facade.php
│   │   │       │       ├── File.php
│   │   │       │       ├── Method.php
│   │   │       │       ├── Node.php
│   │   │       │       ├── Project.php
│   │   │       │       ├── Report.php
│   │   │       │       ├── Source.php
│   │   │       │       ├── Tests.php
│   │   │       │       ├── Totals.php
│   │   │       │       └── Unit.php
│   │   │       ├── StaticAnalysis
│   │   │       │   ├── CacheWarmer.php
│   │   │       │   ├── CachingFileAnalyser.php
│   │   │       │   ├── CodeUnitFindingVisitor.php
│   │   │       │   ├── ExecutableLinesFindingVisitor.php
│   │   │       │   ├── FileAnalyser.php
│   │   │       │   ├── IgnoredLinesFindingVisitor.php
│   │   │       │   └── ParsingFileAnalyser.php
│   │   │       ├── TestSize
│   │   │       │   ├── Known.php
│   │   │       │   ├── Large.php
│   │   │       │   ├── Medium.php
│   │   │       │   ├── Small.php
│   │   │       │   ├── TestSize.php
│   │   │       │   └── Unknown.php
│   │   │       ├── TestStatus
│   │   │       │   ├── Failure.php
│   │   │       │   ├── Known.php
│   │   │       │   ├── Success.php
│   │   │       │   ├── TestStatus.php
│   │   │       │   └── Unknown.php
│   │   │       ├── Util
│   │   │       │   ├── Filesystem.php
│   │   │       │   └── Percentage.php
│   │   │       └── Version.php
│   │   ├── php-file-iterator
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── ExcludeIterator.php
│   │   │       ├── Facade.php
│   │   │       ├── Factory.php
│   │   │       └── Iterator.php
│   │   ├── php-invoker
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── ProcessControlExtensionNotLoadedException.php
│   │   │       │   └── TimeoutException.php
│   │   │       └── Invoker.php
│   │   ├── php-text-template
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── InvalidArgumentException.php
│   │   │       │   └── RuntimeException.php
│   │   │       └── Template.php
│   │   ├── php-timer
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Duration.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── NoActiveTimerException.php
│   │   │       │   └── TimeSinceStartOfRequestNotAvailableException.php
│   │   │       ├── ResourceUsageFormatter.php
│   │   │       └── Timer.php
│   │   └── phpunit
│   │       ├── ChangeLog-10.5.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── DEPRECATIONS.md
│   │       ├── LICENSE
│   │       ├── phpunit
│   │       ├── phpunit.xsd
│   │       ├── README.md
│   │       ├── schema
│   │       │   ├── 10.0.xsd
│   │       │   ├── 10.1.xsd
│   │       │   ├── 10.2.xsd
│   │       │   ├── 10.3.xsd
│   │       │   ├── 10.4.xsd
│   │       │   ├── 8.5.xsd
│   │       │   ├── 9.0.xsd
│   │       │   ├── 9.1.xsd
│   │       │   ├── 9.2.xsd
│   │       │   ├── 9.3.xsd
│   │       │   ├── 9.4.xsd
│   │       │   └── 9.5.xsd
│   │       ├── SECURITY.md
│   │       └── src
│   │           ├── Event
│   │           │   ├── Dispatcher
│   │           │   │   ├── CollectingDispatcher.php
│   │           │   │   ├── DeferringDispatcher.php
│   │           │   │   ├── DirectDispatcher.php
│   │           │   │   ├── Dispatcher.php
│   │           │   │   └── SubscribableDispatcher.php
│   │           │   ├── Emitter
│   │           │   │   ├── DispatchingEmitter.php
│   │           │   │   └── Emitter.php
│   │           │   ├── Events
│   │           │   │   ├── Application
│   │           │   │   │   ├── Finished.php
│   │           │   │   │   ├── FinishedSubscriber.php
│   │           │   │   │   ├── Started.php
│   │           │   │   │   └── StartedSubscriber.php
│   │           │   │   ├── EventCollectionIterator.php
│   │           │   │   ├── EventCollection.php
│   │           │   │   ├── Event.php
│   │           │   │   ├── Test
│   │           │   │   │   ├── Assertion
│   │           │   │   │   │   ├── AssertionFailed.php
│   │           │   │   │   │   ├── AssertionFailedSubscriber.php
│   │           │   │   │   │   ├── AssertionSucceeded.php
│   │           │   │   │   │   └── AssertionSucceededSubscriber.php
│   │           │   │   │   ├── ComparatorRegistered.php
│   │           │   │   │   ├── ComparatorRegisteredSubscriber.php
│   │           │   │   │   ├── HookMethod
│   │           │   │   │   │   ├── AfterLastTestMethodCalled.php
│   │           │   │   │   │   ├── AfterLastTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── AfterLastTestMethodErrored.php
│   │           │   │   │   │   ├── AfterLastTestMethodErroredSubscriber.php
│   │           │   │   │   │   ├── AfterLastTestMethodFinished.php
│   │           │   │   │   │   ├── AfterLastTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── AfterTestMethodCalled.php
│   │           │   │   │   │   ├── AfterTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── AfterTestMethodErrored.php
│   │           │   │   │   │   ├── AfterTestMethodErroredSubscriber.php
│   │           │   │   │   │   ├── AfterTestMethodFinished.php
│   │           │   │   │   │   ├── AfterTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodCalled.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodErrored.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodErroredSubscriber.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodFinished.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── BeforeTestMethodCalled.php
│   │           │   │   │   │   ├── BeforeTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── BeforeTestMethodErrored.php
│   │           │   │   │   │   ├── BeforeTestMethodErroredSubscriber.php
│   │           │   │   │   │   ├── BeforeTestMethodFinished.php
│   │           │   │   │   │   ├── BeforeTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── PostConditionCalled.php
│   │           │   │   │   │   ├── PostConditionCalledSubscriber.php
│   │           │   │   │   │   ├── PostConditionErrored.php
│   │           │   │   │   │   ├── PostConditionErroredSubscriber.php
│   │           │   │   │   │   ├── PostConditionFinished.php
│   │           │   │   │   │   ├── PostConditionFinishedSubscriber.php
│   │           │   │   │   │   ├── PreConditionCalled.php
│   │           │   │   │   │   ├── PreConditionCalledSubscriber.php
│   │           │   │   │   │   ├── PreConditionErrored.php
│   │           │   │   │   │   ├── PreConditionErroredSubscriber.php
│   │           │   │   │   │   ├── PreConditionFinished.php
│   │           │   │   │   │   └── PreConditionFinishedSubscriber.php
│   │           │   │   │   ├── Issue
│   │           │   │   │   │   ├── ConsideredRisky.php
│   │           │   │   │   │   ├── ConsideredRiskySubscriber.php
│   │           │   │   │   │   ├── DeprecationTriggered.php
│   │           │   │   │   │   ├── DeprecationTriggeredSubscriber.php
│   │           │   │   │   │   ├── ErrorTriggered.php
│   │           │   │   │   │   ├── ErrorTriggeredSubscriber.php
│   │           │   │   │   │   ├── NoticeTriggered.php
│   │           │   │   │   │   ├── NoticeTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpDeprecationTriggered.php
│   │           │   │   │   │   ├── PhpDeprecationTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpNoticeTriggered.php
│   │           │   │   │   │   ├── PhpNoticeTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpunitDeprecationTriggered.php
│   │           │   │   │   │   ├── PhpunitDeprecationTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpunitErrorTriggered.php
│   │           │   │   │   │   ├── PhpunitErrorTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpunitWarningTriggered.php
│   │           │   │   │   │   ├── PhpunitWarningTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpWarningTriggered.php
│   │           │   │   │   │   ├── PhpWarningTriggeredSubscriber.php
│   │           │   │   │   │   ├── WarningTriggered.php
│   │           │   │   │   │   └── WarningTriggeredSubscriber.php
│   │           │   │   │   ├── Lifecycle
│   │           │   │   │   │   ├── DataProviderMethodCalled.php
│   │           │   │   │   │   ├── DataProviderMethodCalledSubscriber.php
│   │           │   │   │   │   ├── DataProviderMethodFinished.php
│   │           │   │   │   │   ├── DataProviderMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── Finished.php
│   │           │   │   │   │   ├── FinishedSubscriber.php
│   │           │   │   │   │   ├── PreparationFailed.php
│   │           │   │   │   │   ├── PreparationFailedSubscriber.php
│   │           │   │   │   │   ├── PreparationStarted.php
│   │           │   │   │   │   ├── PreparationStartedSubscriber.php
│   │           │   │   │   │   ├── Prepared.php
│   │           │   │   │   │   └── PreparedSubscriber.php
│   │           │   │   │   ├── Outcome
│   │           │   │   │   │   ├── Errored.php
│   │           │   │   │   │   ├── ErroredSubscriber.php
│   │           │   │   │   │   ├── Failed.php
│   │           │   │   │   │   ├── FailedSubscriber.php
│   │           │   │   │   │   ├── MarkedIncomplete.php
│   │           │   │   │   │   ├── MarkedIncompleteSubscriber.php
│   │           │   │   │   │   ├── Passed.php
│   │           │   │   │   │   ├── PassedSubscriber.php
│   │           │   │   │   │   ├── Skipped.php
│   │           │   │   │   │   └── SkippedSubscriber.php
│   │           │   │   │   ├── PrintedUnexpectedOutput.php
│   │           │   │   │   ├── PrintedUnexpectedOutputSubscriber.php
│   │           │   │   │   └── TestDouble
│   │           │   │   │       ├── MockObjectCreated.php
│   │           │   │   │       ├── MockObjectCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectForAbstractClassCreated.php
│   │           │   │   │       ├── MockObjectForAbstractClassCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectForIntersectionOfInterfacesCreated.php
│   │           │   │   │       ├── MockObjectForIntersectionOfInterfacesCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectForTraitCreated.php
│   │           │   │   │       ├── MockObjectForTraitCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectFromWsdlCreated.php
│   │           │   │   │       ├── MockObjectFromWsdlCreatedSubscriber.php
│   │           │   │   │       ├── PartialMockObjectCreated.php
│   │           │   │   │       ├── PartialMockObjectCreatedSubscriber.php
│   │           │   │   │       ├── TestProxyCreated.php
│   │           │   │   │       ├── TestProxyCreatedSubscriber.php
│   │           │   │   │       ├── TestStubCreated.php
│   │           │   │   │       ├── TestStubCreatedSubscriber.php
│   │           │   │   │       ├── TestStubForIntersectionOfInterfacesCreated.php
│   │           │   │   │       └── TestStubForIntersectionOfInterfacesCreatedSubscriber.php
│   │           │   │   ├── TestRunner
│   │           │   │   │   ├── BootstrapFinished.php
│   │           │   │   │   ├── BootstrapFinishedSubscriber.php
│   │           │   │   │   ├── Configured.php
│   │           │   │   │   ├── ConfiguredSubscriber.php
│   │           │   │   │   ├── DeprecationTriggered.php
│   │           │   │   │   ├── DeprecationTriggeredSubscriber.php
│   │           │   │   │   ├── EventFacadeSealed.php
│   │           │   │   │   ├── EventFacadeSealedSubscriber.php
│   │           │   │   │   ├── ExecutionAborted.php
│   │           │   │   │   ├── ExecutionAbortedSubscriber.php
│   │           │   │   │   ├── ExecutionFinished.php
│   │           │   │   │   ├── ExecutionFinishedSubscriber.php
│   │           │   │   │   ├── ExecutionStarted.php
│   │           │   │   │   ├── ExecutionStartedSubscriber.php
│   │           │   │   │   ├── ExtensionBootstrapped.php
│   │           │   │   │   ├── ExtensionBootstrappedSubscriber.php
│   │           │   │   │   ├── ExtensionLoadedFromPhar.php
│   │           │   │   │   ├── ExtensionLoadedFromPharSubscriber.php
│   │           │   │   │   ├── Finished.php
│   │           │   │   │   ├── FinishedSubscriber.php
│   │           │   │   │   ├── GarbageCollectionDisabled.php
│   │           │   │   │   ├── GarbageCollectionDisabledSubscriber.php
│   │           │   │   │   ├── GarbageCollectionEnabled.php
│   │           │   │   │   ├── GarbageCollectionEnabledSubscriber.php
│   │           │   │   │   ├── GarbageCollectionTriggered.php
│   │           │   │   │   ├── GarbageCollectionTriggeredSubscriber.php
│   │           │   │   │   ├── Started.php
│   │           │   │   │   ├── StartedSubscriber.php
│   │           │   │   │   ├── WarningTriggered.php
│   │           │   │   │   └── WarningTriggeredSubscriber.php
│   │           │   │   └── TestSuite
│   │           │   │       ├── Filtered.php
│   │           │   │       ├── FilteredSubscriber.php
│   │           │   │       ├── Finished.php
│   │           │   │       ├── FinishedSubscriber.php
│   │           │   │       ├── Loaded.php
│   │           │   │       ├── LoadedSubscriber.php
│   │           │   │       ├── Skipped.php
│   │           │   │       ├── SkippedSubscriber.php
│   │           │   │       ├── Sorted.php
│   │           │   │       ├── SortedSubscriber.php
│   │           │   │       ├── Started.php
│   │           │   │       └── StartedSubscriber.php
│   │           │   ├── Exception
│   │           │   │   ├── EventAlreadyAssignedException.php
│   │           │   │   ├── EventFacadeIsSealedException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── InvalidArgumentException.php
│   │           │   │   ├── InvalidEventException.php
│   │           │   │   ├── InvalidSubscriberException.php
│   │           │   │   ├── MapError.php
│   │           │   │   ├── MoreThanOneDataSetFromDataProviderException.php
│   │           │   │   ├── NoComparisonFailureException.php
│   │           │   │   ├── NoDataSetFromDataProviderException.php
│   │           │   │   ├── NoPreviousThrowableException.php
│   │           │   │   ├── NoTestCaseObjectOnCallStackException.php
│   │           │   │   ├── RuntimeException.php
│   │           │   │   ├── SubscriberTypeAlreadyRegisteredException.php
│   │           │   │   ├── UnknownEventException.php
│   │           │   │   ├── UnknownEventTypeException.php
│   │           │   │   ├── UnknownSubscriberException.php
│   │           │   │   └── UnknownSubscriberTypeException.php
│   │           │   ├── Facade.php
│   │           │   ├── Subscriber.php
│   │           │   ├── Tracer.php
│   │           │   ├── TypeMap.php
│   │           │   └── Value
│   │           │       ├── ClassMethod.php
│   │           │       ├── ComparisonFailureBuilder.php
│   │           │       ├── ComparisonFailure.php
│   │           │       ├── Runtime
│   │           │       │   ├── OperatingSystem.php
│   │           │       │   ├── PHP.php
│   │           │       │   ├── PHPUnit.php
│   │           │       │   └── Runtime.php
│   │           │       ├── Telemetry
│   │           │       │   ├── Duration.php
│   │           │       │   ├── GarbageCollectorStatus.php
│   │           │       │   ├── GarbageCollectorStatusProvider.php
│   │           │       │   ├── HRTime.php
│   │           │       │   ├── Info.php
│   │           │       │   ├── MemoryMeter.php
│   │           │       │   ├── MemoryUsage.php
│   │           │       │   ├── Php81GarbageCollectorStatusProvider.php
│   │           │       │   ├── Php83GarbageCollectorStatusProvider.php
│   │           │       │   ├── Snapshot.php
│   │           │       │   ├── StopWatch.php
│   │           │       │   ├── SystemMemoryMeter.php
│   │           │       │   ├── System.php
│   │           │       │   ├── SystemStopWatch.php
│   │           │       │   └── SystemStopWatchWithOffset.php
│   │           │       ├── Test
│   │           │       │   ├── Phpt.php
│   │           │       │   ├── TestCollectionIterator.php
│   │           │       │   ├── TestCollection.php
│   │           │       │   ├── TestData
│   │           │       │   │   ├── DataFromDataProvider.php
│   │           │       │   │   ├── DataFromTestDependency.php
│   │           │       │   │   ├── TestDataCollectionIterator.php
│   │           │       │   │   ├── TestDataCollection.php
│   │           │       │   │   └── TestData.php
│   │           │       │   ├── TestDoxBuilder.php
│   │           │       │   ├── TestDox.php
│   │           │       │   ├── TestMethodBuilder.php
│   │           │       │   ├── TestMethod.php
│   │           │       │   └── Test.php
│   │           │       ├── TestSuite
│   │           │       │   ├── TestSuiteBuilder.php
│   │           │       │   ├── TestSuiteForTestClass.php
│   │           │       │   ├── TestSuiteForTestMethodWithDataProvider.php
│   │           │       │   ├── TestSuite.php
│   │           │       │   └── TestSuiteWithName.php
│   │           │       ├── ThrowableBuilder.php
│   │           │       └── Throwable.php
│   │           ├── Exception.php
│   │           ├── Framework
│   │           │   ├── Assert
│   │           │   │   └── Functions.php
│   │           │   ├── Assert.php
│   │           │   ├── Attributes
│   │           │   │   ├── AfterClass.php
│   │           │   │   ├── After.php
│   │           │   │   ├── BackupGlobals.php
│   │           │   │   ├── BackupStaticProperties.php
│   │           │   │   ├── BeforeClass.php
│   │           │   │   ├── Before.php
│   │           │   │   ├── CodeCoverageIgnore.php
│   │           │   │   ├── CoversClass.php
│   │           │   │   ├── CoversFunction.php
│   │           │   │   ├── CoversNothing.php
│   │           │   │   ├── DataProviderExternal.php
│   │           │   │   ├── DataProvider.php
│   │           │   │   ├── DependsExternal.php
│   │           │   │   ├── DependsExternalUsingDeepClone.php
│   │           │   │   ├── DependsExternalUsingShallowClone.php
│   │           │   │   ├── DependsOnClass.php
│   │           │   │   ├── DependsOnClassUsingDeepClone.php
│   │           │   │   ├── DependsOnClassUsingShallowClone.php
│   │           │   │   ├── Depends.php
│   │           │   │   ├── DependsUsingDeepClone.php
│   │           │   │   ├── DependsUsingShallowClone.php
│   │           │   │   ├── DoesNotPerformAssertions.php
│   │           │   │   ├── ExcludeGlobalVariableFromBackup.php
│   │           │   │   ├── ExcludeStaticPropertyFromBackup.php
│   │           │   │   ├── Group.php
│   │           │   │   ├── IgnoreClassForCodeCoverage.php
│   │           │   │   ├── IgnoreDeprecations.php
│   │           │   │   ├── IgnoreFunctionForCodeCoverage.php
│   │           │   │   ├── IgnoreMethodForCodeCoverage.php
│   │           │   │   ├── Large.php
│   │           │   │   ├── Medium.php
│   │           │   │   ├── PostCondition.php
│   │           │   │   ├── PreCondition.php
│   │           │   │   ├── PreserveGlobalState.php
│   │           │   │   ├── RequiresFunction.php
│   │           │   │   ├── RequiresMethod.php
│   │           │   │   ├── RequiresOperatingSystemFamily.php
│   │           │   │   ├── RequiresOperatingSystem.php
│   │           │   │   ├── RequiresPhpExtension.php
│   │           │   │   ├── RequiresPhp.php
│   │           │   │   ├── RequiresPhpunit.php
│   │           │   │   ├── RequiresSetting.php
│   │           │   │   ├── RunClassInSeparateProcess.php
│   │           │   │   ├── RunInSeparateProcess.php
│   │           │   │   ├── RunTestsInSeparateProcesses.php
│   │           │   │   ├── Small.php
│   │           │   │   ├── TestDox.php
│   │           │   │   ├── Test.php
│   │           │   │   ├── TestWithJson.php
│   │           │   │   ├── TestWith.php
│   │           │   │   ├── Ticket.php
│   │           │   │   ├── UsesClass.php
│   │           │   │   ├── UsesFunction.php
│   │           │   │   └── WithoutErrorHandler.php
│   │           │   ├── Constraint
│   │           │   │   ├── Boolean
│   │           │   │   │   ├── IsFalse.php
│   │           │   │   │   └── IsTrue.php
│   │           │   │   ├── Callback.php
│   │           │   │   ├── Cardinality
│   │           │   │   │   ├── Count.php
│   │           │   │   │   ├── GreaterThan.php
│   │           │   │   │   ├── IsEmpty.php
│   │           │   │   │   ├── LessThan.php
│   │           │   │   │   └── SameSize.php
│   │           │   │   ├── Constraint.php
│   │           │   │   ├── Equality
│   │           │   │   │   ├── IsEqualCanonicalizing.php
│   │           │   │   │   ├── IsEqualIgnoringCase.php
│   │           │   │   │   ├── IsEqual.php
│   │           │   │   │   └── IsEqualWithDelta.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── ExceptionCode.php
│   │           │   │   │   ├── ExceptionMessageIsOrContains.php
│   │           │   │   │   ├── ExceptionMessageMatchesRegularExpression.php
│   │           │   │   │   └── Exception.php
│   │           │   │   ├── Filesystem
│   │           │   │   │   ├── DirectoryExists.php
│   │           │   │   │   ├── FileExists.php
│   │           │   │   │   ├── IsReadable.php
│   │           │   │   │   └── IsWritable.php
│   │           │   │   ├── IsAnything.php
│   │           │   │   ├── IsIdentical.php
│   │           │   │   ├── JsonMatches.php
│   │           │   │   ├── Math
│   │           │   │   │   ├── IsFinite.php
│   │           │   │   │   ├── IsInfinite.php
│   │           │   │   │   └── IsNan.php
│   │           │   │   ├── Object
│   │           │   │   │   ├── ObjectEquals.php
│   │           │   │   │   └── ObjectHasProperty.php
│   │           │   │   ├── Operator
│   │           │   │   │   ├── BinaryOperator.php
│   │           │   │   │   ├── LogicalAnd.php
│   │           │   │   │   ├── LogicalNot.php
│   │           │   │   │   ├── LogicalOr.php
│   │           │   │   │   ├── LogicalXor.php
│   │           │   │   │   ├── Operator.php
│   │           │   │   │   └── UnaryOperator.php
│   │           │   │   ├── String
│   │           │   │   │   ├── IsJson.php
│   │           │   │   │   ├── RegularExpression.php
│   │           │   │   │   ├── StringContains.php
│   │           │   │   │   ├── StringEndsWith.php
│   │           │   │   │   ├── StringEqualsStringIgnoringLineEndings.php
│   │           │   │   │   ├── StringMatchesFormatDescription.php
│   │           │   │   │   └── StringStartsWith.php
│   │           │   │   ├── Traversable
│   │           │   │   │   ├── ArrayHasKey.php
│   │           │   │   │   ├── IsList.php
│   │           │   │   │   ├── TraversableContainsEqual.php
│   │           │   │   │   ├── TraversableContainsIdentical.php
│   │           │   │   │   ├── TraversableContainsOnly.php
│   │           │   │   │   └── TraversableContains.php
│   │           │   │   └── Type
│   │           │   │       ├── IsInstanceOf.php
│   │           │   │       ├── IsNull.php
│   │           │   │       └── IsType.php
│   │           │   ├── DataProviderTestSuite.php
│   │           │   ├── Exception
│   │           │   │   ├── AssertionFailedError.php
│   │           │   │   ├── CodeCoverageException.php
│   │           │   │   ├── EmptyStringException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── ExpectationFailedException.php
│   │           │   │   ├── GeneratorNotSupportedException.php
│   │           │   │   ├── Incomplete
│   │           │   │   │   ├── IncompleteTestError.php
│   │           │   │   │   └── IncompleteTest.php
│   │           │   │   ├── InvalidArgumentException.php
│   │           │   │   ├── InvalidCoversTargetException.php
│   │           │   │   ├── InvalidDataProviderException.php
│   │           │   │   ├── InvalidDependencyException.php
│   │           │   │   ├── NoChildTestSuiteException.php
│   │           │   │   ├── ObjectEquals
│   │           │   │   │   ├── ActualValueIsNotAnObjectException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotAcceptParameterTypeException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotDeclareBoolReturnTypeException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotDeclareExactlyOneParameterException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotDeclareParameterTypeException.php
│   │           │   │   │   └── ComparisonMethodDoesNotExistException.php
│   │           │   │   ├── PhptAssertionFailedError.php
│   │           │   │   ├── ProcessIsolationException.php
│   │           │   │   ├── Skipped
│   │           │   │   │   ├── SkippedTest.php
│   │           │   │   │   ├── SkippedTestSuiteError.php
│   │           │   │   │   └── SkippedWithMessageException.php
│   │           │   │   ├── UnknownClassOrInterfaceException.php
│   │           │   │   └── UnknownTypeException.php
│   │           │   ├── ExecutionOrderDependency.php
│   │           │   ├── MockObject
│   │           │   │   ├── ConfigurableMethod.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── BadMethodCallException.php
│   │           │   │   │   ├── CannotUseOnlyMethodsException.php
│   │           │   │   │   ├── Exception.php
│   │           │   │   │   ├── IncompatibleReturnValueException.php
│   │           │   │   │   ├── MatchBuilderNotFoundException.php
│   │           │   │   │   ├── MatcherAlreadyRegisteredException.php
│   │           │   │   │   ├── MethodCannotBeConfiguredException.php
│   │           │   │   │   ├── MethodNameAlreadyConfiguredException.php
│   │           │   │   │   ├── MethodNameNotConfiguredException.php
│   │           │   │   │   ├── MethodParametersAlreadyConfiguredException.php
│   │           │   │   │   ├── NeverReturningMethodException.php
│   │           │   │   │   ├── NoMoreReturnValuesConfiguredException.php
│   │           │   │   │   ├── ReturnValueNotConfiguredException.php
│   │           │   │   │   └── RuntimeException.php
│   │           │   │   ├── Generator
│   │           │   │   │   ├── Exception
│   │           │   │   │   │   ├── CannotUseAddMethodsException.php
│   │           │   │   │   │   ├── ClassIsEnumerationException.php
│   │           │   │   │   │   ├── ClassIsFinalException.php
│   │           │   │   │   │   ├── ClassIsReadonlyException.php
│   │           │   │   │   │   ├── DuplicateMethodException.php
│   │           │   │   │   │   ├── Exception.php
│   │           │   │   │   │   ├── InvalidMethodNameException.php
│   │           │   │   │   │   ├── NameAlreadyInUseException.php
│   │           │   │   │   │   ├── OriginalConstructorInvocationRequiredException.php
│   │           │   │   │   │   ├── ReflectionException.php
│   │           │   │   │   │   ├── RuntimeException.php
│   │           │   │   │   │   ├── SoapExtensionNotAvailableException.php
│   │           │   │   │   │   ├── UnknownClassException.php
│   │           │   │   │   │   ├── UnknownTraitException.php
│   │           │   │   │   │   └── UnknownTypeException.php
│   │           │   │   │   ├── Generator.php
│   │           │   │   │   ├── MockClass.php
│   │           │   │   │   ├── MockMethod.php
│   │           │   │   │   ├── MockMethodSet.php
│   │           │   │   │   ├── MockTrait.php
│   │           │   │   │   ├── MockType.php
│   │           │   │   │   ├── TemplateLoader.php
│   │           │   │   │   └── templates
│   │           │   │   │       ├── deprecation.tpl
│   │           │   │   │       ├── doubled_method.tpl
│   │           │   │   │       ├── doubled_static_method.tpl
│   │           │   │   │       ├── intersection.tpl
│   │           │   │   │       ├── proxied_method.tpl
│   │           │   │   │       ├── test_double_class.tpl
│   │           │   │   │       ├── trait_class.tpl
│   │           │   │   │       ├── wsdl_class.tpl
│   │           │   │   │       └── wsdl_method.tpl
│   │           │   │   ├── MockBuilder.php
│   │           │   │   └── Runtime
│   │           │   │       ├── Api
│   │           │   │       │   ├── DoubledCloneMethod.php
│   │           │   │       │   ├── Method.php
│   │           │   │       │   ├── MockObjectApi.php
│   │           │   │       │   ├── ProxiedCloneMethod.php
│   │           │   │       │   └── StubApi.php
│   │           │   │       ├── Builder
│   │           │   │       │   ├── Identity.php
│   │           │   │       │   ├── InvocationMocker.php
│   │           │   │       │   ├── InvocationStubber.php
│   │           │   │       │   ├── MethodNameMatch.php
│   │           │   │       │   ├── ParametersMatch.php
│   │           │   │       │   └── Stub.php
│   │           │   │       ├── Interface
│   │           │   │       │   ├── MockObjectInternal.php
│   │           │   │       │   ├── MockObject.php
│   │           │   │       │   ├── StubInternal.php
│   │           │   │       │   └── Stub.php
│   │           │   │       ├── InvocationHandler.php
│   │           │   │       ├── Invocation.php
│   │           │   │       ├── Matcher.php
│   │           │   │       ├── MethodNameConstraint.php
│   │           │   │       ├── ReturnValueGenerator.php
│   │           │   │       ├── Rule
│   │           │   │       │   ├── AnyInvokedCount.php
│   │           │   │       │   ├── AnyParameters.php
│   │           │   │       │   ├── InvocationOrder.php
│   │           │   │       │   ├── InvokedAtLeastCount.php
│   │           │   │       │   ├── InvokedAtLeastOnce.php
│   │           │   │       │   ├── InvokedAtMostCount.php
│   │           │   │       │   ├── InvokedCount.php
│   │           │   │       │   ├── MethodName.php
│   │           │   │       │   ├── Parameters.php
│   │           │   │       │   └── ParametersRule.php
│   │           │   │       └── Stub
│   │           │   │           ├── ConsecutiveCalls.php
│   │           │   │           ├── Exception.php
│   │           │   │           ├── ReturnArgument.php
│   │           │   │           ├── ReturnCallback.php
│   │           │   │           ├── ReturnReference.php
│   │           │   │           ├── ReturnSelf.php
│   │           │   │           ├── ReturnStub.php
│   │           │   │           ├── ReturnValueMap.php
│   │           │   │           └── Stub.php
│   │           │   ├── Reorderable.php
│   │           │   ├── SelfDescribing.php
│   │           │   ├── TestBuilder.php
│   │           │   ├── TestCase.php
│   │           │   ├── Test.php
│   │           │   ├── TestRunner.php
│   │           │   ├── TestSize
│   │           │   │   ├── Known.php
│   │           │   │   ├── Large.php
│   │           │   │   ├── Medium.php
│   │           │   │   ├── Small.php
│   │           │   │   ├── TestSize.php
│   │           │   │   └── Unknown.php
│   │           │   ├── TestStatus
│   │           │   │   ├── Deprecation.php
│   │           │   │   ├── Error.php
│   │           │   │   ├── Failure.php
│   │           │   │   ├── Incomplete.php
│   │           │   │   ├── Known.php
│   │           │   │   ├── Notice.php
│   │           │   │   ├── Risky.php
│   │           │   │   ├── Skipped.php
│   │           │   │   ├── Success.php
│   │           │   │   ├── TestStatus.php
│   │           │   │   ├── Unknown.php
│   │           │   │   └── Warning.php
│   │           │   ├── TestSuiteIterator.php
│   │           │   └── TestSuite.php
│   │           ├── Logging
│   │           │   ├── EventLogger.php
│   │           │   ├── JUnit
│   │           │   │   ├── JunitXmlLogger.php
│   │           │   │   └── Subscriber
│   │           │   │       ├── Subscriber.php
│   │           │   │       ├── TestErroredSubscriber.php
│   │           │   │       ├── TestFailedSubscriber.php
│   │           │   │       ├── TestFinishedSubscriber.php
│   │           │   │       ├── TestMarkedIncompleteSubscriber.php
│   │           │   │       ├── TestPreparationFailedSubscriber.php
│   │           │   │       ├── TestPreparationStartedSubscriber.php
│   │           │   │       ├── TestPreparedSubscriber.php
│   │           │   │       ├── TestPrintedUnexpectedOutputSubscriber.php
│   │           │   │       ├── TestRunnerExecutionFinishedSubscriber.php
│   │           │   │       ├── TestSkippedSubscriber.php
│   │           │   │       ├── TestSuiteFinishedSubscriber.php
│   │           │   │       └── TestSuiteStartedSubscriber.php
│   │           │   ├── TeamCity
│   │           │   │   ├── Subscriber
│   │           │   │   │   ├── Subscriber.php
│   │           │   │   │   ├── TestConsideredRiskySubscriber.php
│   │           │   │   │   ├── TestErroredSubscriber.php
│   │           │   │   │   ├── TestFailedSubscriber.php
│   │           │   │   │   ├── TestFinishedSubscriber.php
│   │           │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │           │   │   │   ├── TestPreparedSubscriber.php
│   │           │   │   │   ├── TestRunnerExecutionFinishedSubscriber.php
│   │           │   │   │   ├── TestSkippedSubscriber.php
│   │           │   │   │   ├── TestSuiteBeforeFirstTestMethodErroredSubscriber.php
│   │           │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │           │   │   │   ├── TestSuiteSkippedSubscriber.php
│   │           │   │   │   └── TestSuiteStartedSubscriber.php
│   │           │   │   └── TeamCityLogger.php
│   │           │   └── TestDox
│   │           │       ├── HtmlRenderer.php
│   │           │       ├── NamePrettifier.php
│   │           │       ├── PlainTextRenderer.php
│   │           │       └── TestResult
│   │           │           ├── Subscriber
│   │           │           │   ├── Subscriber.php
│   │           │           │   ├── TestConsideredRiskySubscriber.php
│   │           │           │   ├── TestErroredSubscriber.php
│   │           │           │   ├── TestFailedSubscriber.php
│   │           │           │   ├── TestFinishedSubscriber.php
│   │           │           │   ├── TestMarkedIncompleteSubscriber.php
│   │           │           │   ├── TestPassedSubscriber.php
│   │           │           │   ├── TestPreparedSubscriber.php
│   │           │           │   ├── TestSkippedSubscriber.php
│   │           │           │   ├── TestTriggeredDeprecationSubscriber.php
│   │           │           │   ├── TestTriggeredNoticeSubscriber.php
│   │           │           │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │           │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │           │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │           │           │   ├── TestTriggeredPhpunitErrorSubscriber.php
│   │           │           │   ├── TestTriggeredPhpunitWarningSubscriber.php
│   │           │           │   ├── TestTriggeredPhpWarningSubscriber.php
│   │           │           │   └── TestTriggeredWarningSubscriber.php
│   │           │           ├── TestResultCollectionIterator.php
│   │           │           ├── TestResultCollection.php
│   │           │           ├── TestResultCollector.php
│   │           │           └── TestResult.php
│   │           ├── Metadata
│   │           │   ├── AfterClass.php
│   │           │   ├── After.php
│   │           │   ├── Api
│   │           │   │   ├── CodeCoverage.php
│   │           │   │   ├── DataProvider.php
│   │           │   │   ├── Dependencies.php
│   │           │   │   ├── Groups.php
│   │           │   │   ├── HookMethods.php
│   │           │   │   └── Requirements.php
│   │           │   ├── BackupGlobals.php
│   │           │   ├── BackupStaticProperties.php
│   │           │   ├── BeforeClass.php
│   │           │   ├── Before.php
│   │           │   ├── CoversClass.php
│   │           │   ├── CoversDefaultClass.php
│   │           │   ├── CoversFunction.php
│   │           │   ├── CoversNothing.php
│   │           │   ├── Covers.php
│   │           │   ├── DataProvider.php
│   │           │   ├── DependsOnClass.php
│   │           │   ├── DependsOnMethod.php
│   │           │   ├── DoesNotPerformAssertions.php
│   │           │   ├── Exception
│   │           │   │   ├── AnnotationsAreNotSupportedForInternalClassesException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── InvalidAttributeException.php
│   │           │   │   ├── InvalidVersionRequirementException.php
│   │           │   │   ├── NoVersionRequirementException.php
│   │           │   │   └── ReflectionException.php
│   │           │   ├── ExcludeGlobalVariableFromBackup.php
│   │           │   ├── ExcludeStaticPropertyFromBackup.php
│   │           │   ├── Group.php
│   │           │   ├── IgnoreClassForCodeCoverage.php
│   │           │   ├── IgnoreDeprecations.php
│   │           │   ├── IgnoreFunctionForCodeCoverage.php
│   │           │   ├── IgnoreMethodForCodeCoverage.php
│   │           │   ├── MetadataCollectionIterator.php
│   │           │   ├── MetadataCollection.php
│   │           │   ├── Metadata.php
│   │           │   ├── Parser
│   │           │   │   ├── Annotation
│   │           │   │   │   ├── DocBlock.php
│   │           │   │   │   └── Registry.php
│   │           │   │   ├── AnnotationParser.php
│   │           │   │   ├── AttributeParser.php
│   │           │   │   ├── CachingParser.php
│   │           │   │   ├── ParserChain.php
│   │           │   │   ├── Parser.php
│   │           │   │   └── Registry.php
│   │           │   ├── PostCondition.php
│   │           │   ├── PreCondition.php
│   │           │   ├── PreserveGlobalState.php
│   │           │   ├── RequiresFunction.php
│   │           │   ├── RequiresMethod.php
│   │           │   ├── RequiresOperatingSystemFamily.php
│   │           │   ├── RequiresOperatingSystem.php
│   │           │   ├── RequiresPhpExtension.php
│   │           │   ├── RequiresPhp.php
│   │           │   ├── RequiresPhpunit.php
│   │           │   ├── RequiresSetting.php
│   │           │   ├── RunClassInSeparateProcess.php
│   │           │   ├── RunInSeparateProcess.php
│   │           │   ├── RunTestsInSeparateProcesses.php
│   │           │   ├── TestDox.php
│   │           │   ├── Test.php
│   │           │   ├── TestWith.php
│   │           │   ├── UsesClass.php
│   │           │   ├── UsesDefaultClass.php
│   │           │   ├── UsesFunction.php
│   │           │   ├── Uses.php
│   │           │   ├── Version
│   │           │   │   ├── ComparisonRequirement.php
│   │           │   │   ├── ConstraintRequirement.php
│   │           │   │   └── Requirement.php
│   │           │   └── WithoutErrorHandler.php
│   │           ├── Runner
│   │           │   ├── Baseline
│   │           │   │   ├── Baseline.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── CannotLoadBaselineException.php
│   │           │   │   │   └── FileDoesNotHaveLineException.php
│   │           │   │   ├── Generator.php
│   │           │   │   ├── Issue.php
│   │           │   │   ├── Reader.php
│   │           │   │   ├── RelativePathCalculator.php
│   │           │   │   ├── Subscriber
│   │           │   │   │   ├── Subscriber.php
│   │           │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │           │   │   │   └── TestTriggeredWarningSubscriber.php
│   │           │   │   └── Writer.php
│   │           │   ├── CodeCoverage.php
│   │           │   ├── ErrorHandler.php
│   │           │   ├── Exception
│   │           │   │   ├── ClassCannotBeFoundException.php
│   │           │   │   ├── ClassDoesNotExtendTestCaseException.php
│   │           │   │   ├── ClassIsAbstractException.php
│   │           │   │   ├── DirectoryDoesNotExistException.php
│   │           │   │   ├── ErrorException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── FileDoesNotExistException.php
│   │           │   │   ├── InvalidOrderException.php
│   │           │   │   ├── InvalidPhptFileException.php
│   │           │   │   ├── ParameterDoesNotExistException.php
│   │           │   │   ├── PhptExternalFileCannotBeLoadedException.php
│   │           │   │   └── UnsupportedPhptSectionException.php
│   │           │   ├── Extension
│   │           │   │   ├── ExtensionBootstrapper.php
│   │           │   │   ├── Extension.php
│   │           │   │   ├── Facade.php
│   │           │   │   ├── ParameterCollection.php
│   │           │   │   └── PharLoader.php
│   │           │   ├── Filter
│   │           │   │   ├── ExcludeGroupFilterIterator.php
│   │           │   │   ├── Factory.php
│   │           │   │   ├── GroupFilterIterator.php
│   │           │   │   ├── IncludeGroupFilterIterator.php
│   │           │   │   ├── NameFilterIterator.php
│   │           │   │   └── TestIdFilterIterator.php
│   │           │   ├── GarbageCollection
│   │           │   │   ├── GarbageCollectionHandler.php
│   │           │   │   └── Subscriber
│   │           │   │       ├── ExecutionFinishedSubscriber.php
│   │           │   │       ├── ExecutionStartedSubscriber.php
│   │           │   │       ├── Subscriber.php
│   │           │   │       └── TestFinishedSubscriber.php
│   │           │   ├── PhptTestCase.php
│   │           │   ├── ResultCache
│   │           │   │   ├── DefaultResultCache.php
│   │           │   │   ├── NullResultCache.php
│   │           │   │   ├── ResultCacheHandler.php
│   │           │   │   ├── ResultCache.php
│   │           │   │   └── Subscriber
│   │           │   │       ├── Subscriber.php
│   │           │   │       ├── TestConsideredRiskySubscriber.php
│   │           │   │       ├── TestErroredSubscriber.php
│   │           │   │       ├── TestFailedSubscriber.php
│   │           │   │       ├── TestFinishedSubscriber.php
│   │           │   │       ├── TestMarkedIncompleteSubscriber.php
│   │           │   │       ├── TestPreparedSubscriber.php
│   │           │   │       ├── TestSkippedSubscriber.php
│   │           │   │       ├── TestSuiteFinishedSubscriber.php
│   │           │   │       └── TestSuiteStartedSubscriber.php
│   │           │   ├── TestResult
│   │           │   │   ├── Collector.php
│   │           │   │   ├── Facade.php
│   │           │   │   ├── Issue.php
│   │           │   │   ├── PassedTests.php
│   │           │   │   ├── Subscriber
│   │           │   │   │   ├── AfterTestClassMethodErroredSubscriber.php
│   │           │   │   │   ├── BeforeTestClassMethodErroredSubscriber.php
│   │           │   │   │   ├── ExecutionStartedSubscriber.php
│   │           │   │   │   ├── Subscriber.php
│   │           │   │   │   ├── TestConsideredRiskySubscriber.php
│   │           │   │   │   ├── TestErroredSubscriber.php
│   │           │   │   │   ├── TestFailedSubscriber.php
│   │           │   │   │   ├── TestFinishedSubscriber.php
│   │           │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │           │   │   │   ├── TestPreparedSubscriber.php
│   │           │   │   │   ├── TestRunnerTriggeredDeprecationSubscriber.php
│   │           │   │   │   ├── TestRunnerTriggeredWarningSubscriber.php
│   │           │   │   │   ├── TestSkippedSubscriber.php
│   │           │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │           │   │   │   ├── TestSuiteSkippedSubscriber.php
│   │           │   │   │   ├── TestSuiteStartedSubscriber.php
│   │           │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredErrorSubscriber.php
│   │           │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpunitErrorSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpunitWarningSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │           │   │   │   └── TestTriggeredWarningSubscriber.php
│   │           │   │   └── TestResult.php
│   │           │   ├── TestSuiteLoader.php
│   │           │   ├── TestSuiteSorter.php
│   │           │   └── Version.php
│   │           ├── TextUI
│   │           │   ├── Application.php
│   │           │   ├── Command
│   │           │   │   ├── Command.php
│   │           │   │   ├── Commands
│   │           │   │   │   ├── AtLeastVersionCommand.php
│   │           │   │   │   ├── GenerateConfigurationCommand.php
│   │           │   │   │   ├── ListGroupsCommand.php
│   │           │   │   │   ├── ListTestsAsTextCommand.php
│   │           │   │   │   ├── ListTestsAsXmlCommand.php
│   │           │   │   │   ├── ListTestSuitesCommand.php
│   │           │   │   │   ├── MigrateConfigurationCommand.php
│   │           │   │   │   ├── ShowHelpCommand.php
│   │           │   │   │   ├── ShowVersionCommand.php
│   │           │   │   │   ├── VersionCheckCommand.php
│   │           │   │   │   └── WarmCodeCoverageCacheCommand.php
│   │           │   │   └── Result.php
│   │           │   ├── Configuration
│   │           │   │   ├── Builder.php
│   │           │   │   ├── Cli
│   │           │   │   │   ├── Builder.php
│   │           │   │   │   ├── Configuration.php
│   │           │   │   │   ├── Exception.php
│   │           │   │   │   └── XmlConfigurationFileFinder.php
│   │           │   │   ├── CodeCoverageFilterRegistry.php
│   │           │   │   ├── Configuration.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── CannotFindSchemaException.php
│   │           │   │   │   ├── CodeCoverageReportNotConfiguredException.php
│   │           │   │   │   ├── ConfigurationCannotBeBuiltException.php
│   │           │   │   │   ├── Exception.php
│   │           │   │   │   ├── FilterNotConfiguredException.php
│   │           │   │   │   ├── LoggingNotConfiguredException.php
│   │           │   │   │   ├── NoBaselineException.php
│   │           │   │   │   ├── NoBootstrapException.php
│   │           │   │   │   ├── NoCacheDirectoryException.php
│   │           │   │   │   ├── NoCliArgumentException.php
│   │           │   │   │   ├── NoConfigurationFileException.php
│   │           │   │   │   ├── NoCoverageCacheDirectoryException.php
│   │           │   │   │   ├── NoCustomCssFileException.php
│   │           │   │   │   ├── NoDefaultTestSuiteException.php
│   │           │   │   │   └── NoPharExtensionDirectoryException.php
│   │           │   │   ├── Merger.php
│   │           │   │   ├── PhpHandler.php
│   │           │   │   ├── Registry.php
│   │           │   │   ├── SourceFilter.php
│   │           │   │   ├── SourceMapper.php
│   │           │   │   ├── TestSuiteBuilder.php
│   │           │   │   ├── Value
│   │           │   │   │   ├── ConstantCollectionIterator.php
│   │           │   │   │   ├── ConstantCollection.php
│   │           │   │   │   ├── Constant.php
│   │           │   │   │   ├── DirectoryCollectionIterator.php
│   │           │   │   │   ├── DirectoryCollection.php
│   │           │   │   │   ├── Directory.php
│   │           │   │   │   ├── ExtensionBootstrapCollectionIterator.php
│   │           │   │   │   ├── ExtensionBootstrapCollection.php
│   │           │   │   │   ├── ExtensionBootstrap.php
│   │           │   │   │   ├── FileCollectionIterator.php
│   │           │   │   │   ├── FileCollection.php
│   │           │   │   │   ├── File.php
│   │           │   │   │   ├── FilterDirectoryCollectionIterator.php
│   │           │   │   │   ├── FilterDirectoryCollection.php
│   │           │   │   │   ├── FilterDirectory.php
│   │           │   │   │   ├── GroupCollectionIterator.php
│   │           │   │   │   ├── GroupCollection.php
│   │           │   │   │   ├── Group.php
│   │           │   │   │   ├── IniSettingCollectionIterator.php
│   │           │   │   │   ├── IniSettingCollection.php
│   │           │   │   │   ├── IniSetting.php
│   │           │   │   │   ├── Php.php
│   │           │   │   │   ├── Source.php
│   │           │   │   │   ├── TestDirectoryCollectionIterator.php
│   │           │   │   │   ├── TestDirectoryCollection.php
│   │           │   │   │   ├── TestDirectory.php
│   │           │   │   │   ├── TestFileCollectionIterator.php
│   │           │   │   │   ├── TestFileCollection.php
│   │           │   │   │   ├── TestFile.php
│   │           │   │   │   ├── TestSuiteCollectionIterator.php
│   │           │   │   │   ├── TestSuiteCollection.php
│   │           │   │   │   ├── TestSuite.php
│   │           │   │   │   ├── VariableCollectionIterator.php
│   │           │   │   │   ├── VariableCollection.php
│   │           │   │   │   └── Variable.php
│   │           │   │   └── Xml
│   │           │   │       ├── CodeCoverage
│   │           │   │       │   ├── CodeCoverage.php
│   │           │   │       │   └── Report
│   │           │   │       │       ├── Clover.php
│   │           │   │       │       ├── Cobertura.php
│   │           │   │       │       ├── Crap4j.php
│   │           │   │       │       ├── Html.php
│   │           │   │       │       ├── Php.php
│   │           │   │       │       ├── Text.php
│   │           │   │       │       └── Xml.php
│   │           │   │       ├── Configuration.php
│   │           │   │       ├── DefaultConfiguration.php
│   │           │   │       ├── Exception.php
│   │           │   │       ├── Generator.php
│   │           │   │       ├── Groups.php
│   │           │   │       ├── LoadedFromFileConfiguration.php
│   │           │   │       ├── Loader.php
│   │           │   │       ├── Logging
│   │           │   │       │   ├── Junit.php
│   │           │   │       │   ├── Logging.php
│   │           │   │       │   ├── TeamCity.php
│   │           │   │       │   └── TestDox
│   │           │   │       │       ├── Html.php
│   │           │   │       │       └── Text.php
│   │           │   │       ├── Migration
│   │           │   │       │   ├── MigrationBuilder.php
│   │           │   │       │   ├── MigrationException.php
│   │           │   │       │   ├── Migrations
│   │           │   │       │   │   ├── ConvertLogTypes.php
│   │           │   │       │   │   ├── CoverageCloverToReport.php
│   │           │   │       │   │   ├── CoverageCrap4jToReport.php
│   │           │   │       │   │   ├── CoverageHtmlToReport.php
│   │           │   │       │   │   ├── CoveragePhpToReport.php
│   │           │   │       │   │   ├── CoverageTextToReport.php
│   │           │   │       │   │   ├── CoverageXmlToReport.php
│   │           │   │       │   │   ├── IntroduceCacheDirectoryAttribute.php
│   │           │   │       │   │   ├── IntroduceCoverageElement.php
│   │           │   │       │   │   ├── LogToReportMigration.php
│   │           │   │       │   │   ├── Migration.php
│   │           │   │       │   │   ├── MoveAttributesFromFilterWhitelistToCoverage.php
│   │           │   │       │   │   ├── MoveAttributesFromRootToCoverage.php
│   │           │   │       │   │   ├── MoveCoverageDirectoriesToSource.php
│   │           │   │       │   │   ├── MoveWhitelistExcludesToCoverage.php
│   │           │   │       │   │   ├── MoveWhitelistIncludesToCoverage.php
│   │           │   │       │   │   ├── RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php
│   │           │   │       │   │   ├── RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php
│   │           │   │       │   │   ├── RemoveCacheResultFileAttribute.php
│   │           │   │       │   │   ├── RemoveCacheTokensAttribute.php
│   │           │   │       │   │   ├── RemoveConversionToExceptionsAttributes.php
│   │           │   │       │   │   ├── RemoveCoverageElementCacheDirectoryAttribute.php
│   │           │   │       │   │   ├── RemoveCoverageElementProcessUncoveredFilesAttribute.php
│   │           │   │       │   │   ├── RemoveEmptyFilter.php
│   │           │   │       │   │   ├── RemoveListeners.php
│   │           │   │       │   │   ├── RemoveLoggingElements.php
│   │           │   │       │   │   ├── RemoveLogTypes.php
│   │           │   │       │   │   ├── RemoveNoInteractionAttribute.php
│   │           │   │       │   │   ├── RemovePrinterAttributes.php
│   │           │   │       │   │   ├── RemoveTestDoxGroupsElement.php
│   │           │   │       │   │   ├── RemoveTestSuiteLoaderAttributes.php
│   │           │   │       │   │   ├── RemoveVerboseAttribute.php
│   │           │   │       │   │   ├── RenameBackupStaticAttributesAttribute.php
│   │           │   │       │   │   ├── RenameBeStrictAboutCoversAnnotationAttribute.php
│   │           │   │       │   │   ├── RenameForceCoversAnnotationAttribute.php
│   │           │   │       │   │   └── UpdateSchemaLocation.php
│   │           │   │       │   ├── Migrator.php
│   │           │   │       │   └── SnapshotNodeList.php
│   │           │   │       ├── PHPUnit.php
│   │           │   │       ├── SchemaDetector
│   │           │   │       │   ├── FailedSchemaDetectionResult.php
│   │           │   │       │   ├── SchemaDetectionResult.php
│   │           │   │       │   ├── SchemaDetector.php
│   │           │   │       │   └── SuccessfulSchemaDetectionResult.php
│   │           │   │       ├── SchemaFinder.php
│   │           │   │       ├── TestSuiteMapper.php
│   │           │   │       └── Validator
│   │           │   │           ├── ValidationResult.php
│   │           │   │           └── Validator.php
│   │           │   ├── Exception
│   │           │   │   ├── CannotOpenSocketException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── InvalidSocketException.php
│   │           │   │   ├── RuntimeException.php
│   │           │   │   ├── TestDirectoryNotFoundException.php
│   │           │   │   └── TestFileNotFoundException.php
│   │           │   ├── Help.php
│   │           │   ├── Output
│   │           │   │   ├── Default
│   │           │   │   │   ├── ProgressPrinter
│   │           │   │   │   │   ├── ProgressPrinter.php
│   │           │   │   │   │   └── Subscriber
│   │           │   │   │   │       ├── BeforeTestClassMethodErroredSubscriber.php
│   │           │   │   │   │       ├── Subscriber.php
│   │           │   │   │   │       ├── TestConsideredRiskySubscriber.php
│   │           │   │   │   │       ├── TestErroredSubscriber.php
│   │           │   │   │   │       ├── TestFailedSubscriber.php
│   │           │   │   │   │       ├── TestFinishedSubscriber.php
│   │           │   │   │   │       ├── TestMarkedIncompleteSubscriber.php
│   │           │   │   │   │       ├── TestPreparedSubscriber.php
│   │           │   │   │   │       ├── TestRunnerExecutionStartedSubscriber.php
│   │           │   │   │   │       ├── TestSkippedSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredDeprecationSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredErrorSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredNoticeSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpunitWarningSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpWarningSubscriber.php
│   │           │   │   │   │       └── TestTriggeredWarningSubscriber.php
│   │           │   │   │   ├── ResultPrinter.php
│   │           │   │   │   └── UnexpectedOutputPrinter.php
│   │           │   │   ├── Facade.php
│   │           │   │   ├── Printer
│   │           │   │   │   ├── DefaultPrinter.php
│   │           │   │   │   ├── NullPrinter.php
│   │           │   │   │   └── Printer.php
│   │           │   │   ├── SummaryPrinter.php
│   │           │   │   └── TestDox
│   │           │   │       └── ResultPrinter.php
│   │           │   ├── ShellExitCodeCalculator.php
│   │           │   ├── TestRunner.php
│   │           │   └── TestSuiteFilterProcessor.php
│   │           └── Util
│   │               ├── Cloner.php
│   │               ├── Color.php
│   │               ├── Exception
│   │               │   ├── Exception.php
│   │               │   ├── InvalidDirectoryException.php
│   │               │   ├── InvalidJsonException.php
│   │               │   ├── InvalidVersionOperatorException.php
│   │               │   ├── PhpProcessException.php
│   │               │   └── XmlException.php
│   │               ├── ExcludeList.php
│   │               ├── Exporter.php
│   │               ├── Filesystem.php
│   │               ├── Filter.php
│   │               ├── GlobalState.php
│   │               ├── Http
│   │               │   ├── Downloader.php
│   │               │   └── PhpDownloader.php
│   │               ├── Json.php
│   │               ├── PHP
│   │               │   ├── AbstractPhpProcess.php
│   │               │   ├── DefaultPhpProcess.php
│   │               │   └── Template
│   │               │       ├── PhptTestCase.tpl
│   │               │       ├── TestCaseClass.tpl
│   │               │       └── TestCaseMethod.tpl
│   │               ├── Reflection.php
│   │               ├── Test.php
│   │               ├── ThrowableToStringMapper.php
│   │               ├── VersionComparisonOperator.php
│   │               └── Xml
│   │                   ├── Loader.php
│   │                   └── Xml.php
│   ├── psr
│   │   ├── container
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── ContainerExceptionInterface.php
│   │   │       ├── ContainerInterface.php
│   │   │       └── NotFoundExceptionInterface.php
│   │   ├── http-client
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── ClientExceptionInterface.php
│   │   │       ├── ClientInterface.php
│   │   │       ├── NetworkExceptionInterface.php
│   │   │       └── RequestExceptionInterface.php
│   │   ├── http-factory
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── RequestFactoryInterface.php
│   │   │       ├── ResponseFactoryInterface.php
│   │   │       ├── ServerRequestFactoryInterface.php
│   │   │       ├── StreamFactoryInterface.php
│   │   │       ├── UploadedFileFactoryInterface.php
│   │   │       └── UriFactoryInterface.php
│   │   ├── http-message
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── docs
│   │   │   │   ├── PSR7-Interfaces.md
│   │   │   │   └── PSR7-Usage.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── MessageInterface.php
│   │   │       ├── RequestInterface.php
│   │   │       ├── ResponseInterface.php
│   │   │       ├── ServerRequestInterface.php
│   │   │       ├── StreamInterface.php
│   │   │       ├── UploadedFileInterface.php
│   │   │       └── UriInterface.php
│   │   └── log
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── AbstractLogger.php
│   │           ├── InvalidArgumentException.php
│   │           ├── LoggerAwareInterface.php
│   │           ├── LoggerAwareTrait.php
│   │           ├── LoggerInterface.php
│   │           ├── LoggerTrait.php
│   │           ├── LogLevel.php
│   │           └── NullLogger.php
│   ├── ralouphie
│   │   └── getallheaders
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── getallheaders.php
│   ├── sabberworm
│   │   └── php-css-parser
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── Comment
│   │           │   ├── Commentable.php
│   │           │   └── Comment.php
│   │           ├── CSSList
│   │           │   ├── AtRuleBlockList.php
│   │           │   ├── CSSBlockList.php
│   │           │   ├── CSSList.php
│   │           │   ├── Document.php
│   │           │   └── KeyFrame.php
│   │           ├── OutputFormat.php
│   │           ├── OutputFormatter.php
│   │           ├── Parser.php
│   │           ├── Parsing
│   │           │   ├── Anchor.php
│   │           │   ├── OutputException.php
│   │           │   ├── ParserState.php
│   │           │   ├── SourceException.php
│   │           │   ├── UnexpectedEOFException.php
│   │           │   └── UnexpectedTokenException.php
│   │           ├── Property
│   │           │   ├── AtRule.php
│   │           │   ├── Charset.php
│   │           │   ├── CSSNamespace.php
│   │           │   ├── Import.php
│   │           │   ├── KeyframeSelector.php
│   │           │   └── Selector.php
│   │           ├── Renderable.php
│   │           ├── Rule
│   │           │   └── Rule.php
│   │           ├── RuleSet
│   │           │   ├── AtRuleSet.php
│   │           │   ├── DeclarationBlock.php
│   │           │   └── RuleSet.php
│   │           ├── Settings.php
│   │           └── Value
│   │               ├── CalcFunction.php
│   │               ├── CalcRuleValueList.php
│   │               ├── Color.php
│   │               ├── CSSFunction.php
│   │               ├── CSSString.php
│   │               ├── LineName.php
│   │               ├── PrimitiveValue.php
│   │               ├── RuleValueList.php
│   │               ├── Size.php
│   │               ├── URL.php
│   │               ├── ValueList.php
│   │               └── Value.php
│   ├── sebastian
│   │   ├── cli-parser
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exceptions
│   │   │       │   ├── AmbiguousOptionException.php
│   │   │       │   ├── Exception.php
│   │   │       │   ├── OptionDoesNotAllowArgumentException.php
│   │   │       │   ├── RequiredOptionArgumentMissingException.php
│   │   │       │   └── UnknownOptionException.php
│   │   │       └── Parser.php
│   │   ├── code-unit
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── ClassMethodUnit.php
│   │   │       ├── ClassUnit.php
│   │   │       ├── CodeUnitCollectionIterator.php
│   │   │       ├── CodeUnitCollection.php
│   │   │       ├── CodeUnit.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── InvalidCodeUnitException.php
│   │   │       │   ├── NoTraitException.php
│   │   │       │   └── ReflectionException.php
│   │   │       ├── FileUnit.php
│   │   │       ├── FunctionUnit.php
│   │   │       ├── InterfaceMethodUnit.php
│   │   │       ├── InterfaceUnit.php
│   │   │       ├── Mapper.php
│   │   │       ├── TraitMethodUnit.php
│   │   │       └── TraitUnit.php
│   │   ├── code-unit-reverse-lookup
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Wizard.php
│   │   ├── comparator
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── ArrayComparator.php
│   │   │       ├── Comparator.php
│   │   │       ├── ComparisonFailure.php
│   │   │       ├── DateTimeComparator.php
│   │   │       ├── DOMNodeComparator.php
│   │   │       ├── ExceptionComparator.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── Factory.php
│   │   │       ├── MockObjectComparator.php
│   │   │       ├── NumericComparator.php
│   │   │       ├── ObjectComparator.php
│   │   │       ├── ResourceComparator.php
│   │   │       ├── ScalarComparator.php
│   │   │       ├── SplObjectStorageComparator.php
│   │   │       └── TypeComparator.php
│   │   ├── complexity
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Calculator.php
│   │   │       ├── Complexity
│   │   │       │   ├── ComplexityCollectionIterator.php
│   │   │       │   ├── ComplexityCollection.php
│   │   │       │   └── Complexity.php
│   │   │       ├── Exception
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       └── Visitor
│   │   │           ├── ComplexityCalculatingVisitor.php
│   │   │           └── CyclomaticComplexityCalculatingVisitor.php
│   │   ├── diff
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Chunk.php
│   │   │       ├── Differ.php
│   │   │       ├── Diff.php
│   │   │       ├── Exception
│   │   │       │   ├── ConfigurationException.php
│   │   │       │   ├── Exception.php
│   │   │       │   └── InvalidArgumentException.php
│   │   │       ├── Line.php
│   │   │       ├── LongestCommonSubsequenceCalculator.php
│   │   │       ├── MemoryEfficientLongestCommonSubsequenceCalculator.php
│   │   │       ├── Output
│   │   │       │   ├── AbstractChunkOutputBuilder.php
│   │   │       │   ├── DiffOnlyOutputBuilder.php
│   │   │       │   ├── DiffOutputBuilderInterface.php
│   │   │       │   ├── StrictUnifiedDiffOutputBuilder.php
│   │   │       │   └── UnifiedDiffOutputBuilder.php
│   │   │       ├── Parser.php
│   │   │       └── TimeEfficientLongestCommonSubsequenceCalculator.php
│   │   ├── environment
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Console.php
│   │   │       └── Runtime.php
│   │   ├── exporter
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Exporter.php
│   │   ├── global-state
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── CodeExporter.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── ExcludeList.php
│   │   │       ├── Restorer.php
│   │   │       └── Snapshot.php
│   │   ├── lines-of-code
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Counter.php
│   │   │       ├── Exception
│   │   │       │   ├── Exception.php
│   │   │       │   ├── IllogicalValuesException.php
│   │   │       │   ├── NegativeValueException.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── LineCountingVisitor.php
│   │   │       └── LinesOfCode.php
│   │   ├── object-enumerator
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Enumerator.php
│   │   ├── object-reflector
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── ObjectReflector.php
│   │   ├── recursion-context
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Context.php
│   │   ├── type
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── infection.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exception
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── Parameter.php
│   │   │       ├── ReflectionMapper.php
│   │   │       ├── type
│   │   │       │   ├── CallableType.php
│   │   │       │   ├── FalseType.php
│   │   │       │   ├── GenericObjectType.php
│   │   │       │   ├── IntersectionType.php
│   │   │       │   ├── IterableType.php
│   │   │       │   ├── MixedType.php
│   │   │       │   ├── NeverType.php
│   │   │       │   ├── NullType.php
│   │   │       │   ├── ObjectType.php
│   │   │       │   ├── SimpleType.php
│   │   │       │   ├── StaticType.php
│   │   │       │   ├── TrueType.php
│   │   │       │   ├── Type.php
│   │   │       │   ├── UnionType.php
│   │   │       │   ├── UnknownType.php
│   │   │       │   └── VoidType.php
│   │   │       └── TypeName.php
│   │   └── version
│   │       ├── ChangeLog.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── SECURITY.md
│   │       └── src
│   │           └── Version.php
│   ├── symfony
│   │   └── deprecation-contracts
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── function.php
│   │       ├── LICENSE
│   │       └── README.md
│   └── theseer
│       └── tokenizer
│           ├── CHANGELOG.md
│           ├── composer.json
│           ├── composer.lock
│           ├── LICENSE
│           ├── README.md
│           └── src
│               ├── Exception.php
│               ├── NamespaceUriException.php
│               ├── NamespaceUri.php
│               ├── TokenCollectionException.php
│               ├── TokenCollection.php
│               ├── Tokenizer.php
│               ├── Token.php
│               └── XMLSerializer.php
└── writable
    ├── cache
    │   └── index.html
    ├── debugbar
    │   ├── debugbar_1751680725.080818.json
    │   ├── debugbar_1751680728.034179.json
    │   ├── debugbar_1751680767.788225.json
    │   ├── debugbar_1751680773.353247.json
    │   ├── debugbar_1751680773.717404.json
    │   ├── debugbar_1751680777.610462.json
    │   ├── debugbar_1751680795.627851.json
    │   ├── debugbar_1751680812.011010.json
    │   ├── debugbar_1751680814.304632.json
    │   ├── debugbar_1751680829.698243.json
    │   ├── debugbar_1751680830.046576.json
    │   ├── debugbar_1751680832.976717.json
    │   ├── debugbar_1751681385.851113.json
    │   ├── debugbar_1751681759.386447.json
    │   ├── debugbar_1751681976.963605.json
    │   ├── debugbar_1751681982.913017.json
    │   ├── debugbar_1751682123.890055.json
    │   ├── debugbar_1751682196.714788.json
    │   ├── debugbar_1751685238.644258.json
    │   └── debugbar_1751685238.679218.json
    ├── index.html
    ├── logs
    │   ├── index.html
    │   ├── log-2025-04-17.log
    │   ├── log-2025-04-18.log
    │   ├── log-2025-04-19.log
    │   ├── log-2025-04-20.log
    │   ├── log-2025-04-22.log
    │   ├── log-2025-04-23.log
    │   ├── log-2025-06-08.log
    │   ├── log-2025-06-09.log
    │   ├── log-2025-06-24.log
    │   ├── log-2025-06-25.log
    │   ├── log-2025-07-04.log
    │   └── log-2025-07-05.log
    ├── session
    │   ├── ci_session007cd5a027a27d2387f8c99eee719169
    │   ├── ci_session02d94828c9ff586cd4be3cf79382e014
    │   ├── ci_session0333a544f7a0d9a756b65a5c3015cfd5
    │   ├── ci_session0b2e6d16eb17ffc2858ff05a3e774027
    │   ├── ci_session0f15024f24ffc51c80fe044f35a5b3d6
    │   ├── ci_session13c018cf5da69e494fee649ab1760b61
    │   ├── ci_session15ea418b63cee5a0bc2b69559974ee5a
    │   ├── ci_session1732045705e1949fc6411b9f33000aba
    │   ├── ci_session1798054250af8e064e227af2f8c6533b
    │   ├── ci_session18c2a5c594901860401b11c84b9bbe32
    │   ├── ci_session1f52fa54d233aeb6031058bc2a8ed51d
    │   ├── ci_session221276e6a4998893a22aa9e21e5a7caf
    │   ├── ci_session2221cba8195feb2e61c6349d5683dc0c
    │   ├── ci_session292f9738e3887dc02ff6a1cf3d3aab25
    │   ├── ci_session2db6aa91273968e15b33215336262994
    │   ├── ci_session338c5de2c5f3936da049dae6b442d17c
    │   ├── ci_session359d1dbf6d99069f5a22774e9b515ee6
    │   ├── ci_session37e161da714b23643f5cfda6dad52fd8
    │   ├── ci_session3947342089589089dc19df14f2786dbf
    │   ├── ci_session3b102239aa5c60590e89f750b6f50c37
    │   ├── ci_session412c23998fc51ded31c69c43c978dc26
    │   ├── ci_session45dadd649529b9f1518fab5a0ecc9cbe
    │   ├── ci_session479035c379a8c06b55e7c2cbd02a741f
    │   ├── ci_session54ff673792b0ec3a77221e8583ce3e11
    │   ├── ci_session5c1fcd1e7515b6e10cfa6b13ae3b6db2
    │   ├── ci_session5cae35066c3244055e66b460a0c45537
    │   ├── ci_session6431e871dbb129e863f98dcde66fadb2
    │   ├── ci_session6a1b88fa024c73bcfd9ad80da506b5af
    │   ├── ci_session75071c002b42afd31a7d5897d11be530
    │   ├── ci_session78526eacbc13ccb78c29a24943d6a0df
    │   ├── ci_session7dc6e67afef11905006d59af2b774311
    │   ├── ci_session92a5427f1e08cef3e5698bbd485b71a8
    │   ├── ci_session9e7bddbc5ba59dd4a46cc0ecda5f252b
    │   ├── ci_session9ecc734d7e633f4ddfc247410ea78117
    │   ├── ci_sessionaad12752c5e0274731f9e7367bc20d22
    │   ├── ci_sessionb630c7847b635c05580774c2b15d69f6
    │   ├── ci_sessionb7c921e01e8a508236e345f6ac698a57
    │   ├── ci_sessionb81765e6e1f326dc396c02f2fb434561
    │   ├── ci_sessionb88720b824acbc312bc209aacc0995fa
    │   ├── ci_sessionb9241367adef7c3e4102d714091e00d1
    │   ├── ci_sessionb950f2ce741f20947c80876d4e2b6cc1
    │   ├── ci_sessionbc2d0bacba2795b329c327da6a5dc5d1
    │   ├── ci_sessionc0b0b0262f2e70a768fc92b3845231aa
    │   ├── ci_sessionc1948eb9f84e5a8bebfe80029c7959e6
    │   ├── ci_sessionc5fb7a9a2f8d21325d0f4b5ade05e371
    │   ├── ci_sessiond63ed485b8bde61895789da32a6aaa91
    │   ├── ci_sessiond7081a18f63cc46dbffe87d5a5e6a130
    │   ├── ci_sessiond80af3fe23d5631dc9caa4e2319df2ea
    │   ├── ci_sessiondf56a8a87b55d0480cd46420c8532a4f
    │   ├── ci_sessione0795174a3cf77e8a495c2146ce0996f
    │   ├── ci_sessione97d6ffe6790d633296ac1472de7e857
    │   ├── ci_sessione9c8d7e147de04384fd3ed9df22f7d66
    │   ├── ci_sessioneead196b782960175d6c8dde5c0e61eb
    │   ├── ci_sessionefc91a4eb61070232f2c0cdf1d076db6
    │   ├── ci_sessionf032e0ef9e4e4aa53b30a19c40f56564
    │   ├── ci_sessionf82552dca4129aeeba4900c1752799f6
    │   ├── ci_sessionf922f4ac861c9b51a2db22321d8fcc83
    │   ├── ci_sessionfa267c7f53275a694fb38ace4e25b0d2
    │   ├── ci_sessionfeea167caa52178eccaae9bd4cd625bb
    │   ├── ci_sessionff16683abdfaf93d83ca6d3512295333
    │   ├── ci_sessionff81acd63ea7315756f529d6b193826a
    │   └── index.html
    └── uploads
        └── index.html

724 directories, 4113 files
