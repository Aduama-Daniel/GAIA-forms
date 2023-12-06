<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GAIA Club registration</title>
   <link rel="stylesheet" href="{{ asset('/styles/nav.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/main.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/footer.css') }}">

</head> 


<body id="groupBody">
   
   <div class="card" id="groupCard">
      <div class="photo-wrapp" id="photoWrap">
         <img src="{{asset('/images/1.jpg')}}" class="photo" id="group-photo"></img>
         

         
         <!--<div class="photo"></div>-->
         <div class="page">Group Information</div>
      </div>
      <div class="form-container">
      <img src="{{ asset('/images/logo2.png') }}" id="group-logo">


      <h2>Club Registration Form</h2>
      <form id="groupForm" action="#" method="post">
         <h3>Group Section</h3>

         <!-- <div class="form-group">
            <label for="group_membership">Are you already part of a group?</label>
            <select class="form-control" id="group_membership" name="group_membership">
                <option value="new">No, I want to create a new group</option>
                <option value="existing">Yes, I am part of an existing group</option>
            </select>
        </div> -->

         <label for="groupName">Group Name</label>
         <input type="text" id="groupName" name="groupName" placeholder="Enter your group name" required>

         <label for="numOfMembers">Number of Group Members</label>
            <select class="options" id="numOfMembers" name="numOfMembers" required>
               <optgroup>
                  <option value="" disabled selected>Select Number of Members</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
               </optgroup>
            </select>

         <label for="genderInclusive">Gender Inclusive Section</label>
         <div id="genInc">
            <label class="container">Yes, our group is gender inclusive.
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
            </label>
         </div>
                     
         <button type="submit" id="contButtonLink"><a href="individual.html" class="page-link">Continue</a></button>
      </form>
   </div>
   </div>

   
</body>
</html>