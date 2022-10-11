<?php 

include('./views/includes/content.php');
  $data = new EmployeController();
  $deleted = $data->deletedemployes();

  $restored = $data->restoreemployes();
?>

<div class="manage container main-table table-responsive">

  <table class="table table-bordered text-center">
    <h1>List of Deleted Employes</h1>
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

      <?php foreach($deleted as $deleted_employe): ?>
      <tr>
        <td><?php echo $deleted_employe['full_name']; ?></td>
        <td><?php echo $deleted_employe['hire_date']; ?></td>
        <td><?php echo $deleted_employe['cnss_info']; ?></td>
        <td><?php echo $deleted_employe['birth_date']; ?></td>
        <td><?php echo $deleted_employe['email']; ?></td>
        <td><?php echo $deleted_employe['phone_number']; ?></td>
        <td><?php echo $deleted_employe['skills']; ?></td>
        <td><?php echo $deleted_employe['gender']; ?></td>
        <td><?php echo $deleted_employe['entity']; ?></td>
        <td>
        <form method="post" action="archive">
            <input type="hidden" name="restore" value="<?php echo $deleted_employe['id_employe'];?>">
            <button>Restore</button>
        </form>
        <form method="post" action="delete">
            <input type="hidden" name="id" value="<?php echo $deleted_employe['id_employe'];?>">
            <button>Delete</button>
        </form>
        </td>
      </tr>
      <?php endforeach; ?>
  </table>
</div>