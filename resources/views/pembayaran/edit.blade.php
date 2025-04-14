<h1>Edit Data Pembayaran</h1>

<form action="#" method="POST">
    @csrf
    @method('PUT')
    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $pembayaran['nama'] }}"><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah" value="{{ $pembayaran['jumlah'] }}"><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="Lunas" {{ $pembayaran['status'] == 'Lunas' ? 'selected' : '' }}>Lunas</option>
        <option value="Belum Lunas" {{ $pembayaran['status'] == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
    </select><br><br>

    <button type="submit">Update</button>
</form>

<a href="/pembayaran">Kembali</a>
