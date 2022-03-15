@extends('layout/base')

@section('title', 'Faq')

@section('faq-ativo', 'active')

<div style="width: 100%; height: 430px; position: absolute; background: #fdf9e2; z-index: -1;">
</div>

@section('content')

<div class="container p-4">

    <div class="mb-4">
        <p>
            <a class="btn" style="color: white;background-color: #f73358;" data-bs-toggle="collapse" href="#collapseFaq" role="button" aria-expanded="false" aria-controls="collapseFaq">
            Question Faq1
            </a>
        </p>
        <div class="collapse " id="collapseFaq">
            <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </div>
    <div class="mb-4">
        <p>
            <a class="btn" style="color: white;background-color: #f73358;" data-bs-toggle="collapse" href="#collapseFaq2" role="button" aria-expanded="false" aria-controls="collapseFaq2">
            Question Faq2
            </a>
        </p>
        <div class="collapse" id="collapseFaq2">
            <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </div>
    <div class="mb-4">
        <p>
            <a class="btn" style="color: white;background-color: #f73358;" data-bs-toggle="collapse" href="#collapseFaq3" role="button" aria-expanded="false" aria-controls="collapseFaq3">
            Question Faq3
            </a>
        </p>
        <div class="collapse" id="collapseFaq3">
            <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </div>
    <div class="mb-4">
        <p>
            <a class="btn" style="color: white;background-color: #f73358;" data-bs-toggle="collapse" href="#collapseFaq4" role="button" aria-expanded="false" aria-controls="collapseFaq4">
            Question Faq4
            </a>
        </p>
        <div class="collapse" id="collapseFaq4">
            <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </div>

</div>

@endsection
