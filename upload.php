<?php
    include_once 'header.php';
?>



<body>
    <section>
        <div>
            <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="file">
                 <button type="submit" name="submit">UPLOAD</button>
             </form>
        </div>
    </section>
    <section>
        <div>
            <form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit">Logout</button>
            </form>
        </div>
    </section>

    </body>









<?php
    include_once 'footer.php';
?>