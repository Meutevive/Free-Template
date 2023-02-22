  <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

          <h1 id="fh5co-logo"><a href="index.php">Marble</a></h1>
          <nav id="fh5co-main-menu" role="navigation">
                  <ul>
                          <li class="fh5co-active"><a href="index.php">Home</a></li>
                          <li><a href="blog.php">Blog</a></li>
                          <li><a href="about.php">About</a></li>
                          <li><a href="contact.php">Contact</a></li>
                          <?php
                                $createArticle = "createArticle.php";
                                $connection = "login.php";
                                if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                                        echo "<li><a href=$createArticle>créer une article</a></li>";
                                } else {
                                        echo "<li><a href=$connection>Connection</a></li>";
                                }
                                ?>

                  </ul>
          </nav>

          <div class="fh5co-footer">
                  <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
                  <ul>
                          <li><a href="#"><i class="icon-facebook2"></i></a></li>
                          <li><a href="#"><i class="icon-twitter2"></i></a></li>
                          <li><a href="#"><i class="icon-instagram"></i></a></li>
                          <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                  </ul>
          </div>

  </aside>