<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume_SIA102</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
        }
        .resume-container {
            background-color: white;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border: 1px solid #ffffff;
        }
        h1, h2 {
            color: #333;
        }
        h1 {
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        .section {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 15px;
            background-color: #ffffff;
        }
        .section h2 {
            margin-top: 0;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 15px;
            background-color: #f9f9f9;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #333;
        }
        .header-text {
            flex-grow: 1;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="resume-container">
        <header>
            <img src="/pic.jpg" alt="Your Profile Picture" class="profile-picture">
            <div class="header-text">
                <h1>{{$resume["name"]}}</h1>
                <p>Email: {{$resume["email"]}} | Cellphone Number: {{$resume["phone"]}} | Address: {{$resume["address"]}}</p>
            </div>
        </header>

        <section class="section">
            <h2>Objective</h2>
            <p>{{$resume["objective"]}}</p>
        </section>

        <section class="section">
            <h2>Education Background</h2>
            <p><strong>College</strong></p>
            @php
                $educations = explode(",", $resume["education"]);
            @endphp
            <p>{{$educations[0]}}</p>
            <p>{{$educations[1]}}</p>
            <p><strong>Highschool</strong></p>
            <p>{{$educations[2]}}</p>
            <p>{{$educations[3]}}</p>
            <p>{{$educations[4]}}</p>
            <p><strong>Elementary</strong></p>
            <p>{{$educations[5]}}</p>

        </section>

        <section class="section">
            <h2>Skills</h2>
            <ul>
            @php
                $skills = explode(",", $resume["skills"]);
            @endphp
                <li>{{$skills[0]}}</li>
                <li>{{$skills[1]}}</li>
                <li>{{$skills[2]}}</li>
                <li>{{$skills[3]}}</li>
            </ul>
        </section>
        <section class="section">
            <h2>Hobbies</h2>
            <ul>
            @php
                $hobbies = explode(",", $resume["hobbies"]);
            @endphp
                <li>{{$hobbies[0]}}</li>
                <li>{{$hobbies[1]}}</li>
                <li>{{$hobbies[2]}}</li>
                <li>{{$hobbies[3]}}</li>
            </ul>
        </section>
    </div>
</body>
</html>