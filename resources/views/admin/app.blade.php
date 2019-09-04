<!DOCTYPE html>
<html lang="en">
  <head>
    <meta
      name="description"
      content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular."
    />
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:site" content="@pratikborsadiya" />
    <meta property="twitter:creator" content="@pratikborsadiya" />
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Vali Admin" />
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme" />
    <meta
      property="og:url"
      content="http://pratikborsadiya.in/blog/vali-admin"
    />
    <meta property="og:image" content="../blog/vali-admin/hero-social.png" />
    <meta
      property="og:description"
      content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular."
    />
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/backend/css/main.css') }}" />
    <!-- Font-icon css-->
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('/backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}"
    />
  </head>

  <body class="app sidebar-mini rtl">
   @include('admin.partials.header')
   @include('admin.partials.sidebar')
   @yield('content')
     <!-- Essential javascripts for application to work-->
    <script src="{{ asset('/backend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/backend/js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('/backend/js/plugins/pace.min.js') }}"></script>
       <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/dataTables.bootstrap.min.js')
     }}"></script>
   <script type="text/javascript">$('#sampleTable').DataTable();</script>
  <!-- **calender** -->
   <script type="text/javascript" src="{{ asset('/backend/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/jquery-ui.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/fullcalendar.min.js') }}"></script>
    <!-- Page specific javascripts notifiction form-->
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/sweetalert.min.js') }}"></script>
        <!-- Page specific javascripts chart page-->
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/chart.js') }}"></script>
    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Red"
        },
        {
          value: 50,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Green"
        },
        {
          value: 100,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "Yellow"
        }
      ]

      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);

      var ctxr = $("#radarChartDemo").get(0).getContext("2d");
      var radarChart = new Chart(ctxr).Radar(data);

      var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
      var polarChart = new Chart(ctxpo).PolarArea(pdata);

      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);

      var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
      var doughnutChart = new Chart(ctxd).Doughnut(pdata);
    </script>
   

<!-- Page specific javascripts widgets-->
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/jquery.vmap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/jquery.vmap.world.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/backend/js/plugins/jquery.vmap.sampledata.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        var map = $('#demo-map');
        map.vectorMap({
          map: 'world_en',
          backgroundColor: '#fff',
          color: '#333',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#C8EEFF', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });
      });
    </script>


<!-- //form table-data// -->
    <script type="text/javascript">
    $('#sl').click(function () {
      $('#tl').loadingBtn();
      $('#tb').loadingBtn({ text: "Signing In" });
    });

    $('#el').click(function () {
      $('#tl').loadingBtnComplete();
      $('#tb').loadingBtnComplete({ html: "Sign In" });
    });

    $('#demoDate').datepicker({
      format: "dd/mm/yyyy",
      autoclose: true,
      todayHighlight: true
    });

    $('#demoSelect').select2();
  </script>


<!-- //calendar page// -->
    <script type="text/javascript">
      $(document).ready(function() {

        $('#external-events .fc-event').each(function() {

          // store data so the calendar knows to render an event upon drop
          $(this).data('event', {
            title: $.trim($(this).text()), // use the element's text as the event title
            stick: true // maintain when user navigates (see docs on the renderEvent method)
          });

          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
          });

        });

        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar
          drop: function() {
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              $(this).remove();
            }
          }
        });
      });
    </script>


    <!-- form notification -->
    <script type="text/javascript">
      $('#demoNotify').click(function(){
        $.notify({
          title: "Update Complete : ",
          message: "Something cool is just updated!",
          icon: 'fa fa-check'
        },{
          type: "info"
        });
      });
      $('#demoSwal').click(function(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        }, function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      });
    </script>


    <!-- //index-2*** -->
    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);

      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>


  </body>
</html>
  