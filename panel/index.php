<?php
include 'data.php';
?>
<!DOCTYPE html>
kontol
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FineDev 50K/Day | MAX 4MAIL AJA</title>
  <link rel='stylesheet' href='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="container" style="height:100vh;display:flex;align-items: center;justify-content: center;">

  <form class="container" id="needs-validation" onsubmit="return false">
    <div class="add">
      <div class="form-group">
      <img src="https://i.ibb.co/Yf5VCq7/Picsart-22-07-03-15-19-29-692.jpg" style="transform:scale(1.2);max-width: 100%">
      </div>

      <div class="jumbotron p-2">
      <nav class="navbar navbar-light bg-dark text-white p-0 pl-2 rounded">
        <a class="navbar-brand text-white" href="#">
          Data Result
        </a>
      </nav>
        <label class="mt-3" for="exampleInputEmail1">Nick Sender</label>
        <input type="email" class="form-control" value="<?= $nik; ?>" readonly>
        <label class="mt-2" for="exampleInputEmail1">Email Sender</label>
        <input type="email" class="form-control" value="<?= $sender; ?>" readonly>

        <button class="btn btn-primary mt-3" data-toggle="modal" data-target="#gantidata">Ganti Data</button>
      </div>




      







      
      <div class="jumbotron p-2">
        <nav class="navbar navbar-light bg-dark text-white p-0 pl-2 rounded">
        <a class="navbar-brand text-white" href="#">
          Data Email
        </a>
      </nav>
      <label class="mt-3" for="exampleInputEmail1">List Email</label>
          <?php
          $read = file_get_contents('data.json');
          $json = json_decode($read,true);

          for($i=0;$i<=count($json) - 1;$i++)
          {
            echo '<input type="email" class="form-control mt-1" value="'.$json[$i]['email'].'" readonly>';
          }

          ?>

      <div class="mt-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah Email</button>
      <button class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus Email</button>
    </div>
    </div>
    </div>
</form>
</div>



<div class="modal fade" id="gantidata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ganti Data</h5>
      </div>
      <div class="modal-body">
      <div class="form-group">
      <label for="exampleInputEmail1">Nick Sender</label>
        <input type="text" id="valNick" class="form-control" value="<?= $nik; ?>">
        <label class="mt-2" for="exampleInputEmail1">Email Sender</label>
        <input type="email" id="valSender" class="form-control" value="<?= $sender; ?>">
      </div>

      </div>
      <div class="modal-footer d-flex justify-content-start">
        <button type="button" id="gantis" class="btn btn-success">Ganti</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Email</h5>
      </div>
      <div class="modal-body">
        <div id="sukses" style="display: none" class="alert alert-success alert-dismissible fade show" role="alert">
        Email kamu <span id="emmail"></span> berhasil ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="addEmail" aria-describedby="emailHelp" placeholder="Masukkan email baru">
      </div>

      </div>
      <div class="modal-footer d-flex justify-content-start">
        <button type="button" id="add" class="btn btn-success">Tambah</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Email</h5>
      </div>
      <div class="modal-body">
        <div id="suksess" style="display: none" class="alert alert-success alert-dismissible fade show" role="alert">
        Berhasil menghapus email
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="form-group">

        <select style="width:100%;" class="custom-select" name="zz">
          <option selected disabled>Pilih email yang ingin kamu hapus</option>
          <?php
          $read = file_get_contents('data.json');
          $json = json_decode($read,true);

          for($i=0;$i<=count($json) - 1;$i++)
          {
            echo '<option value="'.$i.'">'.$json[$i]['email'].'</'.'option>';
          }

          ?>
        </select>


      </div>

      </div>
      <div class="modal-footer d-flex justify-content-start">
        <button type="button" id="dels" class="btn btn-primary">Hapus</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>









  
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.js'></script><script  src="./script.js"></script>


<script type="text/javascript">
  $('#add').click(function(){
    $(this).css('pointerEvents','none').css('opacity','0.5').css('cursor','no-drop');
    $.get('add.php?mail='+$('#addEmail').val(),function(done){
      if(done == 200)
      {
        setTimeout(() => {
          $('#add').css('pointerEvents','unset').css('opacity','1').css('cursor','pointer');
          location.reload()
        },2000)
      }
    })
  })

  $('#dels').click(function(){
  $(this).css('pointerEvents','none').css('opacity','0.5').css('cursor','no-drop');
  $.get('delete.php?keys='+$('select[name=zz] option').filter(':selected').val(),function(done){
    if(done == 200)
    {
      setTimeout(() => {
        $('#dels').css('pointerEvents','unset').css('opacity','1').css('cursor','pointer');
        location.reload()
      },2000)
    }
  })
})

  $('#gantis').click(function(){
  const nick = $('#valNick').val();
  const sender = $('#valSender').val();
  $(this).css('pointerEvents','none').css('opacity','0.5').css('cursor','no-drop');
  $.get('ganti.php?nick='+nick+'&sender='+sender,function(done){
    if(done == 200)
    {
      setTimeout(() => {
        $('#gantis').css('pointerEvents','unset').css('opacity','1').css('cursor','pointer');
        location.reload()
      },2000)
    }
  })
})
</script>


</body>
</html>
