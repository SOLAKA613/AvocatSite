            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="{{ __('messages.search')}}"/>
            </div>
            <!--end::Search-->

            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">

                <a href="#" style='width:40px' class="btn btn-icon btn-light-twitter me-5"><i style="{{ __('messages.margin')}} 6px;" class="fa-solid fa-arrows-rotate fs-2 me-2"></i></a>

                <!--begin::Exporter-->                
                <a href="#" class="btn btn-icon btn-info btnInfo"><i class="fa-solid fa-cloud-arrow-down  me-2"></i> {{ __('messages.exporter')}}</a>
                <!--end::Exporter-->

                <!--begin::Importer-->                
                <a href="#" class="btn btn-icon btn-success btnSucc"><i class="fa-solid fa-cloud-arrow-up  me-2"></i> {{ __('messages.importer')}}</a>
                <!--end::Importer-->

                <!--begin::Add ajouter-->
                <a href="#" class="btn btn-icon btn-primary btnSucc" data-bs-toggle="modal" data-bs-target="#kt_modal_1" title="{{ __('messages.ajoterKadiya')}}">
                    <i class="fa-solid fa-plus me-2"></i> {{ __('messages.ajot')}}
                </a>
                <!--end::Add ajouter-->
            </div>
            <!--end::Toolbar-->