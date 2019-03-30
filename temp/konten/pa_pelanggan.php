<?php 
    $id_pelanggan = '';
    if(isset($_GET['id_p'])){
    $id_pelanggan = $_GET['id_p'];  
    }
    $query = "SELECT * FROM pelanggan where id_pelanggan='{$id_pelanggan}' ";
    $data = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($data);
?>
<div id="page-content-wrapper">

<div class="row">
    <div class="">
        <section class="content-header">
            <h1>
               <center><small>Monitoring Penggunaan Air Sdr/i : <?php echo $data['nama']; ?></small></center>
            </h1>
        </section>
    </div>
</div>

<hr class="style-four">

<div class="row">
    <div class="col-md-6 col-md-6 col-sm-6">
        <div id="g1" class="gauge float-right"></div> <!-- posisi grafik -->
    </div>
        <?php
            $start = date("Y-m-d 00:00:00");
            $end = date("Y-m-d 23:59:59");
            $query ="SELECT value FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' && id_pelanggan='{$id_pelanggan}' ORDER BY ID DESC LIMIT 1";
            $result = mysqli_query($con, $query);
            $result = mysqli_fetch_assoc($result);
            $result = $result['value'];

            if($result)
            {
                $data_today = $result['value'];
                $logik = '?last=true';
            }
            else
            {
                $logik = '';
                $data_today = 0;
            }
        ?>
        <script>
            var temp = 0;
            function get_element() {
                $.post( "functions/ajax/get_sensor.php?last=true&id_p=<?php echo $id_pelanggan; ?>", function( data ) { 
                    temp = data;
                });
            }

            function drow_graph(){
                var g1 = new JustGage({
                    id: "g1",
                    value: <?php echo $data_today; ?>,
                    min: 0,
                    max: 1000,
                    title: "Penggunaan Air Terakhir",
                    label: "L",
                    gaugeWidthScale: 0.2
                });

                setInterval(function() {
                    g1.refresh(temp);
                  }, 1000);
            }
            setInterval(get_element,1000);
        </script>

    <div class="col-md-6 col-md-6 col-sm-6">
        <div class="box  box-stat">
            <div class="box-body">
                <div style="display: block;">
                    <h4><small> Live Statistic Today</small></h4>
                    <table class="table table-condensed">
                        <tbody>
                          <tr>
                            <td><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp;Max</td>
                            <td id="max_temp"></td>
                            <td id="max_time"></td>
                          </tr>
                          <tr>
                            <td><span class="glyphicon glyphicon-minus" aria-hidden="true"></span> &nbsp;Min</td>
                            <td id="min_temp"></td>
                            <td id="min_time"></td>
                          </tr>
                          <tr>
                            <td><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> &nbsp;Total</td>
                            <td id="total"></td>
                            <td>Today</td>
                          </tr>
                          <tr>
                            <td><span class="glyphicon glyphicon-th" aria-hidden="true"></span> &nbsp;Average</td>
                            <td id="ave_temp"></td>
                            <td>Today</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="btn-group pull-right" role="group" aria-label="...">
            <button type="button" class="btn btn-sm btn-default active" id="stat"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Live</button>
            <button type="button" class="btn btn-sm btn-default" id="graph"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filter</button>
        </div>
    </div>
</div>

<div class="spacer"></div>
<div class="row" id="stat_table">
    <div class="col-md-12">
        <div class="box box-info">
            
            <div class="box-body">
                    <table class="table table-hover table-condensed display" id="example2" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID Pelanggan</th>
                                <th>Liter/Detik</th>
                                <th>Total/Hari</th>
                                <th>Tanggal & Waktu</th>
                            </tr>
                        </thead>
                        <tbody id="attending_tbl">
                            <!-- DINAMIC FUNGSI ADA DI FILE functions->ajax->functions.php-->
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>


<div class="row hide" id="stat_graph">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <?php
                $id_pelanggan = '';
                if(isset($_GET['id_p'])){
                $id_pelanggan = $_GET['id_p'];  
                }
                    $query = "SELECT * FROM penggunaan_air where id_pelanggan='{$id_pelanggan}' ORDER BY id DESC";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    echo '<table class="table table-hover table-condensed display" id="example" cellspacing="0" width="100%">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>#</th>';
                    echo '<th>ID Pelanggan</th>';
                    echo '<th>Liter</th>';
                    echo '<th>Tanggal & Waktu</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody class="searchable">';
                    while($row = mysqli_fetch_assoc($result)):
                        echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo "<td><a href='?menu=pa_pelanggan&id_p={$row['id_pelanggan']}' class='btn btn-primary'>{$row['id_pelanggan']}</a></td>";
                        echo "<td>{$row['value']} L</td>";
                        echo "<td>{$row['date']}</td>";
                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    echo '</tbody>';
                    echo '</table>';
                ?>
            </div>
        </div>
    </div>
</div>

<script>

    function refreshData()
	{
	  $('#attending_tbl').load('functions/ajax/functions.php?id_p=<?php echo $id_pelanggan; ?>');
      $('#chart').load('ajax/one_day_graph.php');
	}

    function get_day_stat(){
        $.ajax({
            url: 'functions/ajax/get_day_stat.php?id_p=<?php echo $id_pelanggan; ?>',
            type: 'POST',
            data: {name: 'test'},
            dataType: 'html',
            success: function(data){
                var vals = data.split(",");
                console.log(vals[0]);
                console.log(vals[1]);
                console.log(vals[2]);
                console.log(vals[3]);
                console.log(vals[4]);
                console.log(vals[5]);
                document.getElementById("min_temp").innerHTML = vals[0]+" L / Detik";
                document.getElementById("min_time").innerHTML = vals[1];
                document.getElementById("max_temp").innerHTML = vals[2]+" L / Detik";
                document.getElementById("max_time").innerHTML = vals[3];
                document.getElementById("ave_temp").innerHTML = vals[4]+" L";
                document.getElementById("total").innerHTML = vals[5]+"";
                },error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}
        });
    }


    $(document).ready(function() {
        $('#example').DataTable( {
            "pagingType": "full_numbers"
        } );

        $('#example2').DataTable( {
            bFilter: false, bInfo: false,
            "paging":   false,
            "ordering": false,
            "info":     false
        });
    });



	// Execute every 5 seconds
	window.setInterval(refreshData, 1000);
    window.setInterval(get_day_stat, 1000);
    window.onload = function() {
        get_element();
        drow_graph();
        refreshData();
        get_day_stat();
    };

    $('#graph').click(function(){
        $('#stat_graph').removeClass('hide');
        $('#stat_table').addClass('hide');

        $('#graph').addClass('active');
        $('#stat').removeClass('active');

    });

    $('#stat').click(function(){
        $('#stat_graph').addClass('hide');
        $('#stat_table').removeClass('hide');

        $('#stat').addClass('active');
        $('#graph').removeClass('active');
        /*
        $("#wrapper").on('transitionend webkitTransitionEnd oTransitionEnd', function () {
             myLineChart.resize(myLineChart.render, true);
        });
        */
    });
</script>
