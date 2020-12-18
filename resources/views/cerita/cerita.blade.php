@extends('tema.master')

@section("content")

<section id="cerita" class="cerita">

        <div class="section-title" data-aos="zoom-out">
            <div class="section-title">
                <h2>Form Cerita</h2>
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

                <form action="{{ route("cerita_tambah") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">

                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukan Email">

                    <label for="cerita">Cerita Kamu</label>
                    <textarea name="cerita" class="form-control" rows="10"></textarea>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
     </div>
</section>

 @endsection