<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title> 
</head>
<body>
   <p style='font-size:14px;font-weight: 600; text-transform: capitalize;'>Name: {{$data['name']}}</p>
        <p style='font-size:14px;font-weight: 600;'>Email: {{$data['email']}}</p>
        <p style='font-size:14px;font-weight: 600; text-transform: capitalize;'>Phone: {{$data['phone']}}</p>
        <div style='border-left: 2px solid #008000;border-bottom: 2px solid #008000;border-right: 2px solid #008000;'>
        <p style='font-size:18px;font-weight: 600; background: green; color: #ffffff; padding: 12px;'>Message</p>
        <p style='font-size: 16px; text-align: justify; padding:12px;'>{{ $data['body'] }}</p>

</body>
</html>
