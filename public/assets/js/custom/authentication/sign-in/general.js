"use strict";

// Class definition
var KTSigninGeneral = (function () {
    // Elements
    var form;
    var submitButton;
    var validator;

    // Handle form
    var handleValidation = function (e) {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validator = FormValidation.formValidation(form, {
            fields: {
                nim: {
                    validators: {
                        // regexp: {
                        //     regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                        //     message: "The value is not a valid  aemailddress",
                        // },
                        notEmpty: {
                            message: "Nim diperlukan",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Password diperlukan",
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "", // comment to enable invalid state icons
                    eleValidClass: "", // comment to enable valid state icons
                }),
            },
        });
    };

    var handleSubmitAjax = function (e) {
        // Handle form submit
        submitButton.addEventListener("click", function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == "Valid") {
                    // Show loading indication
                    submitButton.setAttribute("data-kt-indicator", "on");

                    // Disable button to avoid multiple clicks
                    submitButton.disabled = true;

                    // Send AJAX request using Axios
                    axios
                        .post(
                            submitButton.closest("form").getAttribute("action"),
                            new FormData(form)
                        )
                        .then(function (response) {
                            console.log(response);
                            // Check if login was successful based on backend response
                            if (response.data.success) {
                                // Reset form
                                form.reset();

                                // Show success message
                                Swal.fire({
                                    text:
                                        response.data.message ||
                                        "Anda telah berhasil login!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });

                                // Redirect if a URL is provided
                                if (response.data.redirect_url) {
                                    location.href = response.data.redirect_url;
                                }
                            } else {
                                // Show error message from backend
                                Swal.fire({
                                    text:
                                        response.data.message ||
                                        "NIM atau password salah.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                        })
                        .catch(function (error) {
                            // Handle server or network errors
                            let pesan = "Terjadi kesalahan pada server.";

                            if (error.response) {
                                // If backend returns a specific error message
                                if (error.response.data.message) {
                                    pesan = error.response.data.message;
                                }
                            }

                            // Show error alert
                            Swal.fire({
                                text: pesan,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "OK!",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                },
                            });
                        })
                        .then(() => {
                            // Hide loading indicator and re-enable button
                            submitButton.removeAttribute("data-kt-indicator");
                            submitButton.disabled = false;
                        });
                } else {
                    // If form validation fails, you can show a generic error message
                    Swal.fire({
                        text: "Harap isi form dengan benar sebelum melanjutkan.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });
    };
    var isValidUrl = function (url) {
        try {
            new URL(url);
            return true;
        } catch (e) {
            return false;
        }
    };

    // Public functions
    return {
        // Initialization
        init: function () {
            form = document.querySelector("#kt_sign_in_form");
            submitButton = document.querySelector("#kt_sign_in_submit");

            handleValidation();

            // if (
            //     isValidUrl(submitButton.closest("form").getAttribute("action"))
            // ) {
            handleSubmitAjax(); // use for ajax submit
            // } else {
            //     handleSubmitDemo(); // used for demo purposes only
            // }
        },
    };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
