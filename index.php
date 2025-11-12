<!DOCTYPE html>
<html lang="id">

<head>
    <title>Scuderia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="Program CSS.css">

</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #a82020;">
        <a class="navbar-brand" href="#">
            <img src="Gambar/SF.png" width="30">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active text-white" href="#HOME">Home</a>
                <a class="nav-link text-white" href="#ABOUT">About</a>
                <a class="nav-link text-white" href="#MERCH">Merchandise</a>
                <a class="nav-link text-white" href="#SCHEDULE">Schedule</a>
                <a class="nav-link text-white" href="#RACECARS">Race Cars</a>
                <a class="nav-link text-white" href="#CHAMPIONSHIP">Championship</a>
                <a class="nav-link text-white" href="#SUBSCRIBE">Subscribe</a>
            </div>

        </div>
    </nav>

    <div class="carousel-background"></div>

    <div class="container mt-4 mb-4">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner rounded shadow">
                <div class="carousel-item active">
                    <img src="Gambar/SF25.jpg" class="d-block w-100" alt="Gambar1">
                </div>
                <div class="carousel-item">
                    <img src="Gambar/F1 Champ.png" class="d-block w-100" alt="Gambar2">
                </div>
                <div class="carousel-item">
                    <img src="Gambar/499p.jpg" class="d-block w-100" alt="Gambar4">
                </div>
                <div class="carousel-item">
                    <img src="Gambar/LeMans.png" class="d-block w-100" alt="Gambar5">
                </div>
            </div>




            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>



    <section id="HOME" class="py-5">
        <div class="container">
            <h2 class="text-center text-danger font-weight-bold mb-4">
                Welcome to Ferrari Racing Team
            </h2>
            <p class="text-justify mx-auto" style="max-width: 700px;">
                Ferrari didirikan oleh Enzo Ferrari pada tahun 1939 di Maranello, Italia, sebagai perwujudan dari hasrat
                mendalam terhadap dunia balap. Mobil pertamanya, 125 S, diperkenalkan pada tahun 1947 dan menjadi awal
                dari perjalanan panjang menuju kejayaan otomotif.
                Sejak tahun 1950, Ferrari resmi bergabung dengan Formula 1, menjadikannya satu-satunya tim yang
                berpartisipasi tanpa henti hingga saat ini. Tim ini telah meraih puluhan kemenangan Grand Prix, berbagai
                gelar juara dunia pembalap dan konstruktor, serta menjadi ikon legendaris dalam sejarah balap.
                Tak hanya di Formula 1, Ferrari juga berkiprah di ajang World Endurance Championship (WEC), di mana
                mereka menorehkan prestasi luar biasa di Le Mans 24 Hours dengan mobil Ferrari 499P, menandai kembalinya
                Ferrari ke kategori Hypercar pada tahun 2023 dan meraih kemenangan gemilang.
                Semangat balap, inovasi teknologi, dan kebanggaan Italia tetap menjadi inti dari setiap mobil yang
                membawa nama Scuderia Ferrari.
            </p>
        </div>
    </section>

   <!--sudah bisa-->
    <section id="ABOUT" class="py-5">
        <div class="container text-center">
            <h2 class="text-danger mb-4 font-weight-bold">About Ferrari Performance</h2>
            <p>Statistik jumlah podium Ferrari pada musim balap 2025 di berbagai ajang internasional.</p>
            <canvas id="FerrariChart" width="400" height="200"></canvas>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "kejuaraan";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            }

            $sql = "SELECT nama, jumlah FROM kejuaraan.podium";
            $result = $conn->query($sql);

            $labels = [];
            $data = [];

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $labels[] = $row["nama"];
                    $data[] = $row["jumlah"];
                }
            }
            $conn->close();
            ?>
        </div>
    </section>


    <section id="MERCH" class="py-5">
  <div class="container text-center text-white">
    <h2 class="text-danger mb-5 font-weight-bold">Ferrari Merchandise</h2>
    <p class="text-light mb-5">Dapatkan koleksi resmi Ferrari untuk mendukung tim favoritmu!</p>

    <div class="row">
      <?php
      $conn = new mysqli("localhost", "root", "", "kejuaraan");
      if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
      }

      $sql = "SELECT nama, deskripsi, harga, gambar, link_toko FROM merch";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $harga = 'Rp ' . number_format($row["harga"], 0, ',', '.');

              echo '
              <div class="col-md-4 mb-4 d-flex">
                <div class="card bg-dark text-white border-danger d-flex flex-column w-100">
                    <img src="Gambar/' . $row["gambar"] . '" class="card-img-top" alt="' . $row["nama"] . '">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-danger">' . $row["nama"] . '</h5>
                        <p class="card-text flex-grow-1">' . $row["deskripsi"] . '</p>
                        <p class="font-weight-bold text-light">' . $harga . '</p>
                        <div class="mt-auto">
                            <a href="' . $row["link_toko"] . '" target="_blank" class="btn btn-danger btn-block">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
              </div>';
          }
      } else {
          echo "<p class='text-light'>Tidak ada merchandise tersedia.</p>";
      }

      $conn->close();
      ?>
    </div>
  </div>
