@extends('_layouts.main')

@section('content')
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kelompok</title>
    <style>
       
        .profile {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: auto;
        }
        .member {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .member:last-child {
            border-bottom: none;
        }
        .name {
            font-weight: bold;
        }
        .id {
            color: #555;
        }
    </style>
</head>
<body>

   

    <div class="profile">
        <div class="member">
            <span class="name">Dzaky Alfarisy</span>
            <span class="id">0110123059</span>
        </div>
        <div class="member">
            <span class="name">Fadil Akbar</span>
            <span class="id">0110123147</span>
        </div>
        <div class="member">
            <span class="name">Najah</span>
            <span class="id">0110123091</span>
        </div>
        <div class="member">
            <span class="name">Gita</span>
            <span class="id">0110123023</span>
        </div>
    </div>

</body>
</html>

   
               
           
@endsection