<?php $this->load->view('admin/connects/headerStyle'); ?>
<?php $this->load->view('admin/connects/leftMenu'); ?>
<?php $this->load->view('admin/connects/header'); ?>



<div class="container">
    <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success') ?>
        </div>
    <?php } ?>
    <h2>User List</h2>
    
    
    
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Username</th>
<!--            <th>Password</th>-->
            <th>Status</th>
            <th>Emeliyyatlar</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($allUsers as $allUser) { ?>
            <tr>
                <td><?php echo $allUser['userName'] ?></td>
<!--                <td>--><?php //echo $allUser['password'] ?><!--</td>-->
                <td><?php echo $allUser['status'] ?></td>
                <td>update | delete</td>
            </tr>
        <?php } ?>


        </tbody>
    </table>
</div>

<?php $this->load->view('admin/connects/footer'); ?>
<?php $this->load->view('admin/connects/footerScripts'); ?>
