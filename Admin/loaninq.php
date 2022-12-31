<?php include 'header.php'; ?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Loan Requests</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th><strong>User Id</strong></th>
                            <th><strong>NAME</strong></th>
                            <th><strong>Balance</strong></th>
                            <th><strong>Status</strong></th>
                            <th><strong>More</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../database.php";
                        $sql = "SELECT * FROM `loan_enquiry`";
                        $data = $conn->query($sql);
                        while ($row = $data->fetch_assoc()){
                            ?>
                        <tr>
                            <td><strong><?php echo $row['userid'] ?></strong></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['balance'] ?></td>
                                <td><span class="badge light badge-<?php if($row['status'] == "Approved"){echo "success";} else if($row['status'] == "Rejected"){echo "danger";} else {echo "warning";}?>"><?php echo $row['status'] ?></span>
                                </td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-success shadow btn-xs sharp me-1 loanerreqapp loandatares" data-id="<?php echo $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#loannewrequest"><i class="fas fa-check"></i></a>
                                    <div class="btn btn-danger shadow btn-xs sharp loanerreq loandatares" data-id="<?=$row['id'];?>" data-bs-toggle="modal" data-bs-target="#closeloanreq"><i class="fa fa-trash"></i></div>
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
  $(".loandatares").on("click", function(){
     var dataId = $(this).attr("data-id");
    $.ajax({
        url: "query.php",
        method: "POST",
        data: {
            loan_enquiry: "loan_enquiry",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data); 
        var id=data1['id'];
        var userid=data1['userid'];
        var name=data1['name'];
        var loanamount=data1['loanamount'];
        var email=data1['email'];
        
        $('.id1').val(id);
        $('.email1').val(email);
        $('.userid').val(userid);
        $('.name').val(name);
         $('.loanamount').val(loanamount);
        },
    });
    });
});
</script>

<div class="modal fade" id="closeloanreq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Responce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="query.php" method="POST" >
      <div class="modal-body">
        <div class="card-body">
           <div class="basic-form">
                 <div class="mb-3">
                    <h3>To Loan Rejected</h3>
                    <input name="id1" type="hidden" class="form-control id1" value="" id="">
                    <input name="email1" type="hidden" class="form-control email1" value="">
                    <input name="userid" type="hidden" class="form-control userid" value="" id="">
                    <input name="name" type="hidden" class="form-control name" value="" id="">
                    <input name="closeloanreq1" type="text" class="form-control" id="closeloanreq1" placeholder="Reason" required>
                 </div>
           </div>
        </div>
      </div>
    <div class="modal-footer">
        <input type="submit" class="btnnext btnsub btn btn-primary" value="Confirm" name="loancloend"  >
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="loannewrequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Loan Approval</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="query.php" method="POST" id="old_ac_form" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="row">
                <input name="id" type="hidden" class="form-control id1" value="" id="">
              <div class="mb-3 ">
                <label class="form-label text-danger form-control-lg">Approved Loan Amount</label>
                <input name="Loanamounta" type="number" class="form-control text-danger form-control-lg" value="" id="Loanamounta" onKeyPress="if(this.value.length==7) return false;" >
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label text-info">User Id</label>
                <input name="UserId" type="text" class="form-control form-control-lg text-info userid" value="" id="">
              </div>
              <div class="mb-3 col-md-6">
                  <label class="form-label text-primary">Account Holder Name</label>
                  <input name="email1" type="hidden" class="form-control email1" value="">
                  <input type="text" class="form-control input-default text-primary form-control-lg name" value="" id="" name="FullName">
                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btnnext btnsub btn btn-primary" value="Approved" name="Approvedloan">
        </div>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>