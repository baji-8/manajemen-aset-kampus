<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Laboratorium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            padding: 30px;
            background-color: #ffffff;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-primary {
            padding-left: 24px;
            padding-right: 24px;
        }

        .btn-secondary {
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <div class="card">
            <h3 class="mb-4 text-center fw-semibold">Tambah Laboratorium</h3>

            <form action="{{ route('laboratorium.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Laboratorium</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="penanggung_jawab" class="form-label">Penanggung Jawab</label>
                    <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label for="fasilitas" class="form-label">Fasilitas</label>
                    <textarea name="fasilitas" id="fasilitas" class="form-control" rows="4" placeholder="Pisahkan dengan koma atau baris baru"></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('laboratorium.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
