# Product Requirements Document (PRD)
**Proyek:** Website Sistem Informasi & Aspirasi BLM (Badan Legislatif Mahasiswa) Fakultas Ilmu Komputer
**Status:** Draf 
**Tanggal:** 25 Agustus 2026

## 1. Pendahuluan
### 1.1 Tujuan
Tujuan dari pembuatan website ini adalah untuk menyediakan platform digital resmi bagi Badan Legislatif Mahasiswa (BLM) Fakultas Ilmu Komputer. Website ini berfungsi sebagai media informasi (Company Profile), transparansi kinerja eksekutif (Pemantauan Proker BEM), serta wadah interaktif untuk menampung dan memantau aspirasi mahasiswa.

### 1.2 Latar Belakang
Mahasiswa membutuhkan saluran yang mudah diakses dan transparan untuk menyampaikan aspirasi dan memantau perkembangan program kerja BEM. Selain itu, BLM membutuhkan profil publik yang profesional untuk memperkenalkan organisasi kepada khalayak umum serta sistem internal (backend) yang mumpuni untuk fungsi pengawasan (audit) terhadap kinerja BEM.

### 1.3 Ruang Lingkup
Fokus utama pengembangan fase ini (MVP - Minimum Viable Product) mencakup:
- Halaman Company Profile BLM (Publik).
- Halaman Pemantauan Program Kerja BEM (Publik - Visualisasi Data).
- Sistem Autentikasi Pengguna (Login/Register untuk Mahasiswa, BEM, dan BLM).
- Fitur Pengiriman & Pelacakan Aspirasi (Khusus Mahasiswa).
- Dashboard BLM (Pengelolaan Profil, Tindak Lanjut Aspirasi, & Audit Dokumen BEM).
- Dashboard BEM (Pembaruan Status Proker, Upload Proposal/LPJ, & Laporan Anggaran).

---

## 2. Target Pengguna (User Personas)
Sistem ini dirancang untuk 4 (empat) aktor utama:
1. **Pengunjung Umum (Guest):** Siapa saja yang mengakses website tanpa login. Dapat melihat informasi umum organisasi dan visualisasi ringkas program kerja BEM.
2. **Mahasiswa (Logged-in User):** Mahasiswa Fakultas Ilmu Komputer. Dapat mengirimkan aspirasi dan memantau status aspirasi yang mereka ajukan.
3. **BEM (Badan Eksekutif Mahasiswa):** Aktor eksekutor yang memiliki akses untuk membuat data Program Kerja, memperbarui status pelaksanaannya, melaporkan penggunaan anggaran, dan mengunggah dokumen (Proposal, LPJ, Kuitansi).
4. **BLM (Badan Legislatif Mahasiswa / Admin):** Aktor legislator dan auditor. Mengelola konten Company Profile, memproses aspirasi yang masuk, serta memiliki akses audit penuh ke dokumen keuangan dan kegiatan BEM untuk memberikan evaluasi.

---

## 3. Persyaratan Fungsional (Functional Requirements)

### 3.1 Halaman Company Profile BLM (Publik)
- **F-01:** Sistem menampilkan identitas organisasi (visi, misi, struktur, tugas dan tanggung jawab).
- **F-02:** Sistem menampilkan kontak dan tautan media sosial resmi BLM.
- **F-03:** Dapat diakses oleh semua pengguna tanpa perlu login.

### 3.2 Halaman Pemantauan Program Kerja BEM (Tampilan Publik)
*Fokus pada visualisasi data yang mudah dicerna (analitik dan dashboard interaktif).*
- **F-04 (Status Visual):** Menampilkan indikator status visual sederhana untuk tiap proker (contoh: *Belum Dimulai*, *Sedang Berjalan*, *Selesai*).
- **F-05 (Ringkasan Anggaran):** Sistem menampilkan diagram interaktif (seperti *Pie Chart* atau *Bar Chart*) yang mengilustrasikan persentase penyerapan dana (Misal: "60% Dana Terserap untuk Proker A").
- **F-06 (Berita Acara Singkat):** Sistem menampilkan ringkasan kegiatan yang sudah terlaksana sebagai bentuk transparansi, **tanpa** melampirkan dokumen LPJ utuh.

### 3.3 Sistem Autentikasi
- **F-07:** Sistem menyediakan fitur registrasi dan login. Terdapat pemisahan *Role-Based Access Control* (Mahasiswa, BEM, BLM).
- **F-08:** Sistem menyediakan fitur *Forgot Password*.

