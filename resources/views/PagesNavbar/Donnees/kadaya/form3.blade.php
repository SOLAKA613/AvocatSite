<div id="donn_supplementaires" class="form card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="donn_supplementaires">
    <!--begin::Paragraphe1-->
    <div class="mb-13 text-center" >  
        <div class="mb-3">{{ __('messages.donneeSessionForm3')}}</div>  
    </div>
    <!--end::Paragraphe1-->
    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-6 form-floating">
            <!--begin::Input-->
            <input name="date_audience" class="form-control date" id="dateForm3"  placeholder="{{ __('messages.dateForm3')}}" />
            <label for="dateForm3" style="{{ __('messages.langInpForm1')}}">{{ __('messages.dateForm3')}}</label>
            <!--end::Input-->
        </div>
        <!--end::Col-->     
        <!--begin::Col-->
        <div class="col-md-6 fv-row" data-kt-calendar="datepicker">
            <!--begin::Timepicker-->
            <div class="fv-row mb-9 form-floating">
                <!--begin::Input-->
                <input type="time"  class="form-control" id="heuForm3" name="heureForm3" placeholder="{{ __('messages.heureForm3')}}"/>
                <label for="heuForm3">{{ __('messages.heureForm3')}}</label>
                <!--end::Input-->
            </div>
            <!--end::Timepicker-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Jugement-->
        <div class="form-floating">
            <!--begin::Select-->
            <select class="form-select" id="juForm3" name="id_juge_decideur" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_1"  aria-label="jugement">
                {{-- <option selected value>{{ __('messages.jugeForm3')}}</option> --}}
                <option></option>
                @foreach ($juges as $juge)
                    @if(!empty($juge->nom_ar))
                    <option value="{{$juge->id}}">{{$juge->nom_ar}}</option>
                    @endif
                @endforeach
            </select>
            <!--end::Select-->
            <label for="juForm3">{{ __('messages.jugeForm3')}}</label>
        </div>
        <!--end::Jugement-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Input-->
        <div class="form-floating d-flex flex-column mb-8">
            <textarea class="form-control" name="procedure" placeholder="{{ __('messages.sessionForm3')}}" id="sessionForm3" style="height: 70px"></textarea>
            <label for="sessionForm3">{{ __('messages.sessionForm3')}}</label>
        </div>
        <!--end::Input-->
    </div>
    <!--end::Input group-->
    <!--begin::Paragraphe2-->
    <div class="mb-13 text-center" >  
        <div class="mb-3">{{ __('messages.actionFutureForm3')}}</div>  
    </div>
    <!--end::Paragraphe2-->
    <!--begin::Col-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Col-->
        <div class="form-floating">
            <!--begin::Input-->
            <input name="date_ex_1" class="form-control date" id="daActionForm3"  placeholder="{{ __('messages.dateActionForm3')}}" />
            <label for="daActionForm3" style="{{ __('messages.langInpForm1')}}">{{ __('messages.dateActionForm3')}}</label>
            <!--end::Input-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Col-->
    <!--begin::Input group-->
    <div class="form-floating d-flex flex-column mb-8">
        <textarea class="form-control" rows="3" name="procedure_demande" placeholder="{{ __('messages.actionForm3')}}" id="actForm3" style="height: 70px"></textarea>
        <label for="actForm3">{{ __('messages.actionForm3')}}</label>
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="form-floating d-flex flex-column mb-8">
            <textarea class="form-control" name="decision" placeholder="{{ __('messages.jugementForm3')}}" id="jugForm3" style="height: 70px"></textarea>
            <label for="jugForm3">{{ __('messages.jugementForm3')}}</label>
    </div>
    <!--end::Input group-->
</div>   