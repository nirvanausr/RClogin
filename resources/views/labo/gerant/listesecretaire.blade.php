@extends('labo.gerant.layoutgerant')

@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Liste des secrétaires</h1>

    </div>
    <!--Le tableau-->
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Email</th>
                    <th scope="col">Manipulations</th>
                </tr>
            </thead>
            <tbody>
                <!--1-->
                <tr>
                    <td><a href="examen.html" class="text-secondary">1</a></td>
                    <td><a href="examen.html" class="text-secondary">Kaci</a></td>
                    <td><a href="examen.html" class="text-secondary">Linda</a></td>
                    <td><a href="examen.html" class="text-secondary">Kaci.linda@gmail.com</a></td>
                    <td><a href="examen.html" class="text-secondary">mdp</a></td>
                    <td>

                        <button type="button" class="btn btn-primary ">
                            <a  class="text-white" href="#" data-toggle="modal" data-target="#maj">

                                <i class="fas fa-fw fa-pencil-alt"></i>
                            </a>
                        </button>
                        <button type="button" class="btn btn-danger " id="btdelet">
                            <a  class="text-white" href="#" data-toggle="modal" data-target="#delet">
                            <i class="fas fa-fw fa-trash"></i></a>
                        </button>




                    </td>
                </tr>



            </tbody>
        </table>

        @endsection
