import './bootstrap';
import 'jquery-ui/dist/jquery-ui';

import DataTable from 'datatables.net';
window.DataTable = DataTable;

// Sortable
$( function() {
      $("#sortable").sortable();
      $("#sortable").disableSelection();
      $('#example-table').DataTable();
});

// Custom

var content
var img = $('<img id="img">')

$("#magic").on('click', function(){
      $("#magic").off("click");
      $.ajax({
            url: "https://jsonplaceholder.typicode.com/photos/1",
            success: function( result ) {
                  content = result;
                  console.log(result);
                  $("#magic").text('Did I work?')
                  setTimeout(function(){
                        $("#magic").after(`
                              <div id="content">
                                    <br><br>
                                    <p>Oopse, forgot to add it to the DOM...Look at Console. you should see somthing like this:</p>
                                    <pre><code>
                              {
                                    "albumId": 1,
                                    "id": 1,
                                    "title": "accusamus beatae ad facilis cum similique qui sunt",
                                    "url": "https://via.placeholder.com/600/92c952",
                                    "thumbnailUrl": "https://via.placeholder.com/150/92c952"
                              }
                                    </code></pre>
                                    <p>Please click the button again, Ill Fix this...</p>
                              </div>`)
                        
                  }, 2000)
                  $("#magic").on('click', function(){
                        $('#content').append('<br><br><hr><br>');
                        $('#content').append('<p>Ok, here is the image I was trying to get ==></p>');
                        $('#content').append('<br><br><br><br>');
                        img.attr('src', content.thumbnailUrl);
                        $('body').append(img)
                        img.on('mouseenter', runAway);
                        img.on('click', function(){
                              alert('clicked!');
                        });
                        $('#content').append('<br>');
                        $('#content').append('<p>I bet you cant click the image... lol :)</p>');
                  });
            }
      });
})

function runAway()
{
    var randX = Math.floor(Math.random() * (window.innerWidth - 100));
    var randY = Math.floor(Math.random() * (window.innerHeight - 100));
    img.stop().animate({"left": randX + "px", "top": randY + "px"});

}