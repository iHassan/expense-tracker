<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header text-center">
          <h3>Expense Overview</h3>
        </div>

        <?php if (isset($result) && $result): ?>
          <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
              <thead>
                <th>Amount</th>
                <th>Description</th>
                <th>Category</th>
                <th>Date</th>
                <th></th>
              </thead>
              <tbody>
                <?php foreach ($result as $exp): ?>
                  <tr>
                    <td><?php echo (!empty($exp->amount))?$exp->amount:'N/A' ?></td>
                    <td><?php echo (!empty($exp->description))?$exp->description:'N/A' ?></td>
                    <td><?php echo (!empty($exp->category_name))?$exp->category_name:'N/A' ?></td>
                    <td><?php echo (!empty($exp->expense_date))?$exp->expense_date:'N/A' ?></td>
                    <td align="center">
                      <a class="btn btn-default" href="<?php echo site_url("app/edit-expense/{$exp->expense_id}") ?>"><em class="fa fa-pencil"></em></a>
                      <!-- <a class="btn btn-danger"><em class="fa fa-trash"></em></a> -->
                    </td>
                  </tr>
                <?php endforeach ?>
                
              </tbody>
            </table>
          </div>
        <?php else: ?>

          <div class="col-md-12 text-center">
            <div class="row">
              <div class="clearfix">
                <br><br><br>
              </div>
              <p>Looks like you didn't spent your money on anything yet.</p>
              <p>Don't forget to track your budget daily by <a href="<?php echo site_url('app/new-expense') ?>">Adding Expense</a></p>
            </div>
          </div>

        <?php endif ?>

        
      </div>
    </div>
    
  </div>
</div>