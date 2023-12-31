<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GAIA Club registration</title>
   <link rel="stylesheet" href="{{ asset('/styles/nav.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/main.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/footer.css') }}"></head> 
<body id="extraBody">
   <div class="card" id="extraCard">
      <div class="extra-photo-wrapp" id="photoWrap">
         <img src="{{asset('/images/3.jpg')}}" class="photo" id="extra-photo"></img>
         <!--<div class="photo"></div>-->
         <div class="page">Background, Interests, Skills & Contributions</div>
      </div>
      <div class="form-container">
      <img src="{{asset('/images/logo2.png')}}" id="extra-logo">
      <h2>Club Registration Form</h2>
      <form action="#" method="post">
         <h3>Background, Interests, Skills & Contributions</h3>
         <h4>Background & Interests</h4>
         <div class="extras" id="bgAndInt">
            <label for="prevExp">Previous Experience with Digital Technologies</label>
               <select class="options" id="prevExp" name="prevExp" placeholder="Select your level of experience with digital technologies" required>
                  <option value="" disabled selected>Select your level of experience with digital technologies</option>
                  <option value="none">None</option>
                  <option value="basic">Basic</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="Advanced">Advanced</option>
               </select>

            <label for="intInEarth">Specific Interest in Earth Observation and IoT</label>
            <textarea class="extended" type="text" id="intInEarth" name="intInEarth" placeholder="Describe your interest and any relevant experience or projects" required max="200" min="1"></textarea>

            <label for="reason">Why do you want to join the GAIA Club?</label>
            <textarea class="extended" type="text" id="reason" name="reason" placeholder="Provide a brief statement on your motivation to join and what you hope to achieve" required max="200" min="1"></textarea>

            <label for="reason">Personal and Professional Goals</label>
            <textarea class="extended" type="text" id="reason" name="reason" placeholder="How do you envision your involvement with the GAIA Club contributing to your personal and professional goals?" required max="200" min="1"></textarea>
         </div>

      <h4>Skills & Contributions</h4>
         <div class="extras" id="skAndCon">
            <label for="techSkills">Technical Skills</label>
            <textarea class="extended" type="text" id="techSkills" name="techSkills" placeholder="List any technical skills relevant to earth observation and IoT" required max="200" min="1"></textarea>

            <label for="nonTechSkills">Non-Technical Skills</label>
            <textarea class="extended" type="text" id="nonTechSkills" name="nonTechSkills" placeholder="Describe any other skills you bring to the team" required max="200" min="1"></textarea>
         </div>

      <h4>Group Participation</h4>
         <div class="extras" id="participation">
            <label for="role">Preferred Group Role</label>
               <select class="options" id="role" name="role" placeholder="Preferred group role" required>
                  <option value="" disabled selected>Preferred group role</option>
                  <option value="research">Research and Conceptualization</option>
                  <option value="techDev">Technical Development</option>
                  <option value="proMgmnt">Project Management</option>
                  <option value="comAndOut">Communication and Outreach</option>
               </select>
         </div>

      <h3>Additional Information</h3>
         <div class="extras" id="addInfo">
            <label for="reason">Any other information you would like to share</label>
            <textarea class="extended" type="text" id="reason" name="reason" placeholder="Provide a brief statement on your motivation to join and what you hope to achieve" required max="200" min="1"></textarea>
         </div>

         <label  id="declare"for="Declare">Declaration</label>
            <label class="container">I hereby declare that the information provided is true and accurate to the best of my knowledge. I understand that membership in the GAIA Club requires active participation and commitment
            <input type="checkbox" checked="checked" required>
            <span class="checkmark"></span>
         </label>

         <label id="date" for="currentDate">Current Date</label>
         <input type="date" id="currentDate" name="currentDate" required>

         <script>
         // JavaScript to set the current date as the default value
         document.getElementById('currentDate').valueAsDate = new Date();
         </script>

         <button type="submit" id="contButtonLink">Submit</button>
         </a>
      </form>
   </div>
</body>
</html>