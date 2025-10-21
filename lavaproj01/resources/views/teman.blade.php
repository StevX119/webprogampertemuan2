<div class="container">

<a href="./">Home</a>
<a href="./teman">Teman</a>

</div>


<div class="container">
  <h3>Data Teman</h3>
  
    @if(empty($dt))
      <p>tidak ada data<p>

      </head>
<body>

    <table>
        <caption>Daftar Buku</caption>
        <thead>
            <tr>
                <th>idbuku</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Telp</th>
                <th>WA</th>
            </tr>
        </thead>
        <tbody>
            @foreach
            <tr>
                <td>{{ $d['idbuku'] }}</td>
                <td>{{ $d['namateman'] }}</td>
                <td>{{ $d['alamat'] }}</td>
                <td>{{ $d['kota'] }}</td>
                <td>{{ $d['telp'] }}</td>
                <td>{{ $d['wa'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</body>
</html>

</div>