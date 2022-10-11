<?php 

include('./views/includes/content.php');

  $data = new EmployeController();
  $all = $data->getAllemployes();

?>

<div class="manage container main-table table-responsive">
<div style="padding-top:70px;">
  <canvas id="myChart"></canvas>
</div>
  <table class="table table-bordered text-center">
    <h1>List of Employes</h1>
      <tr>
        <td>Full Name</td>
        <td>Start date</td>
        <td>CNSS</td>
        <td>Naissance</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Skills</td>
        <td>Gender</td>
        <td>Entity</td>
        <td>Control</td>
      </tr>

      <?php foreach($all as $employe): ?>
      <tr>
        <td><?php echo $employe['full_name']; ?></td>
        <td><?php echo $employe['hire_date']; ?></td>
        <td><?php echo $employe['cnss_info']; ?></td>
        <td><?php echo $employe['birth_date']; ?></td>
        <td><?php echo $employe['email']; ?></td>
        <td><?php echo $employe['phone_number']; ?></td>
        <td><?php echo $employe['skills']; ?></td>
        <td><?php echo $employe['gender']; ?></td>
        <td><?php echo $employe['entity']; ?></td>
        <td>
        <form method="post" action="update">
            <input type="hidden" name="id" value="<?php echo $employe['id_employe'];?>">
            <button>update</button>
        </form>
        <form method="post" action="delete">
            <input type="hidden" name="id" value="<?php echo $employe['id_employe'];?>">
            <button>delete</button>
        </form>
        </td>
      </tr>
      <?php endforeach; ?>
  </table>
</div>