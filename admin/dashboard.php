<?php include "../layouts/header.php" ?>

<div class="app-wrapper">
  <!--begin::Header-->
  <?php include "../layouts/admin/navbar.php" ?>
  <?php include "../layouts/admin/sidebar.php" ?>

  <main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6">
            <h3 class="mb-0">Dashboard</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <!--begin::Col-->
          <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 1-->
            <div class="small-box text-bg-danger">
              <div class="inner">
                <h3>150</h3>
                <p>Incidents</p>
              </div>
              <i class="bi bi-exclamation-triangle-fill small-box-icon fs-1"></i>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>
            <!--end::Small Box Widget 1-->
          </div>

          <!--end::Col-->

          <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 2-->
            <div class="small-box text-bg-warning">
              <div class="inner">
                <h3>53<sup class="fs-5">%</sup></h3>
                <p>Notifications</p>
              </div>
              <i class="bi bi-bell-fill small-box-icon fs-1"></i>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>

            <!--end::Small Box Widget 2-->
          </div>
          <!--end::Col-->

          <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 3-->
            <div class="small-box text-bg-success">
              <div class="inner">
                <h3>44</h3>
                <p>Teams</p>
              </div>
              <i class="bi bi-people-fill small-box-icon fs-1"></i>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>


            <!--end::Small Box Widget 3-->
          </div>
          <!--end::Col-->

          <div class="col-lg-3 col-6">
            <!--begin::Small Box Widget 4-->
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>65</h3>
                <p>Users</p>
              </div>
              <i class="bi bi-person-fill small-box-icon fs-1"></i>
              <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                More info <i class="bi bi-link-45deg"></i>
              </a>
            </div>

            <!--end::Small Box Widget 4-->
          </div>
          <!--end::Col-->
        </div>

        <!--end::Row-->
        <!--begin::Row-->
        <div class="row">
          <!-- Start col -->
          <div class="col-lg-6 connectedSortable">
            <div class="card mb-4">
              <div class="card-header">
                <h3 class="card-title">Sales Value</h3>
              </div>
              <div class="card-body">
                <div id="revenue-chart"></div>
              </div>
            </div>
          </div>



          <div class="col-lg-6 connectedSortable">
            <div class="card mb-4">
              <div class="card-header">
                <h3 class="card-title">Sales Values</h3>
              </div>
              <div class="card-body">
<?php
// Labels for the X-axis (Months)
$labels = ["January", "February", "March", "April", "May"];

// Example data for each disaster type (per month)
$earthquake = [5, 7, 6, 9, 4];
$fire = [3, 4, 2, 6, 5];
$tsunami = [2, 1, 3, 2, 1];
$flood = [8, 10, 7, 5, 6];
?>
<canvas id="myChart" width="400" height="200"></canvas>
   </div>
            </div>
          </div>





        </div>
        <!-- /.row (main row) -->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
  </main>
  <!--end::App Main-->
  <!--begin::Footer-->
  <footer class="app-footer">
    <!--begin::To the end-->
    <div class="float-end d-none d-sm-inline">Anything you want</div>
    <!--end::To the end-->
    <!--begin::Copyright-->
    <strong>
      Copyright &copy; 2014-2025&nbsp;
      <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
    </strong>
    All rights reserved.
    <!--end::Copyright-->
  </footer>
  <!--end::Footer-->
</div>
<!--end::App Wrapper-->
<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
  src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
  integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
  crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
  crossorigin="anonymous"></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="../dist/js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
  const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
  const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
  };
  document.addEventListener('DOMContentLoaded', function() {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
      OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: {
          theme: Default.scrollbarTheme,
          autoHide: Default.scrollbarAutoHide,
          clickScroll: Default.scrollbarClickScroll,
        },
      });
    }
  });
</script>
<!--end::OverlayScrollbars Configure-->
<!-- OPTIONAL SCRIPTS -->
<!-- sortablejs -->
<script
  src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
  integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
  crossorigin="anonymous"></script>
<!-- sortablejs -->
<script>
  new Sortable(document.querySelector('.connectedSortable'), {
    group: 'shared',
    handle: '.card-header',
  });

  const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
  cardHeaders.forEach((cardHeader) => {
    cardHeader.style.cursor = 'move';
  });
