<?php
move_uploaded_file($_FILES['file1']['tmp_name'],$_FILES['file1']['name']);
echo $_FILES['file1']['name'];