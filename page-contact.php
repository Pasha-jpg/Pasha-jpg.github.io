<!DOCTYPE html>
<html lang="en">
<head>

<title>Contact</title>

</head>
<?php wp_head(); ?>
<?php get_header(); ?>


    <!--FORM-->
    <div class="grid-container" id="formcontainer">
      <form>
        
        <div class="grid-container">
          <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
              <label>Full name
                <input type="text" placeholder=".medium-6.cell">
              </label>
              <label>Email 
                <input type="text" placeholder=".medium-6.cell">
              </label>
              <label>Phone no.
                <input type="text" placeholder=".medium-6.cell">
              </label>
              <label>State
                <select>
                  <option value="NSW">NSW</option>
                  <option value="VIC">VIC</option>
                  <option value="QLD">QLD</option>
                  <option value="NT">NT</option>
                  <option value="TAS">TAS</option>
                  <option value="SA">SA</option>
                  <option value="WA">WA</option>
                </select>
              </label>
              
                Comments
                <textarea placeholder="None"></textarea>
              </label>
              <label for="attachment" class="button">Upload Attachment </label>
                  <input type="file" id="attachment" class="show-for-sr">
              
              <button class="submit success button">Submit</button>
            </div>            
          </div>
        </div>
      </form>
    </div>

    <?php get_footer(); ?>