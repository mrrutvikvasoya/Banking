<?php include 'header.php'; ?>

<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="">
            <div class="compose-content">
              <form action="query.php" method="POST" id="EmailSend" enctype="multipart/form-data">
                <div class="mb-3">
                  <input name="toemail" type="text" class="form-control bg-transparent" placeholder=" To:">
                </div>
                <div class="mb-3">
                  <input name="emailbody" type="text" class="form-control bg-transparent" placeholder=" Subject:">
                </div>
                <div class="mb-3">
                  <textarea name="emailcontent" id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="8" placeholder="Enter text ..."></textarea>
                </div>
            </div>
            <div class="text-start mt-4 mb-3">
               <input type="submit" class="btnnext btnsub btn btn-primary" value="Submit" name="Sendemail">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>