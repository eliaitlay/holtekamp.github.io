<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk Kampung Holtekamp</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: red;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            color: #007bff;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
        }

        .h2-icon {
            margin-right: 10px;
            font-size: 24px;
            color: #007bff;
            vertical-align: middle;
        }

        p {
            color: #6c757d;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .col-lg-4,
        .col-md-6 {
            flex: 1 0 30%;
            margin: 10px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .col-lg-4:hover,
        .col-md-6:hover {
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        #map {
            height: 400px;
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chart-container {
            position: relative;
            margin: auto;
            height: 250px;
        }

        .info-box {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .info-box h3 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .info-box p {
            margin: 0;
            font-size: 1.1em;
            color: #343a40;
        }

        .education-data {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .education-box {
            flex: 1 0 30%;
            margin: 10px;
            padding: 15px;
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .education-box:hover {
            background-color: #17a2b8;
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .education-box h4 {
            margin: 0;
            color: #007bff;
        }

        .education-box span {
            font-size: 1.5em;
            font-weight: bold;
            color: #343a40;
        }

        .total-info {
            margin-top: 10px;
            font-weight: bold;
            color: #007bff;
        }

        /* Base Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
    color: #343a40;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h2 {
    color: #007bff;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
}

.h2-icon {
    margin-right: 10px;
    font-size: 24px;
    color: #007bff;
    vertical-align: middle;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }

    .row {
        flex-direction: column;
        align-items: center;
    }

    .col-lg-4,
    .col-md-6 {
        flex: 1 0 100%;
        margin: 10px 0;
        padding: 10px;
    }

    .chart-container {
        height: 200px;
    }

    .table {
        font-size: 0.875rem;
        overflow-x: auto;
    }
    
    #map {
        height: 300px;
        width: 100%;
    }
}

/* Larger Screens */
@media (min-width: 769px) {
    .col-lg-4 {
        flex: 1 0 30%;
    }
    
    .col-md-6 {
        flex: 1 0 45%;
    }
}

    </style>
</head>

<body>
    <div class="container mt-5">
        <a href="index.php" class="h2-icon" title="Kembali ke Halaman Utama">
            <i class="fas fa-home"></i>
        </a>
        <h2>Data Penduduk Kampung Holtekamp</h2>
        <p>Informasi lengkap mengenai demografi penduduk Kampung Holtekamp.</p>

        <!-- Informasi Umum -->
        <div class="row mt-4">
            <div class="info-box">
                <h3><i class="fas fa-ruler-combined"></i> Luas Wilayah</h3>
                <p>18,73 km<sup>2</sup></p>
            </div>
            <!-- <div class="info-box">
                <h3><i class="fas fa-users"></i> Jumlah Penduduk</h3>
                <p>1,668 jiwa</p>
            </div> -->
            <!-- <div class="info-box">
                <h3><i class="fas fa-city"></i> Kepadatan Penduduk</h3>
                <p>89 jiwa/km<sup>2</sup></p>
            </div> -->
        </div>

        <!-- Statistik Penduduk -->
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6">
                <h3><i class="fas fa-users"></i> Data Penduduk Kampung Holtekamp</h3>
                <div class="chart-container">
                    <canvas id="totalPopulationChart"></canvas>
                </div>
                <p id="total-population-info">Total: 1,668 jiwa</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3><i class="fas fa-chart-bar"></i> Data Penduduk Berdasarkan Umur</h3>
                <div class="chart-container">
                    <canvas id="ageDistributionChart"></canvas>
                </div>
                <p id="age-distribution-info">Total: 1,668 jiwa</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3><i class="fas fa-venus-mars"></i> Data Penduduk Berdasarkan Jenis Kelamin</h3>
                <div class="chart-container">
                    <canvas id="genderDistributionChart"></canvas>
                </div>
                <p id="gender-distribution-info">Laki-laki: 800 jiwa, Perempuan: 868 jiwa</p>
            </div>
        </div>

        

        <!-- Tabel Distribusi Jenis Kelamin -->
<h3 class="mt-5">Distribusi Jenis Kelamin</h3>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th>Jenis Kelamin</th>
            <th>Jumlah Penduduk</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Laki-laki</td>
            <td id="gender-0-table">800 jiwa</td>
        </tr>
        <tr>
            <td>Perempuan</td>
            <td id="gender-1-table">868 jiwa</td>
        </tr>
        <tr>
            <td>Total</td>
            <td id="gender-1-table">1,668 jiwa</td>
        </tr>
    </tbody>
</table>


        <!-- Distribusi Pendidikan -->
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6">
                <h3><i class="fas fa-graduation-cap"></i> Data Penduduk Berdasarkan Pendidikan Terakhir</h3>
                <div class="chart-container">
                    <canvas id="educationDistributionChart"></canvas>
                </div>
                <p id="education-total-info">Total: 1,668 jiwa</p>
            </div>
        </div>

        <!-- Tabel Distribusi Pendidikan -->
        <h3 class="mt-5">Data Penduduk Berdasarkan Pendidikan</h3>
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>Tingkat Pendidikan</th>
                    <th>Jumlah Penduduk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tidak/Belum Sekolah</td>
                    <td id="education-0-table">100 jiwa</td>
                </tr>
                <tr>
                    <td>SD</td>
                    <td id="education-1-table">250 jiwa</td>
                </tr>
                <tr>
                    <td>SMP</td>
                    <td id="education-2-table">300 jiwa</td>
                </tr>
                <tr>
                    <td>SMA</td>
                    <td id="education-3-table">400 jiwa</td>
                </tr>
                <tr>
                    <td>SARJANA</td>
                    <td id="education-4-table">150jiwa</td>
                </tr>
                <!-- <tr>
                    <td>S1/S2/S3</td>
                    <td id="education-5-table">50 jiwa</td>
                </tr> -->
            </tbody>
        </table>

        <!-- Distribusi Pekerjaan -->
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6">
                <h3><i class="fas fa-briefcase"></i> Data Penduduk Berdasarkan Pekerjaan</h3>
                <div class="chart-container">
                    <canvas id="employmentDistributionChart"></canvas>
                </div>
                <p id="employment-total-info">Total: 1,668 jiwa</p>
            </div>
        </div>

        <!-- Tabel Distribusi Pekerjaan -->
        <h3 class="mt-5">Distribusi Pekerjaan</h3>
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>Jenis Pekerjaan</th>
                    <th>Jumlah Penduduk</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Petani</td>
                    <td id="employment-0-table">300 jiwa</td>
                </tr>
                <tr>
                    <td>Nelayan</td>
                    <td id="employment-1-table">200 jiwa</td>
                </tr>
                <tr>
                    <td>PNS</td>
                    <td id="employment-2-table">150 jiwa</td>
                </tr>
                <tr>
                    <td>Karyawan Swasta</td>
                    <td id="employment-3-table">500 jiwa</td>
                </tr>
                <!-- <tr>
                    <td>Wiraswasta</td>
                    <td id="employment-4-table">300 jiwa</td>
                </tr> -->
                <tr>
                    <td>Lainnya</td>
                    <td id="employment-5-table">218 jiwa</td>
                </tr>
            </tbody>
        </table>

        <!-- Peta Kampung Holtekamp -->
        <h3 class="mt-5">Peta Kampung Holtekamp</h3>
        <div id="map"></div>
    </div>

    <script>
        // Data Statistik Penduduk
        const totalPopulationData = [1668, 600, 568];
        const ageDistributionData = [157, 262, 235, 209, 366, 439];
        const genderDistributionData = [800, 868];
        const educationDistributionData = [100, 250, 300, 400, 150,];
        const employmentDistributionData = [300, 200, 150, 800, 218];

        // Fungsi untuk Membuat Grafik
        function createChart(ctx, type, labels, data, backgroundColors, borderColors) {
            new Chart(ctx, {
                type: type,
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Jumlah Penduduk',
                        data: data,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Grafik Total Penduduk
        const totalPopulationCtx = document.getElementById('totalPopulationChart').getContext('2d');
        createChart(
            totalPopulationCtx,
            'bar',
            ['Data-Penduduk'],
            totalPopulationData,
            ['rgba(54, 162, 235, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(75, 192, 192, 0.2)'],
            ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)', 'rgba(75, 192, 192, 1)']
        );

        // Grafik Distribusi Umur
        const ageDistributionCtx = document.getElementById('ageDistributionChart').getContext('2d');
        createChart(
            ageDistributionCtx,
            'bar',
            ['0-5', '6-12', '13-17', '18-35', '36-50', '51+'],
            ageDistributionData,
            [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ]
        );

        // Grafik Distribusi Jenis Kelamin
        const genderDistributionCtx = document.getElementById('genderDistributionChart').getContext('2d');
        createChart(
            genderDistributionCtx,
            'doughnut',
            ['Laki-laki', 'Perempuan'],
            genderDistributionData,
            ['rgba(54, 162, 235, 0.2)', 'rgba(255, 99, 132, 0.2)'],
            ['rgba(54, 162, 235, 1)', 'rgba(255, 99, 132, 1)']
        );

        // Grafik Distribusi Pendidikan
        const educationDistributionCtx = document.getElementById('educationDistributionChart').getContext('2d');
        createChart(
            educationDistributionCtx,
            'pie',
            ['Tidak/Belum Sekolah', 'SD', 'SMP', 'SMA', 'Sarjana'],
            educationDistributionData,
            [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ]
        );

        // Grafik Distribusi Pekerjaan
        const employmentDistributionCtx = document.getElementById('employmentDistributionChart').getContext('2d');
        createChart(
            employmentDistributionCtx,
            'polarArea',
            ['Petani', 'Nelayan', 'PNS', 'Karyawan Swasta', 'Lainnya'],
            employmentDistributionData,
            [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ]
        );

        // Peta Kampung Holtekamp
        const map = L.map('map').setView([-2.549, 140.716], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        L.marker([-2.549, 140.716]).addTo(map)
            .bindPopup('Kampung Holtekamp')
            .openPopup();
    </script>
</body>
</html>
