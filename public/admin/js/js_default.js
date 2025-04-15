'use strict';

const JsDefault = function () {
    return {
        blockUI: function () {
            const loadingEl = document.createElement("div");
            loadingEl.classList.add("page-loader", "flex-column", "bg-dark", "bg-opacity-25");

            loadingEl.innerHTML = `
                <div class="d-flex justify-content-center align-items-center flex-column p-10 bg-white rounded shadow" style="min-width: 100px;">
                    <span class="spinner-border text-primary" role="status"></span>
                    <span class="text-gray-800 fs-6 fw-semibold mt-5">Loading...</span>
                </div>
            `;

            // Thêm vào đầu body
            document.body.prepend(loadingEl);

            // Gọi function có sẵn
            KTApp.showPageLoading();
        },

        unBlockUI: function () {
            KTApp.hidePageLoading();
            const el = document.querySelector('.page-loader');
            if (el) el.remove();
        }
    }
}();