### 3.4 Fitur Kirim & Pantau Aspirasi (Mahasiswa)
- **F-09:** Form pengajuan aspirasi (Judul, Kategori, Deskripsi, Lampiran, opsi "Anonim").
- **F-10:** Dashboard khusus mahasiswa untuk melacak riwayat aspirasi (*Terkirim*, *Sedang Ditinjau*, *Selesai*) beserta catatan balasan dari BLM.

### 3.5 Dashboard BEM (Tampilan Eksekutif / Pelaksana)
- **F-11 (Pembaruan Proker):** BEM adalah pihak yang berhak menambah, mengedit, dan memperbarui status Program Kerja mereka sendiri ke dalam sistem.
- **F-12 (Laporan Anggaran):** BEM dapat menginput data numerik terkait anggaran yang diterima dan anggaran yang sudah terserap (yang akan diubah sistem menjadi grafik di halaman publik).
- **F-13 (Upload Dokumen):** BEM dapat mengunggah dokumen fisik dalam format digital, termasuk PDF Proposal, PDF LPJ (Laporan Pertanggungjawaban), dan file bukti kuitansi mentah.

### 3.6 Dashboard BLM (Tampilan Legislator / Auditor)
- **F-14 (Manajemen Profil & Aspirasi):** BLM dapat memperbarui konten profil web dan memberikan tindak lanjut/balasan terhadap aspirasi mahasiswa.
- **F-15 (Akses Dokumen Utuh):** Sebagai auditor, BLM memiliki akses penuh untuk melihat, memeriksa, dan mengunduh (*download*) seluruh dokumen PDF Proposal, LPJ, serta bukti kuitansi mentah yang diunggah oleh BEM.
- **F-16 (Log Evaluasi):** Sistem menyediakan fitur "Kolom Evaluasi/Catatan Revisi" khusus pada setiap proker. Catatan ini ditulis oleh BLM dan akan langsung terkirim/terbaca di sistem dashboard BEM.

---

## 4. Persyaratan Non-Fungsional (Non-Functional Requirements)
- **NF-01 (Kinerja):** Waktu muat (load time) setiap halaman maksimal 3 detik. Pemrosesan grafik analitik harus ringan di sisi klien.
- **NF-02 (Responsivitas):** Desain UI/UX bersifat *Mobile-first*. Diagram (Chart) harus tetap dapat dibaca/di-tap ukurannya pada layar kecil.
- **NF-03 (Keamanan & Privasi Dokumen):** Akses ke tautan (*direct link*) dokumen LPJ dan Kuitansi BEM dibatasi ketat dan divalidasi di sisi server (hanya BLM dan BEM yang berhak yang bisa mengakses). 
- **NF-04 (Usability):** Antarmuka dashboard BLM dan BEM harus intuitif karena akan digunakan untuk mengelola data operasional organisasi sehari-hari.

---

## 5. Alur Kerja Pemantauan & Audit Proker (BEM -> Publik & BLM)
1. **Input Data (BEM):** BEM login dan membuat data Proker Baru, mengatur budget awal.
2. **Pelaksanaan (BEM):** Seiring berjalannya proker, BEM memperbarui status dari "Belum Dimulai" menjadi "Sedang Berjalan", menginput dana yang terserap, dan mengunggah kuitansi sementara.
3. **Tampilan Publik:** Data status dan penyerapan dana (dalam persentase chart) langsung otomatis diperbarui dan dapat dilihat oleh seluruh Mahasiswa FIK.
4. **Penyelesaian (BEM):** Proker selesai, BEM mengunggah Berita Acara Singkat (untuk publik) dan LPJ utuh (untuk internal BLM).
5. **Audit (BLM):** BLM login, mengunduh LPJ utuh dan kuitansi mentah. Jika terdapat ketidaksesuaian, BLM menulis di *Log Evaluasi*.
6. **Revisi (BEM):** BEM menerima notifikasi log evaluasi, melakukan revisi, dan mengunggah ulang dokumen yang sudah diperbaiki.

---

## 6. Pertimbangan di Masa Depan 
- **Notifikasi Terintegrasi:** Mengirimkan pesan melalui Email atau WhatsApp saat ada status update, log evaluasi baru dari BLM ke BEM, dan update aspirasi ke Mahasiswa.
- **Sistem Dukungan (Upvote) Aspirasi:** Menjadikan daftar aspirasi dapat dilihat secara publik untuk "Upvote/Dukungan".
- **Export Laporan PDF/Excel:** Fitur bagi BLM untuk mengekspor rekapitulasi audit seluruh Proker BEM dalam satu tahun kepengurusan secara otomatis.
