
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <style type="text/css">
.container-fluid {color:brown ;background:#716668	}
 h5{color:tomato}
 h1{color:brown}
</style>

</head>
<body>
<div class="container-fluid pt-5 w-100">
    <div class="text-center mt-3 pt-3 pb-3 ">
      <th> <h1>Contact Me</h1>
    </div>
 
<table class="table table-success table-striped">
 
  <tbody>
    <tr>
    <td><h5>Your Name :</h5></td>
   <td>
    <input type ="text" name="Textname" class="form-control" placeholder="Your Name">
</td>
</tr>
<tr>
<td><h5>Your opinion on the website:<h5> </td>
</tr>
<tr>
<td>
<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label>Very good</label>
</td>
</tr>
<tr>
<td>
<input type="radio" class="btn-check" name="btnradio" id="btnradio1"autocomplete="off" >
  <label>good</label>

</td>
</tr>

<tr>
<td>
<input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off" >
  <label >Fair</label>
</td>
</tr>
<tr>
<td><h5>Gender<h5></td>
</tr>
<tr>
<td>
<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label>Mail</label>
</td>
</tr>

<tr>
<td>
<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label >Femail</label>
</td>
</tr>

<tr>
<td>
<input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off">
  <label>Other</label>
</td>
</tr>
<tr>
<td><h5>Materal Satus:</h5></td>
<td>
</tr>
<tr>
<td>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  Materal Satus:
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">Single</a></li>
    <li><a class="dropdown-item" href="#">Marred</a></li>
    <li><a class="dropdown-item" href="#">Other</a></li>
  </ul>
</div>
</td>
</tr>
<tr>
<td><h5>You know about my website from:</h5></td>
<td>
</tr>
<tr>
<td>
<div class="dropdown">
<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
From:</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="#">internet</a></li>
    <li><a class="dropdown-item" href="#">friend</a></li>
    <li><a class="dropdown-item" href="#"> search engine</a></li>
    <li><a class="dropdown-item" href="#"> other</a></li>
  </ul>
</div>
</td>
</tr>

<tr>
<td><h5>Email :<h5></td>
<td><input type ="text" name="Textmail" class="form-control" placeholder="Email">
</td>
</tr>

<tr>
<td><h5>Subject :<h5></td>
<td><input type ="text" name="Textmail" class="form-control" placeholder="Subject">
</td>
</tr>
<tr>
<td><h5>Message :</h5></td>
<td>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>

</div>
</td>
</tr>
  </tbody>
</table>
<div class="sendtat text-center">
<button type="submit" class="btn btn-danger my-4" name="subbtn" >Submit</button>
<button type="submit" class="btn btn-danger my-4 px-4" name="setbtn">Rest</button>

</div>
</div>
<body>
</html>