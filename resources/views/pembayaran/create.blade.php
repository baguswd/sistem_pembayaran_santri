<h1>Form Tambah Pembayaran</h1>

<form action="#" method="POST">
    @csrf
    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah"><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="Lunas">Lunas</option>
        <option value="Belum Lunas">Belum Lunas</option>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>

<a href="/pembayaran">Kembali</a>
