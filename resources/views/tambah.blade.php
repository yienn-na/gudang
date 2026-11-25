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
              <h5 class="card-title">General Form Elements</h5>
              <!-- General Form Elements -->
               <form method="POST" action="/aksiTambah">
                @csrf

               
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">namabarang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control @error('namabarang') is-invalid @enderror" id="inputText" name="namabarang" value="{{ old('namabarang') }}" required>
                    @error('namabarang')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
            
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">kodebarang</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control @error('kodebarang') is-invalid @enderror" id="inputNumber" name="kodebarang" value="{{ old('kodebarang') }}" required>
                    @error('kodebarang')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>

                <div class="row mb-3">
                
                  <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
             </div>
             </div>

            </div>
          </div>
        </div>
      </div>
    </section>
