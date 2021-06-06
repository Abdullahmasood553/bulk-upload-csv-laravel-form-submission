@extends('layouts.master')
@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <a href="" class="navbar-brand">ABNATION</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="#" class="nav-link active">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link active">About</a>
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="nav-link active">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Add User Modal -->

<div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <form method="POST" enctype="multipart/form-data" action="{{ route('employee.import') }}">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title">Add Leads</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
        
                @csrf
                <div class="modal-body">

                    <button type="button" class="btn btn-secondary mr-1 mb-15">Sample Download</button>
                    <br><br>
                    <!-- Form -->


                    <label for="file">Select file :</label>
                    <input type="file" name="file" id="file" class='form-control'><br>

                </div>
        
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Bulk Upload</button>
                <button class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
      </form>
    </div>
</div>

<!-- Tables -->

<section id="posts">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-md-4">
                <div class="card">
                    <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#addUserModal"><i
                            class="fa fa-plus"></i> Upload Bulk</a>

                    <div id="get_data" class="mt-4"></div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
