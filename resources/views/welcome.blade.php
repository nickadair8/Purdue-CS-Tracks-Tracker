<!DOCTYPE html>
<html>
    <head>
        <title>Purdue CS Schedule Manager</title>
        <link rel="stylesheet" href="{{ URL::asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/general.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/track_grid.css') }}">    
        <link rel="stylesheet" href="{{ URL::asset('css/semester_grid.css') }}"> 
        <link rel="stylesheet" href="{{ URL::asset('css/clear_grid.css') }}">
    </head>
    <body>
       <div class="header">
            <div class="welcome">Create a Personalized CS Schedule</div>
       </div> 
       
       <div class="select_tracks">
            Select Desired Track(s)
       </div>

       <div class="track_grid1">
            <button class="Software_button">
                Software Engineering
            </button>
            <button class="Systems_Eng_button">
                Systems Engineering
            </button>
            <button class="MI_button">
                Machine Intelligence
            </button>
            <button class="Cyber_button">
                Cybersecurity
            </button>
            <button class="Langauges_button">
                Programming Langauges
            </button>
       </div>
       
       <div class="track_grid2">
        <button class="CompSci_Eng">
            CompSci / Engineering
        </button>
        <button class="graphics">
            Computer Graphics
        </button>
        <button class="database">
            Database / Information
        </button>
        <button class="algorithms">
            Algorithmic Foundations
        </button>
       </div>

       
       <div class="semester_grid">
            <div class="sem3">
                <p class="sem_head">Semester 3</p>
                <p class="credit_hours">Total:</p>
            </div>
            <div class="sem4">
                <p class="sem_head">Semester 4</p>
                <p class="credit_hours">Total:</p>
            </div>
            <div class="sem5">
                <p class="sem_head">Semester 5</p>
                <p class="credit_hours">Total:</p>
            </div>
            <div class="sem6">
                <p class="sem_head">Semester 6</p>
                <p class="credit_hours">Total:</p>
            </div>
            <div class="sem7">
                <p class="sem_head">Semester 7</p>
                <p class="credit_hours">Total:</p>
            </div>
            <div class="sem8">
                <p class="sem_head">Semester 8</p>
                <p class="credit_hours">Total:</p>
            </div>
       </div>

       <div class="clear_grid">
            <button class="clear_all">
                Clear All
            </button>
            <button class="clear_last">
                Clear Last
            </button>
       </div>
    </body>
</html>