<h1>Detail Pembayaran</h1>

<p>Nama: {{ $pembayaran['nama'] }}</p>
<p>Jumlah: Rp{{ $pembayaran['jumlah'] }}</p>
<p>Status: {{ $pembayaran['status'] }}</p>

<a href="/pembayaran/{{ $pembayaran['id'] }}/edit">Edit</a> |
<a href="/pembayaran">Kembali</a>
