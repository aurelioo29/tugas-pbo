<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS PBO | Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Form Add Data</h1>
    <form action="add.php" method="post">
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Nama Mahasiswa</label>
        <input name="nama" type="text" class="form-control" id="exampleInputText1" placeholder="Masukan nama yang ingin di input" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Kelas Mahasiswa</label>
        <input name="kelas" type="text" class="form-control" id="exampleInputText1" placeholder="Masukan kelas dengan detail" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">NIM Mahasiswa</label>
        <input name="nim" type="number" class="form-control" id="exampleInputText1" placeholder="Masukan NIM mahasiswa yang valid" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Alamat Mahasiswa</label>
        <input name="alamat" type="text" class="form-control" id="exampleInputText1" placeholder="Masukan alamat dengan detail " required>
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Email Mahasiswa</label>
        <input name="email" type="email" class="form-control" id="exampleInputText1" placeholder="Masukan email dengan fomat test@gmail.com" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputText1" class="form-label">No.HP Mahasiswa</label>
        <input name="hp" type="number" class="form-control" id="exampleInputText1" placeholder="Masukan nomor hp dengan format +62xxxxxxxxxxx" required>
      </div>
      <button name="simpan" type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>