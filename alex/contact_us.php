<?php include 'templates/theme/header.tpl.php'?>
<div class="content contact_us col-md-9">
    <h1>Contact us</h1>
    <?php if (isset($_POST['username'])):?>
        <?php sendEmail($_POST['email'],$_POST['message']);?>
   <?php  echo 'Thanks for your email,  ' . $_POST['username'];?>
    <?php else: ?>
    <form class="form-horizontal" role="form" action="" method="post" style="width: 850px;padding: 5px 5px;">
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">User Name</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="username" placeholder="User name">
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" name="message" id="message"
                input type="message" class="form-control" placeholder="Your message"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Send message</button>
            </div>
    </form>
    <?php endif;?>
        </div>

        <?php include 'templates/theme/footer.tpl.php'?>
