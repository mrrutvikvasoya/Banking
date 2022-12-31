<?php include 'header.php'; ?>

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cheqbook requestes</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>Email Id</strong></th>
                                                <th><strong>Status</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include "../database.php";
                                        $sql = "SELECT * FROM `subemail`";
                                        $data = $conn->query($sql);
                                        while ($row = $data->fetch_assoc()){
                                        ?>
                                            <tr>
                                                <td><?php echo $row['email'] ?></td>
                                                <td class="text-success"><?php echo $row['Status'] ?></td>
                                            </tr>
                                             <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

<?php include 'footer.php'; ?>