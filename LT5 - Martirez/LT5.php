<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="styles.css" rel="stylesheet"/>
    <script src="app.js"></script>
    <title>Movie Time</title>
  </head>
  
  <body>
    <div id="wrapper">
      <header>
        <div id="page-banner">
          <h1 class="title" style="color: white;">Movie Time</h1>
          <p style="color: #fff">A List of Most Favorite Horror Movies!</p><br>
          </div>
      </header>
      <div id="movie list">
        <h2 class="title">Movies to Watch</h2>
        <ul>
          <li>
            <span class="name">Friday the 13th Part VII: A New Blood</span>
            <span class="delete">Delete</span>
          </li>
          <li>
            <span class="name">Shake Rattle and Roll 8</span>
            <span class="delete">Delete</span>
          </li>
          <li>
            <span class="name">Friday the 13th Part VIII: Jason Takes Manhattan</span>
            <span class="delete">Delete</span>
          </li>
          <li>
            <span class="name">Shake Rattle and Roll 9</span>
            <span class="delete">Delete</span>
          </li>
        </ul>
      </div>
      <form id="add-movie">
        <input type="text" placeholder="Add a new movie..."/>
        <button>Add</button>
        
      </form>

    </div>
  </body>
</html>