</script>
<!-- apexcharts -->
<script
  src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
  integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
  crossorigin="anonymous"></script>
<!-- ChartJS -->
<script>
  // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
  // IT'S ALL JUST JUNK FOR DEMO
  // ++++++++++++++++++++++++++++++++++++++++++

  const sales_chart_options = {
    series: [{
        name: 'Digital Goods',
        data: [28, 48, 40, 19, 86, 27, 90],
      },
      {
        name: 'Electronics',
        data: [65, 59, 80, 81, 56, 55, 40],
      },
    ],
    chart: {
      height: 300,
      type: 'area',
      toolbar: {
        show: false,
      },
    },
    legend: {
      show: false,
    },
    colors: ['#0d6efd', '#20c997'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'smooth',
    },
    xaxis: {
      type: 'datetime',
      categories: [
        '2023-01-01',
        '2023-02-01',
        '2023-03-01',
        '2023-04-01',
        '2023-05-01',
        '2023-06-01',
        '2023-07-01',
      ],
    },
    tooltip: {
      x: {
        format: 'MMMM yyyy',
      },
    },
  };

  const sales_chart = new ApexCharts(
    document.querySelector('#revenue-chart'),
    sales_chart_options,
  );
  sales_chart.render();
</script>
<!-- jsvectormap -->
<script
  src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
  integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
  crossorigin="anonymous"></script>
<script
  src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
  integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
  crossorigin="anonymous"></script>
<!-- jsvectormap -->
<script>
  // World map by jsVectorMap
  new jsVectorMap({
    selector: '#world-map',
    map: 'world',
  });

  // Sparkline charts
  const option_sparkline1 = {
    series: [{
      data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
    }, ],
    chart: {
      type: 'area',
      height: 50,
      sparkline: {
        enabled: true,
      },
    },
    stroke: {
      curve: 'straight',
    },
    fill: {
      opacity: 0.3,
    },
    yaxis: {
      min: 0,
    },
    colors: ['#DCE6EC'],
  };

  const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
  sparkline1.render();

  const option_sparkline2 = {
    series: [{
      data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
    }, ],
    chart: {
      type: 'area',
      height: 50,
      sparkline: {
        enabled: true,
      },
    },
    stroke: {
      curve: 'straight',
    },
    fill: {
      opacity: 0.3,
    },
    yaxis: {
      min: 0,
    },
    colors: ['#DCE6EC'],
  };

  const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
  sparkline2.render();

  const option_sparkline3 = {
    series: [{
      data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
    }, ],
    chart: {
      type: 'area',
      height: 50,
      sparkline: {
        enabled: true,
      },
    },
    stroke: {
      curve: 'straight',
    },
    fill: {
      opacity: 0.3,
    },
    yaxis: {
      min: 0,
    },
    colors: ['#DCE6EC'],
  };

  const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
  sparkline3.render();
</script>
<!--end::Script-->


<!-- line chart -->


<!-- barchart -->

<script>
const ctx = document.getElementById('myChart').getContext('2d');

// Labels from PHP (Months)
const labels = <?php echo json_encode($labels); ?>;

// Datasets for each disaster type
const data = {
    labels: labels,
    datasets: [
        {
            label: 'Earthquake',
            data: <?php echo json_encode($earthquake); ?>,
            backgroundColor: 'rgba(255, 99, 132, 0.7)'
        },
        {
            label: 'Fire',
            data: <?php echo json_encode($fire); ?>,
            backgroundColor: 'rgba(255, 159, 64, 0.7)'
        },
        {
            label: 'Tsunami',
            data: <?php echo json_encode($tsunami); ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.7)'
        },
        {
            label: 'Flood',
            data: <?php echo json_encode($flood); ?>,
            backgroundColor: 'rgba(75, 192, 192, 0.7)'
        }
    ]
};

// Config and render the chart
const config = {
    type: 'bar',
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top'
            },
            title: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
};

new Chart(ctx, config);
</script>















<?php include "../layouts/footer.php" ?>