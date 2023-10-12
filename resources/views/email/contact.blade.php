<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpact Online Services</title>
    <style>
        .table-container {
            display: flex;
            justify-content: space-between;
        }
        .table {
            /* width: 70%;  */
            border-collapse: collapse;
        }
        .table th {
            background-color: #333;
            color: #fff;
        }
        .table td {
            background-color: #666;
            color: #fff;
        }
    </style>

</head>
<body>
<div class="table-container">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            <tr>
                <td>{{ $formData['name']}}</td>
                <td>{{ $formData['phone']}}</td>
                <td>{{ $formData['email']}}</td>
                <td>{{ $formData['subject']}}</td>
                <td>{{ $formData['message']}}</td>
            </tr>
        </table>
        
    </div>
</body>
</html>