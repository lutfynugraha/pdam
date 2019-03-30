<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <section class="content-header"><h4>Admin</h4></section>
                <a href="?menu=customadmin" type="button" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-plus"></span>
                Admin
                </a>
            </div>
        </div>
    <hr class="style-four">
<div class="row">
            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT * FROM users ORDER BY id ASC";
                    $result = mysqli_query($con, $query);



                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):

                        echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['nama']}</td>";
                        echo "<td>{$row['name']}</td>";

                        echo "<td>";
                        if ($row['active'] == 1){
                            echo"<span class='label label-primary' style='padding: 7px;'>Aktif</span>";
                        }
                        else
                        {
                            echo"<span class='label label-warning' style='padding: 7px;'>Non-Aktif</span>";
                        }
     
                        echo"</td>";
                        echo "<td>
                              <a href='?menu=customadmin&id_a={$row['id']}' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-pencil'></span></a>
                              </td>";
                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
                   </tbody>
                </table>
            </div>
        </div>


<script>
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
</script>