<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!-- Vendor JS Files -->
<script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/chart.js/chart.umd.js"></script>
<script src="../assets/vendor/echarts/echarts.min.js"></script>
<script src="../assets/vendor/quill/quill.js"></script>
<!-- <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script> -->
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
<script src="../assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>


<script>
    $(document).ready(function () {
        //auto active sidebar menu start (do not change this code)
        let currentPath = window.location.pathname;
        $('#sidebar ul li a').each(function () {
            let element = $(this);
            let href = element.attr('href');
            if (currentPath.includes(href)) {
                let main_li = element.closest('.nav-item');
                main_li.children('ul').addClass('show');
                main_li.children('a').removeClass('collapsed');
                element.addClass('active');
            }
        });
        //auto active sidebar menu end (do not change this code)

        //datatable start
        // let table = new DataTable('.my_dataTable', {
        //     responsive: true,
        // });
        new DataTable('.my_dataTable', {
            scrollX: true
        });
        //datatable end

    });
</script>