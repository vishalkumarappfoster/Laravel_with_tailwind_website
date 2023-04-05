<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <style>
        /* Add CSS styles for the PDF here */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
        }
        
        th, td {
            text-align: left;
            padding: 0.5rem;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1>Students List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Course</th>
                <th>Highest Qualification</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone_number }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->select_course }}</td>
                    <td>{{ $student->highest_qualification }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
