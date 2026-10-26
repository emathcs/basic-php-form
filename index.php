<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basic PHP form</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include 'Form.php';
        $form = new Form();
        include 'Input.php';
        $input = new Input('mb-3');
        $input->setLabelClass('form-label');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php echo $form->formStart(['action' => '', 'method' => 'POST']); ?>
                    <h1>Hello, world!</h1>
                    <?php echo $input->setLabel('Name'); ?>
                    <?php echo $input->create(['type' => 'text', 'class' => 'form-control']); ?>
                    <?php echo $input->setLabel('Password'); ?>
                    <?php echo $input->create(['type' => 'password', 'class' => 'form-control']); ?>
                    <?php echo $input->setLabel(''); ?>
                    <?php echo $input->create(['type' => 'submit','name' => 'submit', 'value' =>'Submit', 'class' => 'btn btn-primary']); ?>
                    <?php echo $form->formEnd(); ?>
                </div>
            </div>
        </div>
    </body>
</html>
