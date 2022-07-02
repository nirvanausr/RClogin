@extends('labo.gerant.layoutgerant')

@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Bienvenu dans l'espace gérant</h1>

    </div>

    <div class="d-flex align-items-stretch">
        <div class="col-md-10">
            <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Laboratoire :</h4>
                <p>Centre d'Imagerie Médicale d'Alger - Pr. Yaker - CIMA</p>
            </div>

            <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
            </div>

            <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
            </div>

            <iframe src="https://maps.google.com/maps?q=Centre%20d'Imagerie%20M%C3%A9dicale%20d'Alger%20-%20Pr.%20Yaker%20-%20CIMA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>

    </div>


@endsection
