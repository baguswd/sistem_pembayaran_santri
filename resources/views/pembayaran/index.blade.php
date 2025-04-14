<h1>Daftar Pembayaran</h1>

<a href="/pembayaran/create">+ Tambah Pembayaran</a>

<ul>
    @foreach ($pembayaran as $item)
        <li>
            {{ $item['nama'] }} - Rp{{ $item['jumlah'] }} - {{ $item['status'] }}
            | <a href="/pembayaran/{{ $item['id'] }}">Lihat</a>
            | <a href="/pembayaran/{{ $item['id'] }}/edit">Edit</a>
            | <form action="/pembayaran/{{ $item['id'] }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
              </form>
        </li>
    @endforeach
</ul>
