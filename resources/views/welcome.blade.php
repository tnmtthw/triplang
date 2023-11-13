<!DOCTYPE html>
<html>
<head>
    <title>Fortune MT.</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/dp.jpg') }}">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  * {
    margin: 0;
    padding: 0;
  }

  .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
  }

  .rate:not(:checked) > input {
    position: absolute;
    top: -9999px;
  }

  .rate:not(:checked) > label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 30px;
    color: #ccc;
  }

  .rate:not(:checked) > label:before {
    content: "★ ";
  }

  .rate > input:checked ~ label {
    color: #ffc700;
  }

  .rate:not(:checked) > label:hover,
  .rate:not(:checked) > label:hover ~ label {
    color: #deb217;
  }

  .rate > input:checked + label:hover,
  .rate > input:checked + label:hover ~ label,
  .rate > input:checked ~ label:hover,
  .rate > input:checked ~ label:hover ~ label,
  .rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
  }

  .custom-img {
    width: 30%;
  }

  /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>

<body>
  <div style="display: flex; flex-direction: column; align-items: center;">
    <h1>Please rate my handsomeness on a scale of 1 to 5 stars.</h1>
    <div class="rate">
      <input type="radio" id="star5" name="rate" value="5" />
      <label for="star5" title="text">5 stars</label>
      <input type="radio" id="star4" name="rate" value="4" />
      <label for="star4" title="text">4 stars</label>
      <input type="radio" id="star3" name="rate" value="3" />
      <label for="star3" title="text">3 stars</label>
      <input type="radio" id="star2" name="rate" value="2" />
      <label for="star2" title="text">2 stars</label>
      <input type="radio" id="star1" name="rate" value="1" />
      <label for="star1" title="text">1 star</label>
    </div>
    <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
    <br>
    <div id="message" style="display: none;"></div>
    <img id="uploadedImage" class="img-fluid custom-img" src="{{ asset('images/IMG_4528as.png') }}" style="display: none;">
  </div>

  <script>
    document.getElementById("submitBtn").addEventListener("click", function () {
      const selectedRating = document.querySelector(".rate input:checked");
      if (selectedRating) {
        const ratingValue = selectedRating.value;
        document.getElementById("message").innerText = "You rated 5 stars. THANK YOU!";
        document.getElementById("message").style.display = "block";
        document.getElementById("uploadedImage").style.display = "block"; // Show the image
      } else {
        alert("Please select a rating before submitting.");
      }
    });
  </script>
</body>

</html>
