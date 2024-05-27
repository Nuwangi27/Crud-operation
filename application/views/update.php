<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
    <link rel="stylesheet" href="styles.css">
   
   
<style>
.container {
    max-width:800px;
    width: 50%;
    background-color: #fff;
    padding: 20px 30px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

legend {
    font-size: 1.75rem;
    color: #343a40;
    margin-bottom: 20px;
    text-align: center;
}

.form-group label {
    font-weight: bold;
    color: #495057;
}

.form-control {
    border-radius: 0.25rem;
    border: 1px solid #ced4da;
    transition: border-color 0.3s, box-shadow 0.3s;
}

.form-control:focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

.form-group {
    margin-bottom: 1.5rem;
}

.row {
    margin-bottom: 15px;
}
body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}


.form fieldset {
    border: none;
    padding: 0;
}



.form-group {
    display: grid;
    grid-template-columns: 1fr 2fr;
    align-items: center;
    margin-bottom: 15px;
}

.control-label {
    font-weight: bold;
    color: #555;
}


.form-control {
    width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary {
    background-color: green;
    color: #fff;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

.form-buttons {
    display: flex;
    justify-content: center;
    grid-column: span 2;
    gap: 30px;
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
        <?php echo form_open("home/update/{$record->id}",['class'=>'form-horizontal']);?>
            <fieldset>
               
                <legend>Create Customer</legend>
                <div class="row">
                    <div class="form-group">
                        <label for="customerName" class="control-label">Customer Name</label>
                            <div class="col-lg-10">
                                 <?php echo form_input(['name'=>'customer_name' , 'class'=>'form-control','placeholder'=>'Customer Name','value'=>set_value('customer_name',$record->customer_name)]);?> 
                           </div>
                   </div>
                </div> 
                <div class="col-lg-6">
                <?php echo form_error('customer_name');?>
                </div>

             <div class="row">
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                      <div class="col-lg-10">
                       <?php echo form_input(['name'=>'email' , 'class'=>'form-control','placeholder'=>'Enter email','value'=>set_value('email',$record->email)]);?> 
                       </div>
                </div>
            </div>  
             <div class="col-lg-6">
                <?php echo form_error('email');?>
             </div>

             <div class="row">
                    <div class="form-group">
                     <label for="mobile" class="control-label">Mobile Number</label>
                      <div class="col-lg-10">
                      <?php echo form_input(['name'=>'mobile' , 'class'=>'form-control','placeholder'=>'Enter Mobile number','value'=>set_value(' mobile',$record->email)]);?> 
                      </div>
                   </div>
             </div>
             <div class="col-lg-6">
                <?php echo form_error('mobile');?>
             </div>  

             <div class="row">
                    <div class="form-group">
                       <label for="city" class="control-label">City</label>
                       <div class="col-lg-10">
                       <?php echo form_input(['name'=>'city' , 'class'=>'form-control','placeholder'=>'enter city','value'=>set_value('city',$record->city)]);?> 
                       </div>
                   </div>
             </div> 
             <div class="col-lg-6">
                <?php echo form_error('city');?>
             </div> 

             <div class="row">                  
                <div class="form-group">
                    <label for="country" class="control-label">Country</label>
                       <div class="col-lg-10">
                       <?php echo form_input(['name'=>'country' , 'class'=>'form-control','placeholder'=>'country','value'=>set_value('country',$record->country)]);?> 
                       </div>
                </div>
             </div>  

             <div class="col-lg-6">
                <?php echo form_error('country');?>
             </div>

                <div class="form-group form-buttons">
                    <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary']);?>
                    <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-secondary']);?>
                    
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
