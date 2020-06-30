<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <h1>Buat Account Baru!</h1>
  <h3>Sign Up Form</h3>
  <form action="/welcome" method="post">
    @csrf
    <label for="fName">First Name:</label>
    <br><br>
    <input type="text" name="fName" id="fName">
    <br><br>
    <label for="lName">Last Name:</label>
    <br><br>
    <input type="text" name="lName" id="lName">
    <br><br>
    <label for="gender">Gender:</label>
    <br><br>
    <input type="radio" id="gender" value="m">Male
    <br>
    <input type="radio" id="gender" value="f">Female
    <br>
    <input type="radio" id="gender" value="o">Other
    <br><br>
    <label for="nationality">Nationality:</label>
    <br><br>
    <select>
      <!-- <optgroup label="Asia"> -->
      <option value="id">Indonesian</option>
      <option value="sg">Singaporean</option>
      <option value="my">Malaysian</option>
      <option value="au">Australian</option>
      <!-- </optgroup> -->
      <!-- <optgroup label="Europe"> -->
      <!-- <option value="en">British</option>
        <option value="fr">French</option> -->
      <!-- </optgroup> -->
    </select>
    <br><br>
    <label for="lang">Language Spoken:</label>
    <br><br>
    <input type="checkbox" id="lang" value="idn">Bahasa Indonesia
    <br>
    <input type="checkbox" id="lang" value="eng">English
    <br>
    <input type="checkbox" id="lang" value="other">Other
    <br><br>
    <label for="bio">Bio:</label>
    <br><br>
    <textarea name="bio" id="bio" rows="8" cols="27"></textarea>
    <br>
    <input type="submit" name="btn" value="Sign Up">
  </form>
</body>

</html>
