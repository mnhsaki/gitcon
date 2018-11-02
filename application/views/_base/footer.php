<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['bar']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Year', 'POS Sales', 'Online Sales', 'Whole Sales', 'Expenses'],

                            ['January', 200, 0, 0, 0],

                            ['February', 0, 0, 0, 0],

                            ['March', 0, 0, 0, 0],

                            ['April', 4000, 2200, 0, 0],

                            ['May', 0, 100, 0, 0],

                            ['June', 0, 0, 0, 0],

                            ['July', 0, 0, 0, 0],

                            ['August', 10100, 2000, 1500, 0],

                            ['September', 0, 0, 0, 0],

                            ['October', 0, 0, 0, 0],

                            ['November', 0, 0, 0, 0],

                            ['December', 0, 0, 0, 0],
                        ]);

                        var options = {
                            chart: {
                                title: 'Business summary 2018',
                                subtitle: 'POS Sales, Online Sales, Whole Sales, And Expenses',
                            },
                            bars: 'vertical' // Required for Material Bar Charts.
                        };

                        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                    }

                </script>

                <section class="content invoice" id="chart_bar" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="barchart_material" style="width: 100%; height: 350px;"></div>
                        </div>
                    </div>
                </section>
            </div>

            <footer class="main-footer  no-print">
                <div class="pull-right hidden-xs">
                    <b>Version 1.0</b>
                </div>
                <strong>Copyright &copy; <a href="http://iatlbd.com/">IAT</a></strong> All rights
                reserved.
            </footer>
        </div>
        <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- date-range-picker -->
        <script src="<?php echo base_url(); ?>assets/movement.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/jqueryui2.js"></script>
        <!-- bootstrap datepicker -->
        <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
        <script>
                            function updateClock() {
                                var currentTime = new Date();
                                var current_date = currentTime.getDate();
                                var current_month = currentTime.getMonth() + 1;
                                var current_year = currentTime.getFullYear();
                                var currentHours = currentTime.getHours();
                                var currentMinutes = currentTime.getMinutes();
                                var currentSeconds = currentTime.getSeconds();

                                // Pad the minutes and seconds with leading zeros, if required
                                currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
                                currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

                                // Choose either "AM" or "PM" as appropriate
                                var timeOfDay = (currentHours < 12) ? "AM" : "PM";

                                // Convert the hours component to 12-hour format if needed
                                currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

                                // Convert an hours component of "0" to "12"
                                currentHours = (currentHours == 0) ? 12 : currentHours;

                                // Compose the string for display
                                var currentTimeString = current_date + " : " + current_month + " : " + current_year + " : " + currentHours + ":" +
                                        currentMinutes + ":" + currentSeconds + " " + timeOfDay;


                                $("#clock").html(currentTimeString);

                            }

                            $(document).ready(function () {
                                setInterval('updateClock()', 1000);
                            });

        </script>

        <script>
            $(function () {
                //$("#example").DataTable();
                $("#example1").DataTable();
                $("#example2").DataTable();
                $("#example3").DataTable();
                $("#example4").DataTable();
                $('.tbl1').DataTable({
                    orderable: false,
                    "ordering": false
                });
                //Initialize Select2 Elements
                $(".select2").select2();
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
                //Date picker
                $('#datepicker').datepicker({
                    autoclose: true,
                    endDate: '+0d',
                    format: 'yyyy-mm-dd'
                });
                $('#datepicker2').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd'
                });
                //Date range picker
                $('#reservation').daterangepicker({
                    locale: {
                        format: 'YYYY/MM/DD'
                    }
                });
            });

        </script>
    </body>

</html>
