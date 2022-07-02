@extends('labo.gerant.layoutgerant')

@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ajouter Un Utilisateur</h1>

    </div>
    <!--Formaulaire d'ajout de dossier-->

    <div class="col-md-7 col-lg-8">

        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-12">
                    <label for="firstName" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="lastName" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-12">
                    <label for="lastName" class="form-label">Adresse Email</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="lastName" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="lastName" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="lastName" class="form-label">Date de naissance</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

            </div>

            <hr class="my-4">




            <h4 class="mb-3">Genre</h4>

            <div class="my-3">
                <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Homme</label>
                </div>
                <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Femme</label>
                </div>

            </div>

            <h4 class="mb-3">Statut</h4>

            <div class="my-3">
                <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Médecin</label>
                </div>
                <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Secrétaire</label>
                </div>

            </div>


            <hr class="my-4">

            <button class="w-100 btn btn-dark btn-lg" type="submit">Ajouter un compte</button>

        </form>




    </div>


    @endsection
