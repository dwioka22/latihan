@extends('frontend.layout.app')


@section('content')
  <!-- About-->
  <section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            <!--memanggil variable data di controoler -->
            {{$data['nama']}}
        </h1>
        <div class="subheading mb-5">
            <!--memanggil variable data di controoler -->
            {{$data['alamat'].'Phone :'.$data['telp']}}
            <a href="mailto:name@email.com">{{$data['email']}}</a>
        </div>
        <p class="lead mb-5">SELAMAT DATANG DI WEB KAMI </p>
        <div class="social-icons">
            <!--memanggil variable data di dengan perulangan -->
            @foreach ($data['items'] as $key => $val)
                <a class="social-icon" href="{{$val['link']}}"><i class="{{$val['icon']}}"></i></a>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('style')

@endpush

@push('script')

@endpush