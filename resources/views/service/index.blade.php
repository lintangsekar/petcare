<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Tabel barang</h6>
        <a href="{{ url ('barang/create') }}" class="btn btn-outline-success">
            <i class="fa fa-plus"></i> Tambah barang 
        </a>
    </div>
    
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama service</th>
                        <th>Deskripsi</th>
                        <th>Kategori Layanan</th>
                        <th>Kategori Hewan</th>
                        <th>Pick up</th>
                        <th>Harga</th>
                        <th>Waktu Mulai</th>
                        <th>Waktu Akhir</th>
                    </tr>
                </thead>
            
                <tbody>
                    {{-- @foreach($barangs as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_barang}}</td>
                        <td>{{ $item->nama_jenis}}</td>
                        <td>{{ $item->nama_satuan}}</td>
                        <td> {{ $item->deleted_at ? 'Tidak Aktif' : 'Aktif'}}</td>
                        <td>{{ $item->harga}}</td>
                        <td>
                            <a href="{{ url('barang/'.$item->id_barang.'/edit') }}" class="btn btn-outline-success">Edit</></a></td>

                        <td>
                            <form onsubmit="return confirm('Yakin akan hapus data ?')" class='d-inline' action="{{ url('barang/'.$item->id_barang) }}" method="POST" >
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                        </td>
                       
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>