<div>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Hotel Create</h1>
            {{-- <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav> --}}
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="/kategori" wire:navigate >&laquo; kembali</a>
                                    </div>
                                </div>
                            </div>
                            <form wire:submit.prevent="create">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-10">
                                        <input type="text" autofocus wire:model="nama_kategori" class="form-control">
                                        @error('nama_kategori')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary float-end" type="submit">Submit</button>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
</div>