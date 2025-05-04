var Department = function () {
    this.initObject();
    this._csrf = '';
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
                    JsDefault.unBlockUI();
                    if (res.success === true) {
                        $('#dynamic-modal').remove();

                        const modal = $('<div>', {
                            id: 'dynamic-modal',
                            html: res.html
                        });

                        // Gắn modal vào body
                        $('body').append(modal);

                        $('#dynamic-modal .modal').modal('show');
                    } else {
                        toastr.error('Please reload the page !');
                    }
                }
            });
        }

        function updateAjax(){
            JsDefault.blockUI();
            const deptNo = $('#dept_no').val();
            const deptName = $('#dept_name').val();

            $.ajax({
                url: '/department/ajax-update',
                method: 'POST',
                data: {
                    _token: self._csrf,
                    dept_no: deptNo,
                    dept_name: deptName,
                },
                success: function (res) {
                    JsDefault.unBlockUI();
                    if (res.success === true) {
                        $('#dynamic-modal .modal').modal('hide');
                        toastr.success(res.message);
                    } else {
                        toastr.error('Please reload the page !');
                    }
                }
            });
        }

        return {
            openFormEditAjax: function (dept_no){openFormEditAjax(dept_no)},
            updateAjax: function (dept_no){updateAjax(dept_no)},
        }
    }();
};
