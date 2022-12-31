
<?php include 'header.php'; ?>


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">BDIC Accounts</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example3" class="display" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>img</th>
                            <th>Full Name</th>
                            <th>Mobile Number</th>
                            <th>User Id</th>
                            <th>Account Number</th>
                            <th>Status</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../database.php";
                        $sql = "SELECT * FROM `account`";
                        $data = $conn->query($sql);
                        while ($row = $data->fetch_assoc()){
                            ?>
                            <tr>
                                <td><img class="rounded-circle" width="35" src="<?php echo "../" . $row['profilephoto'] ?>" id="profilephoto" alt="image"></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['mobile'] ?></td>
                                <td><?php echo $row['userid'] ?></td>
                                <td><?php echo $row['accountno'] ?></td>	
                                <td><span class="badge light badge-<?php if($row['status'] == "Approved"){echo "success";} else if($row['status'] == "Closed"){echo "danger";} else {echo "warning";}?>"><?php echo $row['status'] ?></span>
                                </td>
                                <td>
                                    <div class="d-flex">
                                       <div class="btn btn-primary shadow btn-xs sharp me-1 new-popup" data-id="<?php echo $row['id'] ?>" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-pencil-alt"></i></div>
                                       <div class="btn btn-danger shadow btn-xs sharp closeerreq" data-id="<?=$row['id'];?>" data-bs-toggle="modal" data-bs-target="#closeaccount"><i class="fa fa-trash"></i></div>
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
    $(".new-popup").on("click", function(){
    var dataId = $(this).attr("data-id");
    $.ajax({
        url: "query.php",
        method: "POST",
        data: {
            checkid: "checkid",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data); 
        console.log(data1);
        var id=data1['id'];
        var userid=data1['userid'];
        var fund=data1['fund'];
        var loan=data1['loan'];
        var accountno=data1['accountno'];
        var name=data1['name'];
        var mobile=data1['mobile'];
        var email=data1['email'];
        var birthday=data1['birthday'];
        var gender=data1['gender'];
        var merital=data1['merital'];
        var fathername=data1['fathername'];
        var mothername=data1['mothername'];
        var employment=data1['employment'];
        var income=data1['income'];
        var flatno=data1['flatno'];
        var roadname=data1['roadname'];
        var landmark=data1['landmark'];
        var zipcode=data1['zipcode'];
        var signphoto=data1['signphoto'];
        var state=data1['state'];
        var aadhaar=data1['aadhaar'];
        var pan=data1['pan'];
        var city=data1['city'];
        var panphoto=data1['panphoto'];
        var adharphoto=data1['adharphoto'];
        
        $('#id').val(id);
        $('#userid').val(userid);
        $('#fund').val(fund);
        $('#loan').val(loan);
        $('#accountno').val(accountno);
        $('#name').val(name);
        $('#mobile').val(mobile);
        $('#email').val(email);
        $('#birthday').val(birthday);
        $('#gender').val(gender);
        $('#merital').val(merital);
        $('#fathername').val(fathername);
        $('#mothername').val(mothername);
        $('#employment').val(employment);
        $('#income').val(income);
        $('#flatno').val(flatno);
        $('#roadname').val(roadname);
        $('#landmark').val(landmark);
        $('#zipcode').val(zipcode);
        $('#signphoto').attr("src",'../proofs/'+signphoto);
        $('#city').val(city);
        $('#state').val(state);
        $('#aadhaar').val(aadhaar);
        $('#pan').val(pan);
        $('#adharphoto').attr("src",'../proofs/'+adharphoto);
        $('#panphoto').attr("src",'../proofs/'+panphoto);
        },
    });
    });
});

$(document).ready(function(){
    $(".closeerreq").on("click", function(){
    var dataId = $(this).attr("data-id");
    $.ajax({
        url: "query.php",
        method: "POST",
        data: {
            checkid: "checkid",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data);
        var id=data1['id']; 
        var userid=data1['userid'];
        var fund=data1['fund'];
        var accountno=data1['accountno'];
        var name=data1['name'];
        var email=data1['email'];
        
        $('#id1').val(id);
        $('#userid1').val(userid);
        $('#fund1').val(fund);
        $('#accountno1').val(accountno);
        $('#name1').val(name);
        $('#email1').val(email);

        },
    });
    });
});
</script>

<div class="modal fade" id="closeaccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <h3>To close Account/Request</h3>
                    <input name="id1" type="hidden" class="form-control" value="" id="id1">
                    <input name="email" type="hidden" class="form-control" value="" id="email1">
                    <input name="name" type="hidden" class="form-control" value="" id="name1">
                    <input name="accountno" type="hidden" class="form-control" value="" id="accountno1">
                    <input name="fund" type="hidden" class="form-control" value="" id="fund1">
                    <input name="userid" type="hidden" class="form-control" value="" id="userid1">
                    <input name="reasoncloser" type="text" class="form-control" id="reasoncloser" placeholder="Reason" required>
                 </div>
           </div>
        </div>
      </div>
    <div class="modal-footer">
        <input type="submit" class="btnnext btnsub btn btn-primary" value="Confirm" name="deleteaccount"  >
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="query.php" method="POST" id="old_ac_form" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="row">
            <div class="row">
                <input name="id" type="hidden" class="form-control" value="" id="id">
              <div class="mb-3 col-md-6">
                <label class="form-label text-success">Balance</label>
                <input name="Balance" type="text" class="form-control text-success form-control-lg" value="" id="fund">
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label text-danger">Loan</label>
                <input name="Loan" type="text" class="form-control text-danger form-control-lg" value="" id="loan">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label text-info">User Id</label>
                <input name="UserId" type="text" class="form-control form-control-lg text-info" value="" id="userid">
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label text-info">Account Number</label>
                <input name="AccountNumber" type="text" class="form-control form-control-lg text-info" value="" id="accountno">
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="row">
                <div class="mb-3">
                  <label class="form-label text-primary">Account Holder Name</label>
                  <input type="text" class="form-control input-default text-primary form-control-lg" value="" id="name" name="FullName">
                </div>
                <div class="mb-3">
                  <label class="form-label text-primary">Mobile Number</label>
                  <input name="MobileNumber" type="text" class="form-control text-primary form-control-lg" value="" id="mobile" >
                </div>
                <div class="mb-3">
                  <label class="form-label text-primary">Email</label>
                  <input type="email" class="form-control text-primary form-control-lg" value="" id="email" name="email">
                </div>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <label class="form-label text-black">Signature</label>
              <img src="" width="300px" height="235px" style="float: right;" alt="Signature is not find" id="signphoto">
              <div class="input-group custom_file_input">
                <div class="form-file">
                  <input type="file" class="form-file-input form-control" id="Signature" name="Signature" accept="image/*">
                </div>
              </div>
            </div>
            <label class="form-label col-form-label-lg">Details :</label>
            <div class="mb-3 col-md-6">
              <div class="row">
                <div class="mb-3">
                  <label class="form-label text-secondary">Birth date</label>
                  <input type="date" class="form-control input-default  text-secondary" value="" id="birthday" name="birthday">
                </div>
                <div class="mb-3">
                  <label class="form-label text-secondary">Gender</label>
                  <input type="text" class="form-control text-secondary" value="" id="gender" name="Gender" disabled>
                </div>
                <div class="mb-3">
                  <label class="form-label text-secondary">Merital Status</label>
                  <input type="text" name="marital" class="form-control text-secondary" value="" id="merital">
                </div>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="row">
                <div class="mb-3">
                  <label class="form-label text-secondary">Father Name</label>
                  <input type="text" class="form-control text-secondary" value="" id="fathername" name="FatherName">
                </div>
                <div class="mb-3">
                  <label class="form-label text-secondary">Mother Name</label>
                  <input type="text" class="form-control text-secondary" value="" id="mothername" name="MotherName">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label class="form-label text-secondary">employment</label>
                  <input type="text" class="form-control text-secondary" value="" id="employment"  name="employment">
                </div>
                <div class="mb-3 col-md-6 text-secondary">
                  <label class="form-label">Income</label>
                  <input type="text" class="form-control text-secondary" value="" id="income" name="Annualincome">
                </div>
              </div>
            </div>
            <label class="form-label col-form-label-lg">Address :</label>
            <div class="mb-3 col-md-6">
              <div class="row">
                <div class="mb-3">
                  <label class="form-label">Flat NO</label>
                  <input type="text" class="form-control input-default " value="" id="flatno" name="FlatNO">
                </div>
                <div class="mb-3">
                  <label class="form-label">Road Name</label>
                  <input type="text" class="form-control" value="" id="roadname" name="RoadName">
                </div>
                <div class="mb-3">
                  <label class="form-label">Landmark</label>
                  <input type="text" class="form-control" value="" id="landmark" name="Landmark">
                </div>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="row">
                <div class="mb-3">
                  <label class="form-label">Zip Code</label>
                  <input type="text" class="form-control input-default " value="" id="zipcode" name="ZipCode">
                </div>
                <div class="mb-3">
                  <label class="form-label">City</label>
                  <input type="text" class="form-control" value="" id="city" name="city">
                </div>
                <div class="mb-3">
                  <label class="form-label">State</label>
                  <input type="text" class="form-control" value="" id="state" name="State">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label class="form-label text-danger">Adhar Card Number(*)</label>
                <input type="text" class="form-control text-danger" value="" id="aadhaar" readonly name="aadhaar">
              </div>
              <div class="mb-3 col-md-6 text-danger">
                <label class="form-label">Pancard(*)</label>
                <input type="text" class="form-control text-danger" value="" id="pan" readonly name="pan">
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="row">
                <label class="form-label">Adhar card</label>
                <img src="" width="300px" height="235px" style="float: right;" id="adharphoto" alt="Adhar is not find">
                <div class="input-group custom_file_input p-4">
                  <div class="form-file">
                    <input type="file" class="form-file-input form-control" name="Adharcard">
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3 col-md-6">
              <div class="row">
                <label class="form-label">Pancard</label>
                <img src="" width="300px" height="235px" style="float: right;" id="panphoto" alt="Pancard is not find">
                <div class="input-group custom_file_input p-4">
                  <div class="form-file">
                    <input type="file" class="form-file-input form-control" name="PanCard">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btnnext btnsub btn btn-primary" value="Submit" name="updateacinfo">
        </div>
      </form>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>