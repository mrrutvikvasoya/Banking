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
                                                <th><strong>User Id</strong></th>
                                                <th><strong>NAME</strong></th>
                                                <th><strong>feedback</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include "../database.php";
                                        $sql = "SELECT * FROM `loan_query`";
                                        $data = $conn->query($sql);
                                        while ($row = $data->fetch_assoc()){
                                        ?>
                                            <tr>
                                                <td><strong><?php echo $row['userid'] ?></strong></td>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><?php echo $row['query'] ?></td>
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