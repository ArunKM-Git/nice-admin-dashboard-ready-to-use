<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('../include/head.php') ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include ('../include/header.php') ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include ('../include/sidebar.php') ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">All list here</h5>
              

              <!-- Table with stripped rows -->
              <table class="display nowrap dataTable dtr-inline collapsed w-100 my_dataTable" id="example">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>ame
                    </th>
                    <th>Ext.</th>
                    <th>City</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                    <th>Completion</th>
                    <th>Completion</th>
                    <th>Completion</th>
                    <th>Completion</th>
                    <th>Completion</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                  </tr>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include ('../include/footer.php') ?>

  <!-- End Footer -->

  <?php include ('../include/foot.php') ?>

</body>

</html>