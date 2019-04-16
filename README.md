# finalProject

URL: https://breadsite.000webhostapp.com/index.php

--FILES--

Index: Only uses html. Each panel is used to direct to a different page on the site.

Catalog: Both catalog types use a php loop to fill in each catalog entry dynamically from an SQL database. Each catalog entry has - and + buttons that use javascript to add or take away from "order" numbers on the right. When submit is clicked, the quantities in each number get sent to order.php

Discussion: Each comment on the page is filled in dynamically from a database. When a new comment is entered, a php function is used to generate a new userID, and that ID, along with the entered name and comment, are sent and stored into the database. A javascript function is then used to display the new message.

Order: If this page receives a post, the numbers get filled in with their respective post quantitiies. If no post is found, each number is filled in with a 0. Once submit is clicked, the values for the text boxes and numbers are sent to a simple post screen, showing the values for each. 


--ADDITIONAL--