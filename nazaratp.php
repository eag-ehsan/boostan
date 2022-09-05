<div class="kr-contin">
    <div class="krmsg">
      <form id="contaddmessage" name="contaddmessage" action="" method="post">
        <input id="idtimtokenmessage" type="hidden" name="timtokenmessage" id="timtokenmessage" value="">
        <h5>نظر یا سوالتان در مورد مطالب این صفحه را برایمان بنویسید:</h5>

        <input id="idmsgclass" type="hidden" name="msgclass" value="<?php echo $_SESSION['HID_userclass']; ?>">
        <?php if($_SESSION['HID_ISLOGIN']==1){ ?>

          <?php if($_SESSION["HID_nActivate"]==0){ ?>
            <p id="idlmsgname">کاربرتایید نشده <?php echo $_SESSION['HID_lname']; ?></p>
            <input id="idmsgname" type="hidden" name="msgname" placeholder="نام یا عنوان" value="کاربر تایید نشده <?php echo $_SESSION['HID_lname']; ?>">
          <?php }else{  ?>
            <p id="idlmsgname"><?php echo $_SESSION['HID_lname']; ?></p>
            <input id="idmsgname" type="hidden" name="msgname" placeholder="نام یا عنوان" value="<?php echo $_SESSION['HID_lname']; ?>">
          <?php } ?>
        <?php }else{  ?>
          <p id="idlmsgname">نام شما:</p>
          <input id="idmsgname" type="text" name="msgname" placeholder="نام یا عنوان">
        <?php } ?>


        <p id="idlmsgemail">درصورت دلخواه ایمیلتان را برایمان بنویسید:</p>
        <input id="idmsgemail" type="email" name="msgemail" placeholder="email">
        <p id="idlmsgsub">نظر یا سوالتان:</p>
        <textarea id="idmsgsub" rows="4" cols="100" name="msgsub" form="contaddmessage" class="form-control" placeholder="نظرتان در مورد مطالب این صفحه" ></textarea>


        <button type="button" name="updatepro" onclick="sendnazar()" >ارسال نظر</button>
      </form>

    </div>
    <script>
    function sendnazar()
    {
      var checkgoon = 1;
      var vidmsgname = document.getElementById('idmsgname');
      var vidmsgemail = document.getElementById('idmsgemail');
      var vidmsgsub = document.getElementById('idmsgsub');

      var vidlmsgname = document.getElementById('idlmsgname');
      var vidlmsgemail = document.getElementById('idlmsgemail');
      var vidlmsgsub = document.getElementById('idlmsgsub');
      var vidlgre1 = document.getElementById('idlgre1');

      if(vidmsgname.value == "")
      {
        vidlmsgname.style.color = "red";
        checkgoon = 0;
      }
      else
      {
        vidlmsgname.style.color = "black";
      }
      if(vidmsgsub.value == "")
      {
        vidlmsgsub.style.color = "red";
        checkgoon = 0;
      }
      else
      {
        vidlmsgsub.style.color = "black";
      }

      if(checkgoon==1)
      {
        var ttok1 = "<?php $_SESSION['hanttoken1'] =  bin2hex(random_bytes(8));
        echo $_SESSION['hanttoken1'];?>";
        document.getElementById("idtimtokenmessage").value = ttok1;
        document.getElementById("contaddmessage").submit();
      }
    }

    </script>
