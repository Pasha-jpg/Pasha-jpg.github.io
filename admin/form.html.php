<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add Review</title>
    <style type="text/css">
    textarea {
      display: block;
      width: 100%;
    }
    </style>
  </head>
  <body>
  <!--Add the ? to the action -->
    <form action="?" method="post">
      <div>
        <label for="reviewtext">Type your review here:</label>
        <textarea id="reviewtext" name="reviewtext" rows="3" cols="40"></textarea>
      </div>
      <div><input type="submit" value="Add"></div>
    </form>
  </body>
</html>
