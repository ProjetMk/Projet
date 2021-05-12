@extends('layouts.app')

@section('title') | Ajouter un membre @endsection

@section('content')
<br><br><br><br><br><br><br><br><br><br>
<div class="section-title">
    <h2>Resultat de l'orientation</h2>
    <h3 style="font-size: 24px">resultat</h3>
    <h4>{{'Les différentes filiéres de cette faculté sont les suivantes:'}}</h4>
  </div>
	<!-- BEGIN: Content-->
    <div class="container">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="column-selectors">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="users-view-image">
                                            <img src="" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Name</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email</td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">Status</td>
                                                    <td>active</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Role</td>
                                                       {{-- @foreach($user->roles as $role)
                                                           <td>{{$role->name}}</td>
                                                       @endforeach --}}
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Company</td>
                                                    <td>WinDon Technologies Pvt Ltd</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            <a href=""><button  class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                </section>
            </div>
        </div>
    </div>
      
  @endsection