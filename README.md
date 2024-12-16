# SenseControl - Sistem Pemantauan dan Kontrol Ruang dengan IoT

SenseControl adalah sebuah sistem berbasis Internet of Things (IoT) yang dirancang untuk memantau dan mengontrol kondisi ruang secara real-time. Sistem ini menggunakan **NodeMCU** sebagai mikrokontroler utama, serta protokol komunikasi **MQTT** untuk memastikan pengiriman data yang cepat dan efisien. 

Dengan SenseControl, pengguna dapat memantau parameter penting seperti suhu, kelembaban, atau status perangkat elektronik di dalam ruangan, serta mengontrol perangkat tersebut dari mana saja melalui koneksi internet.

---

## Fitur Utama

1. **Pemantauan Real-Time**  
   - Menampilkan data sensor seperti suhu, kelembaban, dan status perangkat dalam waktu nyata.

2. **Kontrol Perangkat**  
   - Menghidupkan atau mematikan perangkat elektronik seperti lampu melalui aplikasi berbasis web.

3. **Notifikasi Otomatis**  
   - Memberikan peringatan jika terjadi kondisi tertentu, seperti suhu terlalu tinggi atau kelembaban terlalu rendah.

4. **Berbasis MQTT**  
   - Memanfaatkan protokol MQTT untuk komunikasi cepat dan ringan antar perangkat IoT.

5. **Mudah Dikonfigurasi**  
   - Sistem mendukung pengaturan sederhana untuk menyesuaikan dengan kebutuhan pengguna.
     
6. **Penyimpanan database**  
   - Data tersimpan pada database.

---

## Komponen Sistem

### 1. Perangkat Keras
- **NodeMCU (ESP8266/ESP32)**: Mikrokontroler utama untuk memproses data sensor dan mengontrol perangkat.
- **Sensor DHT11**: Untuk membaca suhu dan kelembaban.
- **LCD**: Untuk menampilkan data suhu dan kelembaban.
- **LED**: Sebagai Indikator suhu ruangan.

### 2. Perangkat Lunak
- **Platform MQTT**: Digunakan untuk komunikasi antar perangkat (contoh: Mosquitto, HiveMQ).
- **Aplikasi Web**: Untuk antarmuka pengguna dalam memantau dan mengontrol sistem.
- **Firmware NodeMCU**: Program berbasis Arduino IDE atau PlatformIO untuk NodeMCU.
- **Mysql**: Sebagai database sistem.

---

## Cara Kerja

1. Sensor membaca kondisi lingkungan di dalam ruangan.
2. Data dikirim oleh NodeMCU melalui protokol MQTT ke server broker.
3. Data tersimpan ke dalam database setiap 10 detik
4. Aplikasi web menerima data dari server broker dan menampilkannya secara real-time.
5. Pengguna dapat mengirim perintah melalui aplikasi untuk mengontrol perangkat elektronik di ruangan.
6. Perintah diteruskan oleh server broker ke NodeMCU untuk mengaktifkan atau menonaktifkan perangkat.

---

## Teknologi yang Digunakan

- **NodeMCU (ESP8266/ESP32)** untuk mikrokontroler.
- **MQTT (Message Queuing Telemetry Transport)** sebagai protokol komunikasi.
- **HTML, CSS, JavaScript** untuk antarmuka aplikasi web.
- **PHP** (opsional) untuk backend aplikasi.

---

## Manfaat Sistem

- **Efisiensi Energi**: Memastikan perangkat elektronik hanya menyala ketika diperlukan.
- **Kemudahan Akses**: Kontrol perangkat dari mana saja menggunakan koneksi internet.
- **Keamanan**: Memberikan notifikasi kondisi abnormal di ruangan.

---

## Pengembang

**Nama Pengembang**: Aditya Rifki Yuliatama  

Sistem ini dikembangkan untuk memenuhi tugas akhir praktikum IOT serta mendukung implementasi teknologi IoT dalam kehidupan sehari-hari, dengan fokus pada kenyamanan, efisiensi, dan kemudahan kontrol.

---

## Lisensi

Sistem ini dirilis di bawah lisensi **MIT License**. Anda bebas menggunakan, memodifikasi, dan mendistribusikan sistem ini dengan tetap mencantumkan kredit kepada pengembang.

---
