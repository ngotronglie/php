<form method="POST" action="index.php?act=quenmk" class="container p-5">
  <div class="form-group">
    <label for="email">Email</label>
    <input
      type="email"
      class="form-control"
      id="email"
      aria-describedby="emailHelp"
      placeholder="Enter Username here"
      name="email"
    />
  </div>
  <button name="submit" type="submit" class="btn btn-success">Send mail</button>
  
  <?php if(isset($sendMailMess) && $sendMailMess != ""){
    echo $sendMailMess;
  }?>
</form>
