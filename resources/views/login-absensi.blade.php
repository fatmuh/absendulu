
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Absen Dulu</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-warning">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><img src="img/Judul.png" alt="Absen Dulu" width="300px"></h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted"><center>Tap Your Card on RFID Reader.</center></div>
                                        <form action="{{ route('postlogin') }}" method="POST">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="no_pegawai" type="text" placeholder="Masukkan Nomor Pegawai" autofocus required/>
                                                <input class="form-control" name="password" type="hidden" value="admin">
                                                <label>Nomor Pegawai</label>
                                            </div>
                                            <div class="d-grid gap-2 mt-4 mb-4">
                                                <button class="btn btn-warning" type="submit">Absen Dulu</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
