<div>
    <main id="main" class="main">

        {{-- <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div> --}}
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="card-title">Kategori</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" autofocus wire:model.live.debounce.300ms="search" class="datatable-input" placeholder="Search...">
                                    </div>
                                    <div class="col-md-6">
                                        <a href="/kategori/create" wire:navigate class="btn btn-outline-primary float-end">Tambah Kategori</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($kategoris as $ktr)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ktr ->nama_kategori }}</td>
                                        <td><a href="/kategori/{{ $ktr->id }}/edit" class="btn btn-sm btn-warning">edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $kategoris->links() }}
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->
</div>
