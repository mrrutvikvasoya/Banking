
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
                            <th><strong>Account Numbera</strong></th>
                            <th><strong>NAME</strong></th>
                            <th><strong>Pincode</strong></th>
                            <th><strong>Status</strong></th>
                            <th><strong>More</strong></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../database.php";
                        $sql = "SELECT * FROM `cheqbook_req`";
                        $data = $conn->query($sql);
                        while ($row = $data->fetch_assoc()){
                            ?>
                        <tr>
                            <td><strong><?php echo $row['account'] ?></strong></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['pincode'] ?></td>
                                <td><span class="badge light badge-<?php if($row['status'] == "Processed"){echo "success";} else {echo "warning";}?>"><?php echo $row['status'] ?></span>
                                </td>
                            <td>
								<div class="d-flex">
									<a id="successrewche" class="btn btn-success shadow btn-xs sharp me-1 cheqbookreqacc" data-id="<?php echo $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#acceptnewrequest"><i class="fas fa-check"></i></a>
								</div>
							</td>
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

<script>
$(document).ready(function(){
    $(".cheqbookreqacc").on("click", function(){
    var dataId = $(this).attr("data-id");
    $.ajax({
        url: "query.php",
        method: "POST",
        data: {
            mycheckid: "mycheckid",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data);
        var id=data1['id']; 
        var name=data1['name'];
        var email=data1['email'];
        
        $('#id1').val(id);
        $('#name1').val(name);
        $('#email1').val(email);
        },
    });
    });
});
</script>

<div class="modal fade" id="acceptnewrequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dispatch new cheque book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="query.php" method="POST" >
      <div class="modal-body">
        <div class="card-body">
           <div class="basic-form">
                 <div class="mb-3">
                    <h3>Request Processed</h3>
                    <input name="id1" type="hidden" class="form-control" value="" id="id1">
                    <input name="email1" type="hidden" class="form-control" value="" id="email1">
                    <input name="name1" type="hidden" class="form-control" value="" id="name1">
                    <input name="Orderid" type="text" class="form-control"  id="Orderid" placeholder="Dispatch Id" required>
                 </div>
           </div>
        </div>
      </div>
    <div class="modal-footer">
        <input type="submit" class="btnnext btnsub btn btn-primary" value="Confirm" name="acceptnewrequest"  >
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>