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
                                <th>Nama role</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>