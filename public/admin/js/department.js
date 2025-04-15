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

        function updateAjax(dept_no){
            JsDefault.blockUI();

            $.ajax({
                url: '/department/update',
                method: 'POST',
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
        return {
            openFormEditAjax: function (dept_no){openFormEditAjax(dept_no)},
        }
    }();
};
