<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="../assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Owl carousel JS -->
<script src="../assets/plugins/company-slider/slider.js"></script>
<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>

<!-- landing JS -->
<script src="../assets/js/landing.js"></script>

<!-- SELECT2 JS -->
<script src="../assets/plugins/select2/select2.full.min.js"></script>

<!-- FORMVALIDATION JS -->
<script src="../assets/js/form-validation.js"></script>

<!-- FORM ELEMENTS JS -->
<script src="../assets/js/formelementadvnced.js"></script>

<!-- Sweet-alert js  -->
<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="../assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>

<!-- BLOG DETAILS JS-->
<script src="../assets/js/blog-details.js"></script>

<!-- GALLERY JS -->
<script src="../assets/plugins/gallery/picturefill.js"></script>
<script src="../assets/plugins/gallery/lightgallery.js"></script>
<script src="../assets/plugins/gallery/lightgallery-1.js"></script>
<script src="../assets/plugins/gallery/lg-pager.js"></script>
<script src="../assets/plugins/gallery/lg-autoplay.js"></script>
<script src="../assets/plugins/gallery/lg-fullscreen.js"></script>
<script src="../assets/plugins/gallery/lg-zoom.js"></script>
<script src="../assets/plugins/gallery/lg-hash.js"></script>
<script src="../assets/plugins/gallery/lg-share.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const visaTypeSelect = document.getElementById('visaType');
        const touristFields = document.getElementById('touristFields');
        const studentFields = document.getElementById('studentFields');
        const touristFieldsInputs = touristFields.querySelectorAll('input, select');
        const studentFieldsInputs = studentFields.querySelectorAll('input, select');

        function updateValidation(inputs, required) {
            inputs.forEach(input => {
                if (required) {
                    input.setAttribute('required', 'required');
                } else {
                    input.removeAttribute('required');
                }
            });
        }

        visaTypeSelect.addEventListener('change', function() {
            const selectedVisa = this.value;

            if (selectedVisa === 'Tourist/Visitor Visa') {
                touristFields.style.display = 'block';
                studentFields.style.display = 'none';
                updateValidation(touristFieldsInputs, true);
                updateValidation(studentFieldsInputs, false);
            } else if (selectedVisa === 'Student Visa') {
                touristFields.style.display = 'none';
                studentFields.style.display = 'block';
                updateValidation(touristFieldsInputs, false);
                updateValidation(studentFieldsInputs, true);
            } else {
                touristFields.style.display = 'none';
                studentFields.style.display = 'none';
                updateValidation(touristFieldsInputs, false);
                updateValidation(studentFieldsInputs, false);
            }
        });
    });
</script>

<script>
    var scriptURL = "{{ config('custom.appscript_airline_ticket_excel') }}";
    const form = document.forms['contact-formApplication'];

    form.addEventListener('submit', e => {
        e.preventDefault();

        if (form.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Application is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    // Show success message
                    swal("Thanks!", "Your form has been successfully submitted.", "success");
                })
                .then(() => {
                    // Reload the current page after a delay
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000); // Adjust the delay time if necessary
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    // Show error message
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            // Show error message for invalid form
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>

<script>
    var scriptURLVisa = "{{ config('custom.appscript_visa_excel') }}";
    const formVisa = document.forms['contact-formVisa'];

    formVisa.addEventListener('submit', e => {
        e.preventDefault();

        if (formVisa.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Application is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURLVisa, {
                    method: 'POST',
                    body: new FormData(formVisa)
                })
                .then(response => {
                    // Show success message
                    swal("Thanks!", "Your form has been successfully submitted.", "success");
                })
                .then(() => {
                    // Reload the current page after a delay
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000); // Adjust the delay time if necessary
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    // Show error message
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            // Show error message for invalid form
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>

<script>
    var scriptURLContact = "{{ config('custom.appscript_contact_excel') }}";
    const formContact = document.forms['contact-formContact'];

    formContact.addEventListener('submit', e => {
        e.preventDefault();

        if (formContact.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Application is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURLContact, {
                    method: 'POST',
                    body: new FormData(formContact)
                })
                .then(response => {
                    // Show success message
                    swal("Thanks!", "Your form has been successfully submitted.", "success");
                })
                .then(() => {
                    // Reload the current page after a delay
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000); // Adjust the delay time if necessary
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    // Show error message
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            // Show error message for invalid form
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>