</section>





    <section id="SCHEDULE" class="my-5">
  <div class="container text-center">
    <h2 class="text-danger font-weight-bold mb-4">Race Schedule 2025</h2>
    <p class="text-light mb-5">Jadwal Balapan Selanjutnya</p>

   <div class="table-responsive">
  <table class="table table-dark table-striped table-bordered">
    <thead class="thead-light">
      <tr>
        <th>tanggal</th>
        <th>seri</th>
        <th>lokasi</th>
        <th>kompetisi</th>
      </tr>
    </thead>
    <tbody id="jadwal-body">
    </tbody>
    </table>
    </div>
  </div>
</section>


    <section id="RACECARS" my-5">
        <h2 class="text-center text-danger mb-4 font-weight-bold">Race Cars</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <img src="Gambar/SF25.jpg" class="img-fluid rounded shadow" alt="SF25">
                <h5 class="mt-2">Ferrari SF-25</h5>
            </div>
            <div class="col-md-4 mb-4">
                <img src="Gambar/499p.jpg" class="img-fluid rounded shadow" alt="499P">
                <h5 class="mt-2">Ferrari 499P</h5>
            </div>
            <div class="col-md-4 mb-4">
                <img src="Gambar/296 GT3.png" class="img-fluid rounded shadow" alt="296 GT3">
                <h5 class="mt-2">Ferrari 296 GT3</h5>
            </div>
        </div>
    </section>

    <!--dah bener-->
    <section id="CHAMPIONSHIP" class="py-5">
        <div class="container text-center">
            <h2 class="text-danger mb-5 font-weight-bold">Championships</h2>

            <div class="row g-4 align-items-stretch mt-4">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "kejuaraan";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                $sql = "SELECT gambar, judul, keterangan FROM kejuaraan.championship";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col-md-4 mb-5">
                            <img src="Gambar/' . $row["gambar"] . '" class="img-fluid rounded shadow mb-3" alt="' . $row["judul"] . '">
                            <h4 class="text-danger font-weight-bold">' . $row["judul"] . '</h4>
                            <p class="text-justify mx-auto" style="max-width: 700px; color: #fff;">' . $row["keterangan"] . '</p>
                            </div>
                            ';
                    }
                } else {
                    echo "<p class='text-white'>Tidak ada data ditemukan.</p>";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </section>


    <section id="SUBSCRIBE" class="my-5">
  <div class="container">
    <h2 class="text-center text-danger mb-4 font-weight-bold">Subscribe For More!</h2>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="subscribe.php" method="post">
          <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
          </div>

          <div class="form-group mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
          </div>

          <button type="submit" class="btn btn-danger mt-4 w-100">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>


    <footer class="text-center text-white py-3" style="background-color: #a82020;">
        <p class="mb-0">Forza Ferrari!</p>
    </footer>


    <script>
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });


        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            });
        });


        window.addEventListener('scroll', () => {
            let current = '';
            document.querySelectorAll('section').forEach(section => {
                const sectionTop = section.offsetTop;
                if (scrollY >= sectionTop - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });


        const labels = <?php echo json_encode($labels); ?>;
        const data = <?php echo json_encode($data); ?>;

        const ctx = document.getElementById('FerrariChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah Podium 2025',
                    data: data,
                    backgroundColor: '#ff0000',
                    borderColor: '#fff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: { color: 'white' }
                    },
                    title: {
                        display: true,
                        color: '#fff',
                        font: { size: 18 }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { color: 'white', stepSize: 2 },
                        grid: { color: '#333' }
                    },
                    x: {
                        ticks: { color: 'white' },
                        grid: { color: '#333' }
                    }
                }
            }
        });


function updateChartData() {
    fetch('podium_realtime.php')
        .then(response => response.json())
        .then(newData => {
            if (!newData || !newData.labels) return;

            chart.data.labels = newData.labels;
            chart.data.datasets[0].data = newData.data;
            chart.update();
        })
        .catch(err => console.error('Gagal memuat data:', err));
}

setInterval(updateChartData, 3000);




function updateJadwal() {
    fetch('jadwal_realtime.php')
        .then(response => response.json())
        .then(data => {
            const tbody = document.getElementById('jadwal-body');
            tbody.innerHTML = '';

            if (!data || data.length === 0) {
                tbody.innerHTML = '<tr><td colspan="4">Tidak ada jadwal</td></tr>';
                return;
            }

            data.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.tanggal}</td>
                    <td>${item.seri}</td>
                    <td>${item.tempat}</td>
                    <td>${item.kompetisi}</td>
                `;
                tbody.appendChild(row);
            });
        })
        .catch(err => console.error('Gagal memuat jadwal:', err));
}

updateJadwal();
setInterval(updateJadwal, 3000);

        
    </script>
</body>
</html>