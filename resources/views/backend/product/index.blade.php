<div>


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Produk</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Produk</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Tanggal Dibuat</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>
                            <img src="{{$product->images}}" class="img-fluid" style="height: 25px;" alt="image">
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{\Carbon\Carbon::parse($product->created_at)->format('d M Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($product->created_at)->format('d M Y')}}</td>
                        <td>
                            @if($product->status =='ACTIVE')
                                <span class="badge badge-success">Aktif</span>
                            @else
                                <span class="badge badge-danger">Tidak Aktif</span>
                            @endif
                        </td>
                        <td></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Data kosong</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{$products->links()}}
            </div>
        </div>
    </div>

</div>
