<div class="modal fade show" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <div class="modal-content">
            <form method="POST" id="_form_edit_department">
                @csrf
                <div class="modal-header">
                    <h2>Edit department</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                </div>

                <div class="modal-body py-lg-10 px-lg-10">

                    <!--begin::Form group-->
                    <div class="form-group">
                        <div data-repeater-list="kt_docs_repeater_basic">
                            <div data-repeater-item>
                                <div class="mb-10">
                                    <label for="dept_no" class="required form-label">Code</label>
                                    <input type="number" id="dept_no" class="form-control form-control-solid"
                                           value="<?= $department->dept_no ?>" disabled readonly/>
                                </div>
                                <div class="mb-10">
                                    <label for="dept_name" class="required form-label">Name</label>
                                    <input type="text" id="dept_name" class="form-control form-control-solid"
                                           placeholder="Enter name" value="<?= $department->dept_name ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="department.object.updateAjax()">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
