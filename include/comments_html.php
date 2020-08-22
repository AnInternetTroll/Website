                    <!--Comments-->
                    <hr />
                    <h1>Comments</h1>
                    <form action="" method="POST" class="form-group">
                        Name: <br><input type="text" name="name" class="form-control mb-2 mr-sm-2" placeholder="Your name, or someone elses, I don't care" required>
                        Comment: <br><textarea name="Comment" class="form-control mb-2 mr-sm-2" placeholder="Write something" required></textarea><br>
                        <!--<input type="submit" name="Post comment">-->
                        <input type="radio" id="Markdown" name="phraser" value="Markdown">
                        <label for="Markdown">Markdown</label><br>
                        <input type="radio" id="BBCode" name="phraser" value="BBCode">
                        <label for="BBCode">BBCode</label><br>
                        <button type="submit" name="Post comment" class="btn btn-outline-primary">Submit</button>
                    </form>
                    <hr />
                    <h2>Other comments</h2>
                    <div class="comment_section"></div>
                    <?php include "comments.php"; ?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

                    <br />