<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GAIA Club registration</title>
   <link rel="stylesheet" href="{{ asset('/styles/nav.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/main.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/footer.css') }}">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head> 
<body id="indBody">
   <div class="card" id="indCard">
      <div class="ind-photo-wrapp" id="photoWrap">
         <img src="{{asset('/images/2.jpg')}}" class="photo"></img>
         <!--<div class="photo"></div>-->
         <div class="page">Personal Information</div>
      </div>
      <div class="form-container">
         <img src="{{asset('/images/logo2.png')}}" id="ind-logo">
         <h2>Club Registration Form</h2>
         <form id="indForm" action="#" method="post">
            <h3>Personal Info</h3>
            <label for="surName">Surname</label>
            <input type="text" id="fullName" name="fullName" placeholder="Surname" required>

            <label for="givenName">Given Names</label>
            <input type="text" id="fullName" name="fullName" placeholder="Other names" required>

            <label for="uniName">Select your University </label>
               <select class="options" id="uniName" name="uniName" placeholder="Select your University" required>
                  <optgroup>
                     <option value="" disabled selected>Select your University</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                  </optgroup>
               </select>

            <label for="faculty">Faculty/Department</label>
            <input type="text" id="faculty" name="faculty" placeholder="Faculty/Department" required>

            <label for="program">Degree Program</label>
            <input type="text" id="faculty" name="faculty" placeholder="eg. BSc Physics" required>

            <div class="ageGender">
               <div class="ageWrapper">
                  <label for="age">Age</label>
                  <input type="number" id="age" name="age"  placeholder="Enter your age" required min="10" max="99"" required>
               </div>

               <div class="genderWrapper">
                  <label for="gender">Gender</label>
                  <select class="options" id="gender" name="gender" required>
                     <optgroup>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                     </optgroup>
               </select>
               </div>
            </div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Phone number" required>

            <div class="nav">
               <button type="button"><a href="group.html" class="page-link">Back</a></button>
            
               <button type="submit"><a href="language.html" id="contButtonLink" class="page-link">Continue</a></button>
            </div>
         </form>
      </div>
   </div>
</body>
</html>