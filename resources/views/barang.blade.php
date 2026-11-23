    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>
              <a href="/tambahbarang" class="btn btn-success">Tambah<i class="bi bi-plus-circle-fill"></i></a>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">no</th>
                    <th scope="col">nama barang</th>
                    <th scope="col">kode barang</th>
                    <th scope="col">stok</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($luoyunxi as $key => $value) {
                    ?>
                  <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $value->namabarang ?></td>
                    <td><?= $value->kodebarang ?></td>
                    <td><?= $value->stok ?></td>
                    <td>
                        <button class="btn btn-warning"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                    <?php } 
                    ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
