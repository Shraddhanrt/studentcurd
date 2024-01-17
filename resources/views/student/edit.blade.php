<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Student Form</title>
</head>
<body>
    <div class="container">
        <h1>Student Information Form Update</h1>
        <form action="" method="post">
         @csrf
            <label for="studentName">Name:</label>
            <input type="text" name="name" value="{{$student->name}}" required>

            <label for="studentAddress">Address:</label>
            <input  name="address"  value="{{$student->address}}" required/>
            <label for="studentPhone">Mobile:</label>
            <input type="number" name="mobile"  value="{{$student->mobile}}" pattern="[0-9]{10}" required>
            
            <button type="submit">Submit</button>
           
        </form>
    </div>
</body>
</html>
