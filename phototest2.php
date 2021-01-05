        <input id="search" name="search" type="number">

<table id="mytable" class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                 <th>DELETE</th>
                                                 <th>UPDATE</th>

                                            </tr>
                                        </thead>
                                      <tbody>
                                          <?php
require 'postmodel.php';
$DB = new DB();

 $posts = null;
if (isset($_GET["search"])){
     $posts = $DB->query('SELECT * FROM post where id_post = :id', array("id"=>$_GET["search"]));
} else {
      $posts = $DB->query('SELECT * FROM post');
}

 
 ?>
<?php foreach($posts as $post): ?>
    <tr>
<td><?php echo $post->id_post; ?></td>
<td><?php echo $post->description; ?></td>

<td><img style="width: 30px;" src="http://localhost/communityh/controller/images/posts/<?php echo  $post->id_post; ?>.jpg" /></td>

<td><a onClick="deletePost(<?php echo$post->id_post; ?>)" href="#">Delete</a></td>
<td><a  href="Community.php?id=<?php echo$post->id_post; ?>">Update</a></td>

</tr>
<?php endforeach; ?>

                                     
                                          
                                        </tbody>

                                        </table>

                                        
                                        
<script>
                                            
function deletePost(id){

    let form = new FormData();
    form.append("id", id);
    form.append("action", "DELETE");

    fetch("controller/postcontroller.php",{
        method:"POST",
        body:form
    }).then(()=>{
        alert("Post deleted.")
        window.location.reload();
    })
} 
document.getElementById("search").addEventListener("keyup", (ev)=>{
                if (ev.key != "Enter") return;
                window.location.href = "?search=" + document.getElementById("search").value;
                
            })
</script>