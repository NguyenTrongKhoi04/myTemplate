var Department = function () {
    this.initObject();
};

Department.prototype.initObject = function () {
    var self = this;
    self.object = function () {

        function openFormEditAjax(dept_no) {
            JsDefault.blockUI();

            $.ajax({
                url: '/department/ajax-edit',
                method: 'GET',
                data: {
                    dept_no: dept_no,
                },
                success: function (res) {
                    console.log(res)
                    if (res.success === true) {
                        toastr.success("Saved!");
                    } else {
                        toastr.error("Error!");
                    }
                    JsDefault.unblockUI();
                }
            });
        }

        return {
            openFormEditAjax: function (dept_no){openFormEditAjax(dept_no)},
        }
    }();
};
