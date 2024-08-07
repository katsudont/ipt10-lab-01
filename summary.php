<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'] ?? '';
    $middlename = $_POST['middlename'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $country_code = $_POST['country_code'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $sex = $_POST['sex'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $program = $_POST['program'] ?? '';
    $address = $_POST['address'] ?? '';
    if (empty($firstname) || empty($middlename) || empty($lastname) || empty($email)) {
        header('Location: register.php'); 
        exit();
    }
} else {
    header('Location: summary.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Summary Page</title>
    <style>
        body {
            background-color: LightSkyBlue;
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        .male {
            background-color: LightBlue;
        }
        .female {
            background-color: LightCoral;
        }
        .header-img {
            display: block;
            margin: 20px auto;
        }
    </style>
</head>
<body>

<img src="https://www.auf.edu.ph/home/images/logo2.png" alt="AUF Logo" class="header-img" />
<hr />

<h2>Registration Summary</h2>

<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>First Name:</td>
        <td class="<?php echo $sex == 'male' ? 'male' : 'female'; ?>"><?php echo htmlspecialchars($firstname); ?></td>
    </tr>
    <tr>
        <td>Middle Name:</td>
        <td class="<?php echo $sex == 'male' ? 'male' : 'female'; ?>"><?php echo htmlspecialchars($middlename); ?></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td class="<?php echo $sex == 'male' ? 'male' : 'female'; ?>"><?php echo htmlspecialchars($lastname); ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo htmlspecialchars($email); ?></td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td><?php echo htmlspecialchars($country_code . $phone_number); ?></td>
    </tr>
    <tr>
        <td>Sex:</td>
        <td><?php echo ucfirst(htmlspecialchars($sex)); ?></td>
    </tr>
    <tr>
        <td>Birthdate:</td>
        <td><?php echo htmlspecialchars($birthdate); ?></td>
    </tr>
    <tr>
        <td>Program:</td>
        <td><?php echo htmlspecialchars($program); ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo htmlspecialchars($address); ?></td>
    </tr>
</table>

</body>
</html>
