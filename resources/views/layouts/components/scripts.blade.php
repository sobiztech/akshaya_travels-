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

        visaTypeSelect.addEventListener('change', function() {
            const selectedVisa = this.value;

            if (selectedVisa === 'Tourist/Visitor Visa') {
                touristFields.style.display = 'block';
                studentFields.style.display = 'none';
            } else if (selectedVisa === 'Student Visa') {
                touristFields.style.display = 'none';
                studentFields.style.display = 'block';
            } else {
                touristFields.style.display = 'none';
                studentFields.style.display = 'none';
            }
        });
    });
</script>

<script>
    const scriptURLAirline = 'https://script.google.com/macros/s/AKfycbyc2cTc5WEl7M2c7v2q2FjDY0pouymeqn2fW7GcmoUcptrV8V6r0fAxIhGk_QY7-Es/exec';
    const formAirline = document.forms['contact-formAirline'];

    form.addEventListener('submit', e => {
        e.preventDefault();

        if (form.checkValidity()) {
            fetch(scriptURLAirline, {
                    method: 'POST',
                    body: new FormData(formAirline)
                })
                .then(response => {
                    // SweetAlert for success message
                    swal("Thanks!", "Your form has been successfully submitted.", "success");
                })
                .then(() => {
                    // Reload the current page
                    window.location.reload();
                })
                .catch(error => console.error('Error!', error.message));
        } else {
            //  SweetAlert for error message
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>

<script>
    const scriptURLVisa = 'https://script.google.com/macros/s/AKfycbyc2cTc5WEl7M2c7v2q2FjDY0pouymeqn2fW7GcmoUcptrV8V6r0fAxIhGk_QY7-Es/exec';
    const formVisa = document.forms['contact-formVisa'];

    form.addEventListener('submit', e => {
        e.preventDefault();

        if (form.checkValidity()) {
            fetch(scriptURLVisa, {
                    method: 'POST',
                    body: new FormData(formVisa)
                })
                .then(response => {
                    // SweetAlert for success message
                    swal("Thanks!", "Your form has been successfully submitted.", "success");
                })
                .then(() => {
                    // Reload the current page
                    window.location.reload();
                })
                .catch(error => console.error('Error!', error.message));
        } else {
            //  SweetAlert for error message
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>