<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <form method="post" action="<?php echo str_replace('index.php/', '', $_SERVER['PHP_SELF']); ?>" accept-charset="utf-8">
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
          <div class="col-sm-12 form-group">
            <label>Category</label>
            <select class="form-control" name="category" required>
              <?php if ($categories): ?>
                <?php foreach ($categories as $category): ?>
                  <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                <?php endforeach ?>
              <?php else: ?>
                  <option value="">No Categories Found</option>
              <?php endif ?>
            </select>
          </div>
          <div class="col-sm-12 form-group">
            <label>Date</label> 
            <input type="Date" id="remind_date" name="remind_date" min="<?php echo date('Y-m-d',strtotime('+1 day')) ?>" required placeholder="Enter Expense Remind Date" class="form-control">
          </div>
          <div class="col-sm-12 form-group">
            <label>Description (optional)</label>
            <input type="text" name="description" placeholder="Enter Expense Description" class="form-control">
          </div>

          
        </div>
        
        <button type="submit" name="submitBtn" value="submit" class="btn btn-lg btn-info" id="submitBtn"><!-- <i class="fa fa-plus" aria-hidden="true"></i> --> Add Budget</button>
      </form>
      
    </div>
  </div>
  
</div>