  </section>
  <footer>
    <div class="container">
      <div class="flex justify-between align-center">
        Make-It-All Helpdesk
        <nav>
          <?php
          // Adds all the pages that the user currently logged in has access to to the navigation
          foreach ($pages as $page) {
            if (in_array(strtolower($_SESSION["username"]), $page["users"])) {
              if ($page["name"] == $title)
                echo '<a href="' . $page["link"] . '" class="nav-link active">' . $page["name"] . '</a>';
              else
                echo '<a href="' . $page["link"] . '" class="nav-link">' . $page["name"] . '</a>';
            }
          }
          ?>
        </nav>
      </div>
    </div>
  </footer>
  <script>
    function searchList() {
      // Finds the search related elements on the page
      var search = document.getElementById('search').value.toLowerCase();
      var container = document.getElementById("filter-container");
      var items = container.getElementsByClassName('filter-item');
      var count = document.getElementById("filter-count");
      var total = 0;

      // Loops through every element marked as a filter item
      for (let i = 0; i < items.length; i++) {
        let value = items[i].textContent || items[i].innerText;
        // Matches the content with the applied filter and hides all the items that don't match the filter
        if (value.toLowerCase().indexOf(search) > -1) {
          items[i].style.display = "";
          total++;
        } else {
          items[i].style.display = "none";
        }
      }

      // Updates the total count on the page
      if (search.length > 0) {
        count.innerHTML = "Showing " + total + " search result(s)";
      } else {
        count.innerHTML = "";
      }
    }

    function changeTab(event, tabName) {
      // Adds the active class to the selected tab link and removes it from the rest
      var links = document.getElementsByClassName("tablink");
      for (let i = 0; i < links.length; i++) {
        links[i].className = links[i].className.replace(" active", "");
      }
      event.target.className += " active";

      // Shows the selected tab content and hides the rest of the tabs
      var tabs = document.getElementsByClassName("tab");
      for (let i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
      }
      document.getElementById(tabName).style.display = "block";
    }
  </script>
  <!-- Inter Font -->
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  </body>

  </html>