</div>
<div class="kr-contin">
    <div class="krmsg2">
      <form id="idreplyform" name="replyform" action="" method="post">
        <input type="hidden" name="replyttoken" id="replyttoken" value="">
        <input type="hidden" name="replyaptoken" id="replyaptoken" value="">
        <input type="hidden" name="replyID" id="replyID" value="">
        <input type="hidden" name="repName" id="repName" value="">
        <input type="hidden" name="repClass" id="repClass" value="<?php echo $_SESSION['HID_userclass']; ?>">
        <input type="hidden" name="repMatn" id="repMatn" value="">
      <?php
      $sqlmsg = "SELECT ID, name, email, comment, nDate, nTime, nPage, userclass FROM comments WHERE nPage='" . $pageNumberID . "'" ;
      $resultmsg = $conn->query($sqlmsg);
      if ($resultmsg->num_rows > 0) {

          $msgindexes = 0;
          while($rowmsg = $resultmsg->fetch_assoc()) {
            $sqlmsgr = "SELECT ID, name, comment, nDate, nTime, commentsID, userclass FROM commentsr WHERE commentsID='" . $rowmsg["ID"] . "'" ;
            $resultmsgr = $conn->query($sqlmsgr);
            if ($resultmsgr->num_rows > 0) {
              $replyNumber = $resultmsgr->num_rows;
            }
            else {
              $replyNumber = 0;
            }
            ?>
            <?php if($rowmsg['userclass']==1){ ?>
              <h5><i class="fad fa-chess-queen"></i><?php echo $rowmsg['name'] . ":"; ?></h5>
            <?php }else if($rowmsg['userclass']==9){  ?>
              <h5><i class="fas fa-chess-king"></i><?php echo $rowmsg['name'] . ":"; ?></h5>
            <?php }else{  ?>
              <h5><?php echo $rowmsg['name'] . ":"; ?></h5>
            <?php } ?>

            <p><?php echo $rowmsg['comment']; ?></p>
            <div class="divofoghi">
              <a data-toggle="tooltip" title="پاسخ این پیام" style="color:#157a04;margin-left: 15px;cursor: pointer;" onClick="replybuts(5,<?php echo $rowmsg["ID"]; ?>);">پاسخ</a>
              <a data-toggle="tooltip" title="پاسخها" style="color:#157a04;margin-left: 15px;cursor: pointer;" onClick="replybuts(6,<?php echo $rowmsg["ID"]; ?>);">مشاهده پاسخها (<?php echo $replyNumber; ?>)</a>
            </div>
            <div id="idreplydiv<?php echo $rowmsg["ID"]; ?>" class="divoff">
              <div class="divon">
                <?php if($_SESSION['HID_ISLOGIN']==1){ ?>
                  <?php if($_SESSION["HID_nActivate"]==0){ ?>
                    <input type="hidden" name="replyname<?php echo $rowmsg["ID"]; ?>" id="replyname<?php echo $rowmsg["ID"]; ?>" placeholder="نام یا عنوان" value="کاربرتایید نشده <?php echo $_SESSION['HID_lname']; ?>">
                  <?php }else{  ?>
                    <input type="hidden" name="replyname<?php echo $rowmsg["ID"]; ?>" id="replyname<?php echo $rowmsg["ID"]; ?>" placeholder="نام یا عنوان" value="<?php echo $_SESSION['HID_lname']; ?>">
                  <?php } ?>
                <?php }else{  ?>
                  <input type="text" name="replyname<?php echo $rowmsg["ID"]; ?>" id="replyname<?php echo $rowmsg["ID"]; ?>" placeholder="نام یا عنوان">
                <?php } ?>
                <input type="text" name="replymatn<?php echo $rowmsg["ID"]; ?>" id="replymatn<?php echo $rowmsg["ID"]; ?>" placeholder="متن پاسخ شما">
                <button type="button" name="replybutton<?php echo $rowmsg["ID"]; ?>" onClick="replybuts(1,<?php echo $rowmsg["ID"]; ?>);">ارسال</button>
              </div>
            </div>
            <div id="idreplyshowdiv<?php echo $rowmsg["ID"]; ?>" class="divoff">
              <?php if($replyNumber>0){ ?>
              <div class="krmsg2-reply">
                <?php    while($rowmsgr = $resultmsgr->fetch_assoc()) {  ?>
                      <?php if($rowmsgr['userclass']==1){ ?>
                        <h5><i class="fad fa-chess-queen"></i><?php echo $rowmsgr['name'] . ":"; ?></h5>
                      <?php }else if($rowmsgr['userclass']==9){  ?>
                        <h5><i class="fas fa-chess-king"></i><?php echo $rowmsgr['name'] . ":"; ?></h5>
                      <?php }else{  ?>
                        <h5><?php echo $rowmsgr['name'] . ":"; ?></h5>
                      <?php } ?>

                      <p><?php echo $rowmsgr['comment']; ?></p>
                      <h4><?php echo $rowmsgr['nDate'] . " - " . $rowmsgr['nTime']; ?></h4>
                <?php } ?>
              </div>
              <?php  } ?>
            </div>
            <h4><?php echo $rowmsg['nDate'] . " - " . $rowmsg['nTime']; ?></h4>
            <?php
          }
        }
       ?>
      </form>
    </div>
 </div>
 <!-- jQuery -->
 <script src="js/jquery-2.1.0.min.js"></script>

 <!-- Bootstrap -->
 <script src="js/popper.js"></script>
 <script src="js/bootstrap.min.js"></script>

 <!-- Plugins -->
 <script src="js/scrollreveal.min.js"></script>
 <script src="js/waypoints.min.js"></script>
 <script src="js/jquery.counterup.min.js"></script>
 <script src="js/imgfix.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

 <script>
 function replybuts(keyy, replyID)
 {
  if(keyy==5)
  {
    if($('#idreplydiv'+replyID).hasClass('divoff'))
    {
      $('#idreplydiv'+replyID).removeClass('divoff');
    }
    else {
      $('#idreplydiv'+replyID).addClass('divoff');
    }
  }
  else if(keyy==6)
  {
    if($('#idreplyshowdiv'+replyID).hasClass('divoff'))
    {
      $('#idreplyshowdiv'+replyID).removeClass('divoff');
    }
    else {
      $('#idreplyshowdiv'+replyID).addClass('divoff');
    }
  }
  else {
    var ttok1 = "<?php $_SESSION['hanttoken2'] =  bin2hex(random_bytes(8));
    echo $_SESSION['hanttoken2'];?>";
  document.getElementById('repName').value = document.getElementById('replyname'+replyID).value;
  document.getElementById('repMatn').value = document.getElementById('replymatn'+replyID).value;
  document.getElementById('replyttoken').value = ttok1;
  document.getElementById('replyID').value = replyID;
  document.getElementById('replyaptoken').value = keyy;
  document.forms["replyform"].submit();
 }
 }
 </script>
