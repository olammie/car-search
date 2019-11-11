<?php
    include_once 'header.php';
?>



<body>
    <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
</body>










<?php
    include_once 'footer.php';
?>