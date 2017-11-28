<!-- ======================================
Income
===========================================-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form action="<?php echo str_replace('index.php/', '', $_SERVER['PHP_SELF']); ?>" method="post" accept-charset="utf-8">

          <div class="col-md-12 alert <?php echo isset($error_message)?'alert-danger':'alert-info'?>" style="display: <?php echo (isset($error_message)||isset($success_message))?'block':'none'?>;">
              <?php
                if (isset($error_message)) {
                  echo $error_message;
                  unset($error_message);
                } else if (isset($success_message)) {
                  echo $success_message;
                  unset($success_message);
                }
              ?>
            </div>

          <div class="row">
            
            <div class="col-sm-6 form-group">
              <label>Income</label>
              <input type="number" placeholder="Enter Income.. eg: 10500" name="income" min="100" maxlength="11" required class="form-control" value="<?php echo ($result&&$result->income!='')?$result->income:'0' ?>" id="userIncome">
            </div>
            <div class="col-sm-6 form-group">
              <h3>Total Income:</h3>
              <br>
              <label><?php echo ($result&&$result->income!='')?$result->income+$result->bonus+$result->additional_allowance:'------' ?></label>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Bonus</label>
              <input type="number" placeholder="Enter Bonus.. eg: 5000" id="userBonus" name="bonus" min="3" max="11" value="<?php echo ($result&&$result->bonus!='')?$result->bonus:'' ?>" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 form-group">
              <label>Additional Allowance</label> 
              <input type="number" placeholder="Enter Allowance.. eg: 2000" id="userAlwnc" name="allowance" min="3" max="11" value="<?php echo ($result&&$result->additional_allowance!='')?$result->additional_allowance:'' ?>" class="form-control">
              <button type="submit" name="submitBtn" value="submit" class="btn btn-lg btn-info"> Submit </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- ======================================
Income
===========================================-->
<script type="text/javascript">
  /**
   * Prevent user from entering more than 11 digits
   * @return bool
   */
  $(function (fe) {
    $('#userIncome, #userBonus, userAlwnc').on('keypress',function (e) {
      if($(this).val().length>10)
        e.preventDefault()
    })
  })
</script>