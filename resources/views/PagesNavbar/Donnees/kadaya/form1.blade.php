<div id="infos_kadiya" class="form card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="infos_kadiya">
    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col naw3 al 9ada2-->
        <div class="d-flex flex-column col-md-4 fv-row">
            <select name="nature_jugement" id="id_nature_jugement" class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false" data-placeholder="{{ __('messages.typeDepenseForm1')}}" >
                <option value="">{{ __('messages.typeDepenseForm1')}}</option>
                <option value="0">{{ __('messages.normalForm1')}}</option>
                <option value="1">{{ __('messages.administratifForm1')}}</option>
                <option value="2">{{ __('messages.commercialForm1')}}</option>
            </select>
        </div>
        <!--end::Col-->
        <!--begin::Col  darajat ta9adi-->
        <div class="col-md-4 fv-row">
            <select name="degree_cont" id='id_degree_cont' class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false" data-placeholder="{{ __('messages.DgrdeRaffinementForm1')}}" >
                <option value="">{{ __('messages.DgrdeRaffinementForm1')}}</option>
                <option value="0">{{ __('messages.primaireForm1')}}</option>
                <option value="1">{{ __('messages.appelantForm1')}}</option>
                <option value="2">{{ __('messages.interdictionForm1')}}</option>
            </select>
        </div>
        <!--end::Col-->
        <!--begin::Col al mahkama-->
        <div class="col-md-4 fv-row">
            <!--begin::Select-->
            <select name="tribune" id='id_tribune' class=" col-md-4 fv-row form-select form-select-solid" data-kt-select2="false" data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false" data-placeholder="{{ __('messages.TribunalForm1')}}" data-allow-clear="true">
                <!-- <option selected>{{ __('messages.TribunalForm1')}}</option> -->
                <option></option>
                @foreach ($tribunals as $tribunal)
                    @if(!empty($tribunal->nom_ar))
                        <option value="{{$tribunal->id}}">{{$tribunal->nom_ar}}</option>
                    @endif    
                @endforeach
            </select> 
            <!--end::Select-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-4 fv-row">
            <select name="nature" id="id_nature"  class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_1" data-placeholder="{{ __('messages.TypeCasForm1')}}" >
                {{-- <option selected>{{ __('messages.TypeCasForm1')}}</option> --}}
                <option></option>
                @foreach ($nature_dossiers as $nature_dossier)
                    @if(!empty($nature_dossier->nature_ar))
                    <option value="{{$nature_dossier->id}}">{{$nature_dossier->nature_ar}}</option>
                    @endif 
                @endforeach
            </select>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-8 fv-row">
            <!--begin::Select-->
            <select name="categorie" id="id_categorie" class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_1" data-placeholder="{{ __('messages.SujetCasForm1')}}" >
                {{-- <option selected>{{ __('messages.SujetCasForm1')}}</option> --}}
                <option></option>
                @foreach ($categorie_dossiers as $categorie_dossier)
                    @if(!empty($categorie_dossier->libelle))
                    <option value="{{$categorie_dossier->id}}">{{$categorie_dossier->libelle}}</option>
                    @endif
                @endforeach
            </select>
            <!--end::Select-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    
    <!--begin::Input group-->
    <div class="form-floating d-flex flex-column mb-8">
        <textarea  name="sujet" id="floatingTextarea2" class="form-control" placeholder="{{ __('messages.SujetForm1')}}"  style="height: 70px"></textarea>
        <label for="floatingTextarea2">{{ __('messages.SujetForm1')}}</label>
    </div>
    <!--end::Input group-->
    
    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-8 fv-row">
            <div class="form-floating">
                <!--begin::Select-->
                <select name="client" id="id_client" class="form-select" data-control="select2"  data-dropdown-parent="#kt_modal_1" data-hide-search="false" aria-label="Client" >
                    {{-- <option selected>{{ __('messages.ClientForm1')}}</option> --}}
                    <option></option>
                    @foreach ($clients as $client)
                        @if(!empty($client->nom))
                        <option value="{{$client->id}}">{{$client->nom}}</option>
                        @endif
                    @endforeach
                </select>
                <!--end::Select-->
                <label for="id_client">{{ __('messages.ClientForm1')}}</label>
            </div>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row">
            <div class="form-floating">
                <!--begin::Select-->
                <select name="position_client" id="id_position_client" class="form-select"  data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false" aria-label="Caracteristique Principal" >
                    {{-- <option selected>{{ __('messages.CaracteristiquePrincipalForm1')}}</option> --}}
                    <option></option>
                    @foreach ($client_positions as $client_position)
                        @if(!empty($client_position->libelle))
                        <option value="{{$client_position->id}}">{{$client_position->libelle}}</option>
                        @endif
                    @endforeach
                </select>
                <!--end::Select-->
                <label for="id_position_client">{{ __('messages.CaracteristiquePrincipalForm1')}}</label>
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    
    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-8 fv-row">
            <div class="form-floating">
                <!--begin::Select-->
                <select name="opposant" id="id_opposant"  class="form-select" data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false"  aria-label="Hostile" >
                    {{-- <option selected>{{ __('messages.HostileForm1')}}</option> --}}
                    <option></option>
                    @foreach ($clients as $opposant)
                        @if(!empty($opposant->nom))
                        <option value="{{$opposant->id}}">{{$opposant->nom}}</option>
                        @endif
                    @endforeach
                </select>
                <!--end::Select-->
                <label for="id_opposant">{{ __('messages.HostileForm1')}}</label>
            </div>
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4 fv-row">
            <div class="form-floating">
                <!--begin::Select-->
                <select name="position_opposant" id="id_position_opposant" class="form-select" id="AdjRemiseForm1" data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false"  aria-label="Adjectif Remise">
                    {{-- <option selected>{{ __('messages.AdjectifRemiseForm1')}}</option> --}}
                    <option></option>
                    @foreach ($client_positions as $client_position)
                        @if(!empty($client_position->libelle))
                        <option value="{{$client_position->id}}">{{$client_position->libelle}}</option>
                        @endif
                    @endforeach
                </select>
                <!--end::Select-->
                <label for="position_opposant">{{ __('messages.AdjectifRemiseForm1')}}</label>
            </div>
        </div>
        <!--end::Col-->
    </div>   
    <!--end::Input group-->
    <!--begin::Input group-->                                           
    <div class="row g-9 mb-8">                                      
        <!--begin::Col-->
        <div class="col-md-6 form-floating">
            <!--begin::Input-->
            <input name="numero_ordre" class="form-control" id="NumBureauForm1" type="text" placeholder="{{ __('messages.NumeroBureauForm1')}}"/>
            <label for="numero_ordre" style="{{ __('messages.langInpForm1')}}">{{ __('messages.NumeroBureauForm1')}}</label>
            <!--end::Input-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 form-floating">
            <!--begin::Input-->
            <input name="numero_archive" class="form-control" id="NumEnregistrementForm1"  type="text" placeholder="{{ __('messages.NumeroEnregistrementForm1')}}"/>  
            <label for="numero_archive" style="{{ __('messages.langInpForm1')}}">{{ __('messages.NumeroEnregistrementForm1')}}</label>
            <!--end::Input-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-6 form-floating">
            <!--begin::Input-->
            <input name="date_dossier_bureau" class="form-control date" id="DatOuvertureDossierForm1"  placeholder="{{ __('messages.DateOuvertureDossierForm1')}}" />
            <label for="DatOuvertureDossierForm1" style="{{ __('messages.langInpForm1')}}">{{ __('messages.DateOuvertureDossierForm1')}}</label>
            <!--end::Input-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 fv-row">
            <div class="form-floating">
                <!--begin::Select-->
                <select name="id_collaborateur_resp" class="form-select" id="RedAssigneForm1" data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false"  aria-label="Redacteur Assigne">
                    {{-- <option selected>{{ __('messages.RedacteurAssigneForm1')}}</option> --}}
                    <option></option>
                    @foreach ($employe_responsables as $employe_responsable)
                        @if(!empty($employe_responsable->nom))
                        <option value="{{$employe_responsable->id_employe}}">{{$employe_responsable->nom}}</option>
                        @endif
                    @endforeach
                </select>
                <!--end::Select-->
                <label for="id_collaborateur_resp">{{ __('messages.RedacteurAssigneForm1')}}</label>
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Select group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <div class="form-floating">
            <!--begin::Select-->
            <select name="id_avocat_responsable" class="form-select" id="AvDossierForm1" data-control="select2" data-dropdown-parent="#kt_modal_1" data-hide-search="false"  aria-label="Avocat Dossier">
                {{-- <option selected>{{ __('messages.AvocatDossierForm1')}}</option> --}}
                <option></option>
                @foreach ($avocats as $avocats)
                    @if(!empty($avocats->nom))
                    <option value="{{$avocats->id}}">{{$avocats->nom}}</option>
                    @endif
                @endforeach
            </select>
            <!--end::Select-->
            <label for="id_avocat_responsable">{{ __('messages.AvocatDossierForm1')}}</label>
        </div>
    </div>
    <!--end::Select group-->
</div>    