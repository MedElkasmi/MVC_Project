<?php 

include('./views/includes/content.php');

$data = new AdminController();
$admins = $data->admin_show();

?>

<div class="manage container main-table table-responsive">

  <table class="table table-bordered text-center">
    <h1>List of Admins</h1>
      <tr>
        <td>Admin</td>
        <td>email</td>
        <td>created_at</td>
        <td>Action</td>
      </tr>

      <?php foreach($admins as $admin): ?>
      <tr>
        <td><?php echo $admin['username']; ?></td>
        <td><?php echo $admin['created_at']; ?></td>
        <td><?php echo $admin['created_at']; ?></td>
        <td>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $admin['id'];?>">
            <button>update</button>
        </form>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $admin['id'];?>">
            <button>delete</button>
        </form>
        </td>
      </tr>
      <?php endforeach; ?>
  </table>
</div>