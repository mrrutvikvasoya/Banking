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
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>User Id</th>
                            <th>Write</th>
                            <th>status</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../database.php";
                        $sql = "SELECT * FROM contactus";
                        $data = $conn->query($sql);
                        while ($row = $data->fetch_row()){
                            ?>
                            <tr>
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[2] ?></td>
                                <td><?php echo $row[3] ?></td>
                                <td><?php echo $row[4] ?></td>    
                                <td><span class="badge light badge-<?php if($row[5] == "Solved"){echo "success";} else if($row[5] == "Closed"){echo "danger";} else {echo "warning";} ?>"><?php echo $row[5] ?></span></td>
                                <td>
                                    <div class="d-flex">
                                       <div class="btn btn-primary shadow btn-xs sharp me-1 new-popup1" data-id="<?php echo $row[0] ?>" data-bs-toggle='modal' data-bs-target='#exampleemail'><i class="fas fa-pencil-alt"></i></div>
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
    $(".new-popup1").on("click", function(){
    var dataId = $(this).attr("data-id");
    $.ajax({
        url: "query.php",
        method: "POST",
        data: {
            data: "checkidmyn",
            id: dataId,
        },
        success: function (data) {
        const data1 = JSON.parse(data);
        var id=data1['id']; 
        var name=data1['name'];
        var email=data1['email'];
        
        $('#contid').val(id);
        $('#name1').val(name);
        $('#email1').val(email);
        },
    });
    });
});
</script>

<div class="modal fade" id="exampleemail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Responce</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="query.php" method="POST" id="old_ac_form">
      <div class="modal-body">
        <div class="card-body">
           <div class="basic-form">
             <div class="mb-3">
                <input name="contid" type="hidden" class="form-control" value="" id="contid">
                <input name="name1" type="hidden" class="form-control" value="" id="name1">
                <input name="email1" type="hidden" class="form-control" value="" id="email1">
                <textarea class="form-control" rows="4" id="comment" name="conttextarea"></textarea>
             </div>
           </div>
        </div>
      </div>
        <div class="modal-footer">
            <input type="submit" class="btnnext btnsub btn btn-primary" value="Mail" name="contmail"  >
        </div>
      </form>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>