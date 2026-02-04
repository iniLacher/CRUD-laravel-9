<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      .keterangan {
        font-size: 0.8rem;
      }
    </style>
  </head>
  <body class="bg-light">
    <main class="container">
        @include('komponen.pesan')
        @yield('konten')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mantap!',
            text: "{{ Session::get('success') }}",
            timer: 2000,
            showConfirmButton: false
        })
    </script>
@endif
    <script>
    // Cari semua form yang punya class .confirm-delete
    document.querySelectorAll('.confirm-delete').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault(); // Berhenti! Jangan hapus dulu.

            Swal.fire({
                title: 'Yakin mau hapus?',
                text: "Data yang dihapus nggak bisa balik lagi loh!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Basmi!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Kalau user klik "Ya", baru kita jalankan form-nya
                    this.submit();
                }
            })
        });
    });
</script>
  </body>
</html>