<div id="detail_kadiya" class="form card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="detail_kadiya">
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">{{ __('messages.experienceForm2')}}</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('messages.experienceInfoForm2')}}"></i>
        </label>
        <!--end::Label-->
        <input type="text" class="form-control form-control-solid" placeholder="{{ __('messages.experienceForm2')}}" name="experience" />
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">{{ __('messages.NdeDeclarationForm2')}}</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('messages.NdeDeclarationInfoForm2')}}"></i>
        </label>
        <!--end::Label-->
        <input type="text" class="form-control form-control-solid" placeholder="{{ __('messages.NdeDeclarationForm2')}}" name="num_notification" />
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-bold mb-2">{{ __('messages.NdeDeclaration1Form2')}}</label>
            <!--begin::Input-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon position-absolute svg-icon-2x">
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Dial-numbers.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <!--end::Icon-->
                <!--begin::Datepicker-->
                <input class="form-control form-control-solid ps-12" placeholder="{{ __('messages.NdeDeclaration1Form2')}}" name="num_notification_libelle" />
                <!--end::Datepicker-->
            </div>
            <!--end::Input-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
            <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-bold mb-2">{{ __('messages.NotificationJudiciaireForm2')}}</label>
            <select class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_1" data-placeholder="{{ __('messages.NotificationJudiciaireForm2')}}" name="id_commissaire_not">
                {{-- <option selected>{{ __('messages.NotificationJudiciaireForm2')}}</option> --}}
                <option></option>
                @foreach ($dossiers as $dossier)
                <option value="{{$dossier->id_commissaire_not}}">{{$dossier->id_commissaire_not}}</option>
                @endforeach
            </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">{{ __('messages.NdExecutionForm2')}}</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="{{ __('messages.NdExecutionInfoForm2')}}"></i>
        </label>
        <!--end::Label-->
        <input type="text" class="form-control form-control-solid" placeholder="{{ __('messages.NdExecutionForm2')}}" name="num_execution" />
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row g-9 mb-8">
        <!--begin::Col-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-bold mb-2">{{ __('messages.NdExecution1Form2')}}</label>
            <!--begin::Input-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon position-absolute svg-icon-2x">
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Dial-numbers.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"/>
                            <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"/>
                            <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"/>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <!--end::Icon-->
                <!--begin::Datepicker-->
                <input class="form-control form-control-solid ps-12" placeholder="{{ __('messages.NdExecution1Form2')}}" name="num_execution_libelle" />
                <!--end::Datepicker-->
            </div>
            <!--end::Input-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 fv-row">
            <label class="required fs-6 fw-bold mb-2">{{ __('messages.Execution1JudiciaireForm2')}}</label>
            <select class="form-select form-select-solid" data-control="select2" data-hide-search="false" data-dropdown-parent="#kt_modal_1" data-placeholder="{{ __('messages.Execution1JudiciaireForm2')}}" name="id_commissaire_execution">
                {{-- <option selected>{{ __('messages.Execution1JudiciaireForm2')}}</option> --}}
                <option></option>
                @foreach ($dossiers as $dossier)
                <option value="{{$dossier->id_commissaire_execution}}">{{$dossier->id_commissaire_execution}}</option>
                @endforeach
            </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8">
        <label class="fs-6 fw-bold mb-2">{{ __('messages.RemarquesForm2')}}</label>
        <textarea class="form-control form-control-solid" rows="3" name="remarques" placeholder="{{ __('messages.RemarquesForm2')}}"></textarea>
    </div>
    <!--end::Input group-->
</div>