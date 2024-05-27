<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <link rel="stylesheet" href="styles.css">
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        legend {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        /* Form Styles */
        .form-horizontal .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .control-label {
            font-weight: bold;
            color: #555;
            margin-right: 10px;
            flex: 0 0 150px; /* Fixed width for labels */
        }

        .form-control {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: none;
            box-shadow: 0 0 5px rgba(102, 175, 233, 0.6);
        }

        .error-wrapper {
            margin-left: 10px;
            flex: 0 0 250px;
            color: red;
            padding: 5px;
        
           
        }

        /* Buttons */
         /* Buttons */
         .form-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form-buttons .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #38761d;
            color: #fff;
            margin-right: 10px;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 15px;
            }

            .form-horizontal .form-group {
                flex-direction: column;
                align-items: flex-start;
            }

            .control-label {
                width: 100%;
                margin-bottom: 5px;
            }

            .form-control {
                width: 100%;
            }

            .error-wrapper {
                margin-top: 5px;
                margin-left: 0;
                width: 100%;
            }

            .form-buttons {
                flex-direction: column;
                align-items: center;
            }

            .form-buttons .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
     <script>
        function resetFormAndPlaceholders() {
           
            var inputs = document.querySelectorAll('.form-control');
            inputs.forEach(function(input) {
               
                input.value = '';
                input.placeholder = '';
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <?php echo form_open('/home/save', ['class' => 'form-horizontal']); ?>
        <fieldset>
            <legend>Create Customer</legend>

            <div class="form-group">
                <label for="customerName" class="control-label">Customer Name</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'customer_name', 'class' => 'form-control', 'placeholder' => 'Customer Name', 'value' => set_value('customer_name')]); ?>
                </div>
                <div class=" error-wrapper">
                    <?php echo form_error('customer_name'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter email', 'value' => set_value('email')]); ?>
                </div>
                <div class=" error-wrapper">
                    <?php echo form_error('email'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="mobile" class="control-label">Mobile Number</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'mobile', 'class' => 'form-control', 'placeholder' => 'Enter Mobile number', 'value' => set_value('mobile')]); ?>
                </div>
                <div class=" error-wrapper">
                    <?php echo form_error('mobile'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="city" class="control-label">City</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'city', 'class' => 'form-control', 'placeholder' => 'Enter city', 'value' => set_value('city')]); ?>
                </div>
                <div class=" error-wrapper">
                    <?php echo form_error('city'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="country" class="control-label">Country</label>
                <div class="col-lg-10">
                    <?php echo form_input(['name' => 'country', 'class' => 'form-control', 'placeholder' => 'Country', 'value' => set_value('country')]); ?>
                </div>
                <div class=" error-wrapper">
                    <?php echo form_error('country'); ?>
                </div>
            </div>

            <div class="form-group form-buttons">
                <?php echo form_submit(['value' => 'Submit', 'class' => 'btn btn-primary']); ?>
                <?php echo form_reset(['value' => 'Reset', 'class' => 'btn btn-secondary']); ?>
            </div>
        </fieldset>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
