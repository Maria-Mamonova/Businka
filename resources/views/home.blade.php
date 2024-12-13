@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <br><br><br>

        <div class="container my-4">
            <h1 class="text-center">Photo Gallery</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">

                <!-- Перебираем полученные элементы из массива -->
                @forelse ($images as $image)
                    <div class="col ">
                        <div class="card shadow">
                            <img src="{{ asset('images/' . $image) }}" class="card-img-top" alt="{{ $image }}">
                        </div>
                    </div>
                    <!-- На случай если элементов не будет -->
                @empty
                    <p class="text-center">No images found!</p>
                @endforelse

            </div>
        </div>

@endsection
