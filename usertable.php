<?php



    // get the post record
    $ownership =$_POST['ownership'];
    $regnum =$_POST['regnum'];
    $bustype =$_POST['bustype'];
    $root =($_POST['root']);
    $seatcount =($_POST['seatcount']);
    $email =($_POST['email']);
    $password =md5($_POST['password']);
    $cpassword =md5($_POST['cpassword']);

  

  
    
    
    ?>

<html>
    
    <head>

        <style>
            .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
        </style>

    </head>

    <body>
    <table class="styled-table">
    <thead>
        <tr>
            <th>Ownership</th>
            <th>Reg No.</th>
            <th>Type</th>
            <th>Route No.</th>
            <th>Seat count</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $ownership ?> </td>
            <td> <?php echo $regnum ?> </td>
            <td> <?php echo $bustype ?> </td>
            <td> <?php echo $root ?> </td>
            <td> <?php echo $seatcount ?> </td>
            <td> <?php echo $email ?> </td>
           
        <!-- </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
        </tr> -->
        <!-- and so on... -->
    </tbody>
</table>
    </body>

</html>

