@extends('layouts.app')

@section('content')
    <div class="row justify-content-center align-items-start">
        @foreach ($photos as $photo)
            <div class="col-10 col-md-3 mx-1 my-3 p-1 rounded shadow-lg">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('profile.people', $photo->user->id) }}"
                        class="ms-3 mt-3 mb-4 d-flex justify-content-start align-items-center mb-2 text-decoration-none">

                            <img src="{{ $photo->user->avatar != null ? asset('storage/' . $photo->user->avatar) : 'https://dummyimage.com/640x1:1/' }}"
                        alt="profile-picture" width="35" height="35" style="object-fit: cover; border-radius: 100%">
                        <span class="ms-2 fs-6 text-dark">{{ $photo->user->nama }}</span>
                    </a>
                    <p class="text-muted me-3" style="font-size: 12px">{{ date('d-m-Y', strtotime($photo->created_at)) }}</p>
                </div>
                <a href="{{ route('photo.index', $photo->id) }}" class="text-decoration-none">
                    <img class="img-fluid mx-auto d-block" style="width: 300x;height: 200px" src="{{ asset('storage/' . $photo->lokasi_file) }}" alt="{{ $photo->judul_foto }}">
                    <div id="post-detail" class="my-2 ms-3">

                        <span class="fw-bold fs-5 d-block text-dark">{{ $photo->judul_foto }}</span>
                        <span class="text-muted" style="font-size: 13px">{{ $photo->deskripsi_foto }}</span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
