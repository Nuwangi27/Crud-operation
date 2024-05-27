<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CodeIgniter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        #container {
            text-align: center;
            padding: 50px 0;
            background-color: #343a40;
            color: white;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
        }

        table.form {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table.form th, table.form td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        table.form th {
            background-color: #20124d;
            color: white;
            font-weight: bold;
        }

        table.form tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table.form tbody tr:hover {
            background-color: #f1f1f1;
        }

        table.form tbody tr th {
            background-color: #f8f9fa;
        }
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            text-decoration: none;
            margin: 0 5px;
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            color: #fff;
            background-color: #218838;
            border-color: #1e7e34;
        }

        .update {
            color: #fff;
            background-color: #3d85c6;
            border-color: #3d85c6;
        }

        .update:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }
        .delete {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .delete:hover {
            color: #fff;
            background-color: #c82333;
            border-color: #bd2130;
        }


        @media (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }

            table.form th, table.form td {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Welcome to CodeIgniter!</h1>
    </div>
    <div class="container">
    <?php if($error=$this->session->flashdata('response')): ?>
        <div class="row">
            <?php echo $error;?>
        </div>
        <?php endif;?>

        
        
        <div class="row">
        <?php echo anchor("home/create",'Create',['class'=>'btn btn-success']);?>
        </div>
        <table class="form">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Email</th>  
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Country</th> 
                    <th> Update Operation</th>
                    <th>Delete Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($records)): ?>
                    <?php foreach ($records as $record): ?>
                        <tr>
                            <td><?php echo $record->customer_name; ?></td>
                            <td><?php echo $record->email; ?></td>
                            <td><?php echo $record->mobile; ?></td>
                            <td><?php echo $record->city; ?></td>
                            <td><?php echo $record->country; ?></td>
                            <td><?php echo anchor("home/edit/{$record->id}",'Update',['class'=>'btn update']);?></td>
                            <td><?php echo anchor("home/delete/{$record->id}",'Delete',['class'=>'btn delete']);?></td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No records found!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>    
    </div>
</body>
</html>
