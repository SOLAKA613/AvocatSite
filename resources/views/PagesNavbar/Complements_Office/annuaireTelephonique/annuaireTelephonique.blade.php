@extends('master')

    @section('title', "kadaya")
    @section('head')
    <link href="{{asset('assets/css/styleSelect.css')}}" rel="stylesheet" type="text/css" />
    @endsection
    @section('content')
       
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack mb-5">

            <!--begin::Title-->
            <div class="d-flex align-items-center position-relative my-1">
                <h1 class="text-dark">{{ __('messages.phone')}}</h1>
            </div>
            <!--end::Title-->

            <!--begin::Element Shearch and toolbar-->
                @include('PagesNavbar.elementsGeneral.elementsGeneral')
            <!--end::Element Shearch and toolbar-->

            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-docs-table-select="selected_count"></span> Selected
                </div>

                <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
                    Selection Action
                </button>
            </div>
            <!--end::Group actions-->
            
        </div>
        <!--end::Wrapper-->
        <!--begin::Datatable-->
        <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
                        </div>
                    </th>
                    <th>{{ __('messages.numero_archive')}}</th>
                    <th>{{ __('messages.categorie')}}</th>
                    <th>{{ __('messages.client_name')}}</th>
                    <th>{{ __('messages.juge_decideur')}}</th>
                    <th>{{ __('messages.step')}}</th>
                    <th>{{ __('messages.judicial_authority')}}</th>
                    <th>{{ __('messages.case_type')}}</th>
                    <th>{{ __('messages.topic')}}</th>
                    <th>{{ __('messages.office_file_history')}}</th> 
                    <th class="text-end min-w-100px">{{ __('messages.processes')}}</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 fw-bold">
            </tbody>
        </table>
        <!--end::Datatable-->

        <!--begin::Modal-->
			
		<!--end::Modal-->
    
    @endsection

    @push('scripts')
    <!-- <script type="text/javascript" src="{{ asset('assets/js/jsTable.js')}}"></script> -->
    <script type="text/javascript" src="{{ asset('js/dossierJS/updateDossier.js')}}"></script>
    @endpush