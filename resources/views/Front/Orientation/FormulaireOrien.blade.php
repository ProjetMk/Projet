@extends('layouts.app')

@section('title') | Ajouter un membre @endsection

@section('content')
<br><br><br><br><br><br><br>
<section  style="background-color:#f1f6fe" id="account" aria-labelledby="account-tab" role="tabpanel" class="services">
    <div  data-aos="fade-up">
      <div class="section-title">
        <h2>Orientation</h2>
        <h3>Faire une<span> Orientation</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>
        <section class="component-fade container icon-box p-5" style="border-radius: 10px 10px 10px 10px;" id="forme1">
            <h3>Saviez-vous ce que vous voulez faire dans l'avenir ?</h3>
            <div class="col-12 justify-content-end mt-3">
                <button type="button" class="btn btn glow " id="NON" style="font-size: 18px;height:40px;color:white; background-color:#106eea;" >NON</button>
                <button type="button"  class="btn btn-outline-warning" id="OUI" style="font-size: 18px; height:40px;">OUI</button>
            </div>
        </section>
        <section class="component1-fade" id="forme2"> 
            <form class="container icon-box p-5" style="border-radius: 10px 10px 10px 10px;"  method="POST" action="{{ route('Front.store')}}"  id="form1" >
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="BAC">{{ __('YOUR BAC') }}</label>
                            <div class="">
                                <select name="BAC" id="" class="form-control">
                                    @foreach ($series as $serie)
                                        <option value="{{$serie->name}}" class="option">{{$serie->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('BAC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="form-group">
                            <label>{{ __('YOUR COUNTRY') }}</label>
                            <div class="">
                                <select name="country" id="" class="form-control">
                                    @foreach ($cities as $city)
                                    <option value="{{$city->name}}" class="option">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="form-group">
                            <label>{{'what type of school ?'}}</label>
                            <select name="type_ecole" id="" class="form-control">
                                <option value="Université privée" class="option">Université privée</option>
                                <option value="Université d'Etat" class="option">Université d'Etat</option>
                                <option value="" class="option">Tous</option>
                            </select>
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label for="">
                                {{'Your name'}}
                            </label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>	
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="form-group">
                            <label for="">
                               {{' Your FirstName:'}}
                            </label>
                            <div class="form-holder">
                                <input type="text" class="form-control @error('FirstName') is-invalid @enderror" id="FirstName" name="FirstName" placeholder="FirstName"  required value="{{ old('name') }}"/>
                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>	
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="form-group">
                            <label for="">
                               {{'Email:'}}
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>   
                <div style="display: flex; display:contents;" class="row">
                    <h3>{{'what job do you want to do later ?'}}</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="name">{{ __(' Premier choix') }}</label>
                            <select name="P_metier" id="" class="form-control">
                                @foreach ($metiers as $metier)
                                    <option value="{{$metier->name}}" class="option">{{$metier->name}}</option>
                                @endforeach
                            </select>
                            <i class="zmdi zmdi-caret-down"></i>
                            @error('D_metier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="name">{{ __(' Deuxiéme choix') }}</label>
                            <div class="">
                                <select name="D_metier" id="" class="form-control">
                                    @foreach ($metiers as $metier)
                                        <option value="{{$metier->name}}" class="option">{{$metier->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('D_metier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>      
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button type="submit" id="submit1" style="color:white; background-color:#106eea; " class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Valider</button>
                    <button  type="reset" class="btn btn-outline-warning">Reset</button>
                </div>
                <div style="float: left;" class="flex-column justify-content-end">
                    <button type="button" style="height: 35px; margin-top:-55px; color:white; background-color:#106eea; " id="BACK1" class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Back</button>
                </div>
            </form>
        </section>
        <section class="component2-fade" id="forme3"> 
            <form class="container icon-box p-5" style="border-radius: 10px 10px 10px 10px;"  method="POST" action="{{ route('reset.store')}}"  id="form1" >
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="BAC">{{ __('Quel est votre BAC') }}</label>
                            <div class="">
                                <select name="BAC" id="" class="form-control">
                                    @foreach ($series as $serie)
                                        <option value="{{$serie->name}}" class="option">{{$serie->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('BAC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
            
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="form-group">
                            <label>{{ __('Dans quelle ville, voulez-vous effectuez votre parcour Universitaire ?') }}</label>
                            <div class="">
                                <select name="ville" id="" class="form-control">
                                    @foreach ($cities as $city)
                                    <option value="{{$city->name}}" class="option">{{$city->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label for="nom">
                                {{'Quel est votre Nom ?'}}
                            </label>
                            <input id="nom" type="text" class="form-control @error('name') is-invalid @enderror" name="nom" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>        
                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>	
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="form-group">
                            <label for="Mail">
                               {{'Quel est votre Mail ?'}}
                            </label>
                            <input id="Mail" type="Mail" class="form-control @error('Mail') is-invalid @enderror" name="Mail" value="{{ old('email') }}" required autocomplete="Mail">
                                @error('Mail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                </div>   
                <div style="display: flex; display:contents;" class="row">
                    <h3>{{'Vos préférences'}}</h3>
                </div><br>
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="matière">{{ __('Quelle est la matière ou vous excellez le plus ?') }}</label>
                            <select name="matière" id="" class="form-control">
                                @foreach ($matieres as $matiere)
                                    <option value="{{$metier->name}}" class="option">{{$matiere->name}}</option>
                                @endforeach
                            </select>
                            <i class="zmdi zmdi-caret-down"></i>
                            @error('matière')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="libre">{{ __("Qu'est ce que vous aimiez faire pendant votre temps libre ?") }}</label>
                            <div class="">
                                <select name="libre" id="" class="form-control">
                                    <option value="Lire" class="option">Lire</option>
                                    <option value="Sport">Faire le Sport</option>
                                    <option value="Dormir">Dormir</option>
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('libre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>      
                <div class="row">
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="personne">{{ __('Quel est la personne que vous admirez le plus ?') }}</label>
                            <select name="personne" id="" class="form-control">
                                @foreach ($metiers as $metier)
                                    <option value="{{$metier->name}}" class="option">{{$metier->name}}</option>
                                @endforeach
                            </select>
                            <i class="zmdi zmdi-caret-down"></i>
                            @error('personne')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="form-group">
                            <label  for="metier">{{ __('Que fait-elle dans la vie ?') }}</label><br>
                            <div class="">
                                <select name="metier" id="" class="form-control">
                                    @foreach ($metiers as $metier)
                                        <option value="{{$metier->name}}" class="option">{{$metier->name}}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-caret-down"></i>
                                @error('living')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                    <button style="color:white; background-color:#106eea;" type="submit" id="submit2" class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Valider</button>
                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                </div>
                <div style="float: left;" class="flex-column justify-content-end">
                    <button type="button" style="height: 35px; margin-top:-55px; color:white; background-color:#106eea; " id="BACK2" class="btn btn glow mb-1 mb-sm-0 mr-0 mr-sm-1">Back</button>
                </div>
            </form>
        </section>
    </div>
</section>

@endsection