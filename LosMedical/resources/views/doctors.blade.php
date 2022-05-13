@extends('layout')

@section('title')
    Наші лікарі | LosMedical
@endsection


@section('content')

    <section class="doctors">
        <div class="container">
            <h2 class="intro-right-title doctors-title" >Лікарі медичного центру</h2>

            <div class="doctors-list">

                @foreach($doctors as $doctor)
                    <div class="doctors-item">
                        <img src="/images/{{ $doctor->img }}" alt="">
                        <div class="doctors-info">
                            <h3 class="doctors-name">{{ $doctor->name }}</h3>
                            <p class="benefit-text doctors-prof">
                                <?php
                                    $profStr = '';
                                    foreach ($doctor->profesions as $profesion){
                                        $profStr .= $profesion['name'] . ', ';
                                    }
                                    echo substr_replace($profStr, '.', strrpos($profStr, ','));
                                ?>
                            </p>
                            <span class="doctors-exp"><i class="fa-regular fa-clock"></i>Досвід роботи: {{ $doctor->exp }} років</span>
                            <a href="{{ action([\App\Http\Controllers\PagesController::class, 'doctorInfo'], ['doctor' => $doctor]) }}" class="btn doctors-btn">
                                Детальніше про лікаря
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div> <!--/.container-->
    </section> <!--/.doctors-->
@endsection
