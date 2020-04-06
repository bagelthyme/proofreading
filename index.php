<!DOCTYPE html>
<html>
  <?php include 'header.php';?>
  <body>
    <div id="scrollUp">
      <i class="fas fa-arrow-circle-up fa-5x"></i>
    </div>
    <div class="grid-container">
      <?php include 'navigation.php';?>
      
      <div class="grid-item hero">
        <button id="exploreButton">EXPLORE</button>
      </div>
      <div class="grid-item option-container">
        <div class="grid-box1 service basic">
          <h4 class="edit"><a href="basic.php">Basic Editing </a></h4>
          <!-- <img src="images/legs-book.jpg" alt="christmas" width="100%" height="100%"> -->
        </div>
        <div class="grid-box2 service extended">
          <h4 class="edit"><a href="extended.html">Extended Editing</a></h4>
          <!-- <img src="images/treebook.jpg" alt="christmas" width="100%" height="100%"> -->
        </div>
        <div class="grid-box3 service resume">
          <h4 class="edit"><a href="resume.html">Resume Editing</a></h4>
          <!-- <img src="images/night.jpg" alt="kid" width="100%" height="100%"> -->
        </div>
      </div>
      <div class="grid-item" id="frequently">
        <h1>Frequently Asked Questions</h1>
        <div class="backOpacity faq">
          <!-- <p class="faqText">What file format should I submit my paper in?<br>
            -I prefer Microsoft Word, but PDF also works<br>
            How long will it take for you to get back to me?<br>
            -Usually two weeks<br>
            How will you make your corrections?<br>
            -Microsoft Words documents will have<br>
            document component in the margins.
            I prefer to convert PDF documents to Word so <br>
            I can use the same functionalitythere.</p> -->
          <ul>
            <li>
              What file format should I submit my paper in?
              <ul>
                <li>I prefer Microsoft Word, but PDF also works</li>
              </ul>
            </li>
            <br>
            <li>
              How long will it take for you to get back to me?
              <ul>
                <li>Usually two weeks</li>
              </ul>
            </li>
            <br>
            <li>
              How will you make your corrections?
              <ul>
                <li>Microsoft Words documents will have<br>
                  document comments in the margins</li>
                <li>I prefer to convert PDF documents to Word so <br>
                  I can use the same functionality there.</li>
              </ul>
            </li>

          </ul>
        </div>

      </div>
      <div class="grid-item rating-container">
        <div class="grid-rating1">
          <img src="images/girl2.jpg" class="rating-image">
          <h5 class="rating-name">Joe Andersen</h4>
          <p class="rating-date">01-20-2020</p>
          <p class="rating-star">	&#9733; &#9733;	&#9733;	&#9733;	&#9733;</p>
          <p class="rating-text">Thank you!</p>
        </div>
        <div class="grid-rating2">
          <img src="images/girl2.jpg" class="rating-image">
          <h5 class="rating-name">Joe Andersen</h4>
          <p class="rating-date">01-20-2020</p>
          <p class="rating-star">	&#9733; &#9733;	&#9733;	&#9733;	&#9733;</p>
          <p class="rating-text">Thank you!</p>
        </div>
        <div class="grid-rating3">
          <img src="images/girl2.jpg" class="rating-image">
          <h5 class="rating-name">Joe Andersen</h4>
          <p class="rating-date">01-20-2020</p>
          <p class="rating-star">	&#9733; &#9733;	&#9733;	&#9733;	&#9733;</p>
          <p class="rating-text">Thank you!</p>
        </div>
        <div class="grid-rating4">
          <img src="images/girl2.jpg" class="rating-image">
          <h5 class="rating-name">Joe Andersen</h4>
          <p class="rating-date">01-20-2020</p>
          <p class="rating-star">	&#9733; &#9733;	&#9733;	&#9733;	&#9733;</p>
          <p class="rating-text">Thank you!</p>
        </div>
        <div class="grid-rating5">
          <img src="images/girl2.jpg" class="rating-image">
          <h5 class="rating-name">Joe Andersen</h4>
          <p class="rating-date">01-20-2020</p>
          <p class="rating-star">	&#9733; &#9733;	&#9733;	&#9733;	&#9733;</p>
          <p class="rating-text">Thank you!</p>
        </div>
        <div class="grid-rating6">
          <img src="images/girl2.jpg" class="rating-image">
          <h5 class="rating-name">Joe Andersen</h4>
          <p class="rating-date">01-20-2020</p>
          <p class="rating-star">	&#9733; &#9733;	&#9733;	&#9733;	&#9733;</p>
          <p class="rating-text">Thank you!</p>
        </div>

      </div>
      <div id="about" class="grid-item author-container">
        <div class="grid-box6">
          <img id="author" src="images/author.jpg">
        </div>
        <div class="grid-box7">
          <h1>php test</h1>
          <h1>About Me</h1>
          <p>I have been interested in writing all my life. I enjoy finding errors in my
morning newspaper. As the quote from the Dark Knight movie goes, “If you
are good at something, never do it for free.” Now that I am out of college and
have a day job, I am able to help doing what I love for cheap price. </p>
          <button>Contact me</button>
        </div>
      </div>
      <div class="grid-item contact-container">
        <div class="grid-box4">

          <form action="contact.php" method="POST">
            <h2 id="h2Contact">Contact me</h2>
            <div class="title">
              <i class="fas fa-pencil-alt"></i>
            </div>

            <div class="info">
              <input class="fname" type="text" name="name" placeholder="Full name">
              <input type="text" name="email" placeholder="Email">
              <input type="text" name="phone" placeholder="Phone number">

              <select name="type">
                <option value="course-type" selected>Question type</option>
                <option value="short-courses">General</option>
                <option value="featured-courses">Refund</option>
                <option value="undergraduate">Special Request</option>
              </select>

              <textarea name='message'>Your Message...</textarea>
            </div>

            <button id="submitButton" type="submit" href="/">Submit</button>
          </form>


        </div>

        <div class="grid-box5"></div>
        <div></div>

      </div>
      <div class="grid-item">
        <footer>
          <div>
            <p>&copy; 2020 Proofreading Inc</p>
            <p><a href="#">Privacy</a></p>
            <p><a href="#">Terms</a></p>
          </div>
        </footer>
      </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/nav.js"></script>
  </body>
</html>
