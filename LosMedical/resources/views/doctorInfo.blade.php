@extends('layout')

@section('title')
    {{ strtok($doctor['name'], " ") }} | LosMedical
@endsection


@section('content')

    <section class="contacts">
        <div class="container">

            <h2 class="intro-right-title contacts-title doctor-inf-title" >{{ $doctor['name'] }}</h2>

            <div class="contacts-inner">

                <img id="doctors-inf-img" src="/images/{{ $doctor['img'] }}" alt="">

                <p class="advertise-text contacts-text doctors-inf-text">Напрям діяльності: У своїй практиці успішно проводить малоінвазивні хірургічні операції під місцевою та провідниковою анестезією (бурсити, шпори п'яти, доброякісні підшкірні утворення, операції на кістки, відкриті різані та рвані рани). Проводить операції з лапараскопічні операції з приводу ЖКБ. Проводить герніопластику при: грижі черевної стінки, пупкові грижі, пахові грижі, післяопераційні вентральні грижі. Проводить операції на товстій та тонкій кишці та ін. Здійснює діагностику та лікування різних патологій опорно-рухового апарату.
                </p>

            </div>



            <div class="contacts-info">


                    <p class="advertise-text contacts-text">
                        @foreach($doctor->phones as $phone)
                            <a href="tel:{{ $phone['number'] }}"><i class="fa-solid fa-phone"></i></a>Тел. {{ $phone['number'] }}<br>
                        @endforeach

                        <br>
                        {{ $doctor['name'] }}<br>
                        <?php
                        $profStr = '';
                        foreach ($doctor->profesions as $profesion){
                            $profStr .= $profesion['name'] . ', ';
                        }
                        echo substr_replace($profStr, '.', strrpos($profStr, ','));
                        ?>

                    </p>




            </div>

        </div> <!--/.container-->
    </section> <!--/.contacts-->
@endsection
