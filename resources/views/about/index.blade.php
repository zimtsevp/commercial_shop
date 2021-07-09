@extends('layouts.application')
@section('content')
    <div class="container px-4 py-5" id="hanging-icons" style="margin-top: 2rem;">
        <h2 class="pb-2 border-bottom">Our advantages</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                </div>
                <div>
                    <h2>Featured title</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-primary">
                        Primary button
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">We are here</h2>
        <div style="display: flex; justify-content:center;">
            <a href="https://yandex.ru/maps/239/sochi/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Сочи</a>
            <a href="https://yandex.ru/maps/239/sochi/stops/station__lh_9613034/?ll=39.734738%2C43.595079&tab=overview&utm_medium=mapframe&utm_source=maps&z=14.24" style="color:#eee;font-size:12px;position:absolute;top:14px;">Сочи — Яндекс.Карты</a>
            <iframe src="https://yandex.ru/map-widget/v1/-/CCUeRCQ8LD" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
        </div>
    </div>
@endsection
