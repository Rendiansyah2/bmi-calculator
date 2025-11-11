<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI - Status Gizi Dewasa</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            width: 100%;
        }

        .card h2 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 1.8em;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }

        .info-section {
            line-height: 1.8;
            color: #333;
        }

        .info-section h3 {
            color: #764ba2;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .info-section p {
            margin-bottom: 15px;
        }

        .info-section ul {
            margin-left: 20px;
            line-height: 1.8;
        }

        .info-section ul li {
            margin-bottom: 8px;
        }

        .formula {
            background: #f0f4ff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }

        .formula-text {
            font-size: 1.3em;
            font-weight: bold;
            color: #667eea;
        }

        .kategori-list {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .kategori-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 8px;
            font-weight: 500;
        }

        .kategori-kurus-berat {
            background: #e3f2fd;
            color: #1976d2;
            border-left: 4px solid #1976d2;
        }

        .kategori-kurus-ringan {
            background: #fff3e0;
            color: #f57c00;
            border-left: 4px solid #f57c00;
        }

        .kategori-normal {
            background: #e8f5e9;
            color: #388e3c;
            border-left: 4px solid #388e3c;
        }

        .kategori-gemuk-ringan {
            background: #fff9c4;
            color: #f9a825;
            border-left: 4px solid #f9a825;
        }

        .kategori-gemuk-berat {
            background: #ffebee;
            color: #d32f2f;
            border-left: 4px solid #d32f2f;
        }

        .calculator-section {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 1.1em;
        }

        .input-wrapper {
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1.1em;
            transition: all 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .unit {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-weight: 600;
        }

        .btn-calculate {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-calculate:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-calculate:active {
            transform: translateY(0);
        }

        .result-section {
            margin-top: 30px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 10px;
            display: none;
        }

        .result-section.show {
            display: block;
            animation: slideIn 0.3s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .result-bmi {
            text-align: center;
            margin-bottom: 20px;
        }

        .bmi-value {
            font-size: 3em;
            font-weight: bold;
            color: #667eea;
            margin: 10px 0;
        }

        .bmi-category {
            font-size: 1.5em;
            font-weight: 600;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
        }

        .bmi-description {
            margin-top: 20px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 0;
            }

            .header h1 {
                font-size: 1.8em;
            }

            .header p {
                font-size: 0.95em;
            }

            .card {
                padding: 20px;
                border-radius: 12px;
            }

            .card h2 {
                font-size: 1.4em;
            }

            .info-section h3 {
                font-size: 1.1em;
            }

            .formula-text {
                font-size: 1.1em;
            }

            .kategori-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }

            .kategori-item strong {
                align-self: flex-end;
            }

            .bmi-value {
                font-size: 2.5em;
            }

            .bmi-category {
                font-size: 1.2em;
                padding: 12px;
            }

            .footer {
                font-size: 0.9em;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.5em;
            }

            .header p {
                font-size: 0.9em;
            }

            .card {
                padding: 15px;
            }

            .card h2 {
                font-size: 1.2em;
            }

            .form-group input {
                padding: 12px;
                font-size: 1em;
            }

            .btn-calculate {
                padding: 15px;
                font-size: 1.1em;
            }

            .bmi-value {
                font-size: 2em;
            }
        }

        .footer {
            text-align: center;
            color: white;
            margin-top: 30px;
            padding: 20px;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <p style="font-size: 0.9em; opacity: 0.8; margin-bottom: 10px;">Dibuat oleh: <strong>Salma Kafa Rikha Lada</strong></p>
            <h1>🏥 Kalkulator Status Gizi</h1>
            <p>Hitung Indeks Massa Tubuh (IMT/BMI) untuk Usia Dewasa</p>
        </div>

        <div class="main-content">
            <!-- Pengertian Status Gizi -->
            <div class="card">
                <h2>🌟 Pengertian Status Gizi</h2>
                <div class="info-section">
                    <p>
                        <strong>Status Gizi</strong> adalah keadaan kesehatan tubuh seseorang yang diakibatkan oleh 
                        konsumsi, penyerapan, dan penggunaan zat gizi dari makanan yang dikonsumsi. Status gizi yang 
                        baik merupakan salah satu indikator kesehatan yang optimal.
                    </p>
                    <p>
                        Status gizi dapat diukur dengan berbagai cara, salah satunya adalah menggunakan 
                        <strong>Indeks Massa Tubuh (IMT)</strong> atau <strong>Body Mass Index (BMI)</strong>. 
                        Metode ini paling umum digunakan karena sederhana, murah, dan dapat dilakukan sendiri di rumah.
                    </p>
                    <p>
                        <strong>Mengapa Status Gizi Penting?</strong>
                    </p>
                    <ul style="margin-left: 20px; line-height: 1.8;">
                        <li>Mengetahui apakah berat badan sudah ideal atau perlu penyesuaian</li>
                        <li>Sebagai panduan untuk menjalani pola hidup sehat</li>
                        <li>Mencegah masalah kesehatan akibat kekurangan atau kelebihan gizi</li>
                    </ul>
                </div>
            </div>

            <!-- Informasi Section -->
            <div class="card info-section">
                <h2>📊 Tentang IMT (BMI)</h2>
                
                <h3>Apa itu IMT?</h3>
                <p>
                    <strong>Indeks Massa Tubuh (IMT)</strong> atau <strong>Body Mass Index (BMI)</strong> 
                    adalah ukuran standar internasional untuk menentukan status gizi seseorang berdasarkan 
                    perbandingan antara berat badan dan tinggi badan.
                </p>

                <h3>Rumus Perhitungan</h3>
                <div class="formula">
                    <div class="formula-text">
                        IMT = Berat Badan (kg) / Tinggi Badan² (m)
                    </div>
                </div>

                <h3>Klasifikasi Nasional (Indonesia)</h3>
                <div class="kategori-list">
                    <div class="kategori-item kategori-kurus-berat">
                        <span>Kurus (tingkat berat)</span>
                        <strong>&lt; 17,0</strong>
                    </div>
                    <div class="kategori-item kategori-kurus-ringan">
                        <span>Kurus (tingkat ringan)</span>
                        <strong>17,0 - 18,4</strong>
                    </div>
                    <div class="kategori-item kategori-normal">
                        <span>Normal</span>
                        <strong>18,5 - 25,0</strong>
                    </div>
                    <div class="kategori-item kategori-gemuk-ringan">
                        <span>Gemuk (tingkat ringan)</span>
                        <strong>25,1 - 27,0</strong>
                    </div>
                    <div class="kategori-item kategori-gemuk-berat">
                        <span>Gemuk (tingkat berat)</span>
                        <strong>&gt; 27,0</strong>
                    </div>
                </div>

                <p style="margin-top: 20px; font-size: 0.9em; color: #666;">
                    <strong>Catatan:</strong> Klasifikasi ini khusus untuk orang dewasa (usia 18 tahun ke atas) 
                    berdasarkan standar Kementerian Kesehatan Republik Indonesia.
                </p>
            </div>

            <!-- Calculator Section -->
            <div class="card calculator-section">
                <h2>🧮 Hitung IMT Anda</h2>
                
                <form id="bmiForm">
                    <div class="form-group">
                        <label for="weight">Berat Badan</label>
                        <div class="input-wrapper">
                            <input type="number" id="weight" step="0.1" min="20" max="300" placeholder="Masukkan berat badan" required>
                            <span class="unit">kg</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="height">Tinggi Badan</label>
                        <div class="input-wrapper">
                            <input type="number" id="height" step="0.01" min="100" max="250" placeholder="Masukkan tinggi badan" required>
                            <span class="unit">cm</span>
                        </div>
                    </div>

                    <button type="submit" class="btn-calculate">
                        Hitung IMT
                    </button>
                </form>

                <div id="resultSection" class="result-section">
                    <div class="result-bmi">
                        <div>IMT Anda</div>
                        <div class="bmi-value" id="bmiValue">0</div>
                        <div class="bmi-category" id="bmiCategory"></div>
                    </div>
                    <div class="bmi-description" id="bmiDescription"></div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>💚 Jaga kesehatan Anda dengan pola hidup sehat dan konsultasi rutin dengan tenaga kesehatan</p>
            <p style="margin-top: 15px; font-size: 0.95em; opacity: 0.85;">Dikembangkan oleh: <strong>Salma Kafa Rikha Lada</strong></p>
        </div>
    </div>

    <script>
        document.getElementById('bmiForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ambil nilai input
            const weight = parseFloat(document.getElementById('weight').value);
            const heightCm = parseFloat(document.getElementById('height').value);
            
            // Validasi input
            if (isNaN(weight) || isNaN(heightCm) || weight <= 0 || heightCm <= 0) {
                alert('Mohon masukkan nilai yang valid!');
                return;
            }
            
            // Konversi tinggi dari cm ke m
            const heightM = heightCm / 100;
            
            // Hitung IMT
            const bmi = weight / (heightM * heightM);
            const bmiRounded = bmi.toFixed(1);
            
            // Tentukan kategori dan deskripsi
            let category, categoryClass, description;
            
            if (bmi < 17.0) {
                category = 'Kurus (Tingkat Berat)';
                categoryClass = 'kategori-kurus-berat';
                description = `
                    <strong>Status:</strong> Kekurangan berat badan tingkat berat<br><br>
                    <strong>Rekomendasi:</strong><br>
                    • Konsultasikan dengan dokter atau ahli gizi<br>
                    • Tingkatkan asupan kalori dan nutrisi seimbang<br>
                    • Lakukan pemeriksaan kesehatan menyeluruh<br>
                    • Olahraga ringan untuk meningkatkan nafsu makan
                `;
            } else if (bmi >= 17.0 && bmi <= 18.4) {
                category = 'Kurus (Tingkat Ringan)';
                categoryClass = 'kategori-kurus-ringan';
                description = `
                    <strong>Status:</strong> Kekurangan berat badan tingkat ringan<br><br>
                    <strong>Rekomendasi:</strong><br>
                    • Tingkatkan asupan makanan bergizi<br>
                    • Konsumsi protein dan karbohidrat cukup<br>
                    • Makan dengan porsi lebih sering<br>
                    • Konsultasi dengan ahli gizi jika diperlukan
                `;
            } else if (bmi >= 18.5 && bmi <= 25.0) {
                category = 'Normal';
                categoryClass = 'kategori-normal';
                description = `
                    <strong>Status:</strong> Berat badan ideal! 🎉<br><br>
                    <strong>Rekomendasi:</strong><br>
                    • Pertahankan pola makan seimbang<br>
                    • Olahraga teratur minimal 30 menit/hari<br>
                    • Cukup istirahat dan kelola stress<br>
                    • Minum air putih 8 gelas sehari
                `;
            } else if (bmi >= 25.1 && bmi <= 27.0) {
                category = 'Gemuk (Tingkat Ringan)';
                categoryClass = 'kategori-gemuk-ringan';
                description = `
                    <strong>Status:</strong> Kelebihan berat badan tingkat ringan<br><br>
                    <strong>Rekomendasi:</strong><br>
                    • Kurangi konsumsi makanan tinggi kalori<br>
                    • Tingkatkan aktivitas fisik secara bertahap<br>
                    • Batasi makanan manis dan berlemak<br>
                    • Perbanyak konsumsi sayur dan buah
                `;
            } else {
                category = 'Gemuk (Tingkat Berat)';
                categoryClass = 'kategori-gemuk-berat';
                description = `
                    <strong>Status:</strong> Kelebihan berat badan tingkat berat (Obesitas)<br><br>
                    <strong>Rekomendasi:</strong><br>
                    • Segera konsultasi dengan dokter atau ahli gizi<br>
                    • Buat program penurunan berat badan terstruktur<br>
                    • Olahraga teratur dengan pengawasan<br>
                    • Periksa kondisi kesehatan terkait (gula darah, kolesterol, dll)
                `;
            }
            
            // Tampilkan hasil
            document.getElementById('bmiValue').textContent = bmiRounded;
            document.getElementById('bmiCategory').textContent = category;
            document.getElementById('bmiCategory').className = 'bmi-category ' + categoryClass;
            document.getElementById('bmiDescription').innerHTML = description;
            
            // Show result section dengan animasi
            const resultSection = document.getElementById('resultSection');
            resultSection.classList.add('show');
            
            // Scroll ke hasil
            resultSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });

        // Clear result saat input berubah
        document.getElementById('weight').addEventListener('input', function() {
            document.getElementById('resultSection').classList.remove('show');
        });
        
        document.getElementById('height').addEventListener('input', function() {
            document.getElementById('resultSection').classList.remove('show');
        });
    </script>
</body>
</html>
