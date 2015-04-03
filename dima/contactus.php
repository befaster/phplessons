<?php include 'templates/theme/header.tpl.php' ?>
    <div class="content contactus">
        <h1>Contact Us</h1>
        <?php if (isset($_POST['username'])) : // { ?>
            <?php sendEmail($_POST['email'], $_POST['message']); ?>
            <?php echo 'Thanks for your email ' . $_POST['username']; ?>
        <?php else :  /* } else { */ ?>
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email" placeholder="test@gmail.com"
                               value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="username" placeholder="John Doe"
                               value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
        <?php endif; /* } */?>
    </div>
<?php include 'templates/theme/footer.tpl.php' ?>