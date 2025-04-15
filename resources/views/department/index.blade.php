@php
    use App\View\Widgets\BreadcrumbWidget;
    use Carbon\Carbon;
@endphp
@extends('layout.main')
@section('title_page')
    Department
@endsection
@section('content_page')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center me-3 flex-wrap lh-1">

                    <!--begin::Breadcrumb-->
                    {!! BreadcrumbWidget::render() !!}
                    <!--end::Breadcrumb-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <div class="me-4">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bold"
                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                           data-kt-menu-flip="top-end">
                            <i class="ki-outline ki-filter fs-5 text-gray-500 me-1"></i>Filter</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                             id="kt_menu_6606605c2804f">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                                multiple="" data-kt-select2="true" data-close-on-select="false"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_6606605c2804f"
                                                data-allow-clear="true" data-select2-id="select2-data-7-jf6h"
                                                tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span
                                            class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-8-ztxw"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="-1" aria-disabled="false"><ul
                                                        class="select2-selection__rendered"
                                                        id="select2-ky4z-container"></ul><span
                                                        class="select2-search select2-search--inline"><textarea
                                                            class="select2-search__field" type="search"
                                                            tabindex="0" autocorrect="off" autocapitalize="none"
                                                            spellcheck="false" role="searchbox"
                                                            aria-autocomplete="list" autocomplete="off"
                                                            aria-label="Search"
                                                            aria-describedby="select2-ky4z-container"
                                                            placeholder="Select option"
                                                            style="width: 100%;"></textarea></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                   checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                               name="notifications" checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Departments</h3>
                                    {{--                                <div class="card-toolbar">--}}
                                    {{--                                    <button type="button" class="btn btn-sm btn-light">--}}
                                    {{--                                        Action--}}
                                    {{--                                    </button>--}}
                                    {{--                                </div>--}}
                                </div>
                                <form action="" method="GET">
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12 mb-5">
                                                <div class="form-group">
                                                    <label for="search" class="form-label">Search name or code</label>
                                                    <input type="text" class="form-control" id="search"
                                                           name="keyword" placeholder="Search..."
                                                           value="<?= $_GET['keyword'] ?? '' ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12 mb-5">
                                                <div class="form-group">
                                                    <label for="submit" class="form-label">&nbsp;</label>
                                                    <div class="btn-actions">
                                                        <button type="submit" class="btn btn-primary">Submit
                                                        </button>
                                                        <a href="/"
                                                           class="btn btn-secondary">Reset</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" id="table-departments">
                                            <thead>
                                            <tr class="text-center">
                                                <th>#</th>
                                                <x-component-th-sort-link :columns="[
                                                    'dept_no' => 'Code',
                                                    'dept_name' => 'Name',
                                                    'created_at' => 'Created at',
                                                    'updated_at' => 'Updated at'
                                                ]"/>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($departments as $itemDepartments)
                                                <tr class="">
                                                    <td class="text-center "><b>{{ $loop->iteration }}</b></td>
                                                    <td class="text-center">{{ $itemDepartments->dept_no }}</td>
                                                    <td>{{ $itemDepartments->dept_name }}</td>
                                                    <td class="text-center">{{ HelperFormat::date($itemDepartments->created_at) }}</td>
                                                    <td class="text-center">{{ HelperFormat::date($itemDepartments->updated_at)  }}</td>
                                                    <td class="text-center">
                                                        <i class="bi bi-pencil-square fs-1 text-warning cursor-pointer" onclick="department.object.openFormEditAjax(<?= $itemDepartments->dept_no ?>)"></i>
                                                        <form
                                                            action="https://pop.diveinthebluesky.biz/creative-banner/campaigns/204"
                                                            method="POST" class="d-inline"
                                                            id="form-delete-campaign-204">
                                                            <input type="hidden" name="_token"
                                                                   value="UeJ7XtZ7GY7uDZp6fhefHc2Afq47GWGTlskzhHnp"
                                                                   autocomplete="off"> <input
                                                                type="hidden" name="_method" value="DELETE">
                                                            <button
                                                                type="submit" class="btn-delete" title="Delete Campaign"
                                                                style="background: transparent; border: none; color: #e63757;">
                                                                <i class="bi bi-trash fs-1 text-danger"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            {{--                                            <tfoot>--}}
                                            {{--                                            <tr class="text-center fw-bold">--}}
                                            {{--                                                <td>Total</td>--}}
                                            {{--                                                <td>-</td>--}}
                                            {{--                                                <td>-</td>--}}
                                            {{--                                                <td class="text-end">1,182,630</td>--}}
                                            {{--                                                <td class="text-end">801,855</td>--}}
                                            {{--                                                <td class="text-end">2,172</td>--}}
                                            {{--                                                <td class="text-end">-</td>--}}
                                            {{--                                                <td class="text-end">0.00</td>--}}
                                            {{--                                                <td class="text-end">-</td>--}}
                                            {{--                                            </tr>--}}
                                            {{--                                            </tfoot>--}}
                                        </table>
                                    </div>
                                    <div class="pagination-wrapper">
                                        {{ $departments->links('pagination::bootstrap-5') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('admin/js/department.js') }}"></script>
    <script>
        const department = new Department();
    </script>
@endpush
