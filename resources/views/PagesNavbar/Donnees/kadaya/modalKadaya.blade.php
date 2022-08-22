
    <!--begin::Modal - New Target-->
		<div class="modal fade" id="kt_modal_1" tabindex="-1" aria-labelledby="kt_modal_1_Label" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content rounded">


                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <div class="card">
                            <!--begin::Card head-->
                            <div class="card-header card-header-stretch">
                                <!--begin::Toolbar-->
                                <div class="card-toolbar m-0">
                                    <!--begin::Tab nav-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bolder" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#infos_kadiya">{{ __('messages.titre1MenuForm')}}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#detail_kadiya">{{ __('messages.titre2MenuForm')}}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#donn_supplementaires">{{ __('messages.titre3MenuForm')}}</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#numero_dossier">{{ __('messages.titre4MenuForm')}}</a>
                                        </li>
                                    </ul>
                                    <!--end::Tab nav-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card head-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Tab Content-->
                                <form id="form" class="form card-body p-0 tab-pane" action="create_dossier" method="POST"  role="tabpanel" >
                                    @csrf
                                    <div class="tab-content"> 
                                        <!--begin::Form-->  
                                            <!--begin:Form1-->
                                                @include('PagesNavbar.Donnees.kadaya.form1')
                                            <!--end:Form1-->                            
                                            <!--begin::Form2-->
                                                @include('PagesNavbar.Donnees.kadaya.form2')
                                            <!--end::Form2-->
                                            <!--begin::Form3-->
                                                @include('PagesNavbar.Donnees.kadaya.form3')
                                            <!--end::Form3-->
                                            <!--begin::Form4-->
                                                @include('PagesNavbar.Donnees.kadaya.form4')
                                            <!--end::Form4--> 
                                    </div>
                                    <!--begin::modal footer-->
                                    <div class="modal-footer">
                                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">{{ __('messages.annulerForm')}}</button>
                                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                            <span class="indicator-label">{{ __('messages.enregistrerForm')}}</span>
                                            <span class="indicator-progress">{{ __('messages.attendezForm')}}
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::modal footer-->

                                </form> 
                                <!--end::Tab Content-->
                                <!--end::Form-->      
                            </div>
                            <!--end::Card body-->
                        </div>

                    </div>
                    <!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - New Target-->