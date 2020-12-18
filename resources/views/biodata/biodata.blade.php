@extends('tema.master')

@section("content")

<section id="biodata" class="biodata">

        <div class="section-title" data-aos="zoom-out">
            <div class="section-title">
                <h2>Form Biodata</h2>
            </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $errors)
                                <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        </div>

                <form action="{{ route("biodata_tambah") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">

                    <label for="ttl">Tempat dan Tanggal Lahir</label>
                    <input type="text" name="ttl" class="form-control" placeholder="Masukan Tempat dan Tanggal Lahir">

                    <label for="umur">Umur</label>
                    <input type="text" name="umur" class="form-control" placeholder="Masukan Umur">

                    <label for="jenisKelamin">Jenis Kelamin</label>
                    <input type="text" name="jenisKelamin" class="form-control" placeholder="Masukan Jenis Kelamin">

                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">

                    <label for="hobi">Hobi</label>
                    <input type="text" name="hobi" class="form-control" placeholder="Masukan Hobi">

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
     </div>
</section>

 @endsection