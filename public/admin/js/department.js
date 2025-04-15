var Department = function () {
    this.initObject();
};

Department.prototype.initObject = function () {
    var self = this;
    self.object = function () {

        function openFormEditAjax(dept_no) {
            // JsDefault.blockUI();

            $.ajax({
                url: '/department/ajax-edit',
                method: 'GET',
                data: {
                    dept_no: dept_no,
                },
                success: function (res) {
                    console.log(res);
                    if (res.success === true) {
                        $('#dynamic-modal').remove();

                        const $modal = $('<div>', {
                            id: 'dynamic-modal',
                            html: res.html
                        });

                        // Gắn modal vào body
                        $('body').append($modal);

                        $('#dynamic-modal .modal').modal('show');
                    } else {

                    }
                    // JsDefault.unblockUI();
                }
            });
        }

        return {
            openFormEditAjax: function (dept_no){openFormEditAjax(dept_no)},
        }
    }();
};
