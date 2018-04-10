<?php
    # message
    $msg = '';
    $msgClass ='';
    # chech for the submit
    if(filter_has_var(INPUT_POST, 'submit')){
        # echo 'submited';
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        # check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            # passed
            # check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                # failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert alert-dismissible alert-danger';
            } else {
                # passed
                # recipient email
                $toEmail = 'alex_zender@i.ua';
                $subject ='contact request from'.$name;
                $body = '<h2>contact request</h2>
                         <h4>name</h4><p>'.$name.'</p>
                         <h4>email</h4><p>'.$email.'</p>
                         <h4>message</h4><p>'.$message.'</p>'
                    ;
                
                # email headers
                $headers ='MIME-version: 1.0'.'\r\n';
                $headers .= 'content-type:text/html;charset=UTF-8'.'\r\n';
                # additional headers
                $headers .='from:'.$name.'<'.$email.'>'.'\r\n';

                if(mail($toEmail, $subject, $body, $headers)){
                    # email sent
                    $msg = 'your email has been sent';
                    $msgClass = 'alert alert-dismissible alert-success';
                }else {
                    $msg = 'your email was not sent';
                    $msgClass = 'alert alert-dismissible alert-danger';
                }


                # echo 'passed';
            }
            #echo 'passed';
        } else {
            # failed
            $msg = 'Please fill all fields';
            $msgClass = 'alert alert-dismissible alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel='stylesheet' href='https://bootswatch.com/4/flatly/bootstrap.min.css'>
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="index.php">Website</a>
        </li>
    </ul>
    <div class ='container'>
        <?php if($msg !=''): ?>
            <div class='alert<?php echo $msgClass; ?>'><?php echo $msg; ?> </div>
        <?php endif; ?>
        <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name='name' class="form-control" value ='<?php echo isset($_POST['name'])? $name: ''; ?>'>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name='email' class="form-control" value ='<?php echo isset($_POST['email'])? $email: ''; ?>'>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name='message' class="form-control" id="exampleTextarea" rows="3">
                    <?php echo isset($_POST['message'])? $message: ''; ?>
                </textarea>
            </div>
            <button type="submit" name='submit'class="btn btn-primary">Primary</button>
        </form>
    </div>
</body>
</html>