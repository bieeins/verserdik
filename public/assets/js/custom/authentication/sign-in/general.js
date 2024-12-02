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

    var handleSubmitDemo = function (e) {
        // Handle form submit
        submitButton.addEventListener("click", function (e) {
            // Prevent button default action
            e.preventDefault();

            // Validate form
            validator.validate().then(function (status) {
                if (status == "Valid") {
                    // Show loading indication
                    submitButton.setAttribute("data-kt-indicator", "on");

                    // Disable button to avoid multiple click
                    submitButton.disabled = true;

                    // Simulate ajax request
                    setTimeout(function () {
                        // Hide loading indication
                        submitButton.removeAttribute("data-kt-indicator");

                        // Enable button
                        submitButton.disabled = false;

                        // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "You have successfully logged in!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        }).then(function (result) {
                            if (result.isConfirmed) {
                                form.querySelector('[name="email"]').value = "";
                                form.querySelector('[name="password"]').value =
                                    "";

                                //form.submit(); // submit form
                                var redirectUrl = form.getAttribute(
                                    "data-kt-redirect-url"
                                );
                                if (redirectUrl) {
                                    location.href = redirectUrl;
                                }
                            }
                        });
                    }, 2000);
                } else {
                    // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
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

    // var handleSubmitAjaxx = function (e) {
    //     // Handle form submit
    //     submitButton.addEventListener("click", function (e) {
    //         // Prevent button default action
    //         e.preventDefault();

    //         // Validate form
    //         validator.validate().then(function (status) {
    //             if (status == "Valid") {
    //                 // Show loading indication
    //                 submitButton.setAttribute("data-kt-indicator", "on");

    //                 // Disable button to avoid multiple click
    //                 submitButton.disabled = true;

    //                 // Check axios library docs: https://axios-http.com/docs/intro
    //                 axios
    //                     .post(
    //                         submitButton.closest("form").getAttribute("action"),
    //                         new FormData(form)
    //                     )
    //                     .then(function (response) {
    //                         if (response) {
    //                             form.reset();

    //                             // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
    //                             Swal.fire({
    //                                 text: "Anda telah berhasil login !",
    //                                 icon: "success",
    //                                 buttonsStyling: false,
    //                                 confirmButtonText: "Ok !",
    //                                 customClass: {
    //                                     confirmButton: "btn btn-primary",
    //                                 },
    //                             });

    //                             const redirectUrl = form.getAttribute(
    //                                 "data-kt-redirect-url"
    //                             );

    //                             if (redirectUrl) {
    //                                 location.href = redirectUrl;
    //                             }
    //                         } else {
    //                             // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
    //                             Swal.fire({
    //                                 text: "Maaf, email atau kata sandi salah, silakan coba lagi.",
    //                                 icon: "error",
    //                                 buttonsStyling: false,
    //                                 confirmButtonText: "Ok !",
    //                                 customClass: {
    //                                     confirmButton: "btn btn-primary",
    //                                 },
    //                             });
    //                         }
    //                     })
    //                     .catch(function (error) {
    //                         let pesan;
    //                         if (error.response) {
    //                             const data = error.response.data;
    //                             // Display error messages
    //                             if (data.errors && data.errors.nim) {
    //                                 // document.querySelector('#email-error').textContent = data.errors.email[0];
    //                                 pesan = data.errors.nim[0];
    //                             }

    //                             if (data.message) {
    //                                 // document.querySelector('#general-error').textContent = data.message;
    //                                 pesan = data.message;
    //                             }
    //                         } else {
    //                             // Handle other errors (e.g., network errors)
    //                             // document.querySelector('#general-error').textContent = 'An error occurred. Please try again later.';
    //                             pesan =
    //                                 "Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.";
    //                         }
    //                         Swal.fire({
    //                             // text: "Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.",
    //                             text: pesan,
    //                             icon: "error",
    //                             buttonsStyling: false,
    //                             confirmButtonText: "OK !",
    //                             customClass: {
    //                                 confirmButton: "btn btn-primary",
    //                             },
    //                         });
    //                     })
    //                     .then(() => {
    //                         // Hide loading indication
    //                         submitButton.removeAttribute("data-kt-indicator");

    //                         // Enable button
    //                         submitButton.disabled = false;
    //                     });
    //             } else {
    //             }
    //         });
    //     });
    // };